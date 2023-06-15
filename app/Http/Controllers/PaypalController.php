<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** configurar o contexto da API do PayPal **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * Show the application paywithpaypal page.
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }

    /**
     * Store payment details with PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $carts = session()->get('cart');
        $items = [];

        foreach ($carts as $cart) {
            $item = new Item();
            $item->setName($cart['name'])
                ->setCurrency('BRL')
                ->setQuantity($cart['amount'])
                ->setPrice($cart['price']);
            $items[] = $item;
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $amount = new Amount();
        $amount->setCurrency('BRL')
            ->setTotal(0);

        foreach ($carts as $cart) {
            $itemTotal = $cart['amount'] * $cart['price'];
            $amount->setTotal($amount->getTotal() + $itemTotal);
        }

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('addmoney.paywithpaypal');
            } else {
                \Session::put('error', 'Some error occurred, sorry for the inconvenience');
                return Redirect::route('addmoney.paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** adicionar ID de pagamento à sessão**/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirecionar para oPayPal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('addmoney.paywithpaypal');
    }

    public function getPaymentStatus(Request $request)
    {
        $user = Auth::user();

        $carts = session()->get('cart');
        $items = [];

foreach ($carts as $cart) {
    $item = [
        'name' => $cart['name'],
        'quantity' => $cart['amount'],
        'price' => $cart['price'],
        'total' => $cart['amount'] * $cart['price'],
    ];

    $items[] = $item;
}
        /** Obtenha o ID de pagamento da sessão antes de limpá-la **/
        $payment_id = Session::get('paypal_payment_id');

        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error', 'Payment failed');
            return redirect()->route('addmoney.paywithpaypal');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        /** Crie o objeto PaymentExecution com ID do pagador para executar o pagamento **/
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));

        /** Executar o pagamento **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            $transactions = $result->getTransactions();
            if (!empty($transactions)) {
                $transaction = $transactions[0];
                $relatedResources = $transaction->getRelatedResources();
                if (!empty($relatedResources)) {
                    $sale = $relatedResources[0]->getSale();
                    if (!empty($sale)) {
                        // Salvar as informações no array $customerOrder
                        $customerOrder = [
                            'reference' => $sale->getId(),
                            'state' => $sale->getState(),
                            'exchange_rate' => $sale->getExchangeRate(),
                            'parent_payment' => $sale->getParentPayment(),
                            'payment_mode' => $sale->getPaymentMode(),
                            'store_id' => 1,
                            'items' => json_encode($items),
                        ];

                        // Salvar as informações no banco de dados ou fazer o que for necessário
                        $order=$user->customerorder()->create($customerOrder);

                        $order->stores()->sync($stores);
                        /** Limpe o ID de pagamento da sessão **/
                        Session::forget('paypal_payment_id');

                        session()->forget('cart');

                         return redirect()->route('customer.invoice.index',$order->reference);
                    }
                }
            }
        }

        \Session::put('error', 'Payment failed');

        /** Limpe o ID de pagamento da sessão **/
        Session::forget('paypal_payment_id');

        /** Limpar a sessão do carrinho **/
        Session::forget('cart');

        return Redirect::route('addmoney.paywithpaypal');
    }
}

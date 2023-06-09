<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'nullable',
            'phone' => 'nullable',
            'mobile_phone' => 'nullable',
            'slug' => 'nullable',
            'logo'=>'image|mimes:jpeg,png,jpg',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'O campo nome é obrigatório.',
            'name.unique' => 'Já existe uma loja com esse nome.',
            'logo.image' => 'O arquivo não é uma imagem válida.',
        ];
    }
}

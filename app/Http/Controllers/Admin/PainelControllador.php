<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelControllador extends Controller
{
   public function index(){
    return view('admin.dashboard');
   }
}
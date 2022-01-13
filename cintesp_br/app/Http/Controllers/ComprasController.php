<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function list(){
        return view('site.compras.list');
    }
    public function register(){
        return view('site.compras.register');
    }
   
}

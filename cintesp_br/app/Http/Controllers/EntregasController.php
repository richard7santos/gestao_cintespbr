<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregasController extends Controller
{
    public function list(){
        return view('site.entregas.list');
    }
    public function register(){
        return view('site.entregas.register');
    }
   
}

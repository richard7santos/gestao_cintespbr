<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolsistasController extends Controller
{
    public function list(){
        return view('site.bolsistas.list');
    }
    public function register(){
        return view('site.bolsistas.register');
    }
   
}

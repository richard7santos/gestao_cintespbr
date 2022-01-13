<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    public function list(){
        return view('site.projetos.list');
    }
    public function register(){
        return view('site.projetos.register');
    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function list(){
        return view('site.usuarios.list');
    }
    public function register(){
        return view('site.usuarios.register');
    }
}

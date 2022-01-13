<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//rotas usuários
Route::prefix('usuarios')->group(function(){
    Route::get('/list', 'UsuariosController@list')->name('usuarios.list');
    Route::get('/registrar', 'UsuariosController@register')->name('usuarios.register');
});

//rotas projetos
Route::prefix('projetos')->group(function(){
    Route::get('/registrar', 'ProjetosController@register')->name('projetos.register');
    Route::get('/list', 'ProjetosController@list')->name('projetos.list');
});

//rotas Entregas
Route::prefix('entregas')->group(function(){
    Route::get('/registrar', 'EntregasController@register')->name('entregas.register');
    Route::get('/list', 'EntregasController@list')->name('entregas.list');
});

//rotas Bolsistas
Route::prefix('bolsistas')->group(function(){
    Route::get('/registrar', 'BolsistasController@register')->name('bolsistas.register');
    Route::get('/list', 'BolsistasController@list')->name('bolsistas.list');
});

//rotas Compras
Route::prefix('compras')->group(function(){
    Route::get('/registrar', 'ComprasController@register')->name('compras.register');
    Route::get('/list', 'ComprasController@list')->name('compras.list');
});

Route::fallback(function(){
    echo 'Iiii, deu ruim... está página não existe!! <a href="'.route('/').'"> Clique aqui</a>"';
});
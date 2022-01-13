@extends('site.layouts.base')

@section('conteudo')
<h1> Listagem de Usuários aqui</h1>
<a href=" {{ Route('usuarios.register')}}">Novo Usuário</a>
@endsection
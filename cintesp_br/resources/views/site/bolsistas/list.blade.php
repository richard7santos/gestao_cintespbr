@extends('site.layouts.base')

@section('conteudo')
<h1>Listagem de Bolsistas aqui</h1>
<a href=" {{ Route('bolsistas.register')}}">Novo Bolsista</a>
@endsection
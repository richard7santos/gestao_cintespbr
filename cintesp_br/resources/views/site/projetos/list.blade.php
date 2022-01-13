@extends('site.layouts.base')

@section('conteudo')
<h1>Listagem de projetos aqui</h1>
<a href=" {{ Route('projetos.register')}}">Novo Projeto</a>
@endsection
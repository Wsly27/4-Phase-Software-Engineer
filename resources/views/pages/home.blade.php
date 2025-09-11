@extends('layouts.app')

@section('title', 'Home')

@section('conteudo')
<div class="container my-5 text-center">
    <h1 class="mb-4">Bem vindo ao site de Gestão Empresarial</h1>
    <p class="lead mb-4">Aqui temos o melhor para sua empresa!</p>

    <a href="{{ route('sobre') }}" class="btn btn-primary btn-lg" style="background-color: #000000;">
        Sobre
    </a>
</div>
@endsection

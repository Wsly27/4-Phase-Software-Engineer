@extends('layouts.app')

@section('title', 'Home')

@section('conteudo')
<div class="container my-5 text-center">
    <h1 class="mb-4">Bona Store 3</h1>
    <p class="lead mb-4">Aqui temos qualidade e atendimento pra você!</p>

    <a href="{{ route('sobre') }}" class="btn btn-primary btn-lg" style="background-color: #000000;">
        Sobre
    </a>
</div>
@endsection

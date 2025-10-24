@extends('layouts.app')

@section('title', $produto['nome'] ?? 'Produto')

@section('conteudo')
<div class="container my-5">
    @if ($produto)
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <img src="{{ asset('storage/' . $produto['imagem']) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title text-center mb-3">{{ $produto['nome'] }}</h2>
                    <p class="card-text text-center mb-4">{{ $produto['descricao'] }}</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary mt-3 text-center d-inline-block">
                    Voltar para a lista
                </a>
                </div>
            </div>
        </div>
    </div>
    @else
        <h1 class="text-center text-danger">Produto não encontrado</h1>
    @endif
</div>
@endsection

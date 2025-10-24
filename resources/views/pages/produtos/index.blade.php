@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('conteudo')

<div class="container my-5">
    <div class="row">
        @forelse ($produtos as $produto)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" style="height: 200px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text flex-grow-1">{{ $produto->descricao }}</p>
                        <p class="card-text fw-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary mt-auto">Comprar</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="lead">Nenhum produto recebido ainda.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection

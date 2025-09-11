@php
    $produtos = [
        1 => [
            'nome' => 'Subnautica 2',
            'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg1vBvLv1x5UOjXR6A5RfLGQ4rp04Sbq4rdQ&s',
            'descricao' => 'Subnautica 2.'
        ],
        2 => [
            'nome' => 'GTA VI',
            'imagem' => 'https://upload.wikimedia.org/wikipedia/pt/4/46/Grand_Theft_Auto_VI.png',
            'descricao' => 'Descrição do GTA 6.'
        ],
        3 => [
            'nome' => 'Plants VS Zombies Garden Warfare 2',
            'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkSP-4KPDzR2riNV9HdCt_b6KL_Jh6P6n-7A&s',
            'descricao' => 'Descrição braba.'
        ],
    ];

    $id = $id ?? 1;

    $produto = $produtos[$id] ?? null;
@endphp

@extends('layouts.app')

@section('title', $produto['nome'] ?? 'Produto')

@section('conteudo')
<div class="container my-5">
    @if ($produto)
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <img src="{{ $produto['imagem'] }}" alt="{{ $produto['nome'] }}" class="card-img-top" style="height: 350px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title text-center mb-3">{{ $produto['nome'] }}</h2>
                    <p class="card-text text-center mb-4">{{ $produto['descricao'] }}</p>
                    <a href="{{ url('/produtos') }}"<x-botao type="btn btn-dark">Voltar para a lista</x-botao></a>
                </div>
            </div>
        </div>
    </div>
    @else
        <h1 class="text-center text-danger">Produto não encontrado</h1>
    @endif
</div>
@endsection

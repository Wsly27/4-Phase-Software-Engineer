@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('conteudo')
<div class="container my-5">
    <h1 class="mb-4">Lista de Produtos</h1>
    <ul class="list-group">
        <x-card-produto
            nome="Subnautica 2" 
            imagem="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg1vBvLv1x5UOjXR6A5RfLGQ4rp04Sbq4rdQ&s" 
            :rota="route('produtos.show', 1)" 
        />
        <x-card-produto
            nome="GTA VI" 
            imagem="https://upload.wikimedia.org/wikipedia/pt/4/46/Grand_Theft_Auto_VI.png" 
            :rota="route('produtos.show', 2)" 
        />
        <x-card-produto 
            nome="Plants VS Zombies Garden Warfare 2" 
            imagem="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkSP-4KPDzR2riNV9HdCt_b6KL_Jh6P6n-7A&s" 
            :rota="route('produtos.show', 3)" 
        />
    </ul>
</div>
@endsection

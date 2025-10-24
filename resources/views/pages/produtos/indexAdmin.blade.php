@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('conteudo')

<div class="card shadow-sm">
    <div class="card-body">
        <h1 class="row justify-content-center">Produtos</h1>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <th scope="row">{{ $produto->id }}</th>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                @if($produto->imagem)
                                    <img src="{{ asset('storage/' . $produto->imagem) }}" 
                                         alt="{{ $produto->nome }}" 
                                         style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                                @else
                                    <span class="text-muted">Sem imagem</span>
                                @endif

                                <td>
                                    <a href="{{ route('admin.produtos.editar', $produto->id) }}" class="btn btn-sm btn-warning">Editar</a>

                                
                                    <form action="{{ route('admin.produtos.excluir', $produto->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                                    </form> 
                                </td>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Nenhum produto cadastrado ainda.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3 d-flex gap-2">
                <a href="{{ route('admin.produtos.cadastro') }}" class="btn btn-primary">Cadastre um produto</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Voltar ao Dashboard</a>
            </div>

        </div>
    </div>
</div>

@endsection

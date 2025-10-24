@extends('layouts.app')

@section('title', 'Produtos')

@section('conteudo')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4 text-center">Editar Produto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif

            <form action="{{ route('admin.produtos.atualizar', $produto['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $produto['nome']) }}">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('descricao', $produto['descricao']) }}">
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="decimal" class="form-control" id="preco" name="preco" value="{{ old('preco', $produto['preco']) }}">
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="imagem" name="imagem">
                    @if($produto['imagem'])
                        <img src="{{ asset('storage/' . $produto['imagem']) }}" alt="{{ $produto['nome'] }}" class="mt-2" style="width: 120px; height: 120px; object-fit: cover; border-radius: 5px;">
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <x-botao type="btn-primary">Atualizar Produto</x-botao>
                    <a href="{{ route('admin.produtos') }}" class="btn btn-danger">Cancelar</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
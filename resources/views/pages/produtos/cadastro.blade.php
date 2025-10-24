@extends('layouts.app')

@section('title', 'Produtos')

@section('conteudo')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4">

      <h2 class="mb-4 text-center">Criar Produto</h2>

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

      <form action="{{ route('admin.produtos.cadastro.salvar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
          <label for="descricao" class="form-label">Descrição do produto</label>
          <input type="text" class="form-control" id="descricao" name="descricao">
        </div>

        <div class="mb-3">
          <label for="preco" class="form-label">Preço</label>
          <input type="decimal" class="form-control" id="preco" name="preco">
        </div>

        <div class="mb-3">
          <label for="imagem" class="form-label">Imagem</label>
          <input type="file" class="form-control" id="imagem" name="imagem">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <x-botao type="btn-primary">Cadastrar Produto</x-botao>
          <a href="{{ route('admin.produtos' ) }}" class="btn btn-danger">Voltar à lista</a>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

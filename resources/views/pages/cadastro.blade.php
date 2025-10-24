@extends('layouts.app')

@section('title', 'Cadastro')

@section('conteudo')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4">

      <h2 class="mb-4 text-center">Cadastro</h2>

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

      <form action="{{ route('cadastro.salvar') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="mb-3">
          <label for="sobrenome" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome" name="sobrenome">
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
          <label for="cep" class="form-label">CEP</label>
          <input type="text" class="form-control" id="cep" name="cep">
        </div>

        <div class="mb-3">
          <label for="logradouro" class="form-label">Logradouro</label>
          <input type="text" class="form-control" name="logradouro" id="logradouro">
        </div>

        <div class="mb-3">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" class="form-control" name="bairro" id="bairro">
        </div>

        <div class="mb-3">
          <label for="localidade" class="form-label">Cidade</label>
          <input type="text" class="form-control" name="localidade" id="localidade">
        </div>

        <div class="mb-3">
          <label for="uf" class="form-label">UF</label>
          <input type="text" class="form-control" name="uf" id="uf">
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <x-botao type="btn-primary">Cadastrar Cliente</x-botao>
          <a href="{{ route('login' ) }}" class="btn btn-danger">Voltar ao log-in</a>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

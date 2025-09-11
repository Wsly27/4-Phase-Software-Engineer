@extends('layouts.app')

@section('title', 'Cadastro')

@section('conteudo')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4">

      <h2 class="mb-4 text-center">Cadastro</h2>

      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <x-botao type="btn-primary">Cadastrar</x-botao>
      </form>

    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Dashboard')

@section('conteudo')
<div class="container my-5">
  <h2 class="titulo-painel cor-principal text-center">Painel do Administrador</h2>
  <div class="d-flex justify-content-center gap-3 mt-3">
    <a href="{{ route('admin.clientes.index', ) }}" class="btn btn-outline-info">Lista de Clientes</a>
    <a href="{{ route('admin.produtos' ) }}" class="btn btn-outline-danger">Lista de Produtos</a>
  </div>
  <div class="d-flex justify-content-center gap-3 mt-3">
    <a href="{{ route('admin.login' ) }}" class="btn btn-secondary">Voltar ao Log-In</a>
  </div>
  <div class="row justify-content-center mt-3">
    
  </div>
</div>
@endsection
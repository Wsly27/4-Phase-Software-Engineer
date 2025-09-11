@extends('layouts.app')

@section('title', 'Clientes')

@section('conteudo')
<ul class="list-group">
    <li class="list-group-item"><a href="{{ route('admin.clientes.show', 1) }}">Cliente 1</a></li>
    <li class="list-group-item"><a href="{{ route('admin.clientes.show', 2) }}">Cliente 2</a></li>
</ul>
@endsection
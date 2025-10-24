@extends('layouts.app')

@section('title', 'Clientes')

@section('conteudo')
<div class="card shadow-sm">
        <div class="card-body">
            <div>
                <h1 class="row justify-content-center">Clientes</h1>
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente -> id }}</th>
                                <td>{{ $cliente -> nome }}</td>
                                <td>{{ $cliente -> email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum cliente cadastrado ainda.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <a href="{{ route('admin.dashboard' ) }}" class="btn btn-danger mt-3">Voltar ao Dashboard</a>
            </div>
        </div>
    </div>
@endsection
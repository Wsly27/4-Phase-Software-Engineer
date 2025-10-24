@extends('layouts.app')

@section('conteudo')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h2 class="mb-4 text-center">Entre como Administrador</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mt-3 d-flex gap-2">
                    <x-botao type="btn btn-dark">Entrar</x-botao>
                    <a href="{{ route('admin.dashboard' ) }}" class="btn btn-danger">Dashboard Teste</a>
                </div>

                
            </form>
        </div>
    </div>
</div>

@endsection
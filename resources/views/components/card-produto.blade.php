@props(['nome', 'imagem', 'rota'])

<div class="mb-4">
    <div class="card w-100">
        <div class="row g-0 align-items-center">
            <div class="col-md-4 d-flex justify-content-center">
                <img src="{{ Str::startsWith($imagem, 'http') ? $imagem : asset('storage/' . $imagem) }}" 
                     class="img-fluid" alt="{{ $nome }}" style="max-height: 200px; object-fit: cover;">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center align-items-center text-center">
                <h5 class="card-title mb-3">{{ $nome }}</h5>
                <a href="{{ $rota }}" class="btn btn-primary btn-lg px-5">Ver Produto</a>
            </div>
        </div>
    </div>
</div>

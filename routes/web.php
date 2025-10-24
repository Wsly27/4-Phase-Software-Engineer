<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NovoProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'salvar'])->name('cadastro.salvar');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/clientes', [IndexController::class, 'clientes'])->name('clientes.index');
    Route::get('/clientes/{id}', [AdminController::class, 'cliente'])->name('clientes.show');
    Route::get('/produtos', [AdminController::class, 'produtos'])->name('produtos');
    Route::get('/produtos/cadastro', [AdminController::class, 'produtoCadastro'])->name('produtos.cadastro');
    Route::post('/produtos/cadastro', [NovoProdutoController::class, 'salvar'])->name('produtos.cadastro.salvar');
    Route::get('/produtos/editar/{id}', [NovoProdutoController::class, 'editar'])->name('produtos.editar');
    Route::put('/produtos/editar/{id}', [NovoProdutoController::class, 'atualizar'])->name('produtos.atualizar');
    Route::delete('/produtos/{id}', [NovoProdutoController::class, 'excluir'])->name('produtos.excluir');
});


/*Route::get('/cadastro', function (){
    echo 'Cadastre-se aqui';
});

Route::get('/login', function (){
    echo 'Aqui vem o login';
});

Route::get('/sobre', function (){
    echo 'Sobre nos';
})->name('about');

Route::prefix('admin')->group(function (){
    Route::get('/login',function(){
        echo 'Login do Ademir';
    });

    Route::get('/dashboard',function(){
        echo 'Dashboard do Ademir';
    })->name('admin.dashboard');

    Route::get('/clientes',function(){
        echo 'Lista de Clientes pro Ademir';
    });

    Route::get('/clientes/{id?}',function(Int $id){
        echo 'Cliente de ID -> '. $id;
    });

    Route::get('/fornecedores',function(){
        echo 'Fornecedores do Ademir';
    });

    Route::get('/produtos',function(){
        echo 'Produtos lançados pelo ademir';
    });

    Route::get('/produto/{slug}',function($slug){
        echo 'Aqui teu Slug -> ' . $slug;
    })->where('slug','[0-9A-Za-z-]+');
});

Route::fallback(function(){
    echo 'Essa pagina não existe, <a href="'. route('home') .'">Clique aqui<a/> para se redirecionar ate a home';
}); */
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/clientes', [AdminController::class, 'clientes'])->name('admin.clientes');
Route::get('/admin/clientes/{id}', [AdminController::class, 'cliente'])->name('admin.clientes.show');

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
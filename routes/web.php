<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Bem vindo na home';
})->name('home');

Route::get('/produtos', function () {
    echo 'Lista de Produtos';
});

Route::get('/produto/{id}', function (Int $id) {
    echo 'ID -> ' . $id;
});

Route::get('/cadastro', function (){
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
});
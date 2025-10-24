<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos;

class AdminController extends Controller
{
    public function login(){
        return view('pages.admin.login');
    }

    public function dashboard(){
        return view('pages.admin.dashboard');
    }

    public function produtos(){
        $produtos = produtos::latest()->get();
        return view('pages.produtos.indexAdmin', compact('produtos'));
    }

    public function produtoCadastro() { 
        return view('pages.produtos.cadastro');
    }

    public function produto($id) { 
        return view('pages.produtos.cadastro.show', compact('id')); 
    }

    public function clientes(){
        return view('pages.admin.clientes.index');
    }

    public function cliente($id) { return view('pages.admin.clientes.show', compact('id')); }
}

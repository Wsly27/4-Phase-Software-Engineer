<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = produtos::latest()->get();
        return view('pages.produtos.index', compact('produtos'));
    }
    public function show($id){
        $produto = produtos::findOrFail($id);
        
        return view('pages.produtos.show', compact('produto'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos;
use Illuminate\Support\Facades\DB;

class NovoProdutoController extends Controller
{

    public function index(){
        return view('produtos.index',['produtos' => DB::table('produtos')->get()]);
    }
    public function produtos()
    {
        $pageTitle = 'produtos';

        $produtos = produtos::latest()->get();

        return view('pages.admin.produtos.cadastro', compact('pageTitle', 'produtos'));
    }

     public function salvar(Request $request){
        // validação dos dados 
        $request->validate([
            'nome' => 'required|min:2',
            'descricao' => 'required|min:2',
            'preco' => 'required|decimal:0,2',
            'imagem' => 'required|file|mimes:jpg,png,pdf|max:2048'
        ]);

        $arquivo = $request->file('imagem');
        $nomeImagem = time() . '_' . $arquivo->getClientOriginalName();

        $caminho = $arquivo->storeAs('produtos', $nomeImagem, 'public');

        produtos::create([
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'preco' => $request->preco,
        'imagem' => $caminho,
    ]);

        return redirect()->route('admin.produtos.cadastro')->with('sucesso', 'Cadastro concluido!');
}

    public function editar($id){
        $produto = produtos::findOrFail($id);
        return view('pages.produtos.editar', compact('produto'));
}

public function atualizar(Request $request, $id)
{
    $produto = produtos::findOrFail($id);

    $request->validate([
        'nome' => 'required|min:2',
        'descricao' => 'required|min:2',
        'preco' => 'required|decimal:0,2',
        'imagem' => 'nullable|file|mimes:jpg,png,pdf|max:2048'
    ]);

    $dados = $request->only('nome', 'descricao', 'preco');

    if ($request->hasFile('imagem')) {
        $arquivo = $request->file('imagem');
        $nomeImagem = time() . '_' . $arquivo->getClientOriginalName();
        $caminho = $arquivo->storeAs('produtos', $nomeImagem, 'public');
        $dados['imagem'] = $caminho;
    }

    $produto->update($dados);

    return redirect()->route('admin.produtos')->with('sucesso', 'Produto atualizado com sucesso!');
}

    public function excluir($id){
        $produto = produtos::findOrFail($id);

        if ($produto->imagem && \Storage::disk('public')->exists($produto->imagem)) {
            \Storage::disk('public')->delete($produto->imagem);
        }

        $produto->delete();

        return redirect()->route('admin.produtos')->with('sucesso', 'Produto excluído com sucesso!');
    }
}

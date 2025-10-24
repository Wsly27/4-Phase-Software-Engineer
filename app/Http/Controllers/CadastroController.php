<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class CadastroController extends Controller
{

    public function salvar(Request $request){
        // validação dos dados 
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'sobrenome' => 'required|min:3|max:50',
            'cpf' => 'required|max:11|unique:clientes,cpf',
            'email' => 'required|email|unique:clientes,email',
            'cep' => 'required',
            'logradouro' => 'required|max:200',
            'bairro' => 'required|max:200',
            'localidade' => 'required|max:200',
            'uf' => 'required|max:2',
            'senha' => 'required|min:2'
        ]);

        clientes::create($request->all());

        return redirect()->route('cadastro')->with('sucesso', 'Cadastro concluido!');
    }

    
}
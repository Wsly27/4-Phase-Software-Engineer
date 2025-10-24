<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class IndexController extends Controller
{
    public function clientes()
    {
        $pageTitle = 'clientes';

        $clientes = clientes::latest()->get();

        return view('pages.admin.clientes.index', compact('pageTitle', 'clientes'));
    }
}
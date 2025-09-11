<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function sobre(){
        return view('pages.sobre');
    }

    public function login(){
        return view('pages.login');
    }

    public function cadastro(){
        return view('pages.cadastro');
    }
}

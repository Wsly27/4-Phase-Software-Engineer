<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $fillable=['nome','sobrenome','cpf','email','cep','logradouro','bairro','localidade','uf','senha'];
}

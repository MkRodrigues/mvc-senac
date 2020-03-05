<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id', 'nome', 'cpf', 'rg' ,'dtNasc', 'email', 'telefone', 'endereco', 'estado', 'pais'];

    protected $table = "Clientes";
}

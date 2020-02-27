<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //Define Colunas
    //Síntaxe de criação de Vetor no Laravel definindo colunas da tabela
    protected $fillable = ['id', 'nome', 'descricao', 'preco']; 
    
    //Aonde se define o nome do banco de dados, para que não haja erros na importação dos dados dentro do banco
    protected $table = 'Produtos';
}

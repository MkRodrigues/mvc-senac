<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['nomeItem','qtdItem', 'vlrItem','qtdTotal'];
    protected $table = 'Estoque';
}

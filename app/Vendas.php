<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'data_da_venda',
        'vendedor_id'
    ];

    protected $table = 'Vendas';

    public function cliente() {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

}

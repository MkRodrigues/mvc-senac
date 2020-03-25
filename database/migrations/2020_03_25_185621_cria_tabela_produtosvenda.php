<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaProdutosvenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProdutosVenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('venda_id')->references('id')->on('Vendas')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('Produtos')->onDelete('cascade');
            $table->Integer('quantidade');
            $table->double('valor',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProdutosVenda');
    }
}

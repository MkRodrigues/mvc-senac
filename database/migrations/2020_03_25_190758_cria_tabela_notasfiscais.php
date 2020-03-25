<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaNotasfiscais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NotasFiscais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venda_id')->unsigned();
            // $table->foreign('venda_id'); continuar daqui
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
        Schema::dropIfExists('NotasFiscais');
    }
}

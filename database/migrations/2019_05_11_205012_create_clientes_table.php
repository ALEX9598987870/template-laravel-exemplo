<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cnpj', 11);
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('cnae');
            $table->string('inscricao_municipal');
            $table->string('inscricao_estatual');
            $table->string('email')->unique();
            $table->string('telefone_residencial');
            $table->string('telefone_celular');
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
        Schema::dropIfExists('clientes');
    }
}

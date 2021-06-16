<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


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
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->date('data_nascimento');
            $table->string('estado_civil');
            $table->string('genero');
            $table->string('telefone');
            $table->string('email');
            $table->string('seguradora_anterior')->nullable();
            $table->float('preco_anterior',12,2)->nullable();
            $table->integer('bonus')->nullable();
            $table->date('vigencia_entrada')->nullable();
            $table->date('vigencia_saida')->nullable();
            $table->timestamps();
            $table->softDeletes();
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

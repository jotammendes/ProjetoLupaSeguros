<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->string('descricao_veiculo');					
            $table->string('chassi');
            $table->string('placa');
            $table->integer('ano');
            $table->string('combustivel');
            $table->string('alienado');
            $table->float('fator_de_ajuste',12,2);
            $table->float('valor_de_referencia',12,2);
            $table->string('cep_de_pernoite');
            $table->string('garagem_na_residencia');
            $table->string('garagem_no_trabalho');
            $table->string('garagem_no_local_de_estudo');
            $table->string('tipo_de_uso');
            $table->string('reside_com_menores_de_26_anos');
            $table->string('veiculos_na_residencia');
            $table->float('km_mensal',12,2);
            $table->string('tipo_de_residencia');
            $table->float('distancia_ate_o_trabalho',12,2);
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
        Schema::dropIfExists('veiculos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguradoras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('veiculo_id')->constrained('veiculos')->onDelete('cascade');
            $table->string('foto');
            $table->string('nome');					
            $table->string('proposta');
            $table->float('valor',12,2);
            $table->string('detalhe_do_valor');
            $table->float('franquia',12,2);
            $table->string('cobertura');
            $table->float('danos_materiais',12,2);
            $table->float('danos_corporais',12,2);
            $table->float('danos_morais',12,2);
            $table->float('morte_invalidez',12,2);
            $table->string('vidros');
            $table->string('carro_reserva');
            $table->string('assistencia');
            $table->string('observacoes');
            $table->boolean('recomendado')->default(false);
            $table->boolean('escolhido')->default(false);
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
        Schema::dropIfExists('seguradoras');
    }
}

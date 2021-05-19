<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExemplosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemplos', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
            $table->string('nome');
            $table->float('valor');
            $table->integer('quantidade');
            $table->dateTime('data');
            $table->foreignId('categoria_id')->constrained('categoria_exemplos')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('exemplos');
    }
}

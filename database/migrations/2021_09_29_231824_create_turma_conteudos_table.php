<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmaConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_conteudos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("turma_id");
            $table->string("descricao");
            $table->string("arquivo");
            $table->datetime("publicacao");
            $table->timestamps();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_conteudos');
    }
}

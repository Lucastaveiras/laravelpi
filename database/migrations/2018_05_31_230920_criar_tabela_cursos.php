<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String("curso_nome");
            $table->String("curso_tipo");
            $table->String("curso_modalidade");
            $table->String("curso_local");
            $table->String("curso_habilitacao");
            $table->String("curso_turno");
            $table->String("curso_vaga");
            $table->String("curso_cargahoraria");
            $table->String("curso_regime");
            $table->String("curso_periodo");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaProfessorNaTabelaCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
          $table->integer("professor_id")
                ->unsigned()
                ->nullable();
          $table->foreign("professor_id")
                ->references("id")
                ->on("professors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
          $table->dropForeign("cursos_professor_id_foreign");
          $table->dropColumn("professor_id");
            //
        });
    }
}

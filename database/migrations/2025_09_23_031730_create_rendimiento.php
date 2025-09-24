<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rendimiento', function (Blueprint $table) {
    $table->increments('id_rendimiento')->comment('identificador del rendimiento');
    $table->date('fecha_evaluacion')->comment('fecha en que se evaluó');
    $table->string('posicion', 60)->comment('posición del jugador evaluado');
    $table->tinyInteger('velocidad')->comment('valor de velocidad');
    $table->tinyInteger('potencia_tiro')->comment('valor de potencia de tiro');
    $table->tinyInteger('defensa')->comment('valor de defensa');
    $table->tinyInteger('regate')->comment('valor de regate');
    $table->tinyInteger('pase')->comment('valor de pase');
    $table->tinyInteger('tecnica')->comment('valor de técnica');

    // Columna calculada
    $table->decimal('promedio', 5, 2)
          ->storedAs('( (velocidad + potencia_tiro + defensa + regate + pase + tecnica) / 6 )')
          ->comment('promedio general del jugador');

    $table->text('observaciones')->nullable()->comment('notas adicionales');
    $table->boolean('estado')->default(true)->comment('estado del rendimiento');

    // Relaciones
    $table->unsignedInteger('id_matricula')->comment('jugador evaluado');
    $table->unsignedInteger('id_entrenamiento')->comment('en que entrenamiento se hizo ese rendimiento');
    $table->unsignedInteger('id_usuario')->comment('usuario que hizo la evaluación');

    $table->foreign('id_matricula', 'lf_userendi')
          ->references('id_matricula')
          ->on('matricula');

    $table->foreign('id_entrenamiento', 'lf_entrenami')
          ->references('id_entrenamiento')
          ->on('entrenamiento');

    $table->foreign('id_usuario', 'lf_regrendi')
          ->references('id_usuario')
          ->on('usuario');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendimiento');
    }
};

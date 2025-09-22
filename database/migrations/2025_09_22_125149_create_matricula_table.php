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
        Schema::create('matricula', function (Blueprint $table) {
    $table->increments('id_matricula');
    $table->dateTime('fecha_matricula')->default(DB::raw('CURRENT_TIMESTAMP'));
    $table->date('fecha_inicio');
    $table->date('fecha_fin');
    $table->boolean('estado')->default(true);
    $table->text('observaciones')->nullable();
    $table->tinyInteger('categoria');
    $table->enum('nivel', ['Bajo','Medio','Alto']);
    $table->unsignedInteger('id_jugador');
    $table->unsignedInteger('id_usuario');

    $table->foreign('id_jugador', 'lf_usermatricula')
          ->references('id_usuario')
          ->on('usuario');

    $table->foreign('id_usuario', 'lf_regmatricula')
          ->references('id_usuario')
          ->on('usuario');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matricula');
    }
};

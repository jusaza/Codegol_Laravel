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
    Schema::create('entrenamiento', function (Blueprint $table) {
        $table->increments('id_entrenamiento')
              ->comment('identificador del entrenamiento');
        
        $table->string('descripcion', 100)
              ->nullable()
              ->comment('detalle breve del entrenamiento');

        $table->date('fecha')
              
              ->comment('fecha programada del entrenamiento');

        $table->time('hora_inicio')
              ->comment('hora de inicio del entrenamiento');

        $table->time('hora_fin')
              ->comment('hora de finalización');

        $table->string('lugar', 50)
              ->comment('lugar donde se realiza');

        $table->string('observaciones', 100)
              ->nullable()
              ->comment('notas u observaciones');

        $table->boolean('estado')
              ->default(true)
              ->comment('estado del entrenamiento');

        $table->unsignedInteger('id_usuario')
              ->comment('usuario que registró el entrenamiento');

        // 🔹 Clave foránea
        $table->foreign('id_usuario', 'fk_entreregistrado')
              ->references('id_usuario')->on('usuario');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrenamiento');
    }
};

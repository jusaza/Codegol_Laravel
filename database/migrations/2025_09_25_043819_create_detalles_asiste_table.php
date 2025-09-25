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
        Schema::create('detalles_asiste', function (Blueprint $table) {
            $table->increments('id_asiste')->comment('identificador de la asistencia');
            
            $table->enum('tipo_asistencia', ['asiste', 'inasiste', 'llegada tarde'])
                  ->comment('tipo de asistencia registrada');
            
            $table->binary('justificacion')
                  ->nullable()
                  ->comment('explicación si no asistió o llegó tarde');
            
            $table->text('observaciones')
                  ->nullable()
                  ->comment('notas u observaciones');
            
            $table->unsignedInteger('id_matricula')
                  ->comment('jugador que asistió o no');
            
            $table->unsignedInteger('id_entrenamiento')
                  ->comment('entrenamiento relacionado');
            
            // 🔗 Llaves foráneas
            $table->foreign('id_matricula')
                  ->references('id_matricula')
                  ->on('matricula')
                  ->onDelete('cascade');
            
            $table->foreign('id_entrenamiento')
                  ->references('id_entrenamiento')
                  ->on('entrenamiento')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_asiste');
    }
};

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
        Schema::create('detalles_usuario_rol', function (Blueprint $table) {
            $table->TinyIncrements('id_detalle');
        
            $table->unsignedTinyInteger('id_rol');
            $table->unsignedTinyInteger('id_usuario');
        
            $table->foreign('id_rol')
                  ->references('id_rol')
                  ->on('rol')
                  ->onDelete('cascade');
        
            $table->foreign('id_usuario')
                  ->references('id_usuario')
                  ->on('usuario')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_usuario_rol');
    }
};

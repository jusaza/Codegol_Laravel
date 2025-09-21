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
            $table->increments('id_detalle'); // PK propia de la tabla intermedia

            $table->unsignedInteger('id_rol');     // FK hacia rol
            $table->unsignedInteger('id_usuario'); // FK hacia usuario

            // Relaciones
            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('rol')
                ->onDelete('cascade');

            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuario')
                ->onDelete('cascade');

            // Evitar duplicados (un usuario no debería tener el mismo rol 2 veces)
            $table->unique(['id_rol', 'id_usuario']);
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

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
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id_inventario')
                  ->comment('identificador del artículo');
            $table->string('nombre_articulo', 50)
                  ->comment('nombre del producto o artículo');
            $table->unsignedTinyInteger('cantidad_total')
                  ->comment('cantidad total disponible');
            $table->string('descripcion', 100)
                  ->nullable()
                  ->comment('detalle adicional del artículo');
            $table->date('fecha_ingreso')
                  ->comment('fecha en que se registró el artículo');
            $table->boolean('estado')
                  ->default(true)
                  ->comment('estado del artículo');

            // Relación con usuario
            $table->unsignedInteger('id_usuario')
                  ->comment('usuario que registró el artículo');

            $table->foreign('id_usuario', 'fk_inveregistrado')
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
        Schema::dropIfExists('inventario');
    }
};

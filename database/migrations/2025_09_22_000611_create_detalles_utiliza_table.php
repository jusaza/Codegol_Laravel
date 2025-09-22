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
    Schema::create('detalles_utiliza', function (Blueprint $table) {
        $table->increments('id_utiliza')
              ->comment('identificador del uso de inventario');

        $table->unsignedTinyInteger('cantidad_usada')
              ->comment('cantidad utilizada del artículo');

        $table->string('observaciones', 100)
              ->nullable()
              ->comment('notas u observaciones');

        // 🔹 Ahora INT UNSIGNED (para que coincida con increments)
        $table->unsignedInteger('id_entrenamiento')
              ->comment('entrenamiento en el que se usó el artículo');

        $table->unsignedInteger('id_inventario')
              ->comment('artículo usado');

        // 🔹 Claves foráneas
        $table->foreign('id_entrenamiento', 'lf_utilientrenador')
              ->references('id_entrenamiento')->on('entrenamiento')
              ->onDelete('cascade')
              ->onUpdate('cascade');

        $table->foreign('id_inventario', 'lf_articulo')
              ->references('id_inventario')->on('inventario')
              ->onDelete('cascade')
              ->onUpdate('cascade');
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_utiliza');
    }
};

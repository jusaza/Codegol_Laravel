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
    Schema::create('usuario', function (Blueprint $table) {
        $table->increments('id_usuario');
        $table->string('correo', 60);
        $table->string('contrasena', 60);
        $table->string('nombre_completo', 60);
        $table->unsignedInteger('num_identificacion');
        $table->enum('tipo_documento', ['cc','ti','ce','pa','rc','pep','nit','nuip','dni','ppt']);
        $table->unsignedBigInteger('telefono_1');
        $table->unsignedBigInteger('telefono_2')->nullable();
        $table->string('direccion', 50);
        $table->enum('genero', ['m','f','otro']);
        $table->date('fecha_nacimiento');
        $table->string('lugar_nacimiento', 50)->nullable();
        $table->enum('grupo_sanguineo', ['a+','a-','b+','b-','ab+','ab-','o+','o-']);
        $table->binary('foto_perfil')->nullable();
        $table->boolean('estado')->default(true);

        // columnas para FK
        $table->unsignedInteger('id_usuario_registro')->nullable();
        $table->unsignedInteger('id_responsable')->nullable();
    });

    // 👇 Ahora sí, foreign keys en un segundo paso
    Schema::table('usuario', function (Blueprint $table) {
        $table->foreign('id_usuario_registro', 'fk_usuario_registrado_por')
              ->references('id_usuario')->on('usuario')
              ->nullOnDelete();

        $table->foreign('id_responsable', 'fk_useresponsable')
              ->references('id_usuario')->on('usuario')
              ->nullOnDelete();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};

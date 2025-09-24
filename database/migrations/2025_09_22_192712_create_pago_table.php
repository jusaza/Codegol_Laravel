<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pago', function (Blueprint $table) {

            $table->tinyIncrements("id_pago")->comment("identificador del pago");
            $table->string("concepto_pago", 100)->comment("concepto o motivo del pago");
            $table->date("fecha_pago")->comment("fecha en que se registro la factura del pago ");
            $table->enum("metodo_pago",['efectivo','transferencia'])->comment("método utilizado para el pago")->nullable();
            $table->unsignedBigInteger("valor_total")->comment("valor total pagado");
            $table->string("observaciones",100)->comment("notas adicionales del pago")->nullable();
            $table->boolean("estado")->default(false)->comment("estado del pago");

            //Relacionre-llaves foraneas

            $table->unsignedTinyInteger("id_usuario")->comment("usuario que registro el pago");
            $table->foreign("id_usuario")->references("id_usuario")->on("usuario");

            $table->unsignedTinyInteger("id_responsable")->comment("usuario que realizo el pago");
            $table->foreign("id_responsable")->references("id_usuario")->on("usuario");

            $table->unsignedTinyInteger("id_matricula")->comment("matrícula relacionada al pago");
            $table->foreign("id_matricula")->references("id_matricula")->on("matricula");

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};

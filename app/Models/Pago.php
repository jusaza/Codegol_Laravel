<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table="pago";
    protected $primaryKey="id_pago";
    public $timestamps=false;
    protected $perPage= 20;

    protected $fillable = [
        "concepto_pago",
        "fecha_pago",
        "metodo_pago",
        "valor_total",
        "observaciones",
        "estado",
        "id_usuario",
        "id_responsable",
        "id_matricula"
    ];

    protected $casts=[
         "concepto_pago"=>"string",
        "fecha_pago"=>"date",
        "metodo_pago"=>"string",
        "valor_total"=>"integer",
        "observaciones"=>"string",
        "estado"=>"boolean",
        "id_usuario"=>"integer",
        "id_responsable"=>"integer",
        "id_matricula"=>"integer"
    ];

    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, "id_usuario","id_usuario");
    }

    public function usuario_responsable()
    {
        return $this->belongsTo(\App\Models\Usuario::class, "id_responsable","id_usuario");
    }

    public function matricula()
    {
        return $this->belongsTo(\App\Models\Matricula::class,"id_matricula","id_matricula");
    }

}

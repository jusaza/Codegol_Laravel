<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id_matricula
 * @property $fecha_matricula
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $estado
 * @property $observaciones
 * @property $categoria
 * @property $nivel
 * @property $id_jugador
 * @property $id_usuario
 *
 * @property Usuario $usuario
 * @property Usuario $usuario1
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    protected $primaryKey = 'id_matricula';
    protected $perPage = 20;
    protected $table = 'matricula';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'observaciones', 'categoria', 'nivel', 'id_jugador', 'id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario1()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_jugador', 'id_usuario');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rendimiento
 *
 * @property $id_rendimiento
 * @property $fecha_evaluacion
 * @property $posicion
 * @property $velocidad
 * @property $potencia_tiro
 * @property $defensa
 * @property $regate
 * @property $pase
 * @property $tecnica
 * @property $promedio
 * @property $observaciones
 * @property $estado
 * @property $id_matricula
 * @property $id_entrenamiento
 * @property $id_usuario
 *
 * @property Usuario $usuario
 * @property Entrenamiento $entrenamiento
 * @property Matricula $matricula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rendimiento extends Model
{
    
    protected $primaryKey = 'id_rendimiento';
    protected $perPage = 20;
    protected $table = 'rendimiento';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_rendimiento', 'fecha_evaluacion', 'posicion', 'velocidad', 'potencia_tiro', 'defensa', 'regate', 'pase', 'tecnica', 'promedio', 'observaciones', 'estado', 'id_matricula', 'id_entrenamiento', 'id_usuario'];


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
    public function entrenamiento()
    {
        return $this->belongsTo(\App\Models\Entrenamiento::class, 'id_entrenamiento', 'id_entrenamiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matricula()
    {
        return $this->belongsTo(\App\Models\Matricula::class, 'id_matricula', 'id_matricula');
    }
    
}

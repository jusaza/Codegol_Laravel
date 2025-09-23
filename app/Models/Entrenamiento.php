<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrenamiento
 *
 * @property $id_entrenamiento
 * @property $descripcion
 * @property $fecha
 * @property $hora_inicio
 * @property $hora_fin
 * @property $lugar
 * @property $observaciones
 * @property $estado
 * @property $id_usuario
 *
 * @property Usuario $usuario
 * @property DetallesUtiliza[] $detallesUtilizas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrenamiento extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = 'id_entrenamiento';
    protected $table = 'entrenamiento';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['descripcion', 'fecha', 'hora_inicio', 'hora_fin', 'lugar', 'observaciones', 'id_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesUtilizas()
    {
        //return $this->hasMany(\App\Models\DetallesUtiliza::class, 'id_entrenamiento', 'id_entrenamiento');
    }
    
}

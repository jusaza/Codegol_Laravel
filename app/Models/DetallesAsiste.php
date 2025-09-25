<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesAsiste
 *
 * @property $id_asiste
 * @property $tipo_asistencia
 * @property $justificacion
 * @property $observaciones
 * @property $id_matricula
 * @property $id_entrenamiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Entrenamiento $entrenamiento
 * @property Matricula $matricula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesAsiste extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_asiste', 'tipo_asistencia', 'justificacion', 'observaciones', 'id_matricula', 'id_entrenamiento'];


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

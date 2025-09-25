<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesUtiliza
 *
 * @property $id_utiliza
 * @property $cantidad_usada
 * @property $observaciones
 * @property $devuelto
 * @property $id_entrenamiento
 * @property $id_inventario
 *
 * @property Inventario $inventario
 * @property Entrenamiento $entrenamiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesUtiliza extends Model
{
    
    protected $perPage = 20;
    protected $table = 'detalles_utiliza';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_utiliza', 'cantidad_usada', 'observaciones', 'id_entrenamiento', 'id_inventario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo//1 a muchos
     */
    public function inventario()
    {
        return $this->belongsTo(\App\Models\Inventario::class, 'id_inventario', 'id_inventario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entrenamiento()
    {
        return $this->belongsTo(\App\Models\Entrenamiento::class, 'id_entrenamiento', 'id_entrenamiento');
    }
    
}

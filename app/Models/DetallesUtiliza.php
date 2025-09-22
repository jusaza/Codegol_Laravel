<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesUtiliza
 *
 * @property int $id_utiliza
 * @property int $cantidad_usada
 * @property string|null $observaciones
 * @property int $id_entrenamiento
 * @property int $id_inventario
 *
 * @property Entrenamiento $entrenamiento
 * @property Inventario $inventario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesUtiliza extends Model
{
    protected $primaryKey = 'id_utiliza';
    protected $table = 'detalles_utiliza';
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cantidad_usada',
        'observaciones',
        'id_entrenamiento',
        'id_inventario'
    ];

    /**
     * Relación: este detalle pertenece a un entrenamiento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entrenamiento()
    {
        return $this->belongsTo(Entrenamiento::class, 'id_entrenamiento', 'id_entrenamiento');
    }

    /**
     * Relación: este detalle pertenece a un inventario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventario()
    {
        return $this->belongsTo(Inventario::class, 'id_inventario', 'id_inventario');
    }
}


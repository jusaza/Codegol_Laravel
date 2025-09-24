<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class Inventario
 *
 * @property $id_inventario
 * @property $nombre_articulo
 * @property $cantidad_total
 * @property $descripcion
 * @property $fecha_ingreso
 * @property $estado
 * @property $id_usuario
 *
 * @property Usuario $usuario
 * @property DetallesUtiliza[] $detallesUtilizas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    protected $perPage = 20;
    protected $primaryKey = 'id_inventario';
    protected $table = 'inventario';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_articulo', 'cantidad_total', 'descripcion', 'id_usuario'];

        // Scope global para ocultar inactivos siempre
    protected static function booted()
    {
        static::addGlobalScope('estado', function (Builder $builder) {
            $builder->where('estado', true);
        });
    }


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
       // return $this->hasMany(\App\Models\DetallesUtiliza::class, 'id_inventario', 'id_inventario');
    }
    
}

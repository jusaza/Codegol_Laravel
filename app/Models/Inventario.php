<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property int $id_inventario
 * @property string $nombre_articulo
 * @property int $cantidad_total
 * @property string|null $descripcion
 * @property string $fecha_ingreso
 * @property bool $estado
 * @property int $id_usuario
 *
 * @property Usuario $usuario
 * @property DetallesUtiliza[] $detallesUtiliza
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    protected $primaryKey = 'id_inventario';
    protected $table = 'inventario';
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre_articulo',
        'cantidad_total',
        'descripcion',
        'fecha_ingreso',
        'estado',
        'id_usuario'
    ];

    /**
     * Relación: un inventario fue registrado por un usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    /**
     * Relación: un inventario puede estar en muchos detalles de uso.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesUtiliza()
    {
        return $this->hasMany(DetallesUtiliza::class, 'id_inventario', 'id_inventario');
    }
}

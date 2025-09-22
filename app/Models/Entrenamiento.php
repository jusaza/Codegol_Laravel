<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrenamiento
 *
 * @property int $id_entrenamiento
 * @property string|null $descripcion
 * @property string $fecha
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property string $lugar
 * @property string|null $observaciones
 * @property bool $estado
 * @property int $id_usuario
 *
 * @property Usuario $usuario
 * @property DetallesUtiliza[] $detallesUtiliza
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrenamiento extends Model
{
    protected $primaryKey = 'id_entrenamiento';
    protected $table = 'entrenamiento';
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * Atributos asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'lugar',
        'observaciones',
        'estado',
        'id_usuario'
    ];

    /**
     * Relación: un entrenamiento fue registrado por un usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    /**
     * Relación: un entrenamiento puede tener varios detalles de uso de inventario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesUtiliza()
    {
        return $this->hasMany(DetallesUtiliza::class, 'id_entrenamiento', 'id_entrenamiento');
    }
}

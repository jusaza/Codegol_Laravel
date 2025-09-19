<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id_usuario
 * @property $correo
 * @property $contrasena
 * @property $nombre_completo
 * @property $num_identificacion
 * @property $tipo_documento
 * @property $telefono_1
 * @property $telefono_2
 * @property $direccion
 * @property $genero
 * @property $fecha_nacimiento
 * @property $lugar_nacimiento
 * @property $grupo_sanguineo
 * @property $foto_perfil
 * @property $estado
 * @property $id_usuario_registro
 * @property $id_responsable
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    // ❌ Si no quieres que se usen created_at y updated_at
    public $timestamps = false;

    // Nombre exacto de la tabla
    protected $table = 'usuario';

    // Clave primaria personalizada
    protected $primaryKey = 'id_usuario';

    // Si la PK es auto-incremental
    public $incrementing = true;

    // Tipo de dato de la PK
    protected $keyType = 'int';

    // Paginación por defecto
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'correo',
        'contrasena',
        'nombre_completo',
        'num_identificacion',
        'tipo_documento',
        'telefono_1',
        'telefono_2',
        'direccion',
        'genero',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'grupo_sanguineo',
        'foto_perfil',
        'estado',
        'id_usuario_registro',
        'id_responsable'
    ];
}

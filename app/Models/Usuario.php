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
 * @property Usuario $usuario1
 * @property Usuario $usuario2
 * @property Usuario[] $usuario3
 * @property Usuario[] $usuario4
 * @property Rol[] $roles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    protected $primaryKey = 'id_usuario';
    protected $table = 'usuario';
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['correo', 'contrasena', 'nombre_completo', 'num_identificacion', 'tipo_documento', 'telefono_1', 'telefono_2', 'direccion', 'genero', 'fecha_nacimiento', 'lugar_nacimiento', 'grupo_sanguineo', 'foto_perfil', 'estado', 'id_usuario_registro', 'id_responsable'];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario1()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_responsable', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario2()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario_registro', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuario3()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id_usuario', 'id_responsable');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuario4()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id_usuario', 'id_usuario_registro');
    }

    public function roles()
   {
    return $this->belongsToMany(Rol::class, 'detalles_usuario_rol', 'id_usuario', 'id_rol');
}
    public function matriculas()
    {
        return $this->hasMany(\App\Models\Matricula::class, 'id_jugador', 'id_usuario');
    }
   }
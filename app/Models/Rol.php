<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 *
 * @property $id_rol
 * @property $rol_usuario
 *
 * @package App 
 * @property Usuario[] $usuarios
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rol extends Model
{
    protected $primaryKey = 'id_rol';
    protected $table = 'rol';
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_rol', 'rol_usuario'];

    public function usuarios()
{
    return $this->belongsToMany(Usuario::class, 'detalles_usuario_rol', 'id_rol', 'id_usuario');
}

}

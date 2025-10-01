<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'correo' => 'required|string|email',
            'contrasena' => 'required|string|min:6', // obligatorio solo al crear
            'nombre_completo' => 'required|string|max:60',
            'num_identificacion' => 'required|integer',
            'tipo_documento' => 'required|in:cc,ti,ce,pa,rc,pep,nit,nuip,dni,ppt',
            'telefono_1' => 'required|integer',
            'telefono_2' => 'nullable|integer',
            'direccion' => 'required|string|max:50',
            'genero' => 'required|in:m,f,otro',
            'fecha_nacimiento' => 'required|date|before:today',
            'lugar_nacimiento' => 'nullable|string|max:50',
            'grupo_sanguineo' => 'required|in:a+,a-,b+,b-,ab+,ab-,o+,o-',
            'foto_perfil' => 'nullable|file|image|max:2048',
            'estado' => 'required|boolean',
            'id_responsable' => 'nullable|integer|exists:usuario,id_usuario',
            'roles' => 'nullable|array',
            'roles.*' => 'integer|exists:rol,id_rol',
        ];

        // Actualización
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {

            // Contraseña opcional al editar
            $rules['contrasena'] = 'nullable|string|min:6';

            // Excluir el usuario actual de la validación unique
            $usuarioId = $this->route('usuario')->id_usuario ?? $this->route('usuario');
            $rules['correo'] = 'required|string|email|unique:usuario,correo,' . $usuarioId . ',id_usuario';
            $rules['num_identificacion'] = 'required|integer|unique:usuario,num_identificacion,' . $usuarioId . ',id_usuario';
        }

        return $rules;
    }
}

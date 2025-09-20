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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
			'correo' => 'required|string|email|unique:usuario,correo',
			'contrasena' => 'required|string|min:6',
			'nombre_completo' => 'required|string|max:60',
			'num_identificacion' => 'required|integer|unique:usuario,num_identificacion',
			'tipo_documento' => 'required|in:cc,ti,ce,pa,rc,pep,nit,nuip,dni,ppt',
			'telefono_1' => 'required|integer|min:1000000000|max:9999999999',
			'telefono_2' => 'nullable|integer|min:1000000000|max:9999999999',
			'direccion' => 'required|string|max:50',
			'genero' => 'required|in:m,f,otro',
			'fecha_nacimiento' => 'required|date|before:today',
			'lugar_nacimiento' => 'nullable|string|max:50',
			'grupo_sanguineo' => 'required|in:a+,a-,b+,b-,ab+,ab-,o+,o-',
			'foto_perfil' => 'nullable|file|image|max:2048',
			'estado' => 'required|boolean',
			'id_usuario_registro' => 'required|integer|exists:usuario,id_usuario',
			'id_responsable' => 'nullable|integer|exists:usuario,id_usuario',
			'roles' => 'nullable|array',
			'roles.*' => 'integer|exists:rol,id_rol',
        ];

        // Solo requerir id_usuario para actualización
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['id_usuario'] = 'required|integer|exists:usuario,id_usuario';
            // Para actualización, permitir que el correo y num_identificacion sean únicos excepto para el usuario actual
            $usuarioId = $this->route('usuario')->id_usuario ?? $this->route('usuario');
            $rules['correo'] = 'required|string|email|unique:usuario,correo,' . $usuarioId . ',id_usuario';
            $rules['num_identificacion'] = 'required|integer|unique:usuario,num_identificacion,' . $usuarioId . ',id_usuario';
        }

        return $rules;
    }
}

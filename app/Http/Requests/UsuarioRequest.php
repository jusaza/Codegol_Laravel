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
        return [
			'id_usuario' => 'required',
			'correo' => 'required|string',
			'contrasena' => 'required|string',
			'nombre_completo' => 'required|string',
			'num_identificacion' => 'required',
			'tipo_documento' => 'required|string',
			'telefono_1' => 'required',
			'direccion' => 'required|string',
			'genero' => 'required|string',
			'fecha_nacimiento' => 'required',
			'lugar_nacimiento' => 'string',
			'grupo_sanguineo' => 'required|string',
			'estado' => 'required',
			'id_usuario_registro' => 'required',
        ];
    }
}

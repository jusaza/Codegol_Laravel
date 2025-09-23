<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrenamientoRequest extends FormRequest
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
			'id_entrenamiento' => 'required',
			'descripcion' => 'string',
			'fecha' => 'required',
			'hora_inicio' => 'required',
			'hora_fin' => 'required',
			'lugar' => 'required|string',
			'observaciones' => 'string',
			'estado' => 'required',
			'id_usuario' => 'required',
        ];
    }
}

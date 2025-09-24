<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RendimientoRequest extends FormRequest
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
			'fecha_evaluacion' => 'required',
			'posicion' => 'required|string',
			'velocidad' => 'required',
			'potencia_tiro' => 'required',
			'defensa' => 'required',
			'regate' => 'required',
			'pase' => 'required',
			'tecnica' => 'required',
			'observaciones' => 'string',
			'id_matricula' => 'required',
			'id_entrenamiento' => 'required',
			'id_usuario' => 'required',
        ];
        return $rules;
    }
}

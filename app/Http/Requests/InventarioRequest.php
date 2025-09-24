<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioRequest extends FormRequest
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
			//'id_inventario' => 'required',
			'nombre_articulo' => 'required|string',
			'cantidad_total' => 'required',
			'descripcion' => 'string',
			//'fecha_ingreso' => 'required',
			//'estado' => 'required',
			'id_usuario' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoRequest extends FormRequest
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
            'concepto_pago'  => 'required|string|max:255',
            'fecha_pago'     => 'required|date',
            'metodo_pago'    => 'required|string|max:100',
            'valor_total'    => 'required|integer',
            'observaciones'  => 'nullable|string',
            'estado'         => 'required|boolean',
            'id_usuario'     => 'required|integer|exists:usuario,id_usuario',
            'id_responsable' => 'required|integer|exists:usuario,id_usuario',
            'id_matricula'   => 'required|integer|exists:matricula,id_matricula',
        ];
    }
}

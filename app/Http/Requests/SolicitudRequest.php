<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class SolicitudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('guardar solicitud');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'epp_id' => 'required|exists:epps,id',
            'sede_id' => 'required|exists:sedes,id',
            'area_id' => 'required|exists:areas,id',
            'cantidad' => 'required|integer|min:1',
        ];
    }

    /**
     * Obtiene los mensajes de error personalizados para cada regla de validación.
     */
    public function messages(): array
    {
        return [
            'user_id.required' => 'El campo usuario es obligatorio.',
            'user_id.exists' => 'El usuario seleccionado no es válido.',
            'epp_id.required' => 'El campo EPP es obligatorio.',
            'epp_id.exists' => 'El EPP seleccionado no es válido.',
            'sede_id.required' => 'El campo sede es obligatorio.',
            'sede_id.exists' => 'La sede seleccionada no es válida.',
            'area_id.required' => 'El campo área es obligatorio.',
            'area_id.exists' => 'El área seleccionada no es válida.',
            'cantidad.required' => 'El campo cantidad es obligatorio.',
            'cantidad.integer' => 'La cantidad debe ser un número entero.',
            'cantidad.min' => 'La cantidad debe ser al menos 1.',
        ];
    }
}

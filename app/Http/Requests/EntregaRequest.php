<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class EntregaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('actualizar entrega');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'state' => 'in:Pendiente,Entregado,Cancelado',
            'start_time_labor' => 'required|date_format:H:i',
            'end_time_labor' => 'required|date_format:H:i|after:start_time_labor',
            'observations' => 'max:255'
        ];
    }
}

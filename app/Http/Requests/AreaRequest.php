<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //cambiar por usuario que puedan autorizarce
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:20",
            "sede_id" => "required",
            "description" => "max:255",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "El campo Nombre es obligatorio.",
            "name.max" => "El campo Nombre no debe superar los 20 caracteres.",
            "sede_id.required" => "El campo Sede es obligatorio.",
            "description.max" => "La Descripción no debe superar los 255 caracteres.",

        ];
    }
}

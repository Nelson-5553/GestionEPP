<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EppRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //cambiar por permisos
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
            "unity" => "required",
            "cantidad"=>"required",
            "image"=>"required",
            "description" => "max:255",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "El campo 'Nombre' es obligatorio.",
            "name.max" => "El 'Nombre' no debe superar los 20 caracteres.",
            "unity.required" => "El campo 'Unidad de medida' es obligatorio.",
            "cantidad.required" => "El campo 'Cantidad' es obligatorio.",
            "image.required" => "Es necesario subir una imagen.",
            "description.max" => "La 'Descripción' no debe superar los 255 caracteres."
        ];
    }
}

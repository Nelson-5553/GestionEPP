<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class SedeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('crear sede'); // Verifica si el usuario tiene permiso
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
            "direction" => "required",
            "description" => "max:255",
            "image" => "required|image|mimes:jpg,png,jpeg",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "El campo Nombre es obligatorio.",
            "name.max" => "El campo Nombre no debe superar los 20 caracteres.",
            "direction.required" => "El campo Dirección es obligatorio.",
            "description.max" => "La Descripción no debe superar los 255 caracteres.",
            "image.required" => "Debe subir una imagen.",
            "image.image" => "El archivo debe ser una imagen.",
            "image.mimes" => "Solo se permiten imágenes en formato JPG, PNG o JPEG.",
        ];
    }

}

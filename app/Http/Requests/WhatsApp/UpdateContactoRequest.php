<?php

namespace App\Http\Requests\WhatsApp;

use App\Classes\FormRequest\FormRequest;

class UpdateContactoRequest extends FormRequest
{
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'id.required' => 'El id es requerido',
            'nombre.required' => 'El nombre es requerido',
            'nombre.string' => 'El nombre debe ser una cadena',
            'apellido.required' => 'El apellido es requerido',
            'apellido.string' => 'El apellido debe ser una cadena',
            'tipo_identificacion.required' => 'El tipo_identificacion es requerido',
            'identificacion.required' => 'El identificacion es requerido',
            'identificacion.numeric' => 'El identificacion debe ser un numero',
            'genero.required' => 'El genero es requerido',
            'genero.numeric' => 'El genero debe ser un numero',
            'email.required' => 'El email es requerido',
            'email.string' => 'El email debe ser una cadena',
            'telefono.required' => 'El telefono es requerido',
            'telefono.numeric' => 'El telefono debe ser un numero',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $reglas = [
            "id" => [
                "required",
            ],
            "nombre" => [
                "required",
                "string"
            ],
            "apellido" => [
                "required",
                "string"
            ],
            "tipo_identificacion" => [
                "required"
            ],
            "identificacion" => [
                "required",
                "numeric"
            ],
            "genero" => [
                "required",
                "numeric"
            ],
            "email" => [
                "required",
                "string"
            ],
            "telefono" => [
                "required",
                "numeric"
            ],
        ];

        return $reglas;
    }
}

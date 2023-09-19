<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//error 403 false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'especie'=>'required|min:3',
            'peso'=>'required',
            'altura'=>'required',
            'fechaNacimiento'=>'required',
            'imagen'=>'required|mimes:jpeg,png,jpg,svg'
        ];
    }

    public function messages()
    {
        return[
            'especie.required'=>'La especie es obligatoria',
            'especie.min'=>'La especie minimo 3 caracteres',
            'peso.required'=>'El peso es obligatorio',
            'altura.required'=>'La altura es obligatoria',
            'fechaNacimiento.required'=>'La fecha de nacimiento es obligatoria',
            'imagen.required'=>'La imagen es obligatoria',
            'imagen.mimes'=>'El tipo de archivo no esta permitido'
        ];
    }

}

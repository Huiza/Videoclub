<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //Reglas para la validacion de los datos
    public function rules()
    {
        return [
            //
            'titulo' => 'required|max:150|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/',
            'anio_estreno' => 'required',
            'categoria_id' => 'required',
            'disponibilidad' => 'max:200|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/',


        ];
    }
    //Muestra los mensajes
     public function messages()
    {
        return [
            'titulo.required' => 'El campo titulo es obligatorio.',
            'titulo.max' => 'La cantidad máxima de carácteres es 150.',
            'anio_estreno.required' => 'Debe ingresar el año de estreno.',
            'categoria_id.required' => 'Debe seleccionar una categoria.',
            'disponibilidad'=> 'Deben de ser solo letras',
        ];
    }
}

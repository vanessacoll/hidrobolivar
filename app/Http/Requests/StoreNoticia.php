<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticia extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'titulo'=>'required|min:3',
            'autor'=>'required',
            'descripcion'=>'required',
            'slug'=>'required|unique:noticias',
            'foto' => 'nullable|file|mimes:jpg,png,mp4'
        ];
    }

    //CAMBIAR LOS MENSAJES DE VALIDACIONES

    public function messages(): array {
        return[
            'titulo.required'=>'Debes agregar el titulo de la noticia',
            'autor.required'=>'Debes agregar el nombre del autor de la noticia',
            'descripcion.required'=>'Debes agregar la descripción de la noticia',
            'slug.required'=>'Debes indicar palabras claves para la noticia',
            'slug.unique'=>'Las palabras indicadas ya fueron utilizadas en otra noticia'
        ];
    }
}

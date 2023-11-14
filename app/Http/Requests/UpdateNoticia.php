<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Noticia;
class UpdateNoticia extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $noticia = $this->route('noticia'); // Obtiene el objeto Noticia desde la ruta

        return [
            'titulo' => 'required|min:3',
            'autor' => 'required',
            'descripcion' => 'required',
            'slug' => 'required|unique:noticias,slug,' . ($noticia ? $noticia->id : null),
        ];
    }

    //CAMBIAR LOS MENSAJES DE VALIDACIONES

    public function messages(): array {
        return[
            'titulo.required'=>'Debes agregar el titulo de la noticia',
            'autor.required'=>'Debes agregar el nombre del autor de la noticia',
            'descripcion.required'=>'Debes agregar la descripción de la noticia'
        ];
    }


}

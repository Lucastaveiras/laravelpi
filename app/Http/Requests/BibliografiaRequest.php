<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BibliografiaRequest extends FormRequest
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
    public function rules()
    {
        return [
            'bibliografia_titulo'=>'required|max:100',
            'bibliografia_autor'=>'required|max:100',
            'bibliografia_isbn'=>'required|numeric',
            'bibliografia_editora'=>'required',
        ];
    }
    public function messages()
    {
      return [
        'bibliografia_titulo.required'=>'O campo Titulo é obrigatório',
        'bibliogradia_autor.required'=>'O campo Autor é obrigatório',
        'bibliografia_isbn.required'=>'O campo ISBN é obrigatório',
        'bibliografia_editora.required'=>'O campo Editora é obrigatório',
      ];
    }
}

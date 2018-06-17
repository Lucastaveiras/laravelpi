<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtasRequest extends FormRequest
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
          'atas_Titulo'=>'required|max:150',
          'atas_AtaTexto'=>'required|max:3000',
          'atas_Data'=>'required'
        ];
    }
    public function messages()
    {
      return [
        'atas_Titulo.required'=>'O campo Titulo é obrigatório',
        'atas_AtaTexto.required'=>'O campo Ata é obrigatório',
        'atas_Data.required'=>'O campo Data é obrigatório',

      ];
    }
}

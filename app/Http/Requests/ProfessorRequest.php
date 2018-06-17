<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'nome'=> 'required|max:100',
            'cpf'=> 'required',
            'maiortitulacao'=> 'max:50',
            'areaformacao'=> 'required|max:50',
            'curriculo'=> 'required',
            'dtupdtcurriculo'=> 'required'

        ];
    }

    public function messages()
    {
      return [
        'nome.max' => 'Campo nome deve ter no máximo 100 caracteres',
        'nome.required|cpf.required|maiortitulacao.required|areaformacao.required|curriculo.required|dtupdtcurriculo.required' => 'Campo obrigatório',
        'maiortitulacao.max|areaformacao.max' =>'Campo deve conter no máximo 50 caracteres',
        'cpf.max' => 'máximo 11 digitos',
        'cpf.integer' => 'campo numérico'
      ];
    }
}

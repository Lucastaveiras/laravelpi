<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PPCRequest extends FormRequest
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
          'curso_id'=>'required',
          'ppc_perfilcurso'=>'required',
          'ppc_perfilegresso'=>'required',
          'ppc_formaacesso'=>'required',
          'ppc_representacaografica'=>'required',
          'ppc_avaliacaoaprendizagem'=>'required',
          'ppc_avaliacaocurso'=>'required',
          'ppc_tcc'=>'required',
          'ppc_estagio'=>'required',
          'ppc_politicapcd'=>'required',
            //
        ];
    }
    public function messages()
    {
      return [
        'curso_id.required'=>'O campo Nome do Curso é obrigatório',
        'ppc_perfilcurso.required'=>'O campo Perfil do Curso é obrigatório',
      
      ];
    }
}

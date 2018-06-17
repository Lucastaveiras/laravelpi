<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
          'curso_nome'=>'required|max:100',
          'curso_tipo'=>'required|max:30',
          'curso_modalidade'=>'required',
          'curso_local'=>'required',
          'curso_habilitacao'=>'required',
          'curso_turno'=>'required',
          'curso_vaga'=>'required|numeric',
          'curso_cargahoraria'=>'required|numeric',
          'curso_regime'=>'required|max:30',
          'curso_periodo'=>'required|max:30',
            //
        ];
    }
    public function messages()
    {
      return [
        'curso_nome.required'=>'O campo Nome do Curso é obrigatório',
        'curso_tipo.required'=>'O campo Tipo do Curso é obrigatório',
        'curso_modalidade.required'=>'O campo Modalidade é obrigatório',
        'curso_local.required'=>'O campo Local é obrigatório',
        'curso_habilitacao.required'=>'O campo Habilitação é obrigatório',
        'curso_turno.required'=>'O campo Turno é obrigatório',
        'curso_vaga.required'=>'O campo Vagas é obrigatório',
        'curso_cargahoraria.required'=>'O campo Carga Horaria é obrigatório',
        'curso_regime.required'=>'O campo Regime é obrigatório',
        'curso_periodo.required'=>'O campo Periodo é obrigatório',

      ];
    }
}

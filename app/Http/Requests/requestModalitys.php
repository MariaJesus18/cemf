<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestModalitys extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:5|max:256',
            'occurrencetype'=>'required|'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Insira um nome para a ocorrência',
            'name.min'=>'O nome deve conter no mínimo 5 letras',
            'name.max'=>'O máximo de letras é de 256',
            'ocyee.required'=>'Selecione o tipo de ocorrência'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestLaunchAttachments extends FormRequest
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
            'title'=>'required|min:5|max:256',
            'file'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Insira um título',
            'title.min'=>'O título deve conter no mínimo 5 letras',
            'title.max'=>'O máximo de letras é de 256',
            'occurrencetype.required'=>'Insira um tipo de ocorrênica'
        ];
    }
}

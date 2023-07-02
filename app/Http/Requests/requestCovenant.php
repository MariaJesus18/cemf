<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestCovenant extends FormRequest
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
            'discount'=>'integer|required'
        ];
    }

    public function messages()
    {
        return [
            'name.string'=>'Insira um nome para este convênio',
            'name.min'=>'Insira um nome com no mínimo 5 letras',
            'name.max'=>'O máximo desse campo é de 256 letras',
            'name.required'=>'Insira um nome para este convênio',

            'discount.integer'=>'Insira um valor numérico',
            'discount.required'=>'Este campo precisa ser preenchido'
        ];
    }
}

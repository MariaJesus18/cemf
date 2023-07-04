<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestSupplierUpdate extends FormRequest
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
            'typeHolder'=>'required',
            'name'=>'required|min:5|max:256',
            'cpf'=>'integer|required',
            'cnpj'=>'integer|required',
            'telephone1'=>'integer|required',
            'telephone2'=>'integer|required',
            'email'=>'email|min:5|max:256',
            'cep'=>'integer|required',
            'road'=>'required|min:5|max:256',
            'number'=>'integer|required',
            'neighborhood'=>'required|min:5|max:256',
            'complement'=>'required|min:5',
            'city'=>'required',
            'uf'=>'required',
            'observation'=>'required|min:5'
        ];
    }
}

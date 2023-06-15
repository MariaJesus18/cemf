<?php

namespace App\Http\Requests\Contract;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Defina as regras de autorização, se necessário
        // Por exemplo, verifique se o usuário tem permissão para atualizar o contrato
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Defina as regras de validação para os campos do contrato
        return [
            // Defina as regras para cada campo que deseja validar
        ];
    }

    /**
     * Dispatch the job to update the contract.
     *
     * @param  \App\Models\Contract  $contract
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public static function dispatch($contract, $request)
    {
        // Aqui você pode implementar a lógica para atualizar o contrato com base nos dados do $request
        
        // Por exemplo, você pode fazer algo como:
        // $contract->update([...]);

        // O código acima é apenas um exemplo. Você deve implementar a lógica apropriada com base nos seus requisitos.

        // Se você deseja despachar uma tarefa ou evento para processar a atualização do contrato em segundo plano, você pode fazer isso aqui
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Contract;
use Illuminate\Http\Request;
use App\Http\Requests\Contract\UpdateContractRequest;
use App\Models\{
    Unit,Modality,Covenant,Responsible,Shift,Serie,Student,PaymentMethod,School,Subject
};

class ContractController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        return view('contracts.index', [
            'contract' => Contract::all(),
            'unit' => Unit::all(),
            'modality' => Modality::all(),
            'covenant' => Covenant::all(),
            'responsible' => Responsible::all(),
            'shift' => Shift::all(),
            'serie' => Serie::all(),
            'student' => Student::all(),
            'paymentmethod' => PaymentMethod::all(),
            'school' => School::all(),
            'subjects' => Subject::all(),
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        $requestData = $request->all();
        $requestData['creatoruser_id'] = $user->id;
        $requestData['status'] = true;
        $createdContract = Contract::create($requestData);
        
        foreach ($request->subjects as $subject) {
            $createdContract->subjects()->attach($subject);
        }
        
        return redirect('/contracts');
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        return view('contracts.edit', [
            'contract' => Contract::find($contract->id),
            'unit' => Unit::all(),
            'modality' => Modality::all(),
            'covenant' => Covenant::all(),
            'responsible' => Responsible::all(),
            'shift' => Shift::all(),
            'serie' => Serie::all(),
            'student' => Student::all(),
            'paymentmethod' => PaymentMethod::all(),
            'school' => School::all(),
            'subjects' => Subject::all(),
        ]);
    
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContractRequest $request, Contract $contract)
    {
        $contractInstance = Contract::find($contract->id);
    
        // Atualizar os dados do contrato
        $contractInstance->update($request->all());
    
        // Atualizar as disciplinas do contrato
        $contractInstance->subjects()->sync($request->subjects);
    
        return redirect('/contracts');
    }
    
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Contract  $contract
         * @return \Illuminate\Http\Response
         */
        public function destroy(Contract $contract)
        {
            $contract->delete();
    
            return redirect('/contracts');
        }
}

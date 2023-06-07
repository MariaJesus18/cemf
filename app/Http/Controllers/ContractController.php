<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Modality;
use App\Models\Covenant;
use App\Models\Responsible;
use App\Models\Shift;
use App\Models\Serie;
use App\Models\Student;
use App\Models\PaymentMethod;
use App\Models\School;
use App\Models\Subject;

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
            'subject' => Subject::all(),
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
    public function store(Request $request, Contract $contract)
    {
        //  $userCreator = User::where('id', $contract->creatoruser_id)->first()->toArray(); 
        $user = auth()->user();
        $contract = $request->all();
        $contract['creatoruser_id'] = $user->id;
        $contract['status'] = true;
        Contract::create($contract);
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
            'subject' => Subject::all(),
        ]);
    
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        $contractInstance = Contract::find($contract->id);
        $contractInstance->update($request->all());
    
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

<?php

namespace App\Http\Controllers;

use App\Models\ContractSubject;
use Illuminate\Http\Request;

class ContractSubjectController extends Controller
{
    public function store(Request $request)
    {
        ContractSubject::create([
            'contract_id'=>$request->contract_id,
            'subject_id'=>$request->subject_id,
        ]); 

        return redirect(route('/'));
    }
}

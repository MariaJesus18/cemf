<?php

namespace App\Http\Controllers;

use App\Models\ContractSubject;
use Illuminate\Http\Request;

class ContractSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ContractDiscipline::create([
            'contract_id'=>$request->contract_id,
            'subject_id'=>$request->subject_id,
        ]); 

        return redirect(route('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContractSubject  $ContractSubject
     * @return \Illuminate\Http\Response
     */
    public function show(ContractSubject $ContractSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContractSubject  $ContractSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(ContractSubject $ContractSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContractSubject  $ContractSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContractSubject $ContractSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContractSubject  $ContractSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContractSubject $ContractSubject)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CashAccount;
use Illuminate\Http\Request;

class CashAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cashAccounts.index', [
            'cashAccount' => CashAccount::all()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CashAccount::create($request->all());

        return redirect('/contaCaixa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CashAccount  $cashAccount
     * @return \Illuminate\Http\Response
     */
    public function show(CashAccount $cashAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CashAccount  $cashAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(CashAccount $cashAccount)
    {
        return view('cashAccounts.edit', [
            'cashAccount' => CashAccount::find($cashAccount->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CashAccount  $cashAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashAccount $cashAccount)
    {
        $cashAccount = $cashAccount::find($cashAccount->id);

        $cashAccount->update($request->all());

        return redirect('/contaCaixa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashAccount  $cashAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashAccount $cashAccount)
    {
        $cashAccount->delete();

        return redirect('/contaCaixa');
    }
}

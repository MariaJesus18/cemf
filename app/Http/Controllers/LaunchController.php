<?php

namespace App\Http\Controllers;

use App\Models\CashAccount;
use App\Models\Contract;
use App\Models\Launch;
use App\Models\LaunchCategory;
use App\Models\PaymentMethod;
use App\Models\Student;
use App\Models\Supplier;
use App\Models\TypeRelease;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class LaunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('launchs.index', [
            'launch' => Launch::all(),
            'contract' => Contract::all(), 
            'student' => Student::all(),
            'unit' => Unit::all(),
            'supplier' => Supplier::all(),
            'cashAccount' => CashAccount::all(),
            'type' => TypeRelease::all(),
            'category' => LaunchCategory::all(),
            'paymentMethod' => PaymentMethod::all(),
            'user' => User::all(),
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
         Launch::create($requestData);
        
        return redirect('/launchs');
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function edit(Launch $launch)
    {
        return view('launchs.edit', [
            'launch' => Launch::find($launch->id),
            'contract' => Contract::all(), 
            'student' => Student::all(),
            'supplier' => Supplier::all(),
            'cashAccount' => CashAccount::all(),
            'type' => TypeRelease::all(),
            'category' => LaunchCategory::all(),
            'paymentMethod' => PaymentMethod::all(),
            'unit' => Unit::all(),
            'user' => User::all(),
        ]);
    
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Launch  $launch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Launch $launch)
    {
        $launchInstance = Launch::find($launch->id);
    
        // Atualizar os dados do contrato
        $launchInstance->update($request->all());
    
        return redirect('/launchs');
    }
    
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Launch  $launch
         * @return \Illuminate\Http\Response
         */
        public function destroy(Launch $launch)
        {
            $launch->delete();
    
            return redirect('/launchs');
        }
}

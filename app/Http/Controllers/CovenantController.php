<?php

namespace App\Http\Controllers;

use App\Models\Covenant;
use Illuminate\Http\Request;

class CovenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('convenants.index', ['covenants' => Covenant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Covenant::create($request->all());
        return redirect(url('covenants'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function show(Covenant $covenant)
    {
        return view('convenants.show', ['covenant' => $covenant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Covenant $covenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covenant $covenant)
    {
        $covenant->update($request->all());
        return redirect(url('covenants'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covenant $covenant)
    {
        $covenant->delete();
        return redirect(url('covenants'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Responsible;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Responsible $responsible)
    {
        return view('responsibles.index', [
            'responsible' => Responsible::all(),
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
    public function store(Request $request, Responsible $responsible)
    {
        //  $userCreator = User::where('id', $responsible->creatoruser_id)->first()->toArray(); 
        $user = auth()->user();
        $responsible = $request->all();
        $responsible['creatoruser_id'] = $user->id;
        Responsible::create($responsible);
        return redirect('/responsibles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function show(responsible $responsible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function edit(responsible $responsible)
    {
        return view('responsibles.edit', [
            'responsible' => responsible::find($responsible->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, responsible $responsible)
    {
        $user = auth()->user();
        $responsible = $responsible::find($responsible->id);
        $responsible['editoruser_id'] = $user->id;
        $responsible->update($request->all());

        return redirect('/responsibles');


        // $responsible = $request->all();

        // Responsible::create($responsible);
        // return redirect('/responsibles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function destroy(responsible $responsible)
    {
        $responsible->delete();

        return redirect('/responsibles');
    }
}

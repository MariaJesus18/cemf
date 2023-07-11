<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\User;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        return view('team.index', [
            'team' => Team::all(),
            'unit' => Unit::all(),
            'user' => User::all(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validações 
         $request->validate([
            'user_id' => 'required', 'unit_id' => 'required',
        ]);
        
        Team::create($request->all());
        return redirect('/teams');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('team.edit', [
            'team' => Team::find($team->id),
            'unit' => Unit::all(),
            'user' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {

        $team->update($request->all());
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/teams');
    }
}

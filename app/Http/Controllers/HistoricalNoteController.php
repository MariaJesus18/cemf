<?php

namespace App\Http\Controllers;

use App\Models\HistoricalNote;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Period;
use App\Models\School;
use App\Models\Serie;
use App\Models\Student;
use App\Models\Subject;

class HistoricalNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            return view('historicalNote.index', [
                'contracts' => Contract::all(),
                'students' => Student::all(),
                'schools' => School::all(),
                'series' => Serie::all(),
                'periods' => Period::all(),
                'subjects' => Subject::all(),
                'historicalnotes' => HistoricalNote::all(),
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
        $user = auth()->user();
        $requestData = $request->all();
        $requestData['creatoruser_id'] = $user->id;
        $requestData['status'] = true;
       HistoricalNote::create($requestData);
        
        return redirect('/historicalNotes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoricalNote  $historicalNote
     * @return \Illuminate\Http\Response
     */
    public function show(HistoricalNote $historicalNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoricalNote  $historicalNote
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoricalNote $historicalNote)
    {
        return view('historicalNote.edit', [
           'historicalnote' => HistoricalNote::find($historicalNote->id),
            'contracts' => Contract::all(),
            'students' => Student::all(),
            'schools' => School::all(),
            'series' => Serie::all(),
            'periods' => Period::all(),
            'subjects' => Subject::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoricalNote  $historicalNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoricalNote $historicalNote)
    {
        $user = auth()->user();
        $requestData = $request->all();
        $requestData['editoruser_id'] = $user->id;
        
        $historicalNote->update($requestData);
    
        return redirect('/historicalNotes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoricalNote  $historicalNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoricalNote $historicalNote)
    {
        $historicalNote->delete();

        return redirect('/historicalNotes');
    }
}

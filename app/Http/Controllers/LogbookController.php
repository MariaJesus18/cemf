<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\LogBook;
use Illuminate\Http\Request;

class LogBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logBook.index', [
            'logBook' => LogBook::all(),
            'student' => Student::all(),
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
    public function store(Request $request, LogBook $logBook)
{
    //  $userCreator = User::where('id', $logBook->creatoruser_id)->first()->toArray(); 
    $user = auth()->user();
    $logBook = $request->all();
    $logBook['creatoruser_id'] = $user->id;
    LogBook::create($logBook);
    return redirect('/logBooks');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\LogBook  $logBook
 * @return \Illuminate\Http\Response
 */
public function edit(LogBook $logBook)
{
    return view('logBook.edit', [
        'logBook' => LogBook::find($logBook->id),
        'student' => Student::all()
    ]);

}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\LogBook  $logBook
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, LogBook $logBook)
{
    $logBookInstance = LogBook::find($logBook->id);
    $logBookInstance->update($request->all());

    return redirect('/logBooks');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogBook  $LogBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogBook $logBook)
    {
        $logBook->delete();

        return redirect('/logBooks');
    }
}
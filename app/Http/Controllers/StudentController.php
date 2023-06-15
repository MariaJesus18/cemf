<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $Student)
    {
        return view('students.index', [
            'students' => Student::all(),
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
    public function store(Request $request, Student $Student)
    {
        //  $userCreator = User::where('id', $Student->creatoruser_id)->first()->toArray(); 
        $user = auth()->user();
        $Student = $request->all();
        $Student['creatoruser_id'] = $user->id;
        $Student['status'] = true;
        Student::create($Student);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $Student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student)
    {
        return view('students.edit', [
            'student' => Student::find($Student->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $Student)
    {
        $user = auth()->user();
        $Student = $Student::find($Student->id);
        $Student['editoruser_id'] = $user->id;
        $Student->update($request->all());

        return redirect('/students');


        // $Student = $request->all();

        // Student::create($Student);
        // return redirect('/Students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $Student)
    {
        $Student->delete();

        return redirect('/students');
    }
}

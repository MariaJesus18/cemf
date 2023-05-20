<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentAttachments;
use Illuminate\Http\Request;

class StudentAttachmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studentAttachments.index', [
            'studentsAttachments' => StudentAttachments::all(),
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
    public function store(Request $request, StudentAttachments $StudentAttachments)
    {
        //  $userCreator = User::where('id', $StudentAttachments->creatoruser_id)->first()->toArray(); 
        $user = auth()->user();
        $StudentAttachments = $request->all();
        $StudentAttachments['creatoruser_id'] = $user->id;
        StudentAttachments::create($StudentAttachments);
        return redirect('/StudentAttachments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentAttachments  $StudentAttachments
     * @return \Illuminate\Http\Response
     */
    public function show(StudentAttachments $StudentAttachments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentAttachments  $StudentAttachments
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentAttachments $StudentAttachments)
    {
        return view('StudentAttachments.edit', [
            'StudentAttachments' => StudentAttachments::find($StudentAttachments->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentAttachments  $StudentAttachments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentAttachments $StudentAttachments)
    {
        $user = auth()->user();
        $StudentAttachments = $StudentAttachments::find($StudentAttachments->id);
        $StudentAttachments['editoruser_id'] = $user->id;
        $StudentAttachments->update($request->all());

        return redirect('/StudentAttachments');


        // $StudentAttachments = $request->all();

        // StudentAttachments::create($StudentAttachments);
        // return redirect('/StudentAttachmentss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentAttachments  $StudentAttachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentAttachments $StudentAttachments)
    {
        $StudentAttachments->delete();

        return redirect('/StudentAttachments');
    }
}

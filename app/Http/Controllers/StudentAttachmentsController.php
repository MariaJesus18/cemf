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
            'studentsAttachment' => StudentAttachments::all(),
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
    public function store(Request $request, StudentAttachments $studentAttachment)
{
    //  $userCreator = User::where('id', $studentAttachment->creatoruser_id)->first()->toArray(); 
    $user = auth()->user();
    $studentAttachmentData = $request->all();
    $studentAttachmentData['creatoruser_id'] = $user->id;
    StudentAttachments::create($studentAttachmentData);
    return redirect('/StudentAttachments');
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\StudentAttachments  $studentAttachment
 * @return \Illuminate\Http\Response
 */
public function edit(StudentAttachments $studentAttachment)
{
    return view('StudentAttachments.edit', [
        'studentAttachment' => StudentAttachments::find($studentAttachment->id),
        'student' => Student::all()
    ]);

}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\StudentAttachments  $studentAttachment
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, StudentAttachments $studentAttachment)
{
    $user = auth()->user();
    $studentAttachmentInstance = StudentAttachments::find($studentAttachment->id);
    $studentAttachmentInstance->update($request->all());

    return redirect('/studentAttachments');
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

        return redirect('/studentAttachments');
    }
}
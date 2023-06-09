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
    public function store(Request $request)
    {
        $user = auth()->user();
        $studentAttachmentData = $request->all();
        $studentAttachmentData['creatoruser_id'] = $user->id;
    
        // Verificar se há um arquivo válido enviado
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $requestImage = $request->file('file'); // Corrigir chamada de método
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"))  . "." . $extension;
            $requestImage->move(public_path('image/studentAttachments'), $imageName);
            $studentAttachmentData['file'] = $imageName; // Corrigir atribuição do nome do arquivo
        }
    
        StudentAttachments::create($studentAttachmentData);
        return redirect('/studentAttachments');
    }


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\StudentAttachments  $studentAttachment
 * @return \Illuminate\Http\Response
 */
public function edit(StudentAttachments $studentAttachment)
{


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
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentAttachments  $StudentAttachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentAttachments $studentAttachment)
    {
        $studentAttachment->delete();

        return redirect('/studentAttachments');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // buscador funcionando
        $search = $request['search'] ?? "";

        if($search != ""){
            $student = DB::table('students')->where('name','like','%'.$search.'%')->get();

        } else {
            $student = Student::all();
        }    
            

         return view('students.index', [
             'students' => $student,
         ]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $Student)
    {
        // validações 
        $request->validate([
            'name' => 'required|max:70|min:3',
            'cpf' => 'required|max:11',
            'email' => 'required',
            'cep' => 'required'
        ]);
        
        $user = auth()->user();
        $Student = $request->all();
        $Student['creatoruser_id'] = $user->id;
        Student::create($Student);
        return redirect('/students');
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

        $Student->update($request->all());
        return redirect('/students');

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

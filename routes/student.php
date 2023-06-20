<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::view('alunos/create2', 'students.create2');
// Route::view('alunos/include', 'students.inclusaoResponsavel');
// Route::view('alunos/nota', 'students.inclusaoNota');


// Route::resource('students', StudentController::class);

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('students', StudentController::class);

    Route::controller(StudentController::class)->group(function () {
        Route::get('student/{student}', 'destroy')->name('student.destroy');
    });
});
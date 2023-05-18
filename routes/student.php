<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::view('alunos/create2', 'students.create2');
Route::view('alunos/include', 'students.inclusaoResponsavel');
Route::view('alunos/nota', 'students.inclusaoNota');


Route::resource('alunos', StudentController::class);

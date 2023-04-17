<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::view('alunos/create2', 'alunos.create2Aluno');
Route::view('alunos/include', 'alunos.inclusaoResponsavel');
Route::view('alunos/nota', 'alunos.inclusaoNota');

Route::resource('alunos', StudentController::class)->except([
    'create'
]);

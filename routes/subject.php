<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


Route::get('disciplinas', [DisciplinaController::class, 'index']);
Route::post('disciplinas', [DisciplinaController::class, 'store']);
Route::get('disciplinas/{disciplina}/edit', [DisciplinaController::class, 'edit'])->name('disciplinas.edit');
Route::put('disciplinas/{disciplina}', [DisciplinaController::class, 'update'])->name('disciplinas.update');
Route::delete('disciplinas/{disciplina}', [DisciplinaController::class, 'destroy'])->name('disciplinas.destroy');

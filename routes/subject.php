<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


Route::get('disciplinas', [SubjectController::class, 'index']);
Route::post('disciplinas', [SubjectController::class, 'store']);
Route::get('disciplinas/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('disciplinas/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
Route::delete('disciplinas/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

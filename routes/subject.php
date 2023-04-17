<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


Route::get('subjects', [SubjectController::class, 'index']);
Route::post('subjects', [SubjectController::class, 'store']);
Route::get('subjects/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
Route::delete('subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


// Route::get('disciplinas', [SubjectController::class, 'index'])->name('disciplinas');
// Route::post('disciplinas', [SubjectController::class, 'store'])->name('disciplinas');
// Route::get('disciplinas/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
// Route::put('disciplinas/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
// Route::delete('disciplinas/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

Route::middleware(['auth'])->group(function () {
    Route::resource('subjects', SubjectController::class);

    Route::controller(SubjectController::class)->group(function () {
        Route::get('subjects/{subjects}', 'destroy')->name('subjects.destroy');
    });
});
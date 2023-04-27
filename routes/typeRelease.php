<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeReleaseController;


// Route::get('tipoLancamentos', [TypeReleaseController::class, 'index'])->name('tipoLancamentos');
// Route::get('tipoLancamentos', [TypeReleaseController::class, 'create'])->name('typeReleases.create');
// Route::post('tipoLancamentos', [TypeReleaseController::class, 'store'])->name('tipoLancamentos');
// Route::get('tipoLancamentos/{typeRelease}/edit', [TypeReleaseController::class, 'edit'])->name('typeReleases.edit');
// Route::put('tipoLancamentos/{typeRelease}', [TypeReleaseController::class, 'update'])->name('typeReleases.update');
// Route::delete('tipoLancamentos/{typeRelease}', [TypeReleaseController::class, 'destroy'])->name('typeReleases.destroy');

Route::middleware(['auth'])->group(function () {
    Route::resource('typeReleases', TypeReleaseController::class);

    Route::controller(TypeReleaseController::class)->group(function () {
        Route::get('typeRelease/{typeRelease}', 'destroy')->name('typeRelease.destroy');
    });
});
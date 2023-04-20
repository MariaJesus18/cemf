<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovenantController;


// Route::middleware(['auth'])->group(function () {
Route::resource('covenants', CovenantController::class);
Route::controller(CovenantController::class)->group(function () {
    Route::get('covenant/{covenant}', 'destroy')->name('covenant.destroy');
    // Route::get('covenant/{covenant}', 'update')->name('covenant.update');
});
    // });

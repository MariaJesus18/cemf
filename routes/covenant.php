<?php

use App\Http\Controllers\CovenantController;
use App\Models\Covenant;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('covenants', CovenantController::class);
    Route::controller(CovenantController::class)->group(function () {
        Route::get('covenant/{covenant}', 'destroy')->name('covenant.destroy');
    });
});

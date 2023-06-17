<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchController;

Route::middleware(['auth'])->group(function () {
    Route::resource('launchs', LaunchController::class);

    Route::controller(LaunchController::class)->group(function () {
        Route::get('launchs/{launchs}', 'destroy')->name('launchs.destroy');
    });
});

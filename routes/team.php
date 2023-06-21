<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('teams', TeamController::class);

    Route::controller(TeamController::class)->group(function () {
        Route::get('teams/{team}', 'destroy')->name('team.destroy');
    });
});

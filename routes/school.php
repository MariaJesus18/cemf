<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('schools', SchoolController::class);

    Route::controller(SchoolController::class)->group(function () {
        Route::get('school/{school}', 'destroy')->name('school.destroy');
    });
});

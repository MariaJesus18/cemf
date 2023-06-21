<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsibleController;


Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('responsibles', ResponsibleController::class);

    Route::controller(ResponsibleController::class)->group(function () {
        Route::get('responsible/{responsible}', 'destroy')->name('responsible.destroy');
    });
});
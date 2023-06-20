<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogbookController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('logBooks', LogbookController::class);

    Route::controller(LogbookController::class)->group(function () {
        Route::get('logBooks/{logBooks}', 'destroy')->name('logBooks.destroy');
    });
});
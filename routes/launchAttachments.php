<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchAttachmentsController;


Route::middleware(['auth'])->group(function () {
    Route::resource('launchAttachments', LaunchAttachmentsController::class);

    Route::controller(LaunchAttachmentsController::class)->group(function () {
        Route::get('launchAttachments/{launchAttachments}', 'destroy')->name('launchAttachments.destroy');
    });
});
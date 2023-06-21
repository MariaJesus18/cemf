<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAttachmentsController;


Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('studentAttachments', StudentAttachmentsController::class);

    Route::controller(StudentAttachmentsController::class)->group(function () {
        Route::get('studentAttachments/{studentAttachments}', 'destroy')->name('studentAttachments.destroy');
    });
});
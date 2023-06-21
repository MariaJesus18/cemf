<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoricalNoteController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('historicalNotes', HistoricalNoteController::class);

    Route::controller(HistoricalNoteController::class)->group(function () {
        Route::get('historicalNotes/{historicalnotes}', 'destroy')->name('historicalNotes.destroy');
    });
});
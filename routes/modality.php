<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModalityController;

Route::resource('modalities', ModalityController::class);
Route::controller(ModalityController::class)->group(function () {
    // Route::get('modalities', 'index')->name('modalities.index');
    // Route::get('modalities/create', 'create')->name('modalities.create');
});

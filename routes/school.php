<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::middleware(['auth'])->group(function () {
});

Route::resource('schools', SchoolController::class);

// Route::controller(SchoolController::class)->group(function () {
// });

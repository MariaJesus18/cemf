<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

// Route::middleware(['auth'])->group(function () {
Route::resource('units', UnitController::class);
// });

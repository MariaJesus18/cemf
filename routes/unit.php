<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

Route::middleware(['auth'])->group(function () {
    Route::view('unidades/create', 'unidades.createUnidades');
    Route::resource('unidades', UnidadeController::class);
});

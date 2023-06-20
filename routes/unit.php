<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

Route::middleware(['emailVerify'],['auth'])->group(function(){
   
    Route::resource('units', UnitController::class);
   
    Route::controller(UnitController::class)->group(function () {
        Route::get('unit/{unit}', 'destroy')->name('unit.destroy');
    });
    
});


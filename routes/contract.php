<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('contracts', ContractController::class);
    Route::controller(ContractController::class)->group(function () {
        Route::get('contract/{contract}', 'destroy')->name('contract.destroy');
    });
});

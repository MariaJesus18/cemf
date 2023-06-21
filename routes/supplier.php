<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('suppliers', SupplierController::class);

    Route::controller(SupplierController::class)->group(function () {
        Route::get('suppliers/{supplier}', 'destroy')->name('supplier.destroy');
    });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('/suppliers', SupplierController::class);
});

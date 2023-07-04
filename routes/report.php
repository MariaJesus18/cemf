<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    // Route::view('relatorios/index', 'reports.index');
    // Route::resource('/reports', Contro);
});


<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth'],['emailVerify'])->group(function () {

    Route::view('launchs', 'launchs.index');
    Route::view('launchs/create', 'launchs.create');

});

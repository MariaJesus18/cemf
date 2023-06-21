<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchController;


Route::middleware(['auth'],['emailVerify'])->group(function () {

    Route::view('launchs', 'launchs.index');
    Route::view('launchs/create', 'launchs.create');

});

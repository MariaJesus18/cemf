<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::middleware(['auth'])->group(function ()
// {
// });

Route::resource('users', UserController::class);

Route::controller(UserController::class)->group(function () {
    Route::get('user/activated', 'activated')->name('user.activated');
    Route::get('user/disabled', 'disabled')->name('user.disabled');
    Route::get('user/show/{user}', 'show')->name('user.show');
    // Route::get('user/promote/{user}', 'promote')->name('user.promote');
});

// Route::post('usuario/update/{user}', 'show')->name('usuario.update');

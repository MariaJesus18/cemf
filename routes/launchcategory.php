<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaunchCategoryController;
use App\Models\LaunchCategory;

Route::middleware(['auth'],['emailVerify'])->group(function () {

Route::resource('lcategories', LaunchCategoryController::class);

// Route::controller(LaunchCategoryController::class)->group(function () {
//     Route::get('lcategorie/{lcategory}', 'show')->name('lcategorie.show');
//     Route::get('lcategorie/{lcategory}', function (LaunchCategory $launchCategory) {
//         return view('launchcategory.show', ['launchCategory' => $launchCategory]);
//     })->name('llcategorie.show');
//     });
});

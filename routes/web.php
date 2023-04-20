<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');
Route::view('/dashboard', 'dashboard');



// Route::middleware(['auth'])->group(function ()
// {
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/user.php';
require __DIR__ . '/student.php';
require __DIR__ . '/unit.php';
require __DIR__ . '/subject.php';
require __DIR__ . '/report.php';
require __DIR__ . '/launch.php';
require __DIR__ . '/school.php';
require __DIR__ . '/covenant.php';

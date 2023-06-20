<?php


use Illuminate\Support\Facades\Route;

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
Route::view('/dashboard', 'dashboard')->middleware('emailVerify');

require __DIR__ . '/auth.php';
require __DIR__ . '/user.php';
require __DIR__ . '/student.php';
require __DIR__ . '/unit.php';
require __DIR__ . '/subject.php';
require __DIR__ . '/report.php';
require __DIR__ . '/launch.php';
require __DIR__ . '/school.php';
require __DIR__ . '/cashAccount.php';
require __DIR__ . '/covenant.php';
require __DIR__ . '/typeRelease.php';
require __DIR__ . '/team.php';
require __DIR__ . '/responsible.php';
require __DIR__ . '/studentAttachments.php';
require __DIR__ . '/logBook.php';
require __DIR__ . '/contract.php';
require __DIR__ . '/modality.php';
require __DIR__ . '/supplier.php';
require __DIR__ . '/historicalnote.php';
require __DIR__ . '/launchAttachments.php';

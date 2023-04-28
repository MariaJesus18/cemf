<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashAccountController;

// Route::get('/contaCaixa', [CashAccountController::class , 'index']);
// Route::post('contaCaixa', [CashAccountController::class, 'store']);
// Route::get('contaCaixa/{cashAccount}/edit', [CashAccountController::class, 'edit'])->name('cashAccounts.edit');
// Route::put('contaCaixa/{cashAccount}', [CashAccountController::class, 'update'])->name('cashAccounts.update');
// Route::delete('contaCaixa/{cashAccount}', [CashAccountController::class, 'destroy'])->name('cashAccounts.destroy');


Route::middleware(['auth'])->group(function () {
    Route::resource('cashAccounts', CashAccountController::class);

    Route::controller(CashAccountController::class)->group(function () {
        Route::get('cashAccounts/{cashAccount}', 'destroy')->name('cashAccount.destroy');
    });
});
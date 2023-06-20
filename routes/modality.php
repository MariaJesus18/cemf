
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModalityController;

Route::middleware(['auth'],['emailVerify'])->group(function () {
    Route::resource('modalitys', ModalityController::class);

    Route::controller(ModalityController::class)->group(function () {
        Route::get('modalitys/{modalitys}', 'destroy')->name('modalitys.destroy');
    });
});

<?php

use App\Http\Controllers\AppliesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply', [AppliesController::class, 'index'])->name('apply');
Route::get('/apply-create', [AppliesController::class, 'create'])->name('apply-create');
Route::post('/apply-store', [AppliesController::class, 'store'])->name('apply-store');
Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/verify', [VerifyController::class, 'getVerify'])->name('getVerify');
Route::post('/verify', [VerifyController::class, 'postVerify'])->name('verify');

Route::get('/wedding', [WeddingController::class, 'index'])->name('wedding');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/apply-show/{id}',[\App\Http\Controllers\Back\AppliesController::class, 'show'])->name('apply-show');
    Route::get('/checked-status/{id}',[\App\Http\Controllers\Back\AppliesController::class, 'edit_status_check'])->name('checked-status');
    Route::get('/rechecked-status/{id}',[\App\Http\Controllers\Back\AppliesController::class, 'edit_status_recheck'])->name('rechecked-status');

    Route::get('/cause-show/{id}',[\App\Http\Controllers\Back\CauseController::class, 'show'])->name('cause-show');
    Route::get('/cause-create', )

    Route::get('/apply-create', [\App\Http\Controllers\Back\AppliesController::class, 'create'])->name('apply-create');
    Route::get('/change-history/{id}', [\App\Http\Controllers\Back\AppliesController::class, 'history'])->name('change-history');

    Route::get('history-all', [\App\Http\Controllers\Back\HistoryController::class, 'index'])->name('history-all');

});

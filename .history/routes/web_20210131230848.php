<?php

use App\Http\Controllers\AppliesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/wedding', [WeddingController::class, 'index'])->name('wedding');

Route::get('/verify', [VerifyController::class, 'getVerify'])->name('getVerify');
Route::post('/verify', [VerifyController::class, 'postVerify'])->name('verify');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

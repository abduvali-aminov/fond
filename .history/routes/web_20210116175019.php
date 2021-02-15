<?php

use App\Http\Controllers\AppliesController;
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

Route::get('apply', [AppliesController::class, 'index'])->name('apply');
Route::get('apply-create', [AppliesController::class, 'create'])->name('apply-create');
Route::post('apply-store', 'AppliesController@store'])->name('apply-store');

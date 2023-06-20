<?php

use App\Http\Controllers\KlantController;
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

Route::get('/', function () {
    return view('welcome');
});

//route to the index of klant
Route::get('/klant', [App\Http\Controllers\KlantController::class, 'index'])->name('klant.index');

//route to all resources
Route::resource('klant', KlantController::class);

//route to the show of klant
Route::get('/klant/show/{id}', [App\Http\Controllers\KlantController::class, 'show'])->name('klant.show');

//route to the edit of klant
Route::get('/klant/edit/{id}', [App\Http\Controllers\KlantController::class, 'edit'])->name('klant.edit');

//route to the update of klant
Route::put('/klant/{id}', [App\Http\Controllers\KlantController::class, 'update'])->name('klant.update');

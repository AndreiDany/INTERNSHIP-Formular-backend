<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FormController;
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

Route::get('/forms', [App\Http\Controllers\FormularController::class, 'index']);
Route::post('/forms', [App\Http\Controllers\FormularController::class, 'testPost']);
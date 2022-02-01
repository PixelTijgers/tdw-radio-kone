<?php

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

// Page route.
Route::redirect('/', '/be');

Route::get('/nl', 'App\Http\Controllers\HomeControllerBE@index');
Route::get('/nl/disclaimer', function() {
    return view('be.disclaimer');
});

Route::get('/fr', 'App\Http\Controllers\HomeControllerFR@index');
Route::get('/fr/disclaimer', function() {
    return view('fr.disclaimer');
});

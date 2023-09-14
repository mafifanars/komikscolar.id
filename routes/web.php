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

require __Dir__ . '/api.php';

Route::get('/', function () {
    return view('app');
});

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
});

Route::get('/kebijakan-privasi', function () {
    return view('kebijakan-privasi');
});
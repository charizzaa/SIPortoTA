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

Route::get('/', function () {
    return view('login');
});
Route::get('/forgotpass', function () {
    return view('forgotpass');
});
Route::get('/resetpass', function () {
    return view('resetpass');
});
Route::get('/maintenance', function () {
    return view('maintenance');
});
Route::get('/achnotfound', function () {
    return view('achnotfound');
});
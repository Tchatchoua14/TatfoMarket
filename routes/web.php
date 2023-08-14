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
    return view('welcome');
});

// route backend
Route::get('/back/index', function () {
    return view('back.index');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/font/index', function () {
    return view('font.index');
});

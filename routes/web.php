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
Route::get('/back/produit', function () {
    return view('back.produit');
});
Route::get('/back/formproduit', function () {
    return view('back.formproduit');
});
Route::get('/back/profile', function () {
    return view('back.profile');
});
Route::get('/back/user', function () {
    return view('back.user');
});
Route::get('/back/formuser', function () {
    return view('back.formuser');
});
Route::get('/back/category', function () {
    return view('back.category');
});
Route::get('/back/formcategory', function () {
    return view('back.formcategory');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/font/index', function () {
    return view('font.index');
});

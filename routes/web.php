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
    return view('componen.home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('componen.about', [
        "title" => "About"
    ]);
});

Route::get('/galleri', function () {
    return view('componen.galleri', [
        "title" => "Galleri"
    ]);
});

Route::get('/contact', function () {
    return view('componen.contact', [
        "title" => "Contact"
    ]);
});

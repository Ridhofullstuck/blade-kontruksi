<?php

use App\Http\Controllers\kontruksicontroller;
use App\Models\Kontruksi;
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


Route::get('/', [kontruksicontroller::class, 'index']);

Route::get('/about', [kontruksicontroller::class, 'about']);

Route::get('/galleri', [kontruksicontroller::class, 'galleri']);

Route::get('/contact`', [kontruksicontroller::class, 'contact']);

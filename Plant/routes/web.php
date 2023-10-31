<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Plant1Controller;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/plant1',[Plant1Controller::class,'index']);


Route::get('/plant2', function () {
    return view('plant2');
});


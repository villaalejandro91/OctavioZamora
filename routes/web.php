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

Route::get('/', function () {
    return view('home');
})->name('welcome');


Route::get('/home', function () {
    return view('home');
})->name('hom');

Route::get('/fotografia', function () {
    return view('fotografia');
})->name('foto');

Route::get('/clientes', function () {
    return view('clientes');
})->name('cli');

Route::get('/contacto', function () {
    return view('contacto');
})->name('con');
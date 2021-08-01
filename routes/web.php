<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Contacts;

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



Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});


Route::get('/form', function () {
    return view('form');
});


Route::get('list', [Contacts::class, 'show']);

Route::get('delete/{id}', [Contacts::class, 'destroy']);

Route::get('edit/{id}', [Contacts::class, 'showContact']);

Route::post('edit', [Contacts::class, 'modify']);
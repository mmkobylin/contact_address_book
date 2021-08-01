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

// Route::get('/contacts', function () {
//     return view('list');
// });

Route::get('/form', function () {
    return view('form');
});

//Route::get('/list', 'App\Http\Controllers\Contacts@show');

Route::get('list', [Contacts::class, 'show']);
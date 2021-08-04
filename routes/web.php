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



Route::get('/', function () {
    return view('home');
});

Route::get('/list', [Contacts::class, 'showActive']);

Route::get('/add', [Contacts::class, 'create']);

Route::post('/add', [Contacts::class, 'createContact']);

Route::get('/delete/{id}', [Contacts::class, 'deactivate']);

Route::get('/edit/{id}', [Contacts::class, 'showContact']);

Route::post('/edit', [Contacts::class, 'modify']);

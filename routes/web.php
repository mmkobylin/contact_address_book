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

Route::get('list', [Contacts::class, 'show']);

// with view : 1st is address, second is blade ) 
Route::view('add', 'form');

Route::post('add', [Contacts::class, 'create']);

Route::get('delete/{id}', [Contacts::class, 'destroy']);

Route::get('edit/{id}', [Contacts::class, 'showContact']);

Route::get('edit', [Contacts::class, 'show']);

Route::post('edit', [Contacts::class, 'modify']);
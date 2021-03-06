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

// 1st part if route, second array: class and the method used;
Route::get('/all', [Contacts::class, 'showAll']);

Route::get('/list', [Contacts::class, 'showActive']);

Route::view('/add', 'form');

Route::post('/add', [Contacts::class, 'createContact']);

Route::get('/active/{id}', [Contacts::class, 'activate']);

Route::get('/deactive/{id}', [Contacts::class, 'deactivate']);

// pick up the id of the Contact and change it;
Route::get('/edit/{id}', [Contacts::class, 'showContact']);

Route::post('/edit', [Contacts::class, 'modify']);

// pick up the id of the Contact and delete it;
Route::get('/delete/{id}', [Contacts::class, 'showAll']);

Route::post('/delete', [Contacts::class, 'delete']);


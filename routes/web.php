<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
// routes/web.php
Route::get('/contacts/{id}/edit', 'App\Http\Controllers\ContactController@edit')->name('contacts.edit');
Route::put('/contacts/{id}', 'App\Http\Controllers\ContactController@update')->name('contacts.update');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@destroy')->name('contacts.destroy');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contacts.index');
Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create')->name('contacts.create');
Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store')->name('contacts.store');
Route::get('/contacts/search', 'App\Http\Controllers\ContactController@search')->name('contacts.search');

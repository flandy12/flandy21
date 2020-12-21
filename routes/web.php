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
Route::get('/','ActionController@index');
//tampilan API berada di controller Objek.php
Route::get('/film', 'Objek@DataJson');
//Tampilan ADMIN
Route::get('/admin', 'ActionController@error');
//Tampilan ADD DATA berada  selengkapnya di controller ActionController.php
Route::get('/add', 'ActionController@Add');
//Tampilan MENGIRIM DATA KE DATABASE selengkapnya berada di controller ActionController.php
Route::post('/add/proses', 'ActionController@AddData');
//Tampilan Login
Route::get('/login', 'Objek@Login');


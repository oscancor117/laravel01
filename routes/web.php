<?php

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

Route::get('/', 'ControladorPagina@inicio')->name('inicio');
Route::post('/', 'ControladorPagina@registrar')->name('registrar');
Route::get('administrar', 'ControladorPagina@administrar')->name('administrar');
Route::get('prueba', 'ControladorPagina@prueba')->name('prueba');
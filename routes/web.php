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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/addco', function(){
    return view('pages.addco');
});

Route::get('/addco1', function(){
    return view('pages.addco2');
});

Route::get('/viewco', function(){
    return view('pages.viewco');
});

Route::post('/viewco1', 'DsceController@viewco');

Route::resource('dsces', 'DsceController');
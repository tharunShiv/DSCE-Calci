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

/*
Route::get('/addco1', function(){
    return view('pages.addco2');
});
*/
Route::get('/viewco', function(){
    return view('pages.viewco');
});


Route::get('/addpso', function(){
    return view('pages.addpso');
});
/*
Route::get('/addpso1', function(){
    return view('pages.addpso2');
});
*/
Route::get('/viewpso', function(){
    return view('pages.viewpso');
});

Route::post('/viewco1', 'DsceController@viewco');
Route::post('/viewpso1', 'Dsce1Controller@viewpso');
Route::resource('dsces', 'DsceController');
Route::resource('dsce1s', 'Dsce1Controller');
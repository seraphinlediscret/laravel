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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home/home');
});
//Route::get('/param', 'Controller@web');

Route::get('/param', function () {
    return view('para/parameters');
});
Route::post('/param', 'ProjectController@param');

Route::get('/app', function () {
    return view('appli/appli');
});

Route::get('/rule', function () {
    return view('rule/rule');
});

Route::get('/quote', function () {
    return view('quote/quote');
});

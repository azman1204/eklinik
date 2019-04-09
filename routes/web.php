<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', 'LoginController@index');
Route::get('/admin/claim', 'AdminController@claim');
Route::get('/admin/zone', 'AdminController@zone');
Route::get('/admin/zone/form', 'AdminController@zoneform');
Route::get('/admin/parameters', 'AdminController@index');
Route::get('/admin/history', 'HistoryController@index');


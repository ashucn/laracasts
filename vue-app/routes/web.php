<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/statuses', 'StatusController@index');
Route::post('/statuses', 'StatusController@store');


Route::get('skills', function () {
    return ['vue', 'laravel', 'php'];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/themes', 'pages.themes.index')->name('themes.index');
Route::view('/themes/create', 'pages.themes.create')->name('themes.create');

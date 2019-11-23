<?php

Route::get('/',[
   'uses' => 'ProjectController@index',
   'as'   => '/'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

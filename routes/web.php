<?php

Route::get('/', 'FrogController@index')->name('homeIndex');
Route::get('/frogs/all/{paginate?}', 'FrogController@frogs')->name('frogs');
Route::get('/frog/create', 'FrogController@store')->name('createFrog');
Route::post('/frog/create', 'FrogController@store')->name('createFrog');
Route::post('/frog/{id}/kill', 'FrogController@destroy')->name('killFrog');

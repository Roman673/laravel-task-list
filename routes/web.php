<?php

Route::get('/', 'TasksController@index')->name('index');
Route::post('/create', 'TasksController@store')->name('create');
Route::delete('/task/{task}/delete', 'TasksController@destroy')->name('delete');

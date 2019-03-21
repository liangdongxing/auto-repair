<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('companies', 'CompaniesController', ['only' => ['show', 'update', 'edit']]);
Route::resource('cars', 'CarsController', ['only' => ['index','show', 'update', 'edit']]);

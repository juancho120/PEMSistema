<?php

Route::resources([
    '/people' => 'PersonController',
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

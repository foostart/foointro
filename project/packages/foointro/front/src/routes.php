<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('home', [
    'as' => 'front.home',
    'uses' => 'Foointro\Front\Controllers\FrontController@index'
]);

Route::get('list', [
    'as' => 'front.list',
    'uses' => 'Foointro\Front\Controllers\FrontController@get_list'
]);

Route::get('detail', [
    'as' => 'front.detail',
    'uses' => 'Foointro\Front\Controllers\FrontController@get_detail'
]);

Route::get('service', [
    'as' => 'front.service',
    'uses' => 'Foointro\Front\Controllers\FrontController@get_service'
]);
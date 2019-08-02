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
Route::get('/',                'Controller@index')            ->name('welcome');

Route::get('/policy',           'Controller@policy')            ->name('policy');

Route::get('/borough/{region}', 'Controller@borough')            ->name('borough');

Route::get('/about', 'Controller@about')            ->name('about');

Route::get('/api/instagram/{quntity}', 'PublicController@getInstagram');

Route::get('/projects/{project_num}', 'Controller@projects');


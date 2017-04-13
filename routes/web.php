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

Auth::routes();

Route::get('/', function() {
    return view('welcome');
});
Route::get('/home', 'WorksController@index');
Route::get('/works/{work}', 'WorksController@show');

Route::get('/register-work', 'CompanyController@index');
Route::post('/commit-work', 'CompanyController@create');

Route::get('/mypage', 'UsersController@index');

Route::get('sample', function() {
    dd(Auth::user()->id);
});

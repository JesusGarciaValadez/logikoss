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
Route::prefix('/repositories')->name('repositories.')->group(function ()
{
  Route::get('/', 'RepositoriesController@index')->name('index');
  Route::get('/order_by/{orderBy}/direction/{direction}', 'RepositoriesController@show')->name('orderBy');
  Route::post('/', 'RepositoriesController@search')->name('search');
});

Route::prefix('/user')->name('user.')->group(function ()
{
    Route::get('/{githubUsername}', 'GithubUserInfoController@index')->name('account');
});

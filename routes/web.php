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

Route::get('login', [
    'as' => 'getLogin',
    'uses' => 'Auth\LoginController@getLogin'
]);

Route::post('login', [
    'as' => 'postLogin',
    'uses' => 'Auth\LoginController@postLogin'
]);

Route::get('logout', [
    'as' => 'getLogout',
    'uses' => 'Auth\LoginController@getLogout'
]);

Route::group(['middleware'  => 'auth'], function() {
    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', function() {
            return view('dashboard.master');
        });

        Route::group(['prefix' => 'users'], function() {
            Route::get('list', array(
                'as' => 'getListUsers',
                'uses' => 'UsersController@getListUsers',
            ));
            Route::get('add', array(
                'as' => 'getAddUser',
                'uses' => 'UsersController@getAddUser'
            ));
            Route::post('add', array(
                'as' => 'postAddUser',
                'uses' => 'UsersController@postAddUser',
            ));
            Route::get('delete/uid={id}', array(
                'as' => 'getDeleteUser',
                'uses' => 'UsersController@getDeleteUser'
            ))->where('id', '[0-9]+');
            Route::get('edit/uid={id}', array(
                'as' => 'getEditUser',
                'uses' => 'UsersController@getEditUser'
            ))->where('id', '[0-9]+');
            Route::post('edit/uid={id}', array(
                'as' => 'postEditUser',
                'uses' => 'UsersController@postEditUser'
            ));
        });
        
        Route::group(['prefix' => 'taxonomy'], function() {
            Route::get('list', array(
                'as' => 'getListTaxonomies',
                'uses' => 'TaxonomyController@getListTaxonomies'
            ));
        });
    });
});
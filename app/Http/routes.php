<?php
use App\Events\PushMediaEvent;
use App\Store;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');
});
Route::get('all-stores', 'StoreController@index');
Route::get('add-store', 'StoreController@create');
Route::post('add-store','StoreController@store');
Route::post('add-file', 'FileController@store');
Route::get('all-files','FileController@index');
Route::get('delete-all-files','FileController@destroyAll');
Route::get('delete-all-stores','StoreController@destroyAll');
Route::get('delete-store/{id}','StoreController@destroy');
Route::get('delete-file/{id}','FileController@destroy');

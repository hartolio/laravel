<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "hello world";
});
Route::get('hello-world-con', 'testCon@helloDariControllerView');
Route::get('hello-world-con2', 'testCon@helloDariControllerViewDariFolder');
Route::get('hello-world-con2', 'testCon@register');
Route::get('artikel', 'ArtikelController@index');
Route::get('artikel/create', 'ArtikelController@testInsert');
Route::post('artikel', 'ArtikelController@simpan');
Route::resource('artikel', 'ArtikelController');
//Route::post('artikel', array('uses'=>'ArtikelController@simpan'));
//Route::post('artikel.store', 'ArtikelController@simpan');
Route::get('artikel/{id}', 'ArtikelController@testRead');
Route::post('artikel/{id}', 'ArtikelController@edit');
Route::get('artikel/{id}/delete', 'ArtikelController@destroy');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

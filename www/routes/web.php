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


Route::get('/','PagesController@index');

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/hello', function () {
    // return view('welcome');
    return "Hello World";
});
*/

Route::get('/about',function() {
    return view('pages.about');
} );

/*Route::get('/user/{id}',function($id) {
    return 'This is user : '.$id;
} );*/


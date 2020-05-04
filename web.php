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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/resources/{folder}/{file}', function($folder, $file) {
    $file_name = File::get(resource_path() . "/" . $folder . "/" . $file);
    $response = Response::make($file_name);
    if (explode(".", $file)[1] == "css" ){
        $response->header('Content-Type', "text/css");
    } elseif (explode(".", $file)[1] == "js")
        $response->header('Content-Type', "text/js");
    return $response;
});

Route::get('/public/{folder}/{file}', function($folder, $file) {
    $file_name = File::get(public_path() . "/" . $folder . "/" . $file);
    $response = Response::make($file_name);
    if (explode(".", $file)[1] == "css" ){
        $response->header('Content-Type', "text/css");
    } elseif (explode(".", $file)[1] == "js")
        $response->header('Content-Type', "text/js");
    return $response;
});

Route::resource('/', 'TestController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/converter/video', function () {
    return view('videoconvert');
});
Route::post('/converter/video', 'ConverterController@videoconverter');

Route::get('/converter/audio', function () {
    return view('audioconvert');
});
Route::post('/converter/audio', 'ConverterController@audioconverter');

Route::get('/converter/image', function () {
    return view('imageconvert');
});
Route::post('/converter/image', 'ConverterController@imageconverter');


Route::get('/testprocess', 'VideoConverter@process');

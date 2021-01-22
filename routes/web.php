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
Route::get('/homework', [\App\Http\Controllers\Homework::class, 'index']);
Route::post('/homework', [\App\Http\Controllers\Homework::class, 'create']);
Route::delete('/homework/{id}', [\App\Http\Controllers\Homework::class, 'delete']);
Route::get('/hello', function () {
    return view("hello");
});

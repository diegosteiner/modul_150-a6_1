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
Route::get('/homework/{id}/edit', [\App\Http\Controllers\Homework::class, 'edit']);
Route::post('/homework', [\App\Http\Controllers\Homework::class, 'create']);
Route::delete('/homework/{id}', [\App\Http\Controllers\Homework::class, 'delete']);
Route::patch('/homework/{id}', [\App\Http\Controllers\Homework::class, 'update']);
Route::get('/hello', function () {
    return view("hello");
});

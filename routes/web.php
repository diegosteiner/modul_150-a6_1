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

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view("hello");
});


/**
 * Display All Tasks
 */
Route::get('/homework', function () {
    $homework = \App\Models\Homework::orderBy('created_at', 'asc')->get();

    return view('homework', [
        'homework' => $homework,
    ]);
});
/**
 * Add A New Task
 */
Route::post('/homework', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'task' => 'required|max:255',
        'subject' => 'required',
        'due' => 'date'
    ]);

    if ($validator->fails()) {
        return redirect('/homework')
            ->withInput()
            ->withErrors($validator);
    }

    $homework = new \App\Models\Homework;
    $homework->subject = $request->subject;
    $homework->task = $request->task;
    $homework->due = $request->due;
    $homework->save();

    return redirect('/homework');
});

/**
 * Delete An Existing Task
 */
Route::delete('/homework/{id}', function ($id) {
    \App\Models\Homework::findOrFail($id)->delete();

    return redirect('/homework');
});

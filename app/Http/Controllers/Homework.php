<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Homework extends Controller
{
    function index()
    {

        $homework = \App\Homework::orderBy('created_at', 'asc')->get();

        return view('homework', [
            'homework' => $homework,
        ]);
    }

    function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'task' => 'required|max:255',
            'subject' => 'required',
            'due' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/homework')
                ->withInput()
                ->withErrors($validator);
        }

        $homework = new \App\Homework;
        $homework->subject = $request->subject;
        $homework->task = $request->task;
        $homework->due = $request->due;
        $homework->save();

        return redirect('/homework');
    }

    function delete($id)
    {
        \App\Homework::findOrFail($id)->delete();

        return redirect('/homework');
    }
}

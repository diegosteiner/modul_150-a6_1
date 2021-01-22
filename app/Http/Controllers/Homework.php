<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Homework extends Controller
{
    function index()
    {
        $homework = \App\Homework::orderBy('created_at', 'asc')->get();

        return view('homework.index', [
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

    function update($id, Request $request)
    {
        $homework = \App\Homework::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'task' => 'required|max:255',
            'subject' => 'required',
            'due' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/homework/' . $id . '/edit')
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $homework->subject = $request->subject;
        $homework->task = $request->task;
        $homework->due = $request->due;
        $homework->save();

        return redirect('/homework');
    }

    function edit($id)
    {
        $homework = \App\Homework::findOrFail($id);

        return view('homework.edit', ['homework' => $homework]);
    }

    function delete($id)
    {
        \App\Homework::findOrFail($id)->delete();

        return redirect('/homework');
    }
}

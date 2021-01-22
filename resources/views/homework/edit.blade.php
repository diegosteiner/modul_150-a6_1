
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel-body pt-5">
        <h1>Edit Homework</h1>
        <!-- Display Validation Errors -->
        @include('common.errors')

        <form action="/homework/{{ $homework->id }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PATCH" />
            {{ csrf_field() }}

            <div class="form-group">
                <label for="homework-subject" class="col-sm-3 control-label">Subject</label>

                <div class="col-sm-6">
                    <select name="subject" id="homework-subject" class="form-control">
                      <option value="Mathematik" {{ ($homework->subject == "Mathematik" ? 'selected' : '') }}>Mathematik</option>
                      <option value="Deutsch" {{ ($homework->subject == "Deutsch" ? 'selected' : '') }}>Deutsch</option>
                      <option value="English" {{ ($homework->subject == "English" ? 'selected' : '') }}>Englisch</option>
                      <option value="Geschichte" {{ ($homework->subject == "Geschichte" ? 'selected' : '') }}>Geschichte</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="homework-task" class="col-sm-3 control-label">Homework</label>

                <div class="col-sm-6">
                    <input type="text" value="{{ $homework->task }}" name="task" id="homework-task" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="homework-due" class="col-sm-3 control-label">Due</label>

                <div class="col-sm-6">
                    <input type="date" value="{{ $homework->due }}" name="due" id="homework-due" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Save Homework
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel-body pt-5">
            <h1>New Subject</h1>

            <!-- Display Validation Errors -->
            @include('common.errors')

            {{-- <form action="/homework" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="homework-subject" class="col-sm-3 control-label">Subject</label>

                    <div class="col-sm-6">
                        <select name="subject" id="homework-subject" class="form-control">
                            <option value="Mathematik">Mathematik</option>
                            <option value="Deutsch">Deutsch</option>
                            <option value="Englisch">Englisch</option>
                            <option value="Geschichte">Geschichte</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="homework-task" class="col-sm-3 control-label">Homework</label>

                    <div class="col-sm-6">
                        <input type="text" name="task" id="homework-task" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="homework-due" class="col-sm-3 control-label">Due</label>

                    <div class="col-sm-6">
                        <input type="date" name="due" id="homework-due" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Homework
                        </button>
                    </div>
                </div>
            </form> --}}
        </div>

        @if (count($subjects) > 0)

            <div class="panel-body pt-5">
                <h1>Subjects</h1>
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $subject->name }}</div>
                                </td>

                                <td>
                                    {{-- <form action="/homework/{{ $homework_item->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection

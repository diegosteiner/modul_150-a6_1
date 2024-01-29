@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel-body pt-5">
            <h1>New Subject</h1>
            <!-- Display Validation Errors -->
            @include('common.errors')

            <form action="/subjects" method="POST" class="form-horizontal">
                {{ csrf_field() }}


                <div class="form-group mb-3">
                    <label for="subject-name" class="col-sm-3 control-label">Subject name</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="subject-name" class="form-control">
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Subject
                        </button>
                    </div>
                </div>
            </form>
        </div>

        @if (count($subjects) > 0)

            <div class="panel-body pt-5">
                <h1>Subjects</h1>
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Subject</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $subject->name }}</div>
                                </td>

                                <td>
                                    <form action="/subjecs/{{ $subject->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection

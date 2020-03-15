@extends('layouts.user')

@section('content')





    <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Subject</th>
                            <th>Homework</th>
                            <th>Created date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->course->name}}</td>
                            <td>{{$task->homework}}</td>
                            <td>{{$task->created_at}}</td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



@endsection

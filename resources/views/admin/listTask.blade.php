@extends('layouts.metro')

@section('content')

    <!------------------------- Modals ------------------------>

    <!-- addUser -->
    <div id="addTask" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <form action="/admin/tasks/store" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="id">Student Id : </label>
                            <select  class="form-control  input-lg dynamic" required name="student_id" data-dependent="name">
                                <option selected>Select Users</option>
                                @foreach($students as $student)
                                    var pop = <option value="{{$student->id}}">{{$student->id}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Student Name : </label>
                            <select  class="form-control input-lg dynamic" id="name" required name="student_name">
                                <option selected>Select Users</option>
                                @foreach($students as $student)
                                    var pop = <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="course_name">Course Name : </label>
                            <select  class="form-control" required name="course_id">
                                <option selected>Select Course</option>

                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="task">Homework : </label>
                            <input type="text" autocomplete="off" required name="task" class="form-control" >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!------------------------ End Modals --------------------->



    <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

            @if(session('msg'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

                            <div class="alert alert-outline-success fade show" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                <div class="alert-text">        {{session('msg')}}</div>

                            </div>
                        </div>


                    </div>
                </div>
            @endif



            <div class="kt-widget4 kt-widget4--sticky">
                <div class="kt-portlet">



                    @if(count($tasks) > 0)

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addTask">Add Task</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Id</th>
                                        <th>Student Name</th>
                                        <th>Course</th>
                                        <th>Task</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($tasks as $task)
                                        <tr>

                                            <td><a href="/admin/tasks/{{$task->student_id}}" target="_blank">{{$task->student_id}}</a></td>
                                            <td><a href="/admin/tasks/{{$task->student_name}}" target="_blank">{{$task->student_name}}</a></td>
                                            <td><a href="/admin/tasks/{{$task->course_name}}">{{$task->course_name}}</a></td>
                                            <td><a href="/admin/tasks/{{$task->name}}">{{$task->name}}</a></td>
                                            <td>{{$task->created_at}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @else

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addTask">Add Task</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Id</th>
                                        <th>Student Name</th>
                                        <th>Course</th>
                                        <th>Task</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12 text-center">
                                <h3>No Tasks ...</h3>
                                <img src="{{asset('images/no_items.png')}}" height="280px" width="480px">

                            </div>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

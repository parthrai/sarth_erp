@extends('layouts.metro')

@section('content')

    <!------------------------- Modals ------------------------>

    <!-- addUser -->
    <div id="addCourse" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <form action="/admin/courses/enroll" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="course_id" value="{{$course->id}}">

                        <div class="form-group">
                            <label for="name">Select Student</label>


                            <select name="student_id" class="form-control">
                                @foreach($students as $student)

                                    <option value="{{$student->id}}"> {{$student->name}}</option>
                                 @endforeach
                            </select>
                        </div>






                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enroll</button>
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



                    @if(count($course->enrollments) > 0)

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCourse">Enroll a student</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student Name</th>

                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($course->enrollments as $enrollment)
                                        <tr>


                                            <td>{{$enrollment->id}}</td>
                                            <td>{{$enrollment->student->name}}</td>
                                            <td>{{$enrollment->created_at}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @else

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCourse">Enroll a student</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Fees</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12 text-center">
                                <h3>No enrollments ...</h3>
                                <img src="{{asset('images/no_items.png')}}" height="280px" width="480px">

                            </div>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.metro')

@section('content')

    <!------------------------- Modals ------------------------>

    <!-- addUser -->
    <div id="addFees" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <form action="/admin/fees/store" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Student</label>

                            <select  class="form-control" required name="student_id">
                                <option selected>Select Users</option>
                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach

                            </select>


                        </div>

                        <div class="form-group">
                            <label for="email">Course</label>

                            <select  class="form-control" required name="course_id">
                                <option selected>Select Course</option>

                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="type">Amount</label>
                            <input type="name" required name="amount_paid" class="form-control" >



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



                    @if(count($fees) > 0)

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFees">Add Fees</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student</th>
                                        <th>Course</th>
                                        <th>Total Fee</th>
                                        <th>Amount Paid</th>
                                        <th>Amount Due</th>
                                        <th>Date</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($fees as $fee)
                                        <tr>

                                            <td><a href="#" >{{$fee->id}}</a></td>
                                            <td><a href="#">{{$fee->student->name}}</a></td>
                                            <td>{{$fee->course->name}}</td>
                                            <td>Rs {{$fee->course->fees}}</td>
                                            <td>Rs {{$fee->amount_paid}}</td>
                                            <td>Rs {{$fee->amount_due}}</td>

                                            <td>{{$fee->created_at}}</td>
                                            <td><a href="/admin/fees/delete/{{$fee->id}}" class="btn btn-danger">X</a></td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @else

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFees">Add Fees</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student</th>
                                        <th>Course</th>
                                        <th>Total Fee</th>
                                        <th>Amount Paid</th>
                                        <th>Amount Due</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12 text-center">
                                <h3>No fees ...</h3>
                                <img src="{{asset('images/no_items.png')}}" height="280px" width="480px">

                            </div>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

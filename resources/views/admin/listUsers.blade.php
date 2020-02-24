@extends('layouts.metro')

@section('content')

    <!------------------------- Modals ------------------------>

    <!-- addUser -->
    <div id="addUser" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <form action="/admin/users/AddUser" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" required name="name" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" required name="email" class="form-control" >
                        </div>


                        <div class="form-group">
                            <label for="type">Type:</label>

                            <select class="form-control" name="type" required >
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>

                            </select>

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



                @if(count($users) > 0)

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addUser">Add User</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>

                                            <td><a href="/admin/users/{{$user->id}}" target="_blank">{{$user->id}}</a></td>
                                            <td><a href="/admin/users/{{$user->id}}">{{$user->name}}</a></td>
                                            <td><a href="/admin/users/{{$user->id}}">{{$user->name}}</a></td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @else

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addUser">Add User</button>

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-12 text-center">
                                <h3>No Users ...</h3>
                                <img src="{{asset('images/no_items.png')}}" height="280px" width="480px">

                            </div>
                        </div>


                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.metro')

@section('content')

    <!------------------------- Modals ------------------------>

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
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Presence</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>

                                            <td><a href="#" >{{$user->id}}</a></td>
                                            <td><a href="#">{{$user->name}}</a></td>
                                            <td>
                                                <!-- Default unchecked -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked+{{$user->id}}">
                                                    <label class="custom-control-label" for="defaultUnchecked+{{$user->id}}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#GenReport">Generate Report</button>
                        </div>

                    @else

                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <h3>No Courses ...</h3>
                                <img src="{{asset('images/no_items.png')}}" height="280px" width="480px">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection


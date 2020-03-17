@extends('layouts.user')

@section('content')





    {{--<div class="col-lg-6 col-xl-6 order-lg-1 order-xl-1">--}}
        {{--<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">--}}

            {{--<!--begin:: Widgets/Inbound Bandwidth-->--}}
            {{--<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">--}}
                {{--<div class="kt-portlet__head kt-portlet__space-x">--}}
                    {{--<div class="kt-portlet__head-label">--}}
                        {{--<h3 class="kt-portlet__head-title">--}}
                            {{--Total Tasks--}}
                        {{--</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="kt-portlet__body kt-portlet__body--fluid">--}}
                    {{--<div class="kt-widget20">--}}
                        {{--<div class="kt-widget20__content kt-portlet__space-x">--}}
                            {{--<span class="kt-widget20__number kt-font-brand">{{$tasks}}</span>--}}
                            {{--<span class="kt-widget20__desc"></span>--}}
                        {{--</div>--}}
                        {{--<div class="kt-widget20__chart" style="height:130px;">--}}
                            {{--<canvas id="kt_chart_bandwidth1"></canvas>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}




    <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">



            <div class="card">

                <div class="card-header">
                    <h3>My Courses</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Course Fee</th>
                            <th>Amount Due</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach(Auth::user()->enrollments as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->course->name}}</td>
                                <td>Rs {{$course->course->fees}}</td>
                                <td class="text text-danger">Rs {{$course->course->fee(Auth::user()->id)}}</td>
                                <td>{{$course->created_at->diffForHumans()}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




@endsection

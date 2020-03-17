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
                            <th>Course</th>
                            <th>Course Fee</th>
                            <th>Amount Paid</th>
                            <th>Amount Due</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($fees as $fee)
                            <tr>
                                <td>{{$fee->id}}</td>
                                <td>{{$fee->course->name}}</td>
                                <td>Rs {{$fee->course->fees}}</td>
                                <td>Rs {{$fee->amount_paid}}</td>
                                <td>Rs {{$fee->amount_due}}</td>
                                <td>{{$fee->created_at}}</td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



@endsection

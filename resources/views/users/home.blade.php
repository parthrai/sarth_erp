<<<<<<< HEAD
@extends('layouts.user')
=======
@extends('layouts.metro')
>>>>>>> 1b3917b3f0a9ba7a08d200b1ed9d29a7ba310d72

@section('content')





    <div class="col-lg-6 col-xl-6 order-lg-1 order-xl-1">
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

            <!--begin:: Widgets/Inbound Bandwidth-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Total Designs
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget20">
                        <div class="kt-widget20__content kt-portlet__space-x">
                            <span class="kt-widget20__number kt-font-brand">{{$tasks}}</span>
                            <span class="kt-widget20__desc"></span>
                        </div>
                        <div class="kt-widget20__chart" style="height:130px;">
                            <canvas id="kt_chart_bandwidth1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6 col-xl-6 order-lg-1 order-xl-1">
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

            <!--begin:: Widgets/Outbound Bandwidth-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Total Invoices
                        </h3>
                    </div>

                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget20">
                        <div class="kt-widget20__content kt-portlet__space-x">
                            <span class="kt-widget20__number kt-font-danger">0</span>
                            <span class="kt-widget20__desc"></span>
                        </div>
                        <div class="kt-widget20__chart" style="height:130px;">
                            <canvas id="kt_chart_bandwidth2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

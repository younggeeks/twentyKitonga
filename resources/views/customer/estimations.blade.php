@extends('Layouts.MasterPage')
@section('company_profile_active')
    active open
@stop

@section('raw_material_prices')
    active
@stop
@section('contents')

    <div class="page-content">

        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{URL::to('home')}}">Home</a>
                </li>
                <li class="active">Company Profile</li>
                <li class="active">Raw material specs.</li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <h1>Recent Estimations</h1>

        <div class="row">

            <div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                <div class="orders-container">
                    <div class="orders-header">
                        <h6>Estimations done by {{Auth::user()->name}}</h6>
                    </div>
                    @if($customer!=null)
                    <ul class="orders-list">
                        @foreach($customer->jobs as $job)
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">{{$job->type_of_product}}</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>{{$job->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Qty :</span>
                                        <span class="price">{{$job->quantity}}</span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="{{URL::to("job/view-job",$job->id)}}">
                                <i></i>
                            </a>
                        </li>
                            @endforeach
                    </ul>
                    @else
                      You Have Not Done any Estimation Yet
                        @endif
                    {{--<div class="orders-footer">--}}
                        {{--<a class="show-all" href=""><i class="fa fa-angle-down"></i> Show All</a>--}}
                        {{--<div class="help">--}}
                            {{--<a href=""><i class="fa fa-question"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

            <div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                <div class="orders-container">
                    <div class="orders-header">
                        <h6>Companies Related To {{Auth::user()->name}}</h6>
                    </div>
                    @if($customer!=null)
                    <ul class="orders-list">
                        @foreach($customer->companies as $company)
                        <li class="order-item">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-left">
                                    <div class="item-booker">{{$company->name}}</div>
                                    <div class="item-time">
                                        <i class="fa fa-calendar"></i>
                                        <span>{{$job->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                    <div class="item-price">
                                        <span class="currency">Qty</span>
                                        <span class="price"></span>
                                    </div>
                                </div>
                            </div>
                            <a class="item-more" href="">
                                <i></i>
                            </a>
                        </li>
                            @endforeach
                    </ul>
                    @else
                      You Have Not Done any Estimation Yet
                        @endif
                    {{--<div class="orders-footer">--}}
                        {{--<a class="show-all" href=""><i class="fa fa-angle-down"></i> Show All</a>--}}
                        {{--<div class="help">--}}
                            {{--<a href=""><i class="fa fa-question"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>



    </div>

@stop

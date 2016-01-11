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

        <h1>Job Details</h1>

        <div class="row">

            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="orders-container">
                    <div class="orders-header">
                        <h6>Estimation done by {{Auth::user()->name}}</h6>
                    </div>
                    @if($job!=null)
                        <ul class="orders-list">

                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Type Of Product</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->type_of_product}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Print Sides</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->print_sides}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Quantity</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->quantity}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Text Paper</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->text_paper}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Cover Paper</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->text_paper}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="order-item">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">Size</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-right">
                                            <div class="item-price">
                                                <span class="price">{{$job->size}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

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

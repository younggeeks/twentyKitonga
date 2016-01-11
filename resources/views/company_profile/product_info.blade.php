@extends('Layouts.MasterPage')
@section('company_profile_active')
    active open
@stop

@section('product_info')
    active
@stop
@section('contents')

    <div class="page-content">

        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{URL::route('home')}}">Home</a>
                </li>
                <li class="active">Company Profile</li>
                <li class="active">Product Info.</li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <h1>Product info Page</h1>
    </div>

@stop
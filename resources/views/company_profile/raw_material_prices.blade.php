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
                    <a href="{{URL::route('home')}}">Home</a>
                </li>
                <li class="active">Company Profile</li>
                <li class="active">Raw material specs.</li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <h1>Raw material specs Page</h1>
    </div>

@stop
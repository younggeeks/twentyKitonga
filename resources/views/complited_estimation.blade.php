@extends('Layouts.MasterPage')
{{--@section('company_profile_active')--}}
    {{--active open--}}
{{--@stop--}}

@section('complited_estimation')
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
                <li class="active">Complited Estimation</li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <h1>complited_estimation page</h1>
    </div>

@stop
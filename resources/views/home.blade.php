@extends('Layouts.MasterPage')
@section('home_active')
active
@stop

@section('contents')
    <div class="page-content">
        <!-- Page Breadcrumb -->
<div class="page-breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="#">Yumai</a>
        </li>
        <li class="active">Home</li>
    </ul>
</div>
<!-- /Page Breadcrumb -->
<!-- Page Header -->
<div class="page-header position-relative">
    <div class="header-title">
        <h1>
            Dashboard
        </h1>
    </div>
    <!--Header Buttons-->
    <div class="header-buttons">
        <a class="sidebar-toggler" href="#">
            <i class="fa fa-arrows-h"></i>
        </a>
        <a class="refresh" id="refresh-toggler" href="">
            <i class="glyphicon ghelyphicon-refresh"></i>
        </a>
        <a class="fullscreen" id="fullscreen-toggler" href="#">
            <i class="glyphicon glyphicon-fullscreen"></i>
        </a>
    </div>
    <!--Header Buttons End-->
</div>
<!-- /Page Header -->
<!-- Page Body -->
<div class="page-body">
    @if(Auth::check() && Auth::user()->company_id!=null &&Entrust::hasRole("super_admin"))
        @include("Layouts.includes.super_report")
    @elseif(Auth::check() && Auth::user()->company_id==null &&Entrust::hasRole("customer"))

        You are the customer
    @elseif(Auth::check() && Auth::user()->company_id!=null &&Entrust::hasRole("estimator"))

        you are the estimator
    @elseif(Auth::check() && Auth::user()->company_id!=null &&Entrust::hasRole("company_admin"))

        ur the company admin
    @endif

</div>
<!-- /Page Body -->
</div>
@stop
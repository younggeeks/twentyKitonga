@extends('Layouts.MasterPage')
@section('company_profile_active')
    active open
@stop

@section('company_profile_company_info')
    active
@stop
@section('contents')
    <div class="page-content">
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Company Profile
                        </h1>
                    </div>
                    {{--<!--Header Buttons-->--}}
                    {{--<div class="header-buttons">--}}
                        {{--<a class="sidebar-toggler" href="#">--}}
                            {{--<i class="fa fa-arrows-h"></i>--}}
                        {{--</a>--}}
                        {{--<a class="refresh" id="refresh-toggler" href="">--}}
                            {{--<i class="glyphicon glyphicon-refresh"></i>--}}
                        {{--</a>--}}
                        {{--<a class="fullscreen" id="fullscreen-toggler" href="#">--}}
                            {{--<i class="glyphicon glyphicon-fullscreen"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<!--Header Buttons End-->--}}
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">

                    <div class="row">
                        @if(Session::has("error"))
                            <div class="alert alert-error">
                                {{Session::get("error")}}
                            </div>
                        @endif

                        @if(Session::has("success"))
                            <div class="alert alert-success">
                                {{Session::get("success")}}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-container">
                                <div class="profile-header row">
                                    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                        <img src="{{asset("uploads/".$company->logo)}}" alt="" class="header-avatar" />
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                        <div class="header-fullname">{{$company->name}}</div>

                                        <div class="header-information">
                                            Company {{$company->name}} was registered in 2013
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">{{$estimators}}</div>
                                                <div class="stats-title">ESTIMATORS</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">{{$customers}}</div>
                                                <div class="stats-title">CUSTOMERS</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats-col">
                                                <div class="stats-value pink">{{$jobs}}</div>
                                                <div class="stats-title">JOBS</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                <i class="glyphicon glyphicon-map-marker"></i> {{$company->address}}
                                            </div>
                                            @if($company->status=="approved")
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                <strong>Approved</strong>

                                            </div>
                                                @else
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                <strong><a href="{{URL::to("company/approve",$company->id)}}" class="btn btn-palegreen btn-sm  btn-follow">
                                                        <i class="fa fa-check"></i>

                                                    </a></strong>
                                            </div>
                                            @endif
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                 <strong>| </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-body">
                                    <div class="col-lg-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#overview">
                                                        Overview
                                                    </a>
                                                </li>
                                                <li class="tab-red">
                                                    <a data-toggle="tab" href="#timeline">
                                                       Estimators
                                                    </a>
                                                </li>
                                                <li class="tab-palegreen">
                                                    <a data-toggle="tab" id="contacttab" href="#contacts">
                                                        Raw Material Prices
                                                    </a>
                                                </li>
                                                <li class="tab-yellow">
                                                    <a data-toggle="tab" href="#settings">
                                                        Overhead And Margins
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tabs-flat">
                                                <div id="overview" class="tab-pane active">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="profile-contacts">

                                                                <div class="profile-badge orange"><i class="fa fa-paperclip orange"></i><span>Company Information</span></div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Name	: {{$company->name}} <br><br>
                                                                        Tin Number: {{$company->tin}}
                                                                    </p>
                                                                    <p>
                                                                        Vrn Number	: {{$company->vrn}}
                                                                        <br>

                                                                    </p>
                                                                </div>


                                                            </div>

                                                            <div class="profile-contacts">

                                                                <div class="profile-badge orange"><i class="fa fa-phone orange"></i><span>Contacts</span></div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Phone	: {{$company->phone}} <br>
                                                                        Cell		: {{$company->phone}}
                                                                    </p>
                                                                    <p>
                                                                        Email		: {{$company->email}}
                                                                        <br>
                                                                    </p>
                                                                    <p>
                                                                        Facebook	: facebook.com/yumai
                                                                        <br>
                                                                        Twitter	: @yumai
                                                                    </p>
                                                                </div>
                                                                <div class="profile-badge azure">
                                                                    <i class="fa fa-map-marker azure"></i><span>Location</span>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Address<br>
                                                                       P.O Box {{$company->box}}<br>

                                                                        {{$company->address}}, Tanzania
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="contact-map" class="animated flipInY"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--second row for estimators--}}
                                                <div id="timeline" class="tab-pane">
                                                    <div class="row profile-overview">
                                                        <div class="col-xs-12 col-md-6">
                                                            <div class="well with-header  with-footer">
                                                                <div class="header bg-blue">
                                                                    Company Estimators
                                                                </div>
                                                                <table class="table table-hover">

                                                                    <tr>
                                                                        <th>
                                                                            Name
                                                                        </th>
                                                                        <th>
                                                                            Email
                                                                        </th>

                                                                    </tr>
                                                                    @foreach($estimatorz as $estimeta)
                                                                    <tr>
                                                                        <td>
                                                                           {{$estimeta->name}}
                                                                        </td>

                                                                        <td>{{$estimeta->email}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>

                                                                <div class="footer">

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div id="contacts" class="tab-pane">
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="profile-contacts">--}}

                                                                {{--<div class="profile-badge orange"><i class="fa fa-phone orange"></i><span>Contacts</span></div>--}}
                                                                {{--<div class="contact-info">--}}
                                                                    {{--<p>--}}
                                                                        {{--Phone	: +1 1 2345 6789 <br>--}}
                                                                        {{--Cell		: +1 9 876 5432--}}
                                                                    {{--</p>--}}
                                                                    {{--<p>--}}
                                                                        {{--Email		: kim@gmail.com--}}
                                                                        {{--<br>--}}
                                                                        {{--Skype		: kim.ryder--}}
                                                                    {{--</p>--}}
                                                                    {{--<p>--}}
                                                                        {{--Facebook	: facebook.com/Kim.Ryder--}}
                                                                        {{--<br>--}}
                                                                        {{--Twitter	: @KimRyder--}}
                                                                    {{--</p>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="profile-badge azure">--}}
                                                                    {{--<i class="fa fa-map-marker azure"></i><span>Location</span>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="contact-info">--}}
                                                                    {{--<p>--}}
                                                                        {{--Address<br>--}}
                                                                        {{--Department 98<br>--}}
                                                                        {{--44-46 Morningside Road<br>--}}
                                                                        {{--Toronto, Canada--}}
                                                                    {{--</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div id="contact-map" class="animated flipInY"></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}




                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-12">
                                                            <div class="widget">
                                                                <div class="widget-header ">
                                                                    <span class="widget-caption">List Of Raw Materials By {{$company->name}}</span>
                                                                    <div class="widget-buttons">
                                                                        <a href="#" data-toggle="maximize">
                                                                            <i class="fa fa-expand"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="collapse">
                                                                            <i class="fa fa-minus"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="dispose">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-body">
                                                                    <div class="table-toolbar">
                                                                        <a  href="#" class="btn btn-default">
                                                                          <i class="fa fa-plus"></i> Add New Raw Material
                                                                        </a>
                                                                        <div class="btn-group pull-right">
                                                                            <a class="btn btn-default" href="javascript:void(0);">Tools</a>
                                                                            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a>
                                                                            <ul class="dropdown-menu dropdown-default">
                                                                                <li>
                                                                                    <a href="javascript:void(0);">Action</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">Another action</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">Something else here</a>
                                                                                </li>
                                                                                <li class="divider"></li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">Separated link</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                                                        <thead>
                                                                        <tr role="row">
                                                                            <th>
                                                                                Name
                                                                            </th>
                                                                            <th>
                                                                                Weight
                                                                            </th>
                                                                            <th>
                                                                                Color
                                                                            </th>
                                                                            <th>
                                                                                Price
                                                                            </th>
                                                                            <th>

                                                                            </th>
                                                                            <th>

                                                                            </th>
                                                                        </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                        @if(!empty($papers))
                                                                            @foreach($papers as $paper)
                                                                        <tr>
                                                                            <td>{{$paper->paper->name}}</td>
                                                                            <td>{{$paper->paper->weight}}</td>
                                                                            <td>{{$paper->paper->color}}</td>
                                                                            <td>{{number_format($paper->price,2)}} TSH</td>
                                                                            {{--<td>{{$paper->paper->color}}</td>--}}

                                                                            <td>
                                                                                <a href="#" class="btn btn-info btn-xs "><i class="fa fa-edit"></i> Edit</a>
                                                                                <a href="#" class="btn btn-danger btn-xs "><i class="fa fa-trash-o"></i> Delete</a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        @else
                                                                            No raw Material
                                                                        @endif


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>








                                                </div>
                                                <div id="settings" class="tab-pane">
                                                    <form role="form">
                                                        <div class="form-title">
                                                            Personal Information
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Name">
                                                                        <i class="fa fa-user blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Family">
                                                                        <i class="fa fa-user orange"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Phone">
                                                                        <i class="glyphicon glyphicon-earphone yellow"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Mobile">
                                                                        <i class="glyphicon glyphicon-phone palegreen"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="wide">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Birth Place">
                                                                        <i class="fa fa-globe"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-title">
                                                            Social Networks
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Facebook">
                                                                        <i class="fa fa-facebook purple"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Twitter">
                                                                        <i class="fa fa-twitter azure"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Pinterest">
                                                                        <i class="fa fa-pinterest red"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Flickr">
                                                                        <i class="fa fa-flickr blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-title">
                                                            Contact Information
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Address 1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <span class="input-icon icon-right">
                                                                        <input type="text" class="form-control" placeholder="Address 1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save Profile</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /Page Body -->


@stop








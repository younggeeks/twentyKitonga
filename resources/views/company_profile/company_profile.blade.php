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
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-container">
                                <div class="profile-header row">
                                    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                        <img src="{{asset("uploads/".$company->logo)}}" alt="" class="header-avatar" />
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                        <div class="header-fullname">{{$company->name}}</div>
                                        <a href="#" class="btn btn-palegreen btn-sm  btn-follow">
                                            <i class="fa fa-check"></i>

                                        </a>
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
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                <strong>|</strong>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                 <strong>|</strong>
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
                                                    {{--<div class="row profile-overview">--}}
                                                        {{--<div class="col-xs-12 col-md-6">--}}
                                                            {{--<div class="well with-header  with-footer">--}}
                                                                {{--<div class="header bg-blue">--}}
                                                                   {{--Company Overview--}}
                                                                {{--</div>--}}
                                                                {{--<table class="table table-hover">--}}

                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                            {{--#--}}
                                                                        {{--</th>--}}

                                                                        {{--<td></td>--}}
                                                                       {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                            {{--Name--}}
                                                                        {{--</th>--}}

                                                                    {{--<td>{{$company->name}}</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                           {{--Box--}}
                                                                        {{--</th>--}}
                                                                        {{--<td>{{$company->box}}</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                           {{--Address--}}
                                                                        {{--</th>--}}
                                                                        {{--<td>{{$company->address}}</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                            {{--Phone--}}
                                                                        {{--</th>--}}
                                                                        {{--<td>{{$company->phone}}</td>--}}
                                                                    {{--</tr>--}}

                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                            {{--Tin--}}
                                                                        {{--</th>--}}
                                                                        {{--<td>{{$company->tin}}</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                        {{--<th>--}}
                                                                            {{--Vrn--}}
                                                                        {{--</th>--}}
                                                                        {{--<td>{{$company->vrn}}</td>--}}
                                                                    {{--</tr>--}}


                                                                    {{--<tbody>--}}

                                                                    {{--</tbody>--}}
                                                                {{--</table>--}}

                                                                {{--<div class="footer">--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}

                                                    {{--</div>--}}
                                                    {{--for new company overview--}}

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
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="profile-contacts">

                                                                <div class="profile-badge orange"><i class="fa fa-phone orange"></i><span>Contacts</span></div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Phone	: +1 1 2345 6789 <br>
                                                                        Cell		: +1 9 876 5432
                                                                    </p>
                                                                    <p>
                                                                        Email		: kim@gmail.com
                                                                        <br>
                                                                        Skype		: kim.ryder
                                                                    </p>
                                                                    <p>
                                                                        Facebook	: facebook.com/Kim.Ryder
                                                                        <br>
                                                                        Twitter	: @KimRyder
                                                                    </p>
                                                                </div>
                                                                <div class="profile-badge azure">
                                                                    <i class="fa fa-map-marker azure"></i><span>Location</span>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <p>
                                                                        Address<br>
                                                                        Department 98<br>
                                                                        44-46 Morningside Road<br>
                                                                        Toronto, Canada
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="contact-map" class="animated flipInY"></div>
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
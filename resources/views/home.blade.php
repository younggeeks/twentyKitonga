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
        <a class="refresh" id="r    efresh-toggler" href="">
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
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="databox bg-white radius-bordered">
                        <div class="databox-left bg-themesecondary">
                            <div class="databox-piechart">
                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
                            </div>
                        </div>
                        <div class="databox-right">
                            <span class="databox-number themesecondary">{{$total_companies}}</span>
                            <div class="databox-text darkgray">COMPANIES </div>
                            <div class="databox-stat themesecondary radius-bordered">
                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="databox bg-white radius-bordered">
                        <div class="databox-left bg-themethirdcolor">
                            <div class="databox-piechart">
                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                            </div>
                        </div>
                        <div class="databox-right">
                            <span class="databox-number themethirdcolor">{{$total_shops}}</span>
                            <div class="databox-text darkgray">SHOPS</div>
                            <div class="databox-stat themethirdcolor radius-bordered">
                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="databox bg-white radius-bordered">
                        <div class="databox-left bg-themeprimary">
                       USTOMERS     <div class="databox-piechart">
                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
                            </div>
                        </div>
                        <div class="databox-right">
                            <span class="databox-number themeprimary">{{$total_customers}}</span>
                            <div class="databox-text darkgray">CUSTOMERS</div>
                            <div class="databox-state bg-themeprimary">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="databox bg-white radius-bordered">
                        <div class="databox-left bg-themeprimary">
                            USTOMERS     <div class="databox-piechart">
                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
                            </div>
                        </div>
                        <div class="databox-right">
                            <span class="databox-number themeprimary">{{$total_jobs}}</span>
                            <div class="databox-text darkgray">JOBS</div>
                            <div class="databox-state bg-themeprimary">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    <div class="row">
        <div class="col-lg-4 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-themeprimary">
                    <i class="widget-icon fa fa-tasks themeprimary"></i>
                    <span class="widget-caption themeprimary">Pending Company Applications</span>
                </div><!--Widget Header-->
                <div class="widget-body no-padding">
                    <div class="task-container">
                        <div class="task-search">
                                            <span class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search Tasks">
                                                <i class="fa fa-search gray"></i>
                                            </span>
                        </div>
                        <ul class="tasks-list">

                            @foreach($pending_companies as $pending)
                                <a href="{{URL::to("company/view",$pending->id)}}"><li class="task-item" style="height: 100px">

                                <div class="task-state">
                                                    <span class="label label-yellow">
                                                        Pending
                                                    </span>
                                </div>
                                <div class="task-time">{{$pending->created_at->diffForHumans()}}</div>
                                <div class="task-body">{{$pending->name}} In <strong>{{$pending->address}}</strong></div>

                            </li>
                                </a>
                            @endforeach
                                                   </ul>
                    </div>
                </div><!--Widget Body-->
            </div>

        </div>
        <div class="col-lg-8 col-sm-12 col-xs-12">

            <div class="row">
                <div class="col-lg-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-themesecondary">
                            <i class="widget-icon fa fa-tags themesecondary"></i>
                            <span class="widget-caption themesecondary">Approved Companies</span>
                        </div><!--Widget Header-->
                        <div class="widget-body  no-padding">
                            <div class="tickets-container">

                                <ul class="tickets-list">
                                @foreach($approved_companies as $active)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <div class="ticket-user col-lg-6 col-sm-12">
                                                <a href="{{URL::to("company/view/".$active->id)}}">  <img src="{{asset("uploads/".$active->logo)}}" class="user-avatar">
                                                <span class="user-name">{{$active->name}}</span></a>
                                                <span class="user-at">in </span>
                                                <span class="user-company">{{$active->address}}</span>
                                            </div>
                                            <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                <i class="fa fa-clock-o"></i>
                                                <span class="time">{{$active->created_at->diffForHumans()}}</span>
                                            </div>
                                            <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                <span class="divider hidden-xs"></span>
                                                <span class="type">Approved</span>
                                            </div>
                                            <div class="ticket-state bg-palegreen">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Body -->
</div>
@stop
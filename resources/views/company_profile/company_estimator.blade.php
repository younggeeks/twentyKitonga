@extends('Layouts.MasterPage')
@section('company_profile_active')
    active open
@stop

@section('company_profile_company_estimator')
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
                <li class="active">Company profile</li>
                <li class="active">Company Estimator</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <div class="col-lg-12 col-sm-12col-xs-12 col-sm-offset-0">
            <h2><i class="glyphicon glyphicon-folder-close"></i>  Company Estimator.</h2>
            {{--<font color="#8b0000"><i class="glyphicon glyphicon-warning-sign"></i></font> Please select and fill all of the below specifications to complete the estimation.--}}
            <p></p>
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-white bg-sky">
                    <span class="widget-caption">Company estimator panel </span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                    </div><!--Widget Buttons-->
                </div><!--Widget Header-->
                <div class="widget-body bg-whitesmoke bordered-bottom bordered-white" style="color:#000">
                    <!-- form-->
                    <div id="registration-form">
                        <form role="form">
                            <div class="form-title">
                                <i class="fa fa-info-circle"></i> Click refresh to refresh the list of estimators to be approved or rejected.
                            </div>
                            <input type="submit" value="Reflesh" class="btn btn-info"/>
                            <p></p>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="estimator" id="" class="form-control" name="text_page_color">
                                 <option value="select color" selected="">Estimator</option>
                                 <option value="full color">Estimator 1</option>
                                 <option value="full color">Estimator 2</option>
                                 <option value="full color">Estimator 3</option>
                             </select>
                             </span>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Accept </button>
                            <button type="submit" class="btn btn-darkorange"><i class="fa fa-close"></i> Reject</button>
                        </form>
                    </div>


                </div><!--Widget Body-->
            </div><!--Widget-->
        </div>
    </div>
@stop
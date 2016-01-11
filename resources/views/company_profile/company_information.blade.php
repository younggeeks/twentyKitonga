@extends('Layouts.MasterPage')
@section('company_profile_active')
active open
@stop

@section('company_profile_company_info')
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
            <li class="active">Company Information</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <div class="col-lg-12 col-sm-12col-xs-12 col-sm-offset-0">
        <h2><i class="glyphicon glyphicon-folder-close"></i>  Company Information.</h2>
        {{--<font color="#8b0000"><i class="glyphicon glyphicon-warning-sign"></i></font> Please select and fill all of the below specifications to complete the estimation.--}}
        <p></p>
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-white bg-sky">
                <span class="widget-caption">Company information panel Panel</span>
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
                            <i class="fa fa-info-circle"></i> Please fill your company details.
                        </div>
                        <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="text" name="VRN_no" class="form-control" id="userameInput" placeholder="VRN number ">
                                <i class="fa fa-file-text"></i>
                             </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon icon-right">
                            <input type="text" name="TIN_no" class="form-control" id="emailInput" placeholder="TIN number">
                               <i class="fa fa-file-text"></i>
                             </span>
                        </div>
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="address" class="form-control" id="passwordInput" placeholder="Address eg: P.O.Box XXX">
                            <i class="fa fa-file-text"></i>
                              </span>
                        </div>
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="physical_address" class="form-control" id="passwordInput" placeholder="Physical address">
                            <i class="fa fa-location-arrow"></i>
                              </span>
                        </div>

                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="comapny_name" class="form-control" id="passwordInput" placeholder="Company Name ">
                            <i class="fa fa-user"></i>
                              </span>
                        </div>

                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="email" class="form-control" id="passwordInput" placeholder="Email address">
                            <i class="fa fa-envelope"></i>
                              </span>
                        </div>

                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="phone_number" class="form-control" id="passwordInput" placeholder="Phone number">
                            <i class="fa fa-phone-square"></i>
                              </span>
                        </div>
                        <div class="form-title">
                        <i class="fa fa-file-image-o"></i>    Company Logo
                        </div>
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="file" name="company_logo" class="form-control" id="passwordInput" placeholder="Cpmpany Logo">
                            <i class="fa fa-file-image-o"></i>
                              </span>
                        </div>



                        <p></p>

                        {{--<div class="form-group">--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" class="colored-blue">--}}
                                    {{--<span class="text">Auto Sign In After Registration</span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save-file"></i> Save </button>
                        <button type="submit" class="btn btn-darkorange"><i class="glyphicon glyphicon-trash"></i> Clear</button>
                    </form>
                </div>


            </div><!--Widget Body-->
        </div><!--Widget-->
    </div>
</div>
@stop
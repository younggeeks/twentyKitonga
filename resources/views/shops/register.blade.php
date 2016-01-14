@extends('Layouts.authMaster')
@section('contents')

    <div class="col-lg-8 col-sm-12col-xs-12 col-sm-offset-2 animated fadeInDown">
    {{--<div class="login-container animated fadeInDown">--}}

        <div class="loginbox bg-white">

            <div class="logobox text-align-center" >
                <img src="{{asset('assets/img/logo403.png')}}" alt="" />
            </div>


            <div class="widget-header bordered-bottom bordered-white bg-sky">
                <span class="widget-caption">SHOP REGISTRATION</span>
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
                <form role="form" action="{{URL::to("shop/register")}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-title">
                        <i class="fa fa-info-circle"></i> Please fill your Shop details.
                    </div>
                    @if($errors->has("vrn"))
                        <div class="form-group has-feedback has-error">
                             <span class="input-icon icon-right">
                             <input type="text" name="vrn" value="{{old("vrn")}}" class="form-control" id="userameInput" placeholder="VRN number ">
                                 <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("vrn")}}</small>
                             </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="text" value="{{old("vrn")}}" name="vrn" class="form-control" id="userameInput" placeholder="VRN number ">
                                <i class="fa fa-file-text"></i>
                             </span>
                        </div>

                    @endif
                    @if($errors->has("tin"))
                        <div class="form-group  has-feedback has-error">
                            <span class="input-icon icon-right">
                            <input type="text" name="tin" value="{{old("tin")}}" class="form-control" id="emailInput" placeholder="TIN number">
                              <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("tin")}}</small>

                             </span>
                        </div>
                    @else
                        <div class="form-group">
                            <span class="input-icon icon-right">
                            <input type="text" name="tin" value="{{old("tin")}}" class="form-control" id="emailInput" placeholder="TIN number">
                               <i class="fa fa-file-text"></i>
                             </span>
                        </div>

                    @endif

                    @if($errors->has("box"))
                        <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                            <input type="text" name="box" value="{{old("box")}}" class="form-control" id="passwordInput" placeholder="Address eg: P.O.Box XXX">
                             <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("box")}}</small>

                              </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="box" value="{{old("box")}}" class="form-control" id="passwordInput" placeholder="Address eg: P.O.Box XXX">
                            <i class="fa fa-file-text"></i>
                              </span>
                        </div>
                    @endif

                    @if($errors->has("address"))
                        <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                            <input type="text" name="address" value="{{old("address")}}" class="form-control" id="passwordInput" placeholder="Physical address">
                           <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("address")}}</small>

                              </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="address" value="{{old("address")}}" class="form-control" id="passwordInput" placeholder="Physical address">
                            <i class="fa fa-location-arrow"></i>
                              </span>
                        </div>
                    @endif

                    @if($errors->has("name"))
                        <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" id="passwordInput" placeholder="Company Name ">
                             <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("name")}}</small>

                              </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="name" value="{{old("name")}}" class="form-control" id="passwordInput" placeholder="Company Name ">
                            <i class="fa fa-user"></i>
                              </span>
                        </div>
                    @endif

                    @if($errors->has("email"))
                        <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                            <input type="text" name="email" value="{{old("email")}}" class="form-control" id="passwordInput" placeholder="Email address">
                            <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("email")}}</small>

                              </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="email" value="{{old("email")}}" class="form-control" id="passwordInput" placeholder="Email address">
                            <i class="fa fa-envelope"></i>
                              </span>
                        </div>

                    @endif

                    @if($errors->has("phone"))
                        <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                            <input type="text" name="phone" value="{{old("phone")}}" class="form-control" id="passwordInput" placeholder="Phone number">
                              <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("phone")}}</small>

                              </span>
                        </div>
                    @else
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="phone" value="{{old("phone")}}" class="form-control" id="passwordInput" placeholder="Phone number">
                            <i class="fa fa-phone-square"></i>
                              </span>
                        </div>
                    @endif


                    <div class="form-title">
                        <i class="fa fa-file-image-o"></i>    Company Logo
                    </div>
                    @if($errors->has("logo  has-feedback has-error"))
                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="file" name="logo"value="{{old("logo")}}"  class="form-control" id="passwordInput" placeholder="Company Logo">
                             <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("logo")}}</small>

                              </span>
                        </div>
                    @else

                        <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="file" name="logo" value="{{old("logo")}}"  class="form-control" id="passwordInput" placeholder="Cpmpany Logo">
                            <i class="fa fa-file-image-o"></i>
                              </span>
                        </div>

                    @endif





                    <p></p>

                    {{--<div class="form-group">--}}
                    {{--<div class="checkbox">--}}
                    {{--<label>--}}
                    {{--<input type="checkbox" class="colored-blue">--}}
                    {{--<span class="text">Auto Sign In After Registration</span>--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}




                    <div class="widget-header bordered-bottom bordered-white bg-sky">
                        <span class="widget-caption">Account Information</span>
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

                            <div class="form-title">
                                <i class="fa fa-info-circle"></i> These will be your Login credentials! Please use current E-mail address
                            </div>

                            @if($errors->has("email"))
                                <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                             <input type="email" name="email" value="{{old("email")}}" class="form-control" id="userameInput" placeholder="E-mail Address">
                                 <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("email")}}</small>

                             </span>
                                </div>
                            @else
                                <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="email" name="email" value="{{old("email")}}" class="form-control" id="userameInput" placeholder="E-mail Address">
                                <i class="fa fa-file-text"></i>
                             </span>
                                </div>
                            @endif


                            @if($errors->has("name"))
                                <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                             <input type="text" name="name" value="{{old("name")}}"  class="form-control" id="userameInput" placeholder="Full Name">
                                 <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("name")}}</small>

                             </span>
                                </div>
                            @else
                                <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="text" name="name" value="{{old("name")}}"  class="form-control" id="userameInput" placeholder="Full Name">
                                <i class="fa fa-file-text"></i>
                             </span>
                                </div>
                            @endif

                            @if($errors->has("password"))
                                <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                             <input type="password"  name="password" class="form-control" id="userameInput" placeholder="Enter Your Password ">
                                 <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("password")}}</small>

                             </span>
                                </div>
                            @else
                                <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="password"  name="password" class="form-control" id="userameInput" placeholder="Enter Your Password ">
                                <i class="fa fa-file-lock"></i>
                             </span>
                                </div>
                            @endif
                            @if($errors->has("password_confirmation"))
                                <div class="form-group  has-feedback has-error">
                             <span class="input-icon icon-right">
                             <input type="password"  name="password_confirmation" class="form-control" id="userameInput" placeholder="Enter Your Password Again ">
                                 <i data-bv-icon-for="vrn" class="form-control-feedback glyphicon glyphicon-remove" style=""></i>
                            <small data-bv-result="INVALID" data-bv-for="address" data-bv-validator="notEmpty" class="help-block" style="">{{$errors->first("password_confirmation")}}</small>

                             </span>
                                </div>

                            @else
                                <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="password" name="password_confirmation" class="form-control" id="userameInput" placeholder="Enter Your Password Again ">
                                <i class="fa fa-lock"></i>
                             </span>
                                </div>

                            @endif




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
        <div class="logobox text-align-center" >
            Copyright &copy; Yumai {{date('Y')}}
        </div>
    </div>
    </div>
    </div>
@stop


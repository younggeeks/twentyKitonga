@extends('Layouts.authMaster')
@section('contents')

<div class="login-container animated fadeInDown">

    <div class="loginbox bg-white">

        <div class="logobox text-align-center" >
            <img src="{{asset('assets/img/logo403.png')}}" alt="" />
        </div>

        <div class="loginbox-title">SIGN IN</div>
        <div class="loginbox-social">
            <div class="social-title ">Login details are required</div>
            {{--<div class="social-buttons">--}}
            {{--<a href="" class="button-facebook">--}}
            {{--<i class="social-icon fa fa-facebook"></i>--}}
            {{--</a>--}}
            {{--<a href="" class="button-twitter">--}}
            {{--<i class="social-icon fa fa-twitter"></i>--}}
            {{--</a>--}}
            {{--<a href="" class="button-google">--}}
            {{--<i class="social-icon fa fa-google-plus"></i>--}}
            {{--</a>--}}
            {{--</div>--}}
        </div>

        <form action="{{URL::to("auth/login")}}" method="post">
            {!! csrf_field() !!}
        <div class="loginbox-textbox">
            <input type="text" name="email" class="form-control" placeholder="Email" />
        </div>
        <div class="loginbox-textbox">
            <input type="text" name="password" class="form-control" placeholder="Password" />
        </div>
        <div class="loginbox-forgot">
            <a href="">Forgot Password?</a>
        </div>
        <div class="loginbox-submit">
            <input type="submit" class="btn btn-primary btn-block" value="Login">
        </div>
        <div class="loginbox-signup">
            <i class="fa fa-info-circle"></i> New member? <a href="{{URL::to("auth/register")}}">Register here.</a></a>
        </div>
        <div class="loginbox-signup">
            <i class="fa fa-info-circle"></i>Company Owner/Representative? <a href="{{URL::to("auth/register")}}">Register here.</a></a>
        </div>
        </form>
    </div>
    <div class="logobox text-align-center" >
        Copyright &copy; Yumai {{date('Y')}}
    </div>
</div>

@stop



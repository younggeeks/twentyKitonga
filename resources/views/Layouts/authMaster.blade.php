<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.5.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="{{asset("assets/css/beyond.min.css")}} rel="stylesheet" />
    <link  href="{{asset("assets/css/beyond.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/demo.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/animate.min.css")}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset("assets/js/skins.min.js")}}"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>

@yield("contents")





        <!--Basic Scripts-->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/slimscroll/jquery.slimscroll.min.js")}}"></script>

<!--Beyond Scripts-->
<script src="{{asset("assets/js/beyond.js")}}"></script>
</body>
<!--Body Ends-->
</html>

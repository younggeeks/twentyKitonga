
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.5.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Yumai</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">


    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/weather-icons.min.css')}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link id="beyond-link" href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/typicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset('assets/js/skins.min.js')}}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>

<!-- Loading Container -->
<div class="col-lg-8 col-sm-12col-xs-12 col-sm-offset-2">
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
                <form role="form" action="{{URL::to("company/register-company")}}" method="post">
                  {!! csrf_field() !!}
                    <div class="form-title">
                        <i class="fa fa-info-circle"></i> Please fill your company details.
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


        </div><!--Widget Body-->
    </div><!--Widget-->
</div>
</div>

<!--Basic Scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

<!--Beyond Scripts-->
<script src="assets/js/beyond.js"></script>


<!--Page Related Scripts-->
<!--Sparkline Charts Needed Scripts-->
<script src="{{asset('assets/js/charts/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('assets/js/charts/sparkline/sparkline-init.js')}}"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="{{asset('assets/js/charts/easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('assets/js/charts/easypiechart/easypiechart-init.js')}}"></script>

<!--Flot Charts Needed Scripts-->
<script src="{{asset('assets/js/charts/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/charts/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/js/charts/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/js/charts/flot/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('assets/js/charts/flot/jquery.flot.orderBars.js')}}"></script>

<script>
    // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');

        //Sets The Hidden Chart Width
        $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                        .width() - 20);

        //-------------------------Visitor Sources Pie Chart----------------------------------------//
        var data = [
            {
                data: [[1, 21]],
                color: '#fb6e52'
            },
            {
                data: [[1, 12]],
                color: '#e75b8d'
            },
            {
                data: [[1, 11]],
                color: '#a0d468'
            },
            {
                data: [[1, 10]],
                color: '#ffce55'
            },
            {
                data: [[1, 46]],
                color: '#5db2ff'
            }
        ];
        var placeholder = $("#dashboard-pie-chart-sources");
        placeholder.unbind();

        $.plot(placeholder, data, {
            series: {
                pie: {
                    innerRadius: 0.45,
                    show: true,
                    stroke: {
                        width: 4
                    }
                }
            }
        });

        //------------------------------Visit Chart------------------------------------------------//
        var data2 = [{
            color: themesecondary,
            label: "Direct Visits",
            data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

            lines: {
                show: true,
                fill: true,
                lineWidth: .1,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: 0.4
                    }]
                }
            },
            points: {
                show: false
            },
            shadowSize: 0
        },
            {
                color: themeprimary,
                label: "Referral Visits",
                data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                bars: {
                    order: 1,
                    show: true,
                    borderWidth: 0,
                    barWidth: 0.4,
                    lineWidth: .5,
                    fillColor: {
                        colors: [{
                            opacity: 0.4
                        }, {
                            opacity: 1
                        }]
                    }
                }
            },
            {
                color: themethirdcolor,
                label: "Search Engines",
                data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                lines: {
                    show: true,
                    fill: false,
                    fillColor: {
                        colors: [{
                            opacity: 0.3
                        }, {
                            opacity: 0
                        }]
                    }
                },
                points: {
                    show: true
                }
            }
        ];
        var options = {
            legend: {
                show: false
            },
            xaxis: {
                tickDecimals: 0,
                color: '#f3f3f3'
            },
            yaxis: {
                min: 0,
                color: '#f3f3f3',
                tickFormatter: function (val, axis) {
                    return "";
                },
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false,
                color: '#fbfbfb'

            },
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false,
                content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
            }
        };
        var placeholder = $("#dashboard-chart-visits");
        var plot = $.plot(placeholder, data2, options);

        //------------------------------Real-Time Chart-------------------------------------------//
        var realTimedata = [],
                realTimedata2 = [],
                totalPoints = 300;

        var getSeriesObj = function () {
            return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
            ];
        };
        function getRandomData() {
            if (realTimedata.length > 0)
                realTimedata = realTimedata.slice(1);

            // Do a random walk

            while (realTimedata.length < totalPoints) {

                var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < realTimedata.length; ++i) {
                res.push([i, realTimedata[i]]);
            }

            return res;
        }
        function getRandomData2() {
            if (realTimedata2.length > 0)
                realTimedata2 = realTimedata2.slice(1);

            // Do a random walk

            while (realTimedata2.length < totalPoints) {

                var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                        y = prev - 25;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                realTimedata2.push(y);
            }


            var res = [];
            for (var i = 0; i < realTimedata2.length; ++i) {
                res.push([i, realTimedata2[i]]);
            }

            return res;
        }
        // Set up the control widget
        var updateInterval = 500;
        var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
            yaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            xaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            },
            colors: ['#eee', themeprimary],
        });

        function update() {

            plot.setData(getSeriesObj());

            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();


        //-------------------------Initiates Easy Pie Chart instances in page--------------------//
        InitiateEasyPieChart.init();

        //-------------------------Initiates Sparkline Chart instances in page------------------//
        InitiateSparklineCharts.init();
    });

</script>



</body>
<!--  /Body -->
</html>
﻿
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
    <link  href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo.min.css")}}" rel="stylesheet" />
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
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
@include('Layouts.includes.NavBar')
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">


        <!-- Page Sidebar -->
@include('Layouts.includes.SideBar')
        <!-- /Page Sidebar -->
        <!-- Chat Bar -->
        <div id="chatbar" class="page-chatbar">
            <div class="chatbar-contacts">
                <div class="contacts-search">
                    <input type="text" class="searchinput" placeholder="Search Contacts" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Your Contacts and Chat History</div>
                </div>
                <ul class="contacts-list">
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                last week
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Nicolai-Larson.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Adam Johnson</div>
                            <div class="contact-status">
                                <div class="offline"></div>
                                <div class="status">left 4 mins ago</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/John-Smith.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">John Smith</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                1:57 am
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Osvaldus-Valutis.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Osvaldus Valutis</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Javi-Jimenez.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Javi Jimenez</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Stephanie-Walter.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Stephanie Walter</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                yesterday
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Sergey-Azovskiy.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Sergey Azovskiy</div>
                            <div class="contact-status">
                                <div class="offline"></div>
                                <div class="status">offline since oct 24</div>
                            </div>
                            <div class="last-chat-time">
                                22 oct
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/Lee-Munroe.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Lee Munroe</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                last week
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chatbar-messages" style="display: none;">
                <div class="messages-contact">
                    <div class="contact-avatar">
                        <img src="assets/img/avatars/divyia.jpg" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Divyia Philips</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            a moment ago
                        </div>
                        <div class="back">
                            <i class="fa fa-arrow-circle-left"></i>
                        </div>
                    </div>
                </div>
                <ul class="messages-list">
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                </ul>
                <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                </div>
            </div>
        </div>
        <!-- /Chat Bar -->
        <!-- Page Content -->
        <p></p>

        @yield('contents')


        <!-- /Page Content -->

    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>

<!--Basic Scripts-->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/slimscroll/jquery.slimscroll.min.js")}}"></script>

<!--Beyond Scripts-->
<script src="{{asset("assets/js/beyond.js")}}"></script>



<!--Page Related Scripts-->
<script src="{{asset("assets/js/datatable/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/js/datatable/ZeroClipboard.js")}}"></script>
<script src="{{asset("assets/js/datatable/dataTables.tableTools.min.js")}}"></script>
<script src="{{asset("assets/js/datatable/dataTables.bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/datatable/datatables-init.js")}}"></script>
<script>
    InitiateSimpleDataTable.init();
    InitiateEditableDataTable.init();
    InitiateExpandableDataTable.init();
    InitiateSearchableDataTable.init();
</script>


<!--Page Related Scripts-->
<!--Sparkline Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/sparkline/jquery.sparkline.js")}}"></script>
<script src="{{asset("assets/js/charts/sparkline/sparkline-init.js")}}"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/easypiechart/jquery.easypiechart.js")}}"></script>
<script src="{{asset("assets/js/charts/easypiechart/easypiechart-init.js")}}"></script>

<!--Flot Charts Needed Scripts-->
<script src="{{asset("assets/js/charts/flot/jquery.flot.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.resize.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.pie.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.tooltip.js")}}"></script>
<script src="{{asset("assets/js/charts/flot/jquery.flot.orderBars.js")}}></script>

<script>
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
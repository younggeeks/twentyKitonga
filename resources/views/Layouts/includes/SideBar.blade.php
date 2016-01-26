<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->

    {{--menu which is to be seen by estimator--}}
    @if(Auth::check() && Auth::user()->company_id!=null &&Entrust::hasRole("estimator"))

            <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li class="@yield('home_active')">
            <a href="{{URL::to('/')}}">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text">Yumai Home </span>
            </a>
        </li>
        <!--Databoxes-->
        <li class="@yield('product_specs_active')">
            <a href="{{URL::to('product_specs')}}">
                <i class="menu-icon glyphicon glyphicon-tasks"></i>
                <span class="menu-text"> Product specification</span>
            </a>
        </li>
        <!--company profile-->
        <li class="@yield('company_profile_active')">
            <a href="{{URL::to("company/view-company")}}" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Company profile</span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li class="@yield('company_profile_company_info')">
                    <a href="{{URL::to('company/view-company')}}">
                        <span class="menu-text">Company Information</span>
                    </a>
                </li>

                <li class="@yield('company_profile_company_estimator')">
                    <a href="{{URL::to('company_estimator')}}">
                        <span class="menu-text">Company Estimators</span>
                    </a>
                </li>
                <li class="@yield('raw_material_prices')">
                    <a href="{{URL::to('raw_material_prices')}}">
                        <span class="menu-text">Raw Material Prices</span>
                    </a>
                </li>
                <li class="@yield('product_info')">
                    <a href="{{URL::to('product_info')}}">
                        <span class="menu-text">Product Information</span>
                    </a>
                </li>
                <li class="@yield('overhead_margins')">
                    <a href="{{URL::to('overhead_margins')}}">
                        <span class="menu-text">overheads and Margins</span>
                    </a>
                </li>

            </ul>
        </li>



        <!-- shop Profile-->
        <li class="@yield('shop_profile_active')">
            <a href="">
                <i class="menu-icon fa fa-tags"></i>
                <span class="menu-text">Shops Profile</span>
            </a>
        </li>
        <li class="@yield('complete_estimation_active')">
            <a href="{{URL::to('complited_estimation')}}">
                <i class="menu-icon fa fa-check-square"></i>
                <span class="menu-text">Completed Estimation</span>
            </a>
        </li>
        <!--Mail-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-envelope-o"></i>
                <span class="menu-text">Mail </span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li>
                    <a href="inbox.html">
                        <span class="menu-text">Inbox</span>
                    </a>
                </li>

                <li>
                    <a href="message-view.html">
                        <span class="menu-text">View Message</span>
                    </a>
                </li>
                <li>
                    <a href="message-compose.html">
                        <span class="menu-text">Compose Message</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="">
                <i class="menu-icon glyphicon glyphicon-open-file"></i>
                <span class="menu-text"> Reports</span>
            </a>
        </li>


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-align-right"></i>
                <span class="menu-text"> Right to Left </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a>
                        <span class="menu-text">RTL</span>
                        <label class="pull-right margin-top-10">
                            <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                            <span class="text"></span>
                        </label>
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="index-rtl-ar.html">--}}
                {{--<span class="menu-text">Arabic Layout</span>--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="index-rtl-fa.html">--}}
                {{--<span class="menu-text">Persian Layout</span>--}}
                {{--</a>--}}
                {{--</li>--}}

            </ul>
        </li>
        <li>
            <a href="versions.html">
                <i class="menu-icon glyphicon glyphicon-fire themesecondary"></i>
                            <span class="menu-text">
                               Yumai Estimation system.
                            </span>
            </a>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
            @endif

    {{--menu which is to be seen by customer--}}
    @if(Auth::check() && Auth::user()->company_id==null &&!Entrust::hasRole("customer"))

                    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li class="@yield('reports')">
            <a href="{{URL::to('/')}}">
                <i class="menu-icon glyphicon glyphicon-print"></i>
                <span class="menu-text">Reports</span>
            </a>
        </li>
        <li class="@yield('estimations')">
            <a href="{{URL::to('customer/estimations')}}">
                <i class="menu-icon glyphicon .glyphicon-eur"></i>
                <span class="menu-text">Estimations</span>
            </a>
        </li>
        <li class="@yield('new-job')">
            <a href="{{URL::to('job/new-job')}}">
                <i class="menu-icon glyphicon glyphicon-edit"></i>
                <span class="menu-text">New Estimation </span>
            </a>
        </li>
        </ul>
            @endif
    {{--menu which is to be seen by estimator--}}
    @if(Auth::check() && Auth::user()->company_id!=null &&!Entrust::hasRole("super_admin"))


            @endif




</div>
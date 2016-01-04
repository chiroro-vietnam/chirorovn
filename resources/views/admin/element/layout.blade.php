<!DOCTYPE html>
<html lang="en">
<!-- Header -->
@include('admin/element/header')
<!--/Header-->

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                    <img class="nav-user-photo" src="{{asset("/backend/img/logo.png")}}" alt="user" width="180" height="25"/>
                        
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="blue">
                            <span class="action-buttons">
                                <a href="#" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/vn.png")}}" alt="vn" title="Tiếng Việt"/>
                                </a>
                                <a href="#" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/en.png")}}" alt="en" title="English"/>                                    
                                </a>
                                <a href="#" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/jp.png")}}" alt="jp" title="日本語"/>
                                </a>
                            </span>
                        </li>


                        <!--  <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="img/flags/us.png">
                            <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}"><img alt="" src="img/flags/es.png">{{{ $properties['native'] }}}</a>

                                </li>
                            @endforeach
                        </ul>
                    </li> -->

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    8 Notifications
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                        Recruit
                                                    </span>
                                                    <span class="pull-right badge badge-info">+12</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="btn btn-xs btn-primary fa fa-user"></i>
                                                Contact
                                            </a>
                                        </li>                                        
                                    </ul>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="#">
                                        See all notifications
                                        <i class="ace-icon fa fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="{{asset("backend/img/user.png")}}" alt="user" />
                                <span class="user-info">
                                    <small>Welcome</small>Admin
                                </span>
                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-key"></i>
                                        Change password
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <!--sidebar-->
            @include('admin/element/sidebar')
            
            <!--/sidebar-->

            <div class="main-content">
                <div class="main-content-inner">
                <!--breadcrumb-->
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">Some Pages</a>
                            </li>
                            <li class="active">Active</li>
                        </ul>
                        <!--
                        <div class="nav-search" id="nav-search">
                            <form class="form-search" style="margin-top: -3px;">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ace-icon fa fa-search"></i>
                                    </span>
                                    <input type="text" placeholder="search..." class="form-control search-query">
                                    <span class="input-group-btn">
                                        <button class="btn btn-purple btn-sm" type="button">
                                            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                            Search
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div><!-- /.nav-search
                        -->
                    </div>
                 <!-- /.breadcrumb -->
                    <div class="page-content">
                        <!--Content-->
                         @yield('content')
                       
                        <!-- /Content -->
                    </div>

            <!--footer-->
            @include('admin/element/footer')
            <!--/footer-->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->

            <script src="{{ asset('/backend/js/jquery.2.1.1.min.js') }}"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

<script src="{{asset('/backend/js/jquery.1.11.1.min.js')}}"></script>


        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{asset("backend/js/jquery.min.js")}}'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{asset("backend/js/jquery.mobile.custom.min.js")}}'>"+"<"+"/script>");
        </script>

        <script src="{{ asset('/backend/js/bootstrap.min.js') }}"></script>

        <!-- page specific plugin scripts -->
        <script src="{{ asset('/backend/js/bootstrap-tag.min.js') }}"></script>
        <script src="{{ asset('/backend/js/jquery.hotkeys.min.js') }}"></script>

        <script src="{{ asset('/backend/js/bootstrap-wysiwyg.min.js') }}"></script>

        <script src="{{ asset('/backend/js/ace-elements.min.js') }}"></script>

        <script src="{{ asset('/backend/js/ace.min.js') }}"></script>

        <!-- inline scripts related to this page -->
        
    </body>
</html>

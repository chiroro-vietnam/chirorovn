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
                    <a href="<?php echo route('admin.dashboard'); ?>" class="navbar-brand">
                    <img class="nav-user-photo" src="{{asset("/backend/img/logo.png")}}" alt="user" width="180" height="25"/>
                        
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="blue">
                            <span class="action-buttons">
                                <a href="{{LaravelLocalization::getLocalizedURL('vi') }}" hreflang="vi" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/vn.png")}}" alt="vn" title="Tiếng Việt"/>
                                </a>
                                <a href="{{LaravelLocalization::getLocalizedURL('en') }}" hreflang="en" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/en.png")}}" alt="en" title="English"/>                                    
                                </a>
                                <a href="{{LaravelLocalization::getLocalizedURL('ja') }}" hreflang="ja" style="height: 41px; width: 22px;">
                                    <img class="nav-user-photo" src="{{asset("backend/img/jp.png")}}" alt="jp" title="日本語"/>
                                </a>
                            </span>
                        </li>


                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-primary"><?php echo @NOTIFY;?></span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    <?php echo @NOTIFY;?> Notifications
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="<?php echo route('admin.inquiry.index');?>">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                        Contacts
                                                    </span>
                                                    <span class="pull-right badge badge-info"><?php echo @NOTIFY;?></span>
                                                </div>
                                            </a>
                                        </li>                                                                            
                                    </ul>
                                </li>

                                <li class="dropdown-footer"></li>
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
                                    <a href="javascript:void(0);">
                                       <!--  <i class="ace-icon fa fa-key"></i> -->
                                       &nbsp;
                                        <!-- Change password -->
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo route('admin.auth.logout');?>">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        {{trans('common.btn_logout')}}
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

                    <!--Content-->
                        @yield('content')
                    <!-- /Content -->

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

<script src="{{asset('/backend/js/jquery.2.1.1.min.js')}}"></script>


        <!--[if !IE]> -->
        <!--<script type="text/javascript">
            window.jQuery || document.write("<script src="{{asset('/backend/js/jquery.min.js')}}">"+"<"+"/script>");
        </script>-->

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{asset("/backend/js/jquery.mobile.custom.min.js")}}'>"+"<"+"/script>");
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

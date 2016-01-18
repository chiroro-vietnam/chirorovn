<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success"></button>
            <button class="btn btn-info"></button>
            <button class="btn btn-warning"></button>
            <button class="btn btn-danger"></button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="">
            <a href="<?php echo route('admin.dashboard'); ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> {{trans('common.sidebar_dashboard')}} </span>
            </a>

            <b class="arrow"></b>
        </li>
          <!--Recruit-->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">
                    {{trans('common.sidebar_recruit')}}
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo route('admin.recruit.index');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                            {{trans('common.lbl_recruit_list')}}
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?php echo route('admin.recruit.add');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                            {{trans('common.lbl_recruit_add')}}
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <!--/Recruit-->
        
        <!--Inquiry-->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-envelope-o"></i>
                <span class="menu-text"> {{trans('common.sidebar_inquiry')}} 
                <span class="badge badge-primary"><?php echo @NOTIFY;?></span>
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>
            <ul class="submenu">
                <li class="">
                    <a href="<?php echo route('admin.inquiry.index');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        {{trans('common.lbl_list')}}
                    </a>
                    <b class="arrow"></b>
                </li>

            </ul>
        </li>
        <!--/Inquiry-->
    
        <!--Account-->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">{{trans('common.sidebar_account')}} </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo route('admin.users.list'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        {{trans('common.lbl_list')}}
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?php echo route('admin.users.add'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        {{trans('common.lbl_add')}}
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <!--/Account-->
        <!--Setting-->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text"> {{trans('common.sidebar_setting')}} </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo route('admin.setting.company'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        {{trans('common.sidebar_com_info')}}
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?php echo route('admin.setting.signature'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        {{trans('common.sidebar_signature')}}
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <!--/Setting-->
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>
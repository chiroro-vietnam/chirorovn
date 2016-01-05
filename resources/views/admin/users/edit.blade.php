@extends('backend')

@section('content')
<!--breadcrumb-->
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">{{trans('common.home_page')}}</a>
            </li>
            <li>
                <a href="#">{{trans('common.user_list_title')}}</a>
            </li>
            <li class="active">{{trans('common.lbl_edit')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">

        <div class="page-header">
            <h1>{{trans('common.lbl_user_edit')}}</h1>
        </div><!-- /.page-header -->
            
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_username')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" id="username" name="username" placeholder="{{trans('common.lbl_username')}}" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_email')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" id="email" name="email" placeholder="{{trans('common.lbl_email')}}" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> {{trans('common.lbl_password')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>

                                        <div class="col-sm-9">
                                            <input type="password" id="password" name="password" placeholder="{{trans('common.lbl_password')}}" class="col-xs-10 col-sm-5" />
                                            </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> {{trans('common.lbl_confirm_password')}}<span class="icnMustSp"></span></label>

                                        <div class="col-sm-9">
                                            <input type="password" id="confirm_password" name="confirm_password" placeholder="{{trans('common.lbl_confirm_password')}}" class="col-xs-10 col-sm-5" />
                                            </div>
                                    </div>

                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_first_name')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" id="first_name" name="first_name" placeholder="{{trans('common.lbl_first_name')}}" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>


                                    <div class="space-4"></div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_last_name')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" id="last_name" name="last_name" placeholder="{{trans('common.lbl_last_name')}}" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>                                   

                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food"> {{trans('common.lbl_status')}} <span class="icnMustSp"></span></label>

                                        <div class="col-xs-13 col-sm-9">
                                            <select  class="col-xs-2" id="status" name="status">
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>
 

                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-info" type="button">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Submit
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </div>                                    

                                </form>

                            </div><!-- /.col -->
                        </div><!-- /.row -->


</div>
@endsection
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
                <a href="#">{{trans('common.sidebar_setting')}}</a>
            </li>
            <li class="active">{{trans('common.sidebar_signature')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">
        <div class="page-header">
            <h1>{{trans('common.sidebar_signature')}}</h1>
        </div><!-- /.page-header -->


                <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">

                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="icnMust">{{trans('common.icnMust')}}</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control parsley-error col-md-7 col-xs-12">
                                                
                                                <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">※512文字以内で入力してください。</li></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Meta <span class="icnMust">{{trans('common.icnMust')}}</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control parsley-error col-md-7 col-xs-12">
                                                
                                                <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">※255文字以内で入力してください。</li></ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Meta Description <span class="icnMust">{{trans('common.icnMust')}}</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control parsley-error col-md-7 col-xs-12">
                                                
                                                <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">※255文字以内で入力してください。</li></ul>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-9 col-md-offset-3">
                                                <button type="button" class="width-45 pull-right btn btn-sm btn-success">
                                                            <span class="bigger-110">Submit</span>

                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
@endsection
@extends('backend')

@section('content')
{!! HTML::script('jasny-bootstrap/js/jquery.min.js') !!}
{!! HTML::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
{!! HTML::script('bootstrap/js/bootstrap-tagsinput.js') !!}
{!! HTML::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
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
                                <div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>
                                            <li style="margin-left: 7px;">{{ $message }}</li>
                                        </div>

                                        @elseif($message = Session::get('error'))
                                           <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button>
                                            <li style="margin-left: 7px;">{{ $message }}</li>
                                        </div>
                                    @endif
                                </div>
                            <div class="x_content">
                                <br />
                                <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                                 {!! Form::open( ['method' => 'post', 'route' => 'admin.setting.company', 'class' => 'form-horizontal form-label-left', 'enctype'=>'multipart/form-data'] ) !!}
                                    <input type="hidden" name="id" value="{{@$data->id}}" id="id">
                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">{{trans('common.setting_company_title')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="title" name="title" class="form-control parsley-error col-md-7 col-xs-12" value="{{@$data->title}}" placeholder="{{trans('common.setting_company_title')}}">
                                            
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                            <li class="parsley-required">@if ($errors->first('title')) ※ {!! $errors->first('title') !!} @endif</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="meta_key">{{trans('common.setting_company_meta_key')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="meta_key" name="meta_key" class="form-control parsley-error col-md-7 col-xs-12" value="{{@$data->meta_key}}" placeholder="{{trans('common.setting_company_meta_key')}}">
                                            
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">@if ($errors->first('meta_key')) ※ {!! $errors->first('meta_key') !!} @endif</li></ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="meta_desc">{{trans('common.setting_company_meta_decs')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="10" cols="50" id="meta_desc" name="meta_desc" placeholder="{{trans('common.setting_company_meta_decs')}}" value="{{@$data->meta_desc}}">{{@$data->meta_desc}}</textarea>
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">@if ($errors->first('meta_desc')) ※ {!! $errors->first('meta_desc') !!} @endif</li></ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">{{trans('common.setting_company_email')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="email" name="email" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.setting_company_email')}}" value="{{@$data->email}}">
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">@if ($errors->first('email')) ※ {!! $errors->first('email') !!} @endif</li></ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title_logo">{{trans('common.setting_company_title_logo')}}
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="fileinput fileinput-new control-group" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">{!! HTML::image(@$data->title_logo, '') !!}</div>
                                                    <div>
                                                      <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                        {!! Form::file('title_logo', null, array('class'=>'form-control', 'id' => 'title_logo', 'placeholder' => trans('common.setting_company_title_logo'), 'value'=>Input::old(@$data->title_logo))) !!}
                                                         </span>
                                                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>                                                
                                            </div>
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">@if ($errors->first('title_logo')) ※ {!! $errors->first('title_logo') !!} @endif</li></ul>
                                        </div>                                        
                                    </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_logo">{{trans('common.setting_company_site_logo')}}
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <!-- <input type="text" id="site_logo" name="site_logo" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.setting_company_site_logo')}}" value="{{@$data->site_logo}}"> -->
                                            <div class="fileinput fileinput-new control-group" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">{!! HTML::image(@$data->site_logo, '') !!}</div>
                                                    <div>
                                                      <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                        {!! Form::file('site_logo', null, array('class'=>'form-control', 'id' => 'site_logo', 'placeholder' => trans('common.setting_company_site_logo'), 'value'=>Input::old(@$data->site_logo))) !!}
                                                         </span>
                                                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>                                                
                                            </div>
                                            <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">@if ($errors->first('site_logo')) ※ {!! $errors->first('site_logo') !!} @endif</li></ul>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-3 col-sm-3 col-xs-9 col-md-offset-3">
                                            <button type="submit" class="width-45 pull-right btn btn-sm btn-success">
                                                <span class="bigger-110">Save</span>  
                                            </button>
                                        </div>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div> <!-- /row -->
        </div>
@endsection
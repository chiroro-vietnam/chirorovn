@extends('backend')

@section('content')

<!-- bootstrap wysihtml5 - text editor -->
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
            <h1>{{trans('common.setting_signature_content')}}</h1>
        </div><!-- /.page-header -->
            <div class="clearfix"></div>
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                        <div class="x_panel">                        
                            <div class="x_content">  
                            <br />
                            {!! Form::open( ['method' => 'post', 'route' => 'admin.setting.signature', 'class' => 'form-horizontal form-label-left', 'enctype'=>'multipart/form-data'] ) !!}
                                <input type="hidden" name="id" value="{{@$data->id}}" id="id">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="top: 144px;">{{trans('common.setting_signature_content')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">                                            
                                        <textarea class="form-control" rows="10" cols="50" id="content" name="content" value="{{@$data->content}}">{{@$data->content}}</textarea>
                                        <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                            <li class="parsley-required">
                                            @if ($errors->first('content')) ※ {!! $errors->first('content') !!} @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-9 col-md-offset-3">
                                        <button type="submit" class="width-45 pull-right btn btn-sm btn-success">
                                            <span class="bigger-110">&nbsp;&nbsp;{{trans('common.btn_setting_signature_save')}}&nbsp;&nbsp;</span>
                                        </button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
        </div>

@endsection
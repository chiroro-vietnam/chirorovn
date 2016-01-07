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
                {!! Form::open( ['method' => 'post', 'route' => ['admin.users.edit', $data->id], 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data'] ) !!}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_username')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="username" name="username" value="{{$data->username}}" placeholder="{{trans('common.lbl_username')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        <ul class="parsley-errors-list filled" id="parsley-id-3888"><li class="parsley-required">※512文字以内で入力してください。</li></ul>
                        </div>
                        @if ($errors->first('username'))
                           <span class="help-block">{!! $errors->first('username') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_email')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="{{trans('common.lbl_email')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        </div>
                        @if ($errors->first('email'))
                           <span class="help-block">{!! $errors->first('email') !!}</span>
                        @endif
                    </div>                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_password')}}</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password" placeholder="{{trans('common.lbl_password')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        </div>
                        @if ($errors->first('password'))
                           <span class="help-block">{!! $errors->first('password') !!}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_confirm_password')}}</label>
                        <div class="col-sm-9">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="{{trans('common.lbl_confirm_password')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        </div>
                        @if ($errors->first('confirm_password'))
                           <span class="help-block">{!! $errors->first('confirm_password') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_name')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" value="{{$data->name}}"  placeholder="{{trans('common.lbl_name')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        </div>
                        @if ($errors->first('name'))
                           <span class="help-block">{!! $errors->first('name') !!}</span>
                        @endif
                    </div>                                   

                    @if(LaravelLocalization::getCurrentLocaleName() == 'Japanese')
                     <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> {{trans('common.lbl_furigana')}}<span class="icnMust">{{trans('common.icnMust')}}</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="furigana" name="furigana" value="{{$data->furigana}}" placeholder="{{trans('common.lbl_furigana')}}" class="col-xs-10 col-sm-5" autofocus/>                                            
                        </div>
                        @if ($errors->first('furigana'))
                           <span class="help-block">{!! $errors->first('furigana') !!}</span>
                        @endif
                    </div>                                    
                    @endif

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food"> {{trans('common.lbl_status')}}</label>

                        <div class="col-xs-13 col-sm-9">
                            <select  class="col-xs-3" id="status" name="status">
                                <option value="1" @if($data->status == 1) {{'selected="selected"'}} @endif>{{trans('common.status_enable')}}</option>
                                <option value="0" @if($data->status == 0) {{'selected="selected"'}} @endif>{{trans('common.status_disable')}}</option>
                            </select>
                        </div>
                    </div> 

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>
                            &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>

            {!! Form::close() !!}

        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
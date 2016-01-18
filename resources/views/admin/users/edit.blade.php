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
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                        <br />
                        {!! Form::open( ['method' => 'post', 'route' => ['admin.users.edit', $data->id], 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data'] ) !!}

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">{{trans('common.lbl_username')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" id="username" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_username')}}" autofocus value="{{$data->username}}">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('username')) ※ {!! $errors->first('username') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>

                           <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">{{trans('common.lbl_email')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_email')}}" value="{{$data->email}}">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('email')) ※ {!! $errors->first('email') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>                       

                           <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">{{trans('common.lbl_password')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_password')}}" value="">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('password')) ※ {!! $errors->first('password') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm_password">{{trans('common.lbl_confirm_password')}}
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_confirm_password')}}" value="">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('confirm_password')) ※ {!! $errors->first('confirm_password') !!} @endif</li>
                                    </ul>
                                </div>
                            </div> 

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">{{trans('common.lbl_name')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="full_name" id="full_name" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_name')}}" value="{{$data->full_name}}">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('full_name')) ※ {!! $errors->first('full_name') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>
                            @if(LaravelLocalization::getCurrentLocaleName() == 'ja')
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="furigana">{{trans('common.lbl_furigana')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="furigana" id="furigana" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_furigana')}}" value="{{$data->furigana}}">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('furigana')) ※ {!! $errors->first('furigana') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>
                            @endif

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">{{trans('common.lbl_status')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-4">    
                                        <select  class="col-xs-3" id="status" name="status">
                                            <option value="1" <?php if($data->status == 1) echo 'selected="selected"';?>>Enable</option>
                                            <option value="0" <?php if($data->status == 0) echo 'selected="selected"';?>>Disable</option>
                                        </select>
                              
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('publish')) ※ {!! $errors->first('publish') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-3 col-sm-3 col-xs-9 col-md-offset-3">
                                    <button type="submit" class="width-45 pull-right btn btn-sm btn-info">
                                        <span class="bigger-110">{{trans('common.btn_user_update')}}</span>
                                        <!-- <i class="ace-icon fa fa-arrow-right icon-on-right"></i> -->
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
</div>
@endsection
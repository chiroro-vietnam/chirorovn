@extends('backend')
@section('content')
{!! HTML::script('ckeditor/ckeditor.js') !!}
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
                <a href="#">{{trans('common.lbl_recruit_title')}}</a>
            </li>           
            <li class="active">{{trans('common.lbl_recruit_add')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">

        <div class="page-header">
            <h1>{{trans('common.lbl_recruit_add_title')}}</h1>
        </div><!-- /.page-header -->
            
        <div class="row">                        
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                        <br />
                        {!! Form::open( ['method' => 'post', 'route' => 'admin.recruit.add', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data'] ) !!}

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="position">{{trans('common.lbl_recruit_position')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="position" id="position" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_recruit_position')}}" autofocus value="{{Input::old('position')}}">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('position')) ※ {!! $errors->first('position') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>

                           <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">{{trans('common.lbl_recruit_content')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!-- <input type="text" name="content" id="content" class="form-control parsley-error col-md-7 col-xs-12" placeholder="{{trans('common.lbl_recruit_content')}}"> -->
                                    <textarea class="form-control" rows="10" cols="50" id="content" name="content" value="{{Input::old('content')}}">
                                        {{Input::old('content')}}      
                                    </textarea>
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('content')) ※ {!! $errors->first('content') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>                            

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order">{{trans('common.lbl_recruit_order')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <input type="text" style="text-align: center;" name="order" id="order" class="form-control parsley-error col-md-1 col-xs-1" placeholder="{{trans('common.lbl_recruit_order')}}" value="<?php echo !empty(Input::old('order')) ? Input::old('order') : $order;?>">
                                    
                                    <ul class="parsley-errors-list filled" id="parsley-id-3888">
                                        <li class="parsley-required">@if ($errors->first('order')) ※ {!! $errors->first('order') !!} @endif</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="publish">{{trans('common.lbl_recruit_publish')}} <span class="icnMust">{{trans('common.icnMust')}}</span>
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-4">    
                                        <select  class="col-xs-3" id="publish" name="publish">                                            
                                            <option value="0">Disable</option>
                                            <option value="1">Enable</option>
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
                                        <span class="bigger-110">{{trans('common.btn_recruit_save')}}</span>
                                        <!-- <i class="ace-icon fa fa-arrow-right icon-on-right"></i> -->
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace('content', {
            filebrowserBrowseUrl: "{!! url('filemanager/show') !!}",
            enterMode   : Number(2)
        });
    };
</script>
</div>
@endsection

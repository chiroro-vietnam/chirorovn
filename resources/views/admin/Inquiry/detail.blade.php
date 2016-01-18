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
                <a href="#">{{trans('common.lbl_inquiry')}}</a>
            </li>
            <li class="active">{{trans('common.lbl_inquiry_detail')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">
        <div class="page-header">
            <h1>{{trans('common.lbl_inquiry_header')}}</h1>
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
                               <table class="table">    
                                        <tbody>
                                            <tr>
                                                <th bgcolor="#DCDCDC" width="150px" style="text-align:right">{{trans('common.lbl_inquiry_company')}}</th>
                                                <td>{{$data->company}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_title')}}</th>
                                                <td>{{$data->title}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_name')}}</th>
                                                <td>{{$data->name}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_furigana')}}</th>
                                                <td>{{@$data->furigana}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_address')}}</th>
                                                <td>{{$data->address}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_phone')}}</th>
                                                <td>{{$data->phone}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_email')}}</th>
                                                <td>{{$data->email}}</td>
                                              </tr>
                            <!--                   <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">Liên hệ khác</th>
                                                <td>{{$data->contact_way}}</td>
                                              </tr> -->
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_language')}}</th>
                                                <td>{{@$lang[$data->language]}}</td>
                                              </tr>
                                              <tr>
                                                <th bgcolor="#DCDCDC" style="text-align:right">{{trans('common.lbl_inquiry_comment')}}</th>
                                                <td><?php echo nl2br($data->comment);?></td>
                                              </tr>
                                        </tbody>
                                    </table>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-9 col-md-offset-3">
                                        <button type="button" onclick="location.href ='<?php echo url(LaravelLocalization::getCurrentLocale().'/admin/inquiry/'); ?>'" class="width-45 pull-right btn btn-sm btn-success">
                                        <i class="ace-icon fa fa-arrow-left icon-on-left"></i>
                                            <span class="bigger-110">Back</span>                                            
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
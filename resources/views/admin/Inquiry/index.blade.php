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
                <a href="<?php echo route('admin.dashboard'); ?>">{{trans('common.home_page')}}</a>
            </li>
            <li>
                <a href="#">{{trans('common.lbl_inquiry')}}</a>
            </li>
            <li class="active">{{trans('common.lbl_inquiry_list')}}</li>
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
                    <div class="x_content">

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center" width="60px">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                 <th class="center">{{trans('common.lbl_inquiry_title')}}</th>
                                <th class="center">{{trans('common.lbl_inquiry_company')}}</th>                               
                                <th class="center">{{trans('common.lbl_inquiry_name')}}</th>
                                @if(LaravelLocalization::getCurrentLocale() == 'ja')
                                <th class="hidden-480 center">                                   
                                    {{trans('common.lbl_inquiry_furigana')}}
                                </th>
                                @endif
                                <th class="hidden-480 center">{{trans('common.lbl_inquiry_address')}}</th>                               

                                <th class="hidden-480 center" width="100px">{{trans('common.lbl_inquiry_phone')}}</th>
                                <th class="center">{{trans('common.lbl_inquiry_email')}}</th>
                                <th class="hidden-480 center">{{trans('common.lbl_inquiry_language')}}</th>
                                <th class="hidden-480 center">{{trans('common.lbl_inquiry_comment')}}</th>
                                <th class="center" width="80px">{{trans('common.lbl_action')}}</th>

                            </tr>
                        </thead>

                        <tbody>
                        @if(count($data) > 0)
                            @foreach($data as $inquiry)
                                <?php 
                                    if($inquiry->reader == 1){
                                        $flag = 'Unread';
                                        $class = 'orange';
                                        $title = trans('common.lbl_inquiry_unread');
                                    }else{
                                        $flag = 'Read';
                                        $class = 'silver';
                                        $title = trans('common.lbl_inquiry_read');
                                    }
                                ?>
                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" name="chkUser" id="ace"/>
                                            <span class="lbl"></span>
                                        </label>
                                        <a class="{{$class}}" href="javascript:void(0);">
                                            <i class="ace-icon fa fa-flag bigger-120" title="{{$title}}"></i>
                                        </a>
                                    </td>
                                    
                                    <td><a href="<?php echo url(LaravelLocalization::getCurrentLocale().'/admin/inquiry/detail/'.$inquiry->id); ?>">{{$inquiry->title}}</a></td>
                                    <td>{{$inquiry->company}}</td>
                                    <td>{{$inquiry->name}}</td>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ja')
                                        <td class="hidden-480">{{$inquiry->furigana}}</td>
                                    @endif
                                    <td class="hidden-480 center">
                                        {{$inquiry->address}}
                                    </td>

                                    <td class="hidden-480">{{$inquiry->phone}}</td>
                                    <td>{{$inquiry->email}}</td>
                                    <td class="hidden-480">{{@$lang[$inquiry->language]}}</td>
                                    <td class="hidden-480">{{$inquiry->comment}}</td>
                                     
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="{{$class}}" href="javascript:void(0);">
                                                <i class="ace-icon fa fa-flag bigger-120" title="{{$title}}"></i>
                                            </a>

                                            <a class="red" href="123">
                                                <i class="ace-icon fa fa-trash-o bigger-130" title="Delete"></i>
                                            </a>
                                        </div>
                                       
                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-110"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="{{$flag}}">
                                                            <span class="{{$class}}">
                                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="11" class="center">No Data</td>
                                    
                                </tr>
                            @endif

                        </tbody>
                    </table>
                                        
                    </form>
               
            </div>
        </div>
    </div>

    </div>
@endsection
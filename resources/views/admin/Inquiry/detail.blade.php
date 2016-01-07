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
                    <div class="x_content">

        <table class="table">    
            <tbody>
                <tr>
                    <th bgcolor="#DCDCDC" width="150px" style="text-align:right">Công ty</th>
                    <td>{{$data->company}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Chủ đề</th>
                    <td>{{$data->title}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Tên</th>
                    <td>{{$data->name}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Kana</th>
                    <td>{{$data->furigana}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Địa chỉ</th>
                    <td>{{$data->address}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Điện thoại</th>
                    <td>{{$data->phone}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">E-mail</th>
                    <td>{{$data->email}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Liên hệ khác</th>
                    <td>{{$data->contact_way}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Ngôn ngữ</th>
                    <td>{{$data->language}}</td>
                  </tr>
                  <tr>
                    <th bgcolor="#DCDCDC" style="text-align:right">Nội dung</th>
                    <td><?php echo nl2br($data->comment);?></td>
                  </tr>
            </tbody>
        </table>                     
     
               
            </div>
        </div>
    </div>

    </div>
@endsection
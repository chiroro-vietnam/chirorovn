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
            <li class="active">{{trans('common.sidebar_dashboard')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">

        <div class="page-header">
            <h1>{{trans('common.sidebar_dashboard')}}</h1>
        </div><!-- /.page-header -->
            
        <div class="row">                        
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                {!! Form::open( ['method' => 'post', 'route' => 'admin.users.add', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data'] ) !!}
                

            	{!! Form::close() !!}

            </div><!-- /.col -->
        </div><!-- /.row -->


</div>
@endsection
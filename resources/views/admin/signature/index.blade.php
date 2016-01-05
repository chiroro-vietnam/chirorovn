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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="top: 144px;">E-mail Signature <span class="icnMust">{{trans('common.icnMust')}}</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                
                                                <textarea class="form-control" rows="10" cols="50" id="signature" name="signature" value="{{$data[0]->content}}">
                                                    {{$data[0]->content}}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success" style="left: 130px;"> &nbsp;&nbsp;&nbsp;&nbsp; Save &nbsp;&nbsp;&nbsp;&nbsp; </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
@endsection
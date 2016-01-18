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
                <a href="#">{{trans('common.lbl_recruit')}}</a>
            </li>
            <li class="active">{{trans('common.lbl_recruit_list')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">
        <div class="page-header">
            <h1>{{trans('common.lbl_recruit_title')}}</h1>
        </div><!-- /.page-header -->
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
        <div class="row">
            <div class="col-xs-12">    
                <div class="clearfix">                    
                    <div class="pull-right tableTools-container">
                        <button class="btn btn-sm btn-primary pull-right" onClick="parent.location='<?php echo route('admin.recruit.add'); ?>'">
                            <i class="ace-icon fa fa fa-plus-square bigger-110"></i>  {{trans('common.lbl_add')}} </button>
                    </div>
                </div>
                <!-- div.table-responsive -->

                <!-- div.dataTables_borderWrap -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center" width="3%">#</th>
                                <th class="center" width="7%">{{trans('common.lbl_recruit_position')}}</th>
                                <th>{{trans('common.lbl_recruit_content')}}</th>
                                <th class="center" width="7%">{{trans('common.lbl_recruit_publish')}}</th>
                                <th class="center" width="7%">{{trans('common.lbl_recruit_locale')}}</th>
                                <th class="center" width="5%">{{trans('common.lbl_recruit_order')}}</th>
                                <th  class="center" width="10%" class="hidden-480">
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    {{trans('common.lbl_created')}}
                                </th>
                                <th class="center" width="7%">{{trans('common.lbl_action')}}</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if(count($recruits) > 0)
                            @foreach($recruits as $recruit)
                                <tr>
                                    <td class="center">
                                        {{$recruit->id}}
                                    </td>

                                    <td>
                                        <a href="#">{{$recruit->position}}</a>
                                    </td>
                                    <td>{{$recruit->content}}</td>
                                    <td class="center">
                                        <label>
                                            <input class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" name="publish" 
                                            <?php if($recruit->publish == 1) echo 'checked="checked"'; else echo ""; ?>                                            
                                                @if($recruit->publish == 0)
                                                    onClick="location.href='{{route('admin.recruit.publish', $recruit->id)}}'"
                                                @elseif($recruit->publish == 1)
                                                    onClick="location.href='{{route('admin.recruit.unpublish', $recruit->id)}}'"
                                                @endif
                                                >
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td class="center" class="hidden-480">{{@$locale[$recruit->locale]}}</td>
                                    <td class="center" class="hidden-480">{{$recruit->order}}</td>
                                    <td class="center" class="hidden-480">{{$recruit->created_at}}</td>
                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green" href="<?php echo route('admin.recruit.edit', $recruit->id); ?>">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" onclick="return confirm('<?php echo trans('common.delete_confirm'); ?>');" href="<?php echo route('admin.recruit.del', $recruit->id); ?>">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-110"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
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
                                    <td colspan="8" class="center">No Data</td>
                                    
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @if(count($recruits) > 0)
            <div class="box-footer clearfix">
                <ul class="pagination pagination-lg no-margin pull-right">
                    {!! $recruits->render() !!}
                </ul>
            </div>
        @endif
</div>
@endsection
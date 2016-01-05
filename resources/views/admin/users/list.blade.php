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
            <li class="active">{{trans('common.lbl_list')}}</li>
        </ul>
    </div>
 <!-- /.breadcrumb -->
    <div class="page-content">
        <div class="page-header">
            <h1>{{trans('common.user_list_title')}}</h1>
        </div><!-- /.page-header -->
            
        <div class="row">
            <div class="col-xs-12">    
                <div class="clearfix"> 
                    @if(count($users) > 0)      
                    <div class="pull-left tableTools-container">
                        <button class="btn btn-sm btn-danger pull-left">
                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                            {{trans('common.lbl_delete')}}
                        </button>                       
                    </div>
                    @endif

                    <div class="pull-right tableTools-container">
                        <button class="btn btn-sm btn-primary pull-right" onClick="parent.location='<?php echo route('admin.users.add'); ?>'">
                            <i class="ace-icon fa fa fa-plus-square bigger-110"></i>  {{trans('common.lbl_add')}} </button>
                    </div>

                </div>
                <!-- div.table-responsive -->

                <!-- div.dataTables_borderWrap -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center" width="6px">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>{{trans('common.lbl_username')}}</th>
                                <th>{{trans('common.lbl_email')}}</th>
                                <th class="hidden-480">{{trans('common.lbl_full_name')}}</th>

                                <th class="hidden-480">
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    {{trans('common.lbl_created')}}
                                </th>
                                <th class="hidden-480 center">{{trans('common.lbl_status')}}</th>

                                <th class="center" width="100px">{{trans('common.lbl_action')}}</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if(count($users) > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" name="chkUser" id="ace"/>
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">{{$user->username}}</a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td class="hidden-480">{{$user->name}}</td>
                                    <td class="hidden-480">{{$user->created_at}}</td>

                                    <td class="hidden-480 center">
                                        <?php 
                                            $enable = trans("common.status_enable");
                                            $disabled = trans("common.status_disable");
                                            $arr_status = array('0' => $disabled, '1' => $enable);
                                            $class = '';
                                            if($user->status == 1)
                                                $class = 'success';
                                            else
                                                $class = 'warning';
                                        ?>
                                        <span class="label label-sm label-{{$class}}">{{@$arr_status[$user->status]}}</span>
                                    </td>

                                    <td class="center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green" href="<?php echo route('admin.users.edit', $user->id); ?>">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
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
                                    <td colspan="7" class="center">No Data</td>
                                    
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div> 

        @if(count($users) > 0)   
        <div class="modal-footer no-margin-top">
            <button class="btn btn-sm btn-danger pull-left">
                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                 {{trans('common.lbl_delete')}}
            </button>
            <ul class="pagination pull-right no-margin">
                <li class="prev disabled">
                    <a href="#">
                        <i class="ace-icon fa fa-angle-double-left"></i>
                    </a>
                </li>

                <li class="active">
                    <a href="#">1</a>
                </li>

                <li>
                    <a href="#">2</a>
                </li>

                <li>
                    <a href="#">3</a>
                </li>

                <li class="next">
                    <a href="#">
                        <i class="ace-icon fa fa-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </div>
        @endif
</div>
@endsection
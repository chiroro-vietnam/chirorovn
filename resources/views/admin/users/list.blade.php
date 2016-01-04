@extends('backend')

@section('content')
<div class="page-header">
    <h1>Accounts</h1>
</div><!-- /.page-header -->
    
<div class="row">
    <div class="col-xs-12">    
        <div class="clearfix">        
            <div class="pull-right tableTools-container">
                <button class="btn btn-sm btn-primary pull-right" onClick="parent.location='<?php echo route('admin.users.add'); ?>'">
                    <i class="ace-icon fa fa fa-plus-square bigger-130"></i> Add </button>
            </div>
        </div>
        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th class="hidden-480">Clicks</th>

                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                            Update
                        </th>
                        <th class="hidden-480">Status</th>

                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td>
                            <a href="#">app.com</a>
                        </td>
                        <td>$45</td>
                        <td class="hidden-480">3,330</td>
                        <td>Feb 12</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Expiring</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

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
                </tbody>
            </table>
        </div>
    </div>
</div>    
<div class="modal-footer no-margin-top">
    <button class="btn btn-sm btn-danger pull-left">
        <i class="ace-icon fa fa-trash-o bigger-130"></i>
        Delete
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
@endsection
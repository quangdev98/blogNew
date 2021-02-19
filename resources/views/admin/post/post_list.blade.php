@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Post List
            <small></small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>Category Parent</th>
                <th class="center">Content Hot</th>
                <th>Status</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd gradeX" align="center">
                <td>1</td>
                <td>Tin Tức</td>
                <td>None</td>
                <td class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</td>
                <td>Hiện</td>
                <td class="center">
                    <div>
                        <span><i class="fad fa-trash-alt fa-fw"></i><a href="#"> Delete</a></span>
                        <span><i class="fad fa-pencil-alt fa-fw"></i><a href="#">Edit</a></span>    
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@stop
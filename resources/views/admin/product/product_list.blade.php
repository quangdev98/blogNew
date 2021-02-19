@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Product List
            <small></small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Date</th>
                <th>Status</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody class="fix">
            <tr class="odd gradeX" align="center">
                <td>1</td>
                <td>Áo Thun Nana</td>
                <td><img src="{{ url('admins/dist/img/aothun.png') }}" alt=""></td>
                <td>200.000 VNĐ</td>
                <td>3 Minutes Age</td>
                <td>Hiện</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
            </tr>
            <tr class="even gradeC" align="center">
                <td>2</td>
                <td>Áo Thun Polo</td>
                <td><img src="{{ url('admins/dist/img/aothun.png') }}" alt=""></td>
                <td>250.000 VNĐ</td>
                <td>1 Hours Age</td>
                <td>Ẩn</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
            </tr>
        </tbody>
    </table>
@stop

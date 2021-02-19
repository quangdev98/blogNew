@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Thể Loại
        <small>Danh Sách</small>
    </h1>
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Tên</th>
            <th>Tên Không Dấu</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($theloai as $tl)
            <tr class="odd gradeX" align="center">
                <td>{{ $tl ->id }}</td>
                <td>{{ $tl ->name }}</td>
                <td class="fix_name">{{ $tl ->tenkhongdau }}</td>
                <td class="center">
                   <div>
                        <span><i class="fad fa-trash-alt fa-fw"></i><a href="#"> Xóa</a></span>
                        <span><i class="fad fa-pencil-alt fa-fw"></i> <a href="{{ route('category-edit',['id'=>$tl->id]) }}">Sửa</a></span>    
                    </div>    
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>
@stop
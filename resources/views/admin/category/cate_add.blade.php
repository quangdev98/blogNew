@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Category Add
        <small></small>
    </h1>
</div>
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="category-add" method="POST">
        @csrf
        <div class="form-group">
            <label>Tên Thể Loại</label>
            <input class="form-control" name="nameTheloai" placeholder="Vui lòng nhập tên Thể Loại" />
        </div>
        <button type="submit" class="btn btn-success">Thêm mới</button>
        
    <form>
</div>
@stop

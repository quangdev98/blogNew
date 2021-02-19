@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Post Add
            <small></small>
        </h1>
    </div>
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="" placeholder="Vui lòng nhập tiêu đề bài viết" />
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <input class="form-control" name="" placeholder="Vui lòng nhập tóm tắt bài viết" />
            </div>
            <div class="form-group">
                <label>Nội dung bài viết</label>
                <textarea class="form-control" rows="3" name=""></textarea>
            </div>
          
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="" class="form-control">
            </div>
            <div class="form-group">
                <label>Danh mục bài viết</label>
                <select class="form-control">
                    <option value="">--Vui lòng chọn danh mục bài viết--</option>
                    <option value="">Tin Tức</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        <form>
    </div>
@stop
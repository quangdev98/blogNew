@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Thêm Tác Giả
            <small></small>
        </h1>
    </div>
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="name" placeholder="Please Enter Username" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Please Enter Phone" />
            </div>
            <div class="form-group">
                <label>Info more</label>
                <textarea name="info_more" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">User Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
@stop
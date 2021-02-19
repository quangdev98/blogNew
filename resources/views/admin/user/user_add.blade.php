@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">User Add
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
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
            </div>
            <div class="form-group">
                <label>RePassword</label>
                <input type="password" class="form-control" name="_repassword" placeholder="Please Enter RePassword" />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Please Enter Phone" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
            </div>
            <div class="form-group">
                <label>User Level</label>
                <label class="radio-inline">
                    <input name="level" value="1" type="radio">Admin
                </label>
                <label class="radio-inline">
                    <input name="level" value="0" checked type="radio">Member
                </label>
            </div>
            <button type="submit" class="btn btn-default">User Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
@stop
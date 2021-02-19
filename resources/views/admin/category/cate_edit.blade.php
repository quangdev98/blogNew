@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Category Edit
        <small>{{ $theloai->name }}</small>
    </h1>
</div>
<div class="col-lg-7" style="padding-bottom:120px">
    @if (count($errors) >0)
       <div class="alert alert-danger">
           @foreach ($errors->all() as $err)
               {{$err}}
           @endforeach
       </div>
    @endif
    {{-- @if (session('thongbao'))
        <div class="alert alert-success">
            {{ session('thongbao') }}
        </div>
    @endif --}}
    <form action="{{ route('post-category-edit',['id'=>$theloai->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tên danh mục</label>
            <input class="form-control" name="name" value="{{ $theloai->name }}" />
        </div>
        <button type="submit" class="btn btn-success">Sửa</button>
        <button type="reset" class="btn btn-success">Làm mới</button>
        
    <form>
</div>
@stop
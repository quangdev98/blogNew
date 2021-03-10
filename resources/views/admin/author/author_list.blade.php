@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">Author List
            <small></small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Ảnh</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Level</th>>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody class="fix">
            @foreach ($author as $au)   
                <tr class="odd" align="center">
                    <td>{{ $au ->id }}</td>
                    <td><img src="/{{ $au ->avatar }}" alt=""></td>
                    <td>{{ $au ->name }}</td>
                    <td>{{ $au ->email }}</td>
                    <td>{{ $au ->phone }}</td>
                    <td>
                        {{ $au -> level == 1 ? "Quản trị viên" : "" }}
                        {{ $au -> level == 2 ? "Quản lý bài viết" : ""}}
                        {{ $au -> level == 3 ? "Quản lý đăng bài" : ""}}
                    </td>
                    <td class="center">
                        <div>
                            <span><i class="fad fa-trash-alt fa-fw"></i><a href="#"> Delete</a></span>
                            <span><i class="fad fa-pencil-alt fa-fw"></i> <a href="#">Edit</a></span>    
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">User List
            <small></small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $ur)   
                <tr class="odd" align="center">
                    <td>{{ $ur ->id }}</td>
                    <td>{{ $ur ->name }}</td>
                    <td>{{ $ur ->email }}</td>
                    <td>{{ $ur ->level }}</td>
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
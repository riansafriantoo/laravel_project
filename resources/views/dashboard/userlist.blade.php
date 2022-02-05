@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Daftar User Perpustakaan</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($user as $user_list)
                                        <tr>
                                            <td>
                                            @if($user_list->avatar)
                                                <img src="{{asset('images/'.$user_list->avatar)}}" class="img-circle" width="50" height="50" alt="Avatar">
                                            @else
                                                <img src="images/default.jpg" class="img-circle" width="50" height="50" alt="Avatar">
                                            @endif
                                            </td>
                                            <td><a href="/userList/{{$user_list->id}}/profile">{{$user_list->name}}</a></td>
                                            <td>{{$user_list->email}}</td>
                                            <td>{{$user_list->role}}</td>
                                            <td>
                                                <a href="/book/{{$user_list->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/book/{{$user_list->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin data ingin dihapus ?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
						</div>
                </div>
            </div>
        </div>
    </div>
@stop
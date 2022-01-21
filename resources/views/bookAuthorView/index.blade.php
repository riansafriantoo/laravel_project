@extends('layout.master')
@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Daftar Penulis buku</h3>
                                <div class="right">
                                    <button type="button" class="btn-default" data-toggle="modal" data-target="#addAuthor"><span class="lnr lnr-plus-circle"></span></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Penulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_penulis as $book)
                                        <tr>
                                            <td>{{$book->penulis}}</td>
                                            <td>
                                                <a href="/bookAuthor/{{$book->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/bookAuthor/{{$book->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin data ingin dihapus ?')">Delete</a>
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
    <div class="modal fade" id="addAuthor" tabindex="-1" aria-labelledby="addAuthorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAuthorLabel">Modal Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/bookAuthor/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Penulis</label>
                    <input name="penulis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama Penulis">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
@stop
@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Daftar Buku Perpustakaan</h3>
                                <div class="right">
                                    <button type="button" class="btn-default" data-toggle="modal" data-target="#addBook"><span class="lnr lnr-plus-circle"></span></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Judul Buku</th>
                                            <th>Jenis Buku</th>
                                            <th>Tahun Terbit</th>
                                            <th>Penulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($data_book as $book)
                                        <tr>
                                            <td>{{$book->nama}}</td>
                                            <td>{{$book->jenis}}</td>
                                            <td>{{$book->tahun_terbit}}</td>
                                            <td>{{$book->penulis}}</td>
                                            <td>
                                                <a href="/book/{{$book->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/book/{{$book->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin data ingin dihapus ?')">Delete</a>
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

    <div class="modal fade" id="addBook" tabindex="-1" aria-labelledby="addBookLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBookLabel">Modal Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/book/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Buku</label>
                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul buku">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Buku</label>
                    <input name="jenis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis buku">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tahun Penerbit</label>
                    <input name="tahun_terbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Penerbit">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Penulis</label>
                    <select name="penulis_id" class="form-control" id="exampleFormControlSelect1">
                    <option>Nama Penulis</option>
                    @foreach ($data_penulis as $writer)
                    <tr>
                        <option value={{$writer->id}}>{{$writer->penulis}}</option>
                    </tr>
                    @endforeach
                    </select>
                    </div>
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
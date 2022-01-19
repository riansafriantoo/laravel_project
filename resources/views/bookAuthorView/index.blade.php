@extends('layout.master')

@section('content')
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Penulis</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addBook">
                    Tambah Data Penulis
                </button>
            </div>
            <table class="table">
                <tr>
                    <th>Nama Penulis</th>
                    <th>Action</th>
                </tr>
                @foreach ($data_penulis as $book)
                <tr>
                    <td>{{$book->penulis}}</td>
                    <td>
                        <a href="/bookAuthor/{{$book->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/bookAuthor/{{$book->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin data ingin dihapus ?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
<!-- Modal -->
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
@endsection
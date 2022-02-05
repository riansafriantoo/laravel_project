@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
            <div class="col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Buku</h3>
                </div>
                <form action="/bookAuthor/{{$book->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <label for="exampleFormControlInput1">Judul Buku</label>
                        <input name="penulis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama penulis" value="{{$book->penulis}}">
                        <br>
                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="/bookAuthor" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop

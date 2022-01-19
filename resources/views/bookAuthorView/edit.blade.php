@extends('layout.master')

@section('content')
        <h1>Edit Data Buku</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
        <div class="col-lg-12">
            <form action="/bookAuthor/{{$book->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Buku</label>
                    <input name="penulis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama penulis" value="{{$book->penulis}}">
                </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="/bookAuthor" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

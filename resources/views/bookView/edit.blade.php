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
            <form action="/book/{{$book->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Buku</label>
                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul buku" value="{{$book->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Buku</label>
                    <input name="jenis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis buku" value="{{$book->jenis}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tahun Penerbit</label>
                    <input name="tahun_terbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Penerbit" value="{{$book->tahun_terbit}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Penulis</label>
                    <select name="penulis_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach ($data_penulis as $writer)
                        <option value={{$writer->id}}>{{$writer->penulis}}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="/book" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection


@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/book/{{$book->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Inputs</h3>
                            </div>
                            <div class="panel-body">
                                <label for="exampleFormControlInput1">Judul Buku</label>
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="Judul buku" value="{{$book->nama}}">
                            <br>
                                <label for="exampleFormControlInput1">Jenis Buku</label>
                                <input name="jenis" type="text" class="form-control" id="jenis" placeholder="Jenis buku" value="{{$book->jenis}}">
                            <br>
                                <label for="exampleFormControlInput1">Tahun Penerbit</label>
                                <input name="tahun_terbit" type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Penerbit" value="{{$book->tahun_terbit}}">
                            <br>
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <select name="penulis_id" class="form-control" id="penulis_id">
                                    @foreach ($data_penulis as $writer)
                                        <option value={{$writer->id}}>{{$writer->penulis}}</option>
                                    @endforeach
                                    </select>
                            <br>
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a href="/book" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


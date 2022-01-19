<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        
        $data_book = DB::table('book')
        ->Join('book_writer','book_writer.id','=','book.penulis_id')
        ->select('book.id','book.nama','book.jenis','book.tahun_terbit','book_writer.penulis')
        ->get();

        $data_penulis = DB::table('book_writer')
        ->get();
        return view('bookView.index',['data_book' => $data_book,'data_penulis' => $data_penulis]);
    
    }

    public function create(Request $request){
        
        \App\Book::create($request->all());
        return redirect('/book')->with('sukses','Data Berhasil dimasukkan');
    }

    public function edit($id){
        $data_penulis = DB::table('book_writer')
        ->get();

        $book = \App\Book::find($id);
        return view('bookView/edit',['book'=>$book,'data_penulis' => $data_penulis]);
    }

    public function update(Request $request,$id){
        $book = \App\Book::find($id);
        $book->update($request->all());
        return redirect('/book')->with('sukses','Data berhasil diubah');
    }

    public function delete($id){
        $book = \App\Book::find($id);
        $book->delete();
        return redirect('/book')->with('sukses','Data berhasil dihapus'); 
    }
}

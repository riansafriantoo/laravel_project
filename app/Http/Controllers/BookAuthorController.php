<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index(){
        $data_penulis = DB::table('book_writer')
        ->get();
        return view('bookAuthorView.index',['data_penulis' => $data_penulis]);
    }

    public function create(Request $request){
        
        \App\BookAuthor::create($request->all());
        return redirect('/bookAuthor')->with('sukses','Data Berhasil dimasukkan');
    }

    public function edit($id){
        $book = \App\BookAuthor::find($id);
        return view('bookAuthorView/edit',['book'=>$book]);
    }

    public function update(Request $request,$id){
        $book = \App\BookAuthor::find($id);
        $book->update($request->all());
        return redirect('/bookAuthor')->with('sukses','Data berhasil diubah');
    }

    public function delete($id){
        $book = \App\BookAuthor::find($id);
        $book->delete();
        return redirect('/bookAuthor')->with('sukses','Data berhasil dihapus'); 
    }

}

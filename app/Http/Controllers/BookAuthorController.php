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
}

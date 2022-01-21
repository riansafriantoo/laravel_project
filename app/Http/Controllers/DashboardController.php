<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $data_book = DB::table('book')
        ->Join('book_writer','book_writer.id','=','book.penulis_id')
        ->select('book.id','book.nama','book.jenis','book.tahun_terbit','book_writer.penulis')
        ->get();

        $data_penulis = DB::table('book_writer')
        ->get();

        $user = DB::table('users')
        ->get();
        return view('dashboard.index',['data_book' => $data_book,'data_penulis' => $data_penulis,'user' => $user]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data_book = DB::table('book')
    ->Join('book_writer','book_writer.id','=','book.penulis_id')
    ->select('book.id','book.nama','book.jenis','book.tahun_terbit','book_writer.penulis')
    ->get();

    $data_penulis = DB::table('book_writer')
    ->get();

    return view('bookView.index',['data_book' => $data_book,'data_penulis' => $data_penulis]);
});

Route::get('/book','BookController@index');
Route::get('/bookAuthor','BookAuthorController@index');
Route::post('/book/create','BookController@create');
Route::get('/book/{id}/edit','BookController@edit');
Route::get('/book/{id}/delete','BookController@delete');
Route::post('/book/{id}/update','BookController@update');
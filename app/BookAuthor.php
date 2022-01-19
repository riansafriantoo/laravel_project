<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    protected $table = 'book_writer';
    protected $fillable = ['penulis'];
}

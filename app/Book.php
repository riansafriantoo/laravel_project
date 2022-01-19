<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['nama','jenis','tahun_terbit','penulis_id'];
}

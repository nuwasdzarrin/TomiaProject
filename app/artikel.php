<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = "artikels";
    protected $fillable = [
        'judul', 'isi', 'penulis','gambar',
    ];
}

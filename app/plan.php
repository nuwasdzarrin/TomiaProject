<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $table = "plans";
    protected $fillable = [
        'judul', 'deskripsi','gambar', 
    ];
}

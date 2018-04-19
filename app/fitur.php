<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fitur extends Model
{
    protected $table = "fiturs";
    protected $fillable = [
        'judul', 'deskripsi','gambar', 
    ];
}

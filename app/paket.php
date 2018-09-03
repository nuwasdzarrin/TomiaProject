<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table = "pakets";
    protected $fillable = [
        'paket', 'fasilitas', 'harga','deskripsi','desa',
    ];
}

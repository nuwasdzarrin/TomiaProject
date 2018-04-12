<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table = "pakets";
    protected $fillable = [
        'paket', 'fas1', 'fas2','fas3',
    ];
}

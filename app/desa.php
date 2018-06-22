<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    protected $table = "desas";
    protected $fillable = [
        'id', 'nama', 'sing','panj','maps',
    ];
}

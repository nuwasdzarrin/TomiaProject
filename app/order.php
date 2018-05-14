<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'id_pembelian', 'id_paket', 'nama_pemesan','email','no_hp','jumlah','tgl_keberangkatan','status','gambar',
    ];
   	public function joinPaket()
    {
    	return $this->hasOne('App\paket', 'id', 'id_paket');
    }
}

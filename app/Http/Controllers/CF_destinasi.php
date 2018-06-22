<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\galeri;
use App\desa;

class CF_destinasi extends Controller
{
    function dest()
    {
    	$ds=desa::all();
        $ar=artikel::where('tampilkan','=',1)->latest()->limit(4)->get();
        $gal=galeri::latest()->limit(4)->get();
        return view ('/destinasi')
        ->with('d',$ds)
        ->with('a',$ar)
        ->with('g',$gal);
    }
}

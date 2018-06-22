<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\galeri;
use App\desa;

class CF_peta extends Controller
{
    //peta-show
    function peta($id)
    {
        $ds=desa::where('id','=',$id)->first();
        $ar=artikel::where('kategori','=',$id)->where('tampilkan','=',1)->limit(4)->get();
        $gal=galeri::latest()->limit(4)->get();
        return view ('/peta-show')
        ->with('d',$ds)
        ->with('a',$ar)
        ->with('g',$gal);
    }
}

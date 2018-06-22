<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
class CF_art extends Controller
{
    function readArt($id)
    {
        $jml=artikel::where('tampilkan','=',1)->count();
        $terbaru=artikel::where('tampilkan','=',1)->latest()->skip(($id-1)*6)->take(6)->get();
        $populer=artikel::where('tampilkan','=',1)->orderBy('pengunjung','desc')->limit(7)->get();
        return view ('/artikel')
        ->with('terbaru',$terbaru)
        ->with('populer',$populer)
        ->with('count',$jml)
        ->with('id',$id);
    }
}

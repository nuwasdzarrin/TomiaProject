<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
class CF_detArt extends Controller
{
    function detArt($id)
    {
        $artikel=artikel::where('id','=',$id)->first();
        $terbaru=artikel::where('tampilkan','=',1)->latest()->limit(4)->get();
        $populer=artikel::where('tampilkan','=',1)->orderBy('pengunjung','desc')->limit(7)
        ->get();
        $temp=artikel::find($id);
        $temp->pengunjung=$artikel->pengunjung+1;
        $temp->save();
        return view ('detail_artikel')
        ->with ('artikel',$artikel)
        ->with('terbaru',$terbaru)
        ->with('populer',$populer);
    }
}

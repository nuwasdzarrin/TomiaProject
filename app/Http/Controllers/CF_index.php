<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\paket;
use App\slider;
use App\fitur;
use App\galeri;
use App\plan;
use App\Video;

class CF_index extends Controller
{
    function reIndex()
    {
    	$slider=slider::all();
        $paket=paket::latest()->get();
        $fitur=fitur::all();
        $galeri=galeri::latest()->limit(8)->get();
        $plan=plan::all();
        $latArt=artikel::where('tampilkan','=',1)->latest()->offset(1)->limit(5)->get();
        $populer=artikel::where('tampilkan','=',1)->orderBy('pengunjung','desc')->limit(5)->get();
        $terbaru=artikel::where('tampilkan','=',1)->latest()->first();
        $vdo=Video::latest()->first();
        return view ('index')
        ->with ('paket',$paket)
        ->with ('slider',$slider)
        ->with ('fitur',$fitur)
        ->with ('galeri',$galeri)
        ->with ('plan',$plan)
        ->with('latesArt',$latArt)
        ->with('populer',$populer)
        ->with('terbaru',$terbaru)
        ->with('video',$vdo);
    }
}

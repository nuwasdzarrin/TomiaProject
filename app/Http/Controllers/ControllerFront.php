<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\paket;
use App\slider;
use App\fitur;
use App\galeri;
use App\plan;

class ControllerFront extends Controller
{
    function readAbout()
    {
        $paket=paket::all();
        return view ('about')
        ->with ('data',$paket)
        ->with('no',1);
    }
    function readIndex()
    {
    	$slider=slider::all();
        $paket=paket::all();
        $fitur=fitur::all();
        $galeri=galeri::latest()
        ->get();
        $plan=plan::all();
        $latestArt=artikel::latest()
        ->get();
        $populer=artikel::latest()
        ->get();
        $terbaru=artikel::latest()
        ->first();
        return view ('index')
        ->with ('paket',$paket)
        ->with ('slider',$slider)
        ->with ('fitur',$fitur)
        ->with ('galeri',$galeri)
        ->with ('plan',$plan)
        ->with('latesArt',$latestArt)
        ->with('populer',$populer)
        ->with('terbaru',$terbaru)
        ->with('no',1);
    }
    function readArtikel($id)
    {
        $count=artikel::count();
        $terbaru=artikel::latest()
        ->get();
        $populer=artikel::latest()
        ->get();
        return view ('/artikel')
        ->with('terbaru',$terbaru)
        ->with('populer',$populer)
        ->with('count',$count)
        ->with('id',$id);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
class CF_galeri extends Controller
{
    function readGal($id)
    {
        $count=galeri::count();
        $terbaru=galeri::latest()->offset(($id-1)*8)->limit(8)->get();
        return view ('/galeris')
        ->with('terbaru',$terbaru)
        ->with('count',$count)
        ->with('id',$id);
    }
}

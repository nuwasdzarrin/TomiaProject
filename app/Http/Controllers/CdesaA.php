<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\desa;
use App\artikel;
use App\galeri;

class CdesaA extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    function rDesa()
    {
    	$desa=desa::latest()->get();
        return view ('admin/vDesa')
        ->with ('dta',$desa);
    }
    function aDesa()
    {
        return view ('admin/aDesa');
    }
    function inDesa(Request $req)
    {
        $this->validate($req, ['maps' => 'required|image']);
        $gambar = $req->file('maps');
        $namaFile = $gambar->getClientOriginalName();
        $req->file('maps')->move('uploadgambar/maps', $namaFile);

    	$ds = new desa($req->all());
    		$ds->nama = $req->nama;
            $ds->sing = $req->sing;
            $ds->panj = $req->panj;
    		$ds->maps = $namaFile;
    		
    	$ds->save();
    	return redirect ('/desa');
    }
    function delDesa($id)
    {
        $ds=desa::find($id);
        $ds->delete();
        return redirect('/desa');
    }
    function eDesa($id)
    {
        $ds=desa::where('id','=',$id)
        ->first();
        return view ('admin/eDesa')
        ->with ('d',$ds);
    }
    function uDesa(Request $req, $id)
    {
        if ($req->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($req, ['maps' => 'required|image']);
            $gambar = $req->file('maps');
            $namaFile = $gambar->getClientOriginalName();
            $req->file('maps')->move('uploadgambar/maps', $namaFile);

            $ds = desa::find($id);
            $ds->nama = $req->nama;
            $ds->sing = $req->sing;
            $ds->panj = $req->panj;
            $ds->maps = $namaFile;
            
            $ds->save();
            return redirect ('/desa');
        }else {
            //echo "INI TIDAK";
            $ds = desa::find($id);
            $ds->nama = $req->nama;
            $ds->sing = $req->sing;
            $ds->panj = $req->panj;
            
            $ds->save();
            return redirect ('/desa');
        }
    }
}

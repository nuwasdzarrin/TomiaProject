<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\paket;

class ControllerAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Calonya dibuat Dasboard INI GAAAANNNN!!!!!
        $siswa=artikel::all();
        return view ('admin/viewArticel')
        ->with ('data',$siswa)
        ->with('no',1);
    }

    /*Artikel-Artikel disini*/
    function addArticel()
    {
        return view ('admin/addArticel');
    }


    function inputArticel(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar', $namaFile);

    	$siswa = new artikel($request->all());
    		$siswa->judul = $request->judul;
            $siswa->isi = $request->content;
    		$siswa->category = $request->category;
    		$siswa->gambar = $namaFile;
    		
    	$siswa->save();
    	return redirect ('/articel');
    }

    function readArticel()
    {
        $siswa=artikel::all();
        return view ('admin/viewArticel')
        ->with ('data',$siswa)
        ->with('no',1);
    }
    function deleteArticel($id)
    {
        $siswa=artikel::find($id);
        $siswa->delete();
        return redirect('/Articel');
    }
    function editArticel($id)
    {
        $siswa=artikel::where('id','=',$id)
        ->first();
        return view ('admin/editArticel')
        ->with ('data',$siswa);
    }
    function updatetArticel(Request $request, $id)
    {
        if ($request->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar', $namaFile);

            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->isi = $request->content;
            $siswa->category = $request->category;
            $siswa->gambar = $namaFile;
            
            $siswa->save();
            return redirect ('/articel');
        }else {
            //echo "INI TIDAK";
            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->isi = $request->content;
            $siswa->category = $request->category;
            
            $siswa->save();
            return redirect ('/articel');
        }
    }
    /*Artikel-Artikel sampek sini*/

    /*Paket-paket disini*/
    function addPaket()
    {
        return view ('admin/addPaket');
    }


    function inputPaket(Request $request)
    {
        
        $paket = new paket($request->all());
            $paket->paket = $request->paket;
            $paket->fas1 = $request->fas1;
            $paket->fas2 = $request->fas2;
            $paket->fas3 = $request->fas3;
            
        $paket->save();
        return redirect ('/paket');
    }

    function readPaket()
    {
        $paket=paket::all();
        return view ('admin/viewPaket')
        ->with ('paket',$paket)
        ->with('no',1);
    }
    function deletePaket($id)
    {
        $paket=paket::find($id);
        $paket->delete();
        return redirect('/paket');
    }
    function editPaket($id)
    {
        $paket=paket::where('id','=',$id)
        ->first();
        return view ('admin/editPaket')
        ->with ('paket',$paket);
    }
    function updatetPaket(Request $request, $id)
    {
            $paket = paket::find($id);
            $paket->paket = $request->paket;
            $paket->fas1 = $request->fas1;
            $paket->fas2 = $request->fas2;
            $paket->fas3 = $request->fas3;
            
            $paket->save();
            return redirect ('/paket');
        
        }
}

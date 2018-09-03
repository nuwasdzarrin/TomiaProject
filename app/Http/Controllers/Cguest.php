<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\artikel;

class Cguest extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('writer');
    }
    function readArticel()
    {
    	$user = Auth::user();
        $artikel=artikel::where('penulis','=',$user->name)->latest()->get();
        return view ('guest/viewArticel')
        ->with ('data',$artikel)
        ->with('no',1);
    }
    function addArticel()
    {
        return view ('guest/addArticel');
    }
    function inputArticel(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar/artikels', $namaFile);

        $kal=artikel::pluck('id')->count();
    	$siswa = new artikel($request->all());
            $siswa->id = $kal+1;
    		$siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
    		$siswa->penulis = $request->penulis;
    		$siswa->gambar = $namaFile;
    		
    	$siswa->save();
    	return redirect ('/artikels');
    }
    function deleteArticel($id)
    {
        $siswa=artikel::find($id);
        $siswa->delete();
        $kal=artikel::pluck('id')->count();
        for ($i=$id;$i<=$kal;$i++) {
            $res = artikel::find($i+1);
            $res->id = $i;
            $res->save();
        }
        $path = 'uploadgambar/artikels/'.$siswa->gambar;
        if(file_exists($path)){
            if(unlink($path)){
                echo "<script>alert('Data berhasil dihapus!')</script>";
            }else{
                echo "<script>alert('Gagal Menghapus Data!')</script>";
            }
        }else{
            echo "<script>alert('Tempat tidak ditemukan!')</script>";
        }
        return redirect('/artikels');
    }
    function editArticel($id)
    {
        $siswa=artikel::where('id','=',$id)
        ->first();
        return view ('guest/editArticel')
        ->with ('data',$siswa);
    }
    function updatetArticel(Request $request, $id)
    {
        if ($request->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/artikels', $namaFile);

            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
            $siswa->penulis = $request->penulis;
            $siswa->gambar = $namaFile;
            
            $siswa->save();
            return redirect ('/artikels');
        }else {
            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
            $siswa->penulis = $request->penulis;
            
            $siswa->save();
            return redirect ('/artikels');
        }
    }
}

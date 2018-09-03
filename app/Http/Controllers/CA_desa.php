<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\artikel;
use App\paket;
use App\slider;
use App\galeri;
use App\order;
use App\Video;

class CA_desa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('d_admin');
    }
    
    function dash()
    {
        $user = Auth::user();
        $art = artikel::where('kategori','=',$user->desa)->count();
        $gal = galeri::where('desa','=',$user->desa)->count();
        $ord = order::where('desa','=',$user->desa)->count();
        $pct = paket::where('desa','=',$user->desa)->count();
        return view ('pokdarwis/dash')
        ->with ('ar',$art)
        ->with ('ga',$gal)
        ->with ('or',$ord)
        ->with ('pac',$pct);
    }
    function addArticel()
    {
        return view ('pokdarwis/aArt');
    }
    public function show($id)
    {
        $post = artikel::findOrFail($id);
        return view('post.show', ['post' => $post]);
    }
    public function changeStatus() 
    {
        $id = Input::get('id');
        $post = Post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
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
    	return redirect ('/art');
    }
    function readArticel()
    {
    	$user = Auth::user();
        $siswa=artikel::where('kategori','=',$user->desa)->orWhere('kategori',0)->latest()->get();
        return view ('pokdarwis/vArt')
        ->with ('data',$siswa);
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
        return redirect('/art');
    }
    function editArticel($id)
    {
        $siswa=artikel::where('id','=',$id)
        ->first();
        return view ('pokdarwis/eArt')
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
            return redirect ('/art');
        }else {
            //echo "INI TIDAK";
            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
            $siswa->penulis = $request->penulis;
            
            $siswa->save();
            return redirect ('/art');
        }
    }
    /*Artikel-Artikel sampek sini*/
    /*Paket-paket disini*/
    function addPaket()
    {
        return view ('pokdarwis/aPkt');
    }
    function inputPaket(Request $request)
    {
        $kal=paket::pluck('id')->count();
        $paket = new paket($request->all());
            $paket->id = $kal+1;
            $paket->paket = $request->paket;
            $paket->fasilitas = $request->fasilitas;
            $paket->harga = $request->harga;
            $paket->deskripsi = $request->deskripsi;
            $paket->desa = $request->desa;
            
        $paket->save();
        return redirect ('/pkt');
    }
    function readPaket()
    {
    	$user = Auth::user();
        $paket=paket::where('desa','=',$user->desa)->latest()->get();
        return view ('pokdarwis/vPkt')
        ->with ('paket',$paket);
    }
    function deletePaket($id)
    {
        $paket=paket::find($id);
        $paket->delete();
        $kal=paket::pluck('id')->count();
        for ($i=$id;$i<=$kal;$i++) {
            $res = paket::find($i+1);
            $res->id = $i;
            $res->save();
        }
        return redirect('/pkt');
    }
    function editPaket($id)
    {
        $paket=paket::where('id','=',$id)
        ->first();
        return view ('pokdarwis/ePkt')
        ->with ('paket',$paket);
    }
    function updatetPaket(Request $request, $id)
    {
            $paket = paket::find($id);
            $paket->paket = $request->paket;
            $paket->fasilitas = $request->fasilitas;
            $paket->harga = $request->harga;
            $paket->deskripsi = $request->deskripsi;
            $paket->desa = $request->desa;
            
            $paket->save();
            return redirect ('/pkt');
    }
    //end of packet function
    /*galeri-galeri disini*/
    function addGaleri()
    {
        return view ('pokdarwis/aGal');
    }
    function inputGaleri(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar/galeris', $namaFile);

        $this->validate($request, ['thumbnail' => 'required|image']);
        $thumbnail = $request->file('thumbnail');
        $namaThumb = $thumbnail->getClientOriginalName();
        $request->file('thumbnail')->move('uploadgambar/galeris/thumbnail', $namaThumb);

        $kal=galeri::pluck('id')->count();
        $galeri = new galeri($request->all());
            $galeri->id = $kal+1;
            $galeri->gambar = $namaFile;
            $galeri->thumbnail = $namaThumb;
            $galeri->judul = $request->judul;
            $galeri->desa = $request->desa;
        $galeri->save();
        return redirect ('/gal');
    }
    function readGaleri()
    {
    	$user=Auth::user();
        $galeri=galeri::where('desa',$user->desa)->latest()->get();
        return view ('pokdarwis/vGal')
        ->with ('galeri',$galeri);
    }
    function deleteGaleri($id)
    {
        $galeri=galeri::find($id);
        $galeri->delete();
        $kal=galeri::pluck('id')->count();
        for ($i=$id;$i<=$kal;$i++) {
            $res = galeri::find($i+1);
            $res->id = $i;
            $res->save();
        }
        $path = 'uploadgambar/galeris/'.$galeri->gambar;
        if(file_exists($path)){
            if(unlink($path)){
                echo "<script>alert('Data berhasil dihapus!')</script>";
            }else{
                echo "<script>alert('Gagal Menghapus Data!')</script>";
            }
        }else{
            echo "<script>alert('Tempat tidak ditemukan!')</script>";
        }

        $pat = 'uploadgambar/galeris/thumbnail'.$galeri->thumbnail;
        if(file_exists($pat)){
            if(unlink($pat)){
                echo "<script>alert('Data berhasil dihapus!')</script>";
            }else{
                echo "<script>alert('Gagal Menghapus Data!')</script>";
            }
        }else{
            echo "<script>alert('Tempat tidak ditemukan!')</script>";
        }
        return redirect('/gal');
    }
    function editGaleri($id)
    {
        $galeri=galeri::where('id','=',$id)
        ->first();
        return view ('pokdarwis/eGal')
        ->with ('galeri',$galeri);
    }
    function updatetGaleri(Request $request, $id)
    {
            if ($request->options2=="option2"&&$request->options4=="option4"){
            //2 gambar d ganti semua
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/galeris', $namaFile);

            $this->validate($request, ['thumbnail' => 'required|image']);
            $thumbnail = $request->file('thumbnail');
            $namaThumb = $thumbnail->getClientOriginalName();
            $request->file('thumbnail')->move('uploadgambar/galeris/thumbnail', $namaThumb);

            $galeri = galeri::find($id);
            $galeri->gambar = $namaFile;
            $galeri->thumbnail = $namaThumb;
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/gal');
        }elseif ($request->options2=="option2"&&$request->options4!="option4") {
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/galeris', $namaFile);

            $galeri = galeri::find($id);
            $galeri->gambar = $namaFile;
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/gal');
        }elseif ($request->options2!="option2"&&$request->options4=="option4") {
            $this->validate($request, ['thumbnail' => 'required|image']);
            $thumbnail = $request->file('thumbnail');
            $namaThumb = $thumbnail->getClientOriginalName();
            $request->file('thumbnail')->move('uploadgambar/galeris/thumbnail', $namaThumb);

            $galeri = galeri::find($id);
            $galeri->thumbnail = $namaThumb;
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/gal');
        }else {
            $galeri = galeri::find($id);
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/gal');
        }
    }
    //end of galeri
    function tampilkan($id)
    {
        $art= artikel::find($id);
        $art->tampilkan=1;
        $art->save();
        return redirect ('/art');
    }
    function sembunyikan($id)
    {
        $art= artikel::find($id);
        $art->tampilkan=0;
        $art->save();
        return redirect ('/art');
    }
    //start of slider
    function readSlider()
    {
    	$user = Auth::user();
        $slider=slider::where('desa',$user->desa)->latest()->get();
        return view ('pokdarwis/vSli')
        ->with ('slider',$slider);
    }
    function editSlider($id)
    {
        $slider=slider::where('id','=',$id)
        ->first();
        return view ('pokdarwis/eSli')
        ->with ('slider',$slider);
    }
    function updatetSlider(Request $request, $id)
    {
            if ($request->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/sliders', $namaFile);

            $slider = slider::find($id);
            $slider->gambar = $namaFile;
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            
            $slider->save();
            return redirect ('/sli');
        }else {
            //echo "INI TIDAK";
            $slider = slider::find($id);
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            
            $slider->save();
            return redirect ('/sli');
        }
    }
    //end of slider
    /*video in here*/
    function addVdo()
    {
        return view ('pokdarwis/aVdo');
    }
    function inputVdo(Request $request)
    {
        $kal=Video::pluck('id')->count();
        $v = new Video($request->all());
            $v->id = $kal+1;
            $v->judul = $request->title;
            $v->video = $request->vid;
            
        $v->save();
        return redirect ('/vdo');
    }
    function readVdo()
    {
        $user = Auth::user();
        $v=Video::latest()->get();
        return view ('pokdarwis/vVdo')
        ->with ('video',$v);
    }
    function deleteVdo($id)
    {
        $v=Video::find($id);
        $v->delete();
        $kal=Video::pluck('id')->count();
        for ($i=$id;$i<=$kal;$i++) {
            $res = Video::find($i+1);
            $res->id = $i;
            $res->save();
        }
        return redirect('/vdo');
    }
    function editVdo($id)
    {
        $v=Video::where('id','=',$id)
        ->first();
        return view ('pokdarwis/eVdo')
        ->with ('video',$v);
    }
    function updatetVdo(Request $request, $id)
    {
            $v = Video::find($id);
            $v->judul = $request->title;
            $v->video = $request->vid;

            $v->save();
            return redirect ('/vdo');
    }
    //end of video function
    //start of order
    function pemesanan()
    {
    	$user = Auth::user();
        $order=order::with('joinPaket')->where('desa','=',$user->desa)->latest()->get();
        // dd($order);
        return view ('pokdarwis/order')
        ->with ('order',$order);
    }
    function status(Request $request, $id)
    {
       $status = order::find($id);
        $status->status = $request->status;
        $status->save();

        return redirect ('/ord'); 
    }
    function delPemesanan($id)
    {
        $order=order::find($id);
        $order->delete();
        return redirect('/ord');
    }
}

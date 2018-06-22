<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\artikel;
use App\paket;
use App\slider;
use App\galeri;
use App\fitur;
use App\plan;
use App\order;

class cAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        //Calonya dibuat Dasboard INI GAAAANNNN!!!!!
        return view ('admin/addArticel');
    }

    /*Artikel-Artikel disini*/
    function addArticel()
    {
        return view ('admin/addArticel');
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

    	$siswa = new artikel($request->all());
    		$siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
    		$siswa->penulis = $request->penulis;
    		$siswa->gambar = $namaFile;
    		
    	$siswa->save();
    	return redirect ('/articel');
    }

    function readArticel()
    {
        $siswa=artikel::latest()->get();
        return view ('admin/viewArticel')
        ->with ('data',$siswa)
        ->with('no',1);
    }
    function deleteArticel($id)
    {
        $siswa=artikel::find($id);
        $siswa->delete();
        return redirect('/articel');
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
            $request->file('gambar')->move('uploadgambar/artikels', $namaFile);

            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
            $siswa->penulis = $request->penulis;
            $siswa->gambar = $namaFile;
            
            $siswa->save();
            return redirect ('/articel');
        }else {
            //echo "INI TIDAK";
            $siswa = artikel::find($id);
            $siswa->judul = $request->judul;
            $siswa->kategori = $request->kategori;
            $siswa->isi = $request->content;
            $siswa->penulis = $request->penulis;
            
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
            $paket->fasilitas = $request->fasilitas;
            $paket->harga = $request->harga;
            $paket->deskripsi = $request->deskripsi;
            
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
            $paket->fasilitas = $request->fasilitas;
            $paket->harga = $request->harga;
            $paket->deskripsi = $request->deskripsi;
            
            $paket->save();
            return redirect ('/paket');
        
    }
    //paket-paket sampek sini

    /*Slider-slider disini*/
    function addSlider()
    {
        return view ('admin/addSlider');
    }


    function inputSlider(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar/sliders', $namaFile);

        $slider = new slider($request->all());
            $slider->gambar = $namaFile;
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
                        
        $slider->save();
        return redirect ('/slider');
    }

    function readSlider()
    {
        $slider=slider::all();
        return view ('admin/viewSlider')
        ->with ('slider',$slider)
        ->with('no',1);
    }
    function deleteSlider($id)
    {
        $slider=slider::find($id);
        $slider->delete();
        return redirect('/slider');
    }
    function editSlider($id)
    {
        $slider=slider::where('id','=',$id)
        ->first();
        return view ('admin/editSlider')
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
            return redirect ('/slider');
        }else {
            //echo "INI TIDAK";
            $slider = slider::find($id);
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            
            $slider->save();
            return redirect ('/slider');
        }
    }
    //slider-slider berakhir disini
    /*galeri-galeri disini*/
    function addGaleri()
    {
        return view ('admin/addGaleri');
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

        $galeri = new galeri($request->all());
            $galeri->gambar = $namaFile;
            $galeri->thumbnail = $namaThumb;
            $galeri->judul = $request->judul;
                        
        $galeri->save();
        return redirect ('/galeri');
    }

    function readGaleri()
    {
        $galeri=galeri::latest()->get();
        return view ('admin/viewGaleri')
        ->with ('galeri',$galeri)
        ->with('no',1);
    }
    function deleteGaleri($id)
    {
        $galeri=galeri::find($id);
        $galeri->delete();
        return redirect('/galeri');
    }
    function editGaleri($id)
    {
        $galeri=galeri::where('id','=',$id)
        ->first();
        return view ('admin/editGaleri')
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
            return redirect ('/galeri');
        }elseif ($request->options2=="option2"&&$request->options4!="option4") {
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/galeris', $namaFile);

            $galeri = galeri::find($id);
            $galeri->gambar = $namaFile;
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/galeri');
        }elseif ($request->options2!="option2"&&$request->options4=="option4") {
            $this->validate($request, ['thumbnail' => 'required|image']);
            $thumbnail = $request->file('thumbnail');
            $namaThumb = $thumbnail->getClientOriginalName();
            $request->file('thumbnail')->move('uploadgambar/galeris/thumbnail', $namaThumb);

            $galeri = galeri::find($id);
            $galeri->thumbnail = $namaThumb;
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/galeri');
        }else {
            //echo "INI TIDAK";
            $galeri = galeri::find($id);
            $galeri->judul = $request->judul;
                        
            $galeri->save();
            return redirect ('/galeri');
        }
    }
    //end of galeri
    /*fitur disini*/
    function addFitur()
    {
        return view ('admin/addFitur');
    }


    function inputFitur(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar/icons', $namaFile);

        $fitur = new fitur($request->all());
            $fitur->judul = $request->judul;
            $fitur->deskripsi = $request->deskripsi;
            $fitur->gambar = $namaFile;
                        
        $fitur->save();
        return redirect ('/fitur');
    }

    function readFitur()
    {
        $fitur=fitur::all();
        return view ('admin/viewFitur')
        ->with ('fitur',$fitur)
        ->with('no',1);
    }
    function deleteFitur($id)
    {
        $fitur=fitur::find($id);
        $fitur->delete();
        return redirect('/fitur');
    }
    function editFitur($id)
    {
        $fitur=fitur::where('id','=',$id)
        ->first();
        return view ('admin/editFitur')
        ->with ('fitur',$fitur);
    }
    function updatetFitur(Request $request, $id)
    {
            if ($request->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/icons', $namaFile);

            $fitur = fitur::find($id);
            $fitur->judul = $request->judul;
            $fitur->deskripsi = $request->deskripsi;
            $fitur->gambar = $namaFile;
            
            $fitur->save();
            return redirect ('/fitur');
        }else {
            //echo "INI TIDAK";
            $fitur = fitur::find($id);
            $fitur->judul = $request->judul;
            $fitur->deskripsi = $request->deskripsi;
                        
            $fitur->save();
            return redirect ('/fitur');
        }
    }
    //fitur berakhir disini
    /*plan disini*/
    function addPlan()
    {
        return view ('admin/addPlan');
    }


    function inputPlan(Request $request)
    {
        $this->validate($request, ['gambar' => 'required|image']);
        $gambar = $request->file('gambar');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('gambar')->move('uploadgambar/fiturs', $namaFile);

        $plan = new plan($request->all());
            $plan->judul = $request->judul;
            $plan->deskripsi = $request->deskripsi;
            $plan->gambar = $namaFile;
                        
        $plan->save();
        return redirect ('/plan');
    }

    function readPlan()
    {
        $plan=plan::all();
        return view ('admin/viewPlan')
        ->with ('plan',$plan)
        ->with('no',1);
    }
    function deletePlan($id)
    {
        $plan=plan::find($id);
        $plan->delete();
        return redirect('/plan');
    }
    function editPlan($id)
    {
        $plan=plan::where('id','=',$id)
        ->first();
        return view ('admin/editPlan')
        ->with ('plan',$plan);
    }
    function updatetPlan(Request $request, $id)
    {
            if ($request->options=="option2"){
            //echo "Ini di Eksekusi";
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/fiturs', $namaFile);

            $plan = plan::find($id);
            $plan->judul = $request->judul;
            $plan->deskripsi = $request->deskripsi;
            $plan->gambar = $namaFile;
            
            $plan->save();
            return redirect ('/plan');
        }else {
            //echo "INI TIDAK";
            $plan = plan::find($id);
            $plan->judul = $request->judul;
            $plan->deskripsi = $request->deskripsi;
                        
            $plan->save();
            return redirect ('/plan');
        }
    }
    function tampilkan($id)
    {
        $art= artikel::find($id);
        $art->tampilkan=1;
        $art->save();
        return redirect ('/articel');
    }
    function sembunyikan($id)
    {
        $art= artikel::find($id);
        $art->tampilkan=0;
        $art->save();
        return redirect ('/articel');
    }
    //plan berakhir disini
    function pemesanan()
    {
        $order=order::with('joinPaket')->latest()->get();
        // dd($order);
        return view ('admin/pemesanan')
        ->with ('order',$order);
    }
    function status(Request $request, $id)
    {
       $status = order::find($id);
        $status->status = $request->status;
        $status->save();

        return redirect ('/pemesanan'); 
    }
    function delPemesanan($id)
    {
        $order=order::find($id);
        $order->delete();
        return redirect('/pemesanan');
    }
}

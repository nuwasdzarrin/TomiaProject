<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\paket;
use App\slider;
use App\fitur;
use App\galeri;
use App\plan;
use App\order;
use PDF;

class ControllerFront extends Controller
{
    function detailArtikel($id)
    {
        $artikel=artikel::where('id','=',$id)
        ->first();
        $terbaru=artikel::latest()->limit(4)
        ->get();
        $populer=artikel::orderBy('pengunjung','desc')->limit(7)
        ->get();
        $temp=artikel::find($id);
        $temp->pengunjung=$artikel->pengunjung+1;
        $temp->save();
        return view ('detail_artikel')
        ->with ('artikel',$artikel)
        ->with('terbaru',$terbaru)
        ->with('populer',$populer);
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
        $populer=artikel::orderBy('pengunjung','desc')
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
        $populer=artikel::orderBy('pengunjung','desc')->limit(7)
        ->get();
        return view ('/artikel')
        ->with('terbaru',$terbaru)
        ->with('populer',$populer)
        ->with('count',$count)
        ->with('id',$id);
    }
    function readGaleris()
    {
        $count=galeri::count();
        $terbaru=galeri::latest()
        ->get();
        return view ('/galeris')
        ->with('terbaru',$terbaru)
        ->with('count',$count);
    }
    function order($id)
    {
        $paket=paket::where('id','=',$id)->first();
        return view ('order')
        ->with ('paket',$paket);
    }
    function checkout(Request $request)
    {
        $order = new order($request->all());
            $order->id_pembelian=str_random(5);
                $pesanan=$order->id_pembelian;
            $order->id_paket=$request->booking;
                $id_packet=$request->booking;
            $order->nama_pemesan = $request->nama;
            $order->email = $request->email;
            $order->no_hp = $request->noTelp;
            $order->jumlah = $request->kuantitas;
            $order->tgl_keberangkatan = $request->date;
            $order->status = 0;
        $order->save();
        return redirect('invoice/'.$pesanan.'/'.$id_packet);
    }
    function invoice($idsan,$idpak)
    {
        $pesan=order::where('id_pembelian','=',$idsan)->first();
        $paket=paket::where('id','=',$idpak)->first();
        $link='invoic/'.$idsan.'/'.$idpak;
        return view ('/checkout')
        ->with ('pesan',$pesan)
        ->with ('paket',$paket)
        ->with ('link',$link);

    }
    function unduh($idsan,$idpak)
    {
        $pesan=order::where('id_pembelian','=',$idsan)->first();
        $paket=paket::where('id','=',$idpak)->first();
        
        $pdf= PDF::loadView ('/invoic',compact('pesan','paket'));
        return $pdf->download('tomia'.date("Ymd").'.pdf');
    }
    //upload bukti pembayaran
    function confirmation()
    {
        return view ('confirmation');
    }
    //post Bukti konfirmasi pembayaran
    function postKonfirmasi(Request $request)
    {
        $id_pembelian=$request->id_pembelian;
        $order=order::where('id_pembelian','=',$id_pembelian)->get();
        if(!$order->isEmpty())
        {
            $this->validate($request, ['gambar' => 'required|image']);
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar/konfirmasi', $namaFile);

            order::where('id_pembelian','=',$id_pembelian)
            ->update(['status'=>'1','gambar'=>$namaFile]);
            $pesan=order::where('id_pembelian','=',$id_pembelian)->first();
            $idsan=$id_pembelian;
            $idpak=$pesan->id_paket;
            return redirect ('invoice/'.$idsan.'/'.$idpak);
        } 
        else
        {
            return redirect('/confirmation')->with('message', 'Kode Booking Salah atau Belum Di_Isi');
        }
    }
}

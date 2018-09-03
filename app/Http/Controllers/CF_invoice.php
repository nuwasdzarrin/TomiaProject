<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\paket;
use App\order;
use PDF;

class CF_invoice extends Controller
{
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
            $order->desa = $request->desa;
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

        /*$data=[
            'email'=>$pesan->email,
            'subject'=>"Pemesanan Paket Wisata Tomia Timur",
            'link'=>$link,
            'booking'=>$pesan->id_pembelian,
            'created'=>$pesan->created_at,
            'due'=>$pesan->tgl_keberangkatan,
            'name'=>$pesan->nama_pemesan,
            'email'=>$pesan->email,
            'no_hp'=>$pesan->no_hp,
            'status'=>$pesan->status,
            'jumlah'=>$pesan->jumlah,
            'paket'=>$paket->paket,
            'price'=>$paket->harga,
        ];
        Mail::send('Mail.mail', $data, function ($message) use ($data)
            {
                $message->from('projecttomia@gmail.com','admin Tomia Timur');
                $message->to($data['email']);
                $message->subject($data['subject']);
            });*/

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
        return $pdf->download($pesan->id_pembelian.$pesan->nama_pemesan.date("Ymd").'.pdf');
        //stream buat ngeview gak langsung download\
        //dowload buat ngeview langsung download
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
    //Load Cari Tagihan
    function tagihan()
    {
        return view ('load-inv');
    }
    //post Search Tagihan
    function searchInv(Request $req)
    {
        $idsan=$req->id_pembelian;
        $idpak=$req->id_paket;
        return redirect ('invoice/'.$idsan.'/'.$idpak);
    }
}
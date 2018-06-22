<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Email extends Controller
{
    public function sendEmail(Request $request)
	{
	    try{
	        Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
	        {
	            $message->subject($request->judul);
	            $message->from('donotreply@kiddy.com', 'Kiddy');
	            $message->to($request->email);
	        });
	        return back()->with('alert-success','Berhasil Kirim Email');
	    }
	    catch (Exception $e){
	        return response (['status' => false,'errors' => $e->getMessage()]);
	    }
	}

	function loadEmail()
	{
		return view ('formMail');
	}

	public function postEmail(Request $req)
	{
		$req->validate([
			'email'=>'required',
			'subject'=>'required',
			'content'=>'required'
		]);

		$data=[
			'email'=>$req->email,
			'subject'=>$req->subject,
			'content'=>$req->content,
		];
		Mail::send('mail.mail', $data, function ($message) use ($data)
	        {
	            $message->from('nuwasdzarrin3@gmail.com','admin Laravel');
				$message->to($data['email']);
				$message->subject($data['subject']);
	        });

		return redirect()->back();
		
	}
}

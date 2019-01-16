<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use \App\Webcam;
class WebcamController extends Controller
{
    public function index()
    {
    	return view('webcam.index');
    }

    public function save(Request $r)
    {
    	$nama = $r->nama;
    	$image = $r->input('gambar');
        $image = str_replace('data:image/jpeg;base64,','', $image);
        $image = base64_decode($image);
        $filename = 'image_'.time().'.png';
        file_put_contents('uploads/'.$filename,$image);
        $webcam = new \App\CekAbsensi;
        $webcam->nama = $nama;
        $webcam->foto = $filename;
        $webcam->jammasuk = '123';
        $webcam->save();

        return redirect(url('webcam/'));
    }

    public function tester()
    {
    	return view('webcam.tester');
    }
    public function tester2()
    {
    	return view('webcam.storeImage');
    }
}

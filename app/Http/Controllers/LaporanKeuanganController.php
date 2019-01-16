<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanKeuangan;

class LaporanKeuanganController extends Controller
{
    public function indexpemasukan()
    {
    	return view('form.pemasukan.index');
    }

    public function addpemasukan()
    {
    	return view('form.pemasukan.add');
    }

    public function savepemasukan(Request $r)
    {
    	$l = new LaporanKeuangan;
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('form/pemasukan'));
    }

    public function editpemasukan($id)
    {	
    	$l = LaporanKeuangan::find($id);
    	return view('form.pemasukan.edit')->with('l', $l);
    }

    public function updatepemasukan(Request $r)
    {
    	$l = LaporanKeuangan::find($r->input('id'));
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('form/pemasukan'));
    }

    public function deletepemasukan($id)
    {
    	$l =  LaporanKeuangan::find($id);
    	$l->delete();
    	return redirect(url('form/pemasukan'));
    }

    public function indexpengeluaran()
    {
    	return view('form.pengeluaran.index');
    }

    public function addpengeluaran()
    {
    	return view('form.pengeluaran.add');
    }

    public function savepengeluaran(Request $r)
    {
    	$l = new LaporanKeuangan;
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('form/pengeluaran'));
    }

    public function editpengeluaran($id)
    {	
    	$l = LaporanKeuangan::find($id);
    	return view('form/pengeluaran/edit')->with('l', $l);
    }

    public function updatepengeluaran(Request $r)
    {
    	$l = LaporanKeuangan::find($r->input('id'));
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('form/pengeluaran'));
    }

    public function deletepengeluaran($id)
    {
    	$l =  LaporanKeuangan::find($id);
    	$l->delete();
    	return redirect(url('form/pengeluaran'));
    }
}	



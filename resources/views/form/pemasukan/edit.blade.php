@extends('layouts.app')
@section('title')
Edit Pemasukan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="#" method="POST" enctype="multipart/form-data">

         <form action="#" method="POST" enctype="multipart/form-data">
          <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="inputEmail4" value="#" placeholder="Judul">
          <label for="judul">Jumlah Pemasukan</label>
        <input type="text" class="form-control" name="jumlah" id="inputEmail4" value="#" 
        placeholder="Jumlah Pengeluaran">
        <label for="judul">tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="inputEmail4" value="#" 
        placeholder="Tanggal">

        <div class="form-group col-md-25">
            <label>Rincian</label>
            <label for="ckeditor"></label>
            <textarea name="rincian" id="ckeditor">#</textarea>
        </div>
         
          @csrf
          <input type="hidden" name="id" value="#">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </form>

      </div>
    </div>
  </div>
@endsection
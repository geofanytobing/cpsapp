@extends('layouts.app')
@section('title')
Upload File
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>File</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i= 1;
              $l = \App\UploadFile::all();
              ?>
              @foreach($l as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td>{{$q->file}}</td>
              <td>
                <a href="{{url('form/uploadfile/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">
                  <i class="fa fa-edit">Edit</i>
                </a>
                 <a href="{{url('form/uploadfile/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">
                   <i class="fa fa-trash">Hapus</i>
                 </a>
                 <a href="{{url('form/uploadfile/download/'.$q->file)}}" class="btn btn-outline-success btn-sm">
                  <i class="fa fa-download">Unduh</i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <a href="{{url('form/uploadfile/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square">Add</i></a>
          <a href="{{ url('/form/uploadfile/pdf')}}">
              <button class="btn btn-success">Download PDF</button></a>
              
            <a href="{{ url('/form/uploadfile/downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel</button></a>
      </div>
    </div>
@endsection
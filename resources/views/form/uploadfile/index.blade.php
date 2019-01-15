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

            <tr>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>
              <a href="{{url('uploadfile/edit')}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="#" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i>Hapus</a>
              </td>
            </tr>

          </tbody>
        </table>
        </div>
        <hr>
        <a href="{{url('uploadfile/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square">Add</i></a>
      </div>
    </div>
@endsection
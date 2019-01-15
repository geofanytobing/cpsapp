@extends('layouts.app')
@section('title')
Pemasukan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Judul</th>
              <th>Jumlah Pemasukan</th>
              <th>Tanggal</th>
              <th>Rincian</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
<!--  -->
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>
                <a href="{{url('pemasukan/edit')}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                 <a href="#" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i>Hapus</a>
              </td>
            </tr>

          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('pemasukan/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square">Add</i></a>
      </div>
    </div>
@endsection
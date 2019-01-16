<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    table, th, td{
      border: 1px solid black;
      border-collapse: collapse;
      margin: auto;
    }
    th, td {
      padding: 5px;
      text-align: left;
    }
  </style>
</head>
<body>


<h1>Laporan Pemasukan</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Jumlah</th>
      <th>tanggal</th>
      <th>Rincian</th>
    </tr>
  </thead>
  <tbody>
    <?php
              $i= 1;
              $l = \App\LaporanKeuangan::all()->where('tipe',1);
              ?>
              @foreach($l as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->judul}}</td>
              <td>{{$q->jumlah}}</td>
              <td>{{$q->tanggal}}</td>
              <td>{!!$q->rincian!!}</td>
              @endforeach
  </tbody>
</table>
</body>
</html>
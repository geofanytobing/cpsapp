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


<h1>Laporan Upload File</h1>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>File</th>
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
              @endforeach
  </tbody>
</table>
</body>
</html>
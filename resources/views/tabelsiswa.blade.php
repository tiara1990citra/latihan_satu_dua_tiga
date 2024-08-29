@extends('layoutUtama')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('konten-utama')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama petugas</th>
        <th scope="col">Username</th>
        <th scope="col">Nohp</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>mawar</td>
        <td>war</td>
        <td>123</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>ilham</td>
        <td>aal</td>
        <td>345</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>dian</td>
        <td>ambu</td>
        <td>567</td>
      </tr>
    </tbody>
  </table>
  @endsection
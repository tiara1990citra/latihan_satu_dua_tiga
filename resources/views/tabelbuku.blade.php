@extends('layoutUtama')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('konten-utama')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama buku</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Kategori buku</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Habibie ainun</td>
        <td>15</td>
        <td>Nonfiksi</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Keong mas</td>
        <td>10</td>
        <td>Fiksi</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Bahasa indonesia</td>
        <td>25</td>
        <td>Pendidikan</td>
      </tr>
    </tbody>
  </table>
  @endsection
@extends('Dashboard.layoutUtama')

@section('konten-utama')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode buku</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Judul</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Penerbit</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tahun terbit</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  @endsection
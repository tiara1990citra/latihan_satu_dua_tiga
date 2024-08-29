@extends('HalamanUtama/Layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('konten-utama')
    <div class="row">
        <div class="col-lg-6">
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="col-lg-6">
            <div class="card-body">
                <p class="card-text">gambar buku</p>
            </div>
            <div class="button">
                <buttn type="button" class="btn btn-success">Dikembalikan</buttn>
                <button type="button" class="btn btn-secondary">Dipinjam</button>
            </div>
        </div>
    </div>
@endsection

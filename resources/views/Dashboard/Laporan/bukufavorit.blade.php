@extends('Dashboard.layoutUtama')

@section('konten-utama')
<div class="container">
    <h2 class="mb-4">Buku Terfavorit</h2>
    <div class="row">
        @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/buku' . $i . '.jpg') }}" class="img-fluid h-100 object-fit-cover" alt="Buku {{ $i }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku {{ $i }}</h5>
                                <p class="card-text">Penulis: Nama Penulis {{ $i }}</p>
                                <p class="card-text">Jumlah Peminjaman: {{ 50 - ($i - 1) * 5 }}</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
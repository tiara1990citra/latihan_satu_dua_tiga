@extends('Dashboard.layoutUtama')

@section('konten-utama')
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card text-white bg-primary h-100">
                <div class="card-header">Jumlah Siswa</div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h2 class="card-title mb-0">65</h2>
                    <i class="bi bi-person fs-1"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card text-white bg-secondary h-100">
                <div class="card-header">Jumlah Buku</div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h2 class="card-title mb-0">17</h2>
                    <i class="bi bi-book fs-1"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card text-white bg-success h-100">
                <div class="card-header">Buku Dipinjam</div>
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h2 class="card-title mb-0">10</h2>
                    <i class="bi bi-bookmark-check fs-1"></i>
                </div>
            </div>
        </div>
    </div>
@endsection

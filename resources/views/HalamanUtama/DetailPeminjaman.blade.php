@extends('HalamanUtama/Layout')

@section('konten-utama')
<div class="container mt-4">
    <div class="card p-4">
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/300x400" class="img-fluid" alt="Sampul Buku">
            </div>
            <div class="col-md-8">
                <h2 class="mb-3">Judul Buku</h2>
                <p><strong>Penulis:</strong> Nama Penulis</p>
                <p><strong>Penerbit:</strong> Nama Penerbit</p>
                <p><strong>Tahun Terbit:</strong> 2023</p>
                <p><strong>ISBN:</strong> 978-1234567890</p>
                <p><strong>Kategori:</strong> Fiksi</p>
                <p><strong>Deskripsi:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><strong>Stok Tersedia:</strong> 5</p>
                
                <div class="mt-4">
                    <button class="btn btn-primary me-2">Pinjam</button>
                    <a href="/" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
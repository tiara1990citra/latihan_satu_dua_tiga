@extends('MasterData/editsiswa')

@section('konten-utama')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-items-center justify-content-between">
            <span class="card-title h5">Data siswa</span>
            <a href="/" class="btn btn-primary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="nis" class="col-form-label col-3">Kode Buku</label>
                    <div class="col-9">
                        <input type="number" class="form-control" name="kode_buku" id="kode_buku" value="{{ $DataSiswa->kode_buku }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-form-label col-3">Judul</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="judul" id="judul" value="{{ $DataSiswa->judul }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-form-label col-3">Penulis</label>
                    <div class="col-9">
                        <textarea name="penulis" name="penulis" id="penulis" class="form-control" >{{ $DataSiswa->penulis }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_telp" class="col-form-label col-3">Penerbit</label>
                    <div class="col-9">
                        <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $DataSiswa->penerbit }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-form-label col-3">Kode Kelas</label>
                    <div class="col-9">
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $DataSiswa->kode_kelas }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sinopsis" class="col-form-label col-3">Sinopsis</label>
                    <div class="col-9">
                        <input type="text" name="sinopsis" id="sinopsis" class="form-control" value="{{ $DataSiswa->sinopsis}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tahun_terbit" class="col-form-label col-3">Tahun Terbit</label>
                    <div class="col-9">
                        <input type="date" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $DataSiswa->tahun_terbit }}">
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

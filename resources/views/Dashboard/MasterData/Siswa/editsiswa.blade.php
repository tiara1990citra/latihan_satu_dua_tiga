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
                    <label for="nis" class="col-form-label col-3">Nis</label>
                    <div class="col-9">
                        <input type="number" class="form-control" name="nis" id="nis" value="{{ $DataSiswa->nis }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-form-label col-3">Nama</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $DataSiswa->nama }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-form-label col-3">Alamat</label>
                    <div class="col-9">
                        <textarea name="alamat" name="alamat" id="alamat" class="form-control" >{{ $DataSiswa->alamat }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_telp" class="col-form-label col-3">No Telepon</label>
                    <div class="col-9">
                        <input type="number" name="no_telp" id="no_telp" class="form-control" value="{{ $DataSiswa->no_telp }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-form-label col-3">Kode Kelas</label>
                    <div class="col-9">
                        <input type="date" name="kode_kelas" id="kode_kelas" class="form-control" value="{{ $DataSiswa->kode_kelas }}">
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

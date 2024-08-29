@extends('Dashboard.layoutUtama')

@section('konten-utama')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text">Tanggal</span>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}">
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Laporan Peminjaman Buku Per Hari</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Waktu Peminjaman</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Budi Santoso</td>
                            <td>Spy x Family</td>
                            <td>09:30</td>
                            <td><span class="badge bg-success">Dipinjam</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Siti Nurhaliza</td>
                            <td>Naruto</td>
                            <td>11:45</td>
                            <td><span class="badge bg-success">Dipinjam</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

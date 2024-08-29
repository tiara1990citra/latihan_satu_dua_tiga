@extends('Dashboard.layoutUtama')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('konten-utama')
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">Daftar Peminjaman</h5>
                        <a href="#" class="btn btn-primary">Tambah Peminjaman</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Budi Santoso</td>
                                    <td>Habibie Ainun</td>
                                    <td>2023-05-10</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Siti Nurhaliza</td>
                                    <td>Keong Mas</td>
                                    <td>2023-05-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ahmad Dhani</td>
                                    <td>Bahasa Indonesia</td>
                                    <td>2023-05-15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

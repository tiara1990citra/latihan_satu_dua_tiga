@extends('HalamanUtama/Layout')

@section('konten-utama')
    <div class="container">
        <h3 class="mb-3">Kategori Umum</h3>
        <div class="row mb-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Umum</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpeminjaman" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Fiksi</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Non-Fiksi</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Pelajaran</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Referensi</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mb-3">Kategori Khusus</h3>
        <div class="row mb-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Sejarah</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Sains</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Sastra</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Teknologi</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Buku Agama</h5>
                        <p class="card-text">Penerbit</p>
                        <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                    </div>
                </div>
            </div>
        </div>

    <h2 class="mt-5 mb-4">Buku Terfavorit</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Harry Potter</h5>
                    <p class="card-text">J.K. Rowling</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Laskar Pelangi</h5>
                    <p class="card-text">Andrea Hirata</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Bumi Manusia</h5>
                    <p class="card-text">Pramoedya Ananta Toer</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Dilan 1990</h5>
                    <p class="card-text">Pidi Baiq</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Ayat-Ayat Cinta</h5>
                    <p class="card-text">Habiburrahman El Shirazy</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Negeri 5 Menara</h5>
                    <p class="card-text">Ahmad Fuadi</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Sang Pemimpi</h5>
                    <p class="card-text">Andrea Hirata</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">5 cm</h5>
                    <p class="card-text">Donny Dhirgantoro</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Perahu Kertas</h5>
                    <p class="card-text">Dee Lestari</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150x200" class="card-img-top" alt="Sampul Buku">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Ronggeng Dukuh Paruk</h5>
                    <p class="card-text">Ahmad Tohari</p>
                    <a href="/detailpe" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

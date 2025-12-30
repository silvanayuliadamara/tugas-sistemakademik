<h3 class="text-center mt-3">
    Selamat Datang <strong><?= $_SESSION['nama_lengkap'] ?></strong>
</h3>

<div class="container mt-4">
    <div class="bg-primary text-white text-center p-4 rounded-4 shadow">
        <h2 class="fw-bold mb-2">Sistem Akademik — Teknologi Informasi</h2>
        <p class="mb-0">Kelola data mahasiswa & informasi akademik dengan cepat dan terstruktur.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center g-4">

        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/400/300" class="card-img-top" alt="Lihat Data Mahasiswa">

                <div class="card-body d-flex flex-column text-center">
                    <h5 class="fw-semibold mb-2">Lihat Data Mahasiswa</h5>
                    <p class="text-muted">Kelola dan perbarui data mahasiswa dengan mudah.</p>

                    <a href="index.php?p=datamahasiswa" class="btn btn-primary mt-auto">
                        Lihat Data
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/400/300" class="card-img-top" alt="Tambah Data Mahasiswa">

                <div class="card-body d-flex flex-column text-center">
                    <h5 class="fw-semibold mb-2">Tambah Data Mahasiswa</h5>
                    <p class="text-muted">Masukkan data mahasiswa untuk pendataan akademik.</p>

                    <a href="index.php?p=create" class="btn btn-success mt-auto">
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm h-100">
                <img src="https://picsum.photos/400/300" class="card-img-top" alt="Informasi Akademik">

                <div class="card-body d-flex flex-column text-center">
                    <h5 class="fw-semibold mb-2">Informasi Akademik</h5>
                    <p class="text-muted">Informasi lengkap seputar Jurusan Teknologi Informasi.</p>

                    <a href="mahasiswa/index.html" target="_blank" class="btn btn-info mt-auto text-white">
                        Informasi Akademik
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<footer class="mt-5 py-4 bg-primary text-white">
    <div class="container text-center">
        <h6 class="fw-semibold mb-1">
            © 2025 Jurusan Teknologi Informasi
        </h6>
        <p class="mb-1">
            Politeknik Negeri Padang
        </p>
        <small class="opacity-75">
            All rights reserved.
        </small>
    </div>
</footer>


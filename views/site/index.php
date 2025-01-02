<?php

/** @var yii\web\View $this */

$this->title = 'FPA';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($this->title) ?></title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Hero Section -->
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Selamat Datang di Aplikasi Formulir Penilaian Akreditasi</h1>
    </div>
</header>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
        <!-- Akreditasi Prodi Section -->
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Akreditasi Prodi</h5>
                    <p class="card-text">Isi formulir untuk mengajukan akreditasi program studi.</p>
                    <a href="index.php?r=akreditasi-prodi" class="btn btn-primary">Mulai</a>
                </div>
            </div>
        </div>

        <!-- Penilaian Prodi Section -->
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Penilaian Prodi</h5>
                    <p class="card-text">Isi formulir untuk penilaian program studi.</p>
                    <a href="index.php?r=penilaian-prodi" class="btn btn-primary">Mulai</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulir Akreditasi Section - Left Side -->
    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Formulir Akreditasi Lainnya</h4>
            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Kategori Akreditasi</h5>
                    <p class="card-text">Isi formulir untuk kategori akreditasi.</p>
                    <a href="index.php?r=kategori-akreditasi" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Lembaga Akreditasi</h5>
                    <p class="card-text">Isi formulir untuk lembaga akreditasi.</p>
                    <a href="index.php?r=lembaga-akreditasi" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Universitas</h5>
                    <p class="card-text">Isi formulir untuk universitas.</p>
                    <a href="index.php?r=universitas" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Fakultas</h5>
                    <p class="card-text">Isi formulir untuk fakultas.</p>
                    <a href="index.php?r=fakultas" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Prodi</h5>
                    <p class="card-text">Isi formulir untuk program studi.</p>
                    <a href="index.php?r=prodi" class="btn btn-primary">Mulai</a>
                </div>
            </div>
        </div>

        <!-- Formulir Penilaian - Right Side -->
        <div class="col-md-6">
            <h4>Formulir Penilaian Lainnya</h4>
            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Indikator</h5>
                    <p class="card-text">Isi formulir untuk indikator penilaian.</p>
                    <a href="index.php?r=indikator" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Elemen</h5>
                    <p class="card-text">Isi formulir untuk elemen penilaian.</p>
                    <a href="index.php?r=elemen" class="btn btn-primary">Mulai</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body text-start">
                    <h5 class="card-title">Prodi</h5>
                    <p class="card-text">Isi formulir untuk program studi penilaian.</p>
                    <a href="index.php?r=prodi" class="btn btn-primary">Mulai</a>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keluar</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        @media (max-width: 768px) {
            nav {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin/home') ?>">9-Naga</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/surat-masuk') ?>">Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/surat-keluar') ?>">Surat Keluar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('http://localhost:8080/') ?>">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-4">Surat Keluar</h1>

        <div class="row mt-4">
            <div class="col-lg-6">
                <h3>Kirim Balasan</h3>
                <form method="post" action="/admin/surat-keluar/kirim-balasan">
                    <div class="mb-3">
                        <label for="email_penerima" class="form-label">Email Penerima</label>
                        <input type="email" class="form-control" id="email_penerima" name="email_penerima" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengirim" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Surat</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Surat</label>
                        <textarea class="form-control" id="isi" name="isi" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Balasan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
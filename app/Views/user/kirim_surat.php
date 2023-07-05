<!-- app/Views/user/kirim_surat.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Surat</title>
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
            <a class="navbar-brand" href="<?= base_url('user/home') ?>">9-Naga</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/surat-masuk') ?>">Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/kirim-surat') ?>">Kirim Surat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('http://localhost:8080/') ?>">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Kirim Surat</h1>

        <!-- Tampilkan pesan validasi jika ada -->
        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <!-- Formulir pengiriman surat -->
        <form method="post" action="<?= base_url('user/kirim-surat') ?>">
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= old('nama_perusahaan') ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_pengirim">Nama Pengirim</label>
                <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="<?= old('nama_pengirim') ?>" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul Surat</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= old('judul') ?>" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Surat</label>
                <textarea class="form-control" id="isi" name="isi" required><?= old('isi') ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Surat</button>
        </form>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
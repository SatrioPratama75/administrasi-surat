<!-- app/Views/admin/home.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk</title>
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
    <div class="container">
        <h1>Surat Masuk</h1>

        <?php if (!empty($surat_masuk)) : ?>
            <ul>
                <?php foreach ($surat_masuk as $surat) : ?>
                    <li>
                        <strong>Judul Surat:</strong> <?php echo $surat['judul']; ?><br>
                        <strong>Pengirim:</strong> <?php echo $surat['nama_pengirim']; ?><br>
                        <strong>Isi Surat:</strong> <?php echo $surat['isi']; ?><br>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Tidak ada surat masuk.</p>
        <?php endif; ?>
    </div>



    <!-- Include Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
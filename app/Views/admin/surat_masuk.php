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
        th,
        td {
            text-align: center;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            nav {
                font-size: 15px;
            }

            th,
            td {
                text-align: center;
                font-size: 8px;
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
        <br>
        <h1>Daftar Surat Masuk</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Pengirim</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Waktu Kirim</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($suratMasuk as $surat) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $surat['nama_perusahaan']; ?></td>
                            <td><?= $surat['nama_pengirim']; ?></td>
                            <td><?= $surat['judul']; ?></td>
                            <td><?= $surat['isi']; ?></td>
                            <td><?= $surat['waktu_kirim']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Include Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
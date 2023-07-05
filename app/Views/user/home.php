<!-- app/Views/admin/home.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        .tittle-home {
            text-align: center;
        }

        .wrap-home {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home-img{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img {
            width: 350px;
            height: 350px;
        }

        @media (max-width: 768px) {
            nav {
                font-size: 15px;
            }

            .tittle-home {
                font-size: 18px;
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
    <br>
    <div class="container">
        <div class="home-img">
            <img src="<?= base_url('images/Naga.png') ?>" alt="Naga">
        </div>
        <h1 class="tittle-home">Selamat Datang Di Sistem Administrasi Surat PT. 9-Naga</h1>
        <br>
        <br>
        <div class="row wrap-home">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Masuk</h5>
                        <p class="card-text">Silahkan cek surat anda, apakah surat yang anda kirim sudah mendapat balasan atau belum.</p>
                        <a href="<?= base_url('user/surat-masuk') ?>" class="btn btn-primary">Cek</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kirim Surat</h5>
                        <p class="card-text">Silahkan untuk membuat surat ke kami dengan menuju ke tombol tambah dibawah ini.</p>
                        <a href="<?= base_url('user/kirim-surat') ?>" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
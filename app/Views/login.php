<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            color: white;
            background-color: #1D4A60;
        }

        .head-logo {
            height: 10vh;
            width: 100vw;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .head-logo p {
            margin: 0%;
        }

        .wrap-log {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100vw;
            height: 90vh;
        }

        .row {
            width: 500px;
            padding: 2%;
            border-radius: 5%;
        }

        .text-login {
            text-align: center;
        }

        .form-log {
            width: 100%;
        }

        img {
            width: 500px;
            height: 450px;
        }

        @media (max-width: 768px) {
            .wrap-log {
                display: block;
            }

            img {
                width: 300px;
                height: 300px;
                margin: 5% 0%;
            }

            .row {
                width: 100%;
                display: flex;
                align-items: center;
                margin: 0%;
            }
        }
    </style>
</head>

<body>
    <header class="head-logo bg-dark">
        <p>Sistem Administrasi Surat PT. 9-Naga</p>
    </header>
    <div class="container wrap-log">
        <div class="text-login">
            <h1>PT 9-Naga</h1>
            <img src="<?= base_url('images/Naga.png') ?>" alt="Naga">
        </div>
        <div class="row bg-dark">
            <div class="col-md-4 form-log">
                <h3 class="text-center mb-4">Login</h3>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <form action="<?= base_url('auth/login') ?>" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
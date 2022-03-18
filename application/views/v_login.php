<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Aplikasi Klinik Sederhana">
    <meta name="generator" content="Dicky Erfan S">
    <title>Login Aplikasi Klinik</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/costum/login.css') ?>" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin">
        <img class="mb-4" src="<?= base_url() ?>assets/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Silakan Login</h1>
        <?= $this->session->flashdata('info'); ?>
        <?= $this->session->unset_userdata('info'); ?>
        <form method="POST" action="<?= base_url('auth/login_aksi'); ?>">
            <div class="form-floating mb-3">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autofocus required>
            </div>
            <div class="form-floating">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted small">Made With &hearts; DIE Art'S 2022</p>
        </form>
    </main>

</body>

</html>
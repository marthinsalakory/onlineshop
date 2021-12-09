<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- fontawesome -->
    <script src="assets/js/fontawesome.js" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- Datatable -->
    <link href="assets/css/dataTables.bootstrap5.min.css">
    <style>
        @media print {
            .tmbol {
                display: none;
            }

            .prnt {
                margin-top: -90px;
            }
        }
    </style>
</head>

<body>
    <nav style="position: fixed; width: 100%; z-index: 1;" class="tmbol navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Toko Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= nav_on($nav, 'beranda'); ?>" aria-current="page" href="<?= BASEURL; ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= nav_on($nav, 'jual'); ?>" href="<?= BASEURL; ?>/jual">Jual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= nav_on($nav, 'pesanan'); ?>" href="<?= BASEURL; ?>/pesanan">Pesanan</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link <?= nav_on($nav, 'keranjang'); ?>" href="<?= BASEURL; ?>/Keranjang">Keranjang</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link <?= nav_on($nav, 'proses'); ?>" href="<?= BASEURL; ?>/proses">Diproses</a>
                    </li>
                    <?php if (isset($_SESSION['login'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= nav_on($nav, 'profil'); ?>" href="<?= BASEURL; ?>/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a onclick="return confirm('yakin ingin logout?')" class="nav-link" href="<?= BASEURL; ?>/logout">Logout</a>
                        </li>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['login'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= nav_on($nav, 'login'); ?>" href="<?= BASEURL; ?>/login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 myInput" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                </form>
            </div>
        </div>
    </nav><br><br>
    <script>
        $(document).ready(function() {
            $(".nav-link").click(function() {
                $('.nav-link').attr('class', 'nav-link');
                $(this).attr('class', 'nav-link active');
            });
        });
    </script>
<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

$title = 'Keranjang Belanja';
$nav = 'keranjang';
include 'views/layouts/header.php';
include 'views/keranjang.php';
include 'views/layouts/footer.php';

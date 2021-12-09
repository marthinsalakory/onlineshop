<?php
include 'core/core.php';
isLogin();
// kembalikan jika maipulasi url
if (!isset($_GET['id_proses']) || empty($_GET['id_proses']) || result('proses', 'id', $_GET['id_proses']) == 0) {
    header("Location: " . BASEURL . '/proses');
}
$pb = prosesPembeli($_GET['id_proses']);
$pj = prosesPenjual($_GET['id_proses']);
$nav = 'pesanan';
include 'views/layouts/header.php';
include 'views/slip_pembeli.php';
include 'views/layouts/footer.php';

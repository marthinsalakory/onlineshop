<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

if (isset($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    mysqli_query(conn(), "DELETE FROM produk WHERE id = '$hapus'");
    mysqli_query(conn(), "DELETE FROM proses WHERE kode_produk = '$hapus'");
    header("Location:" . BASEURL . '/pesanan');
}

$nav = 'pesanan';
include 'views/layouts/header.php';
include 'views/pesanan.php';
include 'views/layouts/footer.php';

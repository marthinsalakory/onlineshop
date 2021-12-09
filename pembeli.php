<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

if (isset($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    mysqli_query(conn(), "DELETE FROM proses WHERE id = '$hapus'");
    header("Location:" . BASEURL . '/pesanan');
}

if (isset($_POST['simpan'])) {
    $status = $_POST['status'];
    $id_proses = $_POST['id_proses'];
    mysqli_query(conn(), "UPDATE `proses` SET `status`='$status' WHERE `id` = '$id_proses'");
    header("Location: " . BASEURL . '/pembeli?kode_produk=' . $_GET['kode_produk']);
}

$nav = 'pesanan';
include 'views/layouts/header.php';
include 'views/pembeli.php';
include 'views/layouts/footer.php';

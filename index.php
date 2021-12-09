<?php
// panggil semua fungsi utama;
include 'core/core.php';

if (isset($_POST['beli'])) {
    isLogin();
    $id_barang = $_POST['id_barang'];
    $id_pembeli = user()->id;
    $jumlah_barang = $_POST['jumlah_barang'];
    $result = mysqli_query(conn(), "INSERT INTO `proses`(`id`, `kode_produk`, `pembeli_id`, `jumlah_barang`, `status`) VALUES ('','$id_barang','$id_pembeli','$jumlah_barang','0')");
    header("Location: " . BASEURL . "/slip");
    exit;
}

$title = 'Beranda';
$nav = 'beranda';

include 'views/layouts/header.php';
include 'views/beranda.php';
include 'views/layouts/footer.php';

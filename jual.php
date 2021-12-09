<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

if (isset($_POST['jual'])) {
    $id = uniqid();
    $penjual_id = (int)user()->id;
    $nama_produk = $_POST['nama_produk'];
    $berat_produk = (int)$_POST['berat_produk'];
    $harga = (int)$_POST['harga_produk'];
    $deskripsi = preg_replace("/[^a-zA-Z0-9 ,.:;-_=+!@#$%&()]|/", "", $_POST['deskripsi_produk']);

    // upload foto
    $file =  $_FILES['gambar_produk'];
    $ext = explode('.', $file['name']);
    $ext = end($ext);
    if ($ext != 'jpg') {
        $error = 1;
    }

    // cek username
    if (!isset($error)) {
        $filename = uniqid() . '.' . $ext;
        move_uploaded_file($file["tmp_name"], 'assets/img/produk/' . $filename);

        // insert database
        $kembalian = mysqli_query(conn(), "INSERT INTO `produk`(`id`, `penjual_id`, `nama_produk`, `berat_produk`, `harga`, `gambar`, `deskripsi`) VALUES ('$id','$penjual_id','$nama_produk','$berat_produk','$harga','$filename', '$deskripsi')");

        if ($kembalian > 0) {
            $_SESSION['jadi'] = "Berhasil menambah produk";
            header('Location: ' . BASEURL . '/pesanan');
            exit;
        }
    }
}

$title = 'Formulir Penjualan';
$nav = 'jual';
include 'views/layouts/header.php';
include 'views/jual.php';
include 'views/layouts/footer.php';

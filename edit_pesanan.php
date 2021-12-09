<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

// kembalikan jika maipulasi url
if (!isset($_GET['kode_produk']) || empty($_GET['kode_produk']) || result('produk', 'id', $_GET['kode_produk']) == 0) {
    header("Location: " . BASEURL . '/pesanan');
}

$p = first_produk($_GET['kode_produk']);

if (isset($_POST['jual'])) {
    $id = $_GET['kode_produk'];
    $penjual_id = (int)user()->id;
    $nama_produk = $_POST['nama_produk'];
    $berat_produk = (int)$_POST['berat_produk'];
    $harga = (int)$_POST['harga_produk'];
    $deskripsi = preg_replace("/[^a-zA-Z0-9 ,.:;-_=+!@#$%&()]|/", "", $_POST['deskripsi_produk']);

    // upload foto
    if (isset($_FILES['gambar_produk']) && !empty($_FILES['gambar_produk']['name'])) {
        $fl = 1;
        $file =  $_FILES['gambar_produk'];
        $ext = explode('.', $file['name']);
        $ext = end($ext);
        if ($ext != 'jpg') {
            $error = 1;
        }
    } else {
        $filename = $p->gambar;
    }

    // cek username
    if (!isset($error)) {
        if (isset($fl) && !empty($fl)) {
            unlink("assets/img/produk/" . $p->gambar);
            $filename = uniqid() . '.' . $ext;
            move_uploaded_file($file["tmp_name"], 'assets/img/produk/' . $filename);
        }

        // insert database
        $kembalian = mysqli_query(conn(), "UPDATE `produk` SET `nama_produk`='$nama_produk',`berat_produk`='$berat_produk',`harga`='$harga',`gambar`='$filename',`deskripsi`='$deskripsi' WHERE `id` = '$id'");

        if ($kembalian > 0) {
            $_SESSION['jadi'] = "Berhasil menambah produk";
            header('Location: ' . BASEURL . '/pesanan');
            exit;
        }
    }
}

$title = 'Edit Pesanan';
$nav = 'pesanan';
include 'views/layouts/header.php';
include 'views/edit_pesanan.php';
include 'views/layouts/footer.php';

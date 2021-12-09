<?php
// panggil semua fungsi utama;
include 'core/core.php';

// cek login
if (isset($_SESSION['login'])) {
    header("Location: " . BASEURL);
    exit;
}

if (isset($_POST['daftar'])) {
    $nama_pengguna = $_POST['nama_pengguna'];
    $kata_sandi = $_POST['kata_sandi'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telp = $_POST['no_telp'];
    $nama_jalan = $_POST['nama_jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kelurahan = $_POST['kelurahan'];
    $kota = $_POST['kota'];
    $kode_pos = $_POST['kode_pos'];

    // upload foto
    $file =  $_FILES['foto_profil'];
    $ext = explode('.', $file['name']);
    $ext = end($ext);
    if ($ext != 'jpg') {
        $error[0] = 'File harus berekstensi jpg';
    }
    $result = mysqli_query(conn(), "SELECT * FROM users WHERE nama_pengguna = '$nama_pengguna'");
    $result = mysqli_num_rows($result);
    if ($result > 0) {
        if (isset($error[0])) {
            $error[1] = 'Nama Pengguna Harus Unik';
        } else {
            $error[0] = 'Nama Pengguna Harus Unik';
        }
    }

    // cek username
    if (!isset($error)) {
        $filename = uniqid() . '.' . $ext;
        move_uploaded_file($file["tmp_name"], 'assets/img/foto_profil/' . $filename);


        // insert database
        $kembalian = mysqli_query(conn(), "INSERT INTO users (id, nama_pengguna, kata_sandi, nama_lengkap, foto_profil, no_telp, nama_jalan, rt, rw, kelurahan, kota, kode_pos)
        VALUES (
            '',
            '$nama_pengguna',
            '$kata_sandi',
            '$nama_lengkap',
            '$filename',
            '$no_telp',
            '$nama_jalan',
            '$rt',
            '$rw',
            '$kelurahan',
            '$kota',
            '$kode_pos'
            )");

        if ($kembalian > 0) {
            $_SESSION['login'] = $nama_pengguna;
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
$nav = 'register';
include 'views/layouts/header.php';
include 'views/register.php';
include 'views/layouts/footer.php';

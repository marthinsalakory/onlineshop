<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

if (isset($_POST['simpan'])) {
    $id = user()->id;
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

    // cek username unik
    if ($nama_pengguna != user()->nama_pengguna) {
        $result = mysqli_query(conn(), "SELECT * FROM users WHERE nama_pengguna = '$nama_pengguna'");
        $result = mysqli_num_rows($result);
        if ($result > 0) {
            $error['nama_pengguna'] = 1;
        }
    }

    if (!empty($_FILES['foto_profil']['name'])) {
        // upload foto
        $file =  $_FILES['foto_profil'];
        $ext = explode('.', $file['name']);
        $ext = end($ext);
        if ($ext != 'jpg') {
            $error['foto_profil'] = 1;
        } else {
            if (!isset($error['nama_pengguna'])) {
                unlink("assets/img/foto_profil/" . user()->foto_profil);
                $filename = uniqid() . '.' . $ext;
                move_uploaded_file($file["tmp_name"], 'assets/img/foto_profil/' . $filename);
            }
        }
    } else {
        $filename = user()->foto_profil;
    }


    // cek username
    if (!isset($error)) {
        // insert database
        $kembalian = mysqli_query(conn(), "UPDATE users SET 
            nama_pengguna = '$nama_pengguna',
            kata_sandi = '$kata_sandi',
            nama_lengkap = '$nama_lengkap',
            foto_profil = '$filename',
            no_telp = '$no_telp',
            nama_jalan = '$nama_jalan',
            rt = '$rt',
            rw = '$rw',
            kelurahan = '$kelurahan',
            kota = '$kota',
            kode_pos = '$kode_pos'
            WHERE id = '$id'
        ");

        if ($kembalian > 0) {
            header('Location: ' . BASEURL . '/profil');
            exit;
        }
    }
}

$nav = 'profil';
include 'views/layouts/header.php';
include 'views/profil.php';
include 'views/layouts/footer.php';

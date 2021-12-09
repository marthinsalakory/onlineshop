<?php

function nav_on($val, $data)
{
    return $val == $data ? 'active' : '';
}
function old($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : '';
}

function isLogin()
{
    if (!isset($_SESSION['login'])) {
        $_SESSION['is_login'] = 1;
        header("Location: " . BASEURL . '/login');
        exit;
    }
}

function user()
{
    $nama = $_SESSION['login'];
    $result = mysqli_query(conn(), "SELECT * FROM users WHERE nama_pengguna = '$nama'");
    return mysqli_fetch_object($result);
}

function produk()
{
    return mysqli_query(conn(), "SELECT users.*, produk.id as id_produk, produk.penjual_id, produk.nama_produk, produk.berat_produk, produk.harga, produk.gambar, produk.deskripsi FROM produk 
INNER JOIN users ON users.id=produk.penjual_id;");
}

function first_produk($id)
{
    $result =  mysqli_query(conn(), "SELECT users.*, produk.id as id_produk, produk.penjual_id, produk.nama_produk, produk.berat_produk, produk.harga, produk.gambar, produk.deskripsi FROM produk,users 
    WHERE users.id=produk.penjual_id AND produk.id = '$id'");
    return mysqli_fetch_object($result);
}

function proses()
{
    return mysqli_query(conn(), "SELECT produk.*, proses.id as id_proses, proses.kode_produk, proses.pembeli_id, proses.jumlah_barang, proses.status FROM proses INNER JOIN produk ON produk.id = proses.kode_produk");
}

function pembeli($id)
{
    return mysqli_query(conn(), "SELECT users.*, produk.id as id_produk, produk.penjual_id, produk.nama_produk, produk.berat_produk, produk.harga, produk.gambar, produk.deskripsi, proses.id as id_proses, proses.kode_produk, proses.pembeli_id, proses.jumlah_barang, proses.status FROM produk, users, proses WHERE users.id = proses.pembeli_id AND proses.kode_produk = produk.id AND proses.kode_produk = '$id'");
}

function prosesPenjual($id)
{
    $result = mysqli_query(conn(), "SELECT users.*, produk.id as id_produk, produk.penjual_id, produk.nama_produk, produk.berat_produk, produk.harga, produk.gambar, produk.deskripsi, proses.id as id_proses, proses.kode_produk, proses.pembeli_id, proses.jumlah_barang, proses.status FROM produk, users, proses WHERE users.id = produk.penjual_id AND produk.id = proses.kode_produk AND proses.id = '$id'");
    return mysqli_fetch_object($result);
}

function prosesPembeli($id)
{
    $result = mysqli_query(conn(), "SELECT users.*, produk.id as id_produk, produk.penjual_id, produk.nama_produk, produk.berat_produk, produk.harga, produk.gambar, produk.deskripsi, proses.id as id_proses, proses.kode_produk, proses.pembeli_id, proses.jumlah_barang, proses.status FROM produk, users, proses WHERE users.id = proses.pembeli_id AND proses.kode_produk = produk.id AND proses.id = '$id'");
    return mysqli_fetch_object($result);
}

function result($table, $key, $value)
{
    $result = mysqli_query(conn(), "SELECT * FROM `$table` WHERE $key = '$value'");
    return mysqli_num_rows($result);
}

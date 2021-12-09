<?php
// panggil semua fungsi utama;
include 'core/core.php';
if (isset($_SESSION['login'])) {
    header("Location: " . BASEURL);
    exit;
}

$error = 0;

if (isset($_POST['masuk'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $user = mysqli_query(conn(), "SELECT * FROM users WHERE nama_pengguna = '$username' && kata_sandi = '$password'");
    $user = mysqli_num_rows($user);
    if ($user > 0) {
        $_SESSION['login'] = $username;
        header("Location: " . BASEURL);
        exit;
    }
    $error = 1;
}

$title = 'Halaman Login';
$nav = 'login';
include 'views/layouts/header.php';
include 'views/login.php';
include 'views/layouts/footer.php';

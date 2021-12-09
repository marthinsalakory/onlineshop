<?php
// panggil semua fungsi utama;
include 'core/core.php';
isLogin();

$nav = 'proses';
include 'views/layouts/header.php';
include 'views/proses.php';
include 'views/layouts/footer.php';

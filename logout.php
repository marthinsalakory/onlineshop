<?php

include 'core/core.php';
isLogin();

unset($_SESSION['login']);
header("Location: " . BASEURL);
exit;

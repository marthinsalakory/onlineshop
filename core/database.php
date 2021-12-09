<?php

function conn()
{
    if (mysqli_connect(svName, dbUsername, dbPassword)) {
        return mysqli_connect(svName, dbUsername, dbPassword, dbName);
    } else {
        die("<br><br><B>GAGAL KONEKSI KE DATABASE!</b>");
    }
}

<?php

$username = "admin";
$password = "12345";

if ($username == "admin") {
    if ($password == "12345") {
        echo "Login berhasil sebagai admin!";
    } else {
        echo "Password salah!";
    }
} elseif ($username == "siswa") {
    if ($password == "111") {
     echo "login berhasil sebagai siswa";
    }else {
        echo "password salah";
    }
} 

?>

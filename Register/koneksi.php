<?php

$koneksi = mysqli_connect("localhost", "root", "mysql", "projek");
// echo "Koneksi Berhasil";

if(mysqli_connect_error()){
    echo "Koneksi anda gagal : " . mysqli_connect_error();
}

?>
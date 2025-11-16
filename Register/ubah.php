<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$coin = $_POST['coin'];
$type = $_POST['type'];
$amount = $_POST['amount'];
$buyat = $_POST['buyat'];
$sellat = $_POST['sellat'];
$currency = $_POST['currency'];

mysqli_query($koneksi,"update input set coin='$coin', type='$type', amount='$amount', buyat='$buyat', sellat='$sellat', currency='$currency' where id='$id'");

header("location:output.php");

?>
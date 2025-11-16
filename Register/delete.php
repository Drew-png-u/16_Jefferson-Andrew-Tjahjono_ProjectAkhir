<?php
include 'koneksi.php';

$coin = $_GET['id'];
mysqli_query($koneksi,"delete from input where coin='$coin'");
header("location:output.php");

?>
<?php
include "koneksi.php";

$coin = $_POST['coin'];
$type = $_POST['type'];
$amount = $_POST['amount'];
$buyat = $_POST['buyat'];
$sellat = $_POST['sellat'];
$currency = $_POST['currency'];

mysqli_query($koneksi,"insert into input values('0', '$coin', '$type', '$amount', '$buyat', '$sellat', '$currency')");
header("location:output.php");

?>
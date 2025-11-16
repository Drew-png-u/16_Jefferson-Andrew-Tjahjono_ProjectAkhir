<?php
include "koneksi.php";

$full = $_POST['nama'];
$user = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$pass = $_POST['password'];

mysqli_query($koneksi, "insert into login(full, user, age, email, pass) values('$full', '$user', '$age', '$email', '$pass')");

header("location:login.php");
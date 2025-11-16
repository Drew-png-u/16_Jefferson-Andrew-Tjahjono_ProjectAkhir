<?php
include "koneksi.php";

$user = $_POST['username'];
$pass = $_POST['password']; 


mysqli_query($koneksi, "SELECT user, pass FROM login WHERE user = '$user' AND pass = '$pass'");

$sql = "SELECT user, pass FROM login WHERE user = ? AND pass = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['user'] = $user['user'];
    $_SESSION['pass'] = $user['pass'];

    header("Location: input.php");
    exit;

} else {
    session_start();
    $_SESSION['error_message'] = "Email atau Password salah. Silakan coba lagi.";

    header("Location: login.php");
    exit;
}
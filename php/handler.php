<?php
include("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($koneksi,"select * from data where username = '$username' && password = '$password' ");

if ($query ->fetch_assoc() < 1) {
    header("location: login.php");
} else {
    header("location: dashboard.php");
}
?>
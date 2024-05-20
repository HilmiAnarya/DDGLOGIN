<?php
require("connection.php");

$un = $_POST["username"];
$pw = $_POST["password"];

$query = mysqli_query($koneksi, "insert into data(username, password) values('$un', '$pw');");

header("location: login.php");

?>
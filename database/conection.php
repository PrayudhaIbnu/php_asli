<?php
$connection = mysqli_connect("localhost", "root", "", "db_tugas");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

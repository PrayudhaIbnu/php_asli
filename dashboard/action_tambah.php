<?php
// Koneksi ke Database
include '../database/conection.php';

// Menerima data yang dikirim dari form
$materi = $_POST['materi'];
$nama_tugas = $_POST['nama_tugas'];
$batas_pengumpulan = $_POST['batas_pengumpulan'];

// Mengirim data ke Database
$query = "INSERT INTO tugas (materi, nama_tugas, batas_pengumpulan) VALUES ('$materi', '$nama_tugas', '$batas_pengumpulan')";
mysqli_query($connection, $query) or die(mysqli_error($connection));

// Redirect / Mengalihkan halaman kembali ke index.php
header("Location: ../index.php");
exit();
?>

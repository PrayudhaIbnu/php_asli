<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Tugas Mahasiswa</title>
</head>

<body>
    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br />
    <a href="dashboard/tambah.php">+ TAMBAH MAHASISWA</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>No</th>
            <th>Materi</th>
            <th>Nama Tugas</th>
            <th>Batas Pengempulan</th>
            <th>opsi</th>
        </tr>
        <?php
        include 'database/conection.php';
        $no = 1;
        $data = mysqli_query($connection, "SELECT * FROM tugas");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['materi']; ?></td>
                <td><?php echo $d['nama_tugas']; ?></td>
                <td><?php echo $d['batas_pengumpulan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
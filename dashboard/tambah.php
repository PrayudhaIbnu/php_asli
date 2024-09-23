<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas</title>
</head>

<body>
    <h2>Tugas Mahasiswa</h2>
    <br />
    <a href="index.php">Kembali</a>
    <br />
    <br />
    <h3>Tambah Tugas</h3>
    <form method="post" action="action_tambah.php">
        <table>
            <tr>
                <td>Materi</td>
                <td><input type="text" name="materi" required></td>
            </tr>
            <tr>
                <td>Nama Tugas</td>
                <td><input type="text" name="nama_tugas" required></td>
            </tr>
            <tr>
                <td>Batas Pengumpulan</td>
                <td><input type="date" name="batas_pengumpulan" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>

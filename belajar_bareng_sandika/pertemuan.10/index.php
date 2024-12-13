<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Halaman Mahasiswa</h1>

    <a href="tambah.php">tambabh data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?=$i ?></td>
            <td>
                <a href="">ubah</a>  |
                <a href="">hapus</a>
            </td>
            <td><img src="img/dd.JPG" width="50" alt=""></td>
            <td><?= $row["nrp"] ?>;</td>
            <td><?= $row["nama"] ?>;</td>
            <td><?= $row["email"] ?>;</td>
            <td><?= $row["jurusan"] ?>;</td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
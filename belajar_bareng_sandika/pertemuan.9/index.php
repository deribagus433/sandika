<?php
require 'functions.php';
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$mahasiswa = query("SELECT * FROM mahasiswa");
// var_dump ($result);
// cara mengecek eror
// if(!$result) {
// echo mysqli_error($conn);
// }
// ambil data (feth) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs [1]);


// mysqli_fetch_assoc() megembalikan array associative
// while ($mhs = mysqli_fetch_assoc($result))  {
//   var_dump($mhs ["nama"]);
// }

// mysqli_fetch_array()  mengembalikan ke2nya

// $mhs = mysqli_fetch_array($result);
//  var_dump($mhs ["email"]);


// mysqli_fetch_object()

// $mhs = mysqli_fetch_object($result);
//  var_dump($mhs ->nama);



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
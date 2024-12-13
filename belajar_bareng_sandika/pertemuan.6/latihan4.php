<?php
$mahasiswa = [


    [
    "nama" => "deri tamvan",
    "nrp" => "098765432",
    "email" => "deribagus@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "dd.jpg"
    ],

    [
    "nama" => "deri ganteng",
    "nrp" => "098765432",
    "email" => "deribagus@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "dd.jpg"]


];
// echo $mahasiswa["nama"];
// echo $mahasiswa[0]["nam\\\a"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach ($mahasiswa as $mhs) :?>

<ul>
    <li> nama: <?= $mhs["nama"] ?></li>
    <li><img src="img/<?= $mhs["gambar"] ?>" width="50" height="50" alt=""></li>
</ul>

<?php endforeach ?>



    
</body>
</html>
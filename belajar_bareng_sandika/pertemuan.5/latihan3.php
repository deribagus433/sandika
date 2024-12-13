<?php 
$mahasiswa = [
    ["shandika galih", "043040023", "teknik informatika", "email"],
    ["deri bagus", "043040024", "teknik informatikam", "deriputra.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>

    <ul>
        <li><?= $mhs[0]; ?></li>   
        <li><?= $mhs[1]; ?></li>   
        <li><?= $mhs[2]; ?></li>   
        <li><?= $mhs[3]; ?></li>   
    </ul>
    <?php endforeach; ?>
</body>
</html>
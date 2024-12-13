<?php 
mysqli_connect("localhost", "root", "", "phpdasar");
if (isset($_post["submit"])) {
    $nama = $_post["nama"];
    $nrp = $_post["nrp"];
    $email = $_post["email"];
    $jurusan = $_post["jurusan"];
    $gambar = $_post["gambar"];

    $query = "INSERT INTO mahasiswa
              VALUES
              ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
              mysqli_query($conn, $query);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>
<body>
<h1>tambah data mahasiswa</h1>

<form action="" method=""post>


<ul>
    <li>

        <label for="nama">nama :</label>
        <input type="text" name="nama" id="nama">

    </li>

    <li>
        
    <label for="nrp">nrp :</label>
    <input type="text" name="nrp" id="nrp">

    </li>

    <li>
        
    <label for="email">email :</label>
    <input type="text" name="email" id="email">

    </li>

    <li>
        
    <label for="jurusan">jurusan :</label>
    <input type="text" name="jurusan" id="jurusan">

    </li>

    <li>
        
    <label for="gambar">gambar :</label>
    <input type="text" name="gambar" id="gambar">

    </li>

<li>
    <button type="submit" name="submit">tambah data! </button>
</li>

</ul>

</form>



</body>
</html>
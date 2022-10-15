<?php

require 'functions.php';

// $conn = mysqli_connect("localhost", "root", "", "rumahsakit");

// $result = mysqli_query($conn, "SELECT * FROM dbpasien ");

$pasien = query("SELECT * FROM dbpasien");


if (isset($_POST["cari"])) {
    $pasien = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD WITH CSS NATIVE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Poppins:wght@300;400;600&family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-bg">

    <div class="container">


        <div>
            <h2 class="text-center">CRUD Pasien</h2>

            <button type="button" class="button" style=" margin-top: 15px; margin-bottom: -15px;  background: linear-gradient(135deg, #71b7e6, #9b59b6) ;color:#fff; outline: none; border: none;
            width: 30%; border-radius: 5px;" onclick="document.location.href='add.php'">Tambah Data</button>


            <form action="" method="POST">
                <div class="search">
                    <input type=" text" name="keyword" placeholder="Cari Pasien">
                    <button type="submit" name="cari">Cari</button>
                </div>
            </form>


            <br><br>

            <table>
                <tr class="text-center">
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Handphone</th>
                    <th>Kelas</th>
                    <th class="aksi">Aksi</th>
                </tr>

                <?php foreach ($pasien as $psn) : ?>
                    <tr>

                        <td><?= $psn["kode"]; ?></td>
                        <td><?= $psn["nama"]; ?></td>
                        <td><?= $psn["umur"]; ?></td>
                        <td><?= $psn["alamat"]; ?></td>
                        <td><?= $psn["handphone"]; ?></td>
                        <td><?= $psn["kelas"]; ?></td>
                        <td class="flex">
                            <a href="edit.php?id=<?= $psn["id"]; ?>" class="button yellow">Edit</a> |
                            <a href="delete.php?id=<?= $psn["id"]; ?>" class="button red">hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>
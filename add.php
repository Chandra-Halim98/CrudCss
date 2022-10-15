<?php


require 'functions.php';


if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
        echo "<script>
                alert('Data berhasil Ditambahkan')
                document.location.href ='index.php'
            </script>
            ";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan')
                document.location.href ='index.php'
            </script>
            ";
    }
}


// Query without function
// if (isset($_POST["submit"])) {
//     global $conn;
//     $kode = $_POST["kode"];
//     $nama = $_POST["nama"];
//     $umur = $_POST["umur"];
//     $alamat = $_POST["alamat"];
//     $handphone = $_POST["handphone"];
//     $kelas = $_POST["kelas"];

//     $query = "INSERT INTO dbpasien VALUES('','$kode','$nama','$umur','$alamat','$handphone','$kelas')";

//     mysqli_query($conn, $query);
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Poppins:wght@300;400;600&family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body class="body-bg">

    <div class="container">

        <div class="tittle">Tambah Data Pasien</div>


        <form action="" method="POST">
            <div class="button" onclick="document.location.href='index.php'" style="width: 30%;">
                <input type="submit" name="submit" value="Kembali">
            </div>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Kode</span>
                    <input type="text" name="kode" placeholder="Masukan kode pasien" required>
                </div>
                <div class="input-box">
                    <span class="details">Nama</span>
                    <input type="text" name="nama" placeholder="Masukan nama pasien" required>
                </div>
                <div class="input-box">
                    <span class="details">Umur</span>
                    <input type="text" name="umur" placeholder="Masukan umur pasien" required>
                </div>
                <div class="input-box">
                    <span class="details">Alamat</span>
                    <input type="text" name="alamat" placeholder="Masukan alamat" required>
                </div>
                <div class="input-box">
                    <span class="details">Handphone</span>
                    <input type="text" name="handphone" placeholder="Masukan nomor handphone" required>
                </div>
            </div>
            <div class="class-details">
                <input type="radio" name="kelas" value="A" id="satu-1" name="kelas">
                <input type="radio" name="kelas" id="satu-2" name="kelas" value="B">
                <input type="radio" name="kelas" id="satu-3" name="kelas" value="C">
                <span class="class-tittle">Kelas</span>
                <div class="category">
                    <label for="satu-1">
                        <span class="satu one"></span>
                        <span class="class">A</span>
                    </label>
                    <label for="satu-2">
                        <span class="satu two"></span>
                        <span class="class">B</span>
                    </label>
                    <label for="satu-3">
                        <span class="satu three"></span>
                        <span class="class">C</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Tambah Data">
            </div>
        </form>

    </div>
</body>

</html>
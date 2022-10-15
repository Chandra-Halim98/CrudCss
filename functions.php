<?php

$conn = mysqli_connect("localhost", "root", "", "rumahsakit");

function add($data)
{
    global $conn;
    $kode = $data["kode"];
    $nama = $data["nama"];
    $umur = $data["umur"];
    $alamat = $data["alamat"];
    $handphone = $data["handphone"];
    $kelas = $data["kelas"];

    $query = "INSERT INTO dbpasien VALUES('','$kode','$nama','$umur','$alamat','$handphone','$kelas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $id = $data["id"];
    $kode = $data["kode"];
    $nama = $data["nama"];
    $umur = $data["umur"];
    $alamat = $data["alamat"];
    $handphone = $data["handphone"];
    $kelas = $data["kelas"];

    $query = "UPDATE dbpasien SET 
                kode = '$kode',
                nama = '$nama', 
                umur = '$umur',
                alamat = '$alamat',
                handphone = '$handphone', 
                kelas = '$kelas' WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($id)
{

    global $conn;

    mysqli_query($conn, "DELETE FROM dbpasien WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM dbpasien WHERE 
    kode LIKE '%$keyword%'OR
    nama LIKE '%$keyword%' OR 
    umur LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    handphone LIKE '%$keyword%' OR
    kelas LIKE '%$keyword%'
    ";

    return query($query);
}

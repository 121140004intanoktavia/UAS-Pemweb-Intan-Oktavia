<?php

$db = mysqli_connect('localhost', 'root', '', 'aespa');
if (mysqli_connect_errno()) {
    echo 'Gagal terkoneksi database MYSQL: ' . mysqli_connect_error();
}

if (isset($_POST['add'])) {
    $namaalbum = mysqli_real_escape_string($db, $_POST['namaalbum']);
    $tahunrilis = mysqli_real_escape_string($db, $_POST['tahunrilis']);
    $jumlah = mysqli_real_escape_string($db, $_POST['jumlah']);

    $query = "INSERT INTO aespa(namaalbum,tahunrilis,jumlah) 
  			  VALUES('$namaalbum','$tahunrilis','$jumlah')";
    if (mysqli_query($db, $query)) {
        //jika terhubung
    } else {
        echo "<script>alert('Terjadi kesalahan!!!');</script>";
    }

    require('./index.php');
}

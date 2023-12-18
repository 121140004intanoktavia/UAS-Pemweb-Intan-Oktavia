<?php
$db = mysqli_connect('localhost', 'root', '', 'aespa');
if (mysqli_connect_errno()) {
    die("Tidak bisa terhubung ke MySQL: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id_aespa = $_GET['id'];

    $result = mysqli_query($db, "DELETE FROM aespa WHERE id_aespa = '$id_aespa'");
    
    if ($result) {
        echo "Berhasil";
        header("Location: admin.php");
    } else {
        die("Gagal menghapus data: " . mysqli_error($db));
    }
}
?>

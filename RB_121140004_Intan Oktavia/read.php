<?php

require('koneksi.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $namaalbum = mysqli_real_escape_string($connect_db, $_POST['namaalbum']);
    $tahunrilis = mysqli_real_escape_string($connect_db, $_POST['tahunrilis']);
    $jumlah = mysqli_real_escape_string($connect_db, $_POST['jumlah']);

    mysqli_query($connect_db, "UPDATE aespa SET namaalbum='$namaalbum',tahunrilis='$tahunrilis' ,jumlah='$jumlah' WHERE id_aespa='$id'");

    header("Location:server.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

    $id = $_GET['id'];
    $result = mysqli_query($connect_db, "SELECT * FROM aespa WHERE id_aespa=" . $_GET['id']);

    $row = mysqli_fetch_array($result);

    if ($row) {

        $id = $row['id_aespa'];
        $namaalbum = $row['namaalbum'];
        $tahunrilis = $row['tahunrilis'];
        $jumlah = $row['jumlah'];
    } else {
        //
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Album Aespa</title>
</head>

<body>


    <div class="container-fluid text-center">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />

            <table border="1">
                <tr>
                    <td colspan="2">
                        <h1 class="text-primary text-center"><b>Lihat Data</b></h1>
                    </td>
                </tr>
                <tr>
                    <td width="179"><b>Nama Album</b></td>
                    <td><label>
                            <input disabled type="text" name="namaalbum" value="<?php echo $namaalbum; ?>" />
                        </label></td>
                </tr>

                <tr>
                    <td width="179"><b>Tahun Rilis</b></td>
                    <td><label>
                            <input disabled type="text" name="tahunrilis" value="<?php echo $tahunrilis; ?>" />
                        </label></td>
                </tr>

                <tr>
                    <td width="179"><b>Jumlah</b></td>
                    <td><label>
                            <input disabled type="number" name="jumlah" value="<?php echo $jumlah; ?>" />
                        </label></td>
                </tr>

                <tr align="center">
                    <td colspan="2"><label>
                            <a href="admin.php">Kembali</a>
                        </label></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
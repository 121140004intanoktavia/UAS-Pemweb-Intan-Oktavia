<?php
require 'session.php';
require 'koneksi.php';

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>121140015 UAS Pemweb</title>
</head>

<body>

    <div class="main-content">
        <nav class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <a href="#">Web Data Album Aespa</a>
                </div>
                <div class="menu-content">
                    <ul class="menu-items">
                        <li class="item btn-login">
                            <a href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="main">
            <div class="container">
                <div class="" style="margin-top: 50px;">
                    <table class="">
                        <thead class="table-head">
                            <tr class="table-head">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Album</th>
                                <th scope="col">Tahun Rilis</th>
                                <th scope="col">Jumlah Lagu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM aespa";
                            $result = $connect_db->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $count = $count + 1;
                            ?>
                                    <tr class="table-body">
                                        <th>
                                            <?php echo $count ?>
                                        </th>
                                        <th>
                                            <?php echo $row["namaalbum"] ?>
                                        </th>
                                        <th>
                                            <?php echo $row["tahunrilis"] ?>
                                        </th>
                                        <th>
                                            <?php echo $row["jumlah"] ?>
                                        </th>
                                        <th>
                                        <a href="up" Edit</a><a href="read.php?id=<?php echo $row["id_aespa"] ?>" class="read">Lihat</a>
                                            <a href="up" Edit</a><a href="update.php?id=<?php echo $row["id_aespa"] ?>" class="update">Update</a>
                                                <a href="up" Edit</a><a href="delete.php?id=<?php echo $row["id_aespa"] ?>" class="delete">Delete</a>
                                        </th>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
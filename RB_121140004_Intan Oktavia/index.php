<?php
require 'koneksi.php';
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Data Album AESPA</title>
</head>

<body>

    <div class="main-content">
        <nav class="sidebar">
            <div class="sidebar-content">
            <div class="logo">
                <a href="#">DATA ALBUM AESPA</a>
            </div>
            <div class="menu-content">
                <ul class="menu-items">
                    <li class="item btn-login">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        

        <div class="main">
            <div class="container">
                <form method="POST" class="" action="create.php">
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Album</label>
                        <input type="text" class="" name="namaalbum">
                    </div>
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Tahun Rilis</label>
                        <div>
                        <input type="radio" id="html" name="tahunrilis" value="2019">
                        <label for="2019">2019</label><br>
                        <input type="radio" id="html" name="tahunrilis" value="2020">
                        <label for="2020">2020</label><br>
                        <input type="radio" id="html" name="tahunrilis" value="2021">
                        <label for="2021">2021</label><br>
                        <input type="radio" id="html" name="tahunrilis" value="2022">
                        <label for="2022">2022</label><br>
                        </div>
                    </div>
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Jumlah Lagu</label>
                        <input type="number" class="" name="jumlah">
                    </div>
                    <button type="submit" class="button-add" name="add">Input data</button>
                </form>
<hr>
                <div class="">
                    <h1>Tabel Data Album AESPA</h1>
                    <table>
                        <thead class="table-head">
                            <tr class="table-head">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Album</th>
                                <th scope="col">Tahun rilis</th>
                                <th scope="col">Jumlah Lagu</th>
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
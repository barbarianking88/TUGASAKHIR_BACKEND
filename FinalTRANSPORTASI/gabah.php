<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driver_gabah";

$koneksi = mysqli_connect($servername,$username,$password,$dbname);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Gabah</title>
</head>

<body>
    <div class='mx-auto'>
        <div class="card">
            <div class="card-header text-white bg-primary text-center">
                DATA GABAH PETANI
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <a href="tamahgabah.php" class="btn btn-success">Tambah</a>
                    <a href="menu.php" class="btn btn-success">Home</a>
                    <table class="mt-4 table table-stripped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Id Petani</th>
                                <th>Foto Gabah</th>
                                <th>Lokasi</th>
                                <th>Tujuan</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Kontak Petanu</th>
                            </tr>
                        </thead>
                        <?php
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM gabah");
                while ($data = mysqli_fetch_array($query)){

            ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['id_petani'] ?></td>
                            <td>
                                <img class="img-fluid" style="width:50px" src="asset/img/<?= $data['foto']?>" alt="">
                            </td>
                            <td><?= $data['lokasi'] ?></td>
                            <td><?= $data['tujuan'] ?></td>
                            <td><?= $data['jumlah'] ?></td>
                            <td><?= $data['satuan'] ?></td>
                            <td><?= $data['kontak'] ?></td>

                            <td>
                                <a href="detail.php?i=d<?= $data['id']?>" class="btn btn-primary">Status</a>
                                <a href="" class="btn btn-warning">Dtail</a>
                            </td>
                        </tr>
                        <?php
                $no++;
                }
            ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
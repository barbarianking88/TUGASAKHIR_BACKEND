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
    <title>Profil Petani</title>
    <style>
    .mx-auto {
        width: 800px:
    }

    .card {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class='mx-auto'>
        <div class="card">
            <div class="card-header text-white bg-primary">
                data petani
            </div>
            <div class="card-body">
                <form action="" method="post">

                </form>
            </div>
        </div>
    </div>

    <a href="tambahdatapetani.php" class="btn btn-success">Tambah</a>
    <table class="mt-4 table table-stripped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat Lengkap</th>
                <th>Kabupaten</th>
                <th>foto</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM fpetani");
                while ($data = mysqli_fetch_array($query)){

            ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['kabupaten'] ?></td>
            <td>
                <img class="img-fluid" style="width:50px" src="asset/img/<?= $data['foto']?>" alt="">
            </td>
            <td><?= $data['email'] ?></td>
            <td>
                <a href="detail.php?i=d<?= $data['id']?>" class="btn btn-primary">Detail</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php
                $no++;
                }
            ?>
</body>

</html>
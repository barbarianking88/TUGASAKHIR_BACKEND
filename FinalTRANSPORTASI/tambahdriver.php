<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driver_gabah";

$koneksi = mysqli_connect($servername,$username,$password,$dbname);

$sukses ="";
$eror ="";


if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kabupaten = $_POST['kabupaten'];
    $nopol = $_POST['nopol'];
    $jenis = $_POST['jenis'];
    $foto = "img.jpg";
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];

    if($nama && $alamat && $kabupaten && $foto && $email){
        $query =  "INSERT INTO driver VALUES ('$nama','$alamat','$kabupaten','$foto','$email')";
        $submit = mysqli_query($koneksi, $query);
        if ($submit){
            $sukses ="data berhasil disimpam";
            $nama ="";
            $alamat= "";
            $kabupaten = "";
            $nopol = "";
            $jenis = "";
            $foto = "";
            $email = "";
            $nohp = "";
        }else{
            $eror ="data gagal disimpan";
        }
        
    }
    // header('location:dpetani.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php
    if ($sukses){
        ?>
    <div class="alert alert-succes" role="alert">
        <?php echo $sukses; ?>
    </div>
    <?php
    }
    if ($eror){
        ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $eror ; ?>
    </div>
    <?php
    }
    ?>
    <div class="card">
        <div class="card-header text-white bg-primary  text-center">
            Input Profil Driver
        </div>

        <div class="container col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input type="text" name="alamat" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kabupaten">kabupaten</label>
                    <input type="text" name="kabupaten" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" name="nopol" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis Mobil</label>
                    <input type="text" name="jenis" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <p><input type='file' name='foto' accept='image/*' /></p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nohp">Telp/Wa</label>
                    <input type="text" name="nohp" id="" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
</body>

</html>
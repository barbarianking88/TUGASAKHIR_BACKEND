<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driver_gabah";

$koneksi = mysqli_connect($servername,$username,$password,$dbname);

$sukses ="";
$eror ="";


if(isset($_POST['submit'])){
    $id_petani = $_POST['id_petani'];
    $foto = "img.jpg";
    $lokasi = $_POST['lokasi'];
    $tujuan = $_POST['tujuan'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $kontak = $_POST['kontak'];
   

    if($id_patani && $foto && $lokasi && $tujuan && $jumlah && $satuan && $kontak){
        $query =  "INSERT INTO gabah VALUES ('$id_patani','$foto','$lokasi','$tujuan','$jumlah','$satuan','$kontak')";
        $submit = mysqli_query($koneksi, $query);
        if ($submit){
            $sukses ="data berhasil disimpam";
            $id_petani ="";
            $foto= "";
            $lokasi = "";
            $tujuan= "";
            $jumlah= "";
            $satuan= "";
            $kontak = "";
            }else{
            $eror ="data gagal disimpan";
        }
        
    }
    // header('location:driver.php'); 
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

    <title>gabah</title>
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
            Input Data Gabah
        </div>

        <div class="container col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="id_petani" class="col-sm-2 col-form-label">Id Petani</label>
                    <input type="text" name="id_petani" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <p><input type='file' name='foto' accept='image/*' /></p>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Ganah</label>
                    <input type="text" name="tujuan" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tujuan">Jujuan</label>
                    <input type="text" name="tujuan" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" name="satuan" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak</label>
                    <input type="text" name="kontak" id="" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class=" mt-3 btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
</body>

</html>
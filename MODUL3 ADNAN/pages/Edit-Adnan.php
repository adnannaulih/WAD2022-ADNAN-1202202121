<?php
require '../config/connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_adnan_table WHERE id_mobil = $id";

$result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">MyCar</a>
        </div>
      </div>
    </div>
  </nav>

  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class='tambahh1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='tambahp'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='../config/edit.php?id=" . $getDetail["id_mobil"] . "' method='POST' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "' >
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "' >
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk' name='merk' value='" . $getDetail["merk_mobil"] . "' >
                    <label for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $getDetail["tanggal_beli"] . "' >
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' >" . $getDetail["deskripsi"] ." </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <button type='submit' class='btn btn-primary' style='margin-top: 40px;'>Selesai</button>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
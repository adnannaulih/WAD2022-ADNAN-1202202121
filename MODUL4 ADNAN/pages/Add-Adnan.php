<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <nav style="background-color: <?php echo $_SESSION['warnanav']?>" class="navbar navbar-expand-lg">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="../index.php">Home</a>
        </div>
      </div>
      <form class="d-flex justify-content-end" action="#">
        <div class="container">
          <div class="row">
            <div class="col-md-auto">
              <a href="Add-Adnan.php" class="btn btn-light text-dark">Add Car</a>
            </div>
            <div class="col-md-auto">
              <div class="dropdown">
                <a class="btn btn-light dropdown-toggle text-dark" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION["nama"] ?></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-dark" href="Profile-Adnan.php">Profile</a></li>
                  <li><a class="dropdown-item text-dark" href="../config/logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil Anda">
        <label for="pemilik">Nama Pemilik</label>
        <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Anda">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="merk" placeholder="Masukkan Merk Mobil Anda">
        <label for="tanggalbeli">Tanggal Beli</label>
        <input type="date" id="tanggalbeli" name="tanggalbeli">
        <label for="desc">Deskripsi</label>
        <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil Anda" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Foto</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
        <label for="status">Status Pembayaran</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 20px; margin-right:10px;">Lunas</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 20px;">Belum Lunas</label>
        </span>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
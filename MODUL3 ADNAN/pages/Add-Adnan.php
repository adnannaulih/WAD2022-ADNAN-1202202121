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

</body>

</html>
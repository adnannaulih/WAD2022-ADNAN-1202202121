<?php
session_start();

require '../config/connector.php';

$query = "SELECT * FROM showroom_adnan_table";
$result = mysqli_query($conn, $query);

if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == "berhasil") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil ditambahkan.
  </div>";
  } else if ($_GET['pesan'] == "gagal") {
    echo "<div class='alert alert-danger' id='alert' role='alert'>
    Error
  </div>";
  } else if ($_GET['pesan'] == "hapus") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil dihapus.
  </div>";
  } else if ($_GET['pesan'] == "edit") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil diupdate.
  </div>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Show Room</title>
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

  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room Adnan - 1202202121</p>
        <div class="d-flex gap-5">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../asset/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail-Adnan.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "Belum ada data";
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <footer style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    const timeout = document.getElementById('alert');
    setTimeout(hideElement, 3000)
    function hideElement() {
      timeout.style.display = 'none'
    }
  </script>
</body>

</html>
<?php
require './config/connector.php';

$query = "SELECT * FROM showroom_adnan_table";
$result = mysqli_query($conn, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/index.css'; ?>
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "./pages/ListCar-Adnan.php" : print "./pages/Add-Adnan.php" ?>">MyCar</a>
        </div>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Adnan</h1>
          <p class="mt-3">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br /> curses vestibulum, facilisi ac, sed faucibus</p>
          <a href="<?php (mysqli_num_rows($result) > 0) ? print "./pages/ListCar-Adnan.php" : print "./pages/Add-Adnan.php" ?>" class="button btn-primary">MyCar</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Adnan_1202202121</p>
          </div>
        </div>
        <img src="<?php echo "asset/images/jumbotron.png" ?>" alt="jumbotron" style="height: 400px">
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
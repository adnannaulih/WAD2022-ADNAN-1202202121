    <?php
    session_start();
    require '../config/connector.php';

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
        <?php include '../asset/style/index.css'; ?>
      </style>
    </head>

    <body>
    <nav style="background-color: <?php echo ['warnanav']?>" class="navbar navbar-expand-lg">
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

      <section id="home">
        <div class="container">
          <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
            <div>
              <h1>Selamat Datang Di<br /> Show Room Adnan</h1>
              <p class="mt-3">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br /> curses vestibulum, facilisi ac, sed faucibus</p>
              <a href="<?php (mysqli_num_rows($result) > 0) ? print "../pages/ListCar-Adnan.php" : print "../pages/Add-Adnan.php" ?>" class="button btn-primary">MyCar</a>
              <div class="d-flex align-items-center gap-5 mt-5">
                <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
                <p style="margin-top: 20px; font-size:14px;">Adnan_1202202121</p>
              </div>
            </div>
            <img src="<?php echo "../asset/images/jumbotron.png" ?>" alt="jumbotron" style="height: 400px">
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

    </html>
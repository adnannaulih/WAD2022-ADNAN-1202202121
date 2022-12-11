<?php
session_start();
require '../config/connector.php';
$id = $_SESSION["id"];
$email = $_SESSION["email"];
$nama = $_SESSION["nama"];
$no_hp = $_SESSION["no_hp"];

if (isset($_POST['update'])) {
    $_SESSION['warnanav'] = $_POST['warnanav'];
    $_COOKIE['warnanav'] = $_POST['warnanav'];
    
    $id = $_POST["id"];
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $konfirmasi = $_POST["konfirmasi"];
    $password = $_POST["password"];
    if ($password == $konfirmasi) {
        mysqli_query($conn2, "UPDATE `user_adnan` SET `nama` = '$nama', `email` = '$email', `password` = '$password', `no_hp` = '$no_hp' WHERE `user_adnan`.`id` = $id");
        setcookie("password", "", time() - 3600);
        if (mysqli_affected_rows($conn2) > 0) {
            $nama = $_SESSION["nama"];
            $no_hp = $_SESSION["no_hp"];
            echo "
            <script>
            alert('update data berhasil')
            document.location.href = '../index.php'
            </script>";
        }
    } else {
        echo "
        <script>
            alert('konfirmasi password tidak sesuai')
            document.location.href = 'Profile-Adnan.php'
        </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        <?php include '../asset/style/index.css'; ?>label {
            flex-basis: 20%;
        }
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
                            <a href="Add-adnan.php" class="btn btn-light text-dark">Add Car</a>
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
    <div class="container-xl justify-content-center">
        <h1 class="text-center mt-5" style="font-size: 40px;">Profile</h1>
        <br>
        <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $id ?>">
            <div class="mb-3 d-flex">
                <label for="email" class="form-label">Email</label>
                <input value="<?= $email ?>" type="email" class="form-control" name="email" id="email" readonly>
            </div>
            <div class="mb-3 d-flex">
                <label for="nama" class="form-label">Nama</label>
                <input value="<?= $nama ?>" type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3 d-flex">
                <label for="no_hp" class="form-label">Nomor telepon</label>
                <input value="<?= $no_hp ?>" type="text" class="form-control" name="no_hp" id="no_hp">
            </div>
            <hr>
            <br>
            <div class="mb-3 d-flex">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3 d-flex">
                <label for="konfirmasi" class="form-label">Konfirmasi password</label>
                <input type="password" class="form-control" name="konfirmasi" id="konfirmasi">
            </div>
            <div class="mb-3 d-flex">
                <label for="warnanav" class="form-label">Warna navbar</label>
                <input value="<?= $_SESSION['warnanav'] ?>" type="text" class="form-control" name="warnanav" id="warnanav" required>
            </div>
            <div class="container d-flex justify-content-center">
                <button class="btn btn-primary" type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
    <div class="container d-flex "style="margin-top: 10%;">
        <img class="img-fluid mt-3 mb-3" style="width:100px;" src="../asset/images/logo-ead.png" alt="Logo EAD">
        <p class="px-3" style="margin-top: 20px; font-size:14px;">Adnan_1202202121</p>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
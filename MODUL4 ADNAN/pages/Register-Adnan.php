<?php
session_start();
require "../config/connector.php";
if (isset($_POST["register"])) {
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];
    $konfirmasi = $_POST["konfirmasi"];
    if ($password == $konfirmasi) {
        mysqli_query($conn2, "INSERT INTO `user_adnan` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES (NULL, '$nama', '$email', '$password', '$no_hp')");
        echo "<script>
        alert('registrasi berhasil')
        document.location.href = 'Register-Adnan.php'
        </script>";
    } else {
        echo "<script>
        alert('konfirmasi password tidak sesuai')
        document.location.href = 'Register-Adnan.php'
        </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        <?php include '../asset/style/index.css'; ?>
    </style>
</head>

<body>
    <main>
        <div class="d-flex" style="height: 100vh">
            <div class="w-50">
                <img src="../asset/images/cover.jpg" style="object-fit: cover" class="img-fluid h-100" alt="cover">
            </div>
            <div class="container w-50">
                <div class="row justify-content-center align-items-center">
                    <div class="col-9">
                        <h1 class="mt-5" style="font-size: 50px;">Register</h1>
                        <br>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor telepon</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="konfirmasi" class="form-label">Konfirmasi password</label>
                                <input type="password" class="form-control" name="konfirmasi" id="konfirmasi">
                            </div>
                            <button class="btn btn-primary" type="submit" name="register">Register</button>
                            <p>Anda sudah punya akun? <a href="Login-Adnan.php">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
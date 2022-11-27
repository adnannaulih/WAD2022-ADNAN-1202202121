<?php
session_start();
require "../config/connector.php";
if(isset($_POST["login"]))

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cek_akun = mysqli_query($conn2, "SELECT * FROM user_adnan WHERE email = '$email'");
    if (mysqli_num_rows($cek_akun) == 1) {
        $data = mysqli_fetch_assoc($cek_akun);
        if ($password == $data["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $data["id"];
            $_SESSION["nama"] = $data["nama"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["no_hp"] = $data["no_hp"];
            
            if (isset($_COOKIE['warnanav'])) {
                $_SESSION["warnanav"] = $_COOKIE['warnanav'];
            } else {
                $_SESSION["warnanav"] = "blue";
                $_COOKIE["warnanav"] = "blue";
            }

            if (isset($_POST['remember'])) {
                setcookie("password", $data["password"], time() + 3600);
                setcookie("email", $data["email"], time() + 3600);
            }
            return header("Location: HomeLogin-Adnan.php");
        } else {
            echo "<script>
            alert('email atau password salah')
            document.location.href = 'Login-Adnan.php'
            </script>";
        }
    } else {
        echo "<script>
        alert('email atau password salah')
        document.location.href = 'Login-Adnan.php'
        </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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
            <div class="container w-50 ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-9">
                        <h1 style="margin-top: 30%; font-size: 50px;">Login</h1>
                        <br>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="<?php (isset($_COOKIE['email'])) ? print $_COOKIE['email'] : print '' ?>" type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input value="<?php (isset($_COOKIE['password'])) ? print $_COOKIE['password'] : print '' ?>" type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                            <p>Anda belum punya akun? <a href="Register-Adnan.php">Daftar</a></p>
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
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/index.css">
</head>

<body>
    <main>
        <div class="d-flex" style="height: 100vh">
            <div class="w-50">
                <img src="/images/cover.jpg" style="object-fit: cover" class="img-fluid h-100" alt="cover">
            </div>
            <div class="container w-50 ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-9">
                        <h1 style="margin-top: 30%; font-size: 50px;">Login</h1>
                        <br>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input required value="<?php (isset($_COOKIE['email'])) ? print $_COOKIE['email'] : print '' ?>" type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input required value="<?php (isset($_COOKIE['password'])) ? print $_COOKIE['password'] : print '' ?>" type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                            <p>Anda belum punya akun? <a href="/register">Daftar</a></p>
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
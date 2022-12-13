<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Show Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/index.css">
</head>

<body>
    @include('nav')
    <section id="list">
        <div class="container">
            <div>
                <h1>My Show Room</h1>
                <p>List Show Room Adnan - 1202202121</p>
                <div class="d-flex gap-5">
                    @foreach ($list as $car)
                        <div class='card cardcontent' style='width: 18rem;'>
                            <img src='/images/{{ $car->image }}' class='card-img-top' alt='fotomobil'
                                style='padding: 16px;'>
                            <div class='card-body'>
                                <h5 cl ass='card-title'>{{ $car->name }}</h5>
                                <p class='card-text'>{{ $car->description }}</p>
                                <span class='d-flex'>
                                    <a href='/' class='btn btn-primary'
                                        style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                                    <a href='/' class='btn btn-danger'
                                        style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <footer style="padding-bottom: 50px;">
        <div class="container">
            <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">
                Jumlah Mobil : {{ count($list) }}</p>
        </div>
    </footer>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>

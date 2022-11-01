<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .gambar1 {
            position: flex;
            margin-top: 100px;
        }

        .book {
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container justify-content-center">
            <div class="row">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white-50" href="Adnan_Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white-50" href="Adnan_Booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <h3 style="text-align: center; padding-top: 5px">Rent your car now!</h3>

    <?php
    if (isset($_GET[''])) {
        $mobil = $_GET['mobil'];
        switch ($mobil) {
            case 'rush':
                $tampilan = "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png";
                break;
            case 'fortuner':
                $tampilan = "https://www.toyota.astra.co.id/sites/default/files/2022-08/1%20fortuner%20gr%202022%20platinum%20white%20pearl%20-%20attitude%20black.png";
                break;
            case 'ch-r':
                $tampilan = "https://static.wixstatic.com/media/304dbc_9a372b06615743e5b8e5ca2046dbbaa5~mv2.png/v1/fill/w_688,h_408,al_c/304dbc_9a372b06615743e5b8e5ca2046dbbaa5~mv2.png";
                break;
        }
    } else {
        $tampilan = "https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png";
        $mobil = "rush";
    }
    ?>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <img src=<?php echo $tampilan ?> class="gambar1 card-img-top p-4" alt="toyota <?php echo $mobil ?>">
            </div>
            <div class="col">
                <form class="text-start mt-3" method="POST" action="Adnan_MyBooking.php">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input class="form-control" type="text" value="ADNAN_1202202121" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="book date" class="form-label">Book Date</label>
                        <input type="date" class="form-control" id="book date" name="bookDate">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (Days)</label>
                        <input type="number" min="0" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="mb-3">
                        <label for="select" class="form-label">Car Type</label>
                        <select id="select" class="form-select" name="carType">
                            <option value="Toyota Rush" <?php if ($mobil === 'rush') {
                                                            echo "Selected";
                                                        } ?>>Toyota Rush</option>
                            <option value="Toyota Fortuner" <?php if ($mobil === 'fortuner') {
                                                                echo "Selected";
                                                            } ?>>Toyota Fortuner</option>
                            <option value="Toyota CH-R" <?php if ($mobil === 'ch-r') {
                                                            echo "Selected";
                                                        } ?>>Toyota CH-R</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone number" name="phoneNumber">
                    </div>
                    <label class="form-label mb-0">Add Service(s)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service[]" value="Health protocol" id="health">
                        <label class="form-check-label" for="Health">
                            Health protocol / Rp25.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service[]" value="Driver" id="driver">
                        <label class="form-check-label" for="Driver">
                            Driver / Rp100.000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="service[]" value="Fuel filled" id="fuel">
                        <label class="form-check-label" for="Fuel">
                            Fuel filled / Rp250.000
                        </label>
                    </div>
                    <button type="Submit" class="book btn bg-success text-light mt-3">Book</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-secondary bg-opacity-10 mt-3">
        <div class="text-center p-2" style="font-size: 14px;">
            Created by ADNAN_1202202121
        </div>
    </footer>
</body>

</html>
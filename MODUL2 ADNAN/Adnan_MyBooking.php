<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD Rent Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <h3 style="text-align: center; padding-top: 15px">Thank You ADNAN_1202202121 for Reserving</h3>
    <h5 style="text-align: center; padding-top: 5px">Please double check your reservation details</h5>

    <?php
    $noBooking = rand(1000000000, 9999999999);
    $tglBooking = $_POST["bookDate"];
    $waktu = $_POST["time"];
    $durasi = $_POST["duration"];
    $tipeMobil = $_POST["carType"];
    $noHP = $_POST["phoneNumber"];
    $tglpesan = strtotime($tglBooking);

    $totalService = 0;
    $totalHarga = 0;
    if (isset($_POST["service"])) {
        $services = $_POST["service"];
        for ($i = 0; $i < count($services); $i++) {
            if ($services[$i] == "Health protocol") {
                $totalService += 25000;
            }elseif ($services[$i] == "Driver") {
                $totalService += 100000;
            }elseif ($services[$i] == "Fuel filled") {
                $totalService += 250000;
            }
        }
    } else {
        $services[0] = "no service";
    }

    switch ($tipeMobil) {
        case 'Toyota Rush':
            $totalHarga = $durasi * 200000;
            break;
        case 'Toyota Fortuner':
            $totalHarga = $durasi * 250000;
            break;
        case 'Toyota CH-R':
            $totalHarga = $durasi * 150000;
            break;
    }
    $totalHarga += $totalService;
    ?>

    <div class="col-sm-10 offset-sm-1 mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row"><?php echo $noBooking; ?></th>
                    <td>ADNAN_1202202121</td>
                    <td> <?php echo date("Y-m-d", strtotime($tglBooking));
                            echo " ";
                            echo date("H:i:s", strtotime($waktu)); ?> </td>
                    <td> <?php echo date("Y-m-d", strtotime("+$durasi days", $tglpesan));
                            echo " ";
                            echo date("H:i:s", strtotime($waktu)); ?> </td>
                    <td> <?php echo $tipeMobil; ?> </td>
                    <td> <?php echo $noHP; ?> </td>
                    <td>
                        <ul>
                            <?php
                            for ($i = 0; $i < count($services); $i++) {
                                echo "<li>$services[$i]</li>";
                            }
                            ?>
                        </ul>
                    </td>
                    <td> <?php echo "Rp. $totalHarga"; ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer class="bg-secondary bg-opacity-10 mt-3 fixed-bottom">
        <div class="text-center p-2" style="font-size: 14px;">
            Created by ADNAN_1202202121
        </div>
    </footer>
</body>

</html>
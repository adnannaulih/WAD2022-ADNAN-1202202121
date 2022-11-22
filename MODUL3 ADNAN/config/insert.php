<?php
require './connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

$noIdMobil = rand(1000000000, 9999999999);

  $sqlinput = "INSERT INTO showroom_adnan_table VALUES ('$noIdMobil','$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($conn, $sqlinput)) {
    header("location: ../pages/ListCar-Adnan.php?pesan=berhasil");
  } else {
    header("location: ../pages/ListCar-Adnan.php?pesan=gagal");
  }
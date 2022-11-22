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

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_adnan_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$noIdMobil','$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../pages/ListCar-Adnan.php?pesan=berhasil");
  } else {
    header("location: ../pages/ListCar-Adnan.php?pesan=gagal");
  }
} else {
  header("location: ../pages/ListCar-Adnan.php?pesan=gagal");
}
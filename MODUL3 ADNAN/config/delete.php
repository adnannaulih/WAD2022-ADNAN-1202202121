<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_adnan_table WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
  header("location: ../pages/ListCar-Adnan.php?pesan=hapus");
} else {
  header("location: ../pages/ListCar-Adnan.php?pesan=gagal");
}
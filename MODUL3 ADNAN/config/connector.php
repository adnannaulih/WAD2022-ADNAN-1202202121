<?php
$conn = mysqli_connect("localhost", "root", "", "modul3", 3307);

if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}
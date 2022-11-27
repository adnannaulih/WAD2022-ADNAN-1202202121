<?php
$conn = mysqli_connect("localhost", "root", "", "modul3", 3307);
$conn2 = mysqli_connect("localhost", "root", "", "wad_modul4_adnan", 3307);

if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}
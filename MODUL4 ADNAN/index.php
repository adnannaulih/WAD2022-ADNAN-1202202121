<?php
session_start();

if (!isset($_SESSION['login'])){
    header('Location: pages/Home-Adnan.php');
} else {
    header('Location: pages/HomeLogin-Adnan.php');
}

?>
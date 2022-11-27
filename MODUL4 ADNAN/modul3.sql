-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 27, 2022 at 11:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_adnan_table`
--

CREATE TABLE `showroom_adnan_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_adnan_table`
--

INSERT INTO `showroom_adnan_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'BMW XM', 'Adnan - 1202202121', 'BMW', '2022-10-10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor odio sit amet porttitor congue. Quisque vestibulum tristique lectus sed fringilla. Maecenas a magna malesuada, tristique sapien sed, aliquam nulla. Pellentesque sed velit ultrices, laoreet ligula ac, posuere metus. Praesent a aliquet erat. ', 'BMW XM.jpg', 'Lunas'),
(3, 'Jumbotron', 'Adnan - 1202202121', 'BMW', '2022-10-10', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor odio sit amet porttitor congue. Quisque vestibulum tristique lectus sed fringilla. Maecenas a magna malesuada, tristique sapien sed, aliquam nulla. Pellentesque sed velit ultrices, laoreet ligula ac, posuere metus. Praesent a aliquet erat. ', 'jumbotron.png', 'Belum Lunas'),
(6, 'BMW X6M', 'Adnan - 1202202121', 'BMW', '2022-10-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta at mi eu bibendum. Nulla sollicitudin vulputate nisl tincidunt consequat. Aliquam erat volutpat. Morbi id bibendum tellus, eu blandit dui. Praesent metus odio, molestie eget nulla eu, luctus dignissim nunc. Praesent auctor lacinia risus nec faucibus.', 'BMW X6M.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_adnan_table`
--
ALTER TABLE `showroom_adnan_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_adnan_table`
--
ALTER TABLE `showroom_adnan_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

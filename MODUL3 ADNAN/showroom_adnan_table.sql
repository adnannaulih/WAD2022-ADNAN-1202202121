-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 02:31 PM
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
(1972160649, 'BMW XM', 'Adnan - 1202202121', 'BMW', '2022-10-10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur rutrum ex a consequat. Nunc mattis, quam sed facilisis efficitur, lorem eros egestas erat, id finibus elit lacus condimentum felis. Nunc diam mauris, ultricies sit amet rutrum nec, venenatis id erat. Aliquam mi sapien, tristique ut sagittis eu, sollicitudin lacinia felis. In et augue mollis nisl efficitur blandit vel in orci. Nunc ultrices tellus ac feugiat varius.', 'BMW XM.jpg', 'Lunas'),
(2147483647, 'BMW X6M', 'Adnan - 1202202121', 'BMW', '2022-10-19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce efficitur rutrum ex a consequat. Nunc mattis, quam sed facilisis efficitur, lorem eros egestas erat, id finibus elit lacus condimentum felis. Nunc diam mauris, ultricies sit amet rutrum nec, venenatis id erat. Aliquam mi sapien, tristique ut sagittis eu, sollicitudin lacinia felis. In et augue mollis nisl efficitur blandit vel in orci. Nunc ultrices tellus ac feugiat varius.', 'BMW X6M.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_adnan_table`
--
ALTER TABLE `showroom_adnan_table`
  ADD PRIMARY KEY (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

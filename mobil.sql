-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 04:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040013`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `foto` varchar(32) NOT NULL,
  `merek_mobil` varchar(16) NOT NULL,
  `varian_mobil` varchar(16) NOT NULL,
  `warna_mobil` varchar(16) NOT NULL,
  `bahan_bakar` varchar(16) NOT NULL,
  `transmisi` varchar(16) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `mesin` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `foto`, `merek_mobil`, `varian_mobil`, `warna_mobil`, `bahan_bakar`, `transmisi`, `harga`, `mesin`) VALUES
(1, '1.jpg', 'Nissan', 'Livina', 'Merah', 'Bensin', 'Otomatis', 'RP 198.000.000', '1500 cc'),
(2, '2.jpg', 'Renault', 'Koleos', 'Putih', 'Diesel', 'Manual', 'RP 495.000.000', '2488 cc'),
(3, '5.jpg', 'Honda', 'Brio', 'Merah', 'Bensin', 'Otomatis', 'RP 190.000.000', '1200 cc'),
(4, '7.jpg', 'Isuzu', 'Panther', 'Hitam', 'Diesel', 'Manual', 'RP 259.000.000', '2500 cc'),
(5, '8.jpg', 'Kia', 'Grand Sedona', 'Putih', 'Bensin', 'Otomatis', 'RP 489.000.000', '3342 cc'),
(6, '9.jpg', 'Mazda', 'Biante', 'Hitam', 'Bensin', 'Otomatis', 'RP 449.000.000', '2000 cc'),
(7, '10.jpg', 'Mitsubishi', 'Xpander', 'Silver', 'Bensin', 'Otomatis', 'RP 207.000.000', '1500 cc'),
(8, '6.jpg', 'Hyundai', 'Starek', 'Putih', 'Bensin', 'Manual', 'RP 345.000.000', '2497 cc'),
(11, '2.jpg', 'Nissan', 'Grand Livina', 'Hitam', 'Bensin', 'Otomatis', 'RP. 3000.999.000', '1340cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

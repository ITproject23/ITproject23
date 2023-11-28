-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 04:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlaporan`
--

CREATE TABLE `tlaporan` (
  `id_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `Nama_Pengirim` varchar(50) NOT NULL,
  `Nama_Beras` varchar(50) NOT NULL,
  `Jumlah_Barang` varchar(150) NOT NULL,
  `Harga_kg` varchar(150) NOT NULL,
  `total_harga` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tlaporan`
--

INSERT INTO `tlaporan` (`id_barang`, `tanggal`, `Nama_Pengirim`, `Nama_Beras`, `Jumlah_Barang`, `Harga_kg`, `total_harga`) VALUES
(24, '2023-11-05', 'Kang Deni', 'SM', '1850', '12600', '23310000'),
(25, '2023-11-07', 'A Cecep', 'Kembang', '1350', '12600', '17010000'),
(26, '2023-11-08', 'Wendi', 'Rojolele', '1100', '12350', '13585000'),
(27, '2023-11-13', 'Wendi', 'BM', '1050', '12600', '13230000'),
(31, '2023-11-16', 'Pak Aang', 'OP', '500', '12700', '6350000'),
(32, '2023-11-17', 'Kang Deni', 'Benyer', '300', '9800', '2940000'),
(33, '2023-11-17', 'A Cecep', 'Kembang', '1700', '12600', '21420000'),
(34, '2023-11-24', 'Abah Dedi', 'LS', '900', '12600', '11340000'),
(35, '2023-11-25', 'Pak Aang', 'SP', '300', '13000', '3900000'),
(36, '2023-11-25', 'Kang Deni', 'JM ', '1150', '13000', '14950000'),
(37, '2023-11-25', 'A Cecep', 'Kembang', '1275', '12600', '16065000');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(5, 'admin1', '4129bf529bdedbade9a3142532fc72f2', 'Irwan Nurizal', 'Aktif'),
(6, 'admin2', '0a96b2cddc93ccde084bf5999efed05a', 'Yadi Supriyadi', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tlaporan`
--
ALTER TABLE `tlaporan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlaporan`
--
ALTER TABLE `tlaporan`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

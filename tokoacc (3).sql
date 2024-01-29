-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 03:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoacc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `nama_barang` text NOT NULL,
  `harga_barang` varchar(250) NOT NULL,
  `tgl_input` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `nama_barang`, `harga_barang`, `tgl_input`) VALUES
(26, 'BRG004', 'Intel Hd', '500000001', '13 November 2023, 21:46'),
(28, 'BRG006', 'Intel Hd', '50000000', '21 November 2023, 8:56'),
(30, 'BRG007', 'Power Bank Robot RT5600', '100000', '21 November 2023, 20:59');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_cart` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `quantity` text NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `kembalian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_cart`, `kode_barang`, `nama_barang`, `harga_barang`, `quantity`, `subtotal`, `tgl_input`, `no_transaksi`, `bayar`, `kembalian`) VALUES
(99, 'BRG007', 'Power Bank Robot RT5600', '100000', '1', '100000', '29 January 2024', 'AD290120242140', '200000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `laporanku`
--

CREATE TABLE `laporanku` (
  `id_cart` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `quantity` text NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `kembalian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporanku`
--

INSERT INTO `laporanku` (`id_cart`, `kode_barang`, `nama_barang`, `harga_barang`, `quantity`, `subtotal`, `tgl_input`, `no_transaksi`, `bayar`, `kembalian`) VALUES
(92, 'BRG004', 'Core i5-7400 -3,5 Gh', '5000', '15', '75000', '13 November 2023', '', '', ''),
(93, 'BRG005', 'Core i5-7400 -3,5 Gh', '50000000000000000', '5', '250000000000000000', '19 November 2023', '', '', ''),
(94, 'BRG005', 'Core i5-7400 -3,5 Gh', '50000000000000000', '5', '250000000000000000', '19 November 2023', '', '', ''),
(95, 'BRG004', 'Core i5-7400 -3,5 Gh', '5000', '1', '5000', '21 November 2023', 'AD231120232009', '1500000', '295000'),
(96, 'BRG008', 'Power Bank Robot RT5600', '120000', '10', '1200000', '23 November 2023', 'AD231120232009', '1500000', '295000'),
(97, 'BRG009', 'Power Bank Robot RT5600', '120000', '10', '1200000', '23 November 2023', 'AD231120232015', '2000000', '800000'),
(98, 'BRG010', 'Power Bank Robot RT6800', '150000', '3', '450000', '23 November 2023', 'AD231120232019', '500000', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `foto`, `nama_toko`, `user`, `pass`, `alamat`, `telp`) VALUES
(1, 'logoo.png', 'Valencia Shop', 'admins', 'admins', 'Puri Loka 1', '2479742974927');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'kasir', 'c7911af3adbd12a035b289556d96470a', '2'),
(11, 'a', '0cc175b9c0f1b6a831c399e269772661', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `laporanku`
--
ALTER TABLE `laporanku`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `laporanku`
--
ALTER TABLE `laporanku`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

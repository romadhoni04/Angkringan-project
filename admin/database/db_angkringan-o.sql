-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 11:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_angkringan-o`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataangkringan`
--

CREATE TABLE `tb_dataangkringan` (
  `kode` varchar(8) NOT NULL,
  `namaangkringan` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nomor` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dataangkringan`
--

INSERT INTO `tb_dataangkringan` (`kode`, `namaangkringan`, `nama`, `nomor`, `alamat`, `deskripsi`) VALUES
('kode12', 'namang', 'fakhri', '0223255436', 'es teh', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Waiter'),
(3, 'Kasir'),
(4, 'Owner'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menuangkringan`
--

CREATE TABLE `tb_menuangkringan` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `menu` varchar(150) NOT NULL,
  `harga` varchar(150) NOT NULL,
  `stok` int(11) NOT NULL,
  `status_masakan` varchar(150) NOT NULL,
  `gambar_masakan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_menuangkringan`
--

INSERT INTO `tb_menuangkringan` (`id`, `kode`, `menu`, `harga`, `stok`, `status_masakan`, `gambar_masakan`) VALUES
(37, 'ABC', 'naskucing', '1000', 1, 'tersedia', 'naskucing.jpg'),
(39, 'ABC', 'Gorengan', '1000', 1, 'tersedia', 'Gorengan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `id_level` int(11) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `status`) VALUES
(1, 'deppa', '123', 'DEVA ARYA SAPUTRA', 1, 'aktif'),
(2, 'fakhriya', '123', 'FAKHRI RAHMAT WAHYUDIN', 1, 'aktif'),
(3, 'dhoni', '123', 'ROMADHONI', 1, 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dataangkringan`
--
ALTER TABLE `tb_dataangkringan`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_menuangkringan`
--
ALTER TABLE `tb_menuangkringan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_menuangkringan`
--
ALTER TABLE `tb_menuangkringan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

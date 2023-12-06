-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2015 at 08:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE IF NOT EXISTS `tb_file` (
  `id_file` varchar(5) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL,
  `kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama_file`, `deskripsi`, `tgl_upload`, `kategori`) VALUES
('F-001', 'Chrysanthemum.jpg', 'Chrysantheum', '2015-11-21', 'K-001'),
('F-002', 'Desert.jpg', 'Desert', '2015-11-21', 'K-002'),
('F-003', 'Hydrangeas.jpg', 'Hydrangeas', '2015-11-21', 'K-003'),
('F-004', 'Jellyfish.jpg', 'Jellyfish', '2015-11-21', 'K-004'),
('F-005', 'Koala.jpg', 'Koala', '2015-11-21', 'K-005'),
('F-006', 'Lighthouse.jpg', 'Lighthouse', '2015-11-21', 'K-006'),
('F-007', 'Penguins.jpg', 'Penguins', '2015-11-21', 'K-007'),
('F-008', 'Tulips.jpg', 'Tulips', '2015-11-21', 'K-008'),
('F-009', 'Desert.jpg', 'Desert', '2015-11-21', 'K-009'),
('F-010', 'Jellyfish.jpg', 'Jellyfish', '2015-11-21', 'K-010'),
('F-011', 'Desert.jpg', 'Desert', '2015-11-21', 'K-001'),
('F-012', 'Lighthouse.jpg', 'Lighthouse', '2015-11-21', 'K-001'),
('F-013', 'Tulips.jpg', 'Tulips', '2015-11-21', 'K-001'),
('F-014', 'Penguins.jpg', 'Penguins', '2015-11-21', 'K-001'),
('F-015', 'Koala.jpg', 'Koala', '2015-11-21', 'K-001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_file_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file_kategori`
--

INSERT INTO `tb_file_kategori` (`id_kategori`, `nama_kategori`) VALUES
('K-001', 'Foto Pribadi'),
('K-002', 'Foto Kelurga'),
('K-003', 'Foto Liburan'),
('K-004', 'Singapore Traveling'),
('K-005', 'Kampus'),
('K-006', 'Wisuda'),
('K-007', 'Bali Traveling'),
('K-008', 'Surfing'),
('K-009', 'Touring'),
('K-010', 'Mountain Bike');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nama_pengguna` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `password`) VALUES
('admin', 'Andi Hatmoko', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_file_kategori`
--
ALTER TABLE `tb_file_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

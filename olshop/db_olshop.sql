-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 02:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artis`
--

CREATE TABLE `tbl_artis` (
  `id_artis` int(11) NOT NULL,
  `nama_artis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artis`
--

INSERT INTO `tbl_artis` (`id_artis`, `nama_artis`) VALUES
(1, 'BTS'),
(2, 'ENHYPEN'),
(3, 'NU\'EST'),
(4, 'SEVENTEEN'),
(5, 'TREASURE'),
(6, 'TXT'),
(7, 'SUNMI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `id_artis` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_artis`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
(8, 6, 'Acrylic Keyring', 5, 235000, 'RANDOM MEMBER', 'acrylic_keyring_txt11.jpeg', 25),
(9, 1, 'ARMY Membership', 3, 325000, 'Membership Only', 'army_membership1.jpeg', 0),
(10, 1, 'ARMY Membership Kit', 3, 180000, 'Membership Kit Only', 'army_membership_kit11.jpeg', 600),
(14, 2, 'Border : Carnival (SET)', 1, 660000, 'READY STOCK', 'border_carnival11.jpeg', 1400),
(15, 2, 'Border : Day One', 1, 230000, 'READY STOCK | RANDOM', 'border_day_one11.jpeg', 290),
(16, 1, 'Aqua Wave with BTS', 5, 310000, 'PRE-ORDER', 'botol_aquawave11.jpeg', 100),
(17, 1, 'BTS Memories of 2019 DVD', 2, 825000, 'READY STOCK', 'bts_memories_2019111.jpeg', 500),
(18, 2, 'GGU GGU Package', 5, 360000, 'READY STOCK', 'ggu-ggu_package22.jpeg', 400),
(19, 4, 'Instant PC Set', 5, 210000, 'READY STOCK', 'svt_instant_pc_set11.jpeg', 150),
(20, 6, 'The Chaos Chapter : Freeze', 1, 295000, 'READY STOCK | RANDOM', 'chaos_random.jpeg', 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_barang`, `gambar`, `ket`) VALUES
(1, 15, 'enha_1.png', 'cover enhypen-border:day one versi 1'),
(2, 15, 'enha_2.png', 'cover enhypen-border:day one versi 2'),
(4, 14, 'enha_31.jpg', 'cover enhypen-border:carnival versi up'),
(8, 20, 'tcc_21.png', 'versi world'),
(9, 20, 'tcc_11.jpg', 'versi boy'),
(10, 20, 'tcc_31.png', 'versi you');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Album/CD'),
(2, 'DVD'),
(3, 'Fanclub'),
(4, 'Lightstick'),
(5, 'Merchandise'),
(6, 'Photobook');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'Haibe Shop', NULL, 'ITS Sukolilo', '082316351845');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'Riki', 'admin_riki', 'riki1234', 1),
(3, 'Merlin', 'user_merlin', 'merlin1234', 2),
(4, 'Beti', 'admin_beti', 'beti1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artis`
--
ALTER TABLE `tbl_artis`
  ADD PRIMARY KEY (`id_artis`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artis`
--
ALTER TABLE `tbl_artis`
  MODIFY `id_artis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

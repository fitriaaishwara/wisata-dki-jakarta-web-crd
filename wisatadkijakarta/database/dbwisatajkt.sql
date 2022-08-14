-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 11:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwisatajkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_identitas` bigint(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jml` int(10) NOT NULL,
  `jml_anak` int(10) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `nama`, `no_identitas`, `no_hp`, `tanggal`, `jml`, `jml_anak`, `nama_wisata`, `total_harga`, `tanggal_pesan`) VALUES
(38, 'Arya', 3712093647254623, '08561725364', '2022-07-27', 1, 1, 'Kepulauan Seribu', 37500, '2022-06-16'),
(44, 'chika', 123443445, '081281899228', '2022-06-25', 1, 3, 'Pantai Ancol', 62500, '0000-00-00'),
(47, 'bujang', 13445556666, '223334344343', '2022-06-29', 1, 1, 'Pantai Ancol', 37500, '0000-00-00'),
(48, 'tiaaa', 12333333, '232321111', '2022-06-22', 1, 1, 'Pantai Ancol', 37500, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `idw` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`idw`, `nama_wisata`, `gambar`, `deskripsi`, `youtube`, `harga`) VALUES
(1, 'Pantai Ancol', '969-ancol.jpg', 'Ancol adalah destinasi wisata terlengkap di Jakarta. Berlokasi di tepi pantai, Anda          akan disuguhkan pemandangan lepas pantai yang indah serta udara nan segar. Ditambah lagi dengan          sederet tempat rekreasi yang membuat Ancol menjadi destinasi terbaik bagi Anda dan keluarga.', 'https://www.youtube.com/embed/Nk3v7Ak9jxc', '25000'),
(2, 'Museum Kesaktian Pancasila', '333-kp.JPG', 'Monumen Pancasila Sakti dibangun atas gagasan Presiden ke-2 Indonesia, Soeharto. Dibangun di atas tanah seluas 14,6 hektare. Monumen ini dibangun dengan tujuan mengingat perjuangan para Pahlawan Revolusi yang berjuang mempertahankan ideologi negara Republik Indonesia, Pancasila dari ancaman ideologi komunis.', 'https://www.youtube.com/embed/7bKFB-WWoBk', '5000'),
(3, 'Kepulauan Seribu', '211-ks.jpg', 'Kepulauan Seribu adalah salah satu wilayah administrasi yang berada di sebelah utara Kota Jakarta. Meski jumlah pulau yang ada sebenarnya tidak sampai seribu, wilayah ini memiliki sederet pulau-pulau indah dengan daya tariknya sendiri. Pulau terdekat berjarak sekitar 45 Km dari Kota Jakarta. Karena ditempuh melalui jalur laut, maka anda tidak perlu terlibat kemacetan lalu lintas untuk mencapai objek wisata ini. Wilayah Kepulauan Seribu secara umum memiliki tiga peruntukan.', 'https://www.youtube.com/embed/jrugKsXrzso', '25000'),
(9, 'hai', '881-59543e42585b5e7b03dcbf54a4bc5650.jpg', 'halo', 'gggg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`idw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `idw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 05:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `gambar_buku` text DEFAULT NULL,
  `judul_buku` varchar(255) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `jumlah_halaman` int(11) DEFAULT NULL,
  `genre_buku` char(5) NOT NULL,
  `status_dibaca` char(5) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `gambar_buku`, `judul_buku`, `slug`, `penulis`, `jumlah_halaman`, `genre_buku`, `status_dibaca`, `id_user`) VALUES
(19, NULL, 'dsdfsd', 'dsdfsd', 'wedf', 2424, 'GB009', 'STS01', 1),
(20, NULL, 'dsfds', 'dsfds', 'fsdf', 453, 'GB010', 'STS01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre_buku`
--

CREATE TABLE `genre_buku` (
  `id_genre` char(5) NOT NULL,
  `id_jenis_buku` char(5) NOT NULL,
  `nama_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre_buku`
--

INSERT INTO `genre_buku` (`id_genre`, `id_jenis_buku`, `nama_genre`) VALUES
('GB001', 'JB002', 'Biografi'),
('GB002', 'JB002', 'Autobiografi'),
('GB003', 'JB002', 'Ensiklopedia'),
('GB004', 'JB002', 'Kamus'),
('GB005', 'JB002', 'Sejarah'),
('GB006', 'JB002', 'Sains'),
('GB007', 'JB002', 'Motivasi'),
('GB008', 'JB002', 'Filsafat'),
('GB009', 'JB001', 'Fantasi'),
('GB010', 'JB001', 'Romance'),
('GB011', 'JB001', 'SCI-FI'),
('GB012', 'JB001', 'Horor'),
('GB013', 'JB001', 'Petualangan'),
('GB014', 'JB001', 'Misteri');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenis` char(5) NOT NULL,
  `nama_jenis` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenis`, `nama_jenis`) VALUES
('JB001', 'Fiksi'),
('JB002', 'Non Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Deo Subarno', 'deosubarno', 'aprodeosubarno@gmail.com', 'kdsgnfrabtgfrkjfkjasrlwelslip9o');

-- --------------------------------------------------------

--
-- Table structure for table `status_buku`
--

CREATE TABLE `status_buku` (
  `id_status` char(5) NOT NULL,
  `nama_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_buku`
--

INSERT INTO `status_buku` (`id_status`, `nama_status`) VALUES
('STS01', 'Belum Dibaca'),
('STS02', 'Sudah Dibaca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `fk_statusdibaca` (`status_dibaca`),
  ADD KEY `fk_buku_pengguna` (`id_user`),
  ADD KEY `fk_buku_genrebuku` (`genre_buku`);

--
-- Indexes for table `genre_buku`
--
ALTER TABLE `genre_buku`
  ADD PRIMARY KEY (`id_genre`),
  ADD KEY `fk_jenis_genre` (`id_jenis_buku`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_pengguna` (`username`);

--
-- Indexes for table `status_buku`
--
ALTER TABLE `status_buku`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_genrebuku` FOREIGN KEY (`genre_buku`) REFERENCES `genre_buku` (`id_genre`),
  ADD CONSTRAINT `fk_buku_pengguna` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_statusdibaca` FOREIGN KEY (`status_dibaca`) REFERENCES `status_buku` (`id_status`) ON DELETE CASCADE;

--
-- Constraints for table `genre_buku`
--
ALTER TABLE `genre_buku`
  ADD CONSTRAINT `fk_jenis_genre` FOREIGN KEY (`id_jenis_buku`) REFERENCES `jenis_buku` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

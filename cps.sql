-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 11:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_libur`
--

CREATE TABLE IF NOT EXISTS `tb_libur` (
`id_libur` int(5) NOT NULL,
  `S` varchar(5) NOT NULL,
  `I` varchar(5) NOT NULL,
  `R` varchar(5) NOT NULL,
  `libur` varchar(5) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_libur`
--

INSERT INTO `tb_libur` (`id_libur`, `S`, `I`, `R`, `libur`, `tgl`) VALUES
(1, '2', '263', '80', '4', '2021-12-01'),
(2, '0', '247', '98', '5', '2021-12-02'),
(3, '21', '12', '12', '4', '2021-12-01'),
(4, '23', '1', '1', '2', '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_masuk` (
`id_masuk` int(5) NOT NULL,
  `id_perawat` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_modul`
--

CREATE TABLE IF NOT EXISTS `tb_modul` (
`id_modul` int(10) NOT NULL,
  `nama_modul` text NOT NULL,
  `file` text NOT NULL,
  `tgl_modul` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_modul`
--

INSERT INTO `tb_modul` (`id_modul`, `nama_modul`, `file`, `tgl_modul`, `status`) VALUES
(1, 'Pemprograman Website', 'coba.pdf', '2021-11-19 02:41:34', 'aktif'),
(2, 'akuntansi dasar', 'coba.pdf', '2021-11-19 02:41:37', 'aktif'),
(3, 'algoritma', 'coba1.pdf', '2021-12-09 06:11:26', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tb_pengumuman` (
`id_pengumuman` int(5) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul`, `isi`, `deadline`, `status`) VALUES
(1, 'Coba saja', 'Ini isi coba pengumuman ya', '2021-11-30', 'aktif'),
(2, 'Presentasi', 'Di beritahu untuk ngurusi presentasi', '2021-11-30', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjadwalan`
--

CREATE TABLE IF NOT EXISTS `tb_penjadwalan` (
`id_jadwal` int(5) NOT NULL,
  `id_perawat` int(5) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perawat`
--

CREATE TABLE IF NOT EXISTS `tb_perawat` (
`id_perawat` int(3) NOT NULL,
  `nama_perawat` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perawat`
--

INSERT INTO `tb_perawat` (`id_perawat`, `nama_perawat`, `jk`, `status`) VALUES
(1, 'Aska', 'l', '1'),
(2, 'Abi', 'p', '1'),
(3, 'Aca', 'p', '1'),
(4, 'Adi', 'l', '1'),
(5, 'Aenun', 'l', '1'),
(6, 'Afi', 'l', '1'),
(7, 'Agung', 'l', '1'),
(8, 'Ahwan', 'l', '1'),
(9, 'Ainun', 'p', '1'),
(10, 'Ajis', 'p', '1'),
(11, 'Badu', 'l', '1'),
(12, 'Bais', 'l', '1'),
(13, 'Badi', 'l', '1'),
(14, 'Bagong', 'l', '1'),
(15, 'Bahari', 'l', '1'),
(16, 'Bilal', 'p', '1'),
(17, 'Bilqis', 'l', '1'),
(18, 'Budi', 'p', '1'),
(19, 'Buyan', 'p', '1'),
(20, 'Burhan', 'l', '1'),
(21, 'Bais', 'p', '1'),
(22, 'Caca', 'l', '1'),
(23, 'Cici', 'l', '1'),
(24, 'Danu', 'p', '1'),
(25, 'Dani', 'p', '1'),
(26, 'Dono', 'p', '1'),
(27, 'Dahlan', 'l', '1'),
(28, 'Desy', 'p', '1'),
(29, 'Derby', 'p', '1'),
(30, 'Dedy', 'l', '1'),
(31, 'Dody', 'p', '1'),
(32, 'Elan', 'l', '1'),
(33, 'Ega', 'p', '1'),
(34, 'Egi', 'p', '1'),
(35, 'Elsa', 'p', '1'),
(36, 'Elvira', 'p', '1'),
(37, 'Esa', 'p', '1'),
(38, 'Eko', 'l', '1'),
(39, 'Farah', 'p', '1'),
(40, 'Fika', 'p', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prediksi_sir`
--

CREATE TABLE IF NOT EXISTS `tb_prediksi_sir` (
`id_prediksi` int(5) NOT NULL,
  `s` int(5) NOT NULL,
  `i` int(5) NOT NULL,
  `r` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prediksi_sir`
--

INSERT INTO `tb_prediksi_sir` (`id_prediksi`, `s`, `i`, `r`) VALUES
(1, 34, 250, 20),
(2, 26, 241, 38),
(3, 19, 230, 54),
(4, 15, 219, 70),
(5, 12, 207, 86),
(6, 9, 195, 100),
(7, 7, 183, 114),
(8, 6, 171, 127),
(9, 5, 160, 139),
(10, 4, 150, 150),
(11, 4, 140, 160),
(12, 3, 131, 170),
(13, 3, 122, 179),
(14, 2, 114, 188),
(15, 2, 106, 196),
(16, 2, 99, 203),
(17, 2, 92, 210),
(18, 2, 86, 217),
(19, 1, 80, 223),
(20, 1, 74, 228),
(21, 1, 69, 233),
(22, 1, 65, 238),
(23, 1, 60, 243),
(24, 1, 56, 247),
(25, 1, 52, 251),
(26, 1, 49, 255),
(27, 1, 45, 258),
(28, 1, 42, 261),
(29, 1, 39, 264),
(30, 1, 36, 267);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(100) NOT NULL,
  `nip_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `id_prodi` int(2) DEFAULT NULL,
  `id_angkatan` int(3) DEFAULT NULL,
  `level` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip_user`, `nama`, `password`, `cabang`, `id_prodi`, `id_angkatan`, `level`, `status`) VALUES
(1, '12345', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Jember', NULL, NULL, 'administrator', 'aktif'),
(2, 'dosen', 'dosenku ganteng', 'ce28eed1511f631af6b2a7bb0a85d636', 'Jember', 1, NULL, 'dosen', 'aktif'),
(7, 'mahasiswa', 'Muhammad Amin', '5787be38ee03a9ae5360f54d9026465f', 'Jember', 1, 1, 'mahasiswa', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_libur`
--
ALTER TABLE `tb_libur`
 ADD PRIMARY KEY (`id_libur`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
 ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tb_modul`
--
ALTER TABLE `tb_modul`
 ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
 ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_penjadwalan`
--
ALTER TABLE `tb_penjadwalan`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_perawat`
--
ALTER TABLE `tb_perawat`
 ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `tb_prediksi_sir`
--
ALTER TABLE `tb_prediksi_sir`
 ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_libur`
--
ALTER TABLE `tb_libur`
MODIFY `id_libur` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
MODIFY `id_masuk` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_modul`
--
ALTER TABLE `tb_modul`
MODIFY `id_modul` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
MODIFY `id_pengumuman` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_penjadwalan`
--
ALTER TABLE `tb_penjadwalan`
MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_perawat`
--
ALTER TABLE `tb_perawat`
MODIFY `id_perawat` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tb_prediksi_sir`
--
ALTER TABLE `tb_prediksi_sir`
MODIFY `id_prediksi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

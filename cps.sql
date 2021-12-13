-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 03:10 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_libur`
--

INSERT INTO `tb_libur` (`id_libur`, `S`, `I`, `R`, `libur`, `tgl`) VALUES
(1, '2', '263', '80', '4', '2021-12-01'),
(2, '0', '247', '98', '5', '2021-12-02');

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
  `status` int(5) NOT NULL,
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
(1, 'Aab', 'l', '1'),
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
MODIFY `id_libur` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

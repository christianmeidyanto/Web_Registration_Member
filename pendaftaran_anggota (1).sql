-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2015 at 01:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `nama_admn` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(2) NOT NULL,
  `id_admn` int(2) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `block` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_admn`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `password_2` (`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama_admn`, `password`, `level`, `id_admn`, `email`, `block`) VALUES
('KSPSB1', 'Christian', '1234', 1, 1, 'kspsb@gmail.com', 0),
('PUSAT1', 'Kewel', 'pusat', 2, 2, 'pusat@gmail.com', 0),
('KACAB', 'KACAB', 'KACAB', 3, 3, 'kacab@gmail.com', 0),
('asd', 'asd', '531', 1, 13, 'adasd@gmail', 0),
('hjg', 'sdf', 'hjg', 1, 15, 'asdasdfsdf@fsdsdf.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarananggota`
--

CREATE TABLE IF NOT EXISTS `pendaftarananggota` (
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nomr` int(15) NOT NULL,
  `keca` varchar(30) NOT NULL,
  `kelu` varchar(30) NOT NULL,
  `rt` int(2) NOT NULL,
  `rw` int(2) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `jenis_kerjaan` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `id_pend` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pend`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pendaftarananggota`
--

INSERT INTO `pendaftarananggota` (`nama`, `alamat`, `nomr`, `keca`, `kelu`, `rt`, `rw`, `jenis_kelamin`, `jenis_kerjaan`, `stat`, `id_pend`) VALUES
('Christian', 'Jl. Romas no. 32 Bandung ', 32214677, 'Bojong', 'Kidul', 2, 1, 'L', 'pengg', 'Ditolak', 1),
('asd', 'asd', 123, 'asd', 'asd', 1, 1, 'P', 'Pengangguran', '', 3),
('hengki', 'jln.aaa', 2147483647, 'pasir ayung timur', 'regol', 2, 4, 'P', 'Pengangguran', '', 7),
('sa', 'sd', 343, 'sd', 'sdasd', 2, 2, 'P', 'Pengangguran', '', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

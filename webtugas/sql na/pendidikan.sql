-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Des 2015 pada 16.19
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `identitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `nama` varchar(30) NOT NULL,
  `dasar` varchar(25) NOT NULL,
  `menengah` varchar(30) NOT NULL,
  `atas` varchar(30) NOT NULL,
  `tinggi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`nama`, `dasar`, `menengah`, `atas`, `tinggi`) VALUES
('Julaeha', 'SDN CISARUA', 'SMPN CISARUA', 'SMAN CISARUA', 'PIKSI GANESHA'),
('JAJANG', 'SDN CIANJUR', 'SMPN BANDUNG', 'SMKN 13 JAKARTA', 'UNPAD'),
('JHOSON', 'SDN MATARAM', 'SMPN MATARAM', 'SMA MATARAM', 'UGM JOGJA'),
('JHOSON', 'SDN MATARAM', 'SMPN MATARAM', 'SMA MATARAM', 'UGM JOGJA'),
('SAMUEL', 'SDN GARUT', 'SMP GARUT', 'SMA GARUT', 'UNIGA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` int(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`user_id`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `no_telp`) VALUES
(5, 'ZAENAL ARIEF', '0000-00-00', 'GARUT SELATAN', 'PRIA', 23223221),
(7, 'WAWAS', '2000-02-23', 'NAMER', 'PRIA', 8978766),
(8, 'JAJANG', '2000-04-23', 'BANDUNG', 'WANITA', 9889988),
(9, 'JUJUN', '1994-09-16', 'BANDUNG', 'PRIA', 21212221),
(10, 'JHASON', '2011-11-11', 'SOLO', 'PRIA', 787776677),
(11, 'SAMUEL', '1998-04-23', 'GARUT SELATAN', 'PRIA', 89888777);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

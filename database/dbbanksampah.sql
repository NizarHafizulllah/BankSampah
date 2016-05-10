-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2016 pada 20.15
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbanksampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `id_pengepul` int(11) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `password`, `nama`, `alamat`, `no_hp`, `id_pengepul`, `level`) VALUES
(1, 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', 'Admin', 'Jln. Osap Sio', '08191288387', 1, 1),
(2, 'pengepul', 'c20ad4d76fe97759aa27a0c99bff6710', 'nizar Hafizullah', 'Jln. Mangga', '0819237723', 1, 2),
(3, '081917666600', '63b7a5d783f16763c6a75041fa51c65a', 'sdasdasasdasdasd', 'sdadsadasdasd', '081917666600', 0, 2),
(4, '0000', '4a7d1ed414474e4033ac29ccb8653d9b', 'fitrah arisandi ', 'Desa uta setoe berang', '0000', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

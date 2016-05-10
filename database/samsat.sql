-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2016 pada 11.25
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `birojasadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `samsat`
--

CREATE TABLE IF NOT EXISTS `samsat` (
  `id_polda` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `samsat`
--

INSERT INTO `samsat` (`id_polda`, `id`, `nama`, `alamat`, `telp`) VALUES
(16, 2, 'Nizar Hafizullah', 'jln. mangga', 'dasdwqw'),
(15, 4, 'dfsfsd', 'sdfsd', 'sdfsd'),
(16, 5, 'dasdad', 'asdasd', 'asdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `samsat`
--
ALTER TABLE `samsat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samsat`
--
ALTER TABLE `samsat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

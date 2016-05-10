-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2016 pada 03.29
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
-- Struktur dari tabel `estimasi_bbn_satu`
--

CREATE TABLE IF NOT EXISTS `estimasi_bbn_satu` (
`id` int(11) NOT NULL,
  `tipe_kendaraan` varchar(100) NOT NULL,
  `tahun_kendaraan` varchar(5) NOT NULL,
  `warna_tnkb` varchar(50) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `rp_daftar_stnk` varchar(50) NOT NULL,
  `rp_daftar_bpkb` varchar(50) NOT NULL,
  `rp_pajak_kendaraan` varchar(50) NOT NULL,
  `rp_admin_fee` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `estimasi_bbn_satu`
--

INSERT INTO `estimasi_bbn_satu` (`id`, `tipe_kendaraan`, `tahun_kendaraan`, `warna_tnkb`, `id_polda`, `id_samsat`, `rp_daftar_stnk`, `rp_daftar_bpkb`, `rp_pajak_kendaraan`, `rp_admin_fee`) VALUES
(6, 'DGWU8817', '2011', 'HITAM', 13, 7, '60.000', '90.000', '90.000', '20.000'),
(12, 'JDK1209', '2004', 'KUNING', 13, 7, '20.000', '20.000', '50.000', '5.000'),
(14, 'JWK0923', '2005', 'MERAH', 28, 8, '20.000', '30.000', '40.000', '5.000'),
(15, 'JHG002', '2005', 'BIRU', 16, 10, '20.000', '20.000', '20.000', '20.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estimasi_bbn_satu`
--
ALTER TABLE `estimasi_bbn_satu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estimasi_bbn_satu`
--
ALTER TABLE `estimasi_bbn_satu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

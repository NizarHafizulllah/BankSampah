-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2016 pada 12.04
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
-- Struktur dari tabel `bj_bbn_dua`
--

CREATE TABLE IF NOT EXISTS `bj_bbn_dua` (
`id` int(11) NOT NULL,
  `no_rangka` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `no_faktur` varchar(100) NOT NULL,
  `tgl_faktur` varchar(15) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `silinder` varchar(50) NOT NULL,
  `bahan_bakar` varchar(30) NOT NULL,
  `tahun_buat` varchar(5) NOT NULL,
  `kode_dealer` varchar(11) NOT NULL,
  `nama_dealer` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat_pemilik` text NOT NULL,
  `id_desa` char(13) NOT NULL,
  `id_kecamatan` char(13) NOT NULL,
  `id_kota` char(13) NOT NULL,
  `id_provinsi` char(13) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `rp_daftar_stnk` varchar(20) NOT NULL,
  `rp_daftar_bpkb` varchar(20) NOT NULL,
  `rp_pajak_kendaraan` varchar(20) NOT NULL,
  `rp_admin_fee` varchar(20) NOT NULL,
  `tgl_entri` varchar(20) NOT NULL,
  `user_entri` int(20) NOT NULL,
  `id_birojasa` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `bj_bbn_dua`
--

INSERT INTO `bj_bbn_dua` (`id`, `no_rangka`, `no_mesin`, `no_faktur`, `tgl_faktur`, `merek`, `type`, `model`, `jenis`, `warna`, `silinder`, `bahan_bakar`, `tahun_buat`, `kode_dealer`, `nama_dealer`, `nama_pemilik`, `alamat_pemilik`, `id_desa`, `id_kecamatan`, `id_kota`, `id_provinsi`, `id_polda`, `id_samsat`, `rp_daftar_stnk`, `rp_daftar_bpkb`, `rp_pajak_kendaraan`, `rp_admin_fee`, `tgl_entri`, `user_entri`, `id_birojasa`) VALUES
(1, '1283993770032', 'ASDAA', 'dfsdfsfdsdfsd', '04/11/2016', 'adas', 'asdas', 'adasd', 'sdadas', 'asdasd', 'anafda', 'asdasd', 'asdas', 'aaasda', 'sadda', 'asdasd', 'asdasdas', '21_5_2_2001', '21_5_2', '21_5', '21', 16, 10, '', '', '', '', '04/14/2016', 4, 33),
(2, 'KDFOWLL', 'IQ98920KE', 'KD993', '04/13/2016', 'YAMAHA', 'RODA 2', 'NH9288', 'VARIO 125 CC', 'BIRU', 'KDIE00', 'BENSIN', '2010', 'IDKK9929', 'TUGU MAS', 'M. JIHAD', 'BATU TERING ', '52_4_10_2004', '52_4_10', '52_4', '52', 16, 10, '', '', '', '', '04/12/2016', 4, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bj_bbn_dua`
--
ALTER TABLE `bj_bbn_dua`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bj_bbn_dua`
--
ALTER TABLE `bj_bbn_dua`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

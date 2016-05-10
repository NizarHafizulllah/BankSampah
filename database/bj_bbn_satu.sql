-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Apr 2016 pada 20.01
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
-- Struktur dari tabel `bj_bbn_satu`
--

CREATE TABLE IF NOT EXISTS `bj_bbn_satu` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `bj_bbn_satu`
--

INSERT INTO `bj_bbn_satu` (`id`, `no_rangka`, `no_mesin`, `no_faktur`, `tgl_faktur`, `merek`, `type`, `model`, `jenis`, `warna`, `silinder`, `bahan_bakar`, `tahun_buat`, `kode_dealer`, `nama_dealer`, `nama_pemilik`, `alamat_pemilik`, `id_desa`, `id_kecamatan`, `id_kota`, `id_provinsi`, `id_polda`, `id_samsat`, `rp_daftar_stnk`, `rp_daftar_bpkb`, `rp_pajak_kendaraan`, `rp_admin_fee`, `tgl_entri`, `user_entri`, `id_birojasa`) VALUES
(1, 'NHK8263', 'MSN9374030KDK', 'FKTR03884', '11/26/0001', 'DJKI99E', '84950DKK', 'BARU', 'SATRIA F U 120', 'HITAM', 'JDKIEOIO00', 'BENSIN', '2011', 'JKRYYYE', 'SDAASD', 'ABDURAHMAN', 'JLN. LINTAS SUMBAWA BIMA', '52_4_8_1008', '52_4_8', '52_4', '52', 16, 2, '', '', '', '', '04/13/2016', 1, 33),
(2, 'adasd', 'sdas', 'dasda', '01/05/0000', 'sdsd', 'asda', 'ada', 'sadas', 'asdas', 'asdasd', 'asdasd', 'asdsa', 'dada', 'asda', 'asdas', 'asdas', '17_3_16_2003', '17_3_16', '17_3', '17', 16, 2, '', '', '', '', '04/06/2016', 4, 33),
(3, 'JK0238DJ', 'FKE---3-0499', '98RG', '03/21/2016', 'SATRIA F U', 'HONDA', 'KDOA', 'TERBARU', 'HITAM', 'BARU', 'BENSIN', '2011', 'DLR192', 'DJKIWIE', 'DKSOWE', 'JLN. MANGGIS DUA ', '34_71_10_1002', '34_71_10', '34_71', '34', 16, 2, '', '', '', '', '04/05/2016', 1, 32),
(4, 'sad', 'asdasd', 'dada', '04/14/2016', 'adasd', 'dadasgfdg', 'fdeewrw', 'werwerwe', 'rwerwer', 'werwer', 'werwe', 'ewrwe', 'werwer', 'werwer', 'werwer', 'werwerwer', '32_5_29_2011', '32_5_29', '32_5', '32', 16, 2, '', '', '', '', '04/07/2016', 1, 33),
(5, 'asd', 'asdasdasdasd', 'asdasd', '09/06/2012', 'fdf', 'fdf', 'ghghgj', 'sfsdf', 'sdfsdf', 'ssfgerff', 'sfdfsdf', 'sdfsd', 'sdhrfgre', 'fgdgd', 'fdgdfgdf', 'dqweqwe', '75_5_6_2004', '75_5_6', '75_5', '75', 16, 2, '', '', '', '', '04/07/2016', 4, 33),
(6, 'adasd', 'dasdas', 'asdasd', '10/23/2010', 'ad', 'adsad', 'dwqw', 'ewgfdg', 'dfdf', 'dgdq', 'vfgfgre', 'adqwe', 'adqwe', 'gda', 'adad', 'dageq', '21_72_2_1001', '21_72_2', '21_72', '21', 16, 10, '', '', '', '', '04/05/2016', 1, 33),
(7, 'gyftyftyf', 'dgdfg', 'dfgdfg', '06/07/2012', 'fkokoksd', 'kajajijoakf', 'asdaojdanm', 'fgdgdf', 'dfgdf', 'dfgdfg', 'fdgdf', 'dfg', 'dsdfs', 'sdfsd', 'sdfsdf', 'sdfsdf', '75_5_8_2004', '75_5_8', '75_5', '75', 16, 10, '', '', '', '', '04/05/2016', 4, 33),
(8, 'HELLO', 'ASDAA', 'DSDQE', '03/31/2016', 'ASDASD', 'SDASD', 'ADASD', 'ADASD', 'DASD', 'ASDASD', 'ASDSAD', 'ASDAS', 'DAD', 'ASDASD', 'GDGD', 'DFSDFWERF', '36_2_18_2004', '36_2_18', '36_2', '36', 27, 9, '', '', '', '', '04/21/2016', 1, 0),
(9, 'HELLO', 'dasdas', 'ASDASD', '02/23/2015', 'ASDASD', 'AGAD', 'AFAD', 'ADAS', 'BFDVC', 'DFDF', 'ASDASD', 'ADASD', 'FAFAWQ', 'ASDAD', 'AQWJG', 'SDFSDF', '34_71_9_1003', '34_71_9', '34_71', '34', 27, 9, '', '', '', '', '04/14/2016', 4, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bj_bbn_satu`
--
ALTER TABLE `bj_bbn_satu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bj_bbn_satu`
--
ALTER TABLE `bj_bbn_satu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

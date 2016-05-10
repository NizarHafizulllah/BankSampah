/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.20 : Database - birojasadb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `bj_bbn_dua` */

DROP TABLE IF EXISTS `bj_bbn_dua`;

CREATE TABLE `bj_bbn_dua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_rangka` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `no_faktur` varchar(100) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `id_merek` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_model` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_warna` int(11) NOT NULL,
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
  `rp_daftar` decimal(11,2) NOT NULL,
  `rp_biaya` decimal(11,2) NOT NULL,
  `rp_admin_fee` decimal(11,2) NOT NULL,
  `tgl_entri` date NOT NULL,
  `user_entri` int(20) NOT NULL,
  `id_birojasa` int(11) NOT NULL,
  `id_perubahan` int(11) NOT NULL,
  `kembali` decimal(11,2) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `bj_bbn_dua` */

insert  into `bj_bbn_dua`(`id`,`no_rangka`,`no_mesin`,`no_faktur`,`tgl_faktur`,`id_merek`,`type`,`id_model`,`id_jenis`,`id_warna`,`silinder`,`bahan_bakar`,`tahun_buat`,`kode_dealer`,`nama_dealer`,`nama_pemilik`,`alamat_pemilik`,`id_desa`,`id_kecamatan`,`id_kota`,`id_provinsi`,`id_polda`,`id_samsat`,`rp_daftar`,`rp_biaya`,`rp_admin_fee`,`tgl_entri`,`user_entri`,`id_birojasa`,`id_perubahan`,`kembali`,`status`,`tgl_update`) values (5,'SDFSD','SDFSD','DFSDF','2016-04-21','SUZUKI','KDJFFNKKL',2,2,178,'SDFSDF','FSDFS','2009','SDFSD','FSDFSD','FSDFSD','FDFS','31_71_3_1005','31_71_3','31_71','31',16,10,'35000.00','20.00','5.00','2016-04-12',1,33,2,'0.00',0,'0000-00-00 00:00:00'),(6,'JBNFJANSJD','DKJNAJN','LMNDKM','2016-04-13','HONDA','KDJFFNKKL',1,1,178,'ASDAD','ADASD','2009','DASD','DASDAWQE','ASDA','ASDASDA','18_12_7_2001','18_12_7','18_12','18',16,10,'35000.00','20.00','5.00','2016-04-20',4,33,2,'30000.00',1,'2016-04-21 01:16:24');

/*Table structure for table `bj_bbn_satu` */

DROP TABLE IF EXISTS `bj_bbn_satu`;

CREATE TABLE `bj_bbn_satu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_rangka` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `no_faktur` varchar(100) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `id_merek` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_model` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_warna` int(11) NOT NULL,
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
  `rp_daftar_stnk` decimal(11,2) NOT NULL,
  `rp_daftar_bpkb` decimal(11,2) NOT NULL,
  `rp_pajak_kendaraan` decimal(11,2) NOT NULL,
  `rp_admin_fee` decimal(11,2) NOT NULL,
  `tgl_entri` date NOT NULL,
  `user_entri` int(20) NOT NULL,
  `id_birojasa` int(11) NOT NULL,
  `kembali` decimal(11,2) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `bj_bbn_satu` */

insert  into `bj_bbn_satu`(`id`,`no_rangka`,`no_mesin`,`no_faktur`,`tgl_faktur`,`id_merek`,`type`,`id_model`,`id_jenis`,`id_warna`,`silinder`,`bahan_bakar`,`tahun_buat`,`kode_dealer`,`nama_dealer`,`nama_pemilik`,`alamat_pemilik`,`id_desa`,`id_kecamatan`,`id_kota`,`id_provinsi`,`id_polda`,`id_samsat`,`rp_daftar_stnk`,`rp_daftar_bpkb`,`rp_pajak_kendaraan`,`rp_admin_fee`,`tgl_entri`,`user_entri`,`id_birojasa`,`kembali`,`status`,`tgl_update`) values (3,'JK0238DJ','JFSIIDM','98RG','2016-04-13','HONDA','HONDA',1,1,238,'BARU','BENSIN','2011','DLR192','DJKIWIE','DKSOWE','JLN. MANGGIS DUA ','34_71_10_1002','34_71_10','34_71','34',16,2,'0.00','0.00','0.00','0.00','0000-00-00',1,32,'0.00',0,'0000-00-00 00:00:00'),(8,'HELLO','ASDAA','DSDQE','2016-04-12','YAMAHA','SDASD',2,2,238,'ASDASD','ASDSAD','ASDAS','DAD','ASDASD','GDGD','DFSDFWERF','36_2_18_2004','36_2_18','36_2','36',27,9,'0.00','0.00','0.00','0.00','0000-00-00',4,33,'30000.00',1,'2016-04-21 21:50:32'),(17,'SDL,FSOL,G','KJHFKIEIR','KSDJIWE','2016-03-02','SUZUKI','MHK092',1,1,1455,'GDFSER','BENSIN','2011','EFSFDSFE','DSFDCSDFE','ABDURAHMAN','JNKOIJKNJNIMOI','18_4_10_2001','18_4_10','18_4','18',13,7,'60.00','20.00','90.00','20.00','2016-07-01',4,33,'40000.00',0,'2016-04-21 00:55:16');

/*Table structure for table `estimasi_bbn_dua` */

DROP TABLE IF EXISTS `estimasi_bbn_dua`;

CREATE TABLE `estimasi_bbn_dua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kendaraan` varchar(100) NOT NULL,
  `tahun_kendaraan` varchar(5) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `id_perubahan` int(11) NOT NULL,
  `rp_pendaftaran` decimal(11,2) NOT NULL,
  `rp_perubahan` decimal(11,2) NOT NULL,
  `rp_admin_fee` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `estimasi_bbn_dua` */

insert  into `estimasi_bbn_dua`(`id`,`tipe_kendaraan`,`tahun_kendaraan`,`id_warna`,`id_polda`,`id_samsat`,`id_perubahan`,`rp_pendaftaran`,`rp_perubahan`,`rp_admin_fee`) values (7,'KDJFFNKKL','2009',178,16,10,2,'35000.00','20000.00','5000.00');

/*Table structure for table `estimasi_bbn_satu` */

DROP TABLE IF EXISTS `estimasi_bbn_satu`;

CREATE TABLE `estimasi_bbn_satu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kendaraan` varchar(100) NOT NULL,
  `tahun_kendaraan` varchar(5) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `rp_daftar_stnk` decimal(11,2) NOT NULL,
  `rp_daftar_bpkb` decimal(11,2) NOT NULL,
  `rp_pajak_kendaraan` decimal(11,2) NOT NULL,
  `rp_admin_fee` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `estimasi_bbn_satu` */

insert  into `estimasi_bbn_satu`(`id`,`tipe_kendaraan`,`tahun_kendaraan`,`id_warna`,`id_polda`,`id_samsat`,`rp_daftar_stnk`,`rp_daftar_bpkb`,`rp_pajak_kendaraan`,`rp_admin_fee`) values (6,'MHK092','2011',1455,13,7,'70000.00','50000.00','40000.00','5000.00'),(12,'JNDKJSNJDW','2004',1398,13,7,'50000.00','30000.00','20000.00','5000.00'),(14,'KDLLFIIE','2005',2,28,8,'50000.00','50000.00','30000.00','5000.00'),(15,'LKDFIEIJFDNFKDF','2005',920,16,10,'20000.00','20000.00','20000.00','20000.00'),(16,'DGWU881','2000',178,16,10,'50000.00','30000.00','20000.00','10000.00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

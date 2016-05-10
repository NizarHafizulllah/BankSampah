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
  `id_birojasa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `bj_bbn_dua` */

insert  into `bj_bbn_dua`(`id`,`no_rangka`,`no_mesin`,`no_faktur`,`tgl_faktur`,`merek`,`type`,`model`,`jenis`,`warna`,`silinder`,`bahan_bakar`,`tahun_buat`,`kode_dealer`,`nama_dealer`,`nama_pemilik`,`alamat_pemilik`,`id_desa`,`id_kecamatan`,`id_kota`,`id_provinsi`,`id_polda`,`id_samsat`,`rp_daftar_stnk`,`rp_daftar_bpkb`,`rp_pajak_kendaraan`,`rp_admin_fee`,`tgl_entri`,`user_entri`,`id_birojasa`) values (1,'1283993770032','ASDAA','dfsdfsfdsdfsd','04/11/2016','adas','asdas','adasd','sdadas','asdasd','anafda','asdasd','asdas','aaasda','sadda','asdasd','asdasdas','21_5_2_2001','21_5_2','21_5','21',16,10,'','','','','04/14/2016',4,33),(2,'KDFOWLL','IQ98920KE','KD993','04/13/2016','YAMAHA','RODA 2','NH9288','VARIO 125 CC','BIRU','KDIE00','BENSIN','2010','IDKK9929','TUGU MAS','M. JIHAD','BATU TERING ','52_4_10_2004','52_4_10','52_4','52',16,10,'','','','','04/12/2016',4,33);

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
  `rp_daftar_stnk` varchar(20) NOT NULL,
  `rp_daftar_bpkb` varchar(20) NOT NULL,
  `rp_pajak_kendaraan` varchar(20) NOT NULL,
  `rp_admin_fee` varchar(20) NOT NULL,
  `tgl_entri` date NOT NULL,
  `user_entri` int(20) NOT NULL,
  `id_birojasa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `bj_bbn_satu` */

insert  into `bj_bbn_satu`(`id`,`no_rangka`,`no_mesin`,`no_faktur`,`tgl_faktur`,`id_merek`,`type`,`id_model`,`id_jenis`,`id_warna`,`silinder`,`bahan_bakar`,`tahun_buat`,`kode_dealer`,`nama_dealer`,`nama_pemilik`,`alamat_pemilik`,`id_desa`,`id_kecamatan`,`id_kota`,`id_provinsi`,`id_polda`,`id_samsat`,`rp_daftar_stnk`,`rp_daftar_bpkb`,`rp_pajak_kendaraan`,`rp_admin_fee`,`tgl_entri`,`user_entri`,`id_birojasa`) values (3,'JK0238DJ','FKE---3-0499','98RG','0000-00-00','0','HONDA',0,0,0,'BARU','BENSIN','2011','DLR192','DJKIWIE','DKSOWE','JLN. MANGGIS DUA ','34_71_10_1002','34_71_10','34_71','34',16,2,'','','','','0000-00-00',1,32),(8,'HELLO','ASDAA','DSDQE','0000-00-00','0','SDASD',0,0,0,'ASDASD','ASDSAD','ASDAS','DAD','ASDASD','GDGD','DFSDFWERF','36_2_18_2004','36_2_18','36_2','36',27,9,'','','','','0000-00-00',1,0),(12,'sdasd','asdas','asdasd','0000-00-00','0','sadasdasdasd',0,0,0,'asdasd','ASDASD','asdas','asdas','asdasd','asdasd','asdasd','17_9_5_2012','17_9_5','17_9','17',27,9,'','','','','0000-00-00',4,33),(14,'FDFASDASD','DASDASD','ADASD','0000-00-00','0','DGWU8817',0,0,0,'ADASD','ADAS','2011','DASDASD','ADAD','ADASD','ADASDAS','31_71_8_1003','31_71_8','31_71','31',13,7,'60.000','90.000','90.000','20.000','0000-00-00',6,24),(15,'dassd','asdasd','asdasd','2016-03-31','SUZUKI','dasdasd',1,1,238,'asdasd','adas','2011','dfsf','sdfsdf','sdfsdfsd','fdsdfsdfsdf','75_5_2_2011','75_5_2','75_5','75',16,10,'','','','','2016-04-12',4,33),(16,'089234KSDFK','KFS90D3KL4',';OFDI8S0FE','2016-04-04','SUZUKI','JFNSDSD',2,2,460,'OPSDFSERE','BENSIN','2013','FNOIA9MD','MFPKIODOF','JDNKFJ9','LKNSD;FK[EMKRF','33_1_23_1001','33_1_23','33_1','33',13,7,'','','','','2016-04-06',1,33);

/*Table structure for table `estimasi_bbn_dua` */

DROP TABLE IF EXISTS `estimasi_bbn_dua`;

CREATE TABLE `estimasi_bbn_dua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipe` int(11) NOT NULL,
  `tahun_kendaraan` varchar(5) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `id_perubahan` int(11) NOT NULL,
  `rp_pendaftaran` varchar(20) NOT NULL,
  `rp_perubahan` varchar(20) NOT NULL,
  `rp_admin_fee` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `estimasi_bbn_dua` */

insert  into `estimasi_bbn_dua`(`id`,`id_tipe`,`tahun_kendaraan`,`id_warna`,`id_polda`,`id_samsat`,`id_perubahan`,`rp_pendaftaran`,`rp_perubahan`,`rp_admin_fee`) values (5,1,'2002',2,16,10,4,'21.000','30.000','30.000');

/*Table structure for table `estimasi_bbn_satu` */

DROP TABLE IF EXISTS `estimasi_bbn_satu`;

CREATE TABLE `estimasi_bbn_satu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_kendaraan` varchar(100) NOT NULL,
  `tahun_kendaraan` varchar(5) NOT NULL,
  `id_warna` int(11) NOT NULL,
  `id_polda` int(11) NOT NULL,
  `id_samsat` int(11) NOT NULL,
  `rp_daftar_stnk` varchar(50) NOT NULL,
  `rp_daftar_bpkb` varchar(50) NOT NULL,
  `rp_pajak_kendaraan` varchar(50) NOT NULL,
  `rp_admin_fee` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `estimasi_bbn_satu` */

insert  into `estimasi_bbn_satu`(`id`,`tipe_kendaraan`,`tahun_kendaraan`,`id_warna`,`id_polda`,`id_samsat`,`rp_daftar_stnk`,`rp_daftar_bpkb`,`rp_pajak_kendaraan`,`rp_admin_fee`) values (6,'1','2011',2,13,7,'60.000','90.000','90.000','20.000'),(12,'1','2004',2,13,7,'20.000','20.000','50.000','5.000'),(14,'1','2005',2,28,8,'20.000','30.000','40.000','5.000'),(15,'1','2005',2,16,10,'20.000','20.000','20.000','20.000');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

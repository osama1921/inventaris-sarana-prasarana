-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ukom
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detail_pinjam`
--

DROP TABLE IF EXISTS `detail_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pinjam` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_inventaris` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_peminjaman` varchar(100) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pinjam`
--

LOCK TABLES `detail_pinjam` WRITE;
/*!40000 ALTER TABLE `detail_pinjam` DISABLE KEYS */;
INSERT INTO `detail_pinjam` VALUES (1,'I-12738265',1,'PI-101261845'),(2,'I-12738265',1,'PI-118061583'),(3,'I-12738265',1,'PI-25299451'),(4,'I-12738265',1,'PI-40226691'),(5,'I-12738265',1,'PI-62790860'),(6,'I-12738265',1,'PI-62858677'),(7,'I-12738265',1,'PI-115269790'),(8,'I-12738265',1,'PI-115525987'),(9,'I-90754003',1,'PI-25276845'),(10,'I-90754003',1,'PI-4279999'),(11,'I-46292530',2,'PI-80502357'),(12,'I-70849761',1,'PI-58443047'),(13,'I-70849761',1,'PI-76772431');
/*!40000 ALTER TABLE `detail_pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventaris`
--

DROP TABLE IF EXISTS `inventaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventaris` (
  `id_inventaris` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_jenis` int(100) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(100) NOT NULL,
  `kode_inventaris` varchar(100) NOT NULL,
  `id_petugas` varchar(100) NOT NULL,
  `status` enum('Sekali Pakai','Tidak Sekali Pakai','','') NOT NULL,
  PRIMARY KEY (`id_inventaris`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventaris`
--

LOCK TABLES `inventaris` WRITE;
/*!40000 ALTER TABLE `inventaris` DISABLE KEYS */;
INSERT INTO `inventaris` VALUES ('I-109328281','Kertas A4','Baik','-',23,4,'2019-04-17',4,'3','PG-119225772','Sekali Pakai'),('I-46292530','Staples Kecil','Baik','-',16,4,'2019-04-17',4,'2','PG-119225772','Tidak Sekali Pakai'),('I-52305623','Sapu','Baik','-',10,7,'2019-04-18',4,'K1','PG-110247576','Tidak Sekali Pakai'),('I-70849761','Gergaji','Baik','-',0,6,'2019-04-18',4,'AK1','PG-110247576','Tidak Sekali Pakai'),('I-87061753','Kertas Buram','Baik','-',30,4,'2019-04-17',4,'5','PG-110247576','Sekali Pakai'),('I-90754003','Proyektor','baik','Merek Infocus',10,5,'2019-04-17',4,'1','PG-110247576','Tidak Sekali Pakai');
/*!40000 ALTER TABLE `inventaris` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_inventaris` AFTER UPDATE ON `inventaris` FOR EACH ROW BEGIN
INSERT INTO log_inventaris VALUES (null,OLD.id_inventaris, OLD.nama, OLD.jumlah - NEW.jumlah);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `inventaris_keluar`
--

DROP TABLE IF EXISTS `inventaris_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventaris_keluar` (
  `id_keluar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kondisi` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_jenis` int(100) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_ruang` int(100) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `id_inventaris` varchar(100) NOT NULL,
  PRIMARY KEY (`id_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventaris_keluar`
--

LOCK TABLES `inventaris_keluar` WRITE;
/*!40000 ALTER TABLE `inventaris_keluar` DISABLE KEYS */;
INSERT INTO `inventaris_keluar` VALUES ('IK-114516270','Kertas A4','Baik','-',1,4,'2019-04-17',5,'PE-107482156','I-109328281'),('IK-115480776','Kertas A4','Baik','2',1,4,'2019-04-18',6,'PE-94826781','I-109328281'),('IK-26471175','Kertas A4','Baik','Untuk Ujian Kompetensi',1,4,'2019-04-18',5,'PE-107482156','I-109328281'),('IK-29266736','Staples Kecil','Baik','Untuk Ujian Kompetensi',2,4,'2019-04-18',5,'PE-107482156','I-46292530'),('IK-3093204','Kertas A4','Baik','-',2,4,'2019-04-18',6,'PE-94826781','I-109328281'),('IK-3707323','Kertas A4','Baik','Untuk Ujian',1,4,'2019-04-18',6,'PE-36368666','I-109328281'),('IK-57211041','Kertas A4','Baik','-',1,4,'2019-04-18',7,'PE-28950257','I-109328281'),('IK-76957044','Gergaji','Baik','-',1,6,'2019-04-18',8,'PE-94969950','I-70849761');
/*!40000 ALTER TABLE `inventaris_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis`
--

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` VALUES (4,'ATK','1','Segala Alat Tulis Kantor Contoh: Buku, Kertas DLL'),(5,'Alat Elektronik','2','Segala alat-alat elektronic, contoh : Proyektor Speaker dll'),(6,'Alat Kontruksi','1','Seperti : Palu, Gergaji Dll');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laporan`
--

DROP TABLE IF EXISTS `laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nip` int(100) NOT NULL,
  `jabatan` enum('Kepala Sekolah','Wakasek Sarana Dan Prasarana','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laporan`
--

LOCK TABLES `laporan` WRITE;
/*!40000 ALTER TABLE `laporan` DISABLE KEYS */;
INSERT INTO `laporan` VALUES (5,'Edi Jun',2147483647,'Wakasek Sarana Dan Prasarana'),(6,'H. Sudi, MM',2147483647,'Kepala Sekolah');
/*!40000 ALTER TABLE `laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_inventaris`
--

DROP TABLE IF EXISTS `log_inventaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_inventaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inventaris` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_inventaris`
--

LOCK TABLES `log_inventaris` WRITE;
/*!40000 ALTER TABLE `log_inventaris` DISABLE KEYS */;
INSERT INTO `log_inventaris` VALUES (1,'I-109328281','Kertas A4',1),(2,'I-109328281','Kertas A4',1),(3,'I-109328281','Kertas A4',2),(4,'I-70849761','Gergaji',1),(5,'I-70849761','Gergaji',1),(6,'I-70849761','Gergaji',-1),(7,'I-70849761','Gergaji',1),(8,'I-109328281','Kertas A4',1);
/*!40000 ALTER TABLE `log_inventaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id_pegawai` varchar(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES ('PE-107482156','Teguh Sugiarto, ST','',' Kp. Cadasari','teguh123','teguh123'),('PE-28950257','Ir. Hj. Yelvalinda','088827819','Komplek BPI','yelva123','yelva123'),('PE-36368666','Budi','','KP. Kaduhejo','budi','budi123'),('PE-94826781','M Juanda, MM','0889278123','Kadulisung..','juanda123','juanda123'),('PE-94969950','Suparta, S.Pd','0009828712','Komplek Saruni','suparta123','suparta123');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(100) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status_peminjaman` enum('Pinjam','Kembali','Belum Di Terima','') NOT NULL DEFAULT 'Belum Di Terima',
  `id_pegawai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjaman`
--

LOCK TABLES `peminjaman` WRITE;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` VALUES ('PI-25276845','2019-04-18 08:48:54','2019-04-18 08:58:16','Kembali','PE-28950257'),('PI-4279999','2019-04-18 09:04:53','2019-04-18 09:07:09','Kembali','PE-107482156'),('PI-58443047','2019-04-18 10:42:26','2019-04-18 10:44:11','Kembali','PE-107482156'),('PI-76772431','2019-04-18 10:50:11','0000-00-00 00:00:00','Pinjam','PE-94826781'),('PI-80502357','2019-04-18 09:08:33','0000-00-00 00:00:00','Pinjam','PE-94969950');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `id_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `level` enum('Operator','Admin','','') NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES ('PG-110247576','mahmud123','mahmud123','Mahmud, S.Pd','Operator'),('PG-119225772','admin','admin','Rusman','Admin');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruang`
--

DROP TABLE IF EXISTS `ruang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(100) NOT NULL,
  `kode_ruang` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruang`
--

LOCK TABLES `ruang` WRITE;
/*!40000 ALTER TABLE `ruang` DISABLE KEYS */;
INSERT INTO `ruang` VALUES (4,'Sarana Dan Prasarana','1','Lantai Bawah, dekat ruang TU'),(5,'LAB 1','2','Laboratorium 1, Lantai Atas'),(6,'XI Akuntansi 1','XIA1','Kelas Sebelas Akuntansi 1 Lantai Atas'),(7,'XI RPL 1','XIRPL1','Kelas Sebelas Jurusan Rekayasa Perangkat Lunak 1, lantai Bawah'),(8,'GSG','4','Gedung Serba Guna/aula in-door'),(9,'Ruang Guru','Rg','Ruang Guru Lantai bawah Dekat Receptionis');
/*!40000 ALTER TABLE `ruang` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-18 15:19:37

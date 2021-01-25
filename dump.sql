-- MySQL dump 10.13  Distrib 5.6.44, for Linux (x86_64)
--
-- Host: localhost    Database: rojitora_db
-- ------------------------------------------------------
-- Server version	5.6.44-cll-lve

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
-- Table structure for table `admin_password_resets`
--

DROP TABLE IF EXISTS `admin_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_password_resets` (
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_password_resets`
--

LOCK TABLES `admin_password_resets` WRITE;
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_address_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','support@thesoftking.com','$2y$10$ojlQWqauqmVVwnAR2GOv/OsT69vJqdQ2ToK8Qw.d1O3SJiCUfBno.','E9XpBlZrN0yDrvCMNg6ncroJVAOYzq1ugaV61d3ZQjUrAMlbPf6Z5sBrpvH4','0000-00-00 00:00:00','2018-01-24 18:38:32');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emptycars`
--

DROP TABLE IF EXISTS `emptycars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emptycars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emptycar_id` int(11) DEFAULT NULL,
  `urgent_matter` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emptycar_date` date DEFAULT NULL,
  `emptycar_time` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emptycar_space` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emptycar_city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_pos_loading` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_date` date DEFAULT NULL,
  `drop_time` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_pos_drop` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_inf` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type1` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type1_content` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type3` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bigo` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person_charge` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emptycars`
--

LOCK TABLES `emptycars` WRITE;
/*!40000 ALTER TABLE `emptycars` DISABLE KEYS */;
INSERT INTO `emptycars` VALUES (19,NULL,NULL,'2019-08-21','4','宮城','5456','鳥取,','2019-08-07',NULL,NULL,'岡山,広島,','10t','箱',NULL,'中低床','後輪エアサス',NULL,'23','edfghjk',NULL,'2019-08-19 23:32:59','2019-08-25 19:24:18'),(33,NULL,NULL,'2019-08-17','8','山梨','町村','富山,','2019-08-30',NULL,NULL,'山形,北海道,岩手,','15t','ウイング',NULL,'高床','フラット','備考には金額、連絡先等は明記しないでください','2345','京都',NULL,'2019-08-23 22:24:50','2019-08-25 19:15:54'),(30,NULL,NULL,'2019-08-21','0',NULL,NULL,NULL,'2019-10-15',NULL,NULL,NULL,'10t','箱',NULL,'高床','後輪エアサス',NULL,'sdfs','京都',NULL,'2019-08-22 16:50:55','2019-08-25 16:20:25'),(31,NULL,NULL,'2019-08-10','0','宮城','sdfs','滋賀,島根,富山,','2019-08-15','0',NULL,'広島,岡山,福井,','15t','その他',NULL,'高床','総輪エアサス','sdfsdf','2342','sdfs',NULL,'2019-08-22 17:44:15','2019-08-22 17:44:15'),(22,NULL,NULL,'2019-08-23','0','山形','sdf','北陸,','2019-08-19','0',NULL,'北東北,','4t','ウイング',NULL,'高床','総輪エアサス','sdf','21341','asdf',NULL,'2019-08-20 00:14:51','2019-08-20 00:14:51'),(32,NULL,NULL,'2019-08-17','2','宮城','町村','滋賀,京都,鳥取,石川,','2019-08-30','2',NULL,'茨城,埼玉,千葉,栃木,','15t','ウイング',NULL,'高床','フラット','備考には金額、連絡先等は明記しないでください','2345','京都',NULL,'2019-08-23 22:18:10','2019-08-23 22:18:10'),(24,NULL,NULL,'2019-08-03','3','山形','adf','新潟,福井,岡山,','2019-08-19','5',NULL,'島根,鳥取,石川,','15t','その他',NULL,'高床','総輪エアサス','dfghjk','2551','er',NULL,'2019-08-20 00:20:17','2019-08-20 00:20:17'),(39,NULL,NULL,'2019-08-21','16','宮城','町村','滋賀,鳥取,石川,福井,','2019-08-30','5',NULL,'大阪,広島,山口,','15t','ウイング',NULL,'中低床','総輪エアサス','備考には金額','23','島根',NULL,'2019-08-26 15:03:38','2019-08-26 15:03:38'),(34,NULL,NULL,'2019-08-10','4','山形','ださい。','島根,富山,長野,','2019-08-17','4',NULL,'新潟,福井,岡山,広島,','15t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記しないでください','21341','島根',NULL,'2019-08-23 22:27:02','2019-08-23 22:27:02'),(26,NULL,'on','2019-08-23','12','宮城','2q3wert','滋賀,鳥取,福井,広島,','2019-08-07','0',NULL,'長野,石川,福井,新潟,','10t','箱',NULL,'中低床','後輪エアサス','sdfgh','23','asdf',NULL,'2019-08-20 00:24:16','2019-08-20 00:24:16'),(29,NULL,NULL,'2019-08-21','11',NULL,NULL,NULL,'2019-08-30',NULL,NULL,NULL,'15t','ウイング',NULL,'高床','総輪エアサス',NULL,'21341','山梨',NULL,'2019-08-20 00:27:30','2019-08-24 02:49:11'),(40,NULL,NULL,'2019-08-03','3','宮城','町村','島根,鳥取,石川,','2019-08-19','13',NULL,'兵庫,広島,大阪,和歌山,','15t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記しないでくだ','21341','京都',NULL,'2019-08-26 16:03:16','2019-08-26 16:03:16'),(35,NULL,NULL,'2019-08-01','2','宮城','区町','滋賀,島根,鳥取,石川,','2019-08-07','4',NULL,'新潟,福井,岡山,広島,','10t','ウイング',NULL,'中低床','総輪エアサス','連絡先等は明記しないでください','23','234',NULL,'2019-08-23 23:49:15','2019-08-23 23:49:15'),(36,NULL,'on','2019-08-03','1','富山','町村','滋賀,島根,富山,石川,','2019-08-10','4',NULL,'宮城,山形,福島,','10t','ウイング',NULL,'中低床','後輪エアサス','、連絡先等は明記しないでください','21341','京都',NULL,'2019-08-24 00:04:40','2019-08-24 00:04:40'),(37,NULL,NULL,'2019-08-03','4','長野','町村','石川,福井,岡山,鳥取,','2019-08-10','0',NULL,'新潟,福井,岡山,','15t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記しないでください','21341','島根',NULL,'2019-08-24 01:04:26','2019-08-24 01:04:26'),(38,NULL,NULL,'2019-08-15','3','宮城','町村','島根,富山,','2019-11-15','3',NULL,'京都,広島,石川,','15t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記しないでください','23','島根',NULL,'2019-08-24 01:10:55','2019-08-24 01:10:55');
/*!40000 ALTER TABLE `emptycars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `luggage`
--

DROP TABLE IF EXISTS `luggage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `luggage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `urgent_matter` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loading_date` date DEFAULT NULL,
  `loading_time` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loading_space` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loading_city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_date` date DEFAULT NULL,
  `drop_time` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_space` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drop_city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `baggage_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `baggage_weight` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_inf` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type1` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type1_content` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vehicle_type3` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bigo` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fares_money` int(11) DEFAULT NULL,
  `is_consultation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person_charge` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `luggage`
--

LOCK TABLES `luggage` WRITE;
/*!40000 ALTER TABLE `luggage` DISABLE KEYS */;
INSERT INTO `luggage` VALUES (38,2,NULL,'2019-08-02','31','山梨','島根','2019-08-07','31','富山','島根','島根',NULL,'15t','ウイング',NULL,'高床',NULL,NULL,23,NULL,'123','島根',NULL,'2019-08-19 08:49:50','2019-08-25 20:15:39'),(39,1,'on','2019-08-15','31','山梨','山梨','2019-08-17','7','島根','山梨','山梨','12','10t','ユニック',NULL,'中低床','パワーゲート','dfghj',34,NULL,'555','山梨',NULL,'2019-08-19 08:54:07','2019-08-25 20:23:16'),(43,1,NULL,'2019-08-08','12','北海道','京都','2019-08-17','15','新潟','島根','京都','23','10t','ウイング',NULL,'中低床','フラット',NULL,23,NULL,'123','京都',NULL,'2019-08-23 16:45:29','2019-08-25 20:24:24'),(42,2,NULL,'2019-08-02','31',NULL,'島根','2019-08-16','31',NULL,'島根','島根','23','15t','ウイング',NULL,'高床',NULL,NULL,23,NULL,'123','島根',NULL,'2019-08-22 23:04:43','2019-08-23 00:06:53'),(57,1,NULL,'2019-08-08','12','山形','鳥取','2019-08-30','2','青森','京都','山梨','12','2t','ウイング',NULL,'高床','総輪エアサス','、連絡先等は明記しないでくださ',23,NULL,'456','島根',NULL,'2019-08-26 09:20:35','2019-08-26 09:20:35'),(44,2,NULL,'2019-08-02','14','富山','島根','2019-08-17','15','宮城','京都','島根','12','15t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記',23,NULL,'123','島根',NULL,'2019-08-23 16:46:28','2019-08-23 16:46:28'),(45,1,NULL,'2019-08-01','14','山梨','鳥取','2019-08-22','5','山形','鳥取','山梨','2342','15t','ウイング',NULL,'低床','後輪エアサス','備考には金額、連絡先等は明記しないでください',23,NULL,'23','鳥取',NULL,'2019-08-23 16:47:28','2019-08-23 16:47:28'),(46,2,'on','2019-08-02','11','宮城','山梨','2019-08-19','4','長野','島根','山梨','12','15t','ウイング',NULL,'高床','総輪エアサス','明記しないでください',123,'on','123','鳥取',NULL,'2019-08-23 16:48:15','2019-08-23 16:48:15'),(47,1,NULL,'2019-08-15','22','山梨','山梨','2019-08-30','1','福島','島根','島根','23','10t','箱',NULL,'高床','総輪エアサス','備考には金額、連絡先等は明記しないでください',34,'on','23','山梨',NULL,'2019-08-23 16:49:11','2019-08-23 16:49:11'),(48,2,NULL,'2019-08-02','31','富山','島根','2019-10-15','10','宮城','鳥取','山梨','34','4t','ユニック',NULL,'フルワイド','エアサスゲート',NULL,345,NULL,'456','島根',NULL,'2019-08-23 16:52:17','2019-08-23 16:52:17'),(56,1,NULL,'2019-08-01','3','宮城','京都','2019-08-19','5','青森','鳥取','京都','33','10t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記',23,NULL,'23423','京都',NULL,'2019-08-26 09:15:15','2019-08-26 09:15:15'),(50,2,NULL,'2019-08-08','31','長野','島根','2019-08-15','31','山形','山梨','島根','34','10t','箱',NULL,'中低床','総輪エアサス',NULL,8,NULL,'12135476852','鳥取',NULL,'2019-08-23 16:58:02','2019-08-23 16:58:02'),(51,1,'on','2019-08-08','21','山梨','京都','2019-10-15','4','宮城','鳥取','京都','2342','15t','ウイング',NULL,'高床','総輪エアサス','、連絡先等は明記しないでください',123,NULL,'456','京都',NULL,'2019-08-23 20:30:18','2019-08-23 20:30:18'),(52,2,'on','2019-08-08','6','宮城','島根','2019-08-22','4','北海道','山梨','山梨','23','7t','平',NULL,'低床','後輪エアサス','連絡先等は明記しないでください',23,NULL,'456','島根',NULL,'2019-08-23 20:50:53','2019-08-23 20:50:53'),(53,1,'on','2019-08-09','15','山梨','島根','2019-08-30','4','静岡','島根','島根','23','7t','箱',NULL,'中低床','後輪エアサス','連絡先等は明記しないでください',23,'on','23','werw',NULL,'2019-08-23 23:55:49','2019-08-23 23:55:49'),(54,1,NULL,'2019-08-07','19','宮城','京都','2019-08-30','18','宮城','京都','鳥取','34','15t','ウイング',NULL,'高床','総輪エアサス',NULL,34,NULL,'123','島根',NULL,'2019-08-25 10:55:51','2019-08-25 10:55:51'),(55,2,NULL,'2019-08-01','2','福島','山梨','2019-08-17','0','長野','鳥取','wqwerqwe','23','10t','ウイング',NULL,'中低床','後輪エアサス',NULL,23,NULL,'qwer','qwer',NULL,'2019-08-25 16:04:31','2019-08-25 16:04:31'),(58,2,'on','2019-08-08','17','北海道','鳥取','2019-08-28','3','石川','山梨','京都','23','10t','ウイング',NULL,'高床','総輪エアサス','連絡先等は明記しないでください',34,'on','456','島根',NULL,'2019-08-26 14:06:31','2019-08-26 14:06:31'),(59,1,NULL,'2019-08-08','8','山梨','京都','2019-08-23','4','宮城','鳥取','山梨','12','2t','箱',NULL,'高床','総輪エアサス','連絡先等は明記しないでく',23,'on','456','京都',NULL,'2019-08-26 18:54:46','2019-08-26 18:54:46'),(60,1,NULL,'2019-08-01','2','宮城','島根','2019-08-07','2','青森','鳥取','京都','23','2t','箱',NULL,'高床','総輪エアサス','連絡先等は明記しないでく',23,NULL,'456','島根',NULL,'2019-08-26 19:06:08','2019-08-26 19:06:08'),(61,1,NULL,'2019-08-28','10','群馬','高崎市','2019-08-28','9','新潟','燕市','鉄骨','7','4t','平',NULL,'フルワイド','パワーゲート','手積み',50000,NULL,'0273864141','山田',NULL,'2019-08-27 16:00:59','2019-08-27 16:00:59');
/*!40000 ALTER TABLE `luggage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail_manages`
--

DROP TABLE IF EXISTS `mail_manages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail_manages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `company_name1` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `company_name2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_3` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `question_content` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail_manages_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail_manages`
--

LOCK TABLES `mail_manages` WRITE;
/*!40000 ALTER TABLE `mail_manages` DISABLE KEYS */;
INSERT INTO `mail_manages` VALUES (1,'12','sdf','2019-7-8','asdas','asdas','sfdg','asd','2019-11-11','asd','asda','2019-08-08 09:00:52','2019-08-08 09:00:52'),(2,'sdfghjk','asdfghjk','asdfgh','sdfghj','sdfghj','sdfghj','sdfgh','dsfghj@outl.com','222','asdfghjkl','2019-08-08 10:27:13','2019-08-08 10:27:13');
/*!40000 ALTER TABLE `mail_manages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `company_name1` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `company_name2` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_fir` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address_sec` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_thi` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `information_sec` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `referee` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `where_learn` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `members_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_06_09_005105_create_items_table',1),(4,'2019_07_24_030950_create_members_table',1),(5,'2019_07_24_031208_create_luggage_table',1),(6,'2019_07_24_031328_create_emptycars_table',1),(7,'2019_07_24_032544_create_mail_manages_table',1),(8,'2019_07_24_032614_create_regions_table',1),(9,'2019_07_24_032654_create_profectures_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profectures`
--

DROP TABLE IF EXISTS `profectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profectures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profectures`
--

LOCK TABLES `profectures` WRITE;
/*!40000 ALTER TABLE `profectures` DISABLE KEYS */;
INSERT INTO `profectures` VALUES (1,'1','北海道',NULL,NULL),(2,'2','青森県',NULL,NULL),(3,'2','岩手県',NULL,NULL),(4,'2','秋田県',NULL,NULL),(5,'3','宮城県',NULL,NULL),(6,'3','山形県',NULL,NULL),(7,'3','福島県',NULL,NULL),(8,'4','茨城県',NULL,NULL),(9,'4','栃木県',NULL,NULL),(10,'4','群馬県',NULL,NULL),(11,'5','埼玉県',NULL,NULL),(12,'5','千葉県',NULL,NULL),(13,'5','東京都',NULL,NULL),(14,'5','神奈川県',NULL,NULL),(15,'6','新潟県',NULL,NULL),(16,'6','山梨県',NULL,NULL),(17,'6','長野県',NULL,NULL),(18,'7','富山県',NULL,NULL),(19,'7','石川県',NULL,NULL),(20,'7','福井県',NULL,NULL),(21,'7','静岡県',NULL,NULL),(22,'8','岐阜県',NULL,NULL),(23,'8','愛知県',NULL,NULL),(24,'8','三重県',NULL,NULL),(25,'9','滋賀県',NULL,NULL),(26,'9','京都府',NULL,NULL),(27,'9','兵庫県',NULL,NULL),(28,'9','大阪府',NULL,NULL),(29,'9','和歌山県',NULL,NULL),(30,'9','奈良県',NULL,NULL),(31,'10','島根県',NULL,NULL),(32,'10','鳥取県',NULL,NULL),(33,'10','岡山県',NULL,NULL),(34,'10','広島県',NULL,NULL),(35,'10','山口県',NULL,NULL),(36,'11','徳島県',NULL,NULL),(37,'11','香川県',NULL,NULL),(38,'11','愛媛県',NULL,NULL),(39,'11','高知県',NULL,NULL),(40,'12','福岡県',NULL,NULL),(41,'12','佐賀県',NULL,NULL),(42,'12','長崎県',NULL,NULL),(43,'12','熊本県',NULL,NULL),(44,'12','大分県',NULL,NULL),(45,'12','宮崎県',NULL,NULL),(46,'12','鹿児島県',NULL,NULL),(47,'12','沖縄県',NULL,NULL);
/*!40000 ALTER TABLE `profectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'北海道','2019-08-06 18:02:14','2019-08-06 18:02:14'),(2,'北東北','2019-08-06 18:02:14','2019-08-06 18:02:14'),(3,'南東北','2019-08-06 18:02:14','2019-08-06 18:02:14'),(4,'北関東','2019-08-06 18:02:14','2019-08-06 18:02:14'),(5,'南関東','2019-08-06 18:02:14','2019-08-06 18:02:14'),(6,'甲信越','2019-08-06 18:02:14','2019-08-06 18:02:14'),(7,'北陸','2019-08-06 18:02:14','2019-08-06 18:02:14'),(8,'中京','2019-08-06 18:02:14','2019-08-06 18:02:14'),(9,'関西','2019-08-06 18:02:14','2019-08-06 18:02:14'),(10,'中国','2019-08-06 18:02:14','2019-08-06 18:02:14'),(11,'四国','2019-08-06 18:02:14','2019-08-06 18:02:14'),(12,'九州・沖縄','2019-08-06 18:02:14','2019-08-06 18:02:14');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `corp_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `second_input` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hello` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `third_input` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_part` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_address_unique` (`email_address`)
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1732,'テラテクニカル株式会社','てらてくにかるかぶしきかいしゃ','379-2213','群馬県','高崎市綿貫町','080-3547-3048','03-63693550','kageyama@tera-technical.com','$2y$10$zsHqL3wogFzGb8Cyk9RejePk2UFDLElTm5VN0L.zrDHGqqr470gcu','㈱ロジテル','その他',NULL,NULL,'2019-08-28 16:10:36'),(2,4094,'テラテクニカル株式会社','てらてくにかるかぶしきかいしゃ','379-1334','群馬県','高崎市綿貫町','080-3547-6049','03-63693549','admin@test.com','$2y$10$VTyku21nOzkeiG6gfew/9.cfCgFNsupid1nOv7IvyaP5j.yKUCIuu','㈱ロジテル','その他',NULL,NULL,NULL),(3,5968,'dsfas','sadgas','sdafgas','sdfgas','sdafgas','2134-235-2356','sasdaf','asddf@test.com','$2y$10$Nx7.I9i8HvntZAxZwWt41.kyLxBVtbA7Z8AX3PUsPrfBG4iV1HSEu','sdfs','sdfsd',NULL,'2019-08-06 21:59:18','2019-08-06 21:59:18'),(161,5689,'影山商事株式会社','カゲヤマショウジ','1475-1','影山','カゲヤマ','0273959788','0270865019','kageyama55555@gmail.com','$2y$10$8yUOLZpmQMhp.guWZfxbo.39e/wVTp3ecx0ImQNJnK1DkIPuTW47S','インターネット','インターネット',NULL,'2019-08-28 22:49:56','2019-08-28 22:49:56'),(6,9005,'whj','wfghj','sdfghj','werw','dsfghjk','1234-232-1231','adsfasfd','sdfasd@outlool.com','$2y$10$2pnjsdWkUyquzmMMupCZX.qmX7FOE.mbPdgNI6EiYKktcRcqFQZ3K','sedfsdf','sdfsdfs',NULL,'2019-08-06 22:12:47','2019-08-06 22:12:47'),(7,2687,'erfswer','werwer','werwe','werw','fgndsfgdfg','1234-232-1231','sfsdf','dsert@outlloo.com','$2y$10$reQPcVyxPGbUXFoEbNp4Neh0NXVJkatSJgSm5QBS5EZWxMwF6qAAS','sdfsdf','sdfsd',NULL,'2019-08-06 22:16:33','2019-08-06 22:16:33'),(10,7763,'erfswer','wfghj','werwe','werw','dsfghjk','1234-232-1231','sfsdf','sdfsd@vvvv.com','$2y$10$KKb4U0bxSeEAmroBdaaB.u4.o5xar7TsPpGuuy1yXSCgz6f.BOVJW','dfg','dfgdf',NULL,'2019-08-06 22:22:38','2019-08-06 22:22:38'),(11,2554,'erfswer','wfghj','werwe','werw','sedftgyui','1234-232-1231','adsfasfd','dsert@lkjh.com','$2y$10$2untfC95MqqZKbivNP2.UOK8.OAHAsAsgzfGjHrJHJEt8WPrNLi4m','sdfwer','werwer',NULL,'2019-08-06 22:29:36','2019-08-06 22:29:36'),(32,6445,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','eraaa@test.com','$2y$10$psAHycgBrWoY2pNT/kQsB.pm1Nuwn8Zt0OPXNpBBcPGPghODWhUhm','11','11',NULL,'2019-08-13 01:09:49','2019-08-13 01:09:49'),(159,7469,'asdfa','asdf','asdf','asdf','asdf','asdf','asdf','asssaqdf@sdsdff.com','$2y$10$7GAk1ct0CyenkZPulHoyvO8/VU2noFOeAf46E8u4.zaODmuOKTSAm','asdf','asdf',NULL,'2019-08-25 15:59:56','2019-08-25 15:59:56'),(160,4050,'asdfas','asdfasdf','123123@12312.com','asdfasd','asdfasdf','3123123','123123','123123@12312.com','$2y$10$jlwTToEZ6at1uy/Ea2HHC.FiYGrlsNfiUJf5HMywq9swnjlyNWLrG','fasdfasdf','asdfasdfadf',NULL,'2019-08-28 13:33:21','2019-08-28 13:33:21'),(158,1053,'asdfa','asdf','asdf','asdf','asdf','asdf','asdf','asssaqdf@sdf.com','$2y$10$VdTb0rVvkZ3t1ExFuern.eZbKx9l4Vydc3QNvRq0g3ysMnB3K3X.G','asdf','asdf',NULL,'2019-08-25 15:58:13','2019-08-25 15:58:13'),(157,1839,'asdfa','asdf','asdf','asdf','asdf','asdf','asdf','assqdf@sdf.com','$2y$10$RySi26vhExt86hswvAv3t.R0HrK/z1HMwmW46vmuGJEOaIjSZ2Ej6','asdf','asdf',NULL,'2019-08-25 15:54:46','2019-08-25 15:54:46'),(37,5629,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dddd@asdasdas.com','$2y$10$ZmEq7zHvMUxNJVqUKmrG5e7s8aiimZm/2sdIqTMHoMnKOcwrk2dUm','sdasdasda','asdasdad',NULL,'2019-08-13 01:39:07','2019-08-13 01:39:07'),(38,7380,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dddd@sdfsdf.com','$2y$10$8uK.R4yI4NYKy4.9KWo6Kuc16GYx2bBIoRN2EVayvSrYSvgtqScRm','sdasdasda','asdasdad',NULL,'2019-08-13 02:11:13','2019-08-13 02:11:13'),(39,4113,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dddd@fghfgh.com','$2y$10$Tt2LuO/vlxVDF7ZVNs0Z5.5mRDVRZVN0GiPUW5cv8bwWyFuJ8oxWO','sdasdasda','asdasdad',NULL,'2019-08-13 02:23:43','2019-08-13 02:23:43'),(40,9098,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dddfdd@saflsdf.com','$2y$10$Cltqvnu2jXXM1Bzxzv/wpOT5Y7YDsvja.sBOVJaFdquZWD3DHEOr6','eeeeeef','asdf',NULL,'2019-08-13 07:36:46','2019-08-13 07:36:46'),(41,7591,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ddfgdd@saflsdf.com','$2y$10$zgY40Yf9TKhk1HERabcK/uEtD/FzeYxhIFyNGjXTx9iYmcYRt.bIO','eeeeeef','asdf',NULL,'2019-08-13 07:38:50','2019-08-13 07:38:50'),(42,8124,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','addfsf@test.com','$2y$10$qDguuen1GWXEj8hy0HAm0.stgmDxcS1Czs4zkkDFL/Wq/k/eXDC52','aa','aa',NULL,'2019-08-13 08:26:52','2019-08-13 08:26:52'),(43,8876,'dsfas','sadgas','bbb','aaa','sdafgas','aaa','sasdaf','asddsdff@test.cdfm','$2y$10$7ei64spLpQYvRpuRwUqpt.GYosWwAEHx1pEyILPP8tyQtUq2kHdbm','aaa','aaa',NULL,'2019-08-13 08:28:09','2019-08-13 08:28:09'),(44,3428,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdf@saflsdf.com','$2y$10$PQcvQD83dVdVkCpe0a/AM.XHEIjLenBRf6xVBXxtFMizGkt0qZ6SC','eeeeeef','asdf',NULL,'2019-08-13 08:34:43','2019-08-13 08:34:43'),(45,5340,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ddtrydd@asdasdas.com','$2y$10$TorYm66cNMMiEWD4CCxf7OTX69bX56mlT6w3yE.VJW6SXKmFX17Fm','rtertert','erterter',NULL,'2019-08-13 08:35:23','2019-08-13 08:35:23'),(46,3125,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdfsdfs@sdfsdf.com','$2y$10$y9rK5atSp6ArfE79SWHaPOj0wO2K7KbJjJ87/G3XqVGmb8Qyu.slu','sdfsd','sdfsdf',NULL,'2019-08-13 08:36:26','2019-08-13 08:36:26'),(47,8324,'asdf','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','adfddf@test.coms','$2y$10$3zWkAaGY0ZP7CHutfX4UpeGCgPw4AGBWqAkklcOkpAGcaw.s8uZ5u','000','000',NULL,'2019-08-13 08:41:37','2019-08-13 08:41:37'),(48,3058,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','adtytuyf@teyuyst.coyuym','$2y$10$xmkkFJGCLZKjTvdv85zj/.fm3yYgNa9Ct6.I01Uc/mH4QJXtzjmmK','111','111',NULL,'2019-08-13 08:46:10','2019-08-13 08:46:10'),(49,2020,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','asadsasadf@test.com','$2y$10$j34vVq9u5ptH1aTHcJ5ogulhr0yGiuXz1pjHWtZhBdFi2Cgmjj1KO','1111','1111',NULL,'2019-08-13 08:48:28','2019-08-13 08:48:28'),(50,5445,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','wereasddf@test.com','$2y$10$ELQcLH5RIoQzYqQe.VXCHOBpLjI0fTePyI4i1mRm7c5PDt/u7seyy','111','111',NULL,'2019-08-13 08:52:13','2019-08-13 08:52:13'),(51,1686,'dsfas','sadgas','aaa','sdfgas','sdafgas','2134-235-2356','sasdaf','asddsdfsdff@test.com','$2y$10$.sq4MhpkxlRUSiMR8k9xteqh9K3CfzDhjIFdxg2.H4biYAL1dUS2W','qq','qq',NULL,'2019-08-13 08:55:21','2019-08-13 08:55:21'),(52,4051,'dsfas','sadgas','aaa','sdfgas','aaa','2134-235-2356','sasdaf','assdfsdddf@test.com','$2y$10$pK7x6/SLboD/gKkMLTtt6Ov0zIEu.3n0GS9Xn2DsrURQKCDmzpcGW','111','111',NULL,'2019-08-13 08:56:48','2019-08-13 08:56:48'),(53,2669,'dsfas','sadgas','aaa','sdfgas','sdafgas','aaa','sasdaf','aaaaaadfaaaaa@test.com','$2y$10$oCT/cvdfN80xT/UO5w/ne.VZgFSPaBHGbFcH2KHv3yrQDzNskf9sy','ww','ww',NULL,'2019-08-13 09:10:38','2019-08-13 09:10:38'),(54,4920,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','asdasdas@fghfgh.com','$2y$10$ZAMcz9/ccQNQbxQm30xmHOVWxrLMOS08dznln03y4iMpUFGMgwTIu','dsdasd','asdasd',NULL,'2019-08-13 09:32:20','2019-08-13 09:32:20'),(55,2067,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdfs@saflsdf.com','$2y$10$rV3RfC7aL.DTxFtcNON1ne9qr04/pmXkPlcNzQUxm.r8aDg4pedWa','asdfa','asdfa',NULL,'2019-08-13 09:37:19','2019-08-13 09:37:19'),(56,7354,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdfsdfs@saflsdf.com','$2y$10$LpfV8XoWUul0sT/BZGjBKe3068jKRhkFW6RrUbxBuuuiuR9IXWxOi','asdfa','asdfa',NULL,'2019-08-13 09:42:35','2019-08-13 09:42:35'),(57,1071,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ssadfsd@saflsdf.com','$2y$10$AvlVu3E0q11Qfj.PcHm6K.2nvHrufjActnmsScJa3Wxr3bCc/85bO','asdfa','asdfa',NULL,'2019-08-13 09:43:45','2019-08-13 09:43:45'),(58,2959,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ssahhjksd@saflsdf.com','$2y$10$1gbZx.62VVCFes2wn3Lli.DM6AEy.Oohm4b9B0122IGVo6wyHM/eq','asdfa','asdfa',NULL,'2019-08-13 09:45:29','2019-08-13 09:45:29'),(59,9888,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ssahhjksd@hgjfghf.com','$2y$10$PNQEiH1o/YiQEpvN4nXpL.mhRPnUK6.t2xYLmW3gBl5HkSibGR3D6','asdfa','asdfa',NULL,'2019-08-13 09:47:17','2019-08-13 09:47:17'),(60,9863,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ssahhjksdfssd@hgjfghf.com','$2y$10$/lXINI9HA2UEWkhSRej4UexQCQxNqFbJ8huebgxU7ai34zXfpwyhG','asdfa','asdfa',NULL,'2019-08-13 09:48:47','2019-08-13 09:48:47'),(61,2979,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ssahhjksdfssd@hgjfghbbf.com','$2y$10$ezolRpRnj.d3JxeMHvU1Rup.ehcs2ivAde9paez9v5uVZsnTAYpz6','asdfa','asdfa',NULL,'2019-08-13 09:49:55','2019-08-13 09:49:55'),(62,5507,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fghfg@hgjfghbbf.com','$2y$10$M4K9MbFHNjlEWZmNKpSc0.bqCFoRkUT9YxOhPo7VPpbWmh7j5mlJu','asdfa','asdfa',NULL,'2019-08-13 09:51:59','2019-08-13 09:51:59'),(63,4649,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fghfg@sdf.com','$2y$10$tLfF7KnH5UilMkiq1jQZkuOWZwZ5RV1Yt99z9JeIlp0aGgNy116.2','asdfa','asdfa',NULL,'2019-08-13 09:53:56','2019-08-13 09:53:56'),(64,7086,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdfsdf@sdf.com','$2y$10$ndNYVWifBmIWTUPknj5jiORN1QdFdZstVRf4dgl9RIeivuHzU0RDu','asdfa','asdfa',NULL,'2019-08-13 09:54:31','2019-08-13 09:54:31'),(65,4485,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dfgdfg@sdf.com','$2y$10$YPDHyIhUtXdVvcn4ql/as.fUxMcYYEf1GMRh2E80PIdhyM5xXVcuu','asdfa','asdfa',NULL,'2019-08-13 09:55:08','2019-08-13 09:55:08'),(66,9356,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','klopk@sdf.com','$2y$10$arlwImL5qIGw.gpvMcZPH.joNrQ0dFwTQ2URUdbnmHWFTEamlHlEi','asdfa','asdfa',NULL,'2019-08-13 09:55:49','2019-08-13 09:55:49'),(67,5781,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uityre@sdf.com','$2y$10$n19so.7BoCkNsjzS1qD8ReTlf1CV57ApQpv/K67.GbzqKczyfEnlG','asdfa','asdfa',NULL,'2019-08-13 09:57:46','2019-08-13 09:57:46'),(68,8047,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uitydtrfdtgre@sdf.com','$2y$10$feM0Y/IeZbnpkUHd0LL6/eZsX.dVi4IlVW5dJt090Klxfut.vEwT.','44','44',NULL,'2019-08-13 10:01:54','2019-08-13 10:01:54'),(69,7273,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uitydtrfdtgre@sdf.colkm','$2y$10$jlirssZx.Uws9HCisOci0OoY3/fFNfIpuXnkRRkBr8QYbSuEDcV3a','44','44',NULL,'2019-08-13 10:02:28','2019-08-13 10:02:28'),(70,9537,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uitydtrfdtgre@sdf.colkmgt','$2y$10$ymTfmuxnEzZWFzpQEpFZvOUhjUnWb6W7z/ieY1IGEhJsS/c5caW9K','44','44',NULL,'2019-08-13 10:10:49','2019-08-13 10:10:49'),(71,2032,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uitydtrfdtgsdsdsre@sdf.colkmgt','$2y$10$m92KyuiMPBcLxIhrbpcE9.ZrYhhifH877qyuoYVeTwx1rWo0yUAsy','11','11',NULL,'2019-08-13 10:11:55','2019-08-13 10:11:55'),(72,5003,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdfsasdasdasdf@sdf.com','$2y$10$ULCXZtZ7vCRMC5nIJk/Scuoz2HUp4mgQl1oZG2LVv4yvomTWVJFm.','1111','11',NULL,'2019-08-13 10:13:01','2019-08-13 10:13:01'),(73,1323,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdasdafsasdasdasdf@sdf.com','$2y$10$abgMvcfBkGbhRv5GGevsfeGoU03Nmfo1rSyJhxDjMYrUS3oNpHzVu','1111','11',NULL,'2019-08-13 10:14:35','2019-08-13 10:14:35'),(74,7206,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','poih@sdf.com','$2y$10$mEUaGMyf/U.nb5co8.MJV.I6TlmlctyozmLhZdTKiWj6v8J2MQ.IK','1111','11',NULL,'2019-08-13 10:19:12','2019-08-13 10:19:12'),(75,8817,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sdsdfsdf@sdf.com','$2y$10$kSYpfX6WkQLdlLpNCbYQ..lxBt1uYoc2FCanSWDpf0AG1h9vIpF6y','1111','11',NULL,'2019-08-13 10:21:37','2019-08-13 10:21:37'),(76,4419,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','oiuyt@sdf.com','$2y$10$ohY0Qy.5NWSuO1.3NpwdmOqrfYMdFrDCWegmmTc3nXyGimrfTMG26','1111','11',NULL,'2019-08-13 10:22:23','2019-08-13 10:22:23'),(77,7425,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','kljkljkljl@sdf.com','$2y$10$AAOzoA0jqk4b.G69v3KA1.uqN69D.MQxxd8ZPeCA8PZipeMJW6bB.','1111','11',NULL,'2019-08-13 10:25:44','2019-08-13 10:25:44'),(78,6560,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ljkljl@sdf.com','$2y$10$Cw9mUy4wM0taL9Lc7e968.Ny1Joh0JAtFdPma6qnFLlCZn1RxLrdG','1111','11',NULL,'2019-08-13 10:27:07','2019-08-13 10:27:07'),(79,6145,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hljl@sdf.com','$2y$10$T8ay/RhV48qtn4AwvWVQYOwqfx4MLXtGPtNVIEVtjHS1xziAfL0eK','1111','11',NULL,'2019-08-13 10:29:39','2019-08-13 10:29:39'),(80,4079,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hfgfdljl@sdf.com','$2y$10$ulJvXA4jN5qrK789vng8jez0JUcBMjBbTjoodk84vt3jygCXcPlP2','1111','11',NULL,'2019-08-13 10:31:38','2019-08-13 10:31:38'),(81,2163,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hdljl@sdf.com','$2y$10$7PINajQbzYit1R42T/orZuPM0/3iGiE5bVHEmTZxgQoFHWeQKKxfq','1111','11',NULL,'2019-08-13 10:32:15','2019-08-13 10:32:15'),(82,5103,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jkhjdljl@sdf.com','$2y$10$Za6qpls523g6vK8Ass3vwu1D5cEwsx4D9p7Dxrw/u2zaS6hjhiNAC','1111','11',NULL,'2019-08-13 10:32:46','2019-08-13 10:32:46'),(83,2046,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jjdljl@sdf.com','$2y$10$.dZfh96xVVvdO8xOb8MySuqqrevIy6rSn9oShkg7uYlow7TyE2rsy','1111','11',NULL,'2019-08-13 10:35:30','2019-08-13 10:35:30'),(84,1441,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jl@sdf.com','$2y$10$vzQeZEq78aEbdcJZ.ZrKSOL1SoWNvPyF5PLiaeZ8WwUbXcOqwtV7i','1111','11',NULL,'2019-08-13 10:36:26','2019-08-13 10:36:26'),(85,6209,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','cjl@sdf.com','$2y$10$P6JyYpbrP7TL7RCKC92vRucaKQzPFzMedlHiu3R7MOfynINHsrCQ6','1111','11',NULL,'2019-08-13 10:39:08','2019-08-13 10:39:08'),(86,3160,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','vcjl@sdf.com','$2y$10$pI0ST1c.wmV6yPVItZg.9usQPbhoJSyoCGSwr9mNAplYx.gawHz5O','1111','11',NULL,'2019-08-13 10:40:14','2019-08-13 10:40:14'),(87,4802,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','asdfsdgh@sdf.com','$2y$10$kF3QePKgdBsVfOTrVcwIQusJi4uk0WJyhKONgzvwPjwoGHyZ41sIK','1111','11',NULL,'2019-08-13 10:41:20','2019-08-13 10:41:20'),(88,5438,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','mmdf@sdf.com','$2y$10$2J64gM16Ky/2Y9EJC5a1r.e/Uvl4QR9QcgwKuR/lGbF9hknTBP55u','fg','rete',NULL,'2019-08-13 10:43:26','2019-08-13 10:43:26'),(89,2921,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','mm@sdf.com','$2y$10$/mJvb/x7wb1fGE6018/.uu9zPpwAuM9Ml2v5xufYBTEd3t3s7.C8K','fg','rete',NULL,'2019-08-13 10:44:45','2019-08-13 10:44:45'),(90,8548,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','mllm@sdf.com','$2y$10$zmASr9BD.m9yj1./jNKliuavUGwRyyPOZToIxLr.qaDqnWHwiIBLG','fg','rete',NULL,'2019-08-13 10:47:56','2019-08-13 10:47:56'),(91,4560,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','bdf@sdf.com','$2y$10$n.puLMi1hy9gPvJ1C23UP.iSNOBgVICXj92cR7dlx2TmptcXS9bn2','sdfs','sdfds',NULL,'2019-08-13 10:51:54','2019-08-13 10:51:54'),(92,6954,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jkf@sdf.com','$2y$10$MY5PfOPFa9/NZDUHlTMjnOgHlJ/j1C3yT.k75UyyYt02In9KXX.IK','sdfs','sdfds',NULL,'2019-08-13 10:59:02','2019-08-13 10:59:02'),(93,4555,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jlkkf@sdf.com','$2y$10$tLcFly1RQd.qOPpwF736g.ravYKJilIXGc1kCncuEiQ1VrCdxh4Qa','sdfs','sdfds',NULL,'2019-08-13 11:00:24','2019-08-13 11:00:24'),(94,9382,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jkykf@sdf.com','$2y$10$em59KpalmLV4pAbm7iAqvOt9XgqDGmlKMmF99hpq1Iw17SinBMmuG','sdfs','sdfds',NULL,'2019-08-13 11:01:18','2019-08-13 11:01:18'),(95,3048,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hgjhf@sdf.com','$2y$10$hzW2RX37HXA83PKtnAUG0uuYGSO9QnJwOqnMDXsHz8ooZTpYIBlBq','sdfs','sdfds',NULL,'2019-08-13 11:02:01','2019-08-13 11:02:01'),(96,3832,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hfghfg@sdf.com','$2y$10$PC.kYlY1XscshF8bk7lsdO7V9jqWHv1HFeasG.nbIr41OsZ52W5k2','sdfs','sdfds',NULL,'2019-08-13 11:02:38','2019-08-13 11:02:38'),(97,6666,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hgjhyfg@sdf.com','$2y$10$TlfL/8SiDmXV4xfPsO.vcess874jkxxvV9PLkSzwgfJMZM4fcFa2y','sdfs','sdfds',NULL,'2019-08-13 11:03:34','2019-08-13 11:03:34'),(98,1280,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fdgddd@saflsdf.com','$2y$10$eRkMUqweYs4zWtQ4BP.l/uGIwBBcy7j8.PoxfoR0U676oJPB0rFSG','eeeeeef','11',NULL,'2019-08-13 11:06:18','2019-08-13 11:06:18'),(99,1617,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hjghjd@saflsdf.com','$2y$10$gXNMUh15I7QFACBXIYwlceUoa6mRBsJULbk0t7V6xprkYlSif3IvW','eeeeeef','11',NULL,'2019-08-13 11:07:37','2019-08-13 11:07:37'),(100,9793,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hgjjd@saflsdf.com','$2y$10$iaPjSmVmo5DBldH0yfvcseyObnWmvlNgSmmhlRz5oCy7EMFgvxLjS','eeeeeef','11',NULL,'2019-08-13 11:08:20','2019-08-13 11:08:20'),(101,1089,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hghgjd@saflsdf.com','$2y$10$Tbgx0w2zyEdn8n98Pd9DQuY3pAYJ5KeOgx9L9O8FRwEmFRbMGv3YC','eeeeeef','11',NULL,'2019-08-13 11:10:12','2019-08-13 11:10:12'),(102,9020,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hgjhjg@saflsdf.com','$2y$10$L061HOIZy3VKML7q2rHs8.3PAqCJHxH40E9k5cRN0Vp6lHzvfKA2u','eeeeeef','11',NULL,'2019-08-13 11:10:44','2019-08-13 11:10:44'),(103,8544,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','mhg@saflsdf.com','$2y$10$fbh8BnRNbD08H.AzGUFAIeBtKi5F6ktH5Wq.Vmbvan/3RMBr51aU.','eeeeeef','11',NULL,'2019-08-13 11:11:31','2019-08-13 11:11:31'),(104,7898,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ytjtyg@saflsdf.com','$2y$10$/2YXItFiVcrr9ypgIfyOY.2nqhuEu5j.7aUmvCDoYZqyuc1iBzYy2','eeeeeef','11',NULL,'2019-08-13 11:12:25','2019-08-13 11:12:25'),(105,4893,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ihgghyg@saflsdf.com','$2y$10$HDdJjhA2kDoPc6KHmNiX5.MSJ0UP/cvFfSoJrSuMdUaEZHy7qmoFq','eeeeeef','11',NULL,'2019-08-13 11:13:09','2019-08-13 11:13:09'),(106,7563,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','kkg@saflsdf.com','$2y$10$FbsLaX5RF3jYyGKeSy3UR.csjrBVVSfRGLBC0/3toHh5OZu/cwFx6','eeeeeef','11',NULL,'2019-08-13 11:13:43','2019-08-13 11:13:43'),(107,4372,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','llg@saflsdf.com','$2y$10$Dfe1HWLUfXZNOeFgc6Fgvuw/JB.w2.Qs8sPP.szxlfYKlTstNuvyS','eeeeeef','11',NULL,'2019-08-13 11:14:32','2019-08-13 11:14:32'),(108,8711,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','uiy@saflsdf.com','$2y$10$cY5TVAc6mTqibMhKnckTMedC3BPEMTgqOPGUUJmE6aKuLSUeThX52','eeeeeef','11',NULL,'2019-08-13 11:15:10','2019-08-13 11:15:10'),(109,6808,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','tytyy@saflsdf.com','$2y$10$/.cn5sDb.16SACtna5hkxOYXQ6GnJ6jyAQe/29B53beziJW9i6YQm','eeeeeef','11',NULL,'2019-08-13 11:15:46','2019-08-13 11:15:46'),(110,7462,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','yuty@saflsdf.com','$2y$10$gGVv9sYHWkLLrAhIzAjXP.tjl8e7jkXOyzpzoFW3MxcX3T8Ge0Qq2','eeeeeef','11',NULL,'2019-08-13 11:16:25','2019-08-13 11:16:25'),(111,4247,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dfsy@saflsdf.com','$2y$10$gl4lIOHBGs0vX9BlF1hgoux0myVCIy3ha1iizA3vdmL3BxS4Bt0Uq','eeeeeef','11',NULL,'2019-08-13 11:19:12','2019-08-13 11:19:12'),(112,2199,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fgdfsy@saflsdf.com','$2y$10$9598PlH6wdy1fVxmflFLuO5mCEGG1xr5wWyBBnnGozMPCunXkMNZe','eeeeeef','11',NULL,'2019-08-13 11:19:58','2019-08-13 11:19:58'),(113,4759,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','mhjsy@saflsdf.com','$2y$10$PqzU2DC1Wx.p31tZ.lsEwOYw.q1ewTxt0vDOB0IdR.9sN9Crauwm2','eeeeeef','11',NULL,'2019-08-13 11:23:21','2019-08-13 11:23:21'),(114,3624,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dy@saflsdf.com','$2y$10$UzLfXNensVvnjgkrT7WbrOjDMc14/ayd9gRtJLd2Z5w5oWc4dBe.O','eeeeeef','11',NULL,'2019-08-13 11:24:07','2019-08-13 11:24:07'),(115,9235,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','ghffs@saflsdf.com','$2y$10$Zu44z3VdbaKaoGdkLwWWzOOlSf3Rt9/fm/0X4Q0IxYenwWkk9HJ0S','sdasdasda','asdasdad',NULL,'2019-08-13 11:30:32','2019-08-13 11:30:32'),(116,5765,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','vbds@saflsdf.com','$2y$10$VKc6IqcO6TnolFzMFW1Du.OHAscqGD9APICYdJEYt.TjvBK65FqgK','sdasdasda','asdasdad',NULL,'2019-08-13 11:33:03','2019-08-13 11:33:03'),(117,6509,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','gbnds@saflsdf.com','$2y$10$aD3L1iOh7eioe6qZg.88VudCN3f8fowbwSoaSoxL016PR4PsToylu','sdasdasda','asdasdad',NULL,'2019-08-13 11:34:00','2019-08-13 11:34:00'),(118,8156,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','nmhnfs@saflsdf.com','$2y$10$iJcG9dXnpTiu.uurxY7hfeEgmui16jXd.GM86arXgU3KtsyGqKYlO','eeeeeef','11',NULL,'2019-08-13 11:35:50','2019-08-13 11:35:50'),(119,2804,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','unfs@saflsdf.com','$2y$10$dyPbCbH89HxoBDq5LfqGBulEOVEHDm4DKC75.J5ywnMw04smbwcom','eeeeeef','11',NULL,'2019-08-13 11:37:11','2019-08-13 11:37:11'),(120,8517,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','hjs@saflsdf.com','$2y$10$jT3juOOYGqvN5l2q5HXa3OgZmBRtRMrNPmkV6wknpbX5LhEVV.lAW','eeeeeef','11',NULL,'2019-08-13 11:39:13','2019-08-13 11:39:13'),(121,6278,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','bfs@saflsdf.com','$2y$10$EdkcOAx9yGrZFlAMFQyCPuAYlg58u4AiMrudgmzhrpikDvTy67Axi','eeeeeef','asdf',NULL,'2019-08-13 11:42:15','2019-08-13 11:42:15'),(122,8415,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','jkjls@saflsdf.com','$2y$10$D9LjSeuS5mDQ.KnBau6t4eGszSK5M9b3yVDpzj.lQ81P1I0kG1316','rtertert','asdf',NULL,'2019-08-13 11:44:42','2019-08-13 11:44:42'),(123,5359,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','gfhdfs@saflsdf.com','$2y$10$Uudz7mOpxmE20ldMHTwxdufzIGJN8XBLh1sFYG903PYpGzBlFTp4K','sdasdasda','asdasdad',NULL,'2019-08-13 11:47:29','2019-08-13 11:47:29'),(124,5049,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fgdf@saflsdf.com','$2y$10$S4TrPd/WKnJ76qW3TkhpGevB7.yurMo1.zG2yqr0Pwu5BwWKw4pO6','rtertert','erterter',NULL,'2019-08-13 11:57:02','2019-08-13 11:57:02'),(125,3915,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dsfdsf@saflsdf.com','$2y$10$/gVq0EBqOi9NIB.RYwHdreQXLKudEoBtV.LcCOmb3anW3r6mdlhhO','rtertert','erterter',NULL,'2019-08-13 11:59:32','2019-08-13 11:59:32'),(126,4456,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dgfdsf@saflsdf.com','$2y$10$24kPysYNVPUPJpJWA87smOW/X3mJXM6eKbyxrIBlSzkSe8wNrm4tC','rtertert','erterter',NULL,'2019-08-13 12:13:25','2019-08-13 12:13:25'),(127,9405,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','cxcdfs@saflsdf.com','$2y$10$iGDBVBJpoIpki606uBq0e.5EvNR3AfTAij0J1TvQ1PbJhd56AFmOq','sdfsd','asdf',NULL,'2019-08-13 12:24:09','2019-08-13 12:24:09'),(128,3133,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','xcz@saflsdf.com','$2y$10$a0YJnERM.6SF04hJORSnjeV9As4n9KnX0QQcjc1maS1LLlqdhU68e','sdfsd','asdf',NULL,'2019-08-13 12:25:46','2019-08-13 12:25:46'),(129,5387,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','xcxv@saflsdf.com','$2y$10$ffUMx3mXJ9i9w8iI47jR7.xCe8nZSw4OINIRzbc.njgoNwtBxTeZa','sdfsd','asdf',NULL,'2019-08-13 12:29:28','2019-08-13 12:29:28'),(130,2630,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','xcvv@saflsdf.com','$2y$10$kRhfjWHGhXuGY.p7.EKMyO4fAbTPSX8syDdCg0.8Q8ciVYqUULQTG','sdfsd','asdf',NULL,'2019-08-13 12:30:35','2019-08-13 12:30:35'),(131,3938,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','cx@saflsdf.com','$2y$10$r6GUZvRxsKFwpn8fdAtq9.67.v4s5UaAEbE.CblTYKfBkXeqTm.3y','sdfsd','asdf',NULL,'2019-08-13 12:32:28','2019-08-13 12:32:28'),(132,3466,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','fdsfs@saflsdf.com','$2y$10$eDcA5N/1Pq6m6SKYPdMzs.loFgLrcF/QSQkZrW44ovwL.7YRF5OM6','sdfsd','asdf',NULL,'2019-08-13 12:33:27','2019-08-13 12:33:27'),(133,8161,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','dfdsfs@saflsdf.com','$2y$10$z29u53/TsNCtjnFLJAGCbeJYTiuk2.1GbBAfcg7l1zia/PfWe3jOi','sdfsd','asdf',NULL,'2019-08-13 12:36:03','2019-08-13 12:36:03'),(156,5372,'asdfa','asdf','asdf','asdf','asdf','asdf','asdf','asdf@sdf.com','$2y$10$FsHn0t1KWmEcSy9ZfPDl5uOJwJ0ZzWKKAsDyRT1j0E.b2BQ49awGO','asdf','asdf',NULL,'2019-08-25 15:51:50','2019-08-25 15:51:50'),(136,3289,'sssss','sssss','ddddd','dddf','ffff','aaaa','gggg','sddfsf@saflsdf.com','$2y$10$BebSF4R0/Dr7qw3OTHRe2eI6zW1rRMBZ4/Eg32Y1cxAp/fHG8CaKm','aasdsa','11',NULL,'2019-08-13 12:46:13','2019-08-13 12:46:13'),(138,1234,'asd','sssss','jkljk','dddf','ffff','sdf','gggg','dsfscx@saflsdf.com','$2y$10$eZcY6w7Jbd/YIKYFIPIAp./.m.9U2yKa7stPXI7lJYSLYtNnq4Rme','aasdsa','11',NULL,'2019-08-13 12:50:25','2019-08-23 02:51:52'),(143,2808,'asd','asda','asdasd','asdasd','asasdasd','asda','asdasd','goodfca18@outlook.com','$2y$10$ZpRoB3AEtuLp2zAih0LTTOAstKqhD7h/VmyIyar7zl3ego9E6HmIG','dasdf','asdfasdf',NULL,'2019-08-13 13:07:11','2019-08-13 13:07:11'),(144,7107,'asd','asda','asdasd','asdasd','asasdasd','asda','asdasd','goodfca1823@outlook.com','$2y$10$DoqJuJPP9ZzClMONFPpWkeav5jtRC8/dPBa2NrG.pYU6rGgayCAqS','dasdf','asdfasdf',NULL,'2019-08-13 13:12:07','2019-08-13 13:12:07'),(145,4547,'asd','asda','asdasd','asdasd','asasdasd','asda','asdasd','goodfca1823@outlook.co','$2y$10$iyLC5V4fmrPUu8SQsKG5JOmoQEMTwN.4zE7t2vzdfA2Mz4psU04U.','dasdf','asdfasdf',NULL,'2019-08-13 13:14:52','2019-08-13 13:14:52'),(148,6953,'ewrtyu','wertyu','wertyu','ertyu','ertyu','rftgyhujk','tryh','gofghfodfc18@outlook.com','$2y$10$VuasEd6znTD.FVN2pB90MuVo6PwrZehBXHamKX4Ec7urgEUvv3T5K','dgsdfg','sdfgsd',NULL,'2019-08-14 01:23:10','2019-08-14 01:23:10'),(149,6002,'s','s','s','s','s','s','s','goodsdsfce18@outlook.com','$2y$10$gD5JOcY9YJaokozA/Tfvu.pyy0tUhJ4QrAj0svEP/BP4IfLSiQjnu','dsd','sdsd',NULL,'2019-08-14 01:37:47','2019-08-14 01:37:47'),(150,2244,'h','hj','ghj','ghj','ghj','dfg','dfg','goodfca1823@ortutlook.co','$2y$10$4gmr8K/iR252fl2iSiAUgOy624ElEiAzRrea/yXRuRfFW/7jtxXBO','afg','sdfg',NULL,'2019-08-14 01:43:35','2019-08-14 01:43:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-29 18:40:46

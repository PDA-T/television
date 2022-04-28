-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: localhost    Database: qicaishijie
-- ------------------------------------------------------
-- Server version	5.5.62-log

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
-- Table structure for table `ryan_advert`
--

DROP TABLE IF EXISTS `ryan_advert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `content` mediumtext,
  `Type` text NOT NULL,
  `Mark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3111 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_advert`
--

LOCK TABLES `ryan_advert` WRITE;
/*!40000 ALTER TABLE `ryan_advert` DISABLE KEYS */;
INSERT INTO `ryan_advert` VALUES (1,1,'4.0.3','4',''),(2,1,'3','4',''),(3,1,'20','4',''),(4,1,'10','4',''),(5,1,'60','4',''),(6,1,'1','4',''),(7,1,'0','4',''),(8,1,'http://v.sigu.me/bo.php?url=','4',''),(9,1,'http://www.spzcr.cn/jx/?url=','4',''),(10,1,'https://jx.fuxing56.com/jiexi/?url=','4',''),(11,1,'https://www.playm3u8.cn/jiexi.php?url=','4',''),(12,1,'http://jx.598110.com/?url=','4',''),(13,1,'202252606','4',''),(14,1,'BM8QFV86KKMPV4DFQ7U0','4',''),(15,1,'80000000','4',''),(16,1,'4e458de610269a83e886c308bbef7ba3','4',''),(17,1,'60','4',''),(20,1,'888888','4',''),(21,1,'完美影视','4',''),(22,1,'https://***.com','4',''),(23,1,'https://***.com','4',''),(24,1,'https://***.com','4',''),(28,1,'PNS','4',''),(29,1,'10','4',''),(30,1,'https://***.com','4',''),(31,1,'一款可以看全网VIP影视又可以赚钱的APP','4',''),(32,1,'/public/static/v4/index/header-iphone.png','4',''),(33,1,'全网影视随意看,付费影片 ,关键词3 ,关键词4','4',''),(34,1,'5','4',''),(35,1,'','4',''),(39,1,NULL,'4',''),(40,1,'基础设置 - 固定 修改','4',''),(43,1,'0','4',''),(44,1,'','4',''),(45,1,'12','4',''),(46,1,'/public/static/v4/index/RyanLogo.png','4',''),(47,1,'','4',''),(48,1,'','4',''),(50,1,'我是副标题','4',''),(51,1,'/public/static/v4/wap/logo.png','4',''),(52,1,'/public/static/v4/wap/p1.png','4',''),(53,1,'https://i.loli.net/2020/02/09/bueE4yY7zRjsr2q.gif','4',''),(54,1,'标题 ①','4',''),(55,1,'小标题 ①','4',''),(56,1,'https://i.loli.net/2020/02/09/bueE4yY7zRjsr2q.gif','4',''),(57,1,'标题 ②','4',''),(58,1,'小标题 ②','4',''),(59,1,'https://i.loli.net/2020/02/09/bueE4yY7zRjsr2q.gif','4',''),(60,1,'标题 ③','4',''),(61,1,'小标题 ③','4',''),(62,1,'九百六十万','4',''),(63,1,'/public/static/v4/wap/bg1.png','4',''),(64,1,'/public/static/v4/wap/bg2.png','4',''),(65,1,'/public/static/v4/wap/bg3.png','4',''),(66,1,'1000','4',''),(67,1,'基础设置 - 邀请广告语 修改','4',''),(68,1,'300','4',''),(69,1,'','4',''),(70,1,'','4',''),(80,1,'1','4',''),(81,1,'1','4',''),(82,1,'1','4',''),(83,1,NULL,'4',''),(90,1,'1','4',''),(91,1,'0','4',''),(92,1,'0','4',''),(93,1,'0','4',''),(111,1,'https://i.loli.net/2019/10/18/k2G5h6gLpNuqjao.png','4',''),(112,1,'','4',''),(113,1,'','4',''),(114,1,'https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=3012500316,3102939603&fm=26&gp=0.jpg','4',''),(115,1,'../../images/b_10.png','4',''),(121,1,NULL,'4',''),(126,1,'100','4',''),(130,1,'1','4',''),(150,1,'','4',''),(151,1,'','4',''),(152,1,'','4',''),(153,1,'','4',''),(154,1,'1','4',''),(155,1,'0','4',''),(172,1,'0','4',''),(202,1,'','4',''),(223,1,'2','4',''),(300,1,'绝密飞行,七彩视频','4',''),(301,1,'1','4',''),(309,1,'0','4',''),(310,1,'','4',''),(311,1,'0','4',''),(312,1,'0','4',''),(330,1,'1','4',''),(352,1,'100','4',''),(353,1,'1','4',''),(354,1,'https://i.loli.net/2019/09/09/5okytIlO2qpmEdD.png','4',''),(355,1,'','4',''),(356,1,'5000','4',''),(357,1,'0','4',''),(358,1,'https://i.loli.net/2020/03/13/zbAfj7s15Bungwx.png','4',''),(360,1,'1','4',''),(370,1,'smtp.qq.com','4',''),(371,1,'465','4',''),(372,1,'1','4',''),(373,1,'1','4',''),(374,1,'自定义','4',''),(380,1,'1000','4',''),(390,1,'1','4',''),(400,1,'','4',''),(401,1,'','4',''),(402,1,'','4',''),(403,1,'','4',''),(410,1,'','4',''),(411,1,'','4',''),(412,1,'','4',''),(413,1,'','4',''),(414,1,'','4',''),(415,1,'','4',''),(1000,1,'1','4',''),(1001,1,'2','4',''),(1002,1,'3','4',''),(1003,1,'4','4',''),(1004,1,'5','4',''),(1010,1,'99999999999999','4',''),(1100,1,'1','4',''),(1200,1,'0','4',''),(1201,1,'5','4',''),(1202,1,'8','4',''),(1203,1,'3','4',''),(1204,1,'5','4',''),(1300,1,'dl8=','4',''),(1301,1,'L3BsYXksL20vLC94LywvY292ZXIv','4',''),(1302,1,'L2FsaXBheV92aWRlby8sL3ZpZGVvLw==','4',''),(1303,1,'Y2hhbm5lbGVk','4',''),(1304,1,'W1tbYQ==','4',''),(1305,1,'L3BsYXkv','4',''),(1306,1,'L2Iv','4',''),(1307,1,'L2RldGFpbA==','4',''),(1308,1,'L3Nob3cv','4',''),(1309,1,'L21wbGF5Lw==','4',''),(1400,1,'','4',''),(1401,1,'','4',''),(1402,1,'','4',''),(1410,1,'0','4',''),(1411,1,'完美网服','4',''),(1500,1,'1','4',''),(1501,1,'https://jiexi.071811.cc/jx.php?url=','4',''),(1502,1,'http://jx.youyitv.com/?url=','4',''),(1503,1,'http://www.qinfenkeji.com/jx/?url=','4',''),(1504,1,'http://jx.598110.com/?url=','4',''),(1505,1,'http://jx.598110.com/?url=','4',''),(2000,1,'0','4',''),(2001,1,'','4',''),(2002,1,'','4',''),(2003,1,'https://i.loli.net/2020/01/04/hAU6QcVXgDBjW5u.png','4',''),(2004,1,'','4',''),(2005,1,'https://i.loli.net/2020/01/04/Jv8f6hOUYnMAZDy.png','4',''),(2006,1,'','4',''),(2007,1,'https://i.loli.net/2020/01/04/w7nTExqHNDJMSUy.png','4',''),(2008,1,'','4',''),(2009,1,'https://i.loli.net/2020/01/04/lvbF9OSC5eDPGoh.png','4',''),(2010,1,'','4',''),(2100,1,'1','4',''),(3001,1,'https://i.loli.net/2020/01/28/DBqfzE24Fs8YpKm.png','4',''),(3002,1,'0','4',''),(3003,1,'0','4',''),(3004,1,'0','4',''),(3005,1,'0','4',''),(3006,1,'0','4',''),(3007,1,'0','4',''),(3008,1,'0','4',''),(3009,1,'0','4',''),(3010,1,'0','4',''),(3101,1,'','4',''),(3102,1,'0','4',''),(3103,1,'0','4',''),(3104,1,'0','4',''),(3105,1,'0','4',''),(3106,1,'0','4',''),(3107,1,'0','4',''),(3108,1,'0','4',''),(3109,1,'0','4',''),(3110,1,'0','4',''),(3111,1,'0','4','');
/*!40000 ALTER TABLE `ryan_advert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_advertisement`
--

DROP TABLE IF EXISTS `ryan_advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `linkurl` varchar(255) NOT NULL,
  `picurl` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `audit` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_advertisement`
--

LOCK TABLES `ryan_advertisement` WRITE;
/*!40000 ALTER TABLE `ryan_advertisement` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_advertisement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_agent_up_log`
--

DROP TABLE IF EXISTS `ryan_agent_up_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_agent_up_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cdkey` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_agent_up_log`
--

LOCK TABLES `ryan_agent_up_log` WRITE;
/*!40000 ALTER TABLE `ryan_agent_up_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_agent_up_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_artical`
--

DROP TABLE IF EXISTS `ryan_artical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `url` tinytext NOT NULL,
  `sort` int(11) NOT NULL,
  `picture` tinytext NOT NULL,
  `eject` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `popup_rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_artical`
--

LOCK TABLES `ryan_artical` WRITE;
/*!40000 ALTER TABLE `ryan_artical` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_artical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_attendance_log`
--

DROP TABLE IF EXISTS `ryan_attendance_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_attendance_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `give` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_attendance_log`
--

LOCK TABLES `ryan_attendance_log` WRITE;
/*!40000 ALTER TABLE `ryan_attendance_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_attendance_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_cdkey`
--

DROP TABLE IF EXISTS `ryan_cdkey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_cdkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cdkey` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `y` int(1) NOT NULL,
  `yid` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stime` int(11) DEFAULT NULL,
  `log` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_cdkey`
--

LOCK TABLES `ryan_cdkey` WRITE;
/*!40000 ALTER TABLE `ryan_cdkey` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_cdkey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_cdkey_log`
--

DROP TABLE IF EXISTS `ryan_cdkey_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_cdkey_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `money` decimal(11,2) NOT NULL DEFAULT '0.00',
  `invalid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_cdkey_log`
--

LOCK TABLES `ryan_cdkey_log` WRITE;
/*!40000 ALTER TABLE `ryan_cdkey_log` DISABLE KEYS */;
INSERT INTO `ryan_cdkey_log` VALUES (1,1585123176,1,'体验',1,0.00,0),(2,1585135767,1,'体验',2,0.00,0),(3,1585135819,1,'一月',2,0.00,0),(4,1585136863,1,'一月',1,0.00,0),(5,1585158815,1,'半年',2,0.00,0),(6,1586881495,1,'体验',1,0.00,0),(7,1587271667,1,'代理',1,0.00,0),(8,1587272348,1,'代理',1,0.00,0),(9,1587278496,1,'代理',1,0.00,0),(10,1588529746,1,'体验',1,0.00,0),(11,1588530595,1,'一月',1,0.00,0);
/*!40000 ALTER TABLE `ryan_cdkey_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_cdkey_type`
--

DROP TABLE IF EXISTS `ryan_cdkey_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_cdkey_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cost_price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gokaurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_cdkey_type`
--

LOCK TABLES `ryan_cdkey_type` WRITE;
/*!40000 ALTER TABLE `ryan_cdkey_type` DISABLE KEYS */;
INSERT INTO `ryan_cdkey_type` VALUES (1,'代理',88888.00,99999.00,'没事别删它 编辑即可',1010,1,'http://***.com');
/*!40000 ALTER TABLE `ryan_cdkey_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_dark_room`
--

DROP TABLE IF EXISTS `ryan_dark_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_dark_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `cause` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_dark_room`
--

LOCK TABLES `ryan_dark_room` WRITE;
/*!40000 ALTER TABLE `ryan_dark_room` DISABLE KEYS */;
INSERT INTO `ryan_dark_room` VALUES (1,'27.27.205.158','1585117120','REFERER'),(2,'180.163.220.67','1585117571','REFERER'),(3,'42.236.10.114','1585117596','REFERER'),(4,'42.236.10.125','1585117597','REFERER'),(5,'42.236.10.125','1585117597','REFERER'),(6,'42.236.10.114','1585117598','REFERER'),(7,'180.163.220.4','1585117640','REFERER'),(8,'180.163.220.4','1585117641','REFERER'),(9,'42.236.10.125','1585120743','REFERER'),(10,'101.89.239.232','1585122967','REFERER'),(11,'101.91.60.105','1585123075','REFERER'),(12,'61.151.178.180','1585123084','REFERER'),(13,'180.97.118.219','1585123131','REFERER'),(14,'101.89.239.232','1585123148','REFERER'),(15,'61.151.207.186','1585123150','REFERER'),(16,'101.227.139.194','1585123194','REFERER'),(17,'61.151.178.197','1585123199','REFERER'),(18,'61.151.178.166','1585123253','REFERER'),(19,'101.227.139.194','1585123275','REFERER'),(20,'61.129.8.179','1585123320','REFERER'),(21,'58.251.121.186','1585128718','REFERER'),(22,'61.129.6.251','1585128778','REFERER'),(23,'58.251.121.184','1585128804','REFERER'),(24,'58.251.121.186','1585128820','REFERER'),(25,'61.151.178.197','1585128825','REFERER'),(26,'101.89.239.120','1585128954','REFERER'),(27,'58.251.121.186','1585128958','REFERER'),(28,'61.129.6.251','1585128999','REFERER'),(29,'61.151.178.175','1585129036','REFERER'),(30,'59.36.119.227','1585135606','REFERER'),(31,'139.214.254.52','1585135610','REFERER'),(32,'180.97.118.219','1585135673','REFERER'),(33,'58.251.121.184','1585135771','REFERER'),(34,'101.91.62.11','1585135821','REFERER'),(35,'101.91.60.104','1585135891','REFERER'),(36,'61.151.207.186','1585136214','REFERER'),(37,'101.89.239.232','1585136668','REFERER'),(38,'101.91.62.11','1585136777','REFERER'),(39,'180.97.118.219','1585136829','REFERER'),(40,'101.227.139.173','1585136870','REFERER'),(41,'61.151.207.205','1585136999','REFERER'),(42,'58.251.121.186','1585137025','REFERER'),(43,'101.227.139.173','1585137058','REFERER'),(44,'59.36.119.226','1585141168','REFERER'),(45,'101.91.62.65','1585141192','REFERER'),(46,'101.89.239.230','1585141221','REFERER'),(47,'59.36.119.227','1585141302','REFERER'),(48,'58.251.121.185','1585141361','REFERER'),(49,'101.91.60.104','1585141376','REFERER'),(50,'61.151.207.158','1585141412','REFERER'),(51,'222.133.162.90','1585154086','REFERER'),(52,'222.133.162.90','1585154086','REFERER'),(53,'222.133.162.90','1585154098','REFERER'),(54,'101.89.19.149','1585198099','REFERER'),(55,'101.89.29.97','1585198167','REFERER'),(56,'101.91.60.106','1586881528','REFERER'),(57,'101.89.239.230','1586881552','REFERER'),(58,'61.151.178.180','1586881558','REFERER'),(59,'101.89.239.238','1586882238','REFERER'),(60,'61.129.6.251','1586882242','REFERER'),(61,'101.89.239.216','1586882296','REFERER'),(62,'180.97.118.223','1586882309','REFERER'),(63,'61.129.6.174','1586882394','REFERER'),(64,'61.151.207.186','1586882463','REFERER'),(65,'101.89.239.216','1586882476','REFERER'),(66,'101.91.62.65','1586882603','REFERER'),(67,'180.97.118.219','1586882608','REFERER'),(68,'61.151.178.174','1586882803','REFERER'),(69,'140.250.247.155','1586928478','REFERER'),(70,'61.129.7.235','1586928529','REFERER'),(71,'61.151.206.24','1587271676','REFERER'),(72,'61.151.206.24','1587271846','REFERER'),(73,'61.151.206.24','1587271887','REFERER'),(74,'61.151.206.24','1587271943','REFERER'),(75,'61.151.206.24','1587271952','REFERER'),(76,'61.151.206.24','1587271953','REFERER'),(77,'61.151.206.125','1587272053','REFERER'),(78,'61.151.178.197','1587272060','REFERER'),(79,'61.129.7.235','1587272087','REFERER'),(80,'101.91.62.89','1587272158','REFERER'),(81,'14.116.133.169','1587272301','REFERER'),(82,'61.151.206.24','1587272356','REFERER'),(83,'61.151.206.24','1587272540','REFERER'),(84,'101.91.60.106','1587278491','REFERER'),(85,'61.151.206.24','1587278504','REFERER'),(86,'180.97.118.219','1587278736','REFERER'),(87,'101.91.62.65','1587278861','REFERER'),(88,'61.129.6.227','1587278900','REFERER'),(89,'223.167.152.70','1587450342','REFERER'),(90,'101.89.239.230','1587450346','REFERER'),(91,'101.89.19.197','1587450427','REFERER'),(92,'61.151.207.158','1587450572','REFERER'),(93,'61.151.207.158','1587555474','REFERER'),(94,'101.91.62.65','1587555548','REFERER'),(95,'27.27.203.148','1588528390','REFERER'),(96,'27.27.203.148','1588528922','REFERER'),(97,'27.27.203.148','1588529737','REFERER'),(98,'27.27.203.148','1588530576','REFERER');
/*!40000 ALTER TABLE `ryan_dark_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_faq`
--

DROP TABLE IF EXISTS `ryan_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_faq`
--

LOCK TABLES `ryan_faq` WRITE;
/*!40000 ALTER TABLE `ryan_faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_integral_record`
--

DROP TABLE IF EXISTS `ryan_integral_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_integral_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `expend_num` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_integral_record`
--

LOCK TABLES `ryan_integral_record` WRITE;
/*!40000 ALTER TABLE `ryan_integral_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_integral_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_live`
--

DROP TABLE IF EXISTS `ryan_live`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_live` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `introduce` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `live_url` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_live`
--

LOCK TABLES `ryan_live` WRITE;
/*!40000 ALTER TABLE `ryan_live` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_live` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_operation_log`
--

DROP TABLE IF EXISTS `ryan_operation_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_operation_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_operation_log`
--

LOCK TABLES `ryan_operation_log` WRITE;
/*!40000 ALTER TABLE `ryan_operation_log` DISABLE KEYS */;
INSERT INTO `ryan_operation_log` VALUES (1,'','1585116364','登陆失败','27.27.205.158','账户名：admin  密码：123456','管理后台'),(2,'','1585116369','登陆失败','27.27.205.158','账户名：admin  密码：123456','管理后台'),(3,'','1585116421','登陆失败','27.27.205.158','账户名：Pnsadmin  密码：123456','管理后台'),(4,'1','1585116491','登录成功','27.27.205.158','无','管理后台'),(5,'1','1585116620','编辑基础信息','27.27.205.158','无','管理后台'),(6,'1','1585116689','编辑基础信息','27.27.205.158','无','管理后台'),(7,'1','1585117153','编辑 海报信息','27.27.205.158','麒彩网络','管理后台'),(8,'1','1585117164','编辑 海报信息','27.27.205.158','麒彩网络二','管理后台'),(9,'','1585117451','登陆失败','112.20.57.42','账户名： pnsadmin  密码：123456','管理后台'),(10,'','1585117457','登陆失败','112.20.57.42','账户名： pnsadmin  密码：12345678','管理后台'),(11,'','1585117471','登陆失败','112.20.57.42','账户名：pnsadmin  密码：123456','管理后台'),(12,'','1585117483','登陆失败','112.20.57.42','账户名：dmin  密码：123456','管理后台'),(13,'','1585117496','登陆失败','112.20.57.42','账户名：pnsadmin  密码：123456','管理后台'),(14,'','1585117501','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(15,'1','1585117503','登录成功','112.20.57.42','无','管理后台'),(16,'1','1585117545','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(17,'1','1585117545','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(18,'1','1585117545','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(19,'1','1585117545','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(20,'1','1585117545','登录成功','112.20.57.42','无','管理后台'),(21,'1','1585117545','登陆失败','112.20.57.42','账户名：pnsadmin  密码：12345678','管理后台'),(22,'1','1585117552','登陆失败','112.20.57.42','账户名：pnsadmin  密码：123456','管理后台'),(23,'1','1585117555','登录成功','112.20.57.42','无','管理后台'),(24,'','1585121052','登陆失败','61.158.149.119','账户名：pnsadmin  密码：123456','管理后台'),(25,'','1585121071','登陆失败','61.158.149.119','账户名：pnsadmin  密码：123456','管理后台'),(26,'','1585122115','登陆失败','61.158.149.119','账户名：pnsadmin  密码：123456','管理后台'),(27,'','1585122134','登陆失败','61.158.149.119','账户名：admin  密码：123456','管理后台'),(28,'','1585122151','登陆失败','61.158.149.119','账户名：qaz123456  密码：123456','管理后台'),(29,'','1585122742','登陆失败','139.214.254.52','账户名：pnsadmin  密码：123456','管理后台'),(30,'','1585122757','登陆失败','139.214.254.52','账户名：pnsadmin  密码：123456','管理后台'),(31,'','1585122782','登陆失败','139.214.254.52','账户名：admin  密码：123456','管理后台'),(32,'','1585122845','登陆失败','27.27.205.158','账户名：Pnsadmin  密码：123456','管理后台'),(33,'1','1585122848','登录成功','27.27.205.158','无','管理后台'),(34,'1','1585122895','登录成功','61.158.149.119','无','管理后台'),(35,'1','1585122959','登录成功','139.214.254.52','无','管理后台'),(36,'1','1585123176','生成激活码','61.158.149.119','1张体验','管理后台'),(37,'1','1585128644','登录成功','139.214.254.52','无','管理后台'),(38,'','1585129809','登陆失败','27.185.1.11','账户名：www.qctvv.cn  密码：www.qctvv.cn','管理后台'),(39,'','1585130209','登陆失败','27.185.1.11','账户名：admin  密码：admin','管理后台'),(40,'','1585130217','登陆失败','27.185.1.11','账户名：admin  密码：123456','管理后台'),(41,'','1585130316','登陆失败','182.32.235.174','账户名：admin  密码：admin','管理后台'),(42,'','1585130331','登陆失败','182.32.235.174','账户名：admin  密码：123456','管理后台'),(43,'','1585130369','登陆失败','182.32.235.174','账户名：admin  密码：123','管理后台'),(44,'1','1585135590','登录成功','139.214.254.52','无','管理后台'),(45,'1','1585135626','登录成功','139.214.254.52','无','管理后台'),(46,'1','1585135767','生成激活码','139.214.254.52','2张体验','管理后台'),(47,'1','1585135819','生成激活码','139.214.254.52','2张一月','管理后台'),(48,'1','1585136863','生成激活码','139.214.254.52','1张一月','管理后台'),(49,'1','1585141040','登录成功','139.214.254.52','无','管理后台'),(50,'','1585141891','登陆失败','115.148.87.136','账户名：admin  密码：123456','管理后台'),(51,'','1585141898','登陆失败','115.148.87.136','账户名：admin  密码：admin888','管理后台'),(52,'','1585141903','登陆失败','115.148.87.136','账户名：admin  密码：123456','管理后台'),(53,'1','1585154080','登录成功','27.27.200.219','无','管理后台'),(54,'1','1585154083','登录成功','222.133.162.90','无','管理后台'),(55,'1','1585154095','登录成功','222.133.162.90','无','管理后台'),(56,'1','1585154155','编辑SMTP设置','27.27.200.219','无','管理后台'),(57,'1','1585154243','登录成功','222.168.166.27','无','管理后台'),(58,'1','1585156219','登录成功','222.168.166.27','无','管理后台'),(59,'1','1585158815','生成激活码','222.168.166.27','2张半年','管理后台'),(60,'','1585198010','登陆失败','140.243.30.114','账户名：admin  密码：admin','管理后台'),(61,'1','1585198013','登录成功','27.27.200.219','无','管理后台'),(62,'1','1585198037','登录成功','140.243.30.114','无','管理后台'),(63,'','1585210507','登陆失败','125.41.242.67','账户名：admin  密码：123456','管理后台'),(64,'','1585210513','登陆失败','125.41.242.67','账户名：admin  密码：admin','管理后台'),(65,'','1585210524','登陆失败','125.41.242.67','账户名：admin  密码：admin888','管理后台'),(66,'','1585210531','登陆失败','125.41.242.67','账户名：admin  密码：admiin123','管理后台'),(67,'','1585210535','登陆失败','125.41.242.67','账户名：admin  密码：123321','管理后台'),(68,'','1585220723','登陆失败','119.185.80.25','账户名：admin  密码：admin','管理后台'),(69,'1','1585283322','登录成功','27.27.205.117','无','管理后台'),(70,'','1585436843','登陆失败','182.86.37.210','账户名：admin  密码：admin888','管理后台'),(71,'','1585436848','登陆失败','182.86.37.210','账户名：admin  密码：12345','管理后台'),(72,'','1585436852','登陆失败','182.86.37.210','账户名：admin  密码：123456','管理后台'),(73,'','1585471191','登陆失败','125.94.180.47','账户名：admin  密码：admin','管理后台'),(74,'','1585471195','登陆失败','125.94.180.47','账户名：admin  密码：123456','管理后台'),(75,'','1585486106','登陆失败','124.236.57.129','账户名：admin  密码：admin','管理后台'),(76,'','1585486117','登陆失败','124.236.57.129','账户名：admin  密码：admin888','管理后台'),(77,'','1585486130','登陆失败','124.236.57.129','账户名：admin  密码：admin666','管理后台'),(78,'','1585758708','登陆失败','120.239.11.160','账户名：admin  密码：admin','管理后台'),(79,'','1585758716','登陆失败','120.239.11.160','账户名：admin  密码：123456','管理后台'),(80,'1','1585834295','登录成功','222.168.183.38','无','管理后台'),(81,'1','1586015375','登录成功','222.168.183.38','无','管理后台'),(82,'1','1586195613','登录成功','222.168.183.38','无','管理后台'),(83,'','1586272017','登陆失败','182.32.29.177','账户名：admin  密码：admin','管理后台'),(84,'','1586272029','登陆失败','182.32.29.177','账户名：admin  密码：admin666','管理后台'),(85,'','1586272043','登陆失败','182.32.29.177','账户名：admin  密码：admin666','管理后台'),(86,'','1586279120','登陆失败','125.83.182.146','账户名：admin  密码：admin','管理后台'),(87,'','1586279136','登陆失败','125.83.182.146','账户名：admin  密码：admin123','管理后台'),(88,'','1586437253','登陆失败','180.137.107.223','账户名：admin  密码：admin','管理后台'),(89,'','1586438168','登陆失败','180.137.107.223','账户名：15078710200  密码：bb302010','管理后台'),(90,'','1586438362','登陆失败','180.137.107.223','账户名：15078710200  密码：bb302010','管理后台'),(91,'','1586438571','登陆失败','180.137.107.223','账户名：15078710200  密码：123qwe','管理后台'),(92,'1','1586881457','登录成功','140.250.247.155','无','管理后台'),(93,'1','1586881495','生成激活码','140.250.247.155','0张体验','管理后台'),(94,'1','1586882137','登录成功','111.62.212.98','无','管理后台'),(95,'1','1586882558','进入调试模式','140.250.247.155','失败1','管理后台'),(96,'','1586979059','登陆失败','106.42.216.115','账户名：admin  密码：123456','管理后台'),(97,'','1587051637','登陆失败','39.70.92.235','账户名：admin  密码：admin','管理后台'),(98,'','1587270189','登陆失败','27.27.204.121','账户名：Pnsadmin  密码：123456','管理后台'),(99,'','1587270204','登陆失败','27.27.204.121','账户名：Pnsadmin  密码：qaz123456','管理后台'),(100,'','1587270222','登陆失败','27.27.204.121','账户名：Pnsadmin  密码：88888888','管理后台'),(101,'1','1587270286','登录成功','27.27.204.121','无','管理后台'),(102,'1','1587271582','登录成功','218.26.54.78','无','管理后台'),(103,'1','1587271667','生成激活码','218.26.54.78','1张代理','管理后台'),(104,'1','1587272311','登录成功','218.26.54.78','无','管理后台'),(105,'1','1587272348','生成激活码','218.26.54.78','1张代理','管理后台'),(106,'1','1587277865','登录成功','218.26.54.78','无','管理后台'),(107,'1','1587278434','登录成功','218.26.54.78','无','管理后台'),(108,'1','1587278496','生成激活码','218.26.54.78','1张代理','管理后台'),(109,'1','1587449627','登录成功','27.198.242.168','无','管理后台'),(110,'','1587449859','退出登录','27.198.242.168','无','管理后台'),(111,'','1587554797','登陆失败','122.5.65.139','账户名：admin  密码：12356','管理后台'),(112,'1','1587554801','登录成功','122.5.65.139','无','管理后台'),(113,'1','1587554825','编辑高级功能','122.5.65.139','无','管理后台'),(114,'1','1587649860','登录成功','27.185.1.34','无','管理后台'),(115,'1','1587650049','编辑用户信息','27.185.1.34','1 / Pnsadmin','管理后台'),(116,'1','1587650064','编辑用户信息','27.185.1.34','1 / Pnsadmin','管理后台'),(117,'1','1587650082','编辑用户信息','27.185.1.34','1 / Pnsadmin','管理后台'),(118,'1','1588528460','登陆失败','27.27.203.148','账户名：pnsadmin  密码：864052','管理后台'),(119,'1','1588528465','登录成功','27.27.203.148','无','管理后台'),(120,'1','1588528504','新增 特权影视','27.27.203.148','搜狐','管理后台'),(121,'1','1588528588','新增 特权影视','27.27.203.148','咪咕视频','管理后台'),(122,'1','1588528613','新增 特权影视','27.27.203.148','芒果','管理后台'),(123,'1','1588528622','编辑 特权影视','27.27.203.148','芒果','管理后台'),(124,'1','1588528651','新增 特权影视','27.27.203.148','PPTV','管理后台'),(125,'1','1588528677','新增 特权影视','27.27.203.148','M1905','管理后台'),(126,'1','1588528697','编辑 特权影视','27.27.203.148','M1905','管理后台'),(127,'1','1588528738','新增 特权影视','27.27.203.148','美剧TV','管理后台'),(128,'1','1588528764','新增 特权影视','27.27.203.148','韩剧TV','管理后台'),(129,'1','1588528847','登陆失败','27.27.203.148','账户名：pnsadmin  密码：864052','管理后台'),(130,'1','1588528851','登录成功','27.27.203.148','无','管理后台'),(131,'1','1588528930','登录成功','27.27.203.148','无','管理后台'),(132,'1','1588528994','新增 特权影视','27.27.203.148','全网影视','管理后台'),(133,'1','1588529051','新增 特权影视','27.27.203.148','无损音乐','管理后台'),(134,'1','1588529290','新增 推荐影视','27.27.203.148','民间奇异志','管理后台'),(135,'1','1588529450','新增 推荐影视','27.27.203.148','鬼吹灯之龙岭神宫','管理后台'),(136,'1','1588529599','新增 推荐影视','27.27.203.148','加油李先生','管理后台'),(137,'1','1588529640','编辑SMTP设置','27.27.203.148','无','管理后台'),(138,'1','1588529646','编辑SMTP设置','27.27.203.148','无','管理后台'),(139,'1','1588529746','生成激活码','27.27.203.148','1张体验','管理后台'),(140,'1','1588529871','登录成功','27.27.203.148','无','管理后台'),(141,'1','1588530223','编辑解析接口','27.27.203.148','无','管理后台'),(142,'1','1588530347','编辑基础信息','27.27.203.148','无','管理后台'),(143,'1','1588530396','编辑基础信息','27.27.203.148','无','管理后台'),(144,'1','1588530411','编辑基础信息','27.27.203.148','无','管理后台'),(145,'1','1588530595','生成激活码','27.27.203.148','1张一月','管理后台');
/*!40000 ALTER TABLE `ryan_operation_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_order`
--

DROP TABLE IF EXISTS `ryan_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `receipt_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `out_trade_no` varchar(255) NOT NULL,
  `trade_no` varchar(255) NOT NULL,
  `buyer_logon_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `gmt_create` varchar(255) NOT NULL,
  `gmt_payment` varchar(255) NOT NULL,
  `trade_status` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_order`
--

LOCK TABLES `ryan_order` WRITE;
/*!40000 ALTER TABLE `ryan_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_privilege`
--

DROP TABLE IF EXISTS `ryan_privilege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `cid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `linkurl` varchar(255) NOT NULL,
  `picurl` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `audit` int(11) NOT NULL DEFAULT '0',
  `del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_privilege`
--

LOCK TABLES `ryan_privilege` WRITE;
/*!40000 ALTER TABLE `ryan_privilege` DISABLE KEYS */;
INSERT INTO `ryan_privilege` VALUES (1,1,2,'爱奇艺','','https://m.iqiyi.com/vip/search','https://i.loli.net/2019/11/07/ycfKLNlGCjJxn2i.jpg',1,2,0),(2,1,2,'腾讯','','https://v.qq.com/tv/','https://i.loli.net/2019/11/07/SiwoEz5KI1kjUQx.png',2,2,0),(3,1,2,'优酷','','http://www.youku.com','https://i.loli.net/2019/11/07/2t6L7wbcG4dhyYo.jpg',3,2,0),(4,1,2,'搜狐','','https://tv.sohu.com/','https://i.loli.net/2019/11/07/umDrROYGsFyxt36.jpg',4,2,0),(5,1,2,'咪咕视频','咪咕视频','http://m.miguvideo.com/','https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2963642881,410059892&fm=26&gp=0.jpg',5,2,0),(6,1,2,'芒果','芒果','https://m.mgtv.com/channel/home','https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=3926144043,2627682292&fm=26&gp=0.jpg',6,2,0),(7,1,2,'PPTV','','http://pptv.com','https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=2546812969,317265521&fm=26&gp=0.jpg',7,2,0),(8,1,2,'M1905','','https://m.1905.com','https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2198593608,1160868579&fm=26&gp=0.jpg',8,2,0),(9,1,2,'美剧TV','','https://www.99meiju.tv/','https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1588435202696&di=cceabca8b8f04dd6f0e531254703b171&imgtype=0&src=http%3A%2F%2Fpic.qqtn.com%2Fup%2F2016-11%2F20161130164998363.png',9,2,0),(10,1,2,'韩剧TV','','https://www.hanjutv.com/','https://i.loli.net/2019/11/07/Q36iR4Zv1SUGwCq.png',10,2,0),(11,1,2,'全网影视','','https://app.movie/','https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1429873232,2450015677&fm=26&gp=0.jpg',11,2,0),(12,1,2,'无损音乐','','http://m.178ln.com/','https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1588523527111&di=bcbbb8898e14e2f7db9a2343d5b6a65a&imgtype=0&src=http%3A%2F%2Fpic.962.net%2Fup%2F2016-4%2F2016418917511892.png',12,2,0);
/*!40000 ALTER TABLE `ryan_privilege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_rebate`
--

DROP TABLE IF EXISTS `ryan_rebate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_rebate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `get_id` int(11) NOT NULL,
  `give_id` int(11) NOT NULL,
  `money` decimal(11,2) NOT NULL,
  `info` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_rebate`
--

LOCK TABLES `ryan_rebate` WRITE;
/*!40000 ALTER TABLE `ryan_rebate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_rebate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_rebate_cashout_log`
--

DROP TABLE IF EXISTS `ryan_rebate_cashout_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_rebate_cashout_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) CHARACTER SET latin1 NOT NULL,
  `time` int(22) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `zfb` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_rebate_cashout_log`
--

LOCK TABLES `ryan_rebate_cashout_log` WRITE;
/*!40000 ALTER TABLE `ryan_rebate_cashout_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_rebate_cashout_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_rebate_set`
--

DROP TABLE IF EXISTS `ryan_rebate_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_rebate_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_rebate_a` int(11) NOT NULL,
  `agent_rebate_b` int(11) NOT NULL,
  `agent_rebate_c` int(11) NOT NULL,
  `minimum_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_rebate_set`
--

LOCK TABLES `ryan_rebate_set` WRITE;
/*!40000 ALTER TABLE `ryan_rebate_set` DISABLE KEYS */;
INSERT INTO `ryan_rebate_set` VALUES (1,50,20,10,100);
/*!40000 ALTER TABLE `ryan_rebate_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_share_log`
--

DROP TABLE IF EXISTS `ryan_share_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_share_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(11) NOT NULL,
  `ip` text NOT NULL,
  `state` text NOT NULL,
  `time` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_share_log`
--

LOCK TABLES `ryan_share_log` WRITE;
/*!40000 ALTER TABLE `ryan_share_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_share_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_share_poster`
--

DROP TABLE IF EXISTS `ryan_share_poster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_share_poster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_share_poster`
--

LOCK TABLES `ryan_share_poster` WRITE;
/*!40000 ALTER TABLE `ryan_share_poster` DISABLE KEYS */;
INSERT INTO `ryan_share_poster` VALUES (1,'麒彩网络二','https://i.loli.net/2020/03/13/zSfpwk9Oc1sidGq.jpg'),(2,'麒彩网络','https://i.loli.net/2019/09/09/5okytIlO2qpmEdD.png');
/*!40000 ALTER TABLE `ryan_share_poster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_sms_code`
--

DROP TABLE IF EXISTS `ryan_sms_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_sms_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `smscode` varchar(255) NOT NULL,
  `smsid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_sms_code`
--

LOCK TABLES `ryan_sms_code` WRITE;
/*!40000 ALTER TABLE `ryan_sms_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_sms_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_user`
--

DROP TABLE IF EXISTS `ryan_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Source` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL DEFAULT '2',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `parentid` int(11) NOT NULL DEFAULT '1',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `logintime` int(11) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00',
  `limit_money` int(11) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `sign` int(11) NOT NULL DEFAULT '0',
  `share_ma` varchar(255) DEFAULT NULL,
  `zfb` text NOT NULL,
  `weichat` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `tx` int(111) NOT NULL,
  `txje` int(111) NOT NULL,
  `qdtime` int(11) DEFAULT NULL,
  `banner_switch` int(11) NOT NULL DEFAULT '1',
  `deviceId` varchar(255) DEFAULT NULL,
  `zfb_name` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `safetycode` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_user`
--

LOCK TABLES `ryan_user` WRITE;
/*!40000 ALTER TABLE `ryan_user` DISABLE KEYS */;
INSERT INTO `ryan_user` VALUES (1,'超管','admin','0c7540eb7e65b553ec1ba6b20de79608','完美','0','1',1,0,1588529871,0,8888888.00,0,1,'','7a313a323b480017',37,0,'SUNPNS','','MO-MIN-F 自己修改','',0,0,NULL,1,'PerfectNetworkService','','',166098756);
/*!40000 ALTER TABLE `ryan_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_video`
--

DROP TABLE IF EXISTS `ryan_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_video`
--

LOCK TABLES `ryan_video` WRITE;
/*!40000 ALTER TABLE `ryan_video` DISABLE KEYS */;
INSERT INTO `ryan_video` VALUES (1,'民间奇异志','http://cn2.3days.cc/1588522498984353.png','HD高清$http://cn4.18787000118.com/hls/20200503/f432152a71cb3ed38bbe668af42ca421/index.m3u8','影片讲述了在一个没有被历史所记载的朝代，因为它很短，而在这短短的十余年中，相传勾陈大帝留在凡间用来镇妖封煞的镇妖石被天火所毁，百妖肆出，从此举国上下都在忙活着研究同一件事儿，如何降妖。影片不仅呈现出了中国传统文化的艺术魅力和现实主义，还通过人和妖两族的争斗，暗喻了人和大自然之间的关系。','奇幻','中国',0),(2,'鬼吹灯之龙岭神宫','http://cn2.3days.cc/1587816406639832.png','HD高清$http://cn7.18787000118.com/hls/20200425/c6470fef4364da212a3d901b82c56456/index.m3u8','传闻龙岭迷窟中出土过龙骨异文，Shirley杨前往调查遇到胡八一等人，在幽灵空冢一探究竟，胡八一询问红斑之事，Shirley杨道出当年鹧鸪哨的故事。自精绝古城回来Shirley杨带陈教授回美国治疗，发现背上长出眼球状的红斑。胡八一与王胖子、大金牙前往古蓝县进货，遇到Shirley杨。随后四人进到一座幽灵冢寻找无果，险些葬于人面蜘蛛的果腹。出来后，胡八一和王胖子也长出红斑，Shirley杨拿着外公鹧鸪哨的笔记，告诉他们黑水城的通天大佛寺中，也许藏有解开红斑诅咒的关键雮尘珠。在他们进到寺内，对抗黑玉邪神时发现','动作','中国',0),(3,'加油李先生','https://bkimg.cdn.bcebos.com/pic/8b13632762d0f7034e409fca07fa513d2697c532?x-bce-process=image/resize,m_lfit,w_268,limit_1/format,f_jpg','HD高清$http://cn3.merrytime.cc/hls/20180925/33ffc1a75851cfde705d85fa38de5ccf/1537832524/index.m3u8','成为电影导演是Byeong-Heon的梦想。由于他与助理导演的麻烦，他在退出制作团队后开始写剧本首次亮相。一个电视制作团队开始拍摄他的日常生活和准备一部纪录片，但事实证明他是懒惰的缩影。他每天都喝酒;它需要超过8小时..','喜剧','韩国',0);
/*!40000 ALTER TABLE `ryan_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_video_history`
--

DROP TABLE IF EXISTS `ryan_video_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_video_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_video_history`
--

LOCK TABLES `ryan_video_history` WRITE;
/*!40000 ALTER TABLE `ryan_video_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_video_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ryan_vip_up_log`
--

DROP TABLE IF EXISTS `ryan_vip_up_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ryan_vip_up_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cdkey` varchar(255) NOT NULL,
  `provider` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ryan_vip_up_log`
--

LOCK TABLES `ryan_vip_up_log` WRITE;
/*!40000 ALTER TABLE `ryan_vip_up_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `ryan_vip_up_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-04  2:45:15

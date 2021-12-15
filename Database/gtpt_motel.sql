-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: gtpt
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `motel`
--

DROP TABLE IF EXISTS `motel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int DEFAULT NULL,
  `area` int DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latlng` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `district_id` int DEFAULT NULL,
  `utilities` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `approve` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motel`
--

LOCK TABLES `motel` WRITE;
/*!40000 ALTER TABLE `motel` DISABLE KEYS */;
INSERT INTO `motel` VALUES (1,'Phòng trọ tầng 2','không',8000000,12,6,'27  Nguyễn Du',NULL,'1.png',1,1,1000,'Wifi','2021-12-13 07:00:00','0123456789',0),(2,'Phòng trọ tầng 2','không',4000000,12,5,'27  Nguyễn Du',NULL,'2.jpg',1,1,1000,'Wifi','2021-12-13 07:30:00','0123456789',1),(3,'Phòng trọ tầng 2','không',5000000,12,19,'27  Nguyễn Du',NULL,'3.jpg',1,1,1000,'Wifi','2021-12-13 07:31:00','0123456789',0),(4,'Phòng trọ tầng 2','không',7000000,12,2,'27  Nguyễn Du',NULL,'4.jpg',1,1,1000,'Wifi','2021-12-13 07:50:00','0123456789',0),(6,'Phòng trọ tầng 2','không',7000000,12,1,'27  Nguyễn Du',NULL,'4.jpg',1,1,1000,'Wifi','2021-12-13 07:50:00','0123452689',0),(7,'Chung cư','không',7000000,12,1,'27  Nguyễn Du',NULL,'4.jpg',1,1,1000,'Wifi','2021-12-13 07:50:00','0123452689',0),(8,'Nhà cấp 4','không',7000000,12,1,'27  Nguyễn Du',NULL,'4.jpg',1,1,1000,'Wifi','2021-12-13 07:50:00','0123452689',0);
/*!40000 ALTER TABLE `motel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-14 14:07:50

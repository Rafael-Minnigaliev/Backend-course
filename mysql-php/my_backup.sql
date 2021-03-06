-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'╨Я╨╕╨╜╨│╨▓╨╕╨╜╤Л ╨╜╨░╤Г╤З╨╕╨╗╨╕╤Б╤М ╨╗╨╡╤В╨░╤В╤М','╨и╨╛╨║╨╕╤А╤Г╤О╤Й╨░╤П ╨╜╨╛╨▓╨╛╤Б╤В╤М ╨┐╨╛╤А╨░╨╖╨╕╨╗╨░ ╨╛╨▒╤Й╨╡╤Б╤В╨▓╨╡╨╜╨╜╨╛╤Б╤В╤М!'),(2,1,'╨Т ╨│╨╛╤А╨╛╨┤╨╡ N ╨╛╨▒╨╜╨░╤А╤Г╨╢╨╡╨╜ ╨╖╨╛╨╝╨▒╨╕-╨▓╨╕╤А╤Г╤Б','╨и╨╛╨║╨╕╤А╤Г╤О╤Й╨░╤П ╨╜╨╛╨▓╨╛╤Б╤В╤М ╨┐╨╛╤А╨░╨╖╨╕╨╗╨░ ╨╛╨▒╤Й╨╡╤Б╤В╨▓╨╡╨╜╨╜╨╛╤Б╤В╤М!'),(3,2,'╨Ъ╨╛╤В╨╕╨║╨╕ ╤Б╨╜╨╕╨╢╨░╤О╤В ╤Г╤А╨╛╨▓╨╡╨╜╤М ╤Б╤В╤А╨╡╤Б╤Б╨░','╨г╤Б╨┐╨╛╨║╨░╨╕╨▓╨░╤О╤Й╨░╤П ╨╜╨╛╨▓╨╛╤Б╤В╤М ╤А╨░╤Б╤Б╨╗╨░╨▒╨╕╨╗╨░ ╨╛╨▒╤Й╨╡╤Б╤В╨▓╨╡╨╜╨╜╨╛╤Б╤В╤М');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_categories`
--

DROP TABLE IF EXISTS `articles_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles_categories` (
  `article_id` int NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`article_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_categories`
--

LOCK TABLES `articles_categories` WRITE;
/*!40000 ALTER TABLE `articles_categories` DISABLE KEYS */;
INSERT INTO `articles_categories` VALUES (1,3),(2,2),(3,1),(3,3);
/*!40000 ALTER TABLE `articles_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'╨е╨╛╤А╨╛╤И╨╕╨╡ ╨╜╨╛╨▓╨╛╤Б╤В╨╕'),(2,'╨Я╨╗╨╛╤Е╨╕╨╡ ╨╜╨╛╨▓╨╛╤Б╤В╨╕'),(3,'╨Э╨╛╨▓╨╛╤Б╤В╨╕ ╨╛ ╨╢╨╕╨▓╨╛╤В╨╜╤Л╤Е');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` int NOT NULL,
  `about` text,
  `vk_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id1'),(3,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id3'),(4,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id4'),(5,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id5'),(6,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id6'),(7,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id7'),(8,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id8'),(9,'╨б╤В╤А╨╡╤Б╤Б╨╛╤Г╤Б╤В╨╛╨╣╤З╨╕╨▓╨╛╤Б╤В╤М, ╨║╨╛╨╝╨╝╤Г╨╜╨╕╨║╨░╨▒╨╡╨╗╤М╨╜╨╛╤Б╤В╤М','https://vk.com/id9');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `name_idx` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'x1@php.zone','╨Ш╨▓╨░╨╜'),(3,'x3@php.zone','╨Р╨╗╨╡╨║╤Б╨░╨╜╨┤╤А'),(4,'x4@php.zone','╨Х╨╗╨╡╨╜╨░'),(5,'x5@php.zone','╨Ю╨╗╤М╨│╨░'),(6,'x6@php.zone','╨Ь╨░╤В╨▓╨╡╨╣'),(7,'x7@php.zone','╨Ш╨▓╨░╨╜'),(8,'x8@php.zone','╨Я╤С╤В╤А'),(9,'x9@php.zone','╨Ш╨▓╨░╨╜');
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

-- Dump completed on 2022-05-20 11:41:14

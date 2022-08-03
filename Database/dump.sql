-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: agatecnologia_db
-- ------------------------------------------------------
-- Server version	8.0.28

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

CREATE DATABASE agatecnologia_db;
USE agatecnologia_db;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `adm` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'AGA Tecnologia','aga@teste.com','f7c3bc1d808e04732adf679965ccc34ca7ae3441','S'),(2,'Gabriel Oliveira','gabriel@teste.com','f7c3bc1d808e04732adf679965ccc34ca7ae3441','N');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pergunta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT 'S',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta`
--

LOCK TABLES `pergunta` WRITE;
/*!40000 ALTER TABLE `pergunta` DISABLE KEYS */;
INSERT INTO `pergunta` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed mauris turpis. Praesent fermentum ac nisi id placerat. Quisque non dictum libero, quis ultrices nunc?','S'),(2,'Curabitur sit amet sapien posuere, suscipit risus id, suscipit tellus. Sed quis lobortis odio. Ut eleifend iaculis pellentesque. Aliquam sed lorem vitae ante hendrerit rutrum. In lacinia molestie velit ac auctor?','S'),(3,'Nam nec ligula in ex commodo egestas id id lectus. Praesent cursus aliquam condimentum. In at magna faucibus, dapibus arcu eget, rutrum justo. Curabitur orci dui, finibus quis imperdiet id?','S');
/*!40000 ALTER TABLE `pergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta`
--

DROP TABLE IF EXISTS `resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resposta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pergunta` int NOT NULL,
  `descricao` text NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_pergunta` (`id_pergunta`),
  CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`id_pergunta`) REFERENCES `pergunta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` VALUES (1,1,'Nulla arcu nisl, pulvinar ac dictum et, facilisis hendrerit erat. Nulla euismod ligula vitae risus fringilla ullamcorper. Quisque malesuada nunc eu vulputate rhoncus. Mauris condimentum lorem ut quam mollis condimentum. Donec fringilla, velit sit amet viverra egestas, est nibh fermentum mauris, eget porta neque magna vel diam.','2022-08-03 18:13:24'),(2,2,'Nulla arcu nisl, pulvinar ac dictum et, facilisis hendrerit erat. Nulla euismod ligula vitae risus fringilla ullamcorper. Quisque malesuada nunc eu vulputate rhoncus. Mauris condimentum lorem ut quam mollis condimentum. Donec fringilla, velit sit amet viverra egestas, est nibh fermentum mauris, eget porta neque magna vel diam.','2022-08-03 18:13:24'),(3,3,'Nulla arcu nisl, pulvinar ac dictum et, facilisis hendrerit erat. Nulla euismod ligula vitae risus fringilla ullamcorper. Quisque malesuada nunc eu vulputate rhoncus. Mauris condimentum lorem ut quam mollis condimentum. Donec fringilla, velit sit amet viverra egestas, est nibh fermentum mauris, eget porta neque magna vel diam.','2022-08-03 18:13:24'),(4,1,'Duis vel ipsum at est auctor fermentum eget vitae arcu. Mauris ac sodales turpis, nec egestas sem. Nullam fermentum, augue ut condimentum aliquam, massa magna mollis nunc','2022-08-03 18:13:56'),(5,2,'Duis vel ipsum at est auctor fermentum eget vitae arcu. Mauris ac sodales turpis, nec egestas sem. Nullam fermentum, augue ut condimentum aliquam, massa magna mollis nunc','2022-08-03 18:13:56');
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-03 15:18:21

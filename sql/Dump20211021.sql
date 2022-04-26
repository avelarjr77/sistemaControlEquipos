CREATE DATABASE  IF NOT EXISTS `equipogestion` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `equipogestion`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: equipogestion
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `cpudispositivo`
--

DROP TABLE IF EXISTS `cpudispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cpudispositivo` (
  `idCpuDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipo` int(11) DEFAULT NULL,
  `idDispositivos` int(11) DEFAULT NULL,
  `idMarca` int(11) DEFAULT NULL,
  `idModelo` int(11) DEFAULT NULL,
  `serieDispositivo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idCpuDispositivo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpudispositivo`
--

LOCK TABLES `cpudispositivo` WRITE;
/*!40000 ALTER TABLE `cpudispositivo` DISABLE KEYS */;
INSERT INTO `cpudispositivo` VALUES (1,1,1,1,1,'133'),(2,1,2,4,4,'133'),(3,1,3,10,5,'133'),(4,1,4,3,7,'133');
/*!40000 ALTER TABLE `cpudispositivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `departamentos` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'CC1'),(2,'CC2'),(3,'Academica'),(4,'Colecturia');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositivos` (
  `idDispositivos` int(11) NOT NULL AUTO_INCREMENT,
  `detalleDispositivo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idDispositivos`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivos`
--

LOCK TABLES `dispositivos` WRITE;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
INSERT INTO `dispositivos` VALUES (1,'RAM'),(2,'Disco Duro'),(3,'Tarjeta Madre'),(4,'Procesador');
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo` (
  `idEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoEquipo` int(11) DEFAULT NULL,
  `Inventario` char(150) COLLATE utf8_bin DEFAULT NULL,
  `Marca` char(150) COLLATE utf8_bin DEFAULT NULL,
  `Modelo` char(150) COLLATE utf8_bin DEFAULT NULL,
  `serieEquipo` char(150) COLLATE utf8_bin DEFAULT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEquipo`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(2,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(3,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','00000',1,1),(4,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','00000',1,1),(5,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','00000',1,1),(6,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(7,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(8,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(9,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(10,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(11,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(12,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(13,1,'UCAD-CC1','DELL','OPTIPLEX','00000',1,1),(14,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','00000',1,1),(15,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','00000',1,1),(16,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','1',1,5),(17,1,'UCAD-CC1\r\n','DELL','OPTIPLEX','1',1,2),(18,1,'UCAD-CC1','DELLdfdskjkjd','kdjfgjdfhljkdfsdsgdfgfdg','1',1,1),(19,1,'UCAD-CC1\r\n','DELL','1','1',1,1),(20,1,'UCAD-CC2','1','1','1',1,1),(21,1,'UCAD-CC2','1','1','1',2,1),(22,1,'UCAD-CC2','1','1','1',2,1),(23,1,'UCAD-CC2','1','1','1',2,1),(24,1,'UCAD-CC2','1','1','1',2,1),(25,1,'UCAD-CC2','1','1','1',2,1),(26,1,'UCAD-CC2','1','1','1',2,1),(27,1,'UCAD-CC1','1','1','1',1,1),(28,2,'1','3','2','1',3,1),(31,2,'UCAD-CC2','2','2','1',2,1),(32,1,'UCAD-CC1','1','1','1',1,1),(33,1,'UCAD-CC1','1','1','637653',1,1),(34,1,'UCAD-CC1','1','1','1',1,1);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `detalleEstado` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Disponible'),(2,'Reservado'),(3,'Fuera de uso'),(4,'Mantenimiento'),(5,'Prestado');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gestionequipo`
--

DROP TABLE IF EXISTS `gestionequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gestionequipo` (
  `idGestionEquipo` int(11) NOT NULL,
  `idEquipo` int(11) DEFAULT NULL,
  `horaSalida` time DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGestionEquipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestionequipo`
--

LOCK TABLES `gestionequipo` WRITE;
/*!40000 ALTER TABLE `gestionequipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `gestionequipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `marca` varchar(150) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idMarca`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'Kingston'),(2,'Intel'),(3,'AMD'),(4,'Samsung'),(5,'Toshiba'),(6,'Epson'),(7,'DELL'),(8,'Intel'),(9,'Asus'),(10,'Gibabyte'),(11,'Biostar'),(12,'Cannon');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo`
--

DROP TABLE IF EXISTS `modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL AUTO_INCREMENT,
  `detalleModelo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idModelo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` VALUES (1,'DDR3'),(2,'DDR4'),(3,'IDE'),(4,'SATA'),(5,'GA-e3800n'),(6,'Atlon'),(7,'Ryzer');
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamoequipo`
--

DROP TABLE IF EXISTS `prestamoequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prestamoequipo` (
  `idPrestamoEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipo` int(11) DEFAULT NULL,
  `fechaPrestamo` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPrestamoEquipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamoequipo`
--

LOCK TABLES `prestamoequipo` WRITE;
/*!40000 ALTER TABLE `prestamoequipo` DISABLE KEYS */;
INSERT INTO `prestamoequipo` VALUES (8,16,'2021-10-11',1);
/*!40000 ALTER TABLE `prestamoequipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservaequipo`
--

DROP TABLE IF EXISTS `reservaequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservaequipo` (
  `idReservaEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipo` int(11) DEFAULT NULL,
  `fechaReserva` date DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReservaEquipo`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservaequipo`
--

LOCK TABLES `reservaequipo` WRITE;
/*!40000 ALTER TABLE `reservaequipo` DISABLE KEYS */;
INSERT INTO `reservaequipo` VALUES (27,17,'2021-10-11',2);
/*!40000 ALTER TABLE `reservaequipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoequipo`
--

DROP TABLE IF EXISTS `tipoequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoequipo` (
  `idTipoEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `detalleTipoEquipo` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idTipoEquipo`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoequipo`
--

LOCK TABLES `tipoequipo` WRITE;
/*!40000 ALTER TABLE `tipoequipo` DISABLE KEYS */;
INSERT INTO `tipoequipo` VALUES (1,'Escritorio'),(2,'Laptop'),(3,'Tablet'),(18,'x'),(17,'W'),(16,'Escaner'),(4,'Movil'),(6,'Proyector'),(5,'Impresora');
/*!40000 ALTER TABLE `tipoequipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `apellidos` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `correo` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `dui` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Norman','Campos','norman@gmail.com','00000000-1','1234'),(2,'Oscar','Avelar','oscar@gmail.com','00000000-0','1234');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'equipogestion'
--

--
-- Dumping routines for database 'equipogestion'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-21 23:31:22

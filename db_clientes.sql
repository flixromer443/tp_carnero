-- MySQL dump 10.13  Distrib 5.5.62, for linux-glibc2.12 (x86_64)
--
-- Host: localhost    Database: clientes
-- ------------------------------------------------------
-- Server version	5.5.62

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
-- Table structure for table `altas`
--

DROP TABLE IF EXISTS `altas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `altas` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fecha_de_alta` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `altas`
--

LOCK TABLES `altas` WRITE;
/*!40000 ALTER TABLE `altas` DISABLE KEYS */;
/*!40000 ALTER TABLE `altas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `id_localidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (6,'Felix Romero','flixromer443@gmail.com','Zapiola 946',54);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (1,'Adolfo Alsina'),(2,'Adolfo Gonzales Chaves'),(3,'Alberti'),(4,'Almirante Brown'),(5,'Avellaneda'),(6,'Ayacucho'),(7,'Azul'),(8,'BahÃ­a Blanca'),(9,'Balcarce'),(10,'Baradero'),(11,'Arrecifes'),(12,'Benito JuÃ¡rez'),(13,'Berazategui'),(14,'Berisso'),(15,'BolÃ­var'),(16,'Bragado'),(17,'Brandsen'),(18,'Campana'),(19,'CaÃ±uelas'),(20,'CapitÃ¡n Sarmiento'),(21,'Carlos Casares'),(22,'Carlos Tejedor'),(23,'Carmen de Areco'),(24,'Castelli'),(25,'ColÃ³n'),(26,'Coronel de Marina Leonardo Rosales'),(27,'Coronel Dorrego'),(28,'Coronel Pringles'),(29,'Coronel SuÃ¡rez'),(30,'Chacabuco'),(31,'ChascomÃºs'),(32,'Chivilcoy'),(33,'Daireaux'),(34,'Dolores'),(35,'Ensenada'),(36,'Escobar'),(37,'Esteban EcheverrÃ­a'),(38,'ExaltaciÃ³n de la Cruz'),(39,'Ezeiza'),(40,'Florencio Varela'),(41,'Florentino Ameghino'),(42,'General Alvarado'),(43,'General Alvear'),(44,'General Arenales'),(45,'General Belgrano'),(46,'General Guido'),(47,'General Juan Madariaga'),(48,'General la Madrid'),(49,'General las Heras'),(50,'General Lavalle'),(51,'General Paz'),(52,'General Pinto'),(53,'General PueyrredÃ³n'),(54,'General RodrÃ­guez'),(55,'General San MartÃ­n'),(56,'General Viamonte'),(57,'General Villegas'),(58,'GuaminÃ­'),(59,'HipÃ³lito Yrigoyen'),(60,'Hurlingham'),(61,'ItuzaingÃ³'),(62,'JosÃ© C. Paz'),(63,'JunÃ­n'),(64,'La Costa'),(65,'La Matanza'),(66,'LanÃºs'),(67,'La Plata'),(68,'Laprida'),(69,'Las Flores'),(70,'Leandro N. Alem'),(71,'Lezama'),(72,'Lincoln'),(73,'LoberÃ­a'),(74,'Lobos'),(75,'Lomas de Zamora'),(76,'LujÃ¡n'),(77,'Magdalena'),(78,'MaipÃº'),(79,'Malvinas Argentinas'),(80,'Mar Chiquita'),(81,'Marcos Paz'),(82,'Mercedes'),(83,'Merlo'),(84,'Monte'),(85,'Monte Hermoso'),(86,'Moreno'),(87,'MorÃ³n'),(88,'Navarro'),(89,'Necochea'),(90,'9 de Julio'),(91,'OlavarrÃ­a'),(92,'Patagones'),(93,'PehuajÃ³'),(94,'Pellegrini'),(95,'Pergamino'),(96,'Pila'),(97,'Pilar'),(98,'Pinamar'),(99,'Presidente PerÃ³n'),(100,'PuÃ¡n'),(101,'Punta Indio'),(102,'Quilmes'),(103,'Ramallo'),(104,'Rauch'),(105,'Rivadavia'),(106,'Rojas'),(107,'Roque PÃ©rez'),(108,'Saavedra'),(109,'Saladillo'),(110,'Salto'),(111,'SalliquelÃ³'),(112,'San AndrÃ©s de Giles'),(113,'San Antonio de Areco'),(114,'San Cayetano'),(115,'San Fernando'),(116,'San Isidro'),(117,'San Miguel'),(118,'San NicolÃ¡s'),(119,'San Pedro'),(120,'San Vicente'),(121,'Suipacha'),(122,'Tandil'),(123,'TapalquÃ©'),(124,'Tigre'),(125,'Tordillo'),(126,'Tornquist'),(127,'Trenque Lauquen'),(128,'Tres Arroyos'),(129,'Tres de Febrero'),(130,'Tres Lomas'),(131,'25 de Mayo'),(132,'Vicente LÃ³pez'),(133,'Villa Gesell'),(134,'Villarino'),(135,'ZÃ¡rate');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-27 14:52:54

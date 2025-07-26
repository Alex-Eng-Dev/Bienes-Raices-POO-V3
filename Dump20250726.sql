CREATE DATABASE  IF NOT EXISTS `bienesraices_crud` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bienesraices_crud`;
-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: bienesraices_crud
-- ------------------------------------------------------
-- Server version	8.0.40

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
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `habitaciones` int DEFAULT NULL,
  `wc` int DEFAULT NULL,
  `estacionamiento` int DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedores_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propiedades_vendedores_idx` (`vendedores_id`),
  CONSTRAINT `fk_propiedades_vendedores` FOREIGN KEY (`vendedores_id`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (27,' Casa en el bosque',1200000.00,'1762585479fbd82cc43f2124c3a18ef9','Casa moderna con un estilo casual y muy elegante para familias que les gusta el espacio, la comodidad, la naturaleza junto con vistas muy llamativas además de tener areas verdes para días importantes y especiales, los materiales son resistentes, durables contando con calidad para tu mejor seguridad.',5,3,2,'2025-06-27',1),(29,' Casa Color Blanco',1255500.00,'68eecfe92cade98b90f14fc4bd57fbbb','Vivienda con espectacular vista y espacios naturales como ninguno otro,  disfruta de las vistas en el día y en noche, así como  comodidad, incluyendo privacidad para ti y toda tu familia. Los espacios son únicos e iluminados lo que traerá mucha armonía dentro y fuera de ella.',5,4,2,'2025-06-30',3),(30,' Casa con Alberca',500000.00,'45166382a98b58e54e78fd3e72eef6fe','Casa gigante con alberca incluida para pasar tiempo de calidad con tu familia y divertirte como nunca antes, cuenta con acabados modernos y especiales para una comodidad superior, las vistas son increíbles, disfruta de un espacio para fiestas, amigos, asados, etc... ven y vive como te mereces.',6,6,1,'2025-06-30',4),(31,' Casa Casual',200000.00,'5370d60f2029fbff9aa7ecbcbc0e7f40','Ven!, disfruta de la comodidad que te ofrecemos para ti y toda tu familia, cuenta con espacios precisos para convivir, festejar, descansar y tener una experiencia agradable para el resto de tu vida, el estilo es muy casual parecida a los Estados Unidos pero con detalles mejores y colores agradables y confortable.',4,2,2,'2025-06-30',5),(33,'PRUEBA',500000.00,'714eb83eef0cd79c1d3bd27dbb34c8a3','ESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCIONESTO ES UNA PRUEBA DE SU FUNCION',3,3,3,'2025-07-26',1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'correo@correo.com','$2y$10$Q5wt/tPhfKqBVq5ZgY.avOKm52b9660viNZcwlvL5FTBJTqEdC96y');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedores`
--

LOCK TABLES `vendedores` WRITE;
/*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
INSERT INTO `vendedores` VALUES (1,'Alexis','Bautista','5287569578'),(2,'Fernanda','Castañeda','5874569822'),(3,'Brandon','Bernal','5896388741'),(4,'Alicia','Villas','5587412366'),(5,' Armando','Castro','5689223577');
/*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-26 11:53:04

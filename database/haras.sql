/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.3.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: haras
-- ------------------------------------------------------
-- Server version	12.3.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `cavalos`
--

DROP TABLE IF EXISTS `cavalos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cavalos` (
  `raca` varchar(30) DEFAULT NULL,
  `info` mediumtext DEFAULT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cavalos`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `cavalos` WRITE;
/*!40000 ALTER TABLE `cavalos` DISABLE KEYS */;
INSERT INTO `cavalos` VALUES
('Mangalarga Marchador','O verdadeiro sinônimo de conforto. Com sua marcha macia que não transmite o impacto do galope, é o animal ideal para longas cavalgadas, passeios e valorização genética forte.',27500),
('Árabe','A raça mais nobre e antiga do mundo. Destaca-se por uma resistência física extrema e inigualável no Enduro, além de uma beleza e elegância imponentes que impressionam.',35000),
('Crioulo','A força viva do campo. Uma raça extremamente rústica, compacta e resistente a qualquer tipo de clima ou terreno duro. Ideal para a lida diária e competições de agilidade.',23500),
('Puro Sangue Inglês','A Ferrari do mundo equestre. Se o seu objetivo é velocidade máxima, atletismo de ponta e temperamento vibrante, este é o campeão absoluto das pistas de corrida internacionais.',50000),
('Brasileiro de Hipismo','Excelência e precisão em salto e adestramento olímpico. Um cavalo com estrutura impecável, temperamento equilibrado e uma mecânica de salto impressionante para o hipismo clássico.',80000),
('Puro Sangue Lusitano','A realeza das pistas de adestramento e alta escola. Com andamentos imponentes e presença dramática, é dócil, extremamente inteligente e ágil, entregando-se por inteiro ao cavaleiro.',100000),
('Appaloosa','Beleza exótica e temperamento dócil que encantam à primeira vista. Famoso por sua pelagem pintada única, é um animal forte, rústico e perfeito para se destacar no lazer ou rodeio.',25000),
('Percheron','O gigante gentil do campo. Um cavalo de tração pesada com força descomunal, mas que surpreende pela docilidade extrema e elegância. Ideal para carruagens e turismo rural.',42500),
('Paint Horse','Visual impactante com a agilidade do Quarto de Milha. Suas manchas coloridas exclusivas garantem que nenhum animal seja igual ao outro, brilhando em provas de laço e rancho.',31500),
('Andaluz','O cavalo dos reis. Famoso pela imponência, pescoço arqueado e temperamento orgulhoso porém dócil. Brilha no adestramento clássico e exibições de gala pelo mundo.',87500),
('Clydesdale','Ícone de imponência, famoso pelas suas \'botas\' de pelos longos nas patas e porte gigante. Muito procurado para eventos de gala, desfiles promocionais e tração de carruagens refinadas.',65000),
('Frísio','A pérola negra holandesa. Uma das raças mais impressionantes do mundo pela sua pelagem preta retinta brilhante, crina longa ondulada e trote imponente de joelhos altos.',120000),
('Mangalarga Paulista','O cavalo de sela brasileiro por excelência. Combina ótima andadura (marcha trotada), excelente resistência para longos percursos e temperamento enérgico, perfeito para o trabalho e lazer.',25000),
('Campolina','Porte imponente e cabeça de perfil subconvexo marcante. Conhecido pelo seu temperamento dócil e uma marcha extremamente confortável que proporciona passeios luxuosos e suaves.',26000),
('Morgan','Uma das primeiras raças desenvolvidas na América do Sul/Norte com reputação de versatilidade total. Animal compacto, musculoso, incrivelmente dócil e com enorme desejo de agradar.',32500),
('Haflinger','Pequeno no tamanho, gigante na resistência. Com uma pelagem castanha dourada e crina clara deslumbrante, é o cavalo de montanha perfeito, muito dócil para crianças e adultos.',29000),
('Saddlebred Americano','O showman do mundo equestre. Conhecido pelo seu porte altivo, pescoço elegantemente elevado e andamentos vistosos de alta ação. Perfeito para exibições e competições de carruagem leve.',40000),
('Pinto','Focado na belíssima pelagem malhada clássica americana. É um cavalo ágil, com excelente conformação para o esporte e lazer, destacando-se visualmente em qualquer lugar.',25000),
('Mustangue','A lenda viva do oeste americano. Exemplares criados e domesticados apresentam uma rusticidade incomparável, cascos super resistentes e uma lealdade profunda ao dono após domados.',22500),
('Standardbred','O rei do trote atrelado. Conhecido por sua incrível ética de trabalho, pernas fortes e temperamento equilibrado, sendo muito procurado para corridas de charrete e tração leve.',29000),
('Gipsy Vanner','A personificação de um conto de fadas. Corpo robusto de tração, crinas incrivelmente longas e pelagem predominantemente piampa. Extremamente calmo, dócil e dócil para todas as idades.',95000),
('Hanoveriano','A elite do warmblood alemão. Famoso mundialmente por dominar as pistas olímpicas de adestramento e salto devido à sua flexibilidade, força de impulsão e mente focada.',107500),
('Holsteiner','Uma força atlética formidável. Selecionado rigorosamente na Alemanha para saltar grandes obstáculos, possui ossatura forte, passadas largas e uma coragem invejável nas pistas.',100000),
('Pônei Brasileiro','Perfeito para iniciar os futuros cavaleiros. Tamanho reduzido, mas com toda a força e saúde de um cavalo grande. Altamente dócil, rústico e ideal para escolinhas de equitação e lazer infantil.',8000),
('Quarto de Milha','O cavalo mais versátil do mundo! Explosão de velocidade, musculatura poderosa e uma docilidade incomparável. Perfeito tanto para o trabalho pesado quanto para provas e lazer familiar.',25000);
/*!40000 ALTER TABLE `cavalos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-08-02 20:49:25

/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.13-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_rs_shindu
-- ------------------------------------------------------
-- Server version	10.11.13-MariaDB-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poliklinik_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `schedule_text` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doctors_poliklinik_id_foreign` (`poliklinik_id`),
  CONSTRAINT `doctors_poliklinik_id_foreign` FOREIGN KEY (`poliklinik_id`) REFERENCES `polikliniks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES
(1,1,'dr. Arfan Sanusi, Sp.PD, FINASIM','Spesialis Penyakit Dalam','dr. Arfan Sanusi, Sp.PD (Dokter Spesialis Penyakit Dalam).jpeg','Senin & Selasa | 13.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(2,1,'dr. Winarti Arifudin, Sp.PD, FINASIM','Spesialis Penyakit Dalam','','Rabu - Jumat | 14.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(3,2,'dr. Ruslan Ramli Sp. N','Spesialis Saraf (Neurologi)','dr. Ruslan Ramli Sp. N (Dokter Spesialis Neurologi).jpeg','Senin | 12.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(4,2,'dr. Marina Musyawwirina Sp.N','Spesialis Saraf (Neurologi)','dr. Marina Musyawwirina Sp.N (Dokter Spesialis Saraf).jpeg','Selasa & Kamis | 13.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(5,2,'dr. Magdalena, Sp.N','Spesialis Saraf (Neurologi)','dr. Magdelena, Sp. N (Dokter Spesialis Syaraf).jpeg','Rabu & Jum\'at | 13.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(6,3,'drg. Gustivanny Dwipa, Sp. Perio','Spesialis Gigi Periodonti','drg. Gustivanny Dwipa, Sp.Perio (Dokter Spesialis Gigi Periodonti).jpeg','Senin - Jumat | 12.10 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(7,4,'drg. Hermawan','Dokter Gigi Umum','drg. Hermawan (Dokter Gigi).jpeg','Senin - Jumat | 11.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(8,4,'drg. Jeiska Triska Tulangow','Dokter Gigi Umum','drg. Jeiska Triska Tulangow (Dokter Gigi).jpeg','Senin - Jumat | 11.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(9,5,'Dr. dr. Abdul Faris, Sp.OG (K)','Spesialis Kandungan (Konsultan)','1776739238.jpg','Senin, Selasa & Kamis | 11.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:40:38'),
(10,5,'Dr. dr. Amirudin Rauf, Sp.OG, M.Si','Spesialis Kandungan (Obgyn)','1776739283.jpg','Rabu - Jumat | 08.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:41:23'),
(11,5,'dr. Syahrir, Sp. OG','Spesialis Kandungan (Obgyn)','dr. Syahrir Abdurrasyid, Sp.OG (Dokter Spesialis Obgyn).jpeg','Senin | 08.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(12,6,'dr. Katrin Sumekar, Sp.PD-KKV','Spesialis Kardiovaskular','dr.Katrin Sumekar,Sp.PD-KKV (Dokter Spesialis Kardiovaskular).jpeg','Senin & Kamis | 11.00 - 14.00',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(13,6,'dr. Mardhiyah Yamani, Sp. JP','Spesialis Jantung & Pembuluh Darah','dr. Mardhiyah Yamani, Sp. JP.jpeg','Senin - Jumat | 15.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(14,7,'dr. Made Wirka, Sp.B','Spesialis Bedah Umum','dr. Made Wirka, Sp. B (Dokter Spesiali Bedah Umum).jpeg','Senin, Selasa & Kamis | 13.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(15,7,'dr. Arif Husain, Sp.B','Spesialis Bedah Umum','dr. Arief Husain, Sp.B (Dokter Spesialis Bedah Umum).jpeg','Rabu - Jumat | 14.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(16,8,'dr. Bastiana, M.Kes., Sp.THTBKL','Spesialis THT-KL','dr. Bastiana, M.Kes., Sp.THTBKL (Dokter Spessialis THT).jpeg','Senin, Rabu & Jumat | 11.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(17,9,'dr. Sri Sikspiriani C.H, Sp. OT','Spesialis Orthopedi','dr. Sri Sikspiriani C.H, Sp. OT (Dokter Spesialis Orthopedi).jpeg','Senin, Rabu & Jumat | 11.00 - Selesai',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(18,10,'dr. Kartin Akune, Sp.A','Spesialis Anak','dr. Kartin Akune, Sp. A (Dokter Spesialis Anak).jpeg','Senin - Jumat | 08.00 - Selesai',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(19,11,'dr. Banu Kadgada Kalingga Murda, Sp.KJ','Spesialis Kedokteran Jiwa','dr. Banu Kadgada Kalingga Murda Sp.KJ  (Dokter Spesialis Jiwa).jpeg','Selasa & Kamis | 13.00 - 15.00',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(20,12,'Octaviani Evelyn Balebu, M.Psi.psikolog','Psikolog Klinis','1776739213.jpg','Senin s/d Kamis 12.00 - 15.00, Jum\'at 13.00 - 15.00',1,'2026-04-20 18:25:27','2026-04-20 18:40:13'),
(21,13,'dr. Ni Luh Ayu Darmayanti, Sp.M','Spesialis Mata','dr. Ni Luh Ayu Darmayanti, Sp.M.jpeg','Senin - Jumat | 15.00 - Selesai',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(22,14,'dr. Zakiani S, Sp. KK, M.Kes','Spesialis Kulit & Kelamin','dr.Zakiani Sakka,M.Kes,SpDVE (Dokter Kulit dan Kelamin).jpeg','Senin - Jumat | 13.00 - Selesai',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(23,15,'dr. Hermilawaty, Sp. KFR, FIPM (USG), AIFO-K','Spesialis Rehab Medik','dr. Hermilawaty, Sp. KFR, FIPM (USG), AIFO-K (Dokter Spesialis Rehab Medik).jpeg','Senin - Kamis | 09.00 - Selesai',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(24,16,'dr. Rivani Nurul Suci, Sp. P','Spesialis Paru','dr. Rivani Nurul Suci, Sp. P (Dokter Spesialis Paru).jpeg','Senin - Jumat | 16.20 - Selesai',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(26,17,'dr. Inddi Nursyafitri Hamsari','Dokter Umum IGD','1776926815.jpg','24 jam (Sesuai Shift)',1,'2026-04-22 22:46:55','2026-04-22 22:48:05'),
(27,17,'dr. Irani Nur Ramadhani, M.K.M','Dokter Umum IGD','1776926894.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 22:47:42','2026-04-22 22:48:14'),
(28,17,'dr. Luh Gede Yustini Ekawati','Dokter Umum IGD','1776926959.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 22:49:19','2026-04-22 22:49:19'),
(29,17,'dr. Megawati','Dokter Umum IGD','1776928306.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:11:46','2026-04-22 23:11:46'),
(30,17,'dr. Suci Annisa Kurnia','Dokter Umum IGD','1776928365.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:12:45','2026-04-22 23:12:45'),
(31,17,'dr. Vebry Yanty','Dokter Umum IGD','1776928405.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:13:25','2026-04-22 23:13:25'),
(32,17,'dr. Victor William Kalaena','Dokter Umum IGD','1776928439.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:13:59','2026-04-22 23:13:59'),
(33,17,'dr.Andrew','Dokter Umum IGD','1776928475.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:14:35','2026-04-22 23:14:35'),
(34,17,'Lettu CKM (K) dr.Windi Hapsari','Dokter Umum IGD','1776928587.jpg','24 Jam (Sesuai Shift)',1,'2026-04-22 23:16:27','2026-04-22 23:16:27');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital_profiles`
--

DROP TABLE IF EXISTS `hospital_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospital_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `karumkit_name` varchar(255) DEFAULT NULL,
  `karumkit_rank` varchar(255) DEFAULT NULL,
  `karumkit_photo` varchar(255) DEFAULT NULL,
  `welcome_message` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`misi`)),
  `motto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`motto`)),
  `hospital_type` varchar(255) NOT NULL DEFAULT 'TIPE C',
  `accreditation` varchar(255) NOT NULL DEFAULT 'UTAMA',
  `certification` varchar(255) NOT NULL DEFAULT 'BSrE',
  `organization_chart` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital_profiles`
--

LOCK TABLES `hospital_profiles` WRITE;
/*!40000 ALTER TABLE `hospital_profiles` DISABLE KEYS */;
INSERT INTO `hospital_profiles` VALUES
(1,'Dr.dr. Marles Edy Wanto Haloho, M.Kes','Letnan Kolonel Ckm','assets/images/karumkit.png','Rumah Sakit Tentara (RS Tkt. III 13.06.01) Dr. Sindhu Trisno Palu merupakan institusi kesehatan militer di bawah naungan Kodam XXIII Palaka Wira. Kami berdedikasi kuat untuk memberikan pelayanan medis yang prima, akurat, dan terarah bagi Prajurit TNI AD, PNS, Keluarga, serta Masyarakat Umum di wilayah Provinsi Sulawesi Tengah.','Menjadi Rumah Sakit Unggulan bagi Prajurit TNI AD, PNS, dan Keluarga serta masyarakat umum di wilayah Provinsi Sulawesi Tengah.','[\"Memberikan pelayanan kesehatan yang prima.\",\"Memberikan pelayanan keparipurnaan yang dilandasi Profesionalisme, Disiplin, Bermoral, dan Soliditas.\",\"Meningkatkan SDM yang handal, dan memiliki budaya organisasi sebagai pelayan prima.\",\"Mengelola seluruh sumber daya secara efektif, efisien, dan akuntabel.\"]','[\"Profesional\",\"Akurat\",\"Selaras\",\"Terarah\",\"Ikhlas\"]','TIPE C','UTAMA','BSrE','assets/images/bagan.png','2026-04-19 21:20:34','2026-04-19 21:20:34');
/*!40000 ALTER TABLE `hospital_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mcu_packages`
--

DROP TABLE IF EXISTS `mcu_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mcu_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcu_packages`
--

LOCK TABLES `mcu_packages` WRITE;
/*!40000 ALTER TABLE `mcu_packages` DISABLE KEYS */;
INSERT INTO `mcu_packages` VALUES
(1,'Paket MCU Dasar','Pemeriksaan fisik umum, tes laboratorium dasar (darah keping, kolesterol total, gula darah sewaktu), dan rontgen dada.',500000.00,1,'2026-04-19 21:20:34','2026-04-19 21:20:34'),
(2,'Paket MCU Pegawai (Standard)','Pemeriksaan fisik, lab lengkap (darah rutin, fungsi hati, ginjal), rekam jantung (ECG).',850000.00,1,'2026-04-19 21:20:34','2026-04-19 21:20:34'),
(3,'Paket MCU Eksekutif Pria','Pemeriksaan fisik komprehensif, lab intensif, tumor marker, spirometri, audiometri, dan treadmill test.',2500000.00,1,'2026-04-19 21:20:34','2026-04-19 21:20:34'),
(4,'Paket MCU Pranikah','Pemeriksaan VDRL, TPHA, screening Thalasemia, golongan darah, Rhesus, serta TORCH untuk wanita.',1200000.00,1,'2026-04-19 21:20:34','2026-04-19 21:20:34');
/*!40000 ALTER TABLE `mcu_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2026_04_08_000001_create_polikliniks_table',1),
(5,'2026_04_08_000002_create_doctors_table',1),
(6,'2026_04_08_000003_create_posts_table',1),
(7,'2026_04_08_000004_create_settings_table',1),
(8,'2026_04_08_000005_create_mcu_packages_table',1),
(9,'2026_04_08_014329_create_permission_tables',1),
(10,'2026_04_20_085727_create_pamphlet_jadwals_table',1),
(11,'2026_04_20_100411_create_hospital_profiles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES
(1,'App\\Models\\User',1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pamphlet_jadwals`
--

DROP TABLE IF EXISTS `pamphlet_jadwals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `pamphlet_jadwals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pamphlet_jadwals`
--

LOCK TABLES `pamphlet_jadwals` WRITE;
/*!40000 ALTER TABLE `pamphlet_jadwals` DISABLE KEYS */;
INSERT INTO `pamphlet_jadwals` VALUES
(6,'assets/images/jadwal/1776954263.jpg',1,'2026-04-23 06:24:23','2026-04-23 06:24:23');
/*!40000 ALTER TABLE `pamphlet_jadwals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES
(1,'view poliklinik','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(2,'create poliklinik','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(3,'edit poliklinik','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(4,'delete poliklinik','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(5,'view doctor','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(6,'create doctor','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(7,'edit doctor','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(8,'delete doctor','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(9,'view post','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(10,'create post','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(11,'edit post','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(12,'delete post','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(13,'view mcu_package','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(14,'create mcu_package','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(15,'edit mcu_package','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(16,'delete mcu_package','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(17,'view setting','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(18,'create setting','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(19,'edit setting','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(20,'delete setting','web','2026-04-19 21:20:31','2026-04-19 21:20:31');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polikliniks`
--

DROP TABLE IF EXISTS `polikliniks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `polikliniks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `polikliniks_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polikliniks`
--

LOCK TABLES `polikliniks` WRITE;
/*!40000 ALTER TABLE `polikliniks` DISABLE KEYS */;
INSERT INTO `polikliniks` VALUES
(1,'Penyakit Dalam','penyakit-dalam','Layanan unggulan Poliklinik Penyakit Dalam dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(2,'Syaraf','syaraf','Layanan unggulan Poliklinik Syaraf dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(3,'Gigi Periodonti','gigi-periodonti','Layanan unggulan Poliklinik Gigi Periodonti dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(4,'Gigi','gigi','Layanan unggulan Poliklinik Gigi dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(5,'OBGYN','obgyn','Layanan unggulan Poliklinik OBGYN dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(6,'Jantung','jantung','Layanan unggulan Poliklinik Jantung dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(7,'Bedah','bedah','Layanan unggulan Poliklinik Bedah dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(8,'THT','tht','Layanan unggulan Poliklinik THT dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(9,'Ortopedi','ortopedi','Layanan unggulan Poliklinik Ortopedi dengan peralatan medis terkini.',1,'2026-04-20 18:25:26','2026-04-20 18:25:26'),
(10,'Anak','anak','Layanan unggulan Poliklinik Anak dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(11,'Jiwa','jiwa','Layanan unggulan Poliklinik Jiwa dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(12,'Psikologi','psikologi','Layanan unggulan Poliklinik Psikologi dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(13,'Mata','mata','Layanan unggulan Poliklinik Mata dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(14,'Kulit & Kelamin','kulit-kelamin','Layanan unggulan Poliklinik Kulit & Kelamin dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(15,'Rehab Medik','rehab-medik','Layanan unggulan Poliklinik Rehab Medik dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(16,'Paru','paru','Layanan unggulan Poliklinik Paru dengan peralatan medis terkini.',1,'2026-04-20 18:25:27','2026-04-20 18:25:27'),
(17,'IGD','igd',NULL,1,'2026-04-22 22:28:28','2026-04-22 22:28:28');
/*!40000 ALTER TABLE `polikliniks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `category` enum('Berita','Edukasi','Pengumuman') NOT NULL DEFAULT 'Berita',
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES
(1,'Pentingnya Deteksi Dini Kanker Payudara','deteksi-dini-kanker-payudara','<p>Pelajari langkah-langkah SADARI dan pentingnya pemeriksaan rutin untuk kesehatan organ vital. Deteksi dini sangat penting dalam penanganan kanker payudara...</p>',NULL,'Edukasi',1,'2026-04-17 21:20:34','2026-04-19 21:20:34'),
(2,'RS Dr. Sindhu Trisno Raih Akreditasi Paripurna','akreditasi-paripurna-sindhu-trisno','<p>Pencapaian luar biasa dalam upaya peningkatan mutu pelayanan kesehatan bagi prajurit dan masyarakat. RS Dr. Sindhu Trisno berkomitmen memberikan standar pelayanan tertinggi...</p>',NULL,'Berita',1,'2026-04-14 21:20:34','2026-04-19 21:20:34'),
(3,'Tips Menjaga Imunitas di Musim Pancaroba','tips-menjaga-imunitas-pancaroba','<p>Simak pola makan dan jadwal istirahat yang tepat untuk menjaga tubuh tetap fit di cuaca ekstrem. Memasuki musim pancaroba, imunitas tubuh menjadi tantangan utama...</p>',NULL,'Edukasi',1,'2026-04-19 21:20:34','2026-04-19 21:20:34'),
(4,'Jadwal Layanan Saat Libur Idul Fitri 1445 H','jadwal-libur-idul-fitri-1445h','<p>Terlampir jadwal layanan operasional dan dokter spesialis rawat jalan selama hari cuti bersama nasional.</p>',NULL,'Pengumuman',1,'2026-04-18 21:20:34','2026-04-19 21:20:34');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES
(1,1),
(1,2),
(2,1),
(2,2),
(3,1),
(3,2),
(4,1),
(4,2),
(5,1),
(5,2),
(6,1),
(6,2),
(7,1),
(7,2),
(8,1),
(8,2),
(9,1),
(9,3),
(10,1),
(10,3),
(11,1),
(11,3),
(12,1),
(12,3),
(13,1),
(13,4),
(14,1),
(14,4),
(15,1),
(15,4),
(16,1),
(16,4),
(17,1),
(18,1),
(19,1),
(20,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES
(1,'Super Admin','web','2026-04-19 21:20:31','2026-04-19 21:20:31'),
(2,'Admin Yanmed','web','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(3,'Admin Humas','web','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(4,'Admin MCU','web','2026-04-19 21:20:32','2026-04-19 21:20:32');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('bPUW7b8XLYAHJUnyzyRSYTaZx09mFxRZzWckjvOI',NULL,'2404:c0:4a23:acb7::1','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR21TQVhWdEpOd25YYUhhS2RhU3lHOWxXeXpoYzg1ekJWUWN5d0QwSiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776994653),
('dcMvyeXAeoIELaEAIObVKfRXfLGnMiuvnjhsuLks',NULL,'36.79.231.15','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0p5SzNZeExFVm9QYUNCcFZueWZDSE1nOXg5V3JvdWtuaEZ4QVU3TyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbS90aW0tbWVkaXMvZG9rdGVyIjtzOjU6InJvdXRlIjtzOjY6ImRva3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1776999169),
('l2g3Kf4w5cxyGmJbYtjTmtUUlUsvTuClbAealNCn',NULL,'125.162.211.133','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkFFUDE4cG5acG5acU15SmZOVUI3UnA2R0Z5UG45dXlreXUyZ0V1SiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776992473),
('NyVHJmZduNRlSQ7FMqCRIAvKVwEOjMIgjpMmrQGg',NULL,'36.79.231.15','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGlqZlJpRUNCdDlyQ1RoTWwxM0hoaTBCbUlsbzM0WDFkbU95MnhJMSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbS90aW0tbWVkaXMvZG9rdGVyIjtzOjU6InJvdXRlIjtzOjY6ImRva3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1776999337),
('OUghLBvUfrN5nofFshN1rDy26iPw0ON3ykPcDkc0',NULL,'66.249.75.64','Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.7680.177 Mobile Safari/537.36 (compatible; GoogleOther)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmtWSzQwV1lkcmhDSjVPUWtnTmdiRXo3UWNBa05uOTZrODBaVldseSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbS9wcm9maWwiO3M6NToicm91dGUiO3M6NjoicHJvZmlsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776992775),
('PBVTnLlARRCoQZ9GfXLTepXf06VVQVEAhbEPO5eW',NULL,'2404:c0:4a25:4f23:18d6:98ff:fe71:7ba','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVo2dVNJM2F1NHlVY01Ga1dQYnlwYjZSUVdmMEJyTTBzbDVDR0cxciI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776993354),
('Q9lhcyUMm55MJaqxE98VfIb946glWU03jngW3RaX',NULL,'182.2.228.209','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXg0d1JZZEdRNjNZZ3dha0Qwc0g1YlppUVduV3h5cXRNWWtpRUhTQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776993919),
('s8Qx59OvBJ7xzFrFizBUykO2Jevru93Y2XL86Jm4',NULL,'114.10.134.254','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWndkdXhFSDVJY21xTFY3U0ZmOVUyaEtmZW1MS1pyOTYwcUthemw4diI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776996995),
('UdQBthjfdAdV4HgwJvS3L1RYWh4xfvmbDVKF1FSJ',NULL,'2404:c0:4b24:ee61::1','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Mobile Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDFGNXNESTVKSnJadWpwbUNjdHJ1UzBMMktuYlpKa1U0NDI3b2p3ayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vcnNzaW5kaHV0cmlzbm9wYWx1LmNvbSI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1776992159);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `group` enum('Identitas','Kontak','Sosmed','Operasional') NOT NULL DEFAULT 'Identitas',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES
(1,'site_name','RS Tkt. III Dr. Sindhu Trisno','Identitas','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(2,'site_tagline','Sehat Bersama, Bangga Melayani','Identitas','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(3,'site_description','Rumah Sakit Militer yang melayani prajurit TNI dan keluarganya dengan penuh dedikasi.','Identitas','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(4,'address','Jl. Gatot Subroto No.1, Palu, Sulawesi Tengah','Identitas','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(5,'logo','','Identitas','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(6,'phone','(0451) 123456','Kontak','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(7,'whatsapp','08123456789','Kontak','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(8,'email','info@rssindhu.id','Kontak','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(9,'emergency_phone','(0451) 111','Kontak','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(10,'facebook_url','','Sosmed','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(11,'instagram_url','','Sosmed','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(12,'youtube_url','','Sosmed','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(13,'jam_poli','Senin – Jumat: 08.00 – 13.00','Operasional','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(14,'jam_ugd','24 Jam','Operasional','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(15,'jam_rawat_inap','24 Jam','Operasional','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(16,'jam_mcu','Senin – Jumat: 07.30 – 11.00','Operasional','2026-04-19 21:20:32','2026-04-19 21:20:32'),
(17,'dashboard','0','Operasional','2026-04-22 22:40:27','2026-04-23 17:20:20'),
(18,'polikliniks','0','Operasional','2026-04-22 22:40:29','2026-04-22 22:40:29'),
(19,'doctors','0','Operasional','2026-04-22 22:40:42','2026-04-23 18:53:15'),
(20,'posts','0','Operasional','2026-04-22 22:40:44','2026-04-22 22:40:44'),
(21,'pamphlet','1','Operasional','2026-04-22 22:43:44','2026-04-23 17:20:26'),
(22,'public.home','1','Operasional','2026-04-23 17:19:40','2026-04-23 18:54:27'),
(23,'profile','1','Operasional','2026-04-23 18:53:18','2026-04-23 18:53:20');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Super Administrator','superadmin@rssindhu.id',NULL,'$2y$12$z6akKa2jr28a374avPdU6uhILcJv4gIHgavIEpoU778UAZR8L7Gq.',NULL,'2026-04-19 21:20:32','2026-04-19 21:20:32');
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

-- Dump completed on 2026-04-24 11:00:27

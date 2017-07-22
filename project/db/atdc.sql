-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: atdc
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_address` varchar(255) NOT NULL,
  `contact_content` longtext NOT NULL,
  `contact_created_at` timestamp NULL DEFAULT NULL,
  `contact_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'grimreaperld@gmail.com','{\"1\":{\"id\":\"10\",\"name\":\"Liebert ItON 1000VA\",\"quantity\":\"4\"},\"2\":{\"id\":\"9\",\"name\":\"PSA600-SOHO\",\"quantity\":\"1\"},\"3\":{\"id\":\"13\",\"name\":\"Liebert PSA 1kVA\",\"quantity\":\"1\"},\"4\":{\"id\":\"12\",\"name\":\"Liebert PSA 650VA\",\"quantity\":\"1\"},\"5\":{\"id\":\"11\",\"name\":\"Liebert PSA 500VA\",\"quantity\":\"1\"}}','2017-06-28 17:12:35',NULL),(2,'grimreaperld@gmail.com','{\"1\":{\"id\":\"6\",\"name\":\"1U Cable Management Panel 2.25\\u201d Screw On Hoop Pass Though Black\",\"quantity\":\"1\"},\"2\":{\"id\":\"5\",\"name\":\"1U 3.25\\\" Cable Hoop Black (Set Of 10)\",\"quantity\":\"4\"},\"3\":{\"id\":\"4\",\"name\":\"1U 2.25\\\" Cable Hoop Black (Set Of 10)\",\"quantity\":\"4\"}}','2017-06-28 17:15:46',NULL),(3,'grimreaperld@gmail.com','{\"1\":{\"id\":\"3\",\"name\":\"Liebert ItON 600VA\",\"quantity\":\"2\"},\"2\":{\"id\":\"11\",\"name\":\"Liebert PSA 500VA\",\"quantity\":\"1\"},\"3\":{\"id\":\"12\",\"name\":\"Liebert PSA 650VA\",\"quantity\":\"1\"},\"4\":{\"id\":\"13\",\"name\":\"Liebert PSA 1kVA\",\"quantity\":\"1\"}}','2017-06-30 03:17:09',NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `permissions` text,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'superadmin','{\"_superadmin\":1}',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(2,'editor','{\"_user-editor\":1,\"_group-editor\":1}',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(3,'base admin','{\"_user-editor\":1}',0,'2017-05-11 20:40:40','2017-05-11 20:40:40');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mails`
--

DROP TABLE IF EXISTS `mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`mail_id`),
  UNIQUE KEY `mail_name` (`mail_name`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails`
--

LOCK TABLES `mails` WRITE;
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
INSERT INTO `mails` VALUES (4,'grimreaperld@gmail.com'),(9,'sontung.buinguyen@gmail.com'),(5,'maily27196@gmail.com'),(6,'kinokonguyen0196@outlook.com'),(8,'ptnhuan@gmail.com'),(11,'nguyenanhhoanld.thienhaxaxoi@gmail.com'),(12,'bibiambibiam@gmail.com'),(13,'thanhhuy.25101996@gmail.com');
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mails_contacts`
--

DROP TABLE IF EXISTS `mails_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails_contacts` (
  `mail_contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_contact_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail_contact_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail_contact_content` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`mail_contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails_contacts`
--

LOCK TABLES `mails_contacts` WRITE;
/*!40000 ALTER TABLE `mails_contacts` DISABLE KEYS */;
INSERT INTO `mails_contacts` VALUES (1,'user01@gmail.com','Refund','Error product.'),(6,'grimreaperld@gmail.com','Error','Refund my money'),(5,'user02@gmail.com','Test01','Check01'),(12,'grimreaperld@gmail.com','Contact02','Laravel provides an easy method of protecting your application from cross-site request forgeries. First, a random token is placed in your user\'s session. If you use the Form::open method with POST,  PUT or DELETE the CSRF token will be added to your forms as a hidden field automatically. ');
/*!40000 ALTER TABLE `mails_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mails_histories`
--

DROP TABLE IF EXISTS `mails_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails_histories` (
  `mail_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_history_name` text CHARACTER SET utf8 NOT NULL,
  `mail_history_subject` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mail_history_content` text CHARACTER SET utf8 NOT NULL,
  `mail_history_attach` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`mail_history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails_histories`
--

LOCK TABLES `mails_histories` WRITE;
/*!40000 ALTER TABLE `mails_histories` DISABLE KEYS */;
INSERT INTO `mails_histories` VALUES (79,'grimreaperld@gmail.com','Test send file 62','Check62','upload/310Capture2.PNG'),(72,'grimreaperld@gmail.com','Test send file 55','Check55',NULL),(76,'grimreaperld@gmail.com','Test send file 59','Check59','upload/5214088342-infinity-wallpaper.jpg'),(80,'grimreaperld@gmail.com','Test 9:48AM','Nhận báo giá',NULL),(81,'user01@gmail.com','Gửi báo giá','Gửi báo giá',NULL);
/*!40000 ALTER TABLE `mails_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_parent` int(11) NOT NULL DEFAULT '0',
  `menu_slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Home',0,'home'),(2,'Product',0,'product'),(3,'AC Power UPS',2,'ac-power-ups'),(4,'Rack Accessories',2,'rack-accessories'),(5,'Network Rack',2,'network-rack'),(6,'Desktop and Workstation UPS',3,'desktop-and-workstation-ups'),(7,'Rackmount UPS',3,'rackmount-ups'),(8,'Network UPS',3,'network-ups'),(9,'Rack PDU',3,'rack-pdu'),(10,'Cable Management',4,'cable-management'),(11,'Airflow Management/ Banking Pannels',4,'airflow-management-banking-pannels'),(12,'Basic PDUs',4,NULL),(13,'Shelves',4,NULL),(14,'Side Panels/ Partition Panels',4,NULL),(15,'Network Rack',5,'network-rack'),(16,'Brands',2,NULL),(17,'Dell EMC',16,NULL),(18,'Emerson',16,NULL),(19,'About Us',0,NULL),(20,'News',0,NULL),(21,'Company',20,NULL),(22,'Promotion',20,NULL),(23,'Contact',0,NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2012_12_06_225988_migration_cartalyst_sentry_install_throttle',1),(2,'2014_02_19_095545_create_users_table',1),(3,'2014_02_19_095623_create_user_groups_table',1),(4,'2014_02_19_095637_create_groups_table',1),(5,'2014_02_19_160516_create_permission_table',1),(6,'2014_02_26_165011_create_user_profile_table',1),(7,'2014_05_06_122145_create_profile_field_types',1),(8,'2014_05_06_122155_create_profile_field',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2017_05_29_095521_create_menus_table',2),(11,'2017_06_01_025715_create_products_table',3),(12,'2017_06_01_031854_create_product_attributes_table',4),(14,'2017_06_28_164752_create_contacts_table',5),(17,'2017_06_29_032631_create_product_prices_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES (1,'superadmin','_superadmin',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(2,'user editor','_user-editor',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(3,'group editor','_group-editor',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(4,'permission editor','_permission-editor',0,'2017-05-11 20:40:40','2017-05-11 20:40:40'),(5,'profile type editor','_profile-editor',0,'2017-05-11 20:40:40','2017-05-11 20:40:40');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_attributes`
--

DROP TABLE IF EXISTS `product_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_attributes` (
  `product_attribute_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_attribute_name` varchar(255) NOT NULL,
  `product_attribute_info` text,
  `product_attribute_parent` int(11) DEFAULT NULL,
  `product_attribute_created_at` timestamp NULL DEFAULT NULL,
  `product_attribute_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_attribute_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_attributes`
--

LOCK TABLES `product_attributes` WRITE;
/*!40000 ALTER TABLE `product_attributes` DISABLE KEYS */;
INSERT INTO `product_attributes` VALUES (1,'AC Power UPS','null',NULL,NULL,NULL),(2,'Rack Accessories','',NULL,NULL,NULL),(3,'Network Rack',NULL,NULL,NULL,NULL),(4,'Desktop and Workstation UPS','[\"Kh\\u1ed1i l\\u01b0\\u1ee3ng ri\\u00eang, kg. (lb.)\",\"\\u0110i\\u1ec7n \\u00e1p \\u0111\\u1ea7u v\\u00e0o tr\\u1ef1c tuy\\u1ebfn\",\"T\\u1ea7n s\\u1ed1 tr\\u1ef1c tuy\\u1ebfn\",\"D\\u1ea1ng s\\u00f3ng tr\\u00ean \\u1eafc quy\",\"T\\u1ea7n s\\u1ed1 \\u0111\\u1ea7u ra\",\"Th\\u1eddi gian n\\u1ea1p l\\u1ea1i \\u0111i\\u1ec3n h\\u00ecnh\",\"Th\\u1eddi gian ch\\u1ea1y \\u1eafc quy* \\u2013 N\\u1eeda t\\u1ea3i\",\"\\u0110\\u1ed9 \\u1ea9m t\\u01b0\\u01a1ng \\u0111\\u1ed1i ho\\u1ea1t \\u0111\\u1ed9ng\\/b\\u1ea3o qu\\u1ea3n\",\"Lo\\u1ea1i v\\u00e0 s\\u1ed1 l\\u01b0\\u1ee3ng \\u1ed5 c\\u1eafm\",\"C\\u00f4ng su\\u1ea5t (VA\\/W)\",\"Nhi\\u1ec7t \\u0111\\u1ed9 ho\\u1ea1t \\u0111\\u1ed9ng, \\u00b0C (\\u00b0F)\"]',1,NULL,NULL),(5,'Cable Management',NULL,2,NULL,NULL),(6,'Network UPS',NULL,1,NULL,NULL),(7,'Rackmount UPS','[\"Lo\\u1ea1i ch\\u1ec9nh l\\u01b0u\",\"M\\u1ee9c \\u0111i\\u1ec7n \\u00e1p\",\"D\\u1ea3i \\u0111i\\u1ec7n \\u00e1p \\u0111\\u1ea7u v\\u00e0o\",\"D\\u1ea3i t\\u1ea7n s\\u1ed1 \\u0111\\u1ea7u v\\u00e0o\",\"\\u0110\\u1ed9 cao (m)\",\"\\u0110\\u1ed9 \\u1ea9m t\\u01b0\\u01a1ng th\\u00edch\",\"Nhi\\u1ec7t \\u0111\\u1ed9 ho\\u1ea1t \\u0111\\u1ed9ng, \\u00b0C (\\u00b0F)\",\"M\\u1ee9c c\\u00f4ng su\\u1ea5t\"]',1,NULL,NULL),(8,'Rack PDU','null',1,NULL,NULL),(9,'Airflow Management/ Banking Pannels',NULL,2,NULL,NULL),(10,'Basic PDUs',NULL,2,NULL,NULL),(11,'Shelves','null',2,NULL,NULL),(12,'Side Panels/ Partition Panels',NULL,2,NULL,NULL);
/*!40000 ALTER TABLE `product_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_prices`
--

DROP TABLE IF EXISTS `product_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_prices` (
  `product_price_id` int(11) NOT NULL,
  `product_price_name` varchar(255) NOT NULL,
  `product_price_amout` varchar(255) NOT NULL,
  `product_price_created_at` timestamp NULL DEFAULT NULL,
  `product_price_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_prices`
--

LOCK TABLES `product_prices` WRITE;
/*!40000 ALTER TABLE `product_prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_brief_description` mediumtext,
  `product_description` longtext NOT NULL,
  `product_information` text,
  `product_image` text,
  `product_parent` int(11) NOT NULL,
  `product_child` int(11) NOT NULL,
  `product_created_at` timestamp NULL DEFAULT NULL,
  `product_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'LIEBERT MPH, MANAGED RACK PDU','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Liebert MPH, Managed Rack PDU','Liebert MPH là 1 thanh rack phân phối nguồn linh hoạt (PDU); một giải pháp hoàn hảo cho các hoạt động IT. Thanh PDU này cho phép các cơ sở dữ liệu có thể điều khiển tới từng ổ cắm, cũng như giám sát các dải và các thông số đầu vào môi trường như là nhiệt độ tủ rack và độ ẩm. Liebert MPH mang lại nhiệt độ hoạt động tối ưu cho các thiết bị công nghiệp, bảo đảm tính sẵn sàng cho các thiết bị ngay cả trong điều kiện môi trường khắc nghiệt như phía sau tủ rack.\r\n\r\nLiebert MPH cung cấp nhiều lựa chọn nguồn đầu vào và đầu ra. Liebert MPH cung cấp 1 pha 120 hoặc 208VAC và 3 pha 120/208VAC 20 hoặc 30 amp nguồn đầu vào; 1 pha nguồn đầu ra bao gồm hỗn hợp các ổ cắm; và các module truyền thông dựa trên thẻ. Liebert MPX có thể gắn theo chiều dọc (Zero U) hoặc gắn vào rackmount. Có thể gắn tới 4 Liebert MPH với nhau lên mỗi rack PDU, dùng chung IP của người dùng và giám sát các thiết bị.\r\n\r\nLiebert MPH Giám sát (MPH-NB) - Bản chỉ giám sát - cung cấp vị trí và giám sát từ xa từng thông số của PDU như số Volts, amps, watts và kilowatt/giờ.\r\n\r\nLiebert MPH Giám sát và điều khiển (MPH-NC) - Bản giám sát và điều khiển - cung cấp các tính năng tương tự như bản MPH-NB nhưng có thêm chức năng điều khiển giám sát từ xa, điều khiển bật tắt từng ổ cắm. Vị trí ổ cắm được bật/tắt trên PDU được hiển thị dựa trên các đèn led.',NULL,'atd/upload/333IMG_1-500x500.png',3,9,'2017-06-14 07:38:14','2017-06-28 09:40:34'),(3,'Liebert ItON 600VA','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA600-­BX','Mô tả sản phẩm:\r\nUPS(bộ lưu điện) liebert ItOn 600V là một UPS off-line có các tính năng đáng tin cậy được thiết kế cho các máy tính để bàn và các thiết bị IT thường được sử dụng trong các văn phòng hoặc gia đình. Nó có một bộ điều chỉnh điện áp tự động cho phép nó thể tương thích dễ dàng với các máy tính để bàn và các thiết bị điện tử cảm biến nhạy cảm khác.Được thiết kế để có thể sử dụng dễ dàng, UPS liebert ItOn 600V giúp bạn có thể kịp thời lưu trữ các thông tin cần thiết trên thiết bị điện trong trường hợp bị mất điện đột ngột.\r\n\r\nLiebert ItOn được sử dụng chủ yếu cho:\r\n\r\nCác dòng máy tính để bàn\r\nCác máy trạm chuyên nghiệp\r\nCác Router cỡ nhỏ, Bridges, và Hubs\r\nCác máy bán hàng\r\nCác thiết bị điện tử khác',NULL,'atd/upload/138IMG_1-500x500.jpg',3,6,'2017-06-22 13:44:04','2017-06-28 10:01:01'),(4,'1U 2.25\" Cable Hoop Black (Set Of 10)','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Cable Hoop','Mô tả sản phẩm:\r\n1U 2.25\" Cable Hoop Black (Set of 10)',NULL,'atd/upload/236IMG_1-500x500 (1).png',4,10,'2017-06-22 13:45:45','2017-06-28 09:45:03'),(5,'1U 3.25\" Cable Hoop Black (Set Of 10)','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Cable Hoop','Mô tả sản phẩm:\r\n1U 3.25\" Cable Hoop Black (Set of 10)',NULL,'atd/upload/362IMG_1-500x500 (1).png',4,10,'2017-06-22 13:47:27','2017-06-28 09:46:41'),(6,'1U Cable Management Panel 2.25” Screw On Hoop Pass Though Black','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Cable Management','1U Cable Management Panel 2.25” Screw On Hoop Pass Though Black',NULL,'atd/upload/848IMG_1-500x500 (1).png',4,10,'2017-06-24 16:57:18','2017-06-28 09:46:56'),(7,'1U Cable Management Panel 3.25” Screw On Hoop Pass Though Black','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Cable Management','1U Cable Management Panel 3.25” Screw On Hoop Pass Though Black',NULL,'atd/upload/470IMG_1-500x500 (1).png',4,10,'2017-06-24 16:58:02','2017-06-28 09:47:15'),(8,'Knurr F-Series II Rack(42U)','Nhà sản xuất: Emerson\r\nDòng sản phẩm: Knurr F-Series II Rack(42U)','Mô tả sản phẩm:\r\nChức năng:\r\n\r\nQuản lý điện năng.\r\nQuản lý dễ dàng các thiết bị có trong tủ.\r\nĐặc điểm:\r\n\r\nCửa phía trước và phía sau được đục lỗ cho hiệu quả làm mát các thiết bị.\r\nTủ được làm bằng thép nên có thể chịu tải trọng lên đến 1300Kg.\r\n75% tủ được được đục lỗ, để làm mát cho thiết bị giảm sự tích tụ nhiệt.\r\nĐộ cao 42U.\r\nPhía trên tủ có nắp đậy cho có đục lỗ để thuận tiện cho cáp vào tủ.\r\nChân đế tủ có thể là bánh xe, chân đứng.\r\nCác thiết bị gắn trên tủ: KVM Switch ; Rack mount server ; Rack PDU; và các thiết bị IT khác.\r\nNơi ứng dụng:\r\n\r\nTrong các phòng server\r\nTrong các Data center.',NULL,'atd/upload/312Knurr F-Series II Rack(45U).png',5,15,'2017-06-27 10:38:08','2017-06-28 09:30:13'),(9,'PSA600-SOHO','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA600-SOHO','Mô tả sản phẩm: Liebert PSA600-SOHO là một giải pháp lưu điện công nghệ Line-interactive đáng tin cậy. Tích hợp công nghệ AVR cho phép các thiết bị hoạt động tốt ngay cả khi lưới điện không ổn định. Được thiết kế với hệ điều khiển đơn, dễ dàng sử dụng, Liebert PSA600-SOHO cho đáp ứng hơn hơn gian lưu trữ các công việc xử lý và rất lý tưởng dùng cho văn phòng hay ngôi nhà của bạn. Thiết kế nhỏ gọn, giao diện dễ sử dụng và thân thiện, Liebert PSA600-SOHO bảo vệ tốt nhất cho thiết bị IT của bạn.',NULL,'atd/upload/599liebertitonsoho-front-ad-en-asia-500x500.jpg',3,6,'2017-06-28 10:20:42',NULL),(10,'Liebert ItON 1000VA','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA1000­-BX','Mô tả sản phẩm:\r\nUPS(bộ lưu điện) liebert ItOn 1000V là một UPS off-line có các tính năng đáng tin cậy được thiết kế cho các máy tính để bàn và các thiết bị IT thường được sử dụng trong các văn phòng hoặc gia đình. Nó có một bộ điều chỉnh điện áp tự động cho phép nó thể tương thích dễ dàng với các máy tính để bàn và các thiết bị điện tử cảm biến nhạy cảm khác.Được thiết kế để có thể sử dụng dễ dàng, UPS liebert ItOn 1000V giúp bạn có thể kịp thời lưu trữ các thông tin cần thiết trên thiết bị điện trong trường hợp bị mất điện đột ngột.\r\n\r\nLiebert ItOn được sử dụng chủ yếu cho:\r\n\r\nCác dòng máy tính để bàn\r\nCác máy trạm chuyên nghiệp\r\nCác Router cỡ nhỏ, Bridges, và Hubs\r\nCác máy bán hàng\r\nCác thiết bị điện tử khác',NULL,'atd/upload/262IMG_1-500x500 (1).jpg',3,6,'2017-06-28 10:22:18',NULL),(11,'Liebert PSA 500VA','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA500MT3-­230','Mô tả sản phẩm:\r\nLiebert PSA 500VA là một UPS tương tác dòng có tính kinh tế, thân thiện với môi trường cung cấp đầy đủ các tính năng để bảo vệ năng lượng dành cho các máy tính văn phòng nhỏ và các thiết bị điện. Phần mềm Liebert Multilink tự động tắt máy tính trong trường hợp sự cố cúp điện kéo dài. Nó cũng có đầy đủ các chức năng dành cho việc quản lí hiển thị trên màn hình của UPS.\r\n\r\nLiebert PSA 500VA cung cấp thời gian chạy dự phòng lên tới 5 phút... nhiều hơn nhiều so với những gì bạn cần để tắt các thiết bị trong hệ thống của mình. Phầm mềm tắt nguồn Liebert MultiLink USB và một cáp USB cũng được cung cấp, cho phép điều khiển từ xa các cảnh báo và tự động tắt một cách chính xác, mượt mà các hệ thống kết nối với UPS.\r\n\r\nĐược sử dụng cho các thiết bị sau\r\n\r\nMáy tính để bàn chuyên nghiệp, máy tính cá nhân\r\nMáy trạm chuyên nghiệp\r\nSmall Routers, Bridges và Hubs\r\nMáy bán hàng\r\nCác thiết bị điện tử cảm biến khác',NULL,'atd/upload/313IMG_1-500x500 (2).png',3,6,'2017-06-28 10:26:26',NULL),(12,'Liebert PSA 650VA','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA650MT3-­230','Mô tả sản phẩm:\r\nLiebert PSA 650VA là một UPS tương tác dòng có tính kinh tế, thân thiện với môi trường cung cấp đầy đủ các tính năng để bảo vệ năng lượng dành cho các máy tính văn phòng nhỏ và các thiết bị điện. Phần mềm Liebert Multilink tự động tắt máy tính trong trường hợp sự cố cúp điện kéo dài. Nó cũng có đầy đủ các chức năng dành cho việc quản lí hiển thị trên màn hình của UPS.\r\n\r\nLiebert PSA 650VA cung cấp thời gian chạy dự phòng lên tới 5 phút... nhiều hơn nhiều so với những gì bạn cần để tắt các thiết bị trong hệ thống của mình. Phầm mềm tắt nguồn Liebert MultiLink USB và một cáp USB cũng được cung cấp, cho phép điều khiển từ xa các cảnh báo và tự động tắt một cách chính xác, mượt mà các hệ thống kết nối với UPS.\r\n\r\nĐược sử dụng cho các thiết bị sau\r\n\r\nMáy tính để bàn chuyên nghiệp, máy tính cá nhân\r\nMáy trạm chuyên nghiệp\r\nSmall Routers, Bridges và Hubs\r\nMáy bán hàng\r\nCác thiết bị điện tử cảm biến khác',NULL,'atd/upload/333IMG_1-500x500 (2).png',3,6,'2017-06-28 10:27:40',NULL),(13,'Liebert PSA 1kVA','Nhà sản xuất: Emerson\r\nDòng sản phẩm: PSA1000MT3-­230','Mô tả sản phẩm:\r\nLiebert PSA 1kVA là một UPS tương tác dòng có tính kinh tế, thân thiện với môi trường cung cấp đầy đủ các tính năng để bảo vệ năng lượng dành cho các máy tính văn phòng nhỏ và các thiết bị điện. Phần mềm Liebert Multilink tự động tắt máy tính trong trường hợp sự cố cúp điện kéo dài. Nó cũng có đầy đủ các chức năng dành cho việc quản lí hiển thị trên màn hình của UPS.\r\n\r\nĐược thiết kế đơn giản và tối ưu các tính năng để người dùng có thể sử dụng dễ dàng, Liebert PSA 1kVA cung cấp thời gian chạy dự phòng lên tới 5 phút... nhiều hơn nhiều so với những gì bạn cần để tắt các thiết bị trong hệ thống của mình. Phầm mềm tắt nguồn Liebert MultiLink USB và một cáp USB cũng được cung cấp, cho phép điều khiển từ xa các cảnh báo và tự động tắt một cách chính xác, mượt mà các hệ thống kết nối với UPS.\r\n\r\nĐáng tin cậy\r\n\r\nThời gian back-up 5 phút ở chế độ chạy hết công suất\r\nPin được kiểm tra định kỳ để bảo đảm luôn luôn có thể hoạt động tốt\r\nCảnh báo nâng cao cảnh báo trước khi UPS tắt nguồn\r\nChống sét và tăng áp (TVSS)\r\nCổng kết nối RJ-45 để bảo đảm dữ liệu khi tăng áp\r\nCổng giao tiếp USB / phần mềm tự tắt đi kèm\r\nPin có thể thay thế bởi người dùng\r\nĐược sử dụng cho các thiết bị sau\r\n\r\nMáy tính để bàn chuyên nghiệp, máy tính cá nhân\r\nMáy trạm chuyên nghiệp\r\nSmall Routers, Bridges và Hubs\r\nMáy bán hàng\r\nCác thiết bị điện tử cảm biến khác',NULL,'atd/upload/570IMG_1-500x500 (2).png',3,6,'2017-06-28 10:28:54',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) unsigned NOT NULL,
  `profile_field_type_id` int(10) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field`
--

LOCK TABLES `profile_field` WRITE;
/*!40000 ALTER TABLE `profile_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_field_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_field_type`
--

LOCK TABLES `profile_field_type` WRITE;
/*!40000 ALTER TABLE `profile_field_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_field_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,1,'127.0.0.1',0,0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(25) DEFAULT NULL,
  `vat` varchar(20) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-11 20:40:40','2017-05-11 20:40:40');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` text,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) DEFAULT NULL,
  `reset_password_code` varchar(255) DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','$2y$10$p50FzOdvkrUnUFu/WxRYQuHB.rprP6S7quE5/5G.tJrO6gtu9zd52','',1,0,NULL,NULL,'2017-07-21 21:53:20','$2y$10$ozIyWSTm.PHoDlTbL.dnh.46VxTZOQJuHgxYSRrmEhgXXQK.ymoDq',NULL,0,'2017-05-11 20:40:40','2017-07-21 21:53:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-22 12:00:41

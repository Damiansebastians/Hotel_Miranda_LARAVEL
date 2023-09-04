-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: hotelmiranda
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `_id` varchar(24) DEFAULT NULL,
  `img` varchar(44) DEFAULT NULL,
  `Guest` varchar(22) DEFAULT NULL,
  `Order_Date` varchar(24) DEFAULT NULL,
  `Check_in` varchar(24) DEFAULT NULL,
  `Check_out` varchar(24) DEFAULT NULL,
  `roomId` varchar(24) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL,
  `amenities` varchar(10) DEFAULT NULL,
  `Special_Request` varchar(16) DEFAULT NULL,
  `description` varchar(48) DEFAULT NULL,
  `Status` varchar(8) DEFAULT NULL,
  `__v` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES ('_id','img','Guest','Order_Date','Check_in','Check_out','roomId','price','amenities','Special_Request','description','Status','__v'),('64ef16ebed0228a4bbc05e87','https://picsum.photos/seed/W4lf1QOw/640/480','Teresa Champlin','2023-01-06T15:57:45.000Z','2023-01-11T22:34:37.000Z','2023-01-08T22:45:11.000Z','64ef16eaed0228a4bbc05e4c','70','Coffee Set','Stand-alone','Re-contextualized modular throughput','Pending','0'),('64ef16ebed0228a4bbc05e89','https://picsum.photos/seed/Ta9hX2P/640/480','Clyde Turner','2023-01-01T09:27:56.000Z','2023-01-05T04:21:38.000Z','2023-01-03T02:39:14.000Z','64ef16eaed0228a4bbc05e50','417','Wifi','Synergistic','Automated stable orchestration','Canceled','0'),('64ef16ebed0228a4bbc05e8b','https://picsum.photos/seed/vO3mSLOKQ/640/480','Mr. Noah Lemke','2023-01-05T12:04:13.000Z','2023-01-07T03:29:31.000Z','2023-01-06T14:56:13.000Z','64ef16eaed0228a4bbc05e52','475','Coffee Set','Grass-roots','Multi-channelled multi-tasking definition','Pending','0'),('64ef16ebed0228a4bbc05e8d','https://picsum.photos/seed/Gzz06EjwE/640/480','Shane Koch','2023-01-10T22:12:41.000Z','2023-01-11T21:05:16.000Z','2023-01-11T09:36:03.000Z','64ef16eaed0228a4bbc05e54','143','AC','Customer-focused','Up-sized bifurcated support','Pending','0'),('64ef16ebed0228a4bbc05e8f','https://picsum.photos/seed/AjH932RB/640/480','Mack Ritchie','2023-01-01T05:58:41.000Z','2023-01-07T19:19:31.000Z','2023-01-05T21:37:13.000Z','64ef16eaed0228a4bbc05e56','73','Double Bed','Team-oriented','Synergistic logistical software','Refund','0'),('64ef16ebed0228a4bbc05e91','https://picsum.photos/seed/BKerqL/640/480','Mr. Justin Metz','2023-01-04T21:31:57.000Z','2023-01-01T06:22:30.000Z','2023-01-01T03:46:56.000Z','64ef16eaed0228a4bbc05e5a','183','AC','Synergistic','Progressive web-enabled open system','Canceled','0'),('64ef16ebed0228a4bbc05e93','https://picsum.photos/seed/EILIl/640/480','Manuel Koepp','2023-01-07T03:03:17.000Z','2023-01-03T09:58:00.000Z','2023-01-01T19:30:42.000Z','64ef16eaed0228a4bbc05e5e','150','LED TV','Devolved','Cross-group real-time array','Pending','0'),('64ef16ebed0228a4bbc05e95','https://picsum.photos/seed/hlyYz/640/480','Andy Konopelski','2023-01-03T11:35:30.000Z','2023-01-09T21:55:46.000Z','2023-01-03T14:42:03.000Z','64ef16eaed0228a4bbc05e62','224','AC','Adaptive','Programmable zero defect time-frame','Canceled','0'),('64ef16ebed0228a4bbc05e97','https://picsum.photos/seed/0Pu7OaD2H/640/480','Miss Wanda Batz','2023-01-06T08:39:55.000Z','2023-01-08T17:13:47.000Z','2023-01-07T10:21:06.000Z','64ef16eaed0228a4bbc05e66','235','LED TV','Pre-emptive','Versatile solution-oriented budgetary management','Pending','0'),('64ef16ebed0228a4bbc05e99','https://picsum.photos/seed/r9J2wH/640/480','Kellie Christiansen IV','2023-01-01T07:23:24.000Z','2023-01-04T19:03:50.000Z','2023-01-10T00:28:53.000Z','64ef16eaed0228a4bbc05e6a','430','Double Bed','Extended','Re-engineered solution-oriented toolset','Refund','0');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `_id` varchar(24) DEFAULT NULL,
  `date` varchar(67) DEFAULT NULL,
  `customer` varchar(17) DEFAULT NULL,
  `comment` varchar(195) DEFAULT NULL,
  `action` varchar(7) DEFAULT NULL,
  `__v` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES ('_id','date','customer','comment','action','__v'),('64ef16eaed0228a4bbc05e4a','Sun Jan 08 2023 14:23:27 GMT+0100 (hora estándar de Europa central)','Mike Wolf','Minus libero accusamus eius pariatur nulla minus. Quis ab vel perspiciatis neque iure nobis. Magnam qui facere.','Archive','0'),('64ef16eaed0228a4bbc05e58','Mon Jan 09 2023 18:20:39 GMT+0100 (hora estándar de Europa central)','Roxanne Harris','Accusantium alias vitae est quis sit. Pariatur reprehenderit accusamus dolorum veritatis consequatur rem nostrum dolore ullam. Minima sed veritatis assumenda tempore.','Archive','0'),('64ef16eaed0228a4bbc05e5c','Mon Jan 09 2023 00:11:08 GMT+0100 (hora estándar de Europa central)','Kayla Shields IV','Quae debitis error. Molestiae porro incidunt inventore at velit aliquid adipisci occaecati. Repudiandae aut alias temporibus laboriosam.','Archive','0'),('64ef16eaed0228a4bbc05e60','Sun Jan 08 2023 03:56:56 GMT+0100 (hora estándar de Europa central)','Sidney Thiel','Dignissimos commodi esse consequatur labore. Blanditiis delectus hic quibusdam quibusdam. Quisquam aut qui quis.','Archive','0'),('64ef16eaed0228a4bbc05e64','Sun Jan 08 2023 11:56:27 GMT+0100 (hora estándar de Europa central)','Johnny Mraz','Aperiam reprehenderit quis quia omnis distinctio architecto consectetur totam. Laborum totam rem blanditiis molestiae. Sed accusantium dignissimos a alias fugiat accusamus eligendi maiores saepe.','Archive','0'),('64ef16eaed0228a4bbc05e68','Sat Jan 07 2023 16:58:45 GMT+0100 (hora estándar de Europa central)','Paulette Casper','Provident voluptatibus rem ratione nemo hic similique. Corrupti alias magni. Quas earum aliquam illo quia consectetur eveniet.','Archive','0'),('64ef16eaed0228a4bbc05e6e','Sat Jan 07 2023 12:32:02 GMT+0100 (hora estándar de Europa central)','Shelia Robel','Assumenda suscipit in quae adipisci saepe nulla laudantium non ducimus. Dicta perferendis iusto. Atque eveniet ea earum fugit ratione odio.','Archive','0'),('64ef16eaed0228a4bbc05e70','Mon Jan 09 2023 22:52:12 GMT+0100 (hora estándar de Europa central)','Gregg Collier','Quidem voluptatibus eligendi enim ex. Itaque iste ex ad id commodi qui modi. Dolores quasi corporis.','Archive','0'),('64ef16eaed0228a4bbc05e72','Sat Jan 07 2023 16:23:55 GMT+0100 (hora estándar de Europa central)','Dr. Owen Franecki','Mollitia ex quod ad consequuntur culpa nihil itaque fugiat at. Blanditiis incidunt pariatur eveniet. Dolorem dolore beatae unde quaerat earum voluptatem.','Archive','0'),('64ef16eaed0228a4bbc05e74','Fri Jan 06 2023 20:55:24 GMT+0100 (hora estándar de Europa central)','Terence Moore IV','Mollitia fuga error provident. Excepturi quos quos ullam similique aperiam fugit distinctio. Culpa sit molestias doloribus suscipit alias vitae commodi.','Archive','0');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `_id` varchar(24) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `bed_Type` varchar(15) DEFAULT NULL,
  `facilities` varchar(10) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL,
  `offer` varchar(5) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `__v` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('_id','img','bed_Type','facilities','price','offer','status','__v'),('64ef16eaed0228a4bbc05e4c','https://picsum.photos/seed/JHM05CM/640/480','Suite','Bathup','245','53','ACTIVE','0'),('64ef16eaed0228a4bbc05e50','https://picsum.photos/seed/XYOgT/640/480','Double Superior','Double Bed','377','25','INACTIVE','0'),('64ef16eaed0228a4bbc05e52','https://picsum.photos/seed/LxX7F4Ply1/640/480','Suite','Shower','146','44','ACTIVE','0'),('64ef16eaed0228a4bbc05e54','https://picsum.photos/seed/R2g9IzVA/640/480','Double Bed','Double Bed','454','17','ACTIVE','0'),('64ef16eaed0228a4bbc05e56','https://picsum.photos/seed/3pijes08YL/640/480','Single Bed','AC','455','74','ACTIVE','0'),('64ef16eaed0228a4bbc05e5a','https://picsum.photos/seed/rLXkk/640/480','Double Bed','LED TV','200','23','INACTIVE','0'),('64ef16eaed0228a4bbc05e5e','https://picsum.photos/seed/HUsUynHT5Z/640/480','Double Bed','Bathup','469','11','ACTIVE','0'),('64ef16eaed0228a4bbc05e62','https://picsum.photos/seed/wpPib1W/640/480','Double Superior','Towel','98','55','ACTIVE','0'),('64ef16eaed0228a4bbc05e66','https://picsum.photos/seed/Z2hrBoSVf/640/480','Double Superior','Coffee Set','407','75','INACTIVE','0'),('64ef16eaed0228a4bbc05e6a','https://picsum.photos/seed/wSpEYWqQd/640/480','Single Bed','AC','354','15','ACTIVE','0');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `_id` varchar(24) DEFAULT NULL,
  `img` varchar(95) DEFAULT NULL,
  `name` varchar(28) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(27) DEFAULT NULL,
  `Job_Desk` varchar(34) DEFAULT NULL,
  `Contact` varchar(16) DEFAULT NULL,
  `Status` varchar(8) DEFAULT NULL,
  `__v` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('_id','img','name','password','email','Job_Desk','Contact','Status','__v'),('64ef16eaed0228a4bbc05e4e','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/240.jpg','Geraldine Botsford','$2b$10$5rlsEKn/rBVIJx8PRULqg.Ib054F3F8pgTPgyWVrRALCEu1AVk5mG','Deanna.Toy59@yahoo.com','Central Identity Executive','+34 986-10-01-41','ACTIVE','0'),('64ef16eaed0228a4bbc05e6c','https://avatars.githubusercontent.com/u/81647596','Dewey Luettgen','$2b$10$pGKdGE9wRTmMVtp80GUreeMhzvuPCkb.xAU07p0utvIkrFow0Nx8S','Prudence_Rogahn84@gmail.com','Regional Response Officer','+34 955-17-08-18','ACTIVE','0'),('64ef16eaed0228a4bbc05e76','https://avatars.githubusercontent.com/u/45535245','Roberta Homenick-Murray','$2b$10$8JgY6sfTJ6cY..zMxTp9yudUUQlCdHYUCIDRq/4npU05.n9xDLtlK','Elenor35@hotmail.com','Direct Functionality Associate','+34 983-12-15-65','ACTIVE','0'),('64ef16eaed0228a4bbc05e78','https://avatars.githubusercontent.com/u/49354468','Devin Roob Jr.','$2b$10$wUcOJg9kTKN8pnmnX4/Q/ec1Ll4W4Muao5CG60TSrWFtpaG0JCYiq','Garett.Mueller@hotmail.com','Chief Metrics Technician','+34 973-06-07-47','INACTIVE','0'),('64ef16ebed0228a4bbc05e7a','https://avatars.githubusercontent.com/u/32140150','Jonathan Trantow-Bartell Sr.','$2b$10$zi9kTjPOxq6dn.Nbz/ps2.Z6lIz8VPe2aj204D69uyhOHqvHJlcZG','Lonny91@gmail.com','Principal Implementation Developer','+34 957-46-10-24','ACTIVE','0'),('64ef16ebed0228a4bbc05e7c','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/497.jpg','Dr. Norman Hane','$2b$10$i45.P6lOVOGWbVKFzQSiG.MIHatCKHvMBNRDgQ6DeBu0H2Tb7w01K','Ed86@hotmail.com','National Intranet Liaison','+34 987-34-67-48','ACTIVE','0'),('64ef16ebed0228a4bbc05e7e','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1139.jpg','Glen Hartmann','$2b$10$GDztP6xitwgdLfFrgywTMu/OWxy8iwoLblqxK9Q7dlcCHen835KAa','Javier_McGlynn@hotmail.com','Customer Tactics Executive','+34 950-56-74-92','INACTIVE','0'),('64ef16ebed0228a4bbc05e80','https://avatars.githubusercontent.com/u/70711977','Miss Eula Okuneva','$2b$10$ORyADp62pZsZ6B8hRDuFM.8PKFuROklKGJsX5TlVJ8/9RXEZz9VmS','America.Mosciski@gmail.com','Senior Markets Manager','+34 961-36-16-25','INACTIVE','0'),('64ef16ebed0228a4bbc05e82','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/669.jpg','Mr. Aubrey Rowe','$2b$10$JfrV2HZr2jCVCDwGoUT4XOSxHNHhlSfDzKBJ9mFn7ZsC/JgeXiAt.','Cordell_Kuhlman17@gmail.com','Internal Web Designer','+34 953-90-92-50','INACTIVE','0'),('64ef16ebed0228a4bbc05e84','https://avatars.githubusercontent.com/u/66072705','Corey Leffler','$2b$10$2dvE0ZZHfEkMpyNeBXL0EOhgOBz3NFYDB/dgc6AOeZM9r3G4iWj.i','Maybelle33@gmail.com','Legacy Division Assistant','+34 970-02-93-28','ACTIVE','0'),('64ef17c150af63c788edad72','https://randomuser.me/api/portraits/women/9.jpg','SrAdmin','$2b$10$IIkGznIRE3D0Z37lQdalOu2d6tf21n9Llod1ctI8pN7UeVZJ.8rFS','admin@admin.com','Director','+34 646-65-55-55','ACTIVE','');
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

-- Dump completed on 2023-09-04  8:53:06

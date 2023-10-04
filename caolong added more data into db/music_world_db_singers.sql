-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: music_world_db
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `singers`
--

DROP TABLE IF EXISTS `singers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `singers` (
  `singer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `description` text,
  `birth_year` smallint DEFAULT NULL,
  `gender` tinyint NOT NULL,
  PRIMARY KEY (`singer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `singers`
--

LOCK TABLES `singers` WRITE;
/*!40000 ALTER TABLE `singers` DISABLE KEYS */;
INSERT INTO `singers` VALUES (1,'Trung Quân IDOL','trung-quan-idol-singer.jpg','VIE','Trước khi bén duyên với nghệ thuật, Trung Quân từng theo học trường Đại học Kiến Trúc Thành Phố Hồ Chí Minh.Anh là ca sĩ trẻ nằm trong top 141 ca sĩ nổi tiếng trong nước và đứng thứ 768 trong danh sách bảng xếp hạng các ca sĩ nổi tiếng trên thế giới.',1989,1),(2,'TLinh','tlinh-singer.jpg','VIE','Tlinh là một nữ Rapper, nghệ sĩ sáng tác nhạc tài năng của Việt Nam rất nổi vài năm trở lại đây. Những bản nhạc có sự ghóp mặt của Tlinh hầu như đều trở thành hit làm mưa làm gió trên các nền tảng nghe nhạc, nổi bật là bài nhạc Nếu lúc đó Tlinh sáng tác.',2000,0),(3,'Bức Tường','buc-tuong-singer.jpg','VIE','Bức Tường (tên cũ: The Wall) là một ban nhạc rock Việt Nam được thành lập vào năm 1995. Họ trải qua nhiều lần thay đổi nhân sự và từng có thời gian ngừng hoạt động, song với hai thành viên chủ chốt là Trần Tuấn Hùng (guitar) và Trần Lập (sáng tác, thủ lĩnh), ban nhạc vẫn kiên trì hoạt động',1995,1),(4,'Sơn Tùng - MTP','son-tung-mtp-singer.jpg','VIE','Sơn Tùng thường đi hát ở Cung văn hoá thiếu nhi tỉnh Thái Bình và học chơi đàn organ. Sau đó, Tùng cùng với các bạn trong lớp thành lập nên một nhóm nhạc, lấy tên là Over Band, bắt đầu sáng tác và đăng tải các bài hát của mình lên một trang web chuyên về lĩnh vực âm nhạc có tên là LadyKillah.',1994,1),(5,'B-Ray','bray-singer.jpg','VIE','Anh bắt đầu làm nhạc rap từ năm 14 tuổi. Lúc học cấp 3, anh được một số bạn bè chỉ cách rap. Thời điểm đó, anh chỉ rap tiếng Anh.[1] Vài năm sau, do bất đồng trong ngôn ngữ, đến khoảng cuối năm 2012, anh chuyển sang viết rap bằng tiếng Việt. Từ năm 2013, anh dần được cộng đồng underground ở Việt Nam biết đến.',1993,1),(6,'Jack','jack-singer.jpg','VIE','Jack  bắt đầu được biết đến khi hoạt động trong nhóm nhạc G5R và phát hành bài hát \"Hồng nhan\". Trong suốt sự nghiệp của mình, anh đã nhận được năm giải Làn Sóng Xanh, một giải Mai Vàng, một giải WeChoice Awards và bốn giải Zing Music Awards.',1997,1),(7,'NHA','nha-singer.jpg','VIE','chưa có thông tin',NULL,1),(8,'Văn Mai Hương','van-mai-huong-singer.jpg','VIE','Cô được gia đình cho theo học nhạc và sinh hoạt âm nhạc từ nhỏ. Cô từng tham gia sinh hoạt ở Câu lạc bộ Họa Mi (Hà Nội) và từng tham gia biểu diễn nhiều chương trình của thiếu nhi.',1994,0);
/*!40000 ALTER TABLE `singers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-04 23:19:48

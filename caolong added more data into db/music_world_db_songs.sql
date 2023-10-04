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
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `songs` (
  `song_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `released_date` date DEFAULT NULL,
  `lyrics` text,
  `file_name` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `views` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `album_id` int DEFAULT NULL,
  PRIMARY KEY (`song_id`),
  KEY `songs_categories_fk` (`category_id`),
  KEY `songs_albums_fk` (`album_id`),
  CONSTRAINT `songs_albums_fk` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`) ON DELETE SET NULL,
  CONSTRAINT `songs_categories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songs`
--

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;
INSERT INTO `songs` VALUES (1,'Tình nào không như tình đầu','2020-09-03','Đau mấy lần rồi','tinh-nao-khong-nhu-tinh-dau.mp3','tinh-nao-khong-nhu-tinh-dau.jpg',5032594,1,1),(2,'Trót Yêu','2014-03-31','Có chút bối rối chạm tay anh rồi','trot-yeu.mp3','trot-yeu.jpg',5482831,2,1),(3,'Thả Vào Mưa','2016-07-20','Mưa một ngày vội vã không em','tha-vao-mua.mp3','tha-vao-mua.jpg',4304218,1,1),(4,'Nhìn vào mưa','2018-06-01','Nhìn vào mưa ','nhin-vao-mua.mp3','nhin-vao-mua.jpg',1461787,1,1),(5,'Gọi Mưa','2014-07-10','Mưa ơi rơi nhanh cho trời giông tố đến tơi bời','goi-mua.mp3','goi-mua.jpg',10166721,3,1),(6,'Chưa Bao Giờ','2015-08-20','Đã có lúc anh mong tim mình bé lại,','chua-bao-gio.mp3','chua-bao-gio.jpg',21387709,1,1),(7,'Dạ Vũ','2022-08-15','Verse 1:','da-vu.mp3','da-vu.jpg',2137213,2,NULL),(8,'Người ôm pháo hoa','2022-04-21','NGƯỜI ÔM PHÁO HOA','nguoi-om-phao-hoa.mp3','nguoi-om-phao-hoa.jpg',3242912,2,NULL),(9,'Anh Tự Do Nhưng Cô Đơn','2022-11-10','Đau mấy lần rồi','anh-tu-do-nhung-co-don.mp3','anh-tu-do-nhung-co-don.jpg',7320696,1,1),(10,'Tình yêu có nghĩa là gì','2023-08-12','yêu yêu yêu, yêu yêu yêu','tinh-yeu-co-nghia-la-gi.mp3','tinh-yeu-co-nghia-la-gi.jpg',2060892,2,3),(11,'Người đẹp ngủ','2023-08-16','quá lâu rồi','nguoi-dep-ngu.mp3','nguoi-dep-ngu.jpg',258799,2,3),(12,'Người điên','2023-08-16','em chỉ là người điên vô thường trên trần thế','nguoi-dien.mp3','nguoi-dien.jpg',1378007,2,3),(13,'Kho báu đánh rơi','2023-08-16','đưa em về một nơi rất xa','kho-bau-danh-roi.mp3','kho-bau-danh-roi.jpg',1378007,2,3),(14,'Ái','2023-08-16','tình yêu','ai.mp3','ai.jpg',29444,2,3),(15,'Thế giới thần tiên','2023-08-16','một khi anh đến bên em những thứ khác anh sẽ không còn muốn','the-gioi-than-tien.mp3','the-gioi-than-tien.jpg',303882,2,3),(16,'Nữ siêu anh hùng','2023-09-06','họ nói rằng chuyện gì cũng có thể đến','nu-sieu-anh-hung.mp3','nu-sieu-anh-hung.jpg',1417689,2,3),(17,'Nếu lúc đó','2023-03-02','Verse 1','neu-luc-do.mp3','neu-luc-do.jpg',4471137,2,3),(18,'Tèn tèn girl','2000-11-15','Tôi muốn đi chơi, lang thang bên ngoài','ten-ten-girl.mp3','ten-ten-girl.jpg',221698,5,NULL),(19,'Tình yêu bận bịu','2020-09-02','Gửi cho em đêm lung linh và tiếng sóng nơi biển lớn','tinh-yeu-ban-biu.mp3','tinh-yeu-ban-biu.jpg',743905,5,NULL),(20,'Con đường không tên','2020-11-26','1. Gặp nhau trong đời, chung một bầu trời, sẻ chia cùng nhau buồn vui và ước mơ cao vời.','con-duong-khong-ten.mp3','con-duong-khong-ten.jpg',521259,3,7),(21,'Ly cafe không đường','2021-02-25','Một ngày mới, như thói quen, ta gặp nhau bên ly cà phê không đường.','ly-cafe-khong-duong.mp3','ly-cafe-khong-duong.jpg',43731548,3,7),(22,'Tuổi thơ bé','2021-06-07','1. Nhớ lúc bé thơ tôi hay vẫn chơi đùa,','tuoi-tho-be.mp3','tuoi-tho-be.jpg',1164,3,7),(23,'Ước muốn','2021-05-27','Lời bài hát: Ước MuốnLời đăng bởi: kenvip881. Có những tháng năm trôi thật lặng lẽ, những áng mây đen ngang che bầu trời.','uoc-muon.mp3','uoc-muon.jpg',83174,3,7),(24,'Bình yên','2021-06-27','Lời bài hát: Binh YenLời đăng bởi: kenvip88[Intro]','binh-yen.mp3','binh-yen.jpg',103726,3,7),(25,'Mùa đông ở lại','2022-03-28','Tôi đi lang thang, trong cơn mưa đầu mùa','mua-dong-o-lai.mp3','mua-dong-o-lai.jpg',1419627,3,7),(26,'Tháng 10','2020-10-22','Ngày ấy, giấc mơ dịu dàng.','thang-10.mp3','thang-10.jpg',312908,3,7),(27,'Lối rẽ','2021-05-25','Đời sinh ra ta với những chuyến đi','loi-re.mp3','loi-re.jpg',1332,3,7),(28,'Khoảng trống','2021-05-23','Xa xa phía lối tắt, một khoảng trống vô hình.','khoang-trong.mp3','khoang-trong.jpg',38109,3,7),(29,'Ký ức','2021-05-27','Một ngày dừng chân, nhìn lại về phía sau','ky-uc.mp3','ky-uc.jpg',55349,3,7),(30,'Nơi này có anh','2017-02-14','Em là ai từ đâu bước đến nơi đây dịu dàng chân phương','noi-nay-co-anh.mp3','noi-nay-co-anh.jpg',336403587,2,4),(31,'Lạc trôi','2017-01-01','Bài hát: Lạc troi','lac-troi.mp3','lac-troi.jpg',262771647,4,4),(32,'Hãy trao cho anh','2019-07-01','HÃY TRAO CHO ANH','hay-trao-cho-anh.mp3','hay-trao-cho-anh.jpg',275276801,2,4),(33,'Chạy ngay đi','2018-05-12','Bài hát: Chạy Ngay Đi','chay-ngay-di.mp3','chay-ngay-di.jpg',155634342,4,4),(34,'Âm thầm bên em','2018-08-21','Bài hát: Âm Thầm Bên Em - Sơn Tùng (M-TP)','am-tham-ben-em.mp3','am-tham-ben-em.jpg',139995430,2,4),(35,'Buông đôi tay nhau ra','2015-12-02','Bài hát: Buông Đôi Tay Nhau Ra - Sơn Tùng (M-TP)','buong-doi-tay-nhau-ra.mp3','buong-doi-tay-nhau-ra.jpg',129521090,2,4),(36,'Như ngày hôm qua','2011-12-15','Bài hát: Như Ngày Hôm Qua - Sơn Tùng (M-TP)','nhu-ngay-hom-qua.mp3','nhu-ngay-hom-qua.jpg',77234122,2,4),(37,'Cơn mưa ngang qua','2012-10-09','Bài hát: Cơn Mưa Ngang Qua - Sơn Tùng (M-TP)','con-mua-ngang-qua.mp3','con-mua-ngang-qua.jpg',82138249,2,4),(38,'Em của ngày hôm qua','2013-12-15','Bài hát: Em Của Ngày Hôm Qua - Tùng Sơn','em-cua-ngay-hom-qua.mp3','em-cua-ngay-hom-qua.jpg',159261231,2,4),(39,'Muộn rồi mà sao còn','2021-04-29','Muộn rồi mà sao còn nhìn lên trần nhà rồi quay ra lại quay vào','muon-roi-ma-sao-con.mp3','muon-roi-ma-sao-con.jpg',188278820,2,4),(71,'Lửng lơ','2019-01-04','Bài hát: Lửng Lơ - Masew, B Ray, RedT, Ý Tiên','lung-lo.mp3','lung-lo.jpg',52812840,2,8),(72,'Hoàn hảo','2023-06-05','Ver 1','hoan-hao.mp3','hoan-hao.jpg',6338002,5,8),(73,'Con trai cưng','2018-04-11','Bài hát: Con Trai Cưng','con-trai-cung.mp3','con-trai-cung.jpg',50047386,5,8),(74,'Thói quen','2023-01-13','Em là Medusa vì nhìn mắt em là anh ngây người','thoi-quen.mp3','thoi-quen.jpg',1368110,5,8),(75,'Ba da bum','2019-05-03','Ba Da Bum - B Ray','ba-da-bum.mp3','ba-da-bum.jpg',9233390,5,8),(76,'Dư tiền','2021-07-24','Trẻ tuổi, dư tiền','du-tien.mp3','du-tien.jpg',10071692,6,8),(77,'Xin đừng nhấc máy','2021-01-04','Lyrics ','xin-dung-nhac-may.mp3','xin-dung-nhac-may.jpg',31161414,5,8),(78,'Ex\'s Hate Me','2019-02-14','All my ex’s hate me,','ex\'s-hate-me.mp3','ex\'s-hate-me.jpg',165927938,5,8),(79,'Bí mật nhỏ','2023-02-25','Daddy','bi-mat-nho.mp3','bi-mat-nho.jpg',5470064,5,8),(80,'Yêu như trẻ con','2019-12-09','Bài hát: Yêu Như Trẻ Con','yeu-nhu-tre-con.mp3','yeu-nhu-tre-con.jpg',13893578,5,8),(81,'Sóng gió','2019-12-07','Hồng trần trên đôi cánh tay, họa đời em trong phút giây','song-gio.mp3','song-gio.jpg',428529316,2,6),(82,'Hồng nhan','2019-02-19','Và dòng thư tay em gửi trao anh ngày nào','hong-nhan.mp3','hong-nhan.jpg',282638548,2,6),(83,'Bạc phận','2019-04-16','J-A-C-K','bac-phan.mp3','bac-phan.jpg',404196125,2,6),(84,'Trịnh gia','2023-01-15','Bầu trời ngày nhiều mây nhiều mây','trinh-gia.mp3','trinh-gia.jpg',11532000,2,6),(85,'Là 1 thằng con trai','2020-10-03','Là 1 thằng con trai nghèo như anh','la-1-thang-con-trai.mp3','la-1-thang-con-trai.jpg',173182255,2,6),(86,'Cuối cùng thì','2022-05-11','[Ver 1]:','cuoi-cung-thi.mp3','cuoi-cung-thi.jpg',42439806,2,6),(87,'Về bên anh','2018-11-10','Đã có lúc ấm áp đôi tay, cùng nhau nhìn lên trời cao','ve-ben-anh.mp3','ve-ben-anh.jpg',46441990,2,6),(88,'Ngôi sao cô đơn','2022-07-19','Từ nay anh mất em rồi, lặng nhìn chiếc bóng đơn côi, một mình anh chỉ anh thôi','ngoi-sao-co-don.mp3','ngoi-sao-co-don.jpg',36602075,2,6),(89,'Mẹ ơi 2','2018-02-05','Ver 1:','me-oi-2.mp3','me-oi-2.jpg',45316803,2,6),(90,'Xóa tên anh đi','2023-10-08','Ngỡ như là ta vẫn còn yêu còn mơ về','xoa-ten-anh-di.mp3','xoa-ten-anh-di.jpg',6561158,2,6),(91,'Ký ức trốn đi','2021-09-29','[Lyrics]','ky-uc-tron-di.mp3','ky-uc-tron-di.jpg',5028409,5,5),(92,'Luyến','2020-05-23','Lyrics :','luyen.mp3','luyen.jpg',2245905,5,5),(93,'Bình thường','2023-01-04','Lyrics: ','binh-thuong.mp3','binh-thuong.jpg',167197,5,5),(94,'Cỏ gió và mây','2021-12-02','Lyrics:','co-gio-va-may.mp3','co-gio-va-may.jpg',3677048,5,5),(95,'Đừng là gì cả','2019-06-12','Lyric: ','dung-la-gi-ca.mp3','dung-la-gi-ca.jpg',1313330,5,5),(96,'Ngoài ô cửa có mưa','2017-09-20','☆ LYRICS :','ngoai-o-cua-co-mua.mp3','ngoai-o-cua-co-mua.jpg',9623119,5,5),(97,'Những ngày đã qua','2012-05-12','ĐK:','nhung-ngay-da-qua.mp3','nhung-ngay-da-qua.jpg',491234,5,5),(98,'KhoFi','2021-09-01','Kho Fi - NHA ft. Mad.P','khofi.mp3','khofi.jpg',582317,5,5),(99,'Tiếng gió bên tai','2018-08-11','Lyric:','tieng-gio-ben-tai.mp3','tieng-gio-ben-tai.jpg',89241,5,5),(100,'Ngoại lệ của anh','2021-12-15','Lyric: ','ngoai-le-cua-anh.mp3','ngoai-le-cua-anh.jpg',1982,5,5),(111,'Cầu hôn','2019-01-18','Hôm nay em mặc một chiếc váy rất đẹp','cau-hon.mp3','cau-hon.jpg',10049272,7,2),(112,'Tình lãng phí','2020-02-14','Yêu anh, nước mắt đã quá nhiều','tinh-lang-phi.mp3','tinh-lang-phi.jpg',871423,7,2),(113,'Rồi mình sẽ gặp nhau','2019-11-28','Nếu lỡ mai ta rời xa xin đừng ưu sầu lâu quá','roi-minh-se-gap-nhau.mp3','roi-minh-se-gap-nhau.jpg',1445140,7,2),(114,'Hãy mỉm cười','2023-05-15','Bài hát: Hãy Mỉm Cười - Văn Mai Hương','hay-mim-cuoi.mp3','hay-mim-cuoi.jpg',871425,7,2),(115,'Hương','2021-01-30','You shoot me at the first time!','huong.mp3','huong.jpg',8217268,7,2),(116,'I love music','2023-05-15','Bài hát: I Love Music - Văn Mai Hương','i-love-music.mp3','i-love-music.jpg',871427,7,2),(117,'Nghe nói anh sắp kết hôn','2019-10-24','Em từng mơ về','nghe-noi-anh-sap-ket-hon.mp3','nghe-noi-anh-sap-ket-hon.jpg',15903212,7,2),(118,'Mai đây em thương một chàng trai','2021-01-30','Đến một ngày, em chợt nhận ra,','mai-day-em-thuong-mot-chang-trai.mp3','mai-day-em-thuong-mot-chang-trai.jpg',46123,7,2),(119,'Trái tim đáng yêu','2023-05-15','1. Lần đầu gặp em là anh đã biết','trai-tim-dang-yeu.mp3','trai-tim-dang-yeu.jpg',87143,7,2),(120,'Trên cây cầu bên sông','2021-01-30','Anh taxi à!','tren-cay-cau-ben-song.mp3','tren-cay-cau-ben-song.jpg',871431,7,2);
/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
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

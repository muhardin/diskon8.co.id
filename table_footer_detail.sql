/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.5.62 : Database - db_ultimate246
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `footer_details` */

DROP TABLE IF EXISTS `footer_details`;

CREATE TABLE `footer_details` (
  `id` int(191) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `link` varchar(191) DEFAULT NULL,
  `picture` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `footer_details` */

insert  into `footer_details`(`id`,`shop_id`,`title`,`content`,`status`,`link`,`picture`,`created_at`,`updated_at`) values 
(2,2,NULL,'aaa',1,'http://tst',NULL,'2019-09-06 02:04:16','2019-09-06 02:14:52'),
(3,2,NULL,'qwer qerqwer qwer',1,'http://tstww',NULL,'2019-09-06 02:16:35','2019-09-06 02:16:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

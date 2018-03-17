-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: 192.168.1.104    Database: lancewf
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `file_name` varchar(100) DEFAULT NULL COMMENT 'the name of the file',
  `comments` text,
  `report_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attachment_FI_1` (`report_id`)
) ENGINE=MyISAM AUTO_INCREMENT=343 DEFAULT CHARSET=latin1 COMMENT='attachments to a report';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `blog_entry`
--

DROP TABLE IF EXISTS `blog_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(100) DEFAULT NULL COMMENT 'title of the blog entry',
  `message` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='attachments to a report';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `blog_entry_comments`
--

DROP TABLE IF EXISTS `blog_entry_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_entry_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `index` int(11) NOT NULL COMMENT 'order',
  `comments` text,
  `blog_entry_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_entry_comments_FI_1` (`blog_entry_id`),
  KEY `blog_entry_comments_FI_2` (`volunteer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='comments on a blog entry';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `responder` varchar(100) DEFAULT NULL,
  `call_date` datetime DEFAULT NULL,
  `call_from` varchar(100) DEFAULT NULL,
  `caller_name` varchar(100) DEFAULT NULL,
  `caller_phone_number` varchar(100) DEFAULT NULL,
  `call_location` varchar(100) DEFAULT NULL,
  `call_species` varchar(100) DEFAULT NULL,
  `when_first_seen` varchar(100) DEFAULT NULL,
  `call_comments` text,
  `call_referred_to` varchar(100) DEFAULT NULL,
  `call_condition` varchar(100) DEFAULT NULL,
  `investigator_support` varchar(100) DEFAULT NULL,
  `investigation_date` datetime DEFAULT NULL,
  `investigation_lat_lon_location` varchar(100) DEFAULT NULL,
  `investigation_physical_location` varchar(100) DEFAULT NULL,
  `investigation_species` varchar(100) DEFAULT NULL,
  `animal_not_found` tinyint(4) DEFAULT NULL,
  `investigation_condition` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `disposition` varchar(100) DEFAULT NULL,
  `seal_pickup` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `straight_length` double DEFAULT NULL,
  `contour_length` double DEFAULT NULL,
  `girth` double DEFAULT NULL,
  `investigation_comments` text,
  `is_photo_taken` tinyint(4) DEFAULT NULL,
  `volunteer_id` int(11) NOT NULL,
  `is_con_sick` tinyint(1) DEFAULT '0',
  `is_con_injured` tinyint(1) DEFAULT '0',
  `is_con_out_of_habitat` tinyint(1) DEFAULT '0',
  `is_con_deemed_releasable` tinyint(1) DEFAULT '0',
  `is_con_abandoned` tinyint(1) DEFAULT '0',
  `is_con_inaccessible` tinyint(1) DEFAULT '0',
  `is_con_location_hazard_to_animal` tinyint(1) DEFAULT '0',
  `is_con_location_hazard_to_humans` tinyint(1) DEFAULT '0',
  `is_con_unknown` tinyint(1) DEFAULT '0',
  `is_con_other` tinyint(1) DEFAULT '0',
  `is_action_left_at_site` tinyint(1) DEFAULT '0',
  `is_action_immediate_release_at_site` tinyint(1) DEFAULT '0',
  `is_action_relocated` tinyint(1) DEFAULT '0',
  `is_action_died_at_site` tinyint(1) DEFAULT '0',
  `is_action_died_during_transport` tinyint(1) DEFAULT '0',
  `is_action_euthanized_at_site` tinyint(1) DEFAULT '0',
  `is_action_euthanized_during_transport` tinyint(1) DEFAULT '0',
  `is_action_transferred_to_rehab` tinyint(1) DEFAULT '0',
  `is_action_other` tinyint(1) DEFAULT '0',
  `relocated_location` varchar(100) DEFAULT '',
  `investigation_lat_location` varchar(100) DEFAULT '',
  `investigation_lon_location` varchar(100) DEFAULT '',
  `investigation_location_accuracy` varchar(100) DEFAULT '',
  `investigation_nutritional_condition` varchar(100) DEFAULT '',
  `investigation_age_class` varchar(100) DEFAULT '',
  `live_animals_comments` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `report_FI_1` (`volunteer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=431 DEFAULT CHARSET=latin1 COMMENT='a report';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_comments`
--

DROP TABLE IF EXISTS `report_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `index` int(11) NOT NULL COMMENT 'order',
  `comments` text,
  `report_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `report_comments_FI_1` (`report_id`),
  KEY `report_comments_FI_2` (`volunteer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='comments on a report';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `report_human_interaction_section`
--

DROP TABLE IF EXISTS `report_human_interaction_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_human_interaction_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(100) DEFAULT NULL COMMENT 'The name of the section of the animal examined',
  `is_examined` tinyint(1) DEFAULT NULL COMMENT 'Was the section examined',
  `possible_hi_lesion` varchar(100) DEFAULT NULL COMMENT 'was the section lesion caused by human interaction',
  `possible_source` varchar(100) DEFAULT NULL COMMENT 'what was the souce of the lesion',
  `scavenger_damage` varchar(100) DEFAULT NULL COMMENT 'does the section of the animal have scavenger damage',
  `report_id` int(11) NOT NULL COMMENT 'foreign id to the main report',
  PRIMARY KEY (`id`),
  KEY `report_human_interaction_section_FI_1` (`report_id`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1 COMMENT='examined human interactions on the animal';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `streetAddress` varchar(100) DEFAULT NULL,
  `vehicle` varchar(100) DEFAULT NULL,
  `island` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `training` varchar(100) DEFAULT NULL,
  `comments` text,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `sunday_from_hour` int(11) DEFAULT NULL,
  `monday_from_hour` int(11) DEFAULT NULL,
  `tuesday_from_hour` int(11) DEFAULT NULL,
  `wednesday_from_hour` int(11) DEFAULT NULL,
  `thursday_from_hour` int(11) DEFAULT NULL,
  `friday_from_hour` int(11) DEFAULT NULL,
  `saturday_from_hour` int(11) DEFAULT NULL,
  `sunday_to_hour` int(11) DEFAULT NULL,
  `monday_to_hour` int(11) DEFAULT NULL,
  `tuesday_to_hour` int(11) DEFAULT NULL,
  `wednesday_to_hour` int(11) DEFAULT NULL,
  `thursday_to_hour` int(11) DEFAULT NULL,
  `friday_to_hour` int(11) DEFAULT NULL,
  `saturday_to_hour` int(11) DEFAULT NULL,
  `sunday_any_time` tinyint(4) DEFAULT NULL,
  `monday_any_time` tinyint(4) DEFAULT NULL,
  `tuesday_any_time` tinyint(4) DEFAULT NULL,
  `wednesday_any_time` tinyint(4) DEFAULT NULL,
  `thursday_any_time` tinyint(4) DEFAULT NULL,
  `friday_any_time` tinyint(4) DEFAULT NULL,
  `saturday_any_time` tinyint(4) DEFAULT NULL,
  `sunday_no_time` tinyint(4) DEFAULT NULL,
  `monday_no_time` tinyint(4) DEFAULT NULL,
  `tuesday_no_time` tinyint(4) DEFAULT NULL,
  `wednesday_no_time` tinyint(4) DEFAULT NULL,
  `thursday_no_time` tinyint(4) DEFAULT NULL,
  `friday_no_time` tinyint(4) DEFAULT NULL,
  `saturday_no_time` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=latin1 COMMENT='a volunteer';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `volunteer_hours`
--

DROP TABLE IF EXISTS `volunteer_hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `total_hours` double DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `comments` text,
  `day_of_month` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_hours_FI_1` (`volunteer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1034 DEFAULT CHARSET=latin1 COMMENT='a volunteer';
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-17  2:17:49

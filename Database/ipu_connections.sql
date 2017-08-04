-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 12:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1



SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipu_connections`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info`(
  
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin_info` (`username`, `password`) VALUES
('ipuconnections','ipuconnections');


CREATE TABLE IF NOT EXISTS `user_details`(
  
    `user_id` int(5) NOT NULL AUTO_INCREMENT,
    `user_name` varchar(50) NOT NULL,
    `user_email` varchar(50) NOT NULL,
    `user_sex` varchar(10) NOT NULL,
    `user_password` varchar(30) NOT NULL,
     PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (1,'Zaid Khan','zaidcool24@gmail.com','Male','zaidkhan');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (2,'Romit Dhamija','romitdhamija00@gmail.com','Male','romitdhamija');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (3,'Sajal Bansal','sajalbansal00@gmail.com','Male','sajalbansal');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (4,'Ayush Ghai','ayushghai00@gmail.com','Male','ayushghai');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (5,'Anshul Gupta','anshulgupta@gmail.com','Male','anshulgupta');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (6,'Piyush Gandhi','piyushgandhi00@gmail.com','Male','piyushgandhi');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (7,'Aman Manocha','amanmanocha00@gmail.com','Male','amanmanocha');
INSERT INTO `user_details`(`user_id`,`user_name`,`user_email`,`user_sex`,`user_password`)VALUES
      (8,'Sudhanshu Jha','sudhanshujha00@gmail.com','Male','sudhanshujha');



CREATE TABLE IF NOT EXISTS `user_questions`(
    `question_id` int(5) NOT NULL AUTO_INCREMENT,
    `user_id` int(5) NOT NULL,
    `question` varchar(10000) NOT NULL,
    `question_category` varchar(20) NOT NULL,
    `question_dateandtime` varchar(30) NOT NULL,
    `question_count` int(5) NOT NULL,
    PRIMARY KEY (`question_id`),
    KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (1,1,'How i can get a callback from a JSON request','JSON','0000-00-00 00:00:00 AM',6);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (2,1,'How to make my CSS3 animations compatible for safari and Mozilla Browsers','CSS3','0000-00-00 00:00:00 AM',7);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (3,1,'How to do the form validation in javascript','javascript','0000-00-00 00:00:00 AM',8);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (4,1,'How to move other elements on jquery animation by using Javascript','Javascript','0000-00-00 00:00:00 AM',25);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (5,1,'How i can get a callback from a JSON request','JSON','0000-00-00 00:00:00 AM',46);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (6,1,'How to make my CSS3 animations compatible for safari and Mozilla Browsers','CSS3','0000-00-00 00:00:00 AM',58);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (7,1,'How to setup the localhost for the Django framework','Django','0000-00-00 00:00:00 AM',20);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (8,1,'Which language is best for backend PHP or Django','Backend','0000-00-00 00:00:00 AM',16);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (9,1,'How to make the childtheme of my wordpress theme','WordPress','0000-00-00 00:00:00 AM',19);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (10,1,'How to convert a string into list of characters in python','python','0000-00-00 00:00:00 AM',21);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (11,2,'How can I make a universal construction more efficient?','Java','0000-00-00 00:00:00 AM',27);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (12,2,'How to increase performance on manipulating large arrays?','Java','0000-00-00 00:00:00 AM',29);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (13,2,'Why I cant use the value of a static variable? [duplicate]','Java','0000-00-00 00:00:00 AM',35);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (14,2,'JPA - How to call a stored procedure without providing optional parameters?','Java','0000-00-00 00:00:00 AM',36);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (15,2,'JDBC driver not found in Eclipse, but found when running standalone','Java','0000-00-00 00:00:00 AM',48);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (16,2,'how to refer to a method, defined in a package being tested from a test','Java','0000-00-00 00:00:00 AM',42);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (17,2,'Mezzanine overextends() template tag examples?','python','0000-00-00 00:00:00 AM',41);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (18,2,'Initializing a list and appending in one line','python','0000-00-00 00:00:00 AM',42);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (19,2,'keyboard shortcut to clear cell output in jupyter notebook','python','0000-00-00 00:00:00 AM',43);

INSERT INTO `user_questions`(`question_id`,`user_id`,`question`,`question_category`,`question_dateandtime`,`question_count`)VALUES
      (20,2,'Finding if member function exists in a Boost python::object','python','0000-00-00 00:00:00 AM',95);

CREATE TABLE IF NOT EXISTS `user_questions_answers`(

      `answer_id` int(10) NOT NULL AUTO_INCREMENT,
      `user_id` int(5) NOT NULL,
      `question_id` int(5) NOT NULL,
      `answer` varchar(1500) NOT NULL,
      `answer_dateandtime` varchar(30) NOT NULL,
      PRIMARY KEY (`answer_id`),
      KEY `question_id` (`question_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_questions_answers`(`answer_id`,`user_id`,`question_id`,`answer`,`answer_dateandtime`)VALUES
      (1,1,2,'For making your CSS3 animations compatible for mozilla firefox , You should place the -webkit-before the property name and -moz- for the mozilla firefox and a smiliar thing for the Safari Browsers','0000-00-00 00:00:00 AM');











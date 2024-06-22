SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP database IF EXISTS `lab7`;
create database `lab7`;
use `lab7`;

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

INSERT INTO `class` (`id`, `name`) VALUES
(1, '1A'),
(2, '1B');

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100)  NOT NULL,
  `class` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `class` (`class`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

INSERT INTO `student` (`id`, `name`, `class`, `updated_at`) VALUES
(1, 'Peter', 1, '2022-03-04 01:45:52'),
(2, 'John', 2, '2022-03-04 01:47:28');

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50)  NOT NULL,
  `password` varchar(255)  NOT NULL,
  `email` varchar(255)  NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB ;


INSERT INTO `admin` (`adminID`, `username`, `password`, `email`) VALUES
(1, 'peter', '$2y$12$bj.rxWAsc85ArrOt2uheg.ZgroltbqQkigwtf2LpiLPJ05go2NsN6', 'peter@gmail.com'),
(2, 'sam', '$2y$12$bFlAnDng6wXb8aLaxGeH5.Mi7PyLZEQzmd.L/fl.PW6JGUZIIl5Gm', 'sam@gmail.com');
COMMIT;

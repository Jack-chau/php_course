
CREATE DATABASE IF NOT EXISTS `lecture5db`  ;
USE `lecture5db`;


DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `isbn` varchar(50)  NOT NULL,
  `bookname` varchar(50)  NOT NULL,
  `author` varchar(50)  NOT NULL,
  `publishDate` date NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB ;


INSERT INTO `books` (`isbn`, `bookname`, `author`, `publishDate`) VALUES
('0692166351', 'Look Who\'s Talking Now2', 'Adelina Fritchly', '2023-11-02'),
('0996974563', 'Hipsters (Stilyagi)', 'Delly Shapero', '2023-07-17'),
('2377569447', 'Papa\'s Delicate Condition', 'Manolo Provost', '2023-12-11'),
('3049908165', 'Once Upon a Time in Queens', 'Ellery Blaydon', '2023-05-10'),
('549914334X', 'Band Wagon, The', 'Alleen Skippings', '2023-09-10'),
('6276399159', 'Elvis and Me', 'Kordula Oager', '2023-12-03'),
('6943893971', 'Pandora and the Flying Dutchman', 'Elsworth Eyckelberg', '2023-03-04'),
('7507015807', 'Soul Food', 'Kore Britee', '2023-11-29'),
('7725659196', 'Strange Magic', 'Chrotoem Cobleigh', '2024-01-01'),
('9045404508', 'Pompeii', 'Corty Crouch', '2023-12-05');


DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50)  NOT NULL,
  `password` varchar(20)  NOT NULL,
  `username` varchar(50)  NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 ;


INSERT INTO `user` (`userid`, `email`, `password`, `username`) VALUES
(1, 'test@gmail.com', '12345678', 'sam'),
(2, 'tom@gmail.com', 'P@$$word', 'Tom');
COMMIT;


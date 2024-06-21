DROP DATABASE IF EXISTS lab6;
create database lab6;
use lab6;

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(10,1) NOT NULL,
  `qty` int NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB;

INSERT INTO `product` (`productid`, `product_name`, `price`, `qty`,`product_type`, `description`) VALUES
(1, 'PS5', 3999.0, 100, "Router", "The fastest router in the world"),
(2, 'Apple', 4.5, 100, "Fruit", "An apple a day keeps the doctor away"),
(3, 'RTX4090', 1999.0, 0,"GPU" , "Powerful Gaming GPU"),
(4, 'orange', 5.0, 1000, "Fruit" , "Healthy fruit");

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50)  NOT NULL,
  `firstname` varchar(50)  NOT NULL,
  `gender` varchar(1)  NOT NULL,
  `salary` int NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` varchar(100)  NOT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 ;

INSERT INTO `staff` (`staffID`, `lastname`, `firstname`, `gender`, `salary`, `position`, `email`) VALUES
(1, 'Chan', 'Big Man', 'M', 30000, 'manager', 'BigMan@testing.com'),
(2, 'Chan', 'Sersi', 'F', 16000, 'sales person', 'Sersi@lab6.com'),
(3, 'Ng', 'Ikaris', 'M', 50, 'part time staff', 'Ikaris@lab6.com'),
(4, 'Wu', 'don', 'M', 20000, 'clerk', 'Wudon@Lab6.com'),
(5, 'Ma', 'Man ', 'M', 16000, 'sales person', 'maman@lab6.com');
COMMIT;



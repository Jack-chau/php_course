SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP database IF EXISTS `lab8`;
create database `lab8`;
use `lab8`;


DROP TABLE IF EXISTS `productSales`;

CREATE TABLE IF NOT EXISTS `productSales` (
  `productid` INT NOT NULL,
  `product_name` VARCHAR(50) NOT NULL,
  `selling_price` DECIMAL(10,2) NOT NULL,
  `cost` DECIMAL(10,2) NOT NULL,
  `inventory` INT NOT NULL,
  `sold` INT NOT NULL DEFAULT 0,
  `description` VARCHAR(200) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB;

INSERT INTO `productSales` (`productid`, `product_name`, `selling_price`, `inventory`, `cost`, `sold`, `description`) VALUES
(1, 'Apple', 5.0, 100, 3.0, 25, NULL),
(2, 'Orange', 4.5, 100, 2.5, 30, NULL),
(3, 'Banana', 3.0, 200, 1.5, 150, NULL),
(4, 'Cherry', 10.0, 200, 6.0, 60, NULL),
(5, 'Durian', 100.0, 20, 70.0, 5, NULL),
(6, 'Honeydew Melon', 50.0, 20, 35.0, 10, NULL),
(7, 'Lemon', 2.0, 50, 1.0, 20, NULL),
(8, 'Pineapple', 30.0, 23, 20.0, 15, NULL);


COMMIT;



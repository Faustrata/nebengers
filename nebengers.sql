# Host: localhost  (Version: 5.5.5-10.1.13-MariaDB)
# Date: 2016-11-29 19:33:05
# Generator: MySQL-Front 5.3  (Build 4.271)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "driver"
#

DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `iddriver` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`iddriver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "driver"
#


#
# Structure for table "passenger"
#

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE `passenger` (
  `idpassenger` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `register` date NOT NULL,
  PRIMARY KEY (`idpassenger`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "passenger"
#

INSERT INTO `passenger` VALUES (1,'Akhmad Fauzan','akhmadfauzan114@gmail.com','c4ca4238a0b923820dcc509a6f75849b','M','2312132131','file_1480419270','2016-11-29');

#
# Structure for table "transaction"
#

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `idtransc` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `iddriver` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`idtransc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "transaction"
#


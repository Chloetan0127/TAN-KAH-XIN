create DATABASE ptfastfood;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE customer 
(`cusId` int(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
`cusName` varchar(50) NOT NULL primary key,
`cusNickName` varchar(50) NOT NULL,
`cusPass` varchar(20) NOT NULL,
`cusEmail` varchar(50) NOT NULL,
`cusPhone` varchar(11) NOT NULL);

INSERT INTO `customer`
(`cusId`,`cusName`,`cusNickName`,`cusPass`,`cusEmail`,`cusPhone`)
VALUES (1,'User','User','123','User@gmail.com','0123456789');

CREATE TABLE admin
(`adminId` varchar(5) PRIMARY KEY NOT NULL,
`adminName` varchar(50) NOT NULL,
`adminPhone` varchar(11) NOT NULL,
`adminPass` varchar(20) NOT NULL,
`adminEmail` varchar(50) NOT NULL);

INSERT INTO `admin`(`adminId`, `adminName`, `adminPhone`, `adminPass`, `adminEmail`)
VALUES ('SA01','Admin','01152637851','Sadmin01','sadmin@gmail.com');
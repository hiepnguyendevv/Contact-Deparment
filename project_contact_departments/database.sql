-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.35 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project`;

-- Dumping structure for table project.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ParentDepartmentId` int DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentId` (`ParentDepartmentId`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentId`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.departments: ~5 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentId`) VALUES
	(1, 'Ngành TTNT', '296 Arrowood Parkway', 'mgrafton0@dmoz.org', '6294137397', 'http://dummyimage', NULL, NULL),
	(2, 'Khoa CT', '0157 Myrtle Lane', 'lwilley1@hp.com', '5852896214', 'http://dummyimage.com', NULL, NULL),
	(3, 'Ngành cntt', '27 Grasskamp Park', 'hcapsey2@ble.com', '3469585401', 'http://dummyimage.', NULL, 1),
	(4, 'Ngành ktpm', '379 Scott Parkway', 'jrollo3@canalblog.com', '7301504062', 'http://dummyimage', NULL, 1),
	(5, 'Ngành Kinh tế', '9 Muir Terrace', 'pgilderoy4@nasa.gov', '3338439406', 'http://dummyimage.', NULL, 2);

-- Dumping structure for table project.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeId` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobilePhone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentId` int NOT NULL,
  PRIMARY KEY (`EmployeeId`),
  KEY `DepartmentId` (`DepartmentId`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentId`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.employees: ~26 rows (approximately)
INSERT INTO `employees` (`EmployeeId`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentId`) VALUES
	(1, 'Hồ Công Thành', 'Nghệ An', 'thanh@gmail.com', '0988888888', 'Trưởng khoa CNTT', 'https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png', 3),
	(2, 'Hồ Hoàng Thanh', 'Huế', 'hoangthanh@gmail.com', '0988888997', 'Nhân viên CNTT', 'https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png', 3),
	(3, 'Hiệp Nguyễn', 'Hà Nội', 'a@gmail.com', '131431', 'Trưởng Phòng', '', 4),
	(4, 'Nguyễn Hoàng Hiệp', 'Hà Nội', 'a@gmail.com', '1234124', 'Trưởng Phòng', 'https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png', 4),
	(6, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', 'https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png', 5),
	(39, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 1),
	(40, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', NULL, 1),
	(41, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 2),
	(42, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', NULL, 2),
	(43, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 2),
	(44, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', NULL, 2),
	(45, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 2),
	(46, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', NULL, 2),
	(47, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 2),
	(48, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên công trình', NULL, 2),
	(49, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 3),
	(50, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 3),
	(51, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 3),
	(52, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 3),
	(54, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 3),
	(55, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 5),
	(56, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 5),
	(57, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 5),
	(58, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 5),
	(59, 'Nguyễn Văn Nam', 'Hải Phòng', 'nam@gmail.com', '43114234', 'Nhân viên', NULL, 5),
	(60, 'Nguyễn Tiến Dũng', 'Phú Thọ', 'dung@gmail.com', '09135567864', 'Nhân viên ', NULL, 5);

-- Dumping structure for table project.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmployeeId` int DEFAULT NULL,
  KEY `EmployeeId` (`EmployeeId`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmployeeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project.users: ~2 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `role`, `EmployeeId`) VALUES
	('thanh', '$2y$10$FPGPotXF4syJfPwNx38clui8uN/AdhZpYXYhxPoUIS/H9v.PgVpVK', 'admin', 1),
	('hiep', '$2y$10$cP7KgbY6YwJmrIBaH0k00uf2KHl5C48zRqZwaza6cM5LoHvsPEa5a', 'user', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

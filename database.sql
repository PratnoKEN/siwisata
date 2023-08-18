-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
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


-- Dumping database structure for db_pariwisata
CREATE DATABASE IF NOT EXISTS `db_pariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_pariwisata`;

-- Dumping structure for table db_pariwisata.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.migrations: ~2 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2023-08-18-012923', 'App\\Database\\Migrations\\CreateWisataTable', 'default', 'App', 1692322722, 1),
	(2, '2023-08-18-013010', 'App\\Database\\Migrations\\CreatePenginapanTable', 'default', 'App', 1692322722, 1);

-- Dumping structure for table db_pariwisata.penginapan
CREATE TABLE IF NOT EXISTS `penginapan` (
  `id_penginapan` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_penginapan` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'IDR',
  `lokasi` varchar(255) NOT NULL,
  `fasilitas` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_penginapan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.penginapan: ~2 rows (approximately)
INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `price`, `currency`, `lokasi`, `fasilitas`, `deskripsi`, `gambar`) VALUES
	(1, 'Luxury Resort', 750000.00, 'IDR', 'Tropical Paradise', 'Swimming pool, spa, restaurant', 'Experience a luxurious stay by the beach.', 'resort.jpg'),
	(2, 'Cozy Cabin', 350000.00, 'IDR', 'Mountain Retreat', 'Fireplace, kitchenette', 'Escape to a cozy cabin in the mountains.', 'cabin.jpg');

-- Dumping structure for table db_pariwisata.wisata
CREATE TABLE IF NOT EXISTS `wisata` (
  `id_wisata` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_wisata` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'IDR',
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.wisata: ~4 rows (approximately)
INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `price`, `currency`, `deskripsi`, `gambar`) VALUES
	(1, 'Beautiful Beach', 'Coastal Paradise', 250000.00, 'IDR', 'Enjoy the sandy beaches and crystal clear waters.', 'kenjeran.jpg'),
	(2, '', '', 0.00, 'IDR', '', ''),
	(5, 'asa', 'asda', 123.00, 'IDR', 'asd', 'kenjeran.jpg'),
	(6, 'kenjeran', 'surabaya', 15000.00, 'IDR', 'none', 'kenjeran.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

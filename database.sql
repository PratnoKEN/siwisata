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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.migrations: ~3 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2023-08-18-012923', 'App\\Database\\Migrations\\CreateWisataTable', 'default', 'App', 1692322722, 1),
	(2, '2023-08-18-013010', 'App\\Database\\Migrations\\CreatePenginapanTable', 'default', 'App', 1692322722, 1),
	(3, '2023-08-19-051010', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1692421840, 2),
	(4, '2023-08-20-003451', 'App\\Database\\Migrations\\CreateTransportasiTable', 'default', 'App', 1692491707, 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.penginapan: ~2 rows (approximately)
INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `price`, `currency`, `lokasi`, `fasilitas`, `deskripsi`, `gambar`) VALUES
	(1, 'Luxury Resort', 750000.00, 'IDR', 'Tropical Paradise', 'Swimming pool, spa, restaurant', 'Experience a luxurious stay by the beach.', 'resort.jpg'),
	(2, 'Cozy Cabin', 350000.00, 'IDR', 'Mountain Retreat', 'Fireplace, kitchenette', 'Escape to a cozy cabin in the mountains.', 'cabin.jpg'),
	(4, '', 0.00, 'IDR', '', '', '', '1692498186_b7d91edf2f544b081e83.jpg');

-- Dumping structure for table db_pariwisata.transportasi
CREATE TABLE IF NOT EXISTS `transportasi` (
  `id_transportasi` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bis` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `tujuan_awal` varchar(255) NOT NULL,
  `tujuan_akhir` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transportasi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.transportasi: ~5 rows (approximately)
INSERT INTO `transportasi` (`id_transportasi`, `nama_bis`, `price`, `tujuan_awal`, `tujuan_akhir`, `gambar`, `fasilitas`, `created_at`, `updated_at`) VALUES
	(1, 'Bis Eksekutif', 100000, 'Surabaya', 'Malang', 'bis_eksekutif.jpg', 'AC, Wi-Fi, Tempat Duduk Nyaman', NULL, NULL),
	(2, 'Bis Reguler', 75000, 'Jakarta', 'Bandung', 'bis_reguler.jpg', 'AC, Tempat Duduk Standard', NULL, NULL),
	(3, 'Bis Pariwisata', 120000, 'Bali', 'Yogyakarta', 'bis_pariwisata.jpg', 'AC, Wi-Fi, Tempat Duduk Nyaman, Toilet', NULL, NULL),
	(5, 'sumber kencono', 100000, 'surabaya', 'bagdad', '1692497509_35c72ed7694786fdd131.jpg', 'ac, free wifi, snack', '2023-08-20 02:11:49', '2023-08-20 02:11:49');

-- Dumping structure for table db_pariwisata.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('user','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`) VALUES
	(1, 'adminuser', '$2y$10$GLGQA2ZLV8QbbmW4J2eQ0ez9fIsJ0KVnrSimIDXNlox9JTQeYaZEu', 'admin@example.com', 'admin'),
	(2, 'regularuser', '$2y$10$M4ixFf9iFZ6TGSSMFfstUeO3yMjA4Hdqs3lzd9/oDTnn6FBVHoyAm', 'user@example.com', 'user');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table db_pariwisata.wisata: ~5 rows (approximately)
INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `price`, `currency`, `deskripsi`, `gambar`) VALUES
	(1, 'Beautiful Beach', 'Coastal Paradise', 250000.00, 'IDR', 'Enjoy the sandy beaches and crystal clear waters.', 'kenjeran.jpg'),
	(5, 'asa', 'asda', 123.00, 'IDR', 'asd', 'kenjeran.jpg'),
	(6, 'kenjeran', 'surabaya', 15000.00, 'IDR', 'none', 'kenjeran.jpg'),
	(12, '', '', 0.00, 'IDR', '', '1692425904_c1ae0f744feab991fdff.png'),
	(13, 'test', 'test', 100000.00, 'IDR', 'test', '1692491265_2aa6b36421aa0aa4de2a.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

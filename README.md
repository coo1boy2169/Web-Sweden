-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                9.0.1 - MySQL Community Server - GPL
-- Server OS:                    Linux
-- HeidiSQL Versie:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumpen data van tabel m6skill.klanten: ~0 rows (ongeveer)
INSERT INTO `klanten` (`id`, `naam`, `gebruikersnaam`, `wachtwoord`, `studentencode`, `emailadres`) VALUES
	(1, 'Jay G', 'Jay', 'testwachtwoord2', 36629, '36629@ma-web.nl');

-- Dumpen data van tabel m6skill.papierformaten: ~3 rows (ongeveer)
INSERT INTO `papierformaten` (`id`, `papierformaat`) VALUES
	(1, 'A4'),
	(2, 'SRA4'),
	(3, 'A3'),
	(4, 'SRA3');

-- Dumpen data van tabel m6skill.statussen: ~4 rows (ongeveer)
INSERT INTO `statussen` (`status_id`, `status_label`) VALUES
	(1, 'Vrij'),
	(2, 'In behandeling'),
	(3, 'Goedgekeurd'),
	(4, 'Afgewezen');

-- Dumpen data van tabel m6skill.Tijdsloten: ~1 rows (ongeveer)
INSERT INTO `Tijdsloten` (`id`, `klanten_id`, `dag`, `tijdslotenid`, `papierformatenid`, `extrainfo`, `adminbewerkt`, `statusid`) VALUES
	(14, 2, 'monday', '5', 2, '', 1, 2),
	(15, 2, 'monday', '4', 1, '', 1, 2);

-- Dumpen data van tabel m6skill.tijdstippen: ~11 rows (ongeveer)
INSERT INTO `tijdstippen` (`tijdstippenid`, `tijdstip`, `dag`, `status`) VALUES
	(1, '08:30:00', 'monday', 1),
	(2, '08:45:00', 'monday', 1),
	(3, '09:00:00', 'monday', 1),
	(4, '09:15:00', 'monday', 1),
	(5, '09:30:00', 'monday', 1),
	(6, '09:45:00', 'monday', 1),
	(7, '10:00:00', 'monday', 1),
	(8, '10:15:00', 'monday', 1),
	(9, '08:30:00', 'tuesday', 1),
	(10, '09:00:00', 'friday', 1),
	(11, '10:00:00', 'tuesday', 1);

-- Dumpen data van tabel m6skill.users: ~2 rows (ongeveer)
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(4, 'jay', '$2y$10$o3U9M4ObNeKbQ2qgJOgzmencA9PIjTykxtyzd2DI7JliqCyUPFvoG', 'student'),
	(5, 'milan', '$2y$10$So3uMKC99tqGIj7fC7keTeizM2.ltDvm9ZMlXLRWtmm/r3wqry2BS', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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

-- Dumping data for table laravel_assessment.failed_jobs: ~0 rows (approximately)

-- Dumping data for table laravel_assessment.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_11_21_075558_add_gender_birthday_status_to_users_table', 2);

-- Dumping data for table laravel_assessment.password_resets: ~0 rows (approximately)

-- Dumping data for table laravel_assessment.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table laravel_assessment.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `birthday`, `status_active`) VALUES
	(1, 'user test', 'test@test.com', NULL, '$2y$10$2DjP7Zz82yINjKrf/wkyhOp8rxTisBrZAnFP8LunfPKcTW7cmCj6a', NULL, '2024-11-21 01:29:36', '2024-11-22 06:55:11', 'Female', '2001-02-27', 1),
	(2, 'user two', 'test2@test.com', NULL, '$2y$10$WiI6BBDeeiMUr5lRGSNgz.hC3G/rJFCxySGiBvguNKOXROavLG2va', NULL, '2024-11-21 01:30:49', '2024-11-21 12:16:39', 'Male', '2001-03-10', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

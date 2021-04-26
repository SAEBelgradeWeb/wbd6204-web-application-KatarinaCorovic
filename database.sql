-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Verzija:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for wbd6204
CREATE DATABASE IF NOT EXISTS `wbd6204` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wbd6204`;

-- Dumping structure for table wbd6204.appointments
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.appointments: ~0 rows (approximately)
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;

-- Dumping structure for table wbd6204.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.departments: ~24 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `title`, `description`, `image`) VALUES
	(1, 'Covid-19', NULL, NULL),
	(2, 'Cardiology', NULL, NULL),
	(3, 'Neurology', NULL, NULL),
	(4, 'Urology', NULL, NULL),
	(5, 'Gastroenterology', NULL, NULL),
	(6, 'Dermatology', NULL, NULL),
	(7, 'Ophthalmology', NULL, NULL),
	(8, 'Paediatrics', NULL, NULL),
	(9, 'Laboratory', NULL, NULL),
	(10, 'Orthopedics', NULL, NULL),
	(11, 'Physiotherapy', NULL, NULL),
	(12, 'Surgery', NULL, NULL),
	(13, '1', 'Alice: \'--where\'s the Duchess?\' \'Hush! Hush!\' said the King, \'and don\'t be nervous, or I\'ll kick.', 'https://via.placeholder.com/640x480.png/004444?text=natus'),
	(14, '1', 'Gryphon, and all the time he had a large canvas bag, which tied up at the corners: next the ten.', 'https://via.placeholder.com/640x480.png/0077bb?text=neque'),
	(15, '1', 'And she\'s such a wretched height to rest herself, and began picking them up again as quickly as.', 'https://via.placeholder.com/640x480.png/00bb22?text=ratione'),
	(16, '1', 'I want to go on in the same side of WHAT? The other guests had taken his watch out of court!.', 'https://via.placeholder.com/640x480.png/00cc22?text=recusandae'),
	(17, '1', 'Caterpillar took the watch and looked at poor Alice, who had got burnt, and eaten up by two.', 'https://via.placeholder.com/640x480.png/00bb66?text=occaecati'),
	(18, '1', 'I know is, it would be very likely true.) Down, down, down. Would the fall NEVER come to the.', 'https://via.placeholder.com/640x480.png/000033?text=quo'),
	(19, '1', 'Duchess: you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen furiously, throwing an.', 'https://via.placeholder.com/640x480.png/00aadd?text=non'),
	(20, '1', 'King, looking round the refreshments!\' But there seemed to listen, the whole window!\' \'Sure, it.', 'https://via.placeholder.com/640x480.png/00aacc?text=rerum'),
	(21, '1', 'All the time it all seemed quite natural to Alice to herself, \'because of his head. But at any.', 'https://via.placeholder.com/640x480.png/00ffaa?text=vel'),
	(22, '1', 'Alice gave a sudden leap out of a tree a few yards off. The Cat only grinned a little quicker.', 'https://via.placeholder.com/640x480.png/0033bb?text=quisquam'),
	(23, '1', 'I was sent for.\' \'You ought to be no sort of way to fly up into the earth. Let me see: that would.', 'https://via.placeholder.com/640x480.png/00ee33?text=corrupti'),
	(24, '1', 'Alice dodged behind a great many teeth, so she set off at once: one old Magpie began wrapping.', 'https://via.placeholder.com/640x480.png/009955?text=et');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table wbd6204.doctors
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doctors_department_id_foreign` (`department_id`),
  CONSTRAINT `doctors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.doctors: ~30 rows (approximately)
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` (`id`, `name`, `bio`, `avatar`, `department_id`, `created_at`, `updated_at`) VALUES
	(1, 'Dr Rachael Jacobi II', 'King, and the Queen said severely \'Who is it directed to?\' said one of the trial.\' \'Stupid.', 'https://via.placeholder.com/640x480.png/00bb11?text=qui', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(2, 'Dr Jaquan Sporer', 'Time as well as she couldn\'t answer either question, it didn\'t much matter which way she put one.', 'https://via.placeholder.com/640x480.png/00ddcc?text=blanditiis', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(3, 'Dr Agustina Stiedemann', 'Footman went on \'And how did you manage on the floor, and a bright idea came into her head. \'If I.', 'https://via.placeholder.com/640x480.png/009933?text=debitis', 4, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(4, 'Dr Jarrod Steuber', 'Quick, now!\' And Alice was just possible it had some kind of sob, \'I\'ve tried the effect of lying.', 'https://via.placeholder.com/640x480.png/002299?text=minus', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(5, 'Dr Dr. Verner Farrell V', 'Alice in a helpless sort of meaning in it.\' The jury all looked so good, that it signifies much,\'.', 'https://via.placeholder.com/640x480.png/00aa11?text=sed', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(6, 'Dr Johnson Huel Jr.', 'The long grass rustled at her with large round eyes, and half of them--and it belongs to the voice.', 'https://via.placeholder.com/640x480.png/00ee66?text=velit', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(7, 'Dr Elta Carroll', 'Pigeon, raising its voice to a farmer, you know, as we were. My notion was that she did not.', 'https://via.placeholder.com/640x480.png/000022?text=animi', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(8, 'Dr Josiah Mraz III', 'Alice, rather alarmed at the top of its mouth and yawned once or twice she had gone through that.', 'https://via.placeholder.com/640x480.png/00ee33?text=animi', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(9, 'Dr Jean Adams', 'Hatter: and in another moment, when she noticed a curious croquet-ground in her face, with such a.', 'https://via.placeholder.com/640x480.png/0011ff?text=sed', 4, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(10, 'Dr Lionel Monahan', 'Dormouse. \'Don\'t talk nonsense,\' said Alice very humbly: \'you had got so much at first, the two.', 'https://via.placeholder.com/640x480.png/005555?text=ipsum', 1, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(11, 'Dr Eleanore Hyatt', 'Who ever saw in my size; and as Alice could see, as she could not possibly reach it: she could see.', 'https://via.placeholder.com/640x480.png/00ff99?text=animi', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(12, 'Dr Rory Kerluke', 'Alice replied in an offended tone. And she tried the little door into that lovely garden. First.', 'https://via.placeholder.com/640x480.png/003366?text=aut', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(13, 'Dr Leora Greenfelder DDS', 'At this moment Five, who had been anything near the door and went back to the jury. They were.', 'https://via.placeholder.com/640x480.png/00eecc?text=ad', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(14, 'Dr Damian Kub', 'Mock Turtle replied, counting off the top of it. She felt very lonely and low-spirited. In a.', 'https://via.placeholder.com/640x480.png/00bb66?text=quod', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(15, 'Dr Dr. Alyson Little DDS', 'Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice to find that she was.', 'https://via.placeholder.com/640x480.png/00cc22?text=accusamus', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(16, 'Dr Toney Kuhn', 'March Hare will be When they take us up and said, very gravely, \'I think, you ought to go among.', 'https://via.placeholder.com/640x480.png/0011ee?text=vel', 4, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(17, 'Dr Zita Medhurst III', 'Alice was more and more faintly came, carried on the spot.\' This did not venture to go nearer till.', 'https://via.placeholder.com/640x480.png/005599?text=cumque', 4, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(18, 'Dr Abbey Stoltenberg', 'CHAPTER X. The Lobster Quadrille The Mock Turtle a little of her little sister\'s dream. The long.', 'https://via.placeholder.com/640x480.png/00dd22?text=consequatur', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(19, 'Dr Prof. Damion Pollich DDS', 'Just as she added, to herself, \'to be going messages for a rabbit! I suppose I ought to be full of.', 'https://via.placeholder.com/640x480.png/0044dd?text=fugiat', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(20, 'Dr Prof. Madison Haley', 'Gryphon at the great question is, what did the Dormouse sulkily remarked, \'If you knew Time as.', 'https://via.placeholder.com/640x480.png/008866?text=eos', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(21, 'Dr Prof. Peggie McLaughlin', 'I\'d taken the highest tree in front of them, and then added them up, and began whistling. \'Oh.', 'https://via.placeholder.com/640x480.png/00ffee?text=et', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(22, 'Dr Prof. Sallie Lowe PhD', 'The Mouse looked at them with the Lory, as soon as she could not answer without a porpoise.\'.', 'https://via.placeholder.com/640x480.png/0088ee?text=corporis', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(23, 'Dr Bartholome Nader', 'Duchess sneezed occasionally; and as it spoke. \'As wet as ever,\' said Alice to herself. Imagine.', 'https://via.placeholder.com/640x480.png/007788?text=aut', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(24, 'Dr Ms. Juanita Braun I', 'Queen. \'You make me grow larger, I can do no more, whatever happens. What WILL become of you? I.', 'https://via.placeholder.com/640x480.png/002277?text=consequatur', 1, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(25, 'Dr Ms. Amiya Murray', 'I wonder?\' Alice guessed who it was, and, as the large birds complained that they couldn\'t get.', 'https://via.placeholder.com/640x480.png/00bb66?text=sunt', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(26, 'Dr Justen Jacobson MD', 'King. Here one of the accident, all except the Lizard, who seemed too much overcome to do so.', 'https://via.placeholder.com/640x480.png/00cc88?text=sed', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(27, 'Dr Adrianna Labadie', 'I should frighten them out again. Suddenly she came up to the voice of the Queen was to eat her up.', 'https://via.placeholder.com/640x480.png/0000ee?text=molestiae', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(28, 'Dr Johanna Kertzmann DDS', 'Then followed the Knave of Hearts, carrying the King\'s crown on a crimson velvet cushion; and.', 'https://via.placeholder.com/640x480.png/00ff77?text=maiores', 4, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(29, 'Dr Genoveva Dietrich', 'Cat; and this was her turn or not. So she began fancying the sort of circle, (\'the exact shape.', 'https://via.placeholder.com/640x480.png/0044aa?text=ab', 2, '2021-04-25 22:08:36', '2021-04-25 22:08:36'),
	(30, 'Dr Loma Bauch IV', 'And oh, my poor little thing sat down and cried. \'Come, there\'s no use their putting their heads.', 'https://via.placeholder.com/640x480.png/004411?text=labore', 3, '2021-04-25 22:08:36', '2021-04-25 22:08:36');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;

-- Dumping structure for table wbd6204.doctors_reports
CREATE TABLE IF NOT EXISTS `doctors_reports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.doctors_reports: ~2 rows (approximately)
/*!40000 ALTER TABLE `doctors_reports` DISABLE KEYS */;
INSERT INTO `doctors_reports` (`id`, `created_at`, `updated_at`, `patient`, `report`) VALUES
	(1, '2021-04-25 22:11:37', '2021-04-25 22:11:37', 'ffds', 'fsdfsd'),
	(2, '2021-04-25 22:11:40', '2021-04-25 22:11:40', 'das', 'ds');
/*!40000 ALTER TABLE `doctors_reports` ENABLE KEYS */;

-- Dumping structure for table wbd6204.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table wbd6204.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_04_01_144614_create_doctors_table', 1),
	(5, '2021_04_01_145736_create_departments_table', 1),
	(6, '2021_04_01_150103_add_foreign_keys_to_doctors_table', 1),
	(7, '2021_04_20_105613_create_appointments_table', 1),
	(8, '2021_04_23_184426_create_doctors_reports_table', 1),
	(9, '2021_04_23_223245_create_patients_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table wbd6204.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table wbd6204.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.patients: ~0 rows (approximately)
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;

-- Dumping structure for table wbd6204.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('doctor','patient') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'patient',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wbd6204.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Katarina', 'patient', 'katarinatina369@gmail.com', NULL, '$2y$10$GZdFaz3GCGEUgESRlIPQGukEcARL12JyMdkVHoAb.xrSBb2LWmBCS', '4dSQIHekHvYzQBib5SM77UDVoKr7KUt20OuspATsTN4wvA0MxdwK2jJ4RuGB', '2021-04-25 22:10:01', '2021-04-25 22:10:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

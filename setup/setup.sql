CREATE DATABASE `featured` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `featured`;

CREATE TABLE IF NOT EXISTS `userdata` (
	`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`state` char(2) COLLATE utf8_unicode_ci NOT NULL,
	`img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	UNIQUE KEY `email` (`email`)
) CHARSET=utf8 COLLATE=utf8_unicode_ci;
# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.33)
# Database: dvlp
# Generation Time: 2016-09-29 14:29:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table backend_access_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_access_log`;

CREATE TABLE `backend_access_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `backend_access_log` WRITE;
/*!40000 ALTER TABLE `backend_access_log` DISABLE KEYS */;

INSERT INTO `backend_access_log` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`)
VALUES
	(1,1,'192.168.56.1','2016-09-28 19:52:58','2016-09-28 19:52:58'),
	(2,1,'192.168.56.1','2016-09-29 14:03:26','2016-09-29 14:03:26');

/*!40000 ALTER TABLE `backend_access_log` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table backend_user_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_user_groups`;

CREATE TABLE `backend_user_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_unique` (`name`),
  KEY `code_index` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `backend_user_groups` WRITE;
/*!40000 ALTER TABLE `backend_user_groups` DISABLE KEYS */;

INSERT INTO `backend_user_groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`)
VALUES
	(1,'Owners',NULL,'2016-09-28 19:52:15','2016-09-28 19:52:15','owners','Default group for website owners.',0);

/*!40000 ALTER TABLE `backend_user_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table backend_user_preferences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_user_preferences`;

CREATE TABLE `backend_user_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `namespace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table backend_user_throttle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_user_throttle`;

CREATE TABLE `backend_user_throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `backend_user_throttle_user_id_index` (`user_id`),
  KEY `backend_user_throttle_ip_address_index` (`ip_address`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `backend_user_throttle` WRITE;
/*!40000 ALTER TABLE `backend_user_throttle` DISABLE KEYS */;

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`)
VALUES
	(1,1,'192.168.56.1',0,NULL,0,NULL,0,NULL);

/*!40000 ALTER TABLE `backend_user_throttle` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table backend_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_users`;

CREATE TABLE `backend_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_unique` (`login`),
  UNIQUE KEY `email_unique` (`email`),
  KEY `act_code_index` (`activation_code`),
  KEY `reset_code_index` (`reset_password_code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `backend_users` WRITE;
/*!40000 ALTER TABLE `backend_users` DISABLE KEYS */;

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `activated_at`, `last_login`, `created_at`, `updated_at`, `is_superuser`)
VALUES
	(1,'Admin','Person','admin','mayoalexandertd@outlook.com','$2y$10$uSfwlmC32jXMVTGPP4jyq.iupN.ARiMp7mn0ZdSWyexKkvoY5tw9y',NULL,'$2y$10$tDyIyAHXvY55GdObymfWY.vqj34BobUsJ2wEKZyaPMhSUN2d9HL/u',NULL,'',1,NULL,'2016-09-29 14:03:25','2016-09-28 19:52:15','2016-09-29 14:03:25',1);

/*!40000 ALTER TABLE `backend_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table backend_users_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `backend_users_groups`;

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `user_group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `backend_users_groups` WRITE;
/*!40000 ALTER TABLE `backend_users_groups` DISABLE KEYS */;

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`)
VALUES
	(1,1);

/*!40000 ALTER TABLE `backend_users_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cache
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table cms_theme_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_theme_data`;

CREATE TABLE `cms_theme_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cms_theme_data_theme_index` (`theme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table deferred_bindings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deferred_bindings`;

CREATE TABLE `deferred_bindings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `deferred_bindings_master_type_index` (`master_type`),
  KEY `deferred_bindings_master_field_index` (`master_field`),
  KEY `deferred_bindings_slave_type_index` (`slave_type`),
  KEY `deferred_bindings_slave_id_index` (`slave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2013_10_01_000001_Db_Deferred_Bindings',1),
	('2013_10_01_000002_Db_System_Files',1),
	('2013_10_01_000003_Db_System_Plugin_Versions',1),
	('2013_10_01_000004_Db_System_Plugin_History',1),
	('2013_10_01_000005_Db_System_Settings',1),
	('2013_10_01_000006_Db_System_Parameters',1),
	('2013_10_01_000007_Db_System_Add_Disabled_Flag',1),
	('2013_10_01_000008_Db_System_Mail_Templates',1),
	('2013_10_01_000009_Db_System_Mail_Layouts',1),
	('2014_10_01_000010_Db_Jobs',1),
	('2014_10_01_000011_Db_System_Event_Logs',1),
	('2014_10_01_000012_Db_System_Request_Logs',1),
	('2014_10_01_000013_Db_System_Sessions',1),
	('2015_10_01_000014_Db_System_Mail_Layout_Rename',1),
	('2015_10_01_000015_Db_System_Add_Frozen_Flag',1),
	('2015_10_01_000016_Db_Cache',1),
	('2015_10_01_000017_Db_System_Revisions',1),
	('2015_10_01_000018_Db_FailedJobs',1),
	('2016_10_01_000019_Db_System_Plugin_History_Detail_Text',1),
	('2016_10_01_000020_Db_System_Timestamp_Fix',1),
	('2013_10_01_000001_Db_Backend_Users',2),
	('2013_10_01_000002_Db_Backend_User_Groups',2),
	('2013_10_01_000003_Db_Backend_Users_Groups',2),
	('2013_10_01_000004_Db_Backend_User_Throttle',2),
	('2014_01_04_000005_Db_Backend_User_Preferences',2),
	('2014_10_01_000006_Db_Backend_Access_Log',2),
	('2014_10_01_000007_Db_Backend_Add_Description_Field',2),
	('2015_10_01_000008_Db_Backend_Add_Superuser_Flag',2),
	('2016_10_01_000009_Db_Backend_Timestamp_Fix',2),
	('2014_10_01_000001_Db_Cms_Theme_Data',3),
	('2016_10_01_000002_Db_Cms_Timestamp_Fix',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci,
  `last_activity` int(11) DEFAULT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table system_event_logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_event_logs`;

CREATE TABLE `system_event_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `details` mediumtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_event_logs_level_index` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table system_files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_files`;

CREATE TABLE `system_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `disk_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_files_field_index` (`field`),
  KEY `system_files_attachment_id_index` (`attachment_id`),
  KEY `system_files_attachment_type_index` (`attachment_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table system_mail_layouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_mail_layouts`;

CREATE TABLE `system_mail_layouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8_unicode_ci,
  `content_text` text COLLATE utf8_unicode_ci,
  `content_css` text COLLATE utf8_unicode_ci,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `system_mail_layouts` WRITE;
/*!40000 ALTER TABLE `system_mail_layouts` DISABLE KEYS */;

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `created_at`, `updated_at`)
VALUES
	(1,'Default','default','<html>\n    <head>\n        <style type=\"text/css\" media=\"screen\">\n            {{ css|raw }}\n        </style>\n    </head>\n    <body>\n        {{ content|raw }}\n    </body>\n</html>','{{ content|raw }}','a, a:hover {\n    text-decoration: none;\n    color: #0862A2;\n    font-weight: bold;\n}\n\ntd, tr, th, table {\n    padding: 0px;\n    margin: 0px;\n}\n\np {\n    margin: 10px 0;\n}',1,'2016-09-28 19:52:15','2016-09-28 19:52:15'),
	(2,'System','system','<html>\n    <head>\n        <style type=\"text/css\" media=\"screen\">\n            {{ css|raw }}\n        </style>\n    </head>\n    <body>\n        {{ content|raw }}\n        <hr />\n        <p>This is an automatic message. Please do not reply to it.</p>\n    </body>\n</html>','{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.','a, a:hover {\n    text-decoration: none;\n    color: #0862A2;\n    font-weight: bold;\n}\n\ntd, tr, th, table {\n    padding: 0px;\n    margin: 0px;\n}\n\np {\n    margin: 10px 0;\n}',1,'2016-09-28 19:52:15','2016-09-28 19:52:15');

/*!40000 ALTER TABLE `system_mail_layouts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_mail_templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_mail_templates`;

CREATE TABLE `system_mail_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci,
  `content_text` text COLLATE utf8_unicode_ci,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_mail_templates_layout_id_index` (`layout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table system_parameters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_parameters`;

CREATE TABLE `system_parameters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `item_index` (`namespace`,`group`,`item`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `system_parameters` WRITE;
/*!40000 ALTER TABLE `system_parameters` DISABLE KEYS */;

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`)
VALUES
	(1,'system','update','count','0'),
	(2,'system','core','hash','\"ce29cdb155c0bf15db178efc1a1c7095\"'),
	(3,'system','core','build','\"365\"'),
	(4,'system','update','retry','1475178780');

/*!40000 ALTER TABLE `system_parameters` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_plugin_history
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_plugin_history`;

CREATE TABLE `system_plugin_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_plugin_history_code_index` (`code`),
  KEY `system_plugin_history_type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `system_plugin_history` WRITE;
/*!40000 ALTER TABLE `system_plugin_history` DISABLE KEYS */;

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`)
VALUES
	(1,'October.Demo','comment','1.0.1','First version of Demo','2016-09-28 19:52:15');

/*!40000 ALTER TABLE `system_plugin_history` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_plugin_versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_plugin_versions`;

CREATE TABLE `system_plugin_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_frozen` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `system_plugin_versions_code_index` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `system_plugin_versions` WRITE;
/*!40000 ALTER TABLE `system_plugin_versions` DISABLE KEYS */;

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`)
VALUES
	(1,'October.Demo','1.0.1','2016-09-28 19:52:15',0,0);

/*!40000 ALTER TABLE `system_plugin_versions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_request_logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_request_logs`;

CREATE TABLE `system_request_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8_unicode_ci,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `system_request_logs` WRITE;
/*!40000 ALTER TABLE `system_request_logs` DISABLE KEYS */;

INSERT INTO `system_request_logs` (`id`, `status_code`, `url`, `referer`, `count`, `created_at`, `updated_at`)
VALUES
	(1,404,'http://umbrella.dev/install_files/images/leaves.png','[\"http:\\/\\/umbrella.dev\\/install_files\\/css\\/vendor.css\"]',1,'2016-09-28 19:52:17','2016-09-28 19:52:17'),
	(2,404,'http://umbrella.dev/install.php','[\"http:\\/\\/umbrella.dev\\/\"]',1,'2016-09-28 20:16:52','2016-09-28 20:16:52'),
	(3,404,'http://umbrella.dev/static/img/sprites/preloader1.png','[\"http:\\/\\/umbrella.dev\\/templatespowerfulconnections\"]',4,'2016-09-28 20:33:57','2016-09-28 20:35:21'),
	(4,404,'http://umbrella.dev/static/img/sprites/preloader0.png','[\"http:\\/\\/umbrella.dev\\/templatespowerfulconnections\"]',4,'2016-09-28 20:33:57','2016-09-28 20:35:21'),
	(5,404,'http://umbrella.dev/actions/api/home','[\"http:\\/\\/umbrella.dev\\/templatespowerfulconnections\"]',4,'2016-09-28 20:33:57','2016-09-28 20:35:21'),
	(6,404,'http://umbrella.dev/actions/api/stories','[\"http:\\/\\/umbrella.dev\\/templatespowerfulconnections\"]',4,'2016-09-28 20:33:57','2016-09-28 20:35:21'),
	(7,404,'http://umbrella.dev/templatespowerfulconnections','[\"http:\\/\\/umbrella.dev\\/backend\\/cms\"]',2,'2016-09-28 20:34:30','2016-09-28 20:34:55'),
	(8,404,'http://umbrella.dev/templates',NULL,1,'2016-09-28 20:34:47','2016-09-28 20:34:47'),
	(9,404,'http://umbrella.dev/img/25.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:35','2016-09-28 20:49:08'),
	(10,404,'http://umbrella.dev/img/27.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:35','2016-09-28 20:49:08'),
	(11,404,'http://umbrella.dev/img/sponsor/PageCloud_logo.svg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:35','2016-09-28 21:20:20'),
	(12,404,'http://umbrella.dev/img/related/Hover.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:36','2016-09-28 21:20:21'),
	(13,404,'http://umbrella.dev/img/24.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:36','2016-09-28 20:49:09'),
	(14,404,'http://umbrella.dev/img/28.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:36','2016-09-28 20:49:08'),
	(15,404,'http://umbrella.dev/img/26.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:36','2016-09-28 20:49:08'),
	(16,404,'http://umbrella.dev/img/related/Samsung.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:36','2016-09-28 21:20:21'),
	(17,404,'http://umbrella.dev/img/18.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:36','2016-09-28 20:49:09'),
	(18,404,'http://umbrella.dev/img/20.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:36','2016-09-28 20:49:09'),
	(19,404,'http://umbrella.dev/img/related/PhotographyWebsite.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:36','2016-09-28 21:20:20'),
	(20,404,'http://umbrella.dev/img/23.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:37','2016-09-28 20:49:09'),
	(21,404,'http://umbrella.dev/img/related/EffectGrid.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:37','2016-09-28 21:20:21'),
	(22,404,'http://umbrella.dev/img/related/GridItemAnimation.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',11,'2016-09-28 20:47:37','2016-09-28 21:20:20'),
	(23,404,'http://umbrella.dev/img/19.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:37','2016-09-28 20:49:10'),
	(24,404,'http://umbrella.dev/img/22.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:37','2016-09-28 20:49:10'),
	(25,404,'http://umbrella.dev/img/21.jpg','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 20:47:37','2016-09-28 20:49:10'),
	(26,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097006086','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 21:10:06','2016-09-28 21:10:30'),
	(27,404,'http://umbrella.dev/layouts/system/VIChecker.aspx?tstamp=636068963531828061','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',24,'2016-09-28 21:10:36','2016-09-29 13:51:39'),
	(28,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097145871','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',1,'2016-09-28 21:12:26','2016-09-28 21:12:26'),
	(29,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097238819','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 21:13:58','2016-09-28 21:15:03'),
	(30,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097313282','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',1,'2016-09-28 21:15:13','2016-09-28 21:15:13'),
	(31,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097492885','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',1,'2016-09-28 21:18:13','2016-09-28 21:18:13'),
	(32,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097505568','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',1,'2016-09-28 21:18:25','2016-09-28 21:18:25'),
	(33,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097581126','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',2,'2016-09-28 21:19:41','2016-09-28 21:19:51'),
	(34,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475097620209','[\"http:\\/\\/umbrella.dev\\/benchmarkone\"]',1,'2016-09-28 21:20:21','2016-09-28 21:20:21'),
	(35,404,'http://umbrella.dev/themes/demo/assets/templates/favicon.ico','[\"http:\\/\\/umbrella.dev\\/themes\\/demo\\/assets\\/templates\\/SelectInspiration\\/index8.html\"]',1,'2016-09-28 21:25:04','2016-09-28 21:25:04'),
	(36,404,'http://umbrella.dev/benchmark/js/classie.js','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',2,'2016-09-28 21:27:46','2016-09-28 21:40:12'),
	(37,404,'http://umbrella.dev/benchmark/js/selectFx.js','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',3,'2016-09-28 21:27:46','2016-09-28 21:40:13'),
	(38,404,'http://umbrella.dev/benchmark/img/1.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',27,'2016-09-28 21:28:19','2016-09-29 13:52:49'),
	(39,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098138350','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:28:58','2016-09-28 21:28:58'),
	(40,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098210859','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:30:11','2016-09-28 21:30:11'),
	(41,404,'http://umbrella.dev/benchmark/img/2.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',25,'2016-09-28 21:30:15','2016-09-29 13:52:11'),
	(42,404,'http://umbrella.dev/benchmark/img/3.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',25,'2016-09-28 21:30:27','2016-09-28 21:58:29'),
	(43,404,'http://umbrella.dev/benchmark/img/8.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',5,'2016-09-28 21:30:29','2016-09-28 21:33:33'),
	(44,404,'http://umbrella.dev/benchmark/img/7.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',5,'2016-09-28 21:30:30','2016-09-28 21:30:54'),
	(45,404,'http://umbrella.dev/benchmark/img/6.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',5,'2016-09-28 21:30:32','2016-09-28 21:57:03'),
	(46,404,'http://umbrella.dev/benchmark/img/5.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',28,'2016-09-28 21:30:33','2016-09-29 13:52:48'),
	(47,404,'http://umbrella.dev/benchmark/img/4.png','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',23,'2016-09-28 21:30:34','2016-09-29 13:52:46'),
	(48,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098370771','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:32:51','2016-09-28 21:32:51'),
	(49,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098417904','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:33:38','2016-09-28 21:33:38'),
	(50,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098456224','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:34:16','2016-09-28 21:34:16'),
	(51,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098502047','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:35:02','2016-09-28 21:35:02'),
	(52,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098546089','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:35:46','2016-09-28 21:35:46'),
	(53,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098657068','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:37:37','2016-09-28 21:37:37'),
	(54,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098694756','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:38:14','2016-09-28 21:38:14'),
	(55,404,'http://umbrella.dev/benchmark/css/demo.css','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:40:12','2016-09-28 21:40:12'),
	(56,404,'http://umbrella.dev/benchmark/css/cs-select.css','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:40:12','2016-09-28 21:40:12'),
	(57,404,'http://umbrella.dev/benchmark/css/normalize.css','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:40:12','2016-09-28 21:40:12'),
	(58,404,'http://umbrella.dev/benchmark/css/cs-skin-overlay.css','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:40:13','2016-09-28 21:40:13'),
	(59,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475098992526','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:43:12','2016-09-28 21:43:12'),
	(60,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099047299','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:44:07','2016-09-28 21:44:07'),
	(61,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099058620','[\"http:\\/\\/umbrella.dev\\/benchmark\\/three\"]',1,'2016-09-28 21:44:19','2016-09-28 21:44:19'),
	(62,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099147296','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:45:47','2016-09-28 21:45:47'),
	(63,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099171520','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:46:11','2016-09-28 21:46:11'),
	(64,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099187975','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:46:28','2016-09-28 21:46:28'),
	(65,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099206427','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',2,'2016-09-28 21:46:46','2016-09-28 21:48:25'),
	(66,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475099810973','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-28 21:56:51','2016-09-28 21:56:51'),
	(67,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475157070307','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-29 13:51:09','2016-09-29 13:51:09'),
	(68,404,'http://umbrella.dev/favicon.ico','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-29 13:51:09','2016-09-29 13:51:09'),
	(69,404,'http://umbrella.dev/layouts/system/VisitorIdentificationCSS.aspx?1475157164094','[\"http:\\/\\/umbrella.dev\\/benchmark\\/two\"]',1,'2016-09-29 13:52:43','2016-09-29 13:52:43'),
	(70,404,'http://dev.bh.com/favicon.ico','[\"http:\\/\\/dev.bh.com\\/backend\\/backend\\/auth\\/signin\"]',1,'2016-09-29 14:02:02','2016-09-29 14:02:02');

/*!40000 ALTER TABLE `system_request_logs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_revisions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_revisions`;

CREATE TABLE `system_revisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8_unicode_ci,
  `new_value` text COLLATE utf8_unicode_ci,
  `revisionable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  KEY `system_revisions_user_id_index` (`user_id`),
  KEY `system_revisions_field_index` (`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table system_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_settings`;

CREATE TABLE `system_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `system_settings_item_index` (`item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

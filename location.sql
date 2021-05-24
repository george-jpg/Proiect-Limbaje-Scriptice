CREATE TABLE `locations` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Marker icon',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
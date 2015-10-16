# php-crud
Create, Read, Update and Delete using PDO on PHP

The purpose of this code is to share a simple CRUD (Create, Read, Update and Delete) users into a database, using PDO on PHP.
This website is a module of a big project (shared on my account) and, for make it useful, please create the followin table in a mySQL database:


CREATE TABLE IF NOT EXISTS `moradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidade` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dtInsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dtUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

If you need any assistance, feel free to contact me at reginaldosantos.ca@gmail.com

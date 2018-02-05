<?php
/* Data sample for moduleleoblog*/
$query = "DROP TABLE IF EXISTS `_DB_PREFIX_leoblog_blog`;
CREATE TABLE `ps_leoblog_blog` (
  `id_leoblog_blog` int(11) NOT NULL AUTO_INCREMENT,
  `id_leoblogcat` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `date_add` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_upd` datetime NOT NULL,
  `video_code` text,
  `params` text,
  `featured` tinyint(1) NOT NULL,
  `indexation` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `product_ids` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_leoblog_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `_DB_PREFIX_leoblog_blog_lang`;
CREATE TABLE `ps_leoblog_blog_lang` (
  `id_leoblog_blog` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL,
  `meta_title` varchar(250) NOT NULL,
  `link_rewrite` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  PRIMARY KEY (`id_leoblog_blog`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

<?php
/* Data sample for moduleleomanagewidgets*/
$query = "DROP TABLE IF EXISTS `_DB_PREFIX_leomanagewidget_backup`;
CREATE TABLE `ps_leomanagewidget_backup` (
  `id_leomanagewidget` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_group` int(10) unsigned NOT NULL,
  `id_shop` int(10) unsigned NOT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `key_widget` int(10) unsigned NOT NULL,
  `params` text,
  PRIMARY KEY (`id_leomanagewidget`,`id_shop`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `_DB_PREFIX_leomanagewidget_column`;
CREATE TABLE `ps_leomanagewidget_column` (
  `id_column` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_group` int(10) unsigned NOT NULL,
  `id_shop` int(10) unsigned NOT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `params` text,
  PRIMARY KEY (`id_column`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `_DB_PREFIX_leomanagewidget_column` VALUES
('1','1','LEO_ID_SHOP','1','1','eyJjbGFzcyI6IiIsImxnIjoiMTIiLCJtZCI6IjEyIiwic20iOiIxMiIsInhzIjoiMTIiLCJzcCI6IjEyIiwiYmFja2dyb3VuZCI6IiIsInBhZ2VzIjoiIn0='),
('2','2','LEO_ID_SHOP','1','1','eyJjbGFzcyI6InRvcC1tYXJnaW4iLCJsZyI6IjEyIiwibWQiOiIxMiIsInNtIjoiMTIiLCJ4cyI6IjEyIiwic3AiOiIxMiIsImJhY2tncm91bmQiOiIiLCJwYWdlcyI6IiJ9'),
('3','3','LEO_ID_SHOP','1','1','eyJjbGFzcyI6IiIsImxnIjoiMTIiLCJtZCI6IjEyIiwic20iOiIxMiIsInhzIjoiMTIiLCJzcCI6IjEyIiwiYmFja2dyb3VuZCI6IiIsInBhZ2VzIjoiIn0=');
DROP TABLE IF EXISTS `_DB_PREFIX_leomanagewidget_content`;
CREATE TABLE `ps_leomanagewidget_content` (
  `id_content` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_column` int(10) unsigned NOT NULL,
  `id_shop` int(10) unsigned NOT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `key_widget` int(10) unsigned NOT NULL,
  `module_name` varchar(64) NOT NULL,
  `hook_name` varchar(64) NOT NULL,
  `type` int(1) unsigned DEFAULT NULL,
  `params` text,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `_DB_PREFIX_leomanagewidget_content` VALUES
('1','1','LEO_ID_SHOP','1','1','1403884393','','','0','W10=');
DROP TABLE IF EXISTS `_DB_PREFIX_leomanagewidget_group`;
CREATE TABLE `ps_leomanagewidget_group` (
  `id_leomanagewidget_group` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) unsigned NOT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hook_name` varchar(64) NOT NULL,
  `type` int(1) unsigned DEFAULT NULL,
  `params` text,
  PRIMARY KEY (`id_leomanagewidget_group`,`id_shop`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `_DB_PREFIX_leomanagewidget_group` VALUES
('3','LEO_ID_SHOP','1','1','displayhome',NULL,'eyJjbGFzcyI6InJvdyIsImJhY2tncm91bmQiOiIiLCJ0aXRsZV9lbiI6IiIsInRpdGxlX2ZyIjoiIiwidGl0bGVfZGUiOiIiLCJ0aXRsZV9iciI6IiIsInRpdGxlX2l0IjoiIiwidGl0bGVfMSI6IiIsInRpdGxlX3J1IjoiIiwidGl0bGVfcGwiOiIiLCJ0aXRsZV9hciI6IiJ9');
";

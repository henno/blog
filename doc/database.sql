-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Loomise aeg: Sept 24, 2014 kell 03:38 PM
-- Serveri versioon: 5.5.34
-- PHP versioon: 5.5.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Andmebaas: `blog`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_author` varchar(100) NOT NULL,
  `comment_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_text` text NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Andmete tõmmistamine tabelile `comment`
--

INSEdRT INTO `comment` (`comment_id`, `comment_author`, `comment_created`, `comment_text`, `post_id`) VALUES
(3, 'Nublu', '2014-09-10 10:32:17', 'Tere', 3),
(4, 'Klaabu', '2014-09-10 13:00:24', 'teretere', 3),
(5, 'Klaabu', '2014-09-10 13:00:31', 'halloo', 3),
(6, 'Klaabu', '2014-09-10 13:01:24', 'halloo', 3),
(7, 'Klaabu', '2014-09-15 11:44:49', 'klaabu', 3),
(8, 'Klaabu', '2014-09-15 11:45:02', 'jhuuuhu', 3),
(9, 'Klaabu', '2014-09-15 11:45:15', 'midaiganes', 3);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_subject` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Andmete tõmmistamine tabelile `post`
--

INSERT INTO `post` (`post_id`, `post_subject`, `post_text`, `post_created`, `user_id`) VALUES
(3, 'Halloo', 'Hallo Dolly!', '2014-09-04 11:44:42', 1),
(4, 'Tere', 'Tere maailm!', '2014-09-04 11:44:42', 1),
(5, 'kuku', '', '2014-09-17 12:53:17', 1),
(6, 'kuku', '', '2014-09-17 12:56:30', 1),
(7, 'kuku', '', '2014-09-17 12:57:41', 1),
(8, 'tere', '', '2014-09-17 12:57:49', 1),
(9, 'Test', 'Test', '2014-09-17 13:33:01', 2),
(10, '', '', '2014-09-17 14:32:29', 1),
(11, '', '', '2014-09-17 14:32:35', 1),
(12, '', '', '2014-09-17 14:45:15', 1),
(13, 'TERE', 'MAAILM', '2014-09-17 15:17:20', 1),
(14, 'tere veelkord', 'ma kirjutan jälle', '2014-09-17 15:17:35', 1),
(15, 'hallo kosmos', 'testing, testing', '2014-09-22 07:59:15', 1);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE `post_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES
(3, 1),
(5, 1),
(4, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(25) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Andmete tõmmistamine tabelile `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'postitag'),
(2, 'lihtsalttag');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Andmete tõmmistamine tabelile `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `active`, `email`, `deleted`) VALUES
(1, 'demo1', 'demo', 1, '', 1),
(2, 'klaabu', 'nipi', 1, 'klaabu@sipsik.ee', 1),
(3, 'sipsik', 'sipsik', 0, '', 0),
(4, 'nublu', 'nublu', 0, '', 0),
(5, 'fa', 'fa', 1, 'fa', 0),
(6, 'maile', 'nipi', 1, 'maile@maile.ee', 0);

--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Piirangud tabelile `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Piirangud tabelile `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);
SET FOREIGN_KEY_CHECKS=1;

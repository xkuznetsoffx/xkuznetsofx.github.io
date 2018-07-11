
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 08 2014 г., 13:04
-- Версия сервера: 5.1.66
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `u852823783_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sort` smallint(11) NOT NULL,
  `show` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1aee2a14893406e8b71cd5e5206fc13d', '37.147.223.117', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407499377, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:0:"";s:5:"email";s:22:"fullsteamorg@gmail.com";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE IF NOT EXISTS `coments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `item` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Структура таблицы `config_data`
--

CREATE TABLE IF NOT EXISTS `config_data` (
  `key` varchar(255) NOT NULL,
  `value` varchar(4096) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `config_data`
--

INSERT INTO `config_data` (`key`, `value`) VALUES
('metadescr', ''),
('site_name', 'ru-skript.ru-Лучшие скрипты'),
('site_pqiwi', '0'),
('site_pyandex', '0'),
('stblok', '1'),
('sitefon', ''),
('slide1', ''),
('slide2', ''),
('slide3', ''),
('vkblok', '1'),
('jivoid', ''),
('templates', '1'),
('unitpay_status', ''),
('unitpay_address', ''),
('site_pwebmoney', '0'),
('site_pinfo', ''),
('site_counters', ''),
('wmid', ''),
('wmk_file', ''),
('WMR', ''),
('WMZ', ''),
('wm_key_date', ''),
('wm_pass', ''),
('qiwi_num', ''),
('qiwi_pass', ''),
('yad_client_id', ''),
('mpblok', '1'),
('yad_token', ''),
('site_logo', ''),
('site_flogo', ''),
('yad_wallet', ''),
('ppblok', '1'),
('wmid_n', '1'),
('kblok', '1'),
('site_ppkolvo', '1'),
('site_tptovar', '0'),
('vptsite', '1'),
('site_infokontakt', ''),
('ppcolor', '#2a9fd6'),
('pplimit', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `descr` text NOT NULL,
  `descrdop` text NOT NULL,
  `iconurl` varchar(255) NOT NULL,
  `price_rub` varchar(256) NOT NULL,
  `price_dlr` varchar(256) NOT NULL,
  `price_final` varchar(256) NOT NULL,
  `type_Item` text NOT NULL,
  `skidka` varchar(256) NOT NULL,
  `janr` text NOT NULL,
  `yazuk` text NOT NULL,
  `platforma` text NOT NULL,
  `mylytplayeer` text NOT NULL,
  `relyz` text NOT NULL,
  `izdatel` text NOT NULL,
  `atkiv` text NOT NULL,
  `viewed` varchar(255) NOT NULL DEFAULT '0',
  `min_order` int(10) NOT NULL,
  `sell_method` tinyint(1) NOT NULL,
  `goods` text NOT NULL,
  `onmain` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `ip`
--

INSERT INTO `ip` (`id`, `ip`) VALUES
(1, '255.255.255.255');

-- --------------------------------------------------------

--
-- Структура таблицы `kupons`
--

CREATE TABLE IF NOT EXISTS `kupons` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  `kupon_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `percentage` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `ip_address` varchar(255) NOT NULL,
  `attempts` int(1) NOT NULL,
  `lastLogin` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login_attempts`
--

INSERT INTO `login_attempts` (`ip_address`, `attempts`, `lastLogin`) VALUES
('37.147.223.117', 0, '1407497876');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `session_key` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `fund` varchar(255) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `redeemed` int(12) NOT NULL,
  `goods` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `slug` varchar(100) CHARACTER SET cp1251 NOT NULL,
  `order` int(11) NOT NULL,
  `body` text CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `vdata` datetime DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sviews` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `views`
--

INSERT INTO `views` (`id`, `sviews`) VALUES
(1, 79);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

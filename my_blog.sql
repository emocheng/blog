-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2014-10-09 15:33:15
-- 服务器版本： 5.5.34
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `views`, `cid`) VALUES
(2, '这是我的第一篇日志 ', '                                                MAMP Pro for Mac是OS X系统经典本地服务器环境的专业服务工具 ：', 7, 1),
(3, '统一绿茶', '水电费水电费水电费是地方恶趣味现场兴奋啥地方', 16, 1),
(4, '刘翔又得了第一名了', '哈哈哈哈。。恭喜了~~~', 32, 3),
(6, '武汉长了教育PHP课程', '啊实打实大啊实打实大师大时代', 34, 2),
(7, 'www', 'swsw', 11, 3);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, '新闻'),
(3, '体育');

-- --------------------------------------------------------

--
-- 表的结构 `comm`
--

CREATE TABLE `comm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `comm`
--

INSERT INTO `comm` (`id`, `author`, `content`, `aid`) VALUES
(1, '谭诚', '哈哈，你写的太好了', 2),
(2, 'tctc', '哎呦~~不错哦', 2),
(3, '时发生地方', '权威的权威全文', 2),
(22, 'dsa', 'asdsa', 3),
(23, 'wqsq', 'sqwsqw', 7),
(26, 'sdfsdf', 'dsfsdfds', 4),
(27, 'dsfsdf', 'sdfsdfds', 4),
(28, 'd', 'cdsdcs', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

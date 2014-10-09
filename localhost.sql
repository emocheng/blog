-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2014-10-09 15:26:03
-- 服务器版本： 5.5.34
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liuyanban`
--

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE `liuyan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comm` text NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `comm`, `name`) VALUES
(1, '这是一个留言板', '小白'),
(2, '大家快来留言啊', '小明'),
(3, '惠普多功能纸', '小张'),
(4, '今天不回家', '小李'),
(5, '12312321312', ''),
(6, '12312321312qwe', 'wqeq'),
(13, '12312321312', 'dfsfsd'),
(17, '12312321312sadas', 'asda'),
(18, '12312321312asd', 'sadsad'),
(27, '12312321312', 'asdasdasda'),
(31, '12312321312', '12321');
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
--
-- Database: `wh`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `aid`) VALUES
(1, '武汉大学招生开始修改后', '武汉大学招生开始，，，，这是一个势力。。\r\n\r\n修改后。。应该是组织机构', 5),
(2, '这是一篇新闻范例', '这是一篇新闻范例。。。我的aid是1，id是2这是一篇新闻范例。。。我的aid是1，id是2这是一篇新闻范例。。。我的aid是1，id是2', 3),
(3, '这是一篇通知公告。。。。', '这是一篇通知公告。。。。这是一篇通知公告，，，', 4),
(4, '这是第二篇通知公告。，。。。哈哈哈', '这是第二篇通知公告，。。。。。哈哈哈。。。这是第二篇通知公告', 4),
(7, '组织机构结构图', '撒大声大声道', 5),
(8, '哈哈哈', '啊实打实的', 6),
(9, '这是第二篇文章', '这是第二篇文章。。', 3),
(10, '再来一篇新闻', '这是第三篇新闻啦', 3),
(11, '这是一个住址机构', 'sa打扫打扫打扫', 5);

-- --------------------------------------------------------

--
-- 表的结构 `cate_small`
--

CREATE TABLE `cate_small` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cate_small`
--

INSERT INTO `cate_small` (`id`, `name`, `cid`) VALUES
(1, '公司介绍', 1),
(2, '部门设置', 1),
(3, '新闻中心', 2),
(4, '通知公告', 2),
(5, '组织机构', 1);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `pid`, `name`) VALUES
(1, 0, '公司概况'),
(2, 0, '新闻资讯'),
(3, 0, '政策文件'),
(4, 0, '党建专栏'),
(5, 0, '企业名录'),
(6, 0, '友情链接');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

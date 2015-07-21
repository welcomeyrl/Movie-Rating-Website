-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 03, 2015 at 01:55 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mymovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `mm_access`
--

CREATE TABLE `mm_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_access`
--

INSERT INTO `mm_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(21, 134, 3, NULL),
(21, 133, 3, NULL),
(21, 132, 3, NULL),
(21, 131, 3, NULL),
(21, 130, 3, NULL),
(21, 129, 3, NULL),
(21, 128, 2, NULL),
(21, 171, 3, NULL),
(21, 170, 3, NULL),
(21, 169, 3, NULL),
(21, 168, 3, NULL),
(21, 167, 3, NULL),
(21, 166, 3, NULL),
(21, 165, 3, NULL),
(21, 164, 3, NULL),
(21, 127, 3, NULL),
(21, 126, 3, NULL),
(21, 125, 3, NULL),
(21, 124, 3, NULL),
(21, 123, 3, NULL),
(21, 122, 3, NULL),
(21, 121, 3, NULL),
(21, 120, 3, NULL),
(21, 119, 3, NULL),
(21, 118, 3, NULL),
(21, 117, 3, NULL),
(21, 43, 3, NULL),
(21, 42, 3, NULL),
(21, 41, 3, NULL),
(21, 40, 3, NULL),
(21, 39, 2, NULL),
(21, 38, 1, NULL),
(22, 68, 3, NULL),
(22, 67, 3, NULL),
(22, 66, 3, NULL),
(22, 65, 2, NULL),
(22, 101, 3, NULL),
(22, 64, 3, NULL),
(22, 63, 3, NULL),
(22, 62, 3, NULL),
(22, 61, 3, NULL),
(22, 60, 2, NULL),
(22, 59, 3, NULL),
(22, 58, 3, NULL),
(22, 57, 3, NULL),
(22, 56, 3, NULL),
(22, 55, 2, NULL),
(22, 100, 3, NULL),
(22, 99, 3, NULL),
(22, 98, 3, NULL),
(22, 97, 3, NULL),
(22, 96, 2, NULL),
(21, 135, 3, NULL),
(21, 136, 3, NULL),
(21, 137, 3, NULL),
(21, 138, 2, NULL),
(21, 139, 3, NULL),
(21, 140, 3, NULL),
(21, 141, 3, NULL),
(21, 142, 3, NULL),
(23, 38, 1, NULL),
(23, 39, 2, NULL),
(23, 40, 3, NULL),
(23, 41, 3, NULL),
(23, 42, 3, NULL),
(23, 43, 3, NULL),
(23, 117, 3, NULL),
(23, 118, 3, NULL),
(23, 119, 3, NULL),
(23, 120, 3, NULL),
(23, 121, 3, NULL),
(23, 122, 3, NULL),
(23, 123, 3, NULL),
(23, 124, 3, NULL),
(23, 125, 3, NULL),
(23, 126, 3, NULL),
(23, 127, 3, NULL),
(23, 164, 3, NULL),
(23, 165, 3, NULL),
(23, 166, 3, NULL),
(23, 167, 3, NULL),
(23, 168, 3, NULL),
(23, 169, 3, NULL),
(23, 170, 3, NULL),
(23, 171, 3, NULL),
(23, 44, 2, NULL),
(23, 45, 3, NULL),
(23, 46, 3, NULL),
(23, 47, 3, NULL),
(23, 52, 3, NULL),
(23, 53, 3, NULL),
(23, 54, 3, NULL),
(23, 48, 2, NULL),
(23, 88, 3, NULL),
(23, 89, 3, NULL),
(23, 91, 3, NULL),
(23, 92, 3, NULL),
(23, 95, 3, NULL),
(23, 49, 2, NULL),
(23, 103, 3, NULL),
(23, 104, 3, NULL),
(23, 105, 3, NULL),
(23, 106, 3, NULL),
(23, 107, 3, NULL),
(23, 50, 2, NULL),
(23, 108, 3, NULL),
(23, 109, 3, NULL),
(23, 110, 3, NULL),
(23, 111, 3, NULL),
(23, 112, 3, NULL),
(23, 51, 2, NULL),
(23, 113, 3, NULL),
(23, 114, 3, NULL),
(23, 115, 3, NULL),
(23, 116, 3, NULL),
(23, 96, 2, NULL),
(23, 97, 3, NULL),
(23, 98, 3, NULL),
(23, 99, 3, NULL),
(23, 100, 3, NULL),
(23, 55, 2, NULL),
(23, 56, 3, NULL),
(23, 57, 3, NULL),
(23, 58, 3, NULL),
(23, 59, 3, NULL),
(23, 60, 2, NULL),
(23, 61, 3, NULL),
(23, 62, 3, NULL),
(23, 63, 3, NULL),
(23, 64, 3, NULL),
(23, 101, 3, NULL),
(23, 65, 2, NULL),
(23, 66, 3, NULL),
(23, 67, 3, NULL),
(23, 68, 3, NULL),
(23, 69, 3, NULL),
(23, 102, 3, NULL),
(23, 70, 2, NULL),
(23, 71, 3, NULL),
(23, 72, 3, NULL),
(23, 73, 3, NULL),
(23, 74, 3, NULL),
(23, 75, 3, NULL),
(23, 76, 3, NULL),
(23, 77, 3, NULL),
(23, 78, 3, NULL),
(23, 79, 3, NULL),
(23, 80, 3, NULL),
(23, 81, 3, NULL),
(23, 82, 2, NULL),
(23, 83, 3, NULL),
(23, 84, 3, NULL),
(23, 85, 3, NULL),
(23, 86, 3, NULL),
(23, 87, 2, NULL),
(23, 90, 3, NULL),
(23, 93, 3, NULL),
(23, 94, 3, NULL),
(23, 128, 2, NULL),
(23, 129, 3, NULL),
(23, 130, 3, NULL),
(23, 131, 3, NULL),
(23, 132, 3, NULL),
(23, 133, 3, NULL),
(23, 134, 3, NULL),
(23, 135, 3, NULL),
(23, 136, 3, NULL),
(23, 137, 3, NULL),
(23, 172, 3, NULL),
(23, 173, 3, NULL),
(23, 174, 3, NULL),
(23, 138, 2, NULL),
(23, 139, 3, NULL),
(23, 140, 3, NULL),
(23, 141, 3, NULL),
(23, 142, 3, NULL),
(23, 143, 2, NULL),
(23, 144, 3, NULL),
(23, 145, 3, NULL),
(23, 146, 3, NULL),
(23, 147, 3, NULL),
(23, 155, 3, NULL),
(23, 156, 3, NULL),
(23, 148, 2, NULL),
(23, 149, 3, NULL),
(23, 150, 3, NULL),
(23, 151, 3, NULL),
(23, 152, 3, NULL),
(23, 153, 3, NULL),
(23, 154, 3, NULL),
(23, 158, 2, NULL),
(23, 159, 3, NULL),
(23, 160, 3, NULL),
(23, 161, 3, NULL),
(23, 162, 3, NULL),
(23, 163, 3, NULL),
(24, 38, 1, NULL),
(24, 39, 2, NULL),
(24, 40, 3, NULL),
(24, 41, 3, NULL),
(24, 42, 3, NULL),
(24, 43, 3, NULL),
(24, 117, 3, NULL),
(24, 118, 3, NULL),
(24, 119, 3, NULL),
(24, 120, 3, NULL),
(24, 121, 3, NULL),
(24, 122, 3, NULL),
(24, 123, 3, NULL),
(24, 124, 3, NULL),
(24, 125, 3, NULL),
(24, 126, 3, NULL),
(24, 127, 3, NULL),
(24, 164, 3, NULL),
(24, 165, 3, NULL),
(24, 166, 3, NULL),
(24, 167, 3, NULL),
(24, 168, 3, NULL),
(24, 169, 3, NULL),
(24, 170, 3, NULL),
(24, 171, 3, NULL),
(24, 44, 2, NULL),
(24, 45, 3, NULL),
(24, 46, 3, NULL),
(24, 47, 3, NULL),
(24, 52, 3, NULL),
(24, 53, 3, NULL),
(24, 54, 3, NULL),
(24, 48, 2, NULL),
(24, 88, 3, NULL),
(24, 89, 3, NULL),
(24, 91, 3, NULL),
(24, 92, 3, NULL),
(24, 95, 3, NULL),
(24, 49, 2, NULL),
(24, 103, 3, NULL),
(24, 104, 3, NULL),
(24, 105, 3, NULL),
(24, 106, 3, NULL),
(24, 107, 3, NULL),
(24, 50, 2, NULL),
(24, 108, 3, NULL),
(24, 109, 3, NULL),
(24, 110, 3, NULL),
(24, 111, 3, NULL),
(24, 112, 3, NULL),
(24, 51, 2, NULL),
(24, 113, 3, NULL),
(24, 114, 3, NULL),
(24, 115, 3, NULL),
(24, 116, 3, NULL),
(24, 96, 2, NULL),
(24, 97, 3, NULL),
(24, 98, 3, NULL),
(24, 99, 3, NULL),
(24, 100, 3, NULL),
(24, 55, 2, NULL),
(24, 56, 3, NULL),
(24, 57, 3, NULL),
(24, 58, 3, NULL),
(24, 59, 3, NULL),
(24, 60, 2, NULL),
(24, 61, 3, NULL),
(24, 62, 3, NULL),
(24, 63, 3, NULL),
(24, 64, 3, NULL),
(24, 101, 3, NULL),
(24, 65, 2, NULL),
(24, 66, 3, NULL),
(24, 67, 3, NULL),
(24, 68, 3, NULL),
(24, 69, 3, NULL),
(24, 102, 3, NULL),
(24, 70, 2, NULL),
(24, 71, 3, NULL),
(24, 72, 3, NULL),
(24, 73, 3, NULL),
(24, 74, 3, NULL),
(24, 75, 3, NULL),
(24, 76, 3, NULL),
(24, 77, 3, NULL),
(24, 78, 3, NULL),
(24, 79, 3, NULL),
(24, 80, 3, NULL),
(24, 81, 3, NULL),
(24, 82, 2, NULL),
(24, 83, 3, NULL),
(24, 84, 3, NULL),
(24, 85, 3, NULL),
(24, 86, 3, NULL),
(24, 87, 2, NULL),
(24, 90, 3, NULL),
(24, 93, 3, NULL),
(24, 94, 3, NULL),
(24, 128, 2, NULL),
(24, 129, 3, NULL),
(24, 130, 3, NULL),
(24, 131, 3, NULL),
(24, 132, 3, NULL),
(24, 133, 3, NULL),
(24, 134, 3, NULL),
(24, 135, 3, NULL),
(24, 136, 3, NULL),
(24, 137, 3, NULL),
(24, 172, 3, NULL),
(24, 173, 3, NULL),
(24, 174, 3, NULL),
(24, 138, 2, NULL),
(24, 139, 3, NULL),
(24, 140, 3, NULL),
(24, 141, 3, NULL),
(24, 142, 3, NULL),
(24, 143, 2, NULL),
(24, 144, 3, NULL),
(24, 145, 3, NULL),
(24, 146, 3, NULL),
(24, 147, 3, NULL),
(24, 155, 3, NULL),
(24, 156, 3, NULL),
(24, 148, 2, NULL),
(24, 149, 3, NULL),
(24, 150, 3, NULL),
(24, 151, 3, NULL),
(24, 152, 3, NULL),
(24, 153, 3, NULL),
(24, 154, 3, NULL),
(24, 158, 2, NULL),
(24, 159, 3, NULL),
(24, 160, 3, NULL),
(24, 161, 3, NULL),
(24, 162, 3, NULL),
(24, 163, 3, NULL),
(25, 38, 1, NULL),
(25, 39, 2, NULL),
(25, 40, 3, NULL),
(25, 41, 3, NULL),
(25, 42, 3, NULL),
(25, 43, 3, NULL),
(25, 117, 3, NULL),
(25, 118, 3, NULL),
(25, 119, 3, NULL),
(25, 120, 3, NULL),
(25, 121, 3, NULL),
(25, 122, 3, NULL),
(25, 123, 3, NULL),
(25, 124, 3, NULL),
(25, 125, 3, NULL),
(25, 126, 3, NULL),
(25, 127, 3, NULL),
(25, 164, 3, NULL),
(25, 165, 3, NULL),
(25, 166, 3, NULL),
(25, 167, 3, NULL),
(25, 168, 3, NULL),
(25, 169, 3, NULL),
(25, 170, 3, NULL),
(25, 171, 3, NULL),
(25, 44, 2, NULL),
(25, 45, 3, NULL),
(25, 46, 3, NULL),
(25, 47, 3, NULL),
(25, 52, 3, NULL),
(25, 53, 3, NULL),
(25, 54, 3, NULL),
(25, 48, 2, NULL),
(25, 88, 3, NULL),
(25, 89, 3, NULL),
(25, 91, 3, NULL),
(25, 92, 3, NULL),
(25, 95, 3, NULL),
(25, 49, 2, NULL),
(25, 103, 3, NULL),
(25, 104, 3, NULL),
(25, 105, 3, NULL),
(25, 106, 3, NULL),
(25, 107, 3, NULL),
(25, 50, 2, NULL),
(25, 108, 3, NULL),
(25, 109, 3, NULL),
(25, 110, 3, NULL),
(25, 111, 3, NULL),
(25, 112, 3, NULL),
(25, 51, 2, NULL),
(25, 113, 3, NULL),
(25, 114, 3, NULL),
(25, 115, 3, NULL),
(25, 116, 3, NULL),
(25, 96, 2, NULL),
(25, 97, 3, NULL),
(25, 98, 3, NULL),
(25, 99, 3, NULL),
(25, 100, 3, NULL),
(25, 55, 2, NULL),
(25, 56, 3, NULL),
(25, 57, 3, NULL),
(25, 58, 3, NULL),
(25, 59, 3, NULL),
(25, 60, 2, NULL),
(25, 61, 3, NULL),
(25, 62, 3, NULL),
(25, 63, 3, NULL),
(25, 64, 3, NULL),
(25, 101, 3, NULL),
(25, 65, 2, NULL),
(25, 66, 3, NULL),
(25, 67, 3, NULL),
(25, 68, 3, NULL),
(25, 69, 3, NULL),
(25, 102, 3, NULL),
(25, 70, 2, NULL),
(25, 71, 3, NULL),
(25, 72, 3, NULL),
(25, 73, 3, NULL),
(25, 74, 3, NULL),
(25, 75, 3, NULL),
(25, 76, 3, NULL),
(25, 77, 3, NULL),
(25, 78, 3, NULL),
(25, 79, 3, NULL),
(25, 80, 3, NULL),
(25, 81, 3, NULL),
(25, 82, 2, NULL),
(25, 83, 3, NULL),
(25, 84, 3, NULL),
(25, 85, 3, NULL),
(25, 86, 3, NULL),
(25, 87, 2, NULL),
(25, 90, 3, NULL),
(25, 93, 3, NULL),
(25, 94, 3, NULL),
(25, 128, 2, NULL),
(25, 129, 3, NULL),
(25, 130, 3, NULL),
(25, 131, 3, NULL),
(25, 132, 3, NULL),
(25, 133, 3, NULL),
(25, 134, 3, NULL),
(25, 135, 3, NULL),
(25, 136, 3, NULL),
(25, 137, 3, NULL),
(25, 172, 3, NULL),
(25, 173, 3, NULL),
(25, 174, 3, NULL),
(25, 138, 2, NULL),
(25, 139, 3, NULL),
(25, 140, 3, NULL),
(25, 141, 3, NULL),
(25, 142, 3, NULL),
(25, 143, 2, NULL),
(25, 144, 3, NULL),
(25, 145, 3, NULL),
(25, 146, 3, NULL),
(25, 147, 3, NULL),
(25, 155, 3, NULL),
(25, 156, 3, NULL),
(25, 148, 2, NULL),
(25, 149, 3, NULL),
(25, 150, 3, NULL),
(25, 151, 3, NULL),
(25, 152, 3, NULL),
(25, 153, 3, NULL),
(25, 154, 3, NULL),
(25, 158, 2, NULL),
(25, 159, 3, NULL),
(25, 160, 3, NULL),
(25, 161, 3, NULL),
(25, 162, 3, NULL),
(25, 163, 3, NULL),
(22, 176, 3, NULL),
(22, 175, 3, NULL),
(22, 54, 3, NULL),
(22, 53, 3, NULL),
(22, 52, 3, NULL),
(22, 47, 3, NULL),
(22, 46, 3, NULL),
(22, 45, 3, NULL),
(22, 44, 2, NULL),
(22, 38, 1, NULL),
(22, 69, 3, NULL),
(22, 102, 3, NULL),
(26, 38, 1, NULL),
(26, 39, 2, NULL),
(26, 40, 3, NULL),
(26, 41, 3, NULL),
(26, 42, 3, NULL),
(26, 43, 3, NULL),
(26, 117, 3, NULL),
(26, 118, 3, NULL),
(26, 119, 3, NULL),
(26, 120, 3, NULL),
(26, 121, 3, NULL),
(26, 122, 3, NULL),
(26, 123, 3, NULL),
(26, 124, 3, NULL),
(26, 125, 3, NULL),
(26, 126, 3, NULL),
(26, 127, 3, NULL),
(26, 164, 3, NULL),
(26, 165, 3, NULL),
(26, 166, 3, NULL),
(26, 167, 3, NULL),
(26, 168, 3, NULL),
(26, 169, 3, NULL),
(26, 170, 3, NULL),
(26, 171, 3, NULL),
(26, 128, 2, NULL),
(26, 129, 3, NULL),
(26, 130, 3, NULL),
(26, 131, 3, NULL),
(26, 132, 3, NULL),
(26, 133, 3, NULL),
(26, 134, 3, NULL),
(26, 135, 3, NULL),
(26, 136, 3, NULL),
(26, 137, 3, NULL),
(26, 172, 3, NULL),
(26, 173, 3, NULL),
(26, 174, 3, NULL),
(26, 138, 2, NULL),
(26, 139, 3, NULL),
(26, 140, 3, NULL),
(26, 141, 3, NULL),
(26, 142, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mm_acomment`
--

CREATE TABLE `mm_acomment` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `aid` int(10) unsigned NOT NULL COMMENT '影片id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `content` text NOT NULL COMMENT '影评内容',
  `rtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复时间',
  `unum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '有用数目',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '状态 3禁言 1正常 2举报'
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_acomment`
--

INSERT INTO `mm_acomment` (`id`, `aid`, `uid`, `content`, `rtime`, `unum`, `status`) VALUES
(1, 47, 5, 'aaaaaaaaa', 1386839939, 0, 1),
(2, 47, 5, 'aaaaaaaaa', 1386839941, 0, 1),
(3, 47, 5, 'aaaaaaaaa', 1386839942, 0, 1),
(4, 47, 5, 'aaaaaaaaa', 1386839952, 0, 1),
(5, 47, 5, 'aaaaaaaaa', 1386839984, 0, 1),
(6, 47, 5, 'aaaaaaaaa', 1386839985, 0, 3),
(7, 47, 5, 'aaaaaaaaa', 1386839986, 0, 3),
(8, 47, 5, 'aaaaaaaaa', 1386839987, 0, 1),
(9, 47, 5, 'aaaaaaaaa', 1386839988, 0, 1),
(10, 24, 5, 'aaa', 1386840058, 0, 1),
(11, 24, 5, 'aaa', 1386840705, 0, 1),
(12, 24, 5, 'aaa', 1386840711, 0, 1),
(13, 24, 5, 'aaa', 1386840715, 0, 1),
(14, 24, 5, 'aaa', 1386840718, 0, 1),
(15, 24, 5, 'aaaa', 1386840720, 0, 1),
(16, 24, 5, 'aaa', 1386840724, 0, 1),
(17, 24, 5, 'daaa', 1386840764, 0, 1),
(18, 22, 5, 'aa', 1386840949, 0, 1),
(19, 22, 5, 'aaa', 1386840952, 0, 1),
(20, 22, 5, 'aa', 1386840955, 0, 1),
(21, 22, 5, 'aaa', 1386840957, 0, 1),
(22, 22, 5, 'aaaa', 1386840959, 0, 1),
(23, 22, 5, 'aaaa', 1386840963, 0, 1),
(24, 22, 5, 'aaaa', 1386840965, 0, 1),
(25, 22, 5, 'aaa', 1386844856, 0, 1),
(26, 22, 5, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 1386844859, 0, 1),
(27, 43, 3, 'asdfasdfadfq', 1386849904, 0, 1),
(28, 43, 3, '1', 1386849919, 0, 1),
(29, 43, 3, 'asdlkfjhalsdkf', 1386849924, 0, 1),
(30, 27, 3, 'asdfadsfas', 1386854765, 0, 1),
(31, 42, 5, 'aa', 1387334114, 0, 1),
(32, 23, 5, 'aaaaaaaaaaaaaaaaaaa', 1387396834, 0, 1),
(33, 23, 5, 'aaaaaaaaaaaaaaa', 1387396838, 0, 1),
(34, 23, 5, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 1387396843, 0, 1),
(35, 23, 5, 'aaaaaaaaaaaaaa', 1387396846, 0, 1),
(36, 23, 5, 'aaaaaaaaaaaaaaaaaaaaaa', 1387396861, 0, 1),
(37, 23, 5, 'aaaaaaaaaaaaaaaa', 1387396878, 0, 1),
(38, 47, 5, 'aaaaaa', 1387397077, 0, 1),
(39, 47, 5, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 1387397086, 0, 3),
(40, 28, 5, 'aaaaaaaaaaaaaa', 1387420515, 0, 1),
(41, 38, 5, 'aaaa', 1387436020, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mm_actors`
--

CREATE TABLE `mm_actors` (
`id` int(10) unsigned NOT NULL COMMENT '????',
  `cname` varchar(32) DEFAULT NULL,
  `ename` varchar(32) DEFAULT NULL COMMENT 'Ӣ',
  `picname` varchar(32) DEFAULT NULL COMMENT '??Աͷ??',
  `sex` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '?Ա?',
  `constellation` varchar(16) DEFAULT NULL COMMENT '????',
  `birthday` varchar(32) DEFAULT NULL COMMENT '????????',
  `bornaddress` varchar(32) DEFAULT NULL COMMENT '??????',
  `professtion` varchar(32) NOT NULL COMMENT 'ְҵ',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '????ʱ??',
  `intro` text NOT NULL,
  `hasphotos` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_actors`
--

INSERT INTO `mm_actors` (`id`, `cname`, `ename`, `picname`, `sex`, `constellation`, `birthday`, `bornaddress`, `professtion`, `addtime`, `intro`, `hasphotos`) VALUES
(24, 'Sandra Bullock', 'Sandra Bullock', '52a5fa62eb3e7.jpg', 0, 'Leo', '-171532800', 'Arlington,Virginia,US', 'Actor', 1386609251, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　美国电影女演员。在1990年代窜红，代表作包括《生死时速》和《选美俏卧底》，自此确立好莱坞一线女星的地位。最近的代表作包括《弱点》、《假结婚》等。美国时间2010年3月7日，第82届奥斯卡金像奖颁奖礼在洛杉矶举行，桑德拉·布洛克凭《弱点》获最佳女主角奖。2010年《福布斯》杂志推出的好莱坞女演员收入榜单上，桑德拉拔得头筹。</span>', 0),
(25, 'George Clooney', 'George Clooney', '52a5fa9be1a9d.jpg', 1, 'Taurus', '-273225600', 'Lexington,Kentucky,US', 'Actor', 1386609307, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　乔治·克鲁尼出身在演员世家，父亲尼克·克鲁尼也是一名职业演员，因此乔治·克鲁尼在五岁时，就曾经在父亲的节目演出。但是他直到21岁时才打定主意进入演艺界，搬到洛杉矶居住。他连续演了将近几部电视影集，都没有引起注意。他自己曾经说过：“在电视界最好的演员不见得有最好的际遇，因为他们需要的人不见得是演技最好的，而是最有自信的。”在了解这个道理后，加上自信的乔治·克鲁尼果然展现了无与伦比的性感魅力，《急诊室的故事》让他开始首度尝到走红的滋味，这时他的年纪已经超过三十了。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　让他跃登银幕偶像的是电影《一日钟情》，乔治·克鲁尼在片中展现了他不太循规蹈矩的潇洒魅力，他和米歇尔·菲佛也荣登当年最登对性感偶像。随后他一路走红，出演了相当众多的卖座影片，诸如《红色警戒》、《蝙蝠侠与罗宾》、《完美风暴》、《十一罗汉》等一系列出色的作品，令他一直跻身于好莱坞一线演员的阵容。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　在演艺事业上获得成功的同时，他又开始尝试执导影片，初试牛刀的《危险思想的自白》一举获得银狮奖，在2005年又推出第二部导演作品《晚安，好运》又一次成为奥斯卡的热门影片。2008年的导演作品是发生在上世纪20年代的运动题材影片《爱情达阵》。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2008年再次与科恩兄弟联手，在他们的黑色喜剧《阅后即焚》中扮演了一个看似潇洒其实与其他人一样可悲的风流官员。而接下来克鲁尼的工作则包括：为韦斯·安德森的动画片《了不起的狐狸爸爸》配音，主演《朱诺》导演贾森·雷特曼的新片《在云端》、乔·卡纳汉的犯罪题材影片《白色爵士》、以及与伊万·麦克格雷格和凯文·史派西主演历史题材影片《以眼杀人》。</span>', 0),
(23, 'Mélanie Thierry', 'Mélanie Thierry', '52a5f7adac189.jpg', 0, 'Cancer', '364147200', 'France', 'Actor', 1386608557, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1981年7月17日出生于法国的圣杰曼-昂-雷。2001年12月在巴黎的卡琳戏院进行了首次舞台剧（Crime et Chatiment）演出。1996年从影至今共出演影视剧20余部。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　梅兰尼·蒂埃里广为观众熟悉的形象还是电影《海上钢琴师》中1900爱上的那个女孩，拥有深邃的眼神，神秘的气质，惊鸿一瞥让人深深记住了她。</span>', 0),
(20, 'Tim Roth', 'Tim Roth', '52a5f6383ae0f.jpg', 1, 'Taurus', '-272534400', 'London,England', 'Actor', 1386608184, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　蒂姆·罗斯1961年5月14日出生于英国伦敦，善于模仿各种口音，常被误认为美国人。他在坎伯维尔艺术学院学习过雕塑，之后退学，一心追求表演事业。第一个突破是1982年在英国电视电影《英国制造》中扮演的角色。1984年演出电影处女作《隶你十年》，他扮演一个刚出道的菜鸟杀手。《隶你十年》让他拿到包括BAFTA在内的一系列的“最有前途新人奖”。尽管如此，由于蒂姆·罗斯对商业电影十分反感，坚持走独立路线，这使他在相当长一段时间内都没有合适的工作，在赤贫线上生活。他做过超级市场的员工，也做过电话推销，生活一片混乱。最后在阿姆斯特丹睡下水道的时候他被彼得·格林纳威发现并带回英国，在《情欲色香味》中扮演大盗的手下。 之后是第一部带给他以国际性声誉的电影，与罗伯特·奥特曼合作，反映凡高晚年生活的《凡高与提奥》。接下来，他的名字再度与加里·奥德曼联系到了一起。黑色喜剧《罗森·格兰兹与吉尔·登斯顿之死》，赢得的是热烈的赞扬。之后，因为政治上的立场，他被赶出了英国。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1992年，他与初出茅庐的昆汀·塔伦蒂诺合作了震惊影坛的黑色经典《落水狗》，片中的Mr.Orange一角为他赢得了在独立电影界显赫的声名和更多的演出机会。这之后蒂姆·罗斯的发展可谓一帆风顺，和他合作的导演包括昆汀、WoodyAllen、GiuseppeTornatore、WimWenders、弗朗西斯·福特·科波拉等等，他依然坚持着自己的原则，为影迷奉献越来越多经典的角色和影片。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　家族本姓&quot;史密斯&quot;，其父因同情二战中的犹太人，改做犹太姓Roth但是有关Tim是犹太裔的说法是不正确的，Tim没有犹太血统。1961年5月14日出生于英国伦敦，善于模仿各种口音，常被误认为美国人。他在坎伯维尔艺术学院学习过雕塑，之后退学，一心追求表演事业。第一个突破是在英国电视电影《英国制造》（1982）中扮演的角色。1984年演出处女作《TheHit》，获得高度评价。在《凡高于提奥》中扮演的文森特·凡高以及在《君臣人子小命呜呼》中于加里·奥德曼的对手戏得到了业界注意。昆汀·塔伦蒂诺原本打算让罗思扮演《落水狗》中的金先生或者粉先生，但是罗思争取到了橙先生一角，从而迎来了自己事业上的巨大突破。《低俗小说》中，昆汀再次邀请了罗思；1995年的《四个房间》则是罗思与昆汀的第三次合作。同一年，罗思凭借他在古装片《赤胆豪情》中的反角赢得了奥斯卡题名。接着。他还在伍迪·艾伦的音乐电影《人人都说我爱你》中一显歌喉。1996年以《赤胆豪情》入围奥斯卡最佳男配角奖。扮演那么多坏人和罪犯之后，罗斯在《海上钢琴师》中出神入化地塑造了一个不谙世事、纯洁无辜的钢琴天才，这个角色使他赢得了大量观众的喜爱。1999年晋身导演之林，《TheWarZone》为他夺得欧洲电影奖年度发现奖。今日的罗思已是受人尊敬的演技派，颇得导演和影评人青睐</span>', 0),
(21, 'Pruitt Taylor Vince', 'Pruitt Taylor Vince', '52a5f691c91d2.jpg', 1, 'Cancer', '-299577600', 'Baton Rouge,Louisiana,US', 'Actor', 1386608273, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Pruitt Taylor Vince (born July 5, 1960) is an American award-winning character actor who has made many appearances in film and television.Vince was born in Baton Rouge, Louisiana. He attended Louisiana State University[2] and began acting due to a mistake; a computer error in his high school registration scheduled him in an acting class, a subject which Vince has never left.</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Divorced from his first marriage, Vince remarried in 2003 to Julianne Mattelig. He has pathologic nystagmus, a condition which causes a person''s eyes to move involuntarily.</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Vince made his film debut in Jim Jarmusch''s Down by Law, but his scenes wound up on the cutting room floor. He had prominent supporting roles in a number of major films, including a turn as a dimwitted Ku Klux Klan member in Mississippi Burning, Lee Bowers in JFK, and the main character''s best friend in Nobody''s Fool. He also starred in Giuseppe Tornatore''s The Legend of 1900 alongside Tim Roth. He had his first lead role in James Mangold''s independent film Heavy, playing a sweet, silent overweight cook harboring a crush on a waitress (Liv Tyler).</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Vince often alternates roles of both heroic and villainous characters, like a lovable small town pub owner in Beautiful Girls, a serial killer with multiple personalities in Identity (a second collaboration with director Mangold), the disheveled gossip columnist in s1mone, and a pompous sheriff in Nurse Betty. He can also be seen in Love from Ground Zero as Walter. Vince also played a Southern cop in Angel Heart, a kidnapper''s assistant in Trapped, and a deputy prison warden in Oliver Stone''s Natural Born Killers.</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Vince received an Emmy Award in 1997 for Outstanding Guest Actor in a Drama Series for his role as serial killer Clifford Banks during the second season of the television series Murder One.[3] More recently he appeared in the movie Constantine. Other film titles include the neo-noir China Moon and the psychological horror film Jacob''s Ladder.</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　Guest appearances on TV show</span>', 0),
(22, 'Bill Nunn', 'Bill Nunn', '52a5f6e207834.jpg', 1, 'Libra', '-511257600', 'Pittsburgh,Pennsylvania,US', 'Actor', 1386608354, '', 0),
(26, 'Ed Harris', 'Ed Harris', '52a5fadf2c9dd.jpg', 1, 'Sagittarius', '-602582400', 'NewJersey', 'Actor', 1386609375, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　埃德·哈里斯（Edward Allen Harris ）外形硬朗，身高5英尺9英寸，蓝色的眼睛和外向的举止，一副标准的硬汉模样。他言语不多却富有力度，往往让整个银幕为之一亮。在他漫长的演艺生涯中，演释过众多的大小角色、邪恶的和富有同情心的人物，充分证明了他的演技和才能。</span>', 0),
(27, 'Leonardo DiCaprio', 'Leonardo DiCaprio', '52a5fceee5c0d.jpg', 1, 'Scorpio', '153331200', 'LA', 'Actor', 1386609902, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　莱昂纳多迪卡普里奥1974年11月11日出生在美国洛杉矶一个富足家庭。说起莱昂纳多的名字还有一段小小的故事。当时已身怀六甲的母亲在看莱昂纳多达芬奇的画展时，肚子里的小宝贝踢了妈妈一脚似乎对莱昂纳多达芬奇的画也感兴趣，因此妈妈给小宝贝取名莱昂纳多。莱昂纳多的母亲艾莱琳是个德国人，他的一头金发和清秀的脸型便是母亲遗传所致。他的父亲出生于爱尔兰。莱昂纳多一出生，他的父母便已离异，但幸运的是，父母的离异并没有给他的成长产生任何不当影响。他一直和母亲住在一起，周末则和父亲一起度过。而他父亲也一直在关心着他，他到外地拍片时他的父亲就一直陪着他。同时，即使离异后，莱昂纳多的父亲和母亲也一如既往地保持着亲密状态。老迪卡普里奥是个不折不扣的嬉皮士，充满着乌托邦的梦想。年青时代的他在纽约街头过着放荡的反潮流式的生活。在莱昂纳多-迪卡普里奥的许多影片中，我们还可以看到这种反叛的影子。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　父母对小莱昂纳多疼爱有加，一切事情都为他选择最好的。他们送莱昂纳多上贵族学校接受最好的教育，但是莱昂纳多却对表演情有独钟，对学习提不起兴趣。这也许是他5岁时参加拍摄电视剧《Romper Room》后结下的影视情缘。在莱昂纳多10岁时，他想成为一名演员的梦想曾被一度打碎。一家影视代理商将莱昂纳多拒之于门外，理由是他们不喜欢他的发型、名字，并建议莱昂纳多改名为Lanny Williams。不做演员心不甘，十四岁时，他出现在他的第一部商业广告之中，那是为火柴盒汽车所做的广告。此后，他为包括燕麦片、玩具乃至泡泡糖在内的儿科所有的商品都做了广告代言人。当他不再电视上帮着促销商品的时候，他出现在大量的教育影片中，包括《米琪的安全俱乐部》和《如何对付吸毒的父母》。在这些小型的表演工作获得认可后，他得到了一个在电视连续剧《情人》的某一部分之中扮演一位苦难的年青人的机会。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　16岁时莱昂纳多参加拍摄了著名电视连续喜剧《成长的烦恼》，扮演一个叫Luke的无家可归的男孩。莱昂纳多无可挑剔的表演甚至抢去了主角的风头。1992年莱昂纳多再次凭借自己的实力击败众多对手取得影片This Boy''s Life中Tobias Wolff的角色。尽管莱昂纳多引起了好莱坞的注意，但他所拍摄的影片票房收入并不理想。1992年，他出演了由约翰尼·德普主演的家庭伦理片《不一样的天空》。他在片中纯朴自然的表演，为初涉影坛的他赢得了1994年奥斯卡最佳男配角奖的提名，而此时，他才19岁。《不一样的天空》中的弱智儿亚尼，《篮球日记》中的吸毒少年杰米和《心之全蚀》中的忧郁兰波对莱昂纳多的演艺生涯影响甚大，这些角色确立了他影坛“最佳边缘人”的至尊地位。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1996年，在现代激情版《罗密欧与朱丽叶》中，他塑造了一个崭新的“罗密欧”的形象。在这部充满性暗示和暴力的旧瓶装新酒式的莎士比亚名剧中，他的表演被评论界称为具有“毁灭性”，融狂躁不安、反叛精神和多愁伤感于一体的“罗密欧”，使他成为好莱坞“最沉郁、最富伤害性、最深情的男明星”。全世界的少女都奉这个神经质的现代“罗密欧”为梦中情人。莱昂纳多也因此片而荣膺柏林电影节最佳男主角奖。在与克莱尔.丹尼斯联袂出演现代版爱情故事《罗密欧与朱丽叶》，与好莱坞老牌明星梅丽尔·斯特里普合演Marvin''s Room之后，莱昂纳多低票房收入的日子似乎结束。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　然而真正令莱昂纳多盛名响誉全球，令他身价大增，还要是在他担纲《泰坦尼克号》男主角之后，此片不仅打破美国票房历年纪录，也打破了世界各地的票房纪录。此片获11项奥斯卡大奖，打破了美国和世界各地的票房记录。莱昂纳多也因在此片中的完美表演而成了“世纪末的票房炸弹”，象旋风般席卷了全球，年轻英俊、充满朝气的他以一个活泼可爱的大男孩的形象出现在人们面前。其实在拍摄此片时，导演詹姆斯·卡梅隆对莱昂纳多并不是十分满意。他曾对莱昂纳多发出了最后通牒：“我知道你以往的角色大都是过度忧郁，有点神经质，但是在这部片中绝对不行。”莱昂纳多最终听取了卡梅隆的劝告，出色地塑造了他的第一个“正常人”的角色。确实，对一个演员来说，没有比演一个清新、纯朴、简单的人物更难演了。在本片中，莱昂纳多的演出相当投入认真，充满了好奇与热情。一张稚嫩的脸庞下，隐约可见令人着迷的性情。莱昂纳多成了新一代偶像的代言人。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2000年，莱昂纳多在其新片《海滩》中饰演一个酷爱畅游网路世界寻找刺激的美国年轻人，并决定到泰国寻找在网路上得知的人间天堂----海滩。影片反映的主题是：自然不是人类想改造就能改造的！影片在泰国第一次公演就激起了当地环境保护人士的众怒，认为影片在拍摄过程中对当地菲菲岛造成了环境破坏。莱昂纳多一直声称没有破坏环境，并刻意投身做环保先锋，访问美国总统克林顿，大谈环保问题，以推动环保活动。但随着《海滩》一片在世界各地的上映，拍摄地泰国却迎来了数成名作《泰坦尼克号》经典剧照不清的年轻旅游者。他们都象片中的主人公理查德一样，肩背双肩包，跑到泰国来亲眼目睹这里天堂一样 的海水和沙滩，极大地带动了泰国的旅游业。这部文艺片并不适合大众的审美胃口，公映后效果很失败，它带来的一系列麻烦，直把莱昂拖入了困苦的窘境。之后莱昂出演了史蒂文斯皮尔伯格导演的《有种来抓我》和马丁西科塞斯导演的《纽约黑帮》，反响也并不是很好。直到2004的《飞行家》为莱昂迎来一个金球影帝和奥斯卡提名，才使他处在低谷的事业有所回升。2006年的《无间道风云》和《血钻》给他带来了一个金球奖最佳男主角的双提名，他也是历史上首个获得最佳男主角双提名的演员，同时在次年奥斯卡上凭借《血钻》获得最佳男主角提名。从此，公众对莱昂的印象全面改观。2008年，莱昂有《谎言之躯》和《革命之路》两部影片上映，在《革命之路》中，他和《泰坦尼克号》里的拍档凯特·温斯莱特再度携手，2010年的《禁闭岛》是莱昂和马丁的第四次合作，2010年他与名导克里斯托弗·诺兰合作了《盗梦空间》。</span>', 0),
(28, 'Kate Winslet', 'Kate Winslet', '52a5fd344db97.jpg', 0, 'Libra', '181670400', 'England', 'Actor', 1386609972, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　凯特·温斯莱特，英国著名女演员与歌手。曾获得演员工会奖与英国电影学院奖，并在第66届金球奖中以《革命之路》获戏剧类最佳女主角奖，并同时以《生死朗读》获戏剧类最佳女配角奖。凯特·温斯莱特也曾获得格莱美奖，并6次入围奥斯卡奖与艾美奖，最终以《生死朗读》获得奥斯卡最佳女主角奖。她于22岁时第2次入围奥斯卡奖，成为史上最年轻就获得2次入围的演员。《纽约杂志》称赞凯特·温斯莱特是“她的世代中最杰出的英语电影演员”。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　凯特·温斯莱特从电视上开始演员生涯，并在1991年英国广播公司的儿童科幻小说电视系列剧《Dark Season》中演出。然后她在1992年的电视电影《Anglo-Saxon Attitudes》与1993年的电视系列剧《急诊室》中演出。她在电影中的首次演出是彼得·杰克森所执导的《梦幻天堂》，并饰演女主角茱丽叶·休姆，凯特·温斯莱特这次演出受到许多正面的评价。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　之后，凯特·温斯莱特与艾玛·汤普逊演出李安执导的《理智与情感》，并且因此成名（尤其在英国）。凯特·温斯莱特也因这次演出获得英国电影学院奖（最佳女配角奖），并首次入围奥斯卡奖。她在1997年卖座电影《泰坦尼克号》中担任女主角萝丝·道森-卡维特，并因此闻名全球。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　凯特·温斯莱特也受到影评人的喜爱，每部由她所主演的电影大都得到多正面的评价，此外，凯特·温斯莱特还参与了许多低成本独立电影的演出，如《北非情人》、《圣烟烈火情》等，并且为了演出这些影片甚至拒绝了一些出演大制作影片的机会，如《莎翁情史》。在凯特·温斯莱特的演艺生涯中，她经常拒绝在一些高成本的电影中演出，例如《安娜与国王》与《指环王电影三部曲》。她也参加几部历史电影的演出，例如《鹅毛笔》、《泰坦尼克号》与《寻找梦幻岛》，她也因此得到“紧身衣凯特”的外号。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　凯特·温斯莱特在2001年参加李察·艾尔执导的《携手人生》，并因此第3度入围奥斯卡奖。在2004年，她与知名演员金·凯瑞合作演出喜剧《美丽心灵的永恒阳光》，并再度入围奥斯卡最佳女主角奖。凯特·温斯莱特后来以托德·菲尔德执导的《身为人母》第3度入围奥斯卡最佳女主角奖，虽然最后输给海伦·米兰。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　凯特·温斯莱特也在2005年时于美国运通的电视广告中出现。凯特·温斯莱特与列奥那多·狄卡皮欧再度于2008年的《革命之路》中合作，饰演一对1950年代的夫妻。这是他们自从《泰坦尼克号》之后再度合作。她也在2008年参加由德国小说家本哈德·施林克所改编的《生死朗读》。凯特·温斯莱特后来分别以《革命之路》及《生死朗读》获得金球奖最佳女主角与最佳女配角奖，也因此次入围奥斯卡最佳女主角奖。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2011年暌违电视圈多年（她童星时以电视剧入行）的凯特演出的五集电视迷你剧《欲海情魔》，获得了不俗的反响。凯特·温斯莱特也凭借本片中的出色表演，最终获得了美国电视最高奖——第63届艾美奖电视电影类最佳女主角。</span>', 0),
(30, 'Tim Robbins', 'Tim Robbins', '52a5fff05ac7c.jpg', 1, 'Libra', '-353836800', 'California', 'Actor', 1386610672, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　 蒂姆·罗宾斯，原名蒂莫西·佛朗西斯·罗宾斯（Timothy Francis Robbins），生于美国加利福尼亚州西科维纳市，中学就读于 Stuyvesant High School，后升到 University of New York at Plattsburgh，就读两年后再转升到 U.C.L.A.，于 1980年毕业及取得戏剧学位。曾是专业棒球运动员，对演戏情有独钟。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　他还是一位导演、编剧以及制片人。作为演员，他于1992年凭借《超级大玩家》（The Player）荣获戛纳电影节和金球奖的双料影帝，在2004年又凭借《神秘河》（Mystic River）荣获第76届奥斯卡最佳男配角奖。作为导演和编剧，他1995年的作品《死囚上路》（Dead Man Walking）在1996年获得了奥斯卡的三项提名并且在同年的柏林电影节上获得四项大奖。在各个影片中，罗宾斯以精湛的演技，塑造了一个个知性、沉静的银幕形象，为蒂姆·罗宾斯在影坛奠定了结实的基础，被称为好莱坞真正电影艺术家。</span><br />', 0),
(31, 'Morgan Freeman', 'Morgan Freeman', '52a60032626bd.jpg', 1, 'Gemini', '-1028361600', 'Memphis，Tennessee，US', 'Actor', 1386610738, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　摩根·弗里曼 （Morgan Freeman），美国黑人男演员、导演。1989年凭借着在《为戴西小姐开车》中的忠厚诚实、善良勇敢的老司机形象为他赢得了金球奖和全美影评奖。2005年凭借克林特·伊斯特伍德导演的《百万美元宝贝》获得第77届奥斯卡最佳男配角奖。摩根·弗里曼于1990年代成名，并演出过许多著名的好莱坞电影。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　IMDB TOP 001的《肖申克救赎》中，弗里曼塑造的囚犯瑞德的形象更为深入人心。</span>', 0),
(32, 'Gérard Jugnot', 'Gérard Jugnot', '52a603ba43d52.jpg', 1, 'Taurus', '-589017600', 'Paris,France', 'Actor', 1386611642, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　热拉尔·朱诺，法国著名演员、导演。1969年，上高中的热拉尔和一位老师组建了电影爱好者俱乐部，并拍摄了自己的第一部8mm短片。1978年，杰拉尔和同伴一起出演了由他们的戏剧改编的电影《Les Bronzés》，影片取得巨大成功，也为几人的表演历程开启了全新的篇章。外貌平常并秃顶的杰拉尔开始频频出演电影，1987年，他凭《Tandem》中的精彩表演获得第一次恺撒奖最佳男演员提名，随后以《Uneépoque formidable……》、《Marthe》和《放牛班的春天》再获3次恺撒奖提名，其中最成功的《放牛班的春天》成为法国电影近年少有的老少皆宜的作品，吸引了法国本土850万观众的青睐，评论界给予了杰拉尔前所未有的赞誉。除了表演，杰拉尔还是异常活跃的编剧和导演，才华横溢的他最近还开始尝试制片工作</span>', 0),
(33, 'Richard Gere', 'Richard Gere', '52a606c7f20a3.jpg', 1, 'Virgo', '-641808000', 'Philadelphia，Pennsylvania,US', 'Actor', 1386612424, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　 理查·基尔 Richard Tiffany Gere （又译：理查·蒂凡尼·基尔）是著名的美国电影演员、好莱坞巨星，代表作有《美国舞男》、《军官与绅士》、《一级恐惧》、《芝加哥》、《麻雀变凤凰》等。曾获金球奖喜剧与音乐类最佳男主角奖。理查·基尔是美国佛教徒。</span>', 0);
INSERT INTO `mm_actors` (`id`, `cname`, `ename`, `picname`, `sex`, `constellation`, `birthday`, `bornaddress`, `professtion`, `addtime`, `intro`, `hasphotos`) VALUES
(34, 'Sarah Roemer', 'Sarah Roemer', '52a60709b8e1c.jpg', 0, 'Virgo', '462470400', 'San Diego', 'Actor', 1386612489, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　莎拉·克里斯汀·罗默尔（出生于1984年8月28日）是一名美国的演员和模特。她于2000年在7-11买咖啡是被星探发现开始模特生涯。后因出演电影《后窗惊魂》、《精神病院》和《啦啦队夏令营》而被人熟知。她最近出演NBC出品的恐怖电视剧《惊世》。这是她第一部电视作品。</span>', 0),
(35, 'Wen Jiang', 'Wen Jiang', '52a6089744e5b.jpg', 1, 'Capricorn', '-220608000', 'Tangshan, China', 'Actor', 1386612887, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　姜文，中国著名电影演员、电影导演。他和葛优以及陈佩斯被认为是中国三大实力派艺人的代表人物之一，又被港台许多人士形容为内地“张学友”。1980年考入中央戏剧学院表演系。1984年毕业于中戏，同年进入中国青年艺术剧院，主演了《家庭大事》、《高加索灰阑记》等优秀剧目。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　姜文属于演艺圈中的实力派人物，能演能导，属于当代中国电影界的最重要人物之一。姜文主演的《芙蓉镇》、《红高粱》为其奠定了在中国演艺界的地位。1993年，他主演了由郑晓龙、冯小刚、艾未未等制作的电视剧《北京人在纽约》，该剧在中国大陆大获成功，成为历史上收视率最高的中国电视剧之一，其饰演的王启明个性鲜明，形象深入人心。他收放自如的表演，豪放的气质都得到了观众们的注目。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　姜文最重要的执导作品之一为1993年自编自导的《阳光灿烂的日子》。本片根据北京作家王朔的小说《动物凶猛》改编而成，讲述了文化大革命时期一群红卫兵小青年的成长故事。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1998年，姜文执导并主演的《鬼子来了》一片也以独特的视角来反映抗日战争时期侵略者与当地农民的一段啼笑皆非的故事，本片由于触及敏感的话题和非传统的表现手法，至今未能在中国大陆地区公映，但曾在中央电视台电影频道播出过。在该片拍摄期间，姜文参观了日本东京的靖国神社，引起了国内舆论界的轩然大波。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　事隔10年之后，在2007年，姜文自导自演了其的第三部电影作品《太阳照常升起》，该片以魔幻主义方式，讲述了一个在特别时期，关于人性与欲望的故事。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2010年，姜文与葛优、周润发合作，自导自演了贺岁电影《让子弹飞》，中国票房接近7亿人民币，创当年中国电影票房的纪录。</span>', 0),
(36, 'You Ge', 'You Ge', '52a608d850830.jpg', 1, 'Aries', '-400924800', 'Beijing, China', 'Actor', 1386612952, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　葛优，称得上当今中国最优秀的男演员之一，从演以来已经出演过50多部电影以及10余部电视作品；他不但手捧国内表演最高奖金鸡奖，而且荣登戛纳影帝宝座。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　葛优最初的从艺之路并不顺达，早年曾投考各类艺术团体，却屡试不中。在老一代著名演员也是其父亲葛存壮的点拨下，1979年，以小品《喂猪》叩开全国总文工团的大门，当上话剧演员，接下来的几年只是在舞台上跑龙套。1984年，他才很偶然地被选中在《盛夏和她的未婚夫》中扮演了一个小角色，葛优的名字第一次上了演员表。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　真正给葛优带来星运的是1988年由王朔小说改编的影片《顽主》，他的外型与表演都恰合了王朔笔下那种“冷面热心”幽默成性的小人物，他扮演的银幕形象显得轻松、到位，获当年金鸡奖最佳男演员奖提名。从此，葛优星运亨通。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　北京电视台1992年春节推出的长篇电视系列剧《编辑部的故事》则使成了家喻户晓、最有观众缘的大明星。在近10年的时间里，葛优扮演了20多位影视人物，其中1993年的《活着》可视为其表演上的转折点，前期他扮演的角色大致可分为两类，一类是在一些名导演的影片中出演“反派”配角，大多是旧时代的故事。另一类则是当代生活中的喜剧式小人物。葛优的配角戏往往很有光彩。1988年，他在张艺谋执导的《代号“美洲豹”》中饰演一名劫机犯，还存有一丝初试“反派”的生疏。1989年，滕文骥拍《黄河谣》，请葛优扮演土匪头子黑骨头。1991年在何群导演的影片《烈火金刚》中扮演颇有点人情味和骨气的汉奸。接着，葛优又在黄健中的《过年》中饰演好色猥琐又假正经的大姐夫，赢得了“百花奖”最佳男配角奖。1993年陈凯歌的影片《霸王别姬》中又有葛优精彩的表演，袁四爷被押出去枪毙时，还划着台步过戏瘾的那个镜头，已成为人们津津乐道的经典。而在黄蜀芹执导的电视连续剧《围城》中，只寥寥数笔，葛优便把大作家钱钟书笔下的李梅亭描画得栩栩如生，难怪陈凯歌称葛优是“中国最绝的男演员”。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　扮演当代生活中喜剧式的小人物，对葛优而言更是驾轻就熟。他出演的《马路骑士》、《喜剧明星》、《离婚大战》、《上一当》、《消失的女人》、《大撒把》和《父子婚事》等都成为大受观众欢迎的卖座片。值得一提的是在夏刚1992年执导的《大撒把》中，葛优的表演已见出圆润之感，完美地体现了影片的风格。他因此片荣膺金鸡奖影帝桂冠。而张艺谋《活着》中的主人公福贵则为葛优打开了一个表演上的新天地，他也因此而成为1994年的戛纳影帝。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1996年他与姜文联合主演了周晓文执导的大投资影片《秦颂》，饰演悲剧音乐家高渐离。1997年，葛优应香港著名女导演许鞍华之邀请，主演改编自张爱玲小说的影片《半生缘》。葛优以其良好的悟性，内向的性格，使他的表演张驰有致，以大量的平淡衬托瞬间的精彩，令人物形象既贴近生活又不乏味，并使内在的幽默感成为保持人物张力的有效手段。而他的秃头和‘不雅’，于平凡中显出不凡。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　特别是从1997年的影片《甲方乙方》开始，葛优与搭档冯小刚一起开创了中国贺岁电影的局面。之后，由葛优主演、冯小刚导演的《不见不散》、《没完没了》、《大腕》、《手机》等贺岁片在中国获得了票房奇迹，深受观众喜爱，这也让葛优凭借喜剧奠定了自己在影坛的地位。葛优一直这样认为：获国际大奖只是对演员在某一部电影中表演的肯定，并不表示身价的提高。正因为如此，他一如既往地演起老百姓自己的故事，成为现在当之无愧的百姓影帝。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　进入2000年之后，葛优一方面继续出演《卡拉是条狗》、《天下无贼》、《命运呼叫转移》、《气喘吁吁》、《非诚勿扰》等带有喜剧色彩的影片以及贺岁片，另一方面也尝试转型，在《夜宴》、《让子弹飞》、《赵氏孤儿》等重要影片中与冯小刚、姜文、陈凯歌等国内大导演合作，扮演各种角色，演技已成化境。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2011年年底，葛优与英皇公司进行合作，预计拍摄5年3部电影作品。</span>', 0),
(37, 'Yun-Fat Chow', 'Yun-Fat Chow', '52a60917b42e7.jpg', 1, 'Taurus', '-461577600', 'Hongkong', 'Actor', 1386613015, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　 周润发，广东宝安人，1955年5月18日生于香港南丫岛，为新界原居民，著名电影和电视演员，曾经三度获得香港电影金像奖最佳男主角奖，另外也拿到两次台湾电影金马奖最佳男主角头衔。 1980年代与成龙一并成为香港电影市场的票房保证，并创造了多个脍炙人口的经典角色：许文强、小马哥、赌神等多不胜数。1990年代开始后，与成龙、周星驰因为电影票房成绩出色，共同被媒体形容为“双周一成”。他于1995年赴美国好莱坞发展，在拍摄多部电影后获得一定程度上的成功。</span>', 0),
(38, 'Carina Lau', 'Carina Lau', '52a6095532820.jpg', 0, 'Sagittarius', '-128332800', 'Suzhou, China', 'Actor', 1386613077, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　刘嘉玲，1965年出生于苏州，著名影视明星，中国2007年影后。苏浙中学毕业后随父母赴香港，1984年无线电视台艺员训练班第12期结业。1983年在《射雕英雄传》中饰演一位婢女，随后出演的大量电视剧给人感觉日臻成熟。1986年开始与成龙、关之琳等演员合作拍摄多部动作影片。90年代以后演技出色，优秀作品更多。1991年因《阿飞正传》获得金像奖金马奖提名，并荣获法国南特影展最佳女主角奖。1996年赴台演出。2007年获中国影后殊荣。2008年7月，与梁朝伟在南亚佛国不丹完婚。近期出演徐克导演的《狄仁杰之通天帝国》、姜文执导的《让子弹飞》</span>', 0),
(39, 'Monica Bellucci', 'Monica Bellucci', '52a60cf2b543e.jpg', 0, 'Libra', '-165830400', 'Italy', 'Actor', 1386614002, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　莫妮卡·贝鲁奇，出生于意大利的女演员兼模特儿。她凭着意大利电影《西西里的美丽传说》在国际影坛打开知名度，之后亦接连参演了不少好莱坞电影。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　莫妮卡·贝鲁奇拥有难以抗拒的美艳性感，堪称意大利女神。她的美来自于成熟女性的性感诱惑，黑色的大眼睛里燃烧着足以让人融化的热力，曲线玲珑的身材每一寸都在书写着“我是女人”的字样，“意大利首席性感偶像”的称号当之无愧。</span>', 0),
(40, 'Dakota Fanning', 'Dakota Fanning', '52a60f3a27ad6.jpg', 0, 'Pisces', '761932800', 'US', 'Actor', 1386614586, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　 达科塔·范宁1994年2月23日出生在美国佐治亚州Conyers，2000年开始涉足演艺界。在她跨入电影界前，就开始在自家屋边表演。她性格活泼，经常把毛毯塞进衬衣里假装怀孕，而她的妹妹艾丽(Elle)，现在也是演员。达科塔还去过家附近一个剧场，在那里每周孩子们都要为他们的家长献上一出戏。达科塔出色的表现引起了剧场所有者的注意，并建议她的父母安排见经纪人，他们认为她非常地有天赋。范宁一家在远离佐治亚的洛杉矶呆了6周。在那里达科塔得到了她的第一份工作，在众多的候选的小孩里脱颖而出，主演一个全美播放的汰渍广告。她的家庭决定把家搬到洛杉矶，因为达科塔的事业看来发展得很好。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　在这之后，她与一个专业经纪人签约，立刻在电影《雄猫》里得到一个角色。然后在一部叫Father Xmas(2001)的小制作电影里扮演Claire。但是达科塔的好运才刚降临，她参加了为电影《我是山姆》主角所举办的试镜，导演和其他的剧组人员都为她非凡的才能所折服。她的表演天赋立刻为世界闻名，她在电影《步步危机》(2002)中扮演Abby Jennings，其他主演包括查理兹·塞隆。接着在2002年的《情归阿拉巴马》中扮演瑞茜·威瑟斯彭的少年时期。2003年对于达科塔来说是同样辉煌的一年，她又出演了一系列大制作。首先是与麦克·迈尔斯合作，在《戴帽子的猫》里扮演Sally Walden。接着与布莱特妮·墨菲合作，在喜剧《麻辣宝贝》里扮演一个被惯坏的小女孩。2004年，达科塔与丹泽尔·华盛顿合作，接演动作悬疑片《怒火救援》，表演广受好评。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2005年初她在《九条命》中的一个小故事中扮演Maria，接着是与罗伯特·德尼罗合作出演《捉迷藏》。现在，她是好莱坞最炙手可热的童星。《捉迷藏》之后她接演了《世界之战》(War of the Worlds 2005)，在其中扮演汤姆·克鲁斯的女儿。05年9月份还上映了她与库尔特·拉塞尔主演的运动题材家庭影片《梦想家》。2006年年底，她与朱莉娅·罗伯茨合作的家庭片《夏洛特的网》上映。2007年，范宁在戴宝拉·卡姆普梅尔执导的影片《猎犬》中，因出演一名受到暴力性侵犯的幼女而备受关注，影片引发了强烈争议，直到08年9月才得以上映。2008年范宁与黑人女星奎恩·拉提法、詹妮弗·哈德森等合作了充满温情的《蜜蜂的秘密生活》，她扮演的乖巧懂事的莉莉十分讨人喜爱。2009年范宁除了为逐格动画《鬼妈妈》配音外，她还出演了科幻大片《异能》，扮演一个能够透视未来的少女。</span>', 0),
(41, 'Jeremy Irvine', 'Jeremy Irvine', '52a60f6a23ddf.jpg', 1, 'Capricorn', '631123200', 'Cambidge, England', 'Actor', 1386614634, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　杰瑞米·艾文出生在英国，曾在贝德福德郡的一个私立学校贝德福德现代学校学习， 2008年的时候还主演英剧《生活之噬》，年轻的杰瑞米·艾文无疑是好莱坞的幸运儿，作为一名新人，他的电影处女作就是大导演史蒂文·斯皮尔伯格的新作《战马》，并且是担纲任男主角，这样的高起点，让他在好莱坞的星途一片光明。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　在《战马》之后，他还联手达科塔·范宁一起出演《活在当下》以及海伦娜·伯翰·卡特等人主演的大作《远大前程》。另外，新片《铁路人》也有意邀请他饰演年轻时候的科林·费斯。</span>', 0),
(42, 'Kaya Scodelario', 'Kaya Scodelario', '52a60fa36b576.jpg', 0, 'Pisces', '700416000', 'London, England', 'Actor', 1386614691, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　卡雅·斯考达里奥，英国女演员，有着一幅成熟的外表，并且非常上镜。 凭借备受争议的热门青春剧《皮囊》成名 饰Effy Stonem，卡雅扮演主人公托尼（尼古拉斯·霍尔特）的妹妹。 与她阴郁的思想和行为相比，我们的孩子无论怎样都能称得上乖巧。她是Tony的妹妹，她是Tony真正关心的人，但她却总是带来Tony不想看到的结果。 2008年她还出演了大卫·鲍伊之子邓肯·琼斯的长片处女作《月球》，扮演山姆·洛克威尔的女儿。</span>', 0),
(43, 'Tom Hanks', 'Tom Hanks', '52a611c1e5c62.jpg', 1, 'Cancer', '-425462400', 'California, US', 'Actor', 1386615233, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　美国电影男演员，以演技精湛而著称，曾参演多部不同类型电影，饰演角色包括易受攻击的《阿甘》、以灵感主演的《费城故事》、温馨喜剧的漂亮男人在《西雅图不眠夜》中。他曾于1994,1995年获得奥斯卡最佳男主角奖，他是当今好莱坞最具影响力的电影明星之一。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　汤姆·汉克斯于1956年7月9日出生于美国加利福尼亚州奥克兰市，全名叫托马斯·J·汉克斯。父亲艾摩斯·汉克斯是厨师，母亲珍娜·特纳在医院工作。在他5岁时，父母离异，他由当厨师的父亲抚养长大。其后，父亲又结过两次婚，汉克斯又换了两个妈妈，未满10岁的他经常性地经历迁移漂泊的生活，频繁地转学，更换住址。成年后的汉克斯很不愿提起他并不美满的童年。但也正因如此，生活使他学会用一种乐观积极的态度去面对人生。“过去的经验培养出我独立自主的精神”，使他学会用一种乐观积极的态度去面对人生。直到他在加利福尼亚州大学读书时，才突然对表演产生了浓厚的兴趣，加入了学校组织的剧社，从而接触到了专业的知识培养与演技训练。毕业后，汉克斯来到纽约寻求演艺事业的发展。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　由于汉克斯的聪明好学，仅过3年， 他就在《快乐频道》中担任了一个好男人的角色。1979年，汉克斯首次在一部低成本的电影《他知道你孤独》（He Knows You’re Alone）中扮演角色，该片在1980年公映，一代奥斯卡影帝的演艺生涯迈出了第一步。 不久，他搬到洛杉矶并主演了电视连续剧《红妆小子》（Bosom Buddies）。与此同时，他还参加了其他的一些电视剧的演出，比如“Taxi”、“Family Ties”，比较有名的一部是《迷宫与怪兽》（Mazes and Monsters）。汉克斯在1984年担纲演出由迪斯尼公司制作出品的《美人鱼》（Splash）获得的成功，使他开始走上成名之路，但随后情况却不让人乐观。一连串的失败并没有使这位才华横溢的小伙子退缩，1988年，汉克斯领衔主演《飞向未来》(《BIG》1988)大获成功，影片中因其出神入化、形象生动地扮演了一个一夜之间长大成36岁男子的12岁男孩的角色，成功的赋于了孩童的纯真、幽默与顽皮在一个成熟男人的身上，为此他一举获得包括奥斯卡、金球、学院、纽约电影批评家等四个奖项的最佳男主角提名奖。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　汉克斯将自己对生活的体验与理解渗透在影片表演之中，往往带有一种全新的创造，他对喜剧的理解不再是直觉的感触，而是真正体会到了喜剧的深层内涵。他开始对自己作进一步的尝试，拓宽戏路，证明自己并非只是一个会“搞笑”的银幕明星。随着《虚荣的篝火》（《Bonfire of the vanities》1990)与《红粉联盟》(《A league of their own》1992)的极获成功，《西雅图夜未眠》(《Sleepless in SEATTLE》1993)向汉克斯提供了一次展现自己真正的喜剧天才与成熟演技的机会。他扮演的那位诚实正直，忠厚善良，随和机智，幽默风趣，又带有一种淡淡的忧郁的父亲的形象赢得了广大的观众，好评如潮，赞赏铺天，并成为汉克斯演技生涯中的大转折。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1993年的另外一部影片《费城故事》（Philadelphia）把汤姆的演艺生涯推上了第一个高峰，在片中他扮演一名被艾滋病折磨而遭歧视的同性恋律师。这是对他演技的一次重大挑战，为此汤姆亲身体验，付出了巨大的牺牲，“冒最大的风险才意味着可能有最大的收获”。影片征服了评论界和广大的观众，引起了巨大社会反响，他本人也获得了这一年的金球奖和第66届奥斯卡金像奖最佳男主角奖。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　春风得意的汉克斯在1994年迎来了前所未有的荣誉，由于在影片《阿甘正传》（Forrest Gump）中的成功演绎，汉克斯又一次赢得了奥斯卡最佳男主角的金像奖座，并成为有史以来第二位连续两届获得奥斯卡最佳男主角奖的演员（第一位是史宾塞.屈塞 第10届和第11届）。影帝的桂冠也由此稳稳地落在他的头上。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1996年，汉克斯开始涉足新的领域，这一年他自编、自导、自演了影片《挡不住的奇迹》（ That Thing You Do），充分展示了他多才多艺的一面。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1999年，由著名导演斯皮尔博格执导的影片《拯救大兵瑞恩》给汉克斯带来了新的荣誉——第七十一届奥斯卡最佳男主角提名奖，更让人们看到了一个演技日趋成熟的影帝的形象。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1999年汤姆主演了由著名监狱片导演法兰克·达拉邦特执导、改编自畅销作家史蒂芬·金同名小说的《绿色奇迹》（The Green Mile）一片，汉克斯扮演典狱长保罗，与狱中的罪犯发展出一段动人的友谊，剧情动人。汤姆为此片牺牲形象，增肥数十磅。功夫不负有心人，该片在北美上映仅六周，票房即突破一亿美元，成为汤姆第十部票房破亿的巨片。印证了当代美国男星中，汤姆是演技和票房的绝对保证。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1999年在洛杉矶公布的一项投票评选中，汤姆·汉克斯抢走了汤姆·克鲁斯的宝座，荣登“好莱坞最值钱明星”的榜首。可以说，仅从演技上来讲，汤姆绝对可以称得上是当今影坛第一人。他人缘好，从不摆明星架子，有着很好的公共形象。他曾讲过一句话：“我在观众心中的地位是我亲手打造的一张木床，我觉得简直太舒服了”。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　2000年汤姆的新片是《荒岛余生》（CastAway），影片讲述的是汤姆扮演的联邦快递的系统工程师查克，不论是他的私生活或是工作都讲求精准效率，他的个性急躁，因此对一切都讲求速度，加上他有绝对的控制欲，所以他的起居生活和工作行程随时随地都在他的掌握之中。虽然他的事业成功，但是情感却是另一回事。由于他是个超级工作狂，所以很少有时间陪女友凯莉，因此他们的关系出现危机。在一次出差的旅程中，查克搭的小飞机失事，他被困在一座资源贫瘠的无人荒岛，当他失去现代生活的便利以及人与人之间的互动，生活唯一的目的就是求生，他的人生观反而逐渐有所转变，当他发现生活的压力顿时消失，便开始反思人生的目的，最后对于工作、感情，甚至生命本身都有全新的体会和领悟。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　汤姆又开始为此片蓄发及减肥18公斤，忽胖忽瘦，好不辛苦，但体现了汤姆对事业的不懈追求。</span>', 0);
INSERT INTO `mm_actors` (`id`, `cname`, `ename`, `picname`, `sex`, `constellation`, `birthday`, `bornaddress`, `professtion`, `addtime`, `intro`, `hasphotos`) VALUES
(44, 'Robin Wright', 'Robin Wright', '52a611f30b9c3.jpg', 0, 'Aries', '-117878400', 'Dallas,TX, US', 'Actor', 1386615283, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　罗宾·莱特·潘生于1966年4月8日的德克萨斯，年少的无所不为的梦还没散尽，成长的无能为力又滚滚袭来，交织盘旋。莱特小姐在还没有姓“潘”的时候，感性与理性的梦相互交融与摧毁，这般的经历造就了莱特小姐第一个被我们牢记的形象，或许这也是大众最感动的一个形象——《阿甘正传》里面让阿甘魂牵梦绕的珍妮。嬉皮的罗宾在期待，1997年的《浪漫风暴》再次成就了她。片中肖恩·潘扮演的艾迪与罗宾扮演的莫琳是一对恩爱的小夫妻，他们经常浪漫对饮，相拥热舞，也经常大打出手。没有人比他们更相爱，也没有人过得比他们更辛苦。后来有一个邻居对莫琳动手动脚，艾迪出面讨回公道，结果被判十年徒刑。等他出狱后，发现他心爱的妻子已经改嫁，莫琳面对一个进退两难的处境：一边是她的过去，一边是现在；一边是无法解释的激情，一边是永恒不变的真情。而这两个男人，都认为她是世上最好的女人。这是一部美国人诠释现代爱情观的作品，肖恩·潘狂风暴雨般的演技铸造了一段辉煌，而“珍妮”也被夫姓的“潘”所替代。此后，罗宾·莱特·潘改变了她的男人，也改变了自己。《阿甘正传》里面让阿甘魂牵梦绕的珍妮，现在是坏孩子肖恩·潘的妻子，和丈夫一起出演过《恋恋风暴》。1997年的《旧爱》让她获得了西雅图影展的最佳女主角。几年后，在一部语无伦次的《喧闹》中，一堆好莱坞的明星中我们能一眼瞧见肖恩·潘和他的妻子罗宾，放浪显隐在言辞之间尽是世纪末的迷惘和失落。这个时候，肖恩·潘已经跨过了婚姻的门槛，从一个昔日的“坏小子”变成了性格的“才子”。随后的2001年，肖恩·潘自导自演了《代价》大获好评，他的妻子罗宾扮演一个因失去孩子而悲痛欲绝的母亲，面对残酷的犯罪，面对无辜的父母，以及一个没有结果的承诺。</span>', 0),
(45, 'Gary Sinise', 'Gary Sinise', '52a6123079f81.jpg', 1, 'Pisces', '-466934400', 'US', 'Actor', 1386615344, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　加里辛尼斯1955年生于伊利诺斯州蓝岛，是一名美国演员和导演。他有部分意大利血统，父亲是电影剪辑师，很小的时候全家迁往Highland Park。这个有些叛逆的学生成天泡在乐队里，对学业却不甚上心。加里和几个朋友排演了西区故事(West Side Story)虽然剧中只饰演一名诗人但这次经历却让他走上了演员之路。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　高中毕业后他继续在伊利诺伊州立大学读书。1974年，与两个朋友Terry Kinney、Jeff Perry一起，创建了Steppenwolf戏剧公司。起初公司只是在教堂地下室里演出，后来随着规模不断发展壮大，在芝加哥地区获得了较高知名度。随着公司演出不断增加，加里还执导了几部著名剧目。自公司创建之日起，就不断有出色的演员在公司展现自己的演艺天赋并最终成为名人。加里本人也积累了足够的表演和执导的经验。他曾参与制作过该公司30多部作品。1982年他自导自演了电影True West，于1983年获得奥比奖。1988年，加里导演了Miles From Home捧红了影星Richard Gere。1986年执导了大受欢迎的电视剧犯罪故事(Crime Story）。1988年执导了理查基尔(Richard Gere)主演的故事片孔雀东南飞(Miles from Home)。1990年加里的第一部百老汇舞台剧愤怒的葡萄(The Grapes of Wrath)在考特剧院上演时获得了巨大成功。同时，1992年自导自演的影片人鼠之间(Of Mice and Men)也受到影评界热烈好评。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　加里第一次真正引起公众注意是在1994年，他出演了系列迷你剧The Stand，继而因在阿甘正传(Forrest Gump)中扮演丹泰勒(Lieutenant Dan Taylor)中尉的出色表演而获得当年奥斯卡最佳男配角提名。1995年与汤姆汉克斯合演了阿波罗13号，随后又因在HBO电视电影杜鲁门(Truman)所扮演的角色获得金球奖最佳演员奖和演员公会奖以及一项艾美奖提名。1996年，辛尼斯在朗霍华德(Ron Howard)的成功作品绑票通缉令(Ransom)中饰演一名腐败的警官。1998年，在与尼古拉斯凯奇合作蛇眼(Snake Eyes)后，他又靠在迷你剧乔治华莱士(George Wallace)中扮演阿拉巴马州的官员乔治华莱士时的杰出表演而获得艾美奖。其后又接演了火星任务、灵异拼图等一系列票房和口碑相当好的电影。2004年，加里开始在电视剧犯罪现场调查:纽约(CSI: New York)中出演常规角色，纽约犯罪实验室的领头人麦克泰勒(Mac Taylor)。在其中他还向观众展示了他的音乐才华，手持贝斯与乐手Kimo Williams、Carol Williams和Danny Gottlieb一起演奏。这三人均是Lt. Dan Band的成员，该乐队是辛尼斯和Kimo Williams一起于2003年组建，并以他在Forrest Gump中的角色为之命名。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　除了电视和电影工作，辛尼斯还积极参与政治，参与创建了Operation Iraqi Children。布什总统于2008年末授予加里辛尼斯总统国民勋章(Presidential Citizen Medal)，来表彰他为美国军方所做的贡献和他为伊拉克儿童做出的人道主义援助。辛尼斯现在作为American Veterans Disabled for Life Memorial的国家发言人，花费大量的时间和精力来呼吁各方对退伍老兵的关注。</span>', 0),
(46, 'Kai Ko', 'Kai Ko', '52a613ee93da5.jpg', 1, 'Gemini', '677170800', 'Taiwan', 'Actor', 1386615790, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　柯震东，本名柯家凯，1991年6月18日出生，台湾澎湖人。现为私立中国文化大学体育系二年级学生，因出演电影《那些年，我们一起追的女孩》而受到广大观众的喜爱。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　柯震东在电影中就是演出九把刀本人，呈现出不少青春无限的回忆，就连九把刀口中“男孩子第一次的性探险”打手枪也都几近逼真呈现。柯震东回忆起首场戏就来重口味时就笑言因为很紧张所以当时没有笑场，这却让陈妍希在旁吐槽“那场戏他们都很认真，但我们在旁边看的都一直憋笑。”</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　不过一场柯震东背部全裸的戏，让导演九把刀当下直说“你不脱，我们工作人员就脱给你看。”最後他乖乖就范，不过真实生活中的柯爸，也在《那》片中客串柯震东老爸，当时为了支持儿子，决定义气相挺陪儿一起脱！只是原想也全裸的柯爸，最後在九把刀的制止下打消念头。</span>', 0),
(47, 'Michelle Chen', 'Michelle Chen', '52a6141dc6063.jpg', 0, 'Gemini', '423158400', 'Taiwan', 'Actor', 1386615837, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　陈妍希，台湾女演员。拍广告出身，2006年自南加州大学毕业后从美国返回台湾，被智名制作人柴智屏相中签下。陈妍希在南加大主修行销，副修美术，也受过歌舞剧训练，在偶像剧《换换爱》中是她的首次演出。</span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　随后出演偶像剧集《这里发现爱》、《不良校花》、《镜海风云》。2009年，她和台湾新生代小生彭于晏主演电影《听说》，演技获肯定。2011年，她参演九把刀执导的电影《那些年，我们一起追的女孩》，之后人气大涨。2011年，陈妍希还出演了《珍爱林北》、《闪昏》（未播出）、《记得·我们有约》 等电视剧以及影片《爱的面包魂》。</span>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mm_attention`
--

CREATE TABLE `mm_attention` (
  `uid` int(10) unsigned NOT NULL,
  `bid` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_attention`
--

INSERT INTO `mm_attention` (`uid`, `bid`) VALUES
(1, 9),
(2, 1),
(1, 2),
(1, 5),
(1, 6),
(1, 3),
(9, 1),
(6, 1),
(5, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_auser`
--

CREATE TABLE `mm_auser` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(32) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(16) CHARACTER SET latin1 NOT NULL,
  `login_time` int(11) NOT NULL,
  `login_ip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `logintimes` int(10) unsigned NOT NULL DEFAULT '0',
  `score` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mm_auser`
--

INSERT INTO `mm_auser` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `login_time`, `login_ip`, `status`, `logintimes`, `score`) VALUES
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'BLOVEICE', 'bloveice0915@163.com', '18931512685', 1430450454, '0.0.0.0', 0, 0, 0),
(16, 'ice0915', 'c45ccbeaeb70c611b7791e12462fe8e7', 'bloveice', 'bloveice0915', '10010', 1387391010, '127.0.0.1', 0, 0, 0),
(18, 'huizi', 'c3d64fac296ad2afd2dc7d5098d0c051', 'huizi', 'huizi@163.com', '11111', 1387424553, '127.0.0.1', 0, 0, 0),
(19, 'ice1015', '9290299bf9b3351d7f6caa101c5ebc24', 'ICE1015', 'ice1015@163.com', '13911001100', 1387392441, '127.0.0.1', 0, 0, 0),
(20, 'luffy', 'c6f057b86584942e415435ffb1fa93d4', 'luffy', 'luffy@luffy.luffy', '29620639', 1387358086, '127.0.0.1', 0, 0, 0),
(21, 'sherry', 'c6f057b86584942e415435ffb1fa93d4', 'sherry', 'sherry@sherry.com', '123456789', 1387359038, '127.0.0.1', 0, 0, 0),
(22, 'test', '098f6bcd4621d373cade4e832627b4f6', 'Test', 'test@163.com', '1001010086', 1387435644, '192.168.140.250', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mm_dialogue`
--

CREATE TABLE `mm_dialogue` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `source` varchar(64) DEFAULT NULL COMMENT '电影来源',
  `en_dialogue` text COMMENT '英文台词内容',
  `cn_dialogue` text COMMENT '中文台词内容',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '状态显示0新添加 1显示 2不显示'
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mm_dialogue`
--

INSERT INTO `mm_dialogue` (`id`, `source`, `en_dialogue`, `cn_dialogue`, `addtime`, `status`) VALUES
(1, 'As Dreamers Do', 'Happiness is time precipitation, smile is the lonely sad.', 'Happiness is time precipitation, smile is the lonely sad.', 1386077441, 0),
(2, 'The Current', 'If we fell in love again I swear I''d love you right.', 'If we fell in love again I swear I''d love you right.', 1386077441, 0),
(4, 'Usturoi', 'Not pretend to be silent but have no strength to complain.', 'Not pretend to be silent but have no strength to complain.', 1386077441, 0),
(5, 'Under the Blood-Red Sun', 'Everyone has someone in their life that keeps them looking forward to the next day.', 'Everyone has someone in their life that keeps them looking forward to the next day.', 1386077441, 0),
(6, 'Dearly Departed', 'Life is apure flame, and we live by an invisible sun within us.', 'Life is apure flame, and we live by an invisible sun within us.', 1386078240, 0),
(7, 'Ninah''s Dowry', 'Time is not cruelty. Just for it we are too fragile.', 'Time is not cruelty. Just for it we are too fragile.', 1386078441, 0),
(8, 'Dearly Departed', 'Any one thing, as long as be most willing to, always simple.', 'Any one thing, as long as be most willing to, always simple.', 1387334708, 1),
(9, 'Under the Blood-Red Sun', 'The art of being wise is the art of knowing what to overlook.', 'The art of being wise is the art of knowing what to overlook.', 1386165306, 1),
(10, 'Under the Blood-Red Sun', 'There''s always that one song that brings back old memories.', 'There''s always that one song that brings back old memories.', 1386165332, 1),
(11, 'Under the Blood-Red Sun', ' Don‘t cry because it is over, smile because it happened.', ' Don‘t cry because it is over, smile because it happened.', 1386165372, 1),
(12, 'As Dreamers Do', ' Don‘t cry because it is over, smile because it happened.', ' Don‘t cry because it is over, smile because it happened.', 1386165410, 1),
(13, 'As Dreamers Do', 'He misses her, but he missed her.', ' Don‘t cry because it is over, smile because it happened.', 1386165434, 1),
(14, 'As Dreamers Do', 'You can''t change the past, but you can ruin the present by worrying about the future.', 'You can''t change the past, but you can ruin the present by worrying about the future.', 1386165507, 1),
(15, 'Usturoi', 'I''m just a sunflower ,waiting for my only sunshine.', 'I''m just a sunflower ,waiting for my only sunshine.', 1386165545, 1),
(16, 'Usturoi', 'I always love to see the traces of time squat down, like the line by line through my memory. Ants', 'I always love to see the traces of time squat down, like the line by line through my memory. Ants', 1386206216, 2),
(17, 'Usturoi', 'Everyone has someone in their life that keeps them looking forward to the next day\r\n.', 'I always love to see the traces of time squat down, like the line by line through my memory. Ants', 1386206279, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_diary`
--

CREATE TABLE `mm_diary` (
`id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_diary`
--

INSERT INTO `mm_diary` (`id`, `uid`, `title`, `content`, `addtime`) VALUES
(27, 1, '美丽的日子，总是很开心', '<div class="p_content"><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">1912年4月10日，号称 “世界工业史上的奇迹”的豪华客轮泰坦尼克号开始了自己的处女航，从英国的南安普顿出发驶往美国纽约。富家少女罗丝（凯特•温丝莱特）与母亲及未婚夫卡尔坐上了头等舱；另一边，放荡不羁的少年画家杰克（莱昂纳多·迪卡普里奥）也在码头的一场赌博中赢得了下等舱的船票。<span>&nbsp;</span></span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　罗丝厌倦了上流社会虚伪的生活，不愿嫁给卡尔，打算投海自尽，被杰克救起。很快，美丽活泼的罗丝与英俊开朗的杰克相爱，杰克带罗丝参加下等舱的舞会、为她画像，二人的感情逐渐升温。<span>&nbsp;</span></span><br style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" /><span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">　　1912年4月14日，星期天晚上，一个风平浪静的夜晚。泰坦尼克号撞上了冰山，“永不沉没的”泰坦尼克号面临沉船的命运，罗丝和杰克刚萌芽的爱情也将经历生死的考验。</span></div><img alt="微笑" src="/mm/1302/Public/dwz/xheditor/xheditor_emot/default/smile.gif" />', 1387430948),
(25, 9, '这是第一篇日志', '这是第一篇日志这是第一篇日志这是第一篇日志', 1387348404),
(26, 9, '我来发布一个日志', '<p>这是一个日志</p><p><img src="/mymovie/Uploads/Diary/52b146e19a9ed.jpg" alt="" />等待<br /></p>', 1387349735),
(28, 1, '今天的心情很好', '今天的心情很好<img src="/mm/1302/Uploads/Diary/52b28ab01db07.jpg" alt="" />', 1387432626),
(29, 16, 'aslkfja;f', 'alsdkfjoaisuvoausdoifqowejfqf', 1430089932);

-- --------------------------------------------------------

--
-- Table structure for table `mm_diarypic`
--

CREATE TABLE `mm_diarypic` (
`id` int(10) unsigned NOT NULL COMMENT ' 主键',
  `tbname` varchar(64) NOT NULL COMMENT '表名',
  `did` int(10) unsigned NOT NULL COMMENT '影评id',
  `picname` varchar(32) NOT NULL COMMENT '影评相关的图片',
  `create_time` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_diarypic`
--

INSERT INTO `mm_diarypic` (`id`, `tbname`, `did`, `picname`, `create_time`) VALUES
(59, 'notice', 28, '52b28ab01db07.jpg', 1387432624),
(58, 'notice', 26, '52b146e19a9ed.jpg', 1387349729);

-- --------------------------------------------------------

--
-- Table structure for table `mm_diaryreply`
--

CREATE TABLE `mm_diaryreply` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `did` int(10) unsigned NOT NULL COMMENT '日记id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `content` text NOT NULL COMMENT '日记回复内容',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复时间',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '状态 3禁言 1正常 2举报'
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_diaryreply`
--

INSERT INTO `mm_diaryreply` (`id`, `did`, `uid`, `content`, `addtime`, `status`) VALUES
(45, 0, 1, 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 1386643818, 1),
(44, 0, 1, 'In hac habitasse platea dictumst.', 1386643139, 1),
(31, 9, 1, '"Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam. Nam tristique tortor eu pede."', 1386589474, 1),
(25, 9, 1, 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat.', 1386589258, 1),
(29, 9, 1, '"Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem."', 1386589470, 1),
(30, 9, 1, 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit.', 1386589472, 1),
(46, 26, 9, '"Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat."', 1387349749, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_filmpic`
--

CREATE TABLE `mm_filmpic` (
`id` int(10) unsigned NOT NULL COMMENT '????',
  `fid` int(10) unsigned NOT NULL COMMENT 'ӰƬid',
  `picname` varchar(64) NOT NULL COMMENT 'ͼƬ'
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_filmpic`
--

INSERT INTO `mm_filmpic` (`id`, `fid`, `picname`) VALUES
(123, 18, '52a37518f1d19.jpg'),
(122, 18, '52a37518ec12c.jpg'),
(121, 18, '52a37518e1601.jpg'),
(120, 18, '52a37518bef89.jpg'),
(131, 29, '52a5f59c4020c.jpg'),
(130, 29, '52a5f59c38dcf.jpg'),
(129, 29, '52a5f59c31858.jpg'),
(128, 17, '52a4bcb9a4b1a.jpg'),
(127, 17, '52a4bcb93cbf2.jpg'),
(124, 18, '52a3751904019.jpg'),
(125, 18, '52a3751911282.jpg'),
(132, 29, '52a5f59c47a17.jpg'),
(133, 29, '52a5f59c50770.jpg'),
(134, 30, '52a5f9e552f94.jpg'),
(135, 30, '52a5f9e55897a.jpg'),
(136, 30, '52a5f9e55d83e.jpg'),
(137, 30, '52a5f9e562115.jpg'),
(138, 30, '52a5f9e567c3a.jpg'),
(139, 31, '52a5fe660d9d9.jpg'),
(140, 31, '52a5fe6614ad8.jpg'),
(141, 31, '52a5fe661a69c.jpg'),
(142, 31, '52a5fe662186d.jpg'),
(143, 31, '52a5fe662758d.jpg'),
(144, 32, '52a600d1b698e.jpg'),
(145, 32, '52a600d1bcdc5.jpg'),
(146, 32, '52a600d1c4374.jpg'),
(147, 32, '52a600d1cbafe.jpg'),
(148, 32, '52a600d1d2108.jpg'),
(149, 33, '52a605613af47.jpg'),
(150, 33, '52a6056140f52.jpg'),
(151, 33, '52a605614a0f8.jpg'),
(152, 33, '52a605615102f.jpg'),
(153, 33, '52a6056156b46.jpg'),
(154, 34, '52a607640155c.jpg'),
(155, 34, '52a6076407f78.jpg'),
(156, 34, '52a60764107a8.jpg'),
(157, 34, '52a607641808c.jpg'),
(158, 34, '52a607641fb0e.jpg'),
(159, 35, '52a609cb60367.jpg'),
(160, 35, '52a609cb669ca.jpg'),
(161, 35, '52a609cb6e34d.jpg'),
(162, 35, '52a609cb74803.jpg'),
(163, 35, '52a609cb7b7a6.jpg'),
(164, 36, '52a60cb939148.jpg'),
(165, 36, '52a60cb93f9f8.jpg'),
(166, 36, '52a60cb946dda.jpg'),
(167, 36, '52a60cb94e0f3.jpg'),
(168, 36, '52a60cb955b1b.jpg'),
(169, 37, '52a60effb6375.jpg'),
(170, 37, '52a60effbbed8.jpg'),
(171, 37, '52a60effc2443.jpg'),
(172, 37, '52a60effc8062.jpg'),
(173, 37, '52a60effce38c.jpg'),
(174, 38, '52a6117933580.jpg'),
(175, 38, '52a611793a91f.jpg'),
(176, 38, '52a6117940e91.jpg'),
(177, 38, '52a6117947c8e.jpg'),
(178, 38, '52a6117969468.jpg'),
(179, 39, '52a6139469348.jpg'),
(180, 39, '52a613946f6ab.jpg'),
(181, 39, '52a613947496d.jpg'),
(182, 39, '52a6139479f75.jpg'),
(183, 39, '52a6139480aac.jpg'),
(184, 43, '52b2994ce1487.jpg'),
(185, 43, '52b2994ce73b5.jpg'),
(186, 43, '52b2994ceeab4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mm_friendlink`
--

CREATE TABLE `mm_friendlink` (
`id` int(10) unsigned NOT NULL,
  `linkname` varchar(30) NOT NULL,
  `url` varchar(60) NOT NULL,
  `picname` varchar(60) NOT NULL,
  `dtime` int(10) NOT NULL,
  `state` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_friendlink`
--

INSERT INTO `mm_friendlink` (`id`, `linkname`, `url`, `picname`, `dtime`, `state`) VALUES
(3, 'msn', 'www.msn.com', '52a5706527e6c.png', 1386573925, 2),
(4, '搜狗', 'www.sougou.com', '52a571ddeb3a9.png', 1386574301, 2),
(5, '百度影视', 'www.baidu.com', '52a572c60d3d2.png', 1386574534, 2),
(6, '百度娱乐', 'www.baidu.com', '52a572d66cec1.png', 1386574550, 2),
(7, '娱乐星闻', 'www.yule.com', '52a572fa20116.png', 1386574586, 2),
(8, '腾讯娱乐', 'www.tengxun.com', '52a5732ad0667.png', 1386574634, 2),
(9, '雅虎', 'www.yahoo.com', '52a573489045a.png', 1386574664, 2),
(10, '有道', 'www.youdao.com', '52a57362d6abd.png', 1386574690, 2),
(11, '谷歌', 'www.guge.com', '52a5738c680f0.png', 1386574732, 2),
(12, 'CCTV', 'www.cctv.com', '52a573a52b0b4.png', 1386574757, 2),
(13, '猫扑', 'www.maopu.com', '52a573bbd2117.png', 1386574779, 2),
(14, '宽屏影院', 'www.v.21cn.com', '52a573ec62916.png', 1386574828, 2),
(15, '谷歌热榜', 'www.guge.com', '52a574003d8f7.png', 1386574848, 2),
(16, 'HOLLYW000', 'www.holl.com', '52a5743722760.png', 1386574903, 2),
(17, '国际在线', 'www.guoji.com', '52a57454a946c.png', 1386574932, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mm_longreview`
--

CREATE TABLE `mm_longreview` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `fid` int(10) unsigned NOT NULL COMMENT '影片id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `title` varchar(32) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '长评内容',
  `rnum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复数',
  `unum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '有用数',
  `vnum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '无用数',
  `ptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态 1正常 2举报 3禁言'
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_longreview`
--

INSERT INTO `mm_longreview` (`id`, `fid`, `uid`, `title`, `content`, `rnum`, `unum`, `vnum`, `ptime`, `status`) VALUES
(2, 30, 1, 'asldfkajofiq', '<p align="center">◇ In Giuseppe Tornatore''s "Malena", the young woman at the center of the story, suffers that kind of sexual predatory practice from all the men in the little town in Sicily where she lives. It appears Italian men, then, as well as now, can express anything at all, especially for their big friends'' benefit, their opinions of how they feel about a woman. Even the town''s ladies have no qualms in shouting nasty things as Malena passes them by.<img alt="smile" src="/mymovie/Public/dwz/xheditor/xheditor_emot/default/smile.gif" /><br />', 0, 0, 34, 1387358931, 1),
(3, 31, 1, 'adsofiuqw', '																		<p><img src="/MM/1302/Uploads/Review/52b1692078982.jpg" alt="" width="600" />&nbsp;&nbsp;&nbsp;&nbsp; <br /></p><p><span style="color:#993300;">&nbsp;&nbsp;&nbsp; The film takes place during the last days of WWII. Malena''s husband has gone to war, but he never returns. She is left to fend for herself under the most extreme circumstances. In order to make ends meet, all the men in town offer Malena anything so they can get favors from her in return.</span></p><p><span style="color:#993300;">&nbsp;&nbsp;&nbsp; The film takes place during the last days of WWII. Malena''s husband has gone to war, but he never returns. She is left to fend for herself under the most extreme circumstances. In order to make ends meet, all the men in town offer Malena anything so they can get favors from her in return.</span></p><p><span style="color:#993300;">&nbsp;&nbsp;&nbsp; The film takes place during the last days of WWII. Malena''s husband has gone to war, but he never returns. She is left to fend for herself under the most extreme circumstances. In order to make ends meet, all the men in town offer Malena anything so they can get favors from her in return.<br /></span></p><p><span style="color:#993300;">My Movie<br /></span></p><p align="left"><br /></p><p align="left"><br /></p>', 12, 0, 97, 1387437069, 1),
(4, 33, 2, 'aifhqsldfh', 'oung Giuseppe Sulfaro is seen as the appealing Renato Amoroso, the young man awakening to his own sexuality. He lives just to spy on the woman that has captured his imagination, and even in his solitary gratification she plays a large role in his vivid imagination.', 0, 0, 14, 1386498291, 2),
(9, 29, 1, 'asodfiqf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 0, 1386262455, 2),
(14, 31, 1, 'asdflqf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 4, 0, 30, 1387358783, 2),
(45, 39, 1, 'asljhclasd', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 1, 1387436802, 1),
(46, 38, 1, 'asudgfoiq', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 1, 1387436825, 1),
(30, 35, 1, 'akjsdflq', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 4, 0, 21, 1387358596, 1),
(31, 36, 1, 'alufa', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 4, 1387358904, 1),
(32, 32, 1, 'alsfhalduf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 1, 0, 11, 1387358655, 2),
(34, 36, 6, 'asdkfhads', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 3, 1386731526, 1),
(37, 30, 7, 'aslkjdfalksdf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 2, 1387178570, 1),
(40, 32, 1, 'adsfhgqwf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 1, 1387329261, 2),
(41, 36, 1, 'asldjkfhasd', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 1, 1387329295, 1),
(42, 31, 1, 'adskjfhasdlf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 1, 0, 3, 1387329313, 1),
(43, 30, 1, 'asdfjahsdf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 0, 0, 2, 1387338027, 1),
(44, 32, 9, 'asdfahlsdf', '"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi."', 1, 0, 6, 1387348149, 1),
(48, 32, 17, 'Hello!', 'aasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xvaasdfasdifhpqwhfkdsnvpasidyfpqwhefakjdsv;xv', 1, 0, 3, 1430113910, 1),
(49, 31, 19, 'Titanic', 'asdfahsdiasdvpasdvoaiwfnkawdnvalsdhvaisdhaoidsfa', 0, 0, 1, 1430158916, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_message`
--

CREATE TABLE `mm_message` (
`id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL,
  `uid1` int(10) unsigned NOT NULL,
  `uid2` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_message`
--

INSERT INTO `mm_message` (`id`, `content`, `addtime`, `uid1`, `uid2`) VALUES
(8, 'doinsertdoinsertdoinsert', 1386643834, 1, 1),
(2, 'asdfasovhaosdfa', 111111, 1, 2),
(3, 'asdfasdfkdsjfhasdkfjahkjdsf', 11, 1, 2),
(4, 'askdjfhlafhqf', 13322, 1, 1),
(7, 'doinsertdoinsertdoinsert', 1386643829, 1, 1),
(9, 'doinsertdoinsert', 1386643839, 1, 1),
(10, 'afhaksdjfhqwkjfqd', 1386645382, 1, 1),
(34, 'wfhasdbvamnbvaksjdf', 1387172378, 1, 1),
(19, 'ajhsfvqjwfqsdf', 1386667429, 1, 2),
(40, 'qiuwgefhjadbajsdasd', 1387431272, 1, 1),
(25, 'qiwuegfadsfalsdvasdv', 1387165671, 2, 1),
(27, '111', 1387167014, 11, 22),
(37, 'asdjhgasdluaflaidwf', 1387179940, 1, 1),
(38, 'aiudfgqlwjfq', 1387348443, 9, 9),
(41, 'aosifuoqwiqwfa', 1430089947, 16, 16);

-- --------------------------------------------------------

--
-- Table structure for table `mm_mnews`
--

CREATE TABLE `mm_mnews` (
`id` int(10) NOT NULL,
  `author` varchar(12) NOT NULL,
  `edit` varchar(12) NOT NULL,
  `source` varchar(32) NOT NULL,
  `picname` varchar(32) NOT NULL,
  `looknum` int(10) NOT NULL,
  `title` varchar(32) NOT NULL,
  `title2` varchar(32) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `explain` text NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `belong` smallint(6) NOT NULL DEFAULT '1',
  `state` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_mnews`
--

INSERT INTO `mm_mnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `content`, `addtime`, `status`, `belong`, `state`) VALUES
(51, '飞鸟', '飞鸟', 'MyMovie', '52a43cfc3dbc4.jpg', 86, '《终结者》美剧版启动', '《终结者》启动 搭载全新电影三部曲', '即将到来的2014年是《终结者》诞生30周年的大日子。对于该系列的粉丝来讲，最近更是好消息不断', '即将到来的2014年是《终结者》诞生30周年的大日子。电影版三部曲准备重启。即将到来的2014年是《终结者》诞生30周年的大日子。电影版三部曲准备重启。', '<p align="left" sizset="false" sizcache05887931983193793="735 442 2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 即将到来的2014年是《终结者》诞生30周年的大日子。对于该系列的粉丝来讲，最近更是好消息不断，除了电影版三部曲准备重启之外，安纳布尔纳影业（Annapurna Pictures）和派拉蒙还会联手合作，同时打造美剧版本。</p><p align="left"><br /></p><p sizset="false" sizcache05887931983193793="569 442 0"><img alt="" src="/MM/1302/Uploads/News/article/a_52b1694e64466.jpg" /></p><p><br /></p><p sizset="false" sizcache05887931983193793="786 442 5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 根据《好莱坞报道者》的描述，美剧版的故事将和全新电影三部曲相呼应，都是以1984年第一部《终结者》电影的某个关键时刻为起点，并且选取不同的两个叙述方向。但随着剧情进展，电影版和美剧版会在某些时候产生令人惊喜的交集，迸发出戏剧性的火花。<br /><br /><br />　　《终结者》的美剧版已经敲定编剧人选，他正是《雷神》、《X战警：第一战》的编剧扎克·施坦茨。其实，熟悉终结者系列的粉丝对于施坦茨应该绝不陌生，因为早在2008年-2009年的时候，他就已经参与撰写过以Sarah Connor为主人公的美剧《终结者外传》。　　<br /><br /><img alt="" src="/MM/1302/Uploads/News/article/a_52b1696f02451.jpg" /><br /><br />　　《雷神2》、《冰与火之歌》导演艾伦·泰勒两个月前接过了《终结者》三部曲重启的导棒。在他看来《终结者》前两部是非常好的电影，但是后面两部就没有那么惊喜了。因此，对于自己 提出了“至少都要达到系列前两部的水准”的高要求。<br /><br />　　影片剧本将由《禁闭岛》编剧莱塔·卡罗格里迪斯和《惊声尖叫》系列编剧帕特里克·卢西尔联合执笔。据编剧此前透露，眼下的问题是如果让阿诺饰演的机器人T-800正式亮相。<br /><br />　　演员方面，《终结者》系列代言人阿诺·施瓦辛格将回归出演。《冰与火之歌：权力的游戏》中的“龙女”艾米莉亚·克拉克与《歪小子斯科特》中的布丽·拉尔森，进入最终决选，竞争Sarah Connor一角。除此之外，John Connor这位“救世主”的饰演者也备受关注。据悉导演艾伦·泰勒十分钟意汤姆·哈迪，想请他加盟，不过哈迪暂时还没有看到剧本，最终合作能否谈成还是个未知数。<br /></p>', 1387108439, 4, 1, 2),
(50, '风易', '飞鸟', 'MyMovie', '52a44b841161e.jpg', 5, '“卷福”本尼迪克特·康伯', '“卷福”本尼迪克特·康伯巴奇', ' 被中国观众称为“卷福”的英国演员本尼迪克特·康伯巴奇近日做客美国著名脱口秀节目《吉米鸡毛秀》', '被中国观众称为“卷福”的英国演员本尼迪克特·康伯巴奇近日做客美国著名脱口秀节目被中国观众称为“卷福”的英国演员本尼迪克特·康伯巴奇近日做客美国著名脱口秀节目', '<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 被中国观众称为“卷福”的英国演员本尼迪克特·康伯巴奇近日做客美国著名脱口秀节目《吉米鸡毛秀》，在节目中，这位毕业于哈罗公学的优秀舞台剧演员一展自己的台词功底——把情色意味十足的歌词一本正经地“朗诵”出来。</p><div align="left">　　《吉米鸡毛秀》是美国ABC的一档深夜脱口秀节目，主持人吉米·坎摩尔以经常刁难嘉宾而闻名。这回，他介绍康伯巴奇登场的方式，则是让他正襟危坐，用表演舞台剧的方法读出R&amp;B天王R.Kelly的歌曲《Genius》中的歌词。<br /></div><br /><br /><img src="/MM/1302/Uploads/News/article/a_52b15cbab1709.jpg" alt="" /><br />“卷福”最后对着镜头卖萌<br /><br /><div align="left">　　这段歌词主要描述了歌手与自己情人间调情的场景与话语，情色意味十足。事实上，歌曲名字“Genius”所指的天赋，并不是作者在爱情上异想天开，而是生理上天赋异禀。而康伯巴奇用起伏的语气与丰富的表情，一板一眼地朗诵起来的场景幽默感十足。最后，英国男星不忘卖萌，转向镜头，一个眨眼充满电力。<br /><br />附：R.Kelly《Genius》歌词 （节目中所念部分）<br /><br /></div><p align="left">Body so fit and soft</p><div align="left">I can''t wait to turn it on<br /><br />You got me like la la la la la baby<br /><br />It''s how you make me feel baby<br /><br />I can feel your body floats<br /><br />While I''m kissin on your thighs<br /><br />You got me like la la la la la baby<br /><br />Anticipation''s so crazy<br /><br />I''ll be good to you<br /><br />Promise will make good love to you... promise<br /><br />Go to sleep and when we wake up<br /><br />I''m gonna hit that thing again... promise<br /></div><br />', 1386908412, 1, 1, 2),
(52, '风易', '飞鸟', 'MyMovie', '52a44c3d17f28.jpg', 37, '脱口秀节目《吉米鸡毛秀》', '舞台剧演员一展自己的台词功底', '　这段歌词主要描述了歌手与自己情人间调情的场景与话语，情色意味十足。', '《吉米鸡毛秀》是美国ABC的一档深夜脱口秀节目，主持人吉米·坎摩尔以经常刁难嘉宾而闻名。', '<div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 被中国观众称为“卷福”的英国演员本尼迪克特·康伯巴奇近日做客美国著名脱口秀节目《吉米鸡毛秀》，在节目中，这位毕业于哈罗公学的优秀舞台剧演员一展自己的台词功底——把情色意味十足的歌词一本正经地“朗诵”出来。<br /><br />　　《吉米鸡毛秀》是美国ABC的一档深夜脱口秀节目，主持人吉米·坎摩尔以经常刁难嘉宾而闻名。这回，他介绍康伯巴奇登场的方式，则是让他正襟危坐，用表演舞台剧的方法读出R&amp;B天王R.Kelly的歌曲《Genius》中的歌词。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15ce02dcf0.jpg" alt="" /><br />“卷福”最后对着镜头卖萌<br /><br /><div align="left">　　这段歌词主要描述了歌手与自己情人间调情的场景与话语，情色意味十足。事实上，歌曲名字“Genius”所指的天赋，并不是作者在爱情上异想天开，而是生理上天赋异禀。而康伯巴奇用起伏的语气与丰富的表情，一板一眼地朗诵起来的场景幽默感十足。最后，英国男星不忘卖萌，转向镜头，一个眨眼充满电力。<br /><br />↓点击播放“卷福”朗诵歌词片段↓<br /><br />附：R.Kelly《Genius》歌词 （节目中所念部分）<br /><br />Body so fit and soft<br /><br />I can''t wait to turn it on<br /><br />You got me like la la la la la baby<br /><br />It''s how you make me feel baby<br /><br />I can feel your body floats<br /><br />While I''m kissin on your thighs<br /><br />You got me like la la la la la baby<br /><br />Anticipation''s so crazy<br /><br />I''ll be good to you<br /></div><p align="left">Promise will make good love to you... promise</p><div align="left">Go to sleep and when we wake up<br /><br />I''m gonna hit that thing again... promise<br /><br />(编辑：Yang)<br /></div><br />', 1386708461, 1, 1, 2),
(53, '网讯', '飞鸟', 'MyMovie', '52a44d00c8479.jpg', 6, '保罗·沃克在美国加州洛杉', '保罗·沃克在美国加州洛杉矶洛杉', '《速度与激情》系列男主角保罗·沃克在美国加州洛杉矶圣塔克拉利塔的一起车祸爆炸中身亡，年仅40岁。', '当地时间11月30日下午3点，《速度与激情》系列男主角保罗·沃克在美国加州洛杉矶圣塔克拉利塔的一起车祸爆炸中身亡，年仅40岁。当地时间11月30日下午3点，《速度与激情》系列男主角保罗·沃克在美国加州洛杉矶圣塔克拉利塔的一起车祸爆炸中身亡，年仅40岁。', '<div align="left">R.I.P Paul Walker（1973.9.12-2013.11.30）<br /><br />　 当地时间11月30日下午3点，《速度与激情》系列男主角保罗·沃克在美国加州洛杉矶圣塔克拉利塔的一起车祸爆炸中身亡，年仅40岁。<br /><br />　　保罗·沃克因主演2001年《速度与激情》第一部而蜚声影坛，此后他与范·迪塞尔搭档主演了四部续集（《速度与激情3》因演员大换血除外），成为了这部影史最成功的赛车动作电影系列代言人，阳光俊朗的形象为其赢得了无数影迷。而尚在拍摄中的《速度与激情7》也就成为了他的银幕绝唱。（相关阅读：保罗沃克车祸身亡 &quot;速度与激情7&quot;或延迟但不搁置）<br /><br />　　据美媒消息，沃克当时是参加为菲律宾台风筹款的慈善车展而来到圣塔克拉利塔，他坐在一位朋友开的保时捷车副驾驶上发生了意外。失控车辆撞上路边的树木，随即燃起大火并爆炸。他和那位司机朋友均在爆炸中身亡。当地时间晚间，洛杉矶警方对事故调查结果发布了公告，称“超速是造成惨剧的主要原因”。<br /></div><img src="/MM/1302/Uploads/News/article/a_52b15d1aab775.jpg" alt="" /><br /><br />事故现场留下的保时捷残骸<br /><br /><div align="left">　　事发不久，沃克所属的环球影业公司发表声明，对沃克的去世表示哀悼，全文如下：“环球公司的全体员工都悲痛欲绝。在过去的14年时间里，保罗一直是我们公司最受喜爱和尊敬的成员之一。他的逝世不仅对我们环球公司，对《速度与激情》系列的每一个工作人员和无数粉丝而言，都是一个巨大的损失。我们在此对保罗的家庭奉上最深切、沉痛的哀悼。”<br /><br />　　与沃克搭档主演《速度与激情》系列的男主角范·迪塞尔发表悼文称：“兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。”而尚在拍摄中的《速度与激情7》导演詹姆斯·温也写到：“我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……”<br /><br />2001年《速度与激情》中金发俊朗的保罗·沃克走进了观众视野<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15d299ea1f.jpg" alt="" /><br />保罗·沃克与《速度与激情》系列主创留下的阳光合影<br /><br /><div align="left">twitter账号上沃克为自己写下的简介是：喜好户外，海洋迷，车控……偶尔演戏<br /><br />　　保罗·沃克出生于美国加州的格兰岱尔市。他从小就踏入演艺圈，不但是一个童星，也当过许多广告的模特儿。1998年，保罗·沃克以青春搞笑喜剧《Meet the Deedles》及《欢乐谷》两片的演出，展开真正的演艺生涯。2000年，他成功饰演了《头骨俱乐部》中一名富家子弟，但让他真正走进主流观众视野的当属2001年与范·迪塞尔一同主演的《速度与激情》。影片中他饰演一个卧底警探，他在电影中玩车的酷样，成为当时年轻人最欣羡的帅哥偶像。之后的12年，保罗·沃克一直没有离开过该系列，他健康阳光的形象一直是该系列吸引人的要素之一。就在车祸发生前不久，他还在为宣传新一部《速度与激情7》与范·迪塞尔一同接受采访。<br /><br />　　除了是一位狂热车迷之外，保罗·沃克热爱海洋，曾经的志向是成为海洋生物学家。在2011年，他实现了自己毕生的梦想，在国家地理频道的海洋探险系列片《Expedition Great White》中担任主角。保罗·沃克和前女友在1998年有了一个女儿，名叫Meadow。<br /></div><br />', 1386808487, 1, 1, 2),
(54, '海洋', '倒霉', 'MyMovie', '52a44dcf5e517.jpg', 23, '好莱坞各界齐悼保罗·沃克', '范·迪塞尔：兄弟 我太想念你了。', '　范·迪塞尔：兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。', '詹姆斯·温：我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……詹姆斯·温：我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……', '<div align="left">《速度与激情》众星&amp;好莱坞各界齐悼保罗·沃克<br /></div><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b15d3f43889.jpg" alt="" /><br /><div align="left">范·迪塞尔发表悼文，并贴出了这张与保罗·沃克的合照<br /><br />《速度与激情》众星哀悼--<br /><br />　　范·迪塞尔：兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。<br /><br />　　詹姆斯·温：我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……<br /><br />　　卢达·克里斯：从一开始你就让人感受到你的谦卑。每次你出现，都会带来不同。我们就像兄弟一样，我们的生日相隔只有一天。你会永远在我们的心底留有一个位置，这份记忆将永不磨灭。R.I.P。 <br /><br />　　泰瑞斯·吉布森 ：我如此心痛，没有人能够让我相信这是真的。上帝我向你祈求这不是真的。我真的无法理解。我如此心痛，没有人能让我相信这是真的……我的上帝，我的上帝。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15d4b8eb84.jpg" alt="" /><br />卢达·克里斯贴出《速度与激情6》片末大家庭团聚的一幕表示哀悼<br /><br /><div align="left">好莱坞各界哀悼--<br /><br />　　詹姆斯·弗兰科：沉痛哀悼保罗·沃罗，如此难过。他带来了太多的欢乐。<br /><br />　　瑞恩·菲利普：保罗是个好人。他勤勤恳恳，从未被好莱坞宠冲昏头脑。他知道生活比好莱坞重要得多，并且按照那样去生活。认识你很幸运，老兄。<br /><br />　　亚伦·卡特：我是看着保罗·沃克长大的，他是我的偶像。为他家人的损失和如此令人震惊的噩耗感到无比哀痛。<br /><br />　　罗兰·艾默里奇：为保罗·沃克的噩耗极度伤心。<br /><br /></div><p align="left">　　奥利维亚·王尔德：太让人伤心的夜晚。保罗·沃克是一个真正的善良，低调又充满爱心的人。</p><p><br /></p>', 1387008509, 1, 1, 2),
(55, '泰瑞', '倒霉', 'MyMovie', '52a44ece54cc0.jpg', 22, '《Expedition Great White》', '保罗·沃克出生于美国加州', '保罗·沃克出生于美国加州的格兰岱尔市。他从小就踏入演艺圈，也当过许多广告的模特儿。', '我如此心痛，没有人能够让我相信这是真的。上帝我向你祈求这不是真的。我真的无法理解。我如此心痛，没有人能够让我相信这是真的。上帝我向你祈求这不是真的。我真的无法理解。', '<div align="left">与沃克搭档主演《速度与激情》系列的男主角范·迪塞尔发表悼文称：“兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。”而尚在拍摄中的《速度与激情7》导演詹姆斯·温也写到：“我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……”<br /><br />2001年《速度与激情》中金发俊朗的保罗·沃克走进了观众视野<br /><br />保罗·沃克与《速度与激情》系列主创留下的阳光合影<br /><br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15d7a4de15.jpg" alt="" /><br />twitter账号上沃克为自己写下的简介是：喜好户外，海洋迷，车控……偶尔演戏<br /><br /><div align="left">　　保罗·沃克出生于美国加州的格兰岱尔市。他从小就踏入演艺圈，不但是一个童星，也当过许多广告的模特儿。1998年，保罗·沃克以青春搞笑喜剧《Meet the Deedles》及《欢乐谷》两片的演出，展开真正的演艺生涯。2000年，他成功饰演了《头骨俱乐部》中一名富家子弟，但让他真正走进主流观众视野的当属2001年与范·迪塞尔一同主演的《速度与激情》。影片中他饰演一个卧底警探，他在电影中玩车的酷样，成为当时年轻人最欣羡的帅哥偶像。之后的12年，保罗·沃克一直没有离开过该系列，他健康阳光的形象一直是该系列吸引人的要素之一。就在车祸发生前不久，他还在为宣传新一部《速度与激情7》与范·迪塞尔一同接受采访。<br /><br />　　除了是一位狂热车迷之外，保罗·沃克热爱海洋，曾经的志向是成为海洋生物学家。在2011年，他实现了自己毕生的梦想，在国家地理频道的海洋探险系列片《Expedition Great White》中担任主角。保罗·沃克和前女友在1998年有了一个女儿，名叫Meadow。<br /><br />《速度与激情》众星哀悼--<br /><br />　　范·迪塞尔：兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。<br /><br />　　詹姆斯·温：我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……<br /><br />　　卢达·克里斯：从一开始你就让人感受到你的谦卑。每次你出现，都会带来不同。我们就像兄弟一样，我们的生日相隔只有一天。你会永远在我们的心底留有一个位置，这份记忆将永不磨灭。R.I.P。 <br /><br />　　泰瑞斯·吉布森 ：我如此心痛，没有人能够让我相信这是真的。上帝我向你祈求这不是真的。我真的无法理解。我如此心痛，没有人能让我相信这是真的……我的上帝，我的上帝。<br /><br />&nbsp;好莱坞各界哀悼--<br /><br />　　詹姆斯·弗兰科：沉痛哀悼保罗·沃罗，如此难过。他带来了太多的欢乐。<br /><br />　　瑞恩·菲利普：保罗是个好人。他勤勤恳恳，从未被好莱坞宠冲昏头脑。他知道生活比好莱坞重要得多，并且按照那样去生活。认识你很幸运，老兄。<br /><br />　　亚伦·卡特：我是看着保罗·沃克长大的，他是我的偶像。为他家人的损失和如此令人震惊的噩耗感到无比哀痛。<br />&nbsp;<br />　　罗兰·艾默里奇：为保罗·沃克的噩耗极度伤心。<br /><br />　　奥利维亚·王尔德：太让人伤心的夜晚。保罗·沃克是一个真正的善良，低调又充满爱心的人。<br /><br />　　迈克尔·B·乔丹：生命如此短暂。你在乎的人可能上一秒在那儿，下一秒就永远离开你。不要把生活当成理所当然。安息吧，保罗·沃克。 <br /><br /></div><br />', 1386608539, 1, 1, 2),
(56, '小黄人', '飞鸟', 'MyMovie', '52a44f3f7fe75.jpg', 70, '《神偷奶爸2》小黄人风靡', '《神偷奶爸2》小黄人风靡全球', '2013年最卖座动画电影《神偷奶爸2》已确定引进，于2014年1月10日杀进内地贺岁档。', '2013年最卖座动画电影《神偷奶爸2》已确定引进，有望成为明年第一部进口分账大片，于2014年1月10日杀进内地贺岁档。', '<div align="left">据可靠消息透露，2013年最卖座动画电影《神偷奶爸2》已确定引进，有望成为明年第一部进口分账大片，于2014年1月10日杀进内地贺岁档。<br /><br />《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。<br /><br />　　《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。<br /><br />　　故事承接第一部剧情，主人公格鲁洗心革面给三个养女当起了全职奶爸，然而打击犯罪组织“反恶人联盟”找上门来，把一个对抗恶棍的任务交给了他。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15d9ff293e.jpg" alt="" /><br />奶爸萌娃也是本片的一大卖点<br /><br /><div align="left">　　其实早在三年前《神偷奶爸》第一部问世的时候，可爱的胶囊小黄人形象就已经红遍了网络，被不少影迷所喜爱，但最终影片未能在内地公映。此次虽然有些姗姗来迟，《神偷奶爸2》终于还是弥补了这份遗憾。<br /><br />　　除此之外，影片在中国的表现也将最终对全球动画票房榜进行一次“洗牌”。目前《神偷奶爸2》（排名第五） 与第四名《怪物史瑞克2》之间的差距只有约150万美元，与第三名《海底总动员》差1840万，究竟小黄人军团们能攀升至多高呢？<br /></div><br />', 1387108563, 1, 1, 2),
(57, '蓝天', '倒霉', 'MyMovie', '52a45162c8aa0.jpg', 15, '解密蓝天动画工作室', '配音中的摇滚老炮斯蒂夫·泰勒', '《冰川时代》系列和《里约大冒险》在全球范围内大卖让世界知道了这家成立之初只有6个人的工作室。', '《森林战士》的灵感来自美国作家威廉·乔西的儿童文学《树叶人和勇敢好虫子》，故事讲述了一位小女孩无意中进入了一个神秘的精灵世界，这个世界里面有一群前所未见的生物。', '<div align="left">从一只松鼠到&quot;森林战士&quot; 解密蓝天动画工作室<br /><br />日前，蓝天工作室创始人、本片导演克里斯·韦奇接受了时光网的独家专访，在专访中他揭开了让蓝天工作室与众不同的奥秘。《森林战士》是蓝天工作室的一份野心之作。影片中流光溢彩奇幻世界，不仅让业界一睹蓝天工作室的技术实力，而且让观众打破刻板印象，再一次证明自己在动画界的地位与实力。<br /><br />　时光网特稿 还记得那只在冰天雪地中追逐一个松果的松鼠Scart吗？创造了这个全球观众最喜爱的动画形象之一的蓝天工作室与“冰川之父”克里斯·韦奇带来了他们的新作《森林战士》，从11月29日开始登陆国内院线。 <br /><br />　　《森林战士》的灵感来自美国作家威廉·乔西的儿童文学《树叶人和勇敢好虫子》，故事讲述了一位小女孩无意中进入了一个神秘的精灵世界，这个世界里面有一群前所未见的生物。其实，本片只是蓝天工作室成立以来的第8部动画长片。这家异军突起的动画工作室已成为实力最接近皮克斯与梦工厂的动画力量。<br />&nbsp;<br />　　《冰川时代》系列和《里约大冒险》在全球范围内大卖让世界知道了这家成立之初只有6个人的工作室。不过，也正因为这样，媒体认为蓝天工作室所能驾驭的影片题材只能局限在喜剧上。<br />&nbsp;<br />　　日前，蓝天工作室创始人、本片导演克里斯·韦奇接受了时光网的独家专访，在专访中他揭开了让蓝天工作室与众不同的奥秘。《森林战士》是蓝天工作室的一份野心之作。影片中流光溢彩奇幻世界，不仅让业界一睹蓝天工作室的技术实力，而且让观众打破刻板印象，再一次证明自己在动画界的地位与实力。<br /></div><p sizcache0975447568475792="6298 5648 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b15dc19f2b2.jpg" alt="" /><br /></p>从左到右可以看出《冰川时代》前三部中松鼠动画效果的升级<br /><br /><div align="left">　　克里斯·韦奇在1987年创建了蓝天工作室，当时公司的主要业务只负责给故事片、电视和其他娱乐节目制作特效的镜头。其中最出名的要算《搏击俱乐部》里男主角爱德华·诺顿在幻觉中和他对话的大企鹅，其实《泰坦尼克号》中也有一些镜头来自他们做出的贡献。<br /><br />　　第一次改变蓝天工作室命运的是一只兔子。1998年，在经过了很长一段维持生计的日子之后，蓝天工作室首次推出了动画短片《棕兔夫人》。虽然这部仅7分钟的片子只是简单描述了一只长耳兔在厨房与一只飞蛾不断较量的故事，却是蓝天潜心8年之久的精诚之作。他们的努力得到了回报，该片一举荣获第71届奥斯卡最佳动画短片奖。蓝天工作室得到了福斯的投资。<br /><br />　　《冰川时代》的诞生则让蓝天工作室的命运发生了戏剧性的变化。刚刚经历《冰冻星球》惨败的福斯孤注一掷，裁掉了动画部门，然后和蓝天工作室签了一部3D动画电影的合同，这就是《冰川时代》。<br /><br />　　韦奇回忆道：“起初它只是一个剧本初稿，但根本就不是喜剧，是一个冒险故事，非常严肃。讲的是一个人失去了自己的家人，他的宝宝不见了，有只老虎想吃掉这个孩子，根本就没什么搞笑的东西，但是公司要求把它拍成一部喜剧，所以我沿用了这个初稿，然后尽力把它变得搞笑起来。”<br /></div><br />', 1387008583, 1, 1, 2),
(58, '飞鸟凉', '未来', 'MyMovie', '52a447fa74d5d.jpg', 1, ' 时光网讯 继《星球大战》', ' 时光网讯 继《星球大战》网讯', '迪士尼已与派拉蒙公司达成协议，获得《夺宝奇兵》系列电影未来的发行权和市场宣传权。', ' 时光网讯 继《星球大战》系列、“漫威”超级英雄电影、《布偶大电影》之后，《夺宝奇兵》系列也即将成为迪士尼旗下一员猛将。 时光网讯 继《星球大战》系列、“漫威”超级英雄电影、《布偶大电影》之后，《夺宝奇兵》系列也即将成为迪士尼旗下一员猛将。', '<div align="left">&nbsp;日前，据外媒报道，迪士尼已与派拉蒙公司达成协议，获得《夺宝奇兵》系列电影未来的发行权和市场宣传权。其实，早在去年年底，迪士尼收购卢卡斯电影公司的交易中，就包括了《夺宝奇兵》系列的特许经营权，现在算是铁板钉钉花落迪士尼。这也意味着，迪士尼在没有任何法律障碍或财政障碍的情况下，可以继续发展未来更多的《夺宝奇兵》系列电影。<br /><br />▲派拉蒙割让发行权 仍享有未来营收权 <br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 派拉蒙从1981年史蒂文·斯皮尔伯格执导的《夺宝奇兵》系列开山第一部开始就拥有了该系列的经营权，虽然现在迪士尼现在拥有了《夺宝奇兵》系列的未来，可以制作这个系列接下来的后续电影。但是外媒指出，根据新的协议，派拉蒙仍然负责《夺宝奇兵》系列之前四部的发行，并享有参与未来上映的夺宝奇兵系列电影营收的权利。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 由哈里森·福特领衔主演、史蒂文·斯皮尔伯格担任导演的《夺宝奇兵》系列已经拍了四部：1981年的《法柜奇兵》、1984年的《魔宫传奇》、1989年的《圣战奇兵》，以及2008年的《水晶骷髅王国》。这四部的全球累计票房已高达19.5亿美元，第四部《水晶骷髅王国》曾在全球狂揽7.866亿美元的票房。由此看来，派拉蒙在营收上的“不放手”也是十足的明智。<br /></div><p sizcache0975447568475792="6522 5997 0" sizset="false">&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b15de82afa7.jpg" alt="" /></p>迪士尼乐园的《夺宝奇兵》主题游乐设施<br /><br /><div align="left">▲迪士尼夺宝奇兵缘来已久 乐园主题项目受捧<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 其实迪士尼与《夺宝奇兵》的缘分由来已久，早在1995年，迪士尼乐园就揭幕了“夺宝奇兵探险”主题游乐设施。该设施中有许多原始区域的风景特色，以一条河流贯穿整个园区，两岸展现非洲丛林的一景一物，是充满野性的世外桃源。乘客坐上横冲直撞的飞车直奔宝藏中，沿途有巨型落石，更有怪物向你袭击。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 《夺宝奇兵》主题设置也是迪斯尼乐园中为数不多的刺激项目之一，其灵感完全取材于脍炙人口的《夺宝奇兵》系列电影，名导演乔治卢卡斯也参与制作。该主题设施也是其所属的“冒险世界”项目里最受欢迎的游乐设施，不论何时总是大排长龙，吸引不少游客前来亲身体验电影般的魔幻魅力。<br /><br />▲《夺宝奇兵5》无进展 哈里森福特愿回归<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15dfee9f17.jpg" alt="" /><br /><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 而关于最新一部的《夺宝奇兵5》多年来一直有各种传言，《夺宝奇兵》系列的制片人弗兰克·马歇尔也称自《夺宝奇兵4》之后关于第五部的讨论一直在进行，但是却并没有任何实质性的进展。乔治·卢卡斯也曾透露他曾经跟史蒂文·斯皮尔伯格讨论过故事，但此后也无任何进展。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 但对于影迷们来说，无疑想再次看到哈里森·福特以经典的帽子皮鞭造型开启冒险时刻。72岁的哈里森·福特日前在接受采访时也表示，如果《夺宝奇兵5》开拍，他肯定会想要回归效力，但是考虑到自己年事已高，恐无法胜任。也因此，外媒指出，如果迪士尼要启动《夺宝奇兵》未来续作，可能要为该系列寻求全新的“印第安纳琼斯教授”。<br /></div>', 1387308606, 2, 1, 2),
(59, '倒霉', '倒霉', 'MyMovie', '52a451cde8fc7.jpg', 53, '蓝天工作室收获一座小金人', '让蓝天工作室收获一座小金人', '克里斯·韦奇在1987年创建了蓝天工作室，当时公司的主要业务只负责制作特效的镜头。', '3年之后，搞笑的《冰川时代》问世，大获成功。观众们记住了片中冷色调的冰川世界，还有那只倒霉的松鼠Scrat。', '<div align="left">克里斯·韦奇在1987年创建了蓝天工作室，当时公司的主要业务只负责给故事片、电视和其他娱乐节目制作特效的镜头。其中最出名的要算《搏击俱乐部》里男主角爱德华·诺顿在幻觉中和他对话的大企鹅，其实《泰坦尼克号》中也有一些镜头来自他们做出的贡献。<br /><br />　　第一次改变蓝天工作室命运的是一只兔子。1998年，在经过了很长一段维持生计的日子之后，蓝天工作室首次推出了动画短片《棕兔夫人》。虽然这部仅7分钟的片子只是简单描述了一只长耳兔在厨房与一只飞蛾不断较量的故事，却是蓝天潜心8年之久的精诚之作。他们的努力得到了回报，该片一举荣获第71届奥斯卡最佳动画短片奖。蓝天工作室得到了福斯的投资。<br /><br />　　《冰川时代》的诞生则让蓝天工作室的命运发生了戏剧性的变化。刚刚经历《冰冻星球》惨败的福斯孤注一掷，裁掉了动画部门，然后和蓝天工作室签了一部3D动画电影的合同，这就是《冰川时代》。<br /><br />　　韦奇回忆道：“起初它只是一个剧本初稿，但根本就不是喜剧，是一个冒险故事，非常严肃。讲的是一个人失去了自己的家人，他的宝宝不见了，有只老虎想吃掉这个孩子，根本就没什么搞笑的东西，但是公司要求把它拍成一部喜剧，所以我沿用了这个初稿，然后尽力把它变得搞笑起来。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15e379fa0c.jpg" alt="" /><br /><div align="left">《棕兔夫人》让蓝天工作室收获一座小金人<br /><br />　　3年之后，搞笑的《冰川时代》问世，大获成功。观众们记住了片中冷色调的冰川世界，还有那只倒霉的松鼠Scrat。<br /><br />　　不过观众们并不知道，这只深受欢迎的松鼠在设计之初的寿命只有“5分钟”。“我们的最初设计是一只巨大的猛犸一脚下来把它踩个稀烂，它就挂了。”韦奇说，“这个角色，是因为我想让《冰川时代》的开场更有趣。然后我翻看了一遍我们的设计，找到了我们绘制的最小的角色，那就是一只小松鼠。一开始真的只是《冰川时代》开场前的一个小短片，表现松鼠的不幸历险，最后它抓到松果时，他的使命就结束了。”<br /><br />　　之后，当2009年《冰川时代3》上映后，蓝天工作室已经成为与皮克斯梦工场相提并论的动画工作室。该片是当年的全球动画片票房第一名，全球票房收入达到了8.88亿美元。<br /><br />　　对于这样的成功，韦奇坦言：“你不可能预测到你的作品能有怎样的成绩，你永远不知道影片在观众当中的反响会如何，你也不知道影片最终会变成什么样子，你只是置身于故事当中。”<br /></div><br />', 1386908645, 1, 1, 2),
(60, '成绩', '飞鸟', 'MyMovie', '52a4526cf1b26.jpg', 24, '你不可能预测到你的作品', '你只是置身于故事当中。成绩', '皮克斯与蓝天工作室之间的渊源有多深？《森林战士》在投拍之初差点成为皮克斯的影片。', '对于这样的成功，韦奇坦言：“你不可能预测到你的作品能有怎样的成绩，你永远不知道影片在观众当中的反响会如何，你也不知道影片最终会变成什么样子，你只是置身于故事当中对于这样的成功，韦奇坦言：“你不可能预测到你的作品能有怎样的成绩，你永远不知道影片在观众当中的反响会如何，你也不知道影片最终会变成什么样子，你只是置身于故事当中', '<p align="left">蓝天工作室创始人克里斯·韦</p><div align="left">　　皮克斯与蓝天工作室之间的渊源有多深？《森林战士》在投拍之初差点成为皮克斯的影片。不仅如此，从时间上来看，皮克斯只比蓝天工作室大一岁。从创始人的私交来说，克里斯·韦奇和皮克斯创始人之一约翰·拉塞特有着深厚的友谊。<br /></div><br /><p sizcache0975447568475792="7015 6695 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b15e5e96a14.jpg" alt="" /><br /></p><div align="left">　据报道，韦奇和拉塞特的友谊能追溯到上世纪80年代初。那时他们刚大学毕业，韦奇住在纽约，拉塞特住在加州。根据他的回忆，他有生以来第一次看到的电脑动画正是克里斯·韦奇做的。后来，拉赛特执导皮克斯的经典影片《玩具总动员》，皮克斯也逐步成为动画电影中的王者。<br /><br />　　对韦奇来说，他也从来没有把自己的朋友当作竞争对手。“我从90年代初期开始接触电脑动画制作，我们几乎同时建立了各自的公司。皮克斯在资金上得到了迪士尼和乔布斯的大力支持，然后约翰·拉塞特带来了创意，其他人开发了技术。”韦奇说。<br /><br />　　相比于皮克斯超过1200人的雇员来说，蓝天工作室的成员不到他们的一半。整个工作室都在一个屋子里办公，大家都彼此熟悉。“现在工作室已经有超过500人。我们觉得大家在一块很重要，因为这样才能彼此交流，彼此了解，共同完成一部又一部影片。”韦奇说。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15e7fc8402.jpg" alt="" /><br />《蓝天工作室》与他们的作品<br /><br /><div align="left">　　韦奇认为，这种传统的工作方式正是蓝天工作室最大的优势。在这个背景下，各个环节的人员都可以相互交流，即便在影片完成后对特效有什么意见，还可以继续制作新的镜头加进去。“我不是把剧本、分镜分派出去，搞得像个流水线工厂，各自只管做自己的事情。这个过程让我们的想法越来越明确，越来越独特，更好地融合进你的故事当中。”<br /><br />　　事实上，据《纽约时报》报道，在制作《里约大冒险》时，成员们特地去了动物园对着鸟儿写生，还学了桑巴，观摩了巴西著名的卡泼卫勒舞。“我们有足够的时间，我们会一起看动画效果，观察它的的外观、它的动作、动作的独特性、台词的独特性，我们会记下一些不一样的东西。”韦奇解释说。<br /></div><br />', 1384328662, 3, 1, 2),
(61, '乌有', '未来', 'MyMovie', '52a4490c05e81.jpg', 19, '由索尼哥伦比亚公司出品的', '由索尼哥伦比亚公司出品的出品的', '明夏超级英雄续集大作《超凡蜘蛛侠2》于北京时间12月5日晚21:30整发布2分半首支预告片', '由索尼哥伦比亚公司出品的明夏超级英雄续集大作《超凡蜘蛛侠2》于北京时间12月5日晚21:30整发布2分半首支预告片，时光网全球同步并独家首发中文版预告。由索尼哥伦比亚公司出品的明夏超级英雄续集大作《超凡蜘蛛侠2》于北京时间12月5日晚21:30整发布2分半首支预告片，时光网全球同步并独家首发中文版预告。', '<p sizcache0975447568475792="7307 7046 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b15ea147a68.jpg" alt="" /><br /></p><p>《超凡蜘蛛侠2》横幅海报，三大反派电光人、小绿魔、犀牛人（右起）齐亮相</p><p sizcache0975447568475792="7469 7046 3" sizset="false">&nbsp;由索尼哥伦比亚公司出品的明夏超级英雄续集大作《超凡蜘蛛侠2》于北京时间12月5日晚21:30整发布2分半首支预告片，时光网全球同步并独家首发中文版预告。安德鲁·加菲尔德与艾玛·斯通这对真情侣戏内热恋升温，人气反派“绿魔”父子齐亮相，“电光人”向小蜘蛛霸气宣战。预告片展露了蜘蛛侠与三大反派的连场惊险缠斗，正呼应了预告片末的宣传语：最伟大的战役即将打响。本片将于2014年5月2日以2D/3D/IMAX 3D格式北美上映，并有望引进中国内地。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 正如预告片中蜘蛛侠姨妈（莎莉·菲尔德 饰）所说的：秘密需要付出代价，真相也如此。本集中“蜘蛛侠”彼得·帕克将追寻着父亲理查德·帕克的足迹，继续探寻自己的身世之谜，而最终他发现自己面对的所有敌人都和父亲曾供职的一家科研公司有关：奥氏集团（OsCorp，也就是上一集中大反派“蜥蜴博士”科研室所在的公司）。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 接下来，预告片中亮出了一枚惊人“彩蛋”。在下面这个镜头中，我们可以看到一排陈列柜，右边便是曾在山姆·雷米执导的《蜘蛛侠2》中登场的大反派“章鱼博士（Doc Ock）”的机械义肢，而左边则是尚未登上银幕的另一位反派“秃鹰”（Vulture）的一对机械翅膀。<br /><br /><img src="/MM/1302/Uploads/News/article/a_52b15edf0b06b.jpg" alt="" /><br />预告片中的这个镜头暗藏了新《蜘蛛侠》系列反派六人组的线索<br /><br />　这枚彩蛋印证了此前在影片片场拍到的“险恶六人组（Sinister Six）”标志。这是一个以“章鱼博士”为首的反派团体，最早在1964年的《蜘蛛侠》年刊中登场，其成员包括电光人（Electro）、秃鹰（Vulture）、猎人克莱文（Kraven）、沙魔（Sandman）、致幻客（Mysterio），他们个个都是蜘蛛侠的劲敌。随着“电光人”在本集登场，这或许意味着新《蜘蛛侠》系列将把“秃鹰”等其他反派也陆续搬上银幕。其中“沙魔”曾于2007年在山姆·雷米执导的《蜘蛛侠3》中登场。<br /><br />　　《超凡蜘蛛侠2》中的三位反派阵容强大，“犀牛人”由戏骨保罗·吉亚玛提饰演，黑人影帝杰米·福克斯以狰狞面容出演“电光人”，80后小生戴恩·德哈恩则以迥异于山姆·雷米版中詹姆斯·弗兰科的阴郁气质，诠释出一个全新的“小绿魔”。<br /></p>', 1386828707, 2, 1, 2),
(62, '03333333330', '倒霉', '033333333333', '52a44a6f53495.jpg', 2, '蜘蛛侠告诉爱人 这是我的宿命', '告别了那句“能力越大责任越大”', '这或许意味着新《蜘蛛侠》系列将把“秃鹰”等其他反派也陆续搬上银幕。', '　《超凡蜘蛛侠2》中的三位反派阵容强大，“犀牛人”由戏骨保罗·吉亚玛提饰演，黑人影帝杰米·福克斯以狰狞面容出演“电光人”，80后小生戴恩·德哈恩则以迥异于山姆·', '<p align="left">这枚彩蛋印证了此前在影片片场拍到的“险恶六人组（Sinister Six）”标志。这是一个以“章鱼博士”为首的反派团体，最早在1964年的《蜘蛛侠》年刊中登场，其成员包括电光人（Electro）、秃鹰（Vulture）、猎人克莱文（Kraven）、沙魔（Sandman）、致幻客（Mysterio），他们个个都是蜘蛛侠的劲敌。随着“电光人”在本集登场，这或许意味着新《蜘蛛侠》系列将把“秃鹰”等其他反派也陆续搬上银幕。其中“沙魔”曾于2007年在山姆·雷米执导的《蜘蛛侠3》中登场。<br /></p><p sizcache0975447568475792="7722 7415 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b15f3f6fce7.jpg" alt="" /><br /></p><p>垂死的“老绿魔”诺曼·奥斯本（克里斯·库柏 饰）让“小绿魔”接过衣钵<br /></p><p sizcache0975447568475792="8384 7415 15" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b15f6120fe6.jpg" alt="" /><br />“蜘蛛侠”彼得·帕克发现父亲留下的地下秘密实验室<br /><br /><img src="/MM/1302/Uploads/News/article/a_52b15f744723e.jpg" alt="" /><br />告别了那句“能力越大责任越大”，蜘蛛侠告诉爱人 这是我的宿命<br /><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b15f90811ca.jpg" alt="" /><br />能控制电流的“电光人”令本集的动作场面更为炫目<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 《超凡蜘蛛侠2》由前作导演马克·韦布执导，本集的配乐将由大师汉斯·季默与美国创作型说唱歌手法瑞尔·威廉姆斯联手打造，这支预告片的配乐也由汉斯·季默亲自操刀。2012年作为“蜘蛛侠”系列重启头炮的《超凡蜘蛛侠》在全球取得了7.5亿美元票房，索尼公司迅速推进续集，并计划以两年一部的速度将其打造成四部曲，第三、四部也已分别定档2016年6月10日、2018年5月4日上映。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 随着今年索尼影业削减每年的影片出品数量，“蜘蛛侠”作为索尼公司手握的超级英雄王牌，无疑将成为其未来电影票房收入的吸金主力。索尼已宣布将为“蜘蛛侠”打造更为庞大的宇宙体系，目前《超凡蜘蛛侠》系列已经有数个新剧本同时开工，其中将加入更多的角色及反派。<br /></p>', 1386728745, 2, 1, 2);
INSERT INTO `mm_mnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `content`, `addtime`, `status`, `belong`, `state`) VALUES
(63, '蓝天', '飞鸟', 'MyMovie', '52a452e546302.jpg', 36, '《森林战士》中流光溢彩', '蓝天工作室有着里程碑式的意义', '因为鼻涕虫身上的粘液时刻都随着动作变换形状，并且反射不同的光线，如何处理成为了渲染引擎的最大考验。 ', '为本片角色配音的大腕包括“天后”碧昂丝·诺尔斯、上届奥斯卡最佳男配角克里斯托弗·瓦尔兹，以及爱尔兰“坏小子”柯林·法瑞尔等', '<div align="left">《森林战士》中流光溢彩的画面离不开蓝天工作室的强大技术实力<br /></div><div align="left"><br />　　《森林战士》对于蓝天工作室有着里程碑式的意义与野心。从场面上看，《森林战士》中的世界既写实又奇幻，电影展现了一个完全不同视角下的森林：小种子看起来跟大石头一样，石头看起来像陡峭的山，花长得又大又复杂，蝴蝶看起来就跟精美的刺绣飞毯一样。<br />&nbsp;<br />　　“我们制作的《冰川时代》一类的影片都是角色类喜剧，都是些会讲话的动物，但在《森林战士》中我想尝试一些新东西，我想让这部影片更接近动作冒险片，而不是简单的卡通片。”韦奇说。<br />&nbsp;<br />　　蓝天工作室制作的每一部电影都有大幅度的进步。在《冰川时代1》中，由于技术限制，动物毛发的真实感、角色眼部的灵动等细节则都被大大简化了。而到了《冰川时代2》时，蓝天工作室开发出了堪称目前世界上最快速的渲染系统，片中心地善良的猛犸象曼尼身上的毛发栩栩如生，水流效果和冰川崩塌的场景也极富技术含量。导演表示透露在制作《冰川时代》系列中遇到的挑战是，“我们技术人员要保证所有电影里的角色必须要跟过去是完全一样的，技术的改进主要是关注在环境的变化上。”<br /></div>&nbsp;<br /><img src="/MM/1302/Uploads/News/article/a_52b15fb3d9d4f.jpg" alt="" /><br />《森林战士》的全明星配音阵容<br /><br /><div align="left">　　在《森林战士》中，已经有了更宏大的叙事，给了蓝天工作室全新的技术挑战。片中，森林女王泰拉身边有两位深受她信任的忠臣，一个是自称“万人迷”的鼻涕虫麻宝，另一个是一心想成为森林战士的蜗牛咕噜宝。在制作过程中，这对软趴趴的搭档成了蓝天最头疼的角色。因为鼻涕虫身上的粘液时刻都随着动作变换形状，并且反射不同的光线，如何处理成为了渲染引擎的最大考验。 <br />&nbsp;<br />　　导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动，每个人的头发都在动，水啊、云啊、树上的叶子啊，我们更加关注这些细节，尽力让影片看上去更加自然真实。”所有的技术都是以服务故事为主，没有哪个技术只是为了让你惊叹说：‘哇看那些叶子在动耶。’”<br />&nbsp;<br />　　为本片角色配音的大腕包括“天后”碧昂丝·诺尔斯、上届奥斯卡最佳男配角克里斯托弗·瓦尔兹，以及爱尔兰“坏小子”柯林·法瑞尔等。大气磅礴的配乐与动作场面让媒体将本片与《阿凡达》相提并论，INDIEWIRE称赞《森林战士》是一场惊艳又绚烂的森林大冒险 ，就像是动画版的《指环王》；CBS则说该片是《爱丽丝梦游仙境》遇上《阿凡达》。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b15ff64c179.jpg" alt="" /><br />泰拉公主的样子是不是特别像哪位天后呢？<br /><br /><div align="left">1．影片中的动作元素灵感来源于张艺谋的《十面埋伏》、《英雄》，还有甄子丹主演的《叶问》。<br /><br />2．当导演韦奇与他的儿子看完《阿凡达》的时候，他儿子第一句话就是：“爸爸，我们刚才看到的《阿凡达》是我想象中的《森林战士》”。 <br /><br />3．导演与美术设计人员努力把片中人物的高度设计成2英寸，这样从他们的眼睛里看到的世界就是这样的：一只蜜蜂的大小与一只狗差不多大，一朵花的大小则像一个瑜伽球。<br /><br />4．配音演员是在角色定型后才选好的。好几年前就创作、设计好了这些角色。如果说片中角色和配音演员有任何外貌上的相似性的话，那纯属巧合。（特指片中泰拉女王与碧昂斯）<br /><br />5．每个动画师每周的工作内容是负责之作影片中2.5秒的画面，为了这2.5秒，他们每周需要花费40-50个小时工作时间。<br /><br />6．所有在影片制作过程中出生的工作人员的孩子，都被工作室称为蓝天宝宝（Blue Sky Babies）<br /><br />7．片中主要人物的制作周期在5个月左右。毛毛虫尼姆则超过了8个月，因为它有六只手，四只腿，身穿招牌的丝绒西装外套，上面装饰着以蝴蝶翅膀为灵感而设计的花纹。<br /><br />8．在设计阶段，创作团队制作了一个贯穿全片的“颜色剧本”，根据不同的环境不同的角色会有不同的代表色。当树叶人为生命而战时，会呈现出各种各样的绿色。反面角色们，那些腐朽者，则有灰色、棕色、蓝色等等各种，随着影片的发展，颜色一直在改变。<br /><br />9．为毛毛虫尼姆配音的是殿堂级摇滚乐队史密斯飞船（Aerosmith）的首脑史蒂芬·泰勒。为另一个角色癞蛤蟆巴符配音的是著名饶舌歌手Pitbull。没有为什么，导演自己也不知道为什么，但是最终效果却不错。<br /><br />10．导演韦奇一般不看重复观看自己的作品，但是在《森林战士》上映后，他在iTunes上花了14.99美元买了《森林战士》的视频。<br /></div><br />', 1386978782, 3, 1, 2),
(64, 'Steven Goldm', '未来', 'MyMovie', '52a453b234308.jpg', 6, '《饥饿游戏2》能不能大卖', '“《饥饿游戏2》能不能大卖”', '《饥饿游戏2：星火燎原》从开画那天起就一路票房飘红。在北美的战绩最突出，首周末就狂揽1.61亿美元', '自11月21日上映以来，“《饥饿游戏2》能不能大卖”这个疑问已经被替换成了——“《饥饿游戏2》为什么卖得这么好？”自11月21日上映以来，“《饥饿游戏2》能不能大卖”这个疑问已经被替换成了——“《饥饿游戏2》为什么卖得这么好？”', '<div align="left">　　《饥饿游戏2：星火燎原》从开画那天起就一路票房飘红。在北美的战绩最突出，首周末就狂揽1.61亿美元，创造了2D电影的开画纪录。如果你对这个数字没有概念，可以参照一下现象级的《哈利波特》系列，“哈波”大结局的首周末票房为1.69亿（而且别忘了该片是3D格式上映）。在海外，《饥饿游戏2》虽不如美国本土声势浩大，但也表现平稳，海外票房已累积达2.29亿。有人推测《饥饿游戏2》最终会在全球卷走10亿美元，如今看来也并非不可能，这对于一部2D青春片来说，已经相当出色。<br /><br />　　《饥饿游戏2》为什么卖得这么好？为什么只有它能够在众多青少年题材中杀出重围，成为真正得以接棒《哈利·波特》与《暮光之城》的现象级粉丝电影？除了影片的质量保证之外，营销也是一大关键因素。《纽约时报》就给狮门影业比了个赞，称他们拥有一套“严谨执行的营销策略。”<br /><br />&nbsp;这套“严谨执行的营销策略”究竟指的是什么？营销团队到底用了什么招数，将这个系列卖得如此火爆？日前，时光网美国特派记者独家专访了狮门影业营销总裁蒂姆·帕伦以及影片制作人妮娜·杰克森，从他们那里一探究竟，来为大家拆解《饥饿游戏2》营销的几大妙招。<br /><br />用书迷做“火种”扩大影响 <br /><br />　　怎么能让更多的人走进电影院？营销团队的思路是，首先要让更多的人捧起小说。“根据我们的经验，读过小说的人会更愿意去看电影。”狮门影业营销总裁蒂姆·帕伦说。<br /><br />　　《饥饿游戏》改编自苏珊娜·柯林斯的同名畅销小说。这部小说在美国非常流行，甚至是一些学校的必读书目，这简直就是为电影营销团队制造了一个培养粉丝的天然园地，他们所要操心的就是如何扩大粉丝数目。蒂姆·帕伦透露，他们开放了许多免费电子版下载渠道，来吸引更多的人去阅读；同时也时刻不松懈校园阵地，与许多学校都建立了合作，争取让《饥饿游戏2》更长久地呆在必读书目的名单上。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b160713a4a5.jpg" alt="" /><br />营销团队坚信书迷才是扩大影响的“”火种<br /><br /><div align="left">　　但问题是，小说在美国虽然流行，在其他国家却并不那么出名。所以片方在其他国家推广影片的时候，采取的是与图书馆合作阅读项目这样的思路，让小说能得到更好的推荐，引起更多人的兴趣。<br /><br />　　对于营销团队来说，书迷就像是票房的“火种”，只有把他们维系好并不断壮大，这个系列的声势才能蔓延开来。“你要努力抓住这些粉丝，戳中他们的兴奋点，借他们的嘴把口碑传出去，为影片宣传造势。”蒂姆·帕伦说。<br /><br />　　按照这种理念执行下去，影片和小说就可以形成一个“滚雪球”式的互相影响，书迷带动影迷数增加，影迷反过来又变成书迷，这样影片越往后拍，潜在的粉丝数就会越多……按照”蒂姆·帕伦的话来说，他们的最终目的就是“如何把最初的小说粉丝群体，扩展成为全球性的电影系列影迷群体。”<br /><br />用时尚渗透电影文化<br /><br />　　对比两部《饥饿游戏》不难发现，第二部在服装上有进行了一次全面升级。在美国，女主角凯妮丝所代表的“酷女孩”风格也正成为新的流行趋势。影片的营销团队在制造这种流行趋势上起到了推波助澜的作用。<br /><br />　　在第一部电影宣传时，宣传团队就在著名社交网站tumblr上建立了名为“国会时装”（ Capitol Couture）的时尚网页。在这里，《饥饿游戏》被全面激活，用蒂姆·帕伦的话说，他们是用这个页面来“模糊现实世界和电影世界之间的界线”。比如打开网页，你可以看到“选择哪款服装去参加抽签仪式”这种广告，而且你真的可以点进去浏览不同类型的着装。狮门还与美国彩妆品牌“封面女郎”合作， 后者开发了电影中12个区的化妆品系列，每个系列都体现着某个区的色彩和风格。当然了，在网页上，伊丽莎白·班克斯饰演的艾菲是最抢眼的时尚模特。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b160a6edf4d.jpg" alt="" /><br />《饥饿游戏》的“国会时装”时尚网页截图<br /><br /><div align="left">　　此外，狮门还与许多时尚品牌合作。时尚网站Net-a-Porter为电影的服装设计师特蕾丝·萨默维尔(Trish Summerville)开设了特辑。美甲品牌China Glaze也推出了特殊的商品系列，加入到了影片的宣传活动中。其他捆绑销售的商业产品包括：嘲笑鸟别针，国家娱乐收藏品协会推出的产品，贺曼公司出品的圣诞装饰，以及玩具产业巨头美泰生产的玩偶——凯妮丝，皮塔，艾菲，芬尼克——这些玩偶在圣诞节日市场有着巨大的商业前景。<br /><br />用新媒体连接“饥饿游戏”各个节点<br /><br />　　狮门还与微软合作推出了“饥饿游戏浏览器”（ The Hunger Games Explorer） 。这款浏览器打开之后可以直接展示电影的官方网站。目前在该网站上可以浏览的内容有：《饥饿游戏2》终极版预告片，视频资料和电影片段；粉丝发文和贡献；在线购票链接，原声大碟和其他商业产品；电子游戏“施惠国逃亡”(Panem Run)的链接；《国会时装》杂志链接等等。你能想到的它都有——只要跟《饥饿游戏2》有关，你就能在这个网站上找到它。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b160b538701.jpg" alt="" /><br /><br />“饥饿游戏浏览器”主页截图<br /><br /><div align="left">　　蒂姆·帕伦表示，这款浏览器是个“非常有张力、有生命力的营销工具”，不是死板的资料堆砌，而是集合了社交功能。“我们把预告片也上传到这里，粉丝把从书中摘录的句子放在网站上创作了很棒的艺术品，他们会上传或者分享这些东西。”<br /><br />　　进入这个浏览器，你就自动进入了《饥饿游戏》的剧情设置。比如当你打不开网页的时候，页面会显示“第三区的子民郑重提示：您使用的浏览器暂不支持此页面。第三区的顾问建议您重新安装下载。”（在《饥饿游戏》中，第三区的主营项目就是科技，大部分居民从事技术工种，比如工程师。）<br /><br />　　交流互动、查找资料、购买影票、收藏周边……这款浏览器可以说沟通了宣传上的各个节点，形成了一个线上线下无所不包的《饥饿游戏》世界。<br /><br />用嘲笑鸟串联起四部作品<br /><br />　　“我们把四部电影当作一个整体来看。”蒂姆·帕伦在采访中在不断强调这一理念。每一部的宣传策略，每一个方案都是一大盘棋中的一小步。<br /><br />　　蒂姆·帕伦还在采访中提示观众，从《饥饿游戏》到第二部《星火燎原》再到第三部《自由幻梦》，电影的logo嘲笑鸟的外形和姿态是有所变化的，它所隐藏的内涵也是不断升级的，嘲笑鸟本身就是一个不断发展的故事。<br /><br />　　看过《饥饿游戏2》的观众应该还记得影片结尾时出现的嘲笑鸟，那就是《饥饿游戏3：自由幻梦（上）》中的新logo。实际上在第一部《饥饿游戏》的时候，宣传团队就已经开始创造第三部的标志了。而决定让它提前出现在第二部结尾，是导演弗朗西斯·劳伦斯的决定。蒂姆·帕伦一直在大赞这是个“天才的主意”，因为从营销的角度考虑，它无疑成了一个承上启下的关键，也让观众对第三部更加期待。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b160cb2ffb0.jpg" alt="" /><br />《饥饿游戏》中的标志——嘲笑鸟的演化<br /><br /><div align="left">　　《饥饿游戏3：自由幻梦（上）》在今年9月就已经开机，而且已经早早确定了2014年11月21日的映期。在宣传方面的工作也已经按部就班地展开。蒂姆·帕伦表示，之前的良好铺垫让他们对之后的工作更有信心，但是如何在第三部的时候做出新鲜感，还是个不小的挑战。<br /><br />　　除了这种“四部一体”的营销思路之外，《饥饿游戏2》还针对不同地域制定了不同的宣传策略。具体来说，比如他们会在中国市场采取更加积极的、大张旗鼓的措施，因为蒂姆·帕伦了解“第一部电影和小说在这里不是太出名。”提起《饥饿游戏2》在中国市场上败给了《地心引力》的事实，蒂姆·帕伦毫不介意，并且表示这对后面几部的宣传毫无影响。“从我们的角度来考虑，整个营销是一部部电影环环相扣的大局。”<br /></div><br />', 1387328826, 3, 1, 2),
(65, '期待', '飞鸟', 'MyMovie', '52a4543c08271.jpg', 12, '票房纪录是如何炼成的', '从开画那天起就一路票房飘红', '这套“严谨执行的营销策略”究竟指的是什么？营销团队到底用了什么招数，将这个系列卖得如此火爆？', '　怎么能让更多的人走进电影院？营销团队的思路是，首先要让更多的人捧起小说。“根据我们的经验，读过小说的人会更愿意去看电影。', '<div align="left">《饥饿游戏2》为什么卖得这么好？为什么只有它能够在众多青少年题材中杀出重围，成为真正得以接棒《哈利·波特》与《暮光之城》的现象级粉丝电影？除了影片的质量保证之外，营销也是一大关键因素。《纽约时报》就给狮门影业比了个赞，称他们拥有一套“严谨执行的营销策略。”<br /><br />　　这套“严谨执行的营销策略”究竟指的是什么？营销团队到底用了什么招数，将这个系列卖得如此火爆？日前，时光网美国特派记者独家专访了狮门影业营销总裁蒂姆·帕伦以及影片制作人妮娜·杰克森，从他们那里一探究竟，来为大家拆解《饥饿游戏2》营销的几大妙招。<br />&nbsp;<br />用书迷做“火种”扩大影响 <br /><br />　　怎么能让更多的人走进电影院？营销团队的思路是，首先要让更多的人捧起小说。“根据我们的经验，读过小说的人会更愿意去看电影。”狮门影业营销总裁蒂姆·帕伦说。<br /><br />　　《饥饿游戏》改编自苏珊娜·柯林斯的同名畅销小说。这部小说在美国非常流行，甚至是一些学校的必读书目，这简直就是为电影营销团队制造了一个培养粉丝的天然园地，他们所要操心的就是如何扩大粉丝数目。蒂姆·帕伦透露，他们开放了许多免费电子版下载渠道，来吸引更多的人去阅读；同时也时刻不松懈校园阵地，与许多学校都建立了合作，争取让《饥饿游戏2》更长久地呆在必读书目的名单上。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1610935f06.jpg" alt="" /><br /><br />营销团队坚信书迷才是扩大影响的“”火种<br /><br /><div align="left">　　但问题是，小说在美国虽然流行，在其他国家却并不那么出名。所以片方在其他国家推广影片的时候，采取的是与图书馆合作阅读项目这样的思路，让小说能得到更好的推荐，引起更多人的兴趣。<br /><br />　　对于营销团队来说，书迷就像是票房的“火种”，只有把他们维系好并不断壮大，这个系列的声势才能蔓延开来。“你要努力抓住这些粉丝，戳中他们的兴奋点，借他们的嘴把口碑传出去，为影片宣传造势。”蒂姆·帕伦说。<br /><br />　　按照这种理念执行下去，影片和小说就可以形成一个“滚雪球”式的互相影响，书迷带动影迷数增加，影迷反过来又变成书迷，这样影片越往后拍，潜在的粉丝数就会越多……按照”蒂姆·帕伦的话来说，他们的最终目的就是“如何把最初的小说粉丝群体，扩展成为全球性的电影系列影迷群体。”<br /><br />用时尚渗透电影文化<br /><br />　　对比两部《饥饿游戏》不难发现，第二部在服装上有进行了一次全面升级。在美国，女主角凯妮丝所代表的“酷女孩”风格也正成为新的流行趋势。影片的营销团队在制造这种流行趋势上起到了推波助澜的作用。<br /><br />　　在第一部电影宣传时，宣传团队就在著名社交网站tumblr上建立了名为“国会时装”（ Capitol Couture）的时尚网页。在这里，《饥饿游戏》被全面激活，用蒂姆·帕伦的话说，他们是用这个页面来“模糊现实世界和电影世界之间的界线”。比如打开网页，你可以看到“选择哪款服装去参加抽签仪式”这种广告，而且你真的可以点进去浏览不同类型的着装。狮门还与美国彩妆品牌“封面女郎”合作， 后者开发了电影中12个区的化妆品系列，每个系列都体现着某个区的色彩和风格。当然了，在网页上，伊丽莎白·班克斯饰演的艾菲是最抢眼的时尚模特。<br /><br /></div><p sizcache0975447568475792="10064 8701 0" sizset="false">此外，狮门还与许多时尚品牌合作。时尚网站Net-a-Porter为电影的服装设计师特蕾丝·萨默维尔(Trish Summerville)开设了特辑。美甲品牌China Glaze也推出了特殊的商品系列，加入到了影片的宣传活动中。其他捆绑销售的商业产品包括：嘲笑鸟别针，国家娱乐收藏品协会推出的产品，贺曼公司出品的圣诞装饰，以及玩具产业巨头美泰生产的玩偶——凯妮丝，皮塔，艾菲，芬尼克——这些玩偶在圣诞节日市场有着巨大的商业前景。<br /><br /><img src="/MM/1302/Uploads/News/article/a_52b160f6012ff.jpg" alt="" /><br /><br />用新媒体连接“饥饿游戏”各个节点<br /><br />　　狮门还与微软合作推出了“饥饿游戏浏览器”（ The Hunger Games Explorer） 。这款浏览器打开之后可以直接展示电影的官方网站。目前在该网站上可以浏览的内容有：《饥饿游戏2》终极版预告片，视频资料和电影片段；粉丝发文和贡献；在线购票链接，原声大碟和其他商业产品；电子游戏“施惠国逃亡”(Panem Run)的链接；《国会时装》杂志链接等等。你能想到的它都有——只要跟《饥饿游戏2》有关，你就能在这个网站上找到它。<br /></p><p>蒂姆·帕伦表示，这款浏览器是个“非常有张力、有生命力的营销工具”，不是死板的资料堆砌，而是集合了社交功能。“我们把预告片也上传到这里，粉丝把从书中摘录的句子放在网站上创作了很棒的艺术品，他们会上传或者分享这些东西。”<br /><br />　　进入这个浏览器，你就自动进入了《饥饿游戏》的剧情设置。比如当你打不开网页的时候，页面会显示“第三区的子民郑重提示：您使用的浏览器暂不支持此页面。第三区的顾问建议您重新安装下载。”（在《饥饿游戏》中，第三区的主营项目就是科技，大部分居民从事技术工种，比如工程师。）<br /><br />　　交流互动、查找资料、购买影票、收藏周边……这款浏览器可以说沟通了宣传上的各个节点，形成了一个线上线下无所不包的《饥饿游戏》世界。<br /></p>&nbsp;<br />', 1387134648, 3, 1, 2),
(66, '映期', '飞鸟', 'MyMovie', '52a4643a306e7.jpg', 17, '《饥饿游戏》中的标志', '不同地域制定了不同的宣传策略。', '对于营销团队来说，书迷就像是票房的“火种”，只有把他们维系好并不断壮大，这个系列的声势才能蔓延开来。', '在今年9月就已经开机，而且已经早早确定了2014年11月21日的映期。在宣传方面的工作也已经按部就班地展开。在今年9月就已经开机，而且已经早早确定了2014年11月21日的映期。在宣传方面的工作也已经按部就班地展开。', '<div align="left">《饥饿游戏》改编自苏珊娜·柯林斯的同名畅销小说。这部小说在美国非常流行，甚至是一些学校的必读书目，这简直就是为电影营销团队制造了一个培养粉丝的天然园地，他们所要操心的就是如何扩大粉丝数目。蒂姆·帕伦透露，他们开放了许多免费电子版下载渠道，来吸引更多的人去阅读；同时也时刻不松懈校园阵地，与许多学校都建立了合作，争取让《饥饿游戏2》更长久地呆在必读书目的名单上。<br /><br />营销团队坚信书迷才是扩大影响的“”火种<br /><br />　　但问题是，小说在美国虽然流行，在其他国家却并不那么出名。所以片方在其他国家推广影片的时候，采取的是与图书馆合作阅读项目这样的思路，让小说能得到更好的推荐，引起更多人的兴趣。<br /><br />　　对于营销团队来说，书迷就像是票房的“火种”，只有把他们维系好并不断壮大，这个系列的声势才能蔓延开来。“你要努力抓住这些粉丝，戳中他们的兴奋点，借他们的嘴把口碑传出去，为影片宣传造势。”蒂姆·帕伦说。<br /><br />　　按照这种理念执行下去，影片和小说就可以形成一个“滚雪球”式的互相影响，书迷带动影迷数增加，影迷反过来又变成书迷，这样影片越往后拍，潜在的粉丝数就会越多……按照”蒂姆·帕伦的话来说，他们的最终目的就是“如何把最初的小说粉丝群体，扩展成为全球性的电影系列影迷群体。”<br /><br />用时尚渗透电影文化<br /><br />　　对比两部《饥饿游戏》不难发现，第二部在服装上有进行了一次全面升级。在美国，女主角凯妮丝所代表的“酷女孩”风格也正成为新的流行趋势。影片的营销团队在制造这种流行趋势上起到了推波助澜的作用。<br /><br />　　在第一部电影宣传时，宣传团队就在著名社交网站tumblr上建立了名为“国会时装”（ Capitol Couture）的时尚网页。在这里，《饥饿游戏》被全面激活，用蒂姆·帕伦的话说，他们是用这个页面来“模糊现实世界和电影世界之间的界线”。比如打开网页，你可以看到“选择哪款服装去参加抽签仪式”这种广告，而且你真的可以点进去浏览不同类型的着装。狮门还与美国彩妆品牌“封面女郎”合作， 后者开发了电影中12个区的化妆品系列，每个系列都体现着某个区的色彩和风格。当然了，在网页上，伊丽莎白·班克斯饰演的艾菲是最抢眼的时尚模特。<br /><br />《饥饿游戏》的“国会时装”时尚网页截图<br /><br />　　此外，狮门还与许多时尚品牌合作。时尚网站Net-a-Porter为电影的服装设计师特蕾丝·萨默维尔(Trish Summerville)开设了特辑。美甲品牌China Glaze也推出了特殊的商品系列，加入到了影片的宣传活动中。其他捆绑销售的商业产品包括：嘲笑鸟别针，国家娱乐收藏品协会推出的产品，贺曼公司出品的圣诞装饰，以及玩具产业巨头美泰生产的玩偶——凯妮丝，皮塔，艾菲，芬尼克——这些玩偶在圣诞节日市场有着巨大的商业前景。<br /><br />用新媒体连接“饥饿游戏”各个节点<br /><br />　　狮门还与微软合作推出了“饥饿游戏浏览器”（ The Hunger Games Explorer） 。这款浏览器打开之后可以直接展示电影的官方网站。目前在该网站上可以浏览的内容有：《饥饿游戏2》终极版预告片，视频资料和电影片段；粉丝发文和贡献；在线购票链接，原声大碟和其他商业产品；电子游戏“施惠国逃亡”(Panem Run)的链接；《国会时装》杂志链接等等。你能想到的它都有——只要跟《饥饿游戏2》有关，你就能在这个网站上找到它。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b16137c79f4.jpg" alt="" /><br />“饥饿游戏浏览器”主页截图<br /><br /><div align="left">　　蒂姆·帕伦表示，这款浏览器是个“非常有张力、有生命力的营销工具”，不是死板的资料堆砌，而是集合了社交功能。“我们把预告片也上传到这里，粉丝把从书中摘录的句子放在网站上创作了很棒的艺术品，他们会上传或者分享这些东西。”<br /><br />　　进入这个浏览器，你就自动进入了《饥饿游戏》的剧情设置。比如当你打不开网页的时候，页面会显示“第三区的子民郑重提示：您使用的浏览器暂不支持此页面。第三区的顾问建议您重新安装下载。”（在《饥饿游戏》中，第三区的主营项目就是科技，大部分居民从事技术工种，比如工程师。）<br /><br />　　交流互动、查找资料、购买影票、收藏周边……这款浏览器可以说沟通了宣传上的各个节点，形成了一个线上线下无所不包的《饥饿游戏》世界。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1612259079.jpg" alt="" /><br />用嘲笑鸟串联起四部作品<br /><br /><div align="left">　　“我们把四部电影当作一个整体来看。”蒂姆·帕伦在采访中在不断强调这一理念。每一部的宣传策略，每一个方案都是一大盘棋中的一小步。<br /><br />　　蒂姆·帕伦还在采访中提示观众，从《饥饿游戏》到第二部《星火燎原》再到第三部《自由幻梦》，电影的logo嘲笑鸟的外形和姿态是有所变化的，它所隐藏的内涵也是不断升级的，嘲笑鸟本身就是一个不断发展的故事。 <br /><br />　　看过《饥饿游戏2》的观众应该还记得影片结尾时出现的嘲笑鸟，那就是《饥饿游戏3：自由幻梦（上）》中的新logo。实际上在第一部《饥饿游戏》的时候，宣传团队就已经开始创造第三部的标志了。而决定让它提前出现在第二部结尾，是导演弗朗西斯·劳伦斯的决定。蒂姆·帕伦一直在大赞这是个“天才的主意”，因为从营销的角度考虑，它无疑成了一个承上启下的关键，也让观众对第三部更加期待。<br /><br />《饥饿游戏》中的标志——嘲笑鸟的演化<br /><br />　　《饥饿游戏3：自由幻梦（上）》在今年9月就已经开机，而且已经早早确定了2014年11月21日的映期。在宣传方面的工作也已经按部就班地展开。蒂姆·帕伦表示，之前的良好铺垫让他们对之后的工作更有信心，但是如何在第三部的时候做出新鲜感，还是个不小的挑战。<br /><br />　　除了这种“四部一体”的营销思路之外，《饥饿游戏2》还针对不同地域制定了不同的宣传策略。具体来说，比如他们会在中国市场采取更加积极的、大张旗鼓的措施，因为蒂姆·帕伦了解“第一部电影和小说在这里不是太出名。”提起《饥饿游戏2》在中国市场上败给了《地心引力》的事实，蒂姆·帕伦毫不介意，并且表示这对后面几部的宣传毫无影响。“从我们的角度来考虑，整个营销是一部部电影环环相扣的大局。”<br /></div><br />', 1386716689, 3, 1, 2),
(67, 'Multivac', '倒霉', 'MyMovie', '52a465121ac49.jpg', 48, '“超人”与DC电影的崛起', '飞身大银幕算起，长达半个世纪', '随着《超人：钢铁之躯》终于亮相，两大美国漫画公司DC和漫威的超级英雄银幕之战即将迎来白热化的新阶段。', '2013年，诺兰和施奈德联手护航的新超人电影，肩负为DC开辟整个“正义联盟”电影系列的重任，成功迈出了最艰难的一步。', '<div align="left">超级英雄银幕之争：“超人”与DC电影的崛起<br />&nbsp;<br />从1978年“超人”飞身大银幕算起，长达半个世纪里，美国两大漫画公司DC与漫威的战场，从漫画延伸到电影，硝烟从未停止。2013年，诺兰和施奈德联手护航的新超人电影，肩负为DC开辟整个“正义联盟”电影系列的重任，成功迈出了最艰难的一步。超人电影的浮沉，不仅见证着DC和漫威的争斗，也诉说着超级英雄电影的历程。<br /><br />　随着《超人：钢铁之躯》终于亮相，两大美国漫画公司DC和漫威的超级英雄银幕之战即将迎来白热化的新阶段。对DC来说，《钢铁之躯》是成败在此一举的关键，不仅仅因为超人是DC旗下最强的英雄，也是因为它的成败更关系到DC用来对抗漫威的“正义联盟”。<br />&nbsp;<br />　　这部由诺兰和施奈德联手护航的新超人电影，一雪《超人归来》的前耻，截止目前北美票房已冲至超级英雄影史前十五，全球票房也已突破4亿美元。尽管离搭建一个完整的DC宇宙还有很长的路要走，但《钢铁之躯》总算不负众望，成功迈出了最艰难的一步。在诺兰颇具个人风格的《蝙蝠侠》系列落幕之后，超人的重启终于让DC摆脱了单打独斗的局面，在超人的率领下，DC漫画的超级英雄们也将“排队”挤进大银幕，与“复仇者联盟”抗衡。<br />&nbsp;<br />　　 从1978年“超人”飞身大银幕算起，长达半个世纪里，美国两大漫画公司DC与漫威的战场，从漫画延伸到电影，硝烟从未停止。超级英雄已成为一座闪亮的金矿，受到好莱坞前所未有的追捧。目前影史全球票房前十中，超级英雄电影独占三席，依次是漫威的《复仇者联盟》、《钢铁侠3》与DC的《黑暗骑士崛起》。<br />&nbsp;<br /></div><p align="left">　　 新千年以来，DC虽缔造了《黑暗骑士》的传奇，然而在漫威精心布局的围攻下，DC银幕势力节节溃败。《复仇者联盟》的横空出世，更是让《正义联盟》如在弦上不得不发，两大最强战队的银幕会师锁定在2015年的夏天。“超人”的第六次起飞，已为DC超级英雄奏响集结的号角，而这一次，不论输赢是谁，对于漫迷和影迷们而言，都将是一次空前的银幕狂欢。</p><p sizcache0975447568475792="10792 9431 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b1615763e31.jpg" alt="" /><br /></p><p>超级英雄银幕之争：“超人”与DC电影的崛起<br />&nbsp;<br />从1978年“超人”飞身大银幕算起，长达半个世纪里，美国两大漫画公司DC与漫威的战场，从漫画延伸到电影，硝烟从未停止。2013年，诺兰和施奈德联手护航的新超人电影，肩负为DC开辟整个“正义联盟”电影系列的重任，成功迈出了最艰难的一步。超人电影的浮沉，不仅见证着DC和漫威的争斗，也诉说着超级英雄电影的历程。<br /><br />　时光网特稿 随着《超人：钢铁之躯》终于亮相，两大美国漫画公司DC和漫威的超级英雄银幕之战即将迎来白热化的新阶段。对DC来说，《钢铁之躯》是成败在此一举的关键，不仅仅因为超人是DC旗下最强的英雄，也是因为它的成败更关系到DC用来对抗漫威的“正义联盟”。<br />&nbsp;<br />　　这部由诺兰和施奈德联手护航的新超人电影，一雪《超人归来》的前耻，截止目前北美票房已冲至超级英雄影史前十五，全球票房也已突破4亿美元。尽管离搭建一个完整的DC宇宙还有很长的路要走，但《钢铁之躯》总算不负众望，成功迈出了最艰难的一步。在诺兰颇具个人风格的《蝙蝠侠》系列落幕之后，超人的重启终于让DC摆脱了单打独斗的局面，在超人的率领下，DC漫画的超级英雄们也将“排队”挤进大银幕，与“复仇者联盟”抗衡。<br />&nbsp;<br />　　 从1978年“超人”飞身大银幕算起，长达半个世纪里，美国两大漫画公司DC与漫威的战场，从漫画延伸到电影，硝烟从未停止。超级英雄已成为一座闪亮的金矿，受到好莱坞前所未有的追捧。目前影史全球票房前十中，超级英雄电影独占三席，依次是漫威的《复仇者联盟》、《钢铁侠3》与DC的《黑暗骑士崛起》。<br />&nbsp;<br />　　 新千年以来，DC虽缔造了《黑暗骑士》的传奇，然而在漫威精心布局的围攻下，DC银幕势力节节溃败。《复仇者联盟》的横空出世，更是让《正义联盟》如在弦上不得不发，两大最强战队的银幕会师锁定在2015年的夏天。“超人”的第六次起飞，已为DC超级英雄奏响集结的号角，而这一次，不论输赢是谁，对于漫迷和影迷们而言，都将是一次空前的银幕狂欢。<br /></p>', 1387352728, 4, 1, 2),
(68, '联盟', '未来', 'MyMovie', '52a465b4c0fc9.jpg', 347, '正义联盟vs复仇者联盟', '正义联盟vs复仇者联盟 DC漫威之争', '美国主流漫画市场主要由DC和漫威两大公司把持，两家各有一批颇具影响力的超级英雄角色。', '66DC拥有超人、蝙蝠侠、绿灯侠、神奇女侠、闪电侠、猫女、绿箭侠等数千名人物；漫威旗下则有蜘蛛侠、钢铁侠、绿巨人、雷神、美国队长、X战警、神奇四侠等，也是人丁兴', '<div align="left">双雄对峙：正义联盟vs复仇者联盟 DC漫威之争<br /><br />　　美国主流漫画市场主要由DC和漫威两大公司把持，两家各有一批颇具影响力的超级英雄角色。其中DC拥有超人、蝙蝠侠、绿灯侠、神奇女侠、闪电侠、猫女、绿箭侠等数千名人物；漫威旗下则有蜘蛛侠、钢铁侠、绿巨人、雷神、美国队长、X战警、神奇四侠等，也是人丁兴旺。<br /><br />　　1960年，DC把自己旗下的英雄揽做一堆，组成了一支战队“正义联盟”。漫威从中得到启发，于1963年也推出了自己的英雄战队——“复仇者联盟”。这两支战队都汇聚了各自公司旗下的顶级高手，精英中的精英。这样做的意义，不仅在于可以让超人和蝙蝠侠等一众英雄并肩作战，更保证了同一公司出品的故事在一定范围内的整体连续性。事件不仅仅只在某一个人的故事里发生，同一世界里的所有人物都有可能受到影响。这就是“宇宙”（Universe）的概念。<br /><br />要将“正义联盟”搬上银幕，DC需要把超级英雄们统一在一个世界观下，这点颇具难度。诺兰的编剧搭档大卫·S·高耶近期便透露说：“诺兰的《蝙蝠侠》三部曲自成一个宇宙，跟《正义联盟》很难兼容。”<br /><br />　　统一的宇宙为电影制作带来了更大的挑战。并非难在特效——在CG无所不能的今天，制作超级英雄的各种神奇能力并不是什么问题。问题在于怎样让观众接受这个诸神、外星人和人类共存的宇宙，并且让他们的能力大体平衡，每部电影的设定还不能相互矛盾。相比之下，DC宇宙的角色较为天马行空，从《钢铁之躯》毁天灭地的战斗规模也可见一斑，而漫威宇宙则更加立足现实，拥有打造统一世界观更良好的基因。<br /></div><p sizcache0975447568475792="11032 9782 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b161837ddfc.jpg" alt="" /></p><p align="left">&nbsp;&nbsp; 漫威公司的电影系列轨迹非常明确：先拍各个角色的故事，后拍英雄战队《复仇者联盟》，这样各部影片的设定是统一的，还在各部影片中埋下相互联系的伏笔，形成一个统一的世界观。然后再从这个世界观延伸开去，一步步把旗下的其他英雄搬上银幕。<br /></p><div align="left">漫威联手派拉蒙打造《钢铁侠》，为这盘很大的棋拉开序幕，绿巨人浩克、雷神托尔、美国队长等一系列人物通过彩蛋串联到一个宇宙中，一个野心版图逐渐显现<br />&nbsp;<br />　　漫威影业于2008年携《钢铁侠》初试锋芒，开始了由《钢铁侠1&amp;2》《雷神》《无敌浩克》《美国队长》和《复仇者联盟》组成的“第一阶段”系列影片。随着《复仇者联盟》全球狂卷15亿美元票房，漫威这一战略已经旗开得胜，“第二阶段”已经开始布局，“第三阶段”也在筹备中，漫威宇宙已现雏形。<br /><br />　　DC却没有这样清晰的战略规划。诺兰的《蝙蝠侠》系列虽然很成功，但三四年才出一部，而且整个世界观自成体系，比不上漫威这样步步为营，全面开花。DC只得把希望寄托在《钢铁之躯》上，期待“超人”这个最老牌、最知名的角色，能够像当年开创整个超级英雄概念一样，为DC开辟整个“正义联盟”电影系列。一切彷如宿命一般，超人电影的浮沉，不仅见证着DC和漫威的争斗，也诉说着超级英雄电影的历程。<br /><br />双雄对峙：正义联盟vs复仇者联盟 DC漫威之争<br /><br />　　美国主流漫画市场主要由DC和漫威两大公司把持，两家各有一批颇具影响力的超级英雄角色。其中DC拥有超人、蝙蝠侠、绿灯侠、神奇女侠、闪电侠、猫女、绿箭侠等数千名人物；漫威旗下则有蜘蛛侠、钢铁侠、绿巨人、雷神、美国队长、X战警、神奇四侠等，也是人丁兴旺。</div><div align="left" sizcache0975447568475792="11112 9782 3" sizset="false"><br /><img src="/MM/1302/Uploads/News/article/a_52b1619b9adea.jpg" alt="" /></div><div align="left">　　1960年，DC把自己旗下的英雄揽做一堆，组成了一支战队“正义联盟”。漫威从中得到启发，于1963年也推出了自己的英雄战队——“复仇者联盟”。这两支战队都汇聚了各自公司旗下的顶级高手，精英中的精英。这样做的意义，不仅在于可以让超人和蝙蝠侠等一众英雄并肩作战，更保证了同一公司出品的故事在一定范围内的整体连续性。事件不仅仅只在某一个人的故事里发生，同一世界里的所有人物都有可能受到影响。这就是“宇宙”（Universe）的概念。<br /><br />要将“正义联盟”搬上银幕，DC需要把超级英雄们统一在一个世界观下，这点颇具难度。诺兰的编剧搭档大卫·S·高耶近期便透露说：“诺兰的《蝙蝠侠》三部曲自成一个宇宙，跟《正义联盟》很难兼容。”<br /><br />　　统一的宇宙为电影制作带来了更大的挑战。并非难在特效——在CG无所不能的今天，制作超级英雄的各种神奇能力并不是什么问题。问题在于怎样让观众接受这个诸神、外星人和人类共存的宇宙，并且让他们的能力大体平衡，每部电影的设定还不能相互矛盾。相比之下，DC宇宙的角色较为天马行空，从《钢铁之躯》毁天灭地的战斗规模也可见一斑，而漫威宇宙则更加立足现实，拥有打造统一世界观更良好的基因。<br /><br />　　漫威公司的电影系列轨迹非常明确：先拍各个角色的故事，后拍英雄战队《复仇者联盟》，这样各部影片的设定是统一的，还在各部影片中埋下相互联系的伏笔，形成一个统一的世界观。然后再从这个世界观延伸开去，一步步把旗下的其他英雄搬上银幕。<br /><br />漫威联手派拉蒙打造《钢铁侠》，为这盘很大的棋拉开序幕，绿巨人浩克、雷神托尔、美国队长等一系列人物通过彩蛋串联到一个宇宙中，一个野心版图逐渐显现<br />&nbsp;<br />　　漫威影业于2008年携《钢铁侠》初试锋芒，开始了由《钢铁侠1&amp;2》《雷神》《无敌浩克》《美国队长》和《复仇者联盟》组成的“第一阶段”系列影片。随着《复仇者联盟》全球狂卷15亿美元票房，漫威这一战略已经旗开得胜，“第二阶段”已经开始布局，“第三阶段”也在筹备中，漫威宇宙已现雏形。<br /><br />　　DC却没有这样清晰的战略规划。诺兰的《蝙蝠侠》系列虽然很成功，但三四年才出一部，而且整个世界观自成体系，比不上漫威这样步步为营，全面开花。DC只得把希望寄托在《钢铁之躯》上，期待“超人”这个最老牌、最知名的角色，能够像当年开创整个超级英雄概念一样，为DC开辟整个“正义联盟”电影系列。一切彷如宿命一般，超人电影的浮沉，不仅见证着DC和漫威的争斗，也诉说着超级英雄电影的历程。<br /></div><br />', 1387152753, 4, 1, 2);
INSERT INTO `mm_mnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `content`, `addtime`, `status`, `belong`, `state`) VALUES
(69, '超人', '未来', 'MyMovie', '52a4661aa9c67.jpg', 92, '《超人》短片独霸大小银幕', '《超人》短片电视剧独霸大小银幕', '1948年，哥伦比亚公司以低成本系列电影的形式，首次将超人搬上了银幕。这是一部15章的黑白片', '《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕《超人》短片电视剧独霸大小银幕', '<div align="left">独领风骚：《超人》短片电视剧独霸大小银幕<br /><br />　　“超人”作为超级英雄的鼻祖，诞生于1938年，当时漫画书本身也是一个新生事物，像超人这样来自外星球、天生神力、平时装成普通人关键时刻化身超级英雄的人物更是绝无仅有，因此一炮而红。出版商DC漫画公司（当时名叫国家期刊出版公司）马上就推出了超人广播剧，随后超人又被改编成动画电影。这个身披红色披风、翱翔天际的英雄，已经为千万美国人所熟知，是时候让他以真人的形象登上银幕了。<br /></div><p sizset="false" sizcache0975447568475792="11332 10167 0"><img alt="" src="/MM/1302/Uploads/News/article/a_52b161b959cfe.jpg" /><br /></p>第一部超人电影于1948年诞生，虽然特效粗糙，却赢得了观众喜爱。<br /><br /><div align="left">　　1948年，哥伦比亚公司以低成本系列电影的形式，首次将超人搬上了银幕。这是一部15章的黑白片，每周上映一章，每章半小时左右，主演是柯克·阿林。当时并没有高科技的特效，而超人的魅力所在——飞行，成了摄制的难题。受制于技术和成本，制作方最后只好让演员摆出跃跃欲飞的姿势，接下来切到一段超人动画，算是代替飞行镜头。尽管如此，史上第一部超人电影仍然获得了巨大的成功，并于两年后推出了续集。<br />&nbsp;<br />　　超人并不是当时唯一被改编成低成本短片的漫画英雄。在此之前，神奇队长和蝙蝠侠也曾以这种形式推出真人版系列电影。而漫威（那时候还叫时代漫画公司）当时的主打英雄——美国队长，也早在1944年就被拍成了系列短片，由Republic Pictures公司推出。该公司一贯喜欢改动原作，这部片子也把美国队长改得面目全非，相比之下，超人系列片算是满靠谱了。毕竟在这一时期，好莱坞完全不知超级英雄为何物，更谈不上尊重。这个习惯，要花此后的几十年来改变。<br />&nbsp;<br />　乔治·里夫斯主演的电视剧《超人历险记》，让超人通过荧屏再次走进千家万户。<br />&nbsp;<br />　　50年代初，随着电视的兴起，好莱坞受到了冲击。低成本电影被电视击败，主拍B级片的Republic Pictures等公司倒闭，而章节式的系列电影也被电视剧取而代之。这时，《超人历险记》的推出，让超人走进千家万户，新一代的观众在小小的荧屏上再次目睹了超人的英姿。由于预算原因，超人一角不再邀请柯克·艾林扮演，而起用了乔治·里弗斯。<br /><br />　　就在超人继续以无敌的姿态出现时，六十年代，漫威公司带给了人们另一种英雄：危险，有缺点，被人排挤和敌视。绿巨人浩克、蜘蛛侠这类“不完美”的英雄，顺应时代潮流，在年轻一代中迅速走红。漫威的现实化世界观由此奠定，成为漫威的制胜法宝，贯彻至今。<br /></div><p sizset="false" sizcache0975447568475792="11399 10167 3"><img alt="" src="/MM/1302/Uploads/News/article/a_52b161c776b94.jpg" /><br /></p>开天辟地：“超人”一飞冲天 开启超级英雄大片纪元<br /><br /><div align="left">1978年的《超人》电影赶上了科幻特效大片的热潮，终于让超人在银幕上飞了起来，<br />“你会相信人能飞”也成为了影片的宣传语。<br />&nbsp;<br />　　在亚历山大·萨尔金德听他26岁的儿子伊利亚谈起超人之前，没有人会把这个拍惯欧洲电影的制片人和超人联系起来，就连他自己也不曾有过这样的打算。<br /><br />　　他从小看漫画长大的儿子则不然。他说服了他的父亲，后者虽然不懂什么超级英雄，但从中看到了巨大的潜力——这是1973年的事，DC刚刚成为华纳的子公司没几年。当时华纳还没有认识到这些漫画英雄的潜在价值，所以二话没说一口气把25年内的影视改编权全卖给了萨氏父子。在当时，尝试拍摄这样一部大片的确是一种冒险，但父子俩知道自己将获得更大的回报。<br /><br />　　导演理查德·唐纳请来了《星球大战》的场景设计，搭建了科幻味十足的水晶宫，并采用了当时新的Zoptic技术，实现演员飞向镜头的效果——虽然已经是70年代末，飞行特效依然是一项技术挑战。主演克里斯托弗·里夫当时还默默无闻，但他单凭姿势和神情的转换就成功地表现出了超人的两种身份之间的差异，拍摄特效时的自然程度也无人可及：那一刻，他不是在表演“飞”，而是真的相信自己能飞——也让观众对此深信不疑.<br /><br />　　《超人》于1978年上映。前一年的《星球大战》和《第三类接触》等影片掀起了一股科幻大片热潮，超人恰逢其会；而它本身也进一步巩固了这股潮流。不仅如此，作为第一部以大片形式制作的超级英雄电影，《超人》正式开创了超级英雄片这样一个类型。它和紧随其后完成拍摄的续集无论票房还是口碑都大获成功，让好莱坞第一次真正见识到了漫画英雄的神威。<br />&nbsp;<br />　　各大电影公司开始跟风，环球投拍了《飞侠哥顿》，迪士尼也推出了喜剧路线的《飞鹰人》，而萨氏父子也继续推出了衍生电影《女超人》。这些超级英雄片先后遭到了失败，就连《超人》第三、四部续作也一败涂地。<br /><br />同时期的漫威唯一拿得出手的只有电视版《绿巨人》，剧中扮演绿巨人浩克的健美运动员卢·费里诺，后来在《复仇者联盟》中也再度献声，为变身后的“绿巨人”配音。<br />&nbsp;<br />　　漫威此时虽然有不少受欢迎的漫画角色，但并没有任何真人版制作，直到1978年，美剧《绿巨人》推出。这部剧共拍了5季，于1982年被砍。但当时剧情并没有完结，1988年开始又拍了三部电视电影。其中，雷神托尔和超胆侠先后登场，标志着漫威宇宙首次以真人版的形式出现。而漫画原作者斯坦·李也在其中客串了一个角色，成为他后来在一系列漫威电影中客串的开始。<br />&nbsp;<br /></div>', 1387052782, 4, 1, 2),
(70, '峥嵘', '倒霉', 'MyMovie', '52a4668c97ff9.jpg', 95, '“蝙蝠侠”跻身银幕 漫威影业', '“蝙蝠侠”跻身银幕 漫威影业初露峥嵘', '蒂姆·波顿以他独特的视觉风格赋予了《蝙蝠侠》超现实的传奇色彩，让本片在超级英雄电影中独树一帜', '蒂姆·波顿以他独特的视觉风格赋予了《蝙蝠侠》超现实的传奇色彩，让本片在超级英雄电影中独树一帜，本片拿下了奥斯卡最佳艺术指导奖，更影响了接下来的一系列同类电影。 蒂姆·波顿以他独特的视觉风格赋予了《蝙蝠侠》超现实的传奇色彩，让本片在超级英雄电影中独树一帜，本片拿下了奥斯卡最佳艺术指导奖，更影响了接下来的一系列同类电影。', '<div align="left">初遇挑战：“蝙蝠侠”跻身银幕 漫威影业初露峥嵘<br /><br />蒂姆·波顿以他独特的视觉风格赋予了《蝙蝠侠》超现实的传奇色彩，让本片在超级英雄电影中独树一帜，本片拿下了奥斯卡最佳艺术指导奖，更影响了接下来的一系列同类电影。<br />&nbsp;<br />　　1989年，DC的另一位主要英雄——蝙蝠侠，由导演蒂姆·波顿搬上了银幕。超级英雄片一扫过去的明快，披上了黑暗的色调。冷酷、阴郁、神秘的蝙蝠侠给人的感觉非常酷，相比之下超人这种善良的阳光青年形象则不再那么吃香了。这种倾向也影响到了华纳当时筹拍的《超人5》。他们照方抓药，想要一个暗黑系的超人，所以选择了“超人之死”的故事，剧本几易其稿，编剧、导演一茬茬的换，主演的人选也一再变动，但迟迟没有成果。<br /><br />　　另一部延续《蝙蝠侠1-4》设定的电影《蝙蝠侠大战超人》也被提上了议程，计划由沃尔夫冈·彼德森执导。在《蝙蝠侠大战超人》和《超人5》之间，华纳权衡再三，放弃了前者——如果华纳当时选择的是《蝙蝠侠大战超人》，DC会像如今的漫威一样，开始构筑完整的电影世界观吗？没有人能够断言。<br />&nbsp;<br />　　80年代，漫威曾把旗下许多角色的电影改编权出售给不同的电影公司，但只有1989年的《惩罚者》问世，另外还有两部纯粹为了保住改编权才拍的片子：《美国队长》（1990）和《神奇四侠》（1993），烂到根本就没机会在美国上映。漫威明白了，单纯卖改编权的路行不通：在手握数百个项目的好莱坞大鳄面前，自己根本说不上话。所以他们准备自己来掌控相关电影的前期工作，如剧本、导演和演员的选择等，打包提供给电影公司拍摄和发行。<br /><br />半人半吸血鬼的另类英雄《刀锋战士》刀走偏锋，影片的R级路线意外成功，让漫威尝到了甜头。本片也是诺兰《蝙蝠侠》三部曲兼《超人：钢铁之躯》编剧大卫·S·高耶执笔的首部超级英雄电影。<br />&nbsp;<br />　　1996年，漫威在原“漫威电影”的基础上成立了漫威影业，开始系统地进行旗下角色的授权。第一部是《刀锋战士》，该片投资并不高，刀锋战士在漫画中也只不过是一个三四流的角色，但却获得了意想不到的成功。几十年来，一直落后于DC的漫威系列电影，终于有了翻身的机会。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b161e71d364.jpg" alt="" /><br />寡不敌众：《超人归来》落败 《蝙蝠侠》独撑门面<br /><div align="left">&nbsp;<br />　　新千年伊始，漫威乘胜追击，分别与二十世纪福斯和索尼联手推出了《X战警》和《蜘蛛侠》两部不折不扣的大片。它们本身就是漫威人气最高的两大系列，而且在现代的电脑特效辅助下，漫画英雄神奇的超能力终于得以忠实再现。这两部电影的成功，让超级英雄重新变成炙手可热的题材。<br />&nbsp;<br />《超人归来》的失败，让DC很长一段时间仅靠诺兰的《蝙蝠侠》系列撑住门面，<br />也让漫威有了全面反攻的机会。<br /><br />　　DC感到不能再拖了，终于在2006年推出了《超人归来》。《X战警》的导演布莱恩·辛格被挖过来执导。这还是第一部IMAX 3D真人商业片——虽然3D的部分总长只有20分钟。DC对它寄予厚望。然而它虽然取得了当年票房第六的成绩，仍未达到预期：开画票房只有《蜘蛛侠2》的一半，对超人这样一个家喻户晓的人物来说，这样的表现令人失望。与此形成对比的是，漫威的《X战警3》虽然失去了前两部的导演辛格，并且口碑也不如前两部，但总票房仍然超过了《超人归来》。<br />&nbsp;<br />　　DC的电影道路遭到了考验。不过这时另一个系列却获得了巨大的成功，这就是克里斯托弗·诺兰执导、大卫·S·高耶编剧的新《蝙蝠侠》系列。诺兰版的蝙蝠侠三部曲是对之前蝙蝠侠电影的重启，在保留黑暗基调的基础上，抛弃了漫画色彩过于浓厚的部分，塑造了一个现实化的蝙蝠侠。尤其是其中的第二集《黑暗骑士》，不仅成为了票房上第一部跨入“10亿美元俱乐部”的超级英雄电影，而且赢得了评论界的盛赞，扮演反派“小丑”的希斯·莱杰猝然离世并凭这一角色捧得小金人，更为本片增添了传奇色彩。从此，好莱坞终于不再用有色眼镜来看待超级英雄片，导演诺兰也被DC视为改编电影掌舵的最佳人选。<br /><br />新《蝙蝠侠》三部曲在视听效果和主题深度上，将超级英雄电影推至空前的高度，<br /><br />导演诺兰奠定的黑暗写实风格也开始影响后来的超级英雄电影。<br /><br />　　然而，诺兰版蝙蝠侠的体系是完全独立的，无法同其他DC英雄衔接，而DC在《黑暗骑士》后推出的另一部影片、由扎克·施奈德执导的《守望者》则是世界观完全不同的作品。而漫威却早已开始了自主拍摄的战略。这不仅仅是因为向来瞧不起漫画的好莱坞喜欢胡乱改编原作，更关键的问题是会造成影片之间设定的矛盾，让各部电影的世界观彼此难以统一。漫威有一个巨大的野心：打造一个庞大的漫威电影宇宙。<br /><br />　　漫威战略的“第一阶段”由2008年上映的《钢铁侠》开始布局。随着《无敌浩克》、《钢铁侠2》、《雷神》、《美国队长》等一系列影片陆续上映，观众渐渐发现了，漫威在下一盘很大的棋。每部电影里都埋有伏笔，就好像一块块拼图，共同打造出集结旗下英雄的《复仇者联盟》。<br />&nbsp;<br /></div>', 1386352821, 4, 1, 2),
(71, '未来', '未来', 'eeEE', '52a466f671789.jpg', 50, '《绿灯侠》幻灭 肩负未来', '《绿灯侠》幻灭 “新超人”肩负未来', '漫威被迪士尼收购之后，DC与漫威的竞争，也成了它们的母公司华纳和迪士尼的交锋。', '《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来1《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来《绿灯侠》幻灭 “新超人”肩负未来', '<div align="left">英雄集结：《绿灯侠》幻灭 “新超人”肩负未来<br />&nbsp;<br />　　《复仇者联盟》的巨大成功，让漫威的“第二阶段”也顺理成章的展开。超级英雄作为一种类型片的地位已经确立——英雄的时代开始了。<br /><br />　　漫威被迪士尼收购之后，DC与漫威的竞争，也成了它们的母公司华纳和迪士尼的交锋。随着《哈利·波特》电影系列完结，华纳希望找到新的利益增长点。在超级英雄大热的当今，DC所拥有的数千名漫画角色无疑是一座宝库。但是，DC并没有漫威那样清晰的战略，几大电影系列都各自为政，需要一个统一的电影世界观。<br /><br />这张宣传图便是明证，DC曾寄望以“绿灯侠”开启新局面。然而这部筹拍过程中便波折重重的电影，似乎注定要遭遇失败，影片上映后恶评如潮，让华纳的2亿美元投资化为泡影。<br />&nbsp;<br />　　DC曾计划以《绿灯侠》开路，逐步推出其他英雄的系列影片。但绿灯侠的故事是太空冒险，全靠CG支撑，这也让拍摄预算一再攀升，而且大BOSS的效果也离预想相去甚远，最终失败。这一挫折使得DC不得不把反击漫威的希望寄托在一个人身上，那个曾经一次次创造奇迹的人，也是他们的头号英雄：超人。<br />&nbsp;<br />　　新的超人电影被命名为《钢铁之躯》，由创造了蝙蝠侠奇迹的克里斯托弗·诺兰监制、大卫·S·高耶编剧，并由《守望者》导演扎克·施奈德执导。这是一部重启之作，抛掉了从前的一切包袱，甚至那条跟随超人七十多年的红内裤。为此DC不惜把旗下的全部漫画也来了个重启，按照《钢铁之躯》的设定塑造超人的新形象。<br />&nbsp;<br /></div><img src="/MM/1302/Uploads/News/article/a_52b1620354433.jpg" alt="" /><br /><div align="left">《钢铁之躯》怀着重塑超人的野心归来，DC为本片集结了几乎最强的主创阵容，并汲取《绿灯侠》的教训，给予了导演扎克·施奈德充分的主导权。超人此战，将决定DC电影的格局。<br /></div><p sizcache0975447568475792="12285 11006 3" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b16251a6231.jpg" alt="" /></p><div align="left">　　同78年版超人相比，这是一个更具黑暗色彩的故事。超人不再是那个“真理、正义和美国道路”的代表，而是一个需要东躲西藏的异端。他和人类的关系也变成了猜疑与防备。准确地说，这次重启的意义，不仅是让超人更具时代感，更重要的是增加超人的现实色彩，为将来汇聚DC英雄的《正义联盟》做准备。<br />&nbsp;<br />　　同时，《钢铁之躯》作为一部为《正义联盟》奠基的作品，必须考虑到世界观的统一。毕竟超人的能力实在强到逆天，让正义联盟这种群戏的平衡性变得很难控制，怎样既不有意弱化超人的能力，又能让其他英雄获得充分表现？《钢铁之躯》能否处理好超人的世界观，是维系整个DC电影计划的关键。<br />&nbsp;<br />　　随着《钢铁之躯》上映，DC和漫威的新一轮交锋才要展开。压在超人肩头的是整个世界的重量：DC未来的电影世界。人们期待着超人再一次带来奇迹。 <br /></div><br />', 1387152904, 4, 1, 2),
(72, '之缘', '倒霉', '之缘', '52a467ad1300c.jpg', 89, '英雄28年超人与中国之缘', '75岁的超级英雄28年 与中国之缘', '这个从漫画算起已有75岁的老牌英雄，飞身中国二十八载，横跨了从40后至80后整整五代观众群。', '这个从漫画算起已有75岁的老牌英雄，飞身中国二十八载，横跨了从40后至80后整整五代观众群。对于中国观众而言，“超人”早已是一个文化符号。这个从漫画算起已有75岁的老牌英雄，飞身中国二十八载，横跨了从40后至80后整整五代观众群。对于中国观众而言，“超人”早已是一个文化符号。', '<div align="left">75岁的超级英雄－－28年·超人与中国之缘<br />&nbsp;<br />这个从漫画算起已有75岁的老牌英雄，飞身中国二十八载，横跨了从40后至80后整整五代观众群。对于中国观众而言，“超人”早已是一个文化符号。借着《钢铁之躯》上映，时光网走访多位《超人》引进作品的配音者及事件亲历者，一起重温28年来中国观众与“超人”的不解情缘。<br /><br />来源：Mtime时光网作者：关中阿福 乌有会员评论 147条<br /><br />时光网特稿 如果把超级英雄电影比作中国武侠片，那么这当真是一个侠客满天下的时代。蜘蛛侠、蝙蝠侠、超胆侠、绿灯侠、神奇四侠……再到如今最热门的钢铁侠，真可谓目不暇接。然而，在这芸芸众侠之中，只有一位与中国观众渊源最深，那便是大名鼎鼎无可替代的“超人”。我们记住了他标志性的红色披风、蓝色紧身衣还有胸前大大的S标志，多少年来，以XX-man为名的各路英雄不断造访中国，他们被唤作了“XX侠”或者“XX战警”，只有Superman仍然被中国观众亲切的称为“超人”。<br /><br />　　这个从漫画算起已有75岁的老牌英雄，在克里斯托弗·里夫的形象代言下登上真人大银幕，享誉全球三十五载。从1985年第一部《超人》引进让国人见识到好莱坞特效大片的震撼，到2006年《超人归来》引发国人对IMAX 3D的关注，不知不觉间，“超人”已横跨了中国从40后至80后整整五代观众群。 <br /><br />　　也许，对于中国观众而言，“超人”早已是一个文化符号，每每看到银幕或荧屏上超人一飞冲天的英姿，都像是与一位久违的老朋友重逢。这种用光阴沉淀成的情缘，也见证了近三十年间中国人娱乐生活的巨大变迁。<br /><br />　　借着《钢铁之躯》上映、新超人再次飞临神州之际，时光网走访多位《超人》引进作品的配音者及事件亲历者，让我们和他们一起，追随时光的脚步，再次开启尘封的记忆，重温28年来中国观众与“超人”的不解情缘。<br />&nbsp;<br /></div><img src="/MM/1302/Uploads/News/article/a_52b1627560fa1.jpg" alt="" /><br />【引子】1980年《大西洋底来的人》：科幻神剧铺垫“超人”到来<br /><br /><div align="left">　　一切还得从1980年1月说起，中央电视台《电视译制片》栏目破天荒的播出了一部科幻美剧《大西洋底来的人》，这是改革开放后我国播出的首部美国电视系列剧。虽然只播出了短短17集，但片中主人公麦克·哈里斯沾水便成为力大无穷的“超人”的故事，很快就令中国观众着了迷。这部电视剧在整个八十年代红遍神州，男主角麦克·哈里斯戴的“蛤蟆镜”也在都市青年中风行一时，成为中国流行文化史上的一个重要标志物。<br /></div><img src="/MM/1302/Uploads/News/article/a_52b1628f91b1e.jpg" alt="" /><br />《大西洋底来的人》让“蛤蟆镜”风靡神州，更铺垫了“超人”的到来<br /><p align="left">　　后来本片在1984年7月在央视再度重播，依然吸引了无数的目光，风头甚至一度盖过了当时中国首次转播的第23届洛杉矶奥运会。可以说，作为中国引进并广泛播出的第一部“超人”题材的影视作品，《大西洋底来的人》在中国的大获成功，不仅将欧美的“超人”影视文化带入内地，也为一年之后《超人》电影的顺利登陆做了铺垫。</p><div align="left">　　虽然1978年诞生的第一部《超人》电影直到1985年才引进中国内地，但当时的《大众电影》等国内期刊却第一时间关注到了这部轰动全球的科幻特效大片。1979年第4期《大众电影》以“轰动一时的美国影片《超人》”为题介绍了这部影片，并分析其受到如此热烈欢迎的原因是“美国风行一时的娱乐性影片热潮的结果”。而1980年的《科学与生活》杂志第1期更是给这部《超人》扣上了“巨型影片”、“轰动影坛的科学惊险电影”等头衔。<br /></div><br />', 1387052938, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mm_mnewscomment`
--

CREATE TABLE `mm_mnewscomment` (
`id` int(10) NOT NULL,
  `nid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) NOT NULL,
  `state` enum('1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_mnewscomment`
--

INSERT INTO `mm_mnewscomment` (`id`, `nid`, `uid`, `content`, `addtime`, `state`) VALUES
(5, 63, 3, '导演韦奇一般不看重复观看自己的作品，但是在《森林战士》上映后，他在iTunes上花了14.99美元买了《森林战士》的视频。', 1386829304, '1'),
(6, 63, 3, '导演韦奇在《森林战士》上映后，在iTunes上花了14.99美元买了《森林战士》的视频。', 1386829346, '2'),
(12, 60, 3, '各个环节的人员都可以相互交流，即便在影片完成后对特效有什么意见，还可以继续制作新的镜头加进去', 1386850534, '1'),
(24, 56, 3, '其实早在三年前《神偷奶爸》第一部问世的时候，可爱的胶囊小黄人形象就已经红遍了网络，被不少影迷所喜爱，但最终影片未能在内地公映。', 1386913845, '1'),
(25, 66, 3, '除了这种“四部一体”的营销思路之外，《饥饿游戏2》还针对不同地域制定了不同的宣传策略。', 1386926015, '1'),
(26, 66, 3, '看过《饥饿游戏2》的观众应该还记得影片结尾时出现的嘲笑鸟，那就是《饥饿游戏3：自由幻梦（上）》中的新logo。', 1386926037, '1'),
(27, 60, 3, '今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。', 1386933923, '1'),
(28, 63, 3, '所有在影片制作过程中出生的工作人员的孩子，都被工作室称为蓝天宝宝', 1387166440, '1'),
(29, 63, 1, '分为范围分分为范围', 1387171426, '1'),
(30, 63, 1, '分为范围分威锋网', 1387171442, '1'),
(31, 71, 3, '看过，还不错', 1387180359, '1'),
(32, 71, 3, '呵呵呵呵呵呵呵呵呵呵呵', 1387180375, '1'),
(33, 71, 3, '这。。。。。。。。。。。。。。。。。。。。。。。。。。。', 1387180393, '1'),
(34, 65, 7, '但问题是，小说在美国虽然流行，在其他国家却并不那么出名。', 1387250017, '1'),
(35, 65, 10, '　进入这个浏览器，你就自动进入了《饥饿游戏》的剧情设置。', 1387381736, '1'),
(36, 68, 10, '漫威影业于2008年携《钢铁侠》初试锋芒', 1387381776, '1'),
(37, 55, 3, '奥利维亚·王尔德：太让人伤心的夜晚。保罗·沃克是一个真正的善良，低调又充满爱心的人。\n', 1387430815, '1'),
(38, 59, 12, '奥利维亚·王尔德：太让人伤心的夜晚。保罗·沃克是一个真正的善良，低调又充满爱心的人。\n', 1387431231, '1'),
(39, 64, 14, '你好', 1387436778, '1');

-- --------------------------------------------------------

--
-- Table structure for table `mm_movie`
--

CREATE TABLE `mm_movie` (
`id` int(10) unsigned NOT NULL COMMENT '主键id',
  `filmname` varchar(64) NOT NULL COMMENT '影片名',
  `petname` varchar(64) DEFAULT NULL COMMENT '别名',
  `director` varchar(64) NOT NULL COMMENT '导演',
  `editor` varchar(64) NOT NULL COMMENT '编剧',
  `nation` varchar(16) NOT NULL COMMENT '国家、地区',
  `language` varchar(16) NOT NULL COMMENT '语言',
  `showtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上映时间',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `minutes` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '时长分钟数',
  `content` text NOT NULL COMMENT '剧情介绍',
  `collectnum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '收藏数',
  `clicknum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `onum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '看过人数',
  `snum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '想看数目',
  `pnum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '赞过数目',
  `ratenum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评分人数',
  `rate` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '评分',
  `replynum` int(10) unsigned DEFAULT '0' COMMENT '评论数',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `picname` varchar(64) NOT NULL COMMENT '封面图'
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mm_movie`
--

INSERT INTO `mm_movie` (`id`, `filmname`, `petname`, `director`, `editor`, `nation`, `language`, `showtime`, `addtime`, `minutes`, `content`, `collectnum`, `clicknum`, `onum`, `snum`, `pnum`, `ratenum`, `rate`, `replynum`, `status`, `picname`) VALUES
(29, 'The Pianist', 'The Pianist', 'Roman Polanski', 'Roman Polanski', 'Italy', 'English/French', 909504000, 1386607745, 165, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">A brilliant pianist, a Polish Jew, witnesses the restrictions Nazis place on Jews in the Polish capital, from restricted access to the building of the Warsaw ghetto. As his family is rounded up to be shipped off to the Nazi labor camps, he escapes deportation and eludes capture by living in the ruins of Warsaw.<span>&nbsp;</span></span>', 3, 264, 3, 1, 3, 4, 10, 10, 1, '52a5f481bc9a8.jpg'),
(30, 'Gravity', 'Gravity', ' Alfonso Cuarón', ' Alfonso Cuarón', 'US', 'English', 1384790400, 1386608864, 91, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Dr. Ryan Stone (Sandra Bullock) is a brilliant medical engineer on her first shuttle mission, with veteran astronaut Matt Kowalsky (George Clooney) in command of his last flight before retiring. But on a seemingly routine spacewalk, disaster strikes. The shuttle is destroyed, leaving Stone and Kowalsky completely alone - tethered to nothing but each other and spiraling out into the blackness. <span>&nbsp;</span></span>', 3, 115, 1, 1, 1, 5, 8, 7, 1, '52a5f8e0d45f8.jpg'),
(31, 'Titanic', 'Titanic', ' James Cameron', ' James Cameron', 'US', 'English', 891532800, 1386609823, 194, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titanic when young Rose boards the departing ship with the upper-class passengers and her mother, Ruth DeWitt Bukater, and her fiancé, Caledon Hockley. Meanwhile, a drifter and artist named Jack Dawson and his best friend Fabrizio De Rossi win third-class tickets to the ship in a game. And she explains the whole story from departure until the death of Titanic on its first and last voyage April 15th, 1912 at 2:20 in the morning.<span>&nbsp;</span></span>', 4, 107, 3, 3, 3, 4, 10, 30, 2, '52a5fc9eec652.jpg'),
(32, 'The Shawshank', 'The Shawshank Redemption', 'Frank Darabont', 'Frank Darabont', 'US', 'English', 780249600, 1386610599, 142, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Andy Dufresne is a young and successful banker whose life changes drastically when he is convicted and sentenced to life imprisonment for the murder of his wife and her lover. Set in the 1940''s, the film shows how Andy, with the help of his friend Red, the prison entrepreneur, turns out to be a most unconventional prisoner.<span>&nbsp;</span></span>', 0, 42, 1, 1, 2, 5, 9, 5, 1, '52a5ffa74ec34.jpg'),
(33, 'Les choristes', 'Les choristes', ' Christophe Barratier', ' Christophe Barratier', 'France', 'French', 1079452800, 1386611586, 97, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Fond de l''Etang is a boarding school for troubled boys located in the French countryside. In the mid-twentieth century, it is run by the principal M. Rachin, an egotistical disciplinarian whose official unofficial mantra for the school is "action - reaction", meaning that there will be severe consequences for any boy out of line. This approach does not seem to be working as the boys as a collective are an unruly bunch. In turn, the teachers don''t teach, but are always watching out for the next subversive act from the boys. January 15, 1949 marks the arrival to the school of the new supervisor, M. Clément Mathieu, a middle-aged man who is grasping at finding his place in life after a series of failed endeavors. Although he does find the boys an unruly lot, Mathieu does not believe in the "action - reaction" policy, and as such, butts heads with Rachin while secretly undermining the policy. Slowly, Mathieu''s approach of trying to match the discipline to the crime does have a positive<span>&nbsp;</span></span>', 0, 17, 0, 0, 0, 3, 7, 2, 1, '52a6038244ccb.jpg'),
(34, 'Hachi: A Dog''s Tale', 'Hachi: A Dog''s Tale', ' Lasse Hallström', 'Stephen P. Linds', 'US', 'English', 1249660800, 1386612359, 93, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">In Bedridge, Professor Parker Wilson finds an abandoned dog at the train station and takes it home with the intention of returning the animal to its owner. He finds that the dog is an Akita and names it Hachiko. However, nobody claims the dog so his family decides to keep Hachi.<span>&nbsp;</span></span>', 0, 20, 0, 0, 0, 1, 6, 0, 2, '52a60687bbfbd.jpg'),
(35, 'Let The Bullets Fly', 'Let The Bullets Fly', ' Wen Jiang', 'Wen Jiang', 'China', 'Mandarin', 1292428800, 1386612815, 132, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">LITTLE BOY is a powerful and moving film about a little boy who is willing to do whatever it takes to bring his dad home from World War II alive. The heartwarming story will capture your heart and lift your spirits as it reveals the indescribable love a little boy has for his father and the love a father has for his son. Set in the 1940s, LITTLE BOY is an instant cinematic classic that captures the wonder of life through the eyes of an 8- year-old little boy. Written and directed by Smithsonian Institute Award winning director Alejandro Monteverde, LITTLE BOY highlights themes of faith, hope and love in the face of adversity.<span>&nbsp;</span></span>', 3, 44, 2, 0, 2, 3, 9, 9, 2, '52a6084fb29bb.jpg'),
(36, 'Malèna', 'Malèna', 'Giuseppe Tornatore', 'Giuseppe Tornatore', 'Italy', ' Italian,English', 972576000, 1386613821, 109, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">On the day in 1940 that Italy enters the war, two things happen to the 12-year-old Renato: he gets his first bike, and he gets his first look at Malèna. She is a beautiful, silent outsider who''s moved to this Sicilian town to be with her husband, Nino. He promptly goes off to war, leaving her to the lustful eyes of the men and the sharp tongues of the women. During the next few years, as Renato grows toward manhood, he watches Malèna suffer and prove her mettle. He sees her loneliness, then grief when Nino is reported dead, the effects of slander on her relationship with her father, her poverty and search for work, and final humiliations. Will Renato learn courage from Malèna and stand up for her?&quot;<span>&nbsp;</span></span>', 2, 81, 1, 1, 1, 4, 9, 7, 2, '52a60c3d9b5d7.jpg'),
(37, 'Now Is Good', 'Now Is Good', 'Ol Parker', 'Ol Parker', 'England', 'English', 1347984000, 1386614404, 103, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">A girl dying of leukemia compiles a list of things she''d like to do before passing away. Topping the list is her desire to lose her virginity.<span>&nbsp;</span></span>', 1, 21, 1, 1, 2, 3, 9, 0, 2, '52a60e8400509.jpg'),
(38, 'Forrest Gump', 'Forrest Gump', 'Robert Zemeckis', 'Robert Zemeckis', 'US', 'English', 773424000, 1386615072, 142, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Forrest Gump is a simple man with a low I.Q. but good intentions. He is running through childhood with his best and only friend Jenny. His ''mama'' teaches him the ways of life and leaves him to choose his destiny. Forrest joins the army for service in Vietnam, finding new friends called Dan and Bubba, he wins medals, creates a famous shrimp fishing fleet, inspires people to jog, starts a ping-pong craze, create the smiley, write bumper stickers and songs, donating to people and meeting the president several times. However, this is all irrelevant to Forrest who can only think of his childhood sweetheart Jenny Curran. Who has messed up her life. Although in the end all he wants to prove is that anyone can love anyone.<span>&nbsp;</span></span>', 1, 38, 0, 0, 0, 2, 10, 5, 2, '52a61120800b2.jpg'),
(39, 'You Are the Apple of My Eye', 'You Are the Apple of My Eye', 'Nine Knives', 'Nine Knives', 'Taiwan', 'Madarin', 1325779200, 1386615617, 110, '<span style="font-family:Helvetica, Arial, sans-serif;color:#111111;font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">John Connolly and James "Whitey" Bulger grew up together on the streets of South Boston. Decades later, in the late 1970s, they would meet again. By then, Connolly was a major figure in the FBI''s Boston office and Whitey had become godfather of the Irish Mob. What happened between them - a dirty deal to trade secrets and take down Boston''s Italian Mafia in the process - would spiral out of control, leading to murders, drug dealing, racketeering indictments, and, ultimately, to Bulger making the FBI''s Ten Most Wanted List.<span>&nbsp;</span></span>', 1, 46, 1, 1, 3, 4, 9, 4, 2, '52a613418af09.jpg'),
(43, 'aasdfadsfa', 'qq', 'qq', 'qq', 'qq', 'qq', 1387382400, 1387436347, 110, 'qqqqq', 0, 4, 0, 0, 0, 0, 0, 0, 0, '52a5f8e0d45f8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mm_movie_actor`
--

CREATE TABLE `mm_movie_actor` (
`id` int(10) unsigned NOT NULL COMMENT '主键id',
  `fid` int(10) unsigned NOT NULL COMMENT '影片id',
  `aid` int(10) unsigned NOT NULL COMMENT '演员id'
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_movie_actor`
--

INSERT INTO `mm_movie_actor` (`id`, `fid`, `aid`) VALUES
(38, 35, 37),
(37, 35, 38),
(36, 34, 33),
(35, 34, 34),
(34, 33, 32),
(33, 32, 30),
(32, 32, 31),
(31, 31, 27),
(30, 31, 28),
(29, 30, 25),
(28, 30, 24),
(27, 30, 26),
(26, 29, 20),
(25, 29, 21),
(24, 29, 22),
(23, 29, 23),
(39, 35, 36),
(40, 35, 35),
(41, 36, 39),
(42, 37, 42),
(43, 37, 41),
(44, 37, 40),
(45, 38, 45),
(46, 38, 44),
(47, 38, 43),
(48, 39, 47),
(49, 39, 46),
(50, 44, 47);

-- --------------------------------------------------------

--
-- Table structure for table `mm_movie_tag`
--

CREATE TABLE `mm_movie_tag` (
`id` int(10) unsigned NOT NULL COMMENT '主键id',
  `fid` int(10) unsigned NOT NULL COMMENT '影片id',
  `tid` int(10) unsigned NOT NULL COMMENT '标签id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mm_movie_type`
--

CREATE TABLE `mm_movie_type` (
`id` int(10) unsigned NOT NULL COMMENT '主键id',
  `fid` int(10) unsigned NOT NULL COMMENT '影片id',
  `tid` int(10) unsigned NOT NULL COMMENT '类型id'
) ENGINE=MyISAM AUTO_INCREMENT=236 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_movie_type`
--

INSERT INTO `mm_movie_type` (`id`, `fid`, `tid`) VALUES
(228, 39, 120),
(227, 39, 2),
(226, 39, 1),
(225, 39, 7),
(224, 38, 38),
(223, 38, 93),
(222, 38, 1),
(221, 38, 7),
(220, 37, 41),
(219, 37, 120),
(218, 37, 1),
(217, 37, 7),
(216, 36, 47),
(215, 36, 85),
(214, 36, 1),
(213, 36, 19),
(212, 36, 7),
(211, 35, 55),
(210, 35, 75),
(209, 35, 2),
(208, 35, 7),
(207, 35, 6),
(206, 34, 38),
(205, 34, 76),
(204, 34, 7),
(203, 33, 43),
(202, 33, 81),
(201, 33, 28),
(200, 33, 7),
(199, 32, 38),
(198, 32, 93),
(197, 32, 13),
(189, 30, 38),
(188, 30, 100),
(187, 30, 124),
(186, 30, 12),
(185, 30, 7),
(184, 30, 4),
(183, 29, 47),
(182, 29, 87),
(181, 29, 1),
(180, 29, 28),
(179, 29, 7),
(196, 32, 7),
(195, 31, 38),
(194, 31, 98),
(193, 31, 124),
(192, 31, 126),
(191, 31, 1),
(190, 31, 7),
(152, 19, 125),
(153, 19, 100),
(154, 19, 38),
(235, 42, 42),
(234, 42, 120),
(233, 42, 18),
(232, 42, 14),
(231, 42, 7),
(230, 42, 4),
(229, 39, 45),
(178, 27, 8);

-- --------------------------------------------------------

--
-- Table structure for table `mm_mpicnews`
--

CREATE TABLE `mm_mpicnews` (
`id` int(10) NOT NULL,
  `mid` int(10) NOT NULL,
  `pica` varchar(32) NOT NULL,
  `picb` varchar(32) NOT NULL,
  `picc` varchar(32) NOT NULL,
  `picd` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_mpicnews`
--

INSERT INTO `mm_mpicnews` (`id`, `mid`, `pica`, `picb`, `picc`, `picd`) VALUES
(209, 54, '52b15d3f43889.jpg', '', '', ''),
(213, 57, '52b15dc19f2b2.jpg', '', '', ''),
(214, 58, '52b15de82afa7.jpg', '', '', ''),
(217, 60, '52b15e5e96a14.jpg', '', '', ''),
(219, 61, '52b15ea147a68.jpg', '', '', ''),
(228, 64, '52b160713a4a5.jpg', '', '', ''),
(234, 66, '52b1612259079.jpg', '', '', ''),
(236, 67, '52b1615763e31.jpg', '', '', ''),
(238, 68, '52b1619b9adea.jpg', '', '', ''),
(240, 69, '52b161c776b94.jpg', '', '', ''),
(237, 68, '52b161837ddfc.jpg', '', '', ''),
(244, 72, '52b1627560fa1.jpg', '', '', ''),
(216, 59, '52b15e379fa0c.jpg', '', '', ''),
(222, 62, '52b15f6120fe6.jpg', '', '', ''),
(221, 62, '52b15f3f6fce7.jpg', '', '', ''),
(226, 63, '52b15ff64c179.jpg', '', '', ''),
(225, 63, '52b15fb3d9d4f.jpg', '', '', ''),
(206, 52, '52b15ce02dcf0.jpg', '', '', ''),
(207, 53, '52b15d1aab775.jpg', '', '', ''),
(210, 54, '52b15d4b8eb84.jpg', '', '', ''),
(215, 58, '52b15dfee9f17.jpg', '', '', ''),
(211, 55, '52b15d7a4de15.jpg', '', '', ''),
(212, 56, '52b15d9ff293e.jpg', '', '', ''),
(232, 65, '52b160f6012ff.jpg', '', '', ''),
(233, 65, '52b1610935f06.jpg', '', '', ''),
(235, 66, '52b16137c79f4.jpg', '', '', ''),
(248, 51, '52b1696f02451.jpg', '', '', ''),
(245, 72, '52b1628f91b1e.jpg', '', '', ''),
(239, 69, '52b161b959cfe.jpg', '', '', ''),
(243, 71, '52b16251a6231.jpg', '', '', ''),
(241, 70, '52b161e71d364.jpg', '', '', ''),
(242, 71, '52b1620354433.jpg', '', '', ''),
(246, 51, '52b1694e64466.jpg', '', '', ''),
(202, 0, '52b158844f9e5.jpg', '', '', ''),
(201, 0, '52b158727e60c.jpg', '', '', ''),
(203, 0, '52b158b969045.jpg', '', '', ''),
(204, 0, '52b15c4c16d45.jpg', '', '', ''),
(205, 50, '52b15cbab1709.jpg', '', '', ''),
(208, 53, '52b15d299ea1f.jpg', '', '', ''),
(218, 60, '52b15e7fc8402.jpg', '', '', ''),
(220, 61, '52b15edf0b06b.jpg', '', '', ''),
(223, 62, '52b15f744723e.jpg', '', '', ''),
(224, 62, '52b15f90811ca.jpg', '', '', ''),
(229, 64, '52b160a6edf4d.jpg', '', '', ''),
(230, 64, '52b160b538701.jpg', '', '', ''),
(231, 64, '52b160cb2ffb0.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mm_newscomment`
--

CREATE TABLE `mm_newscomment` (
`id` int(10) NOT NULL,
  `nid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) NOT NULL,
  `state` enum('1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_newscomment`
--

INSERT INTO `mm_newscomment` (`id`, `nid`, `uid`, `content`, `addtime`, `state`) VALUES
(1, 52, 3, '《狄仁杰之神都龙王》', 1386826252, '1'),
(2, 52, 3, '《狄仁杰之通天帝国》', 1386826268, '1'),
(3, 47, 3, 'aaa', 1386913227, '1'),
(4, 47, 3, '他拍的《激战》您看了吗？在片场有没有看过他的身材？他这两年练出很多肌肉。', 1386913757, '1'),
(5, 58, 3, '为本片角色配音的大腕包括“天后”碧昂丝·诺尔斯、上届奥斯卡最佳男配角克里斯托弗·瓦尔兹，以及爱尔兰“坏小子”柯林·法瑞尔等。', 1386926144, '1'),
(6, 57, 3, '《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。', 1386933852, '1'),
(7, 50, 1, '这篇新闻不错诶', 1387345325, '1'),
(8, 45, 3, '《超人前传》以年轻角色居多，给当时的译制选角造成了不小的挑战', 1387348189, '2'),
(9, 61, 3, '在内地拍戏，对杜琪峰而言新鲜也不适应，', 1387348250, '1');

-- --------------------------------------------------------

--
-- Table structure for table `mm_node`
--

CREATE TABLE `mm_node` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_node`
--

INSERT INTO `mm_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(38, 'Admin', '后台应用', 1, '管理后台系统', 1, 0, 1),
(39, 'Movie', '影片管理', 1, '影片管理', 1, 38, 2),
(40, 'index', '浏览影片信息', 1, '浏览影片信息', 1, 39, 3),
(41, 'add', '添加影片', 1, '添加影片', 1, 39, 3),
(42, 'edit', '修改影片', 1, '修改影片', 1, 39, 3),
(43, 'delete', '删除影片', 1, '删除影片', 1, 39, 3),
(44, 'Comment', '新闻评论', 1, '新闻评论的浏览和修改状态', 1, 38, 2),
(45, 'index1', '电影新闻评论', 1, '浏览电影新闻的评论', 1, 44, 3),
(46, 'index2', '人物新闻评论', 1, '浏览人物新闻评论', 1, 44, 3),
(47, 'pcontent', '人物评论详情', 1, '查看人物评论详情', 1, 44, 3),
(48, 'Dialogue', '经典台词管理', 1, '管理前台经典台词显示', 1, 38, 2),
(49, 'Prevue', '预告片管理', 1, '预告片信息的增删改查', 1, 38, 2),
(50, 'Longreview', '影评管理', 1, '长评及回复的管理', 1, 38, 2),
(51, 'Shortreview', '短评管理', 1, '短评信息管理', 1, 38, 2),
(52, 'mcontent', '电影评论详情', 1, '电影新闻评论详情', 1, 44, 3),
(53, 'pedit', '人物评论修改', 1, '修改人物新闻评论的状态', 1, 44, 3),
(54, 'medit', '电影评论修改', 1, '修改电影新闻评论状态', 1, 44, 3),
(96, 'Friendlink', '友情链接', 1, '友情链接曾删改', 1, 38, 2),
(55, 'Ppt', '幻灯片管理', 1, '幻灯片的曾删改', 1, 38, 2),
(56, 'index', '幻灯片浏览', 1, '浏览幻灯片信息', 1, 55, 3),
(57, 'add', '幻灯片添加', 1, '添加幻灯片信息', 1, 55, 3),
(58, 'del', '删除幻灯片', 1, '删除幻灯片信息', 1, 55, 3),
(59, 'edit', '幻灯片修改', 1, '修改幻灯片信息', 1, 55, 3),
(60, 'Pnews', '人物新闻管理', 1, '人物新闻信息的增删改', 1, 38, 2),
(61, 'index', '浏览人物新闻', 1, '刘安人物新闻信息', 1, 60, 3),
(62, 'add', '添加人物新闻', 1, '添加人物新闻信息', 1, 60, 3),
(63, 'del', '删除人物新闻', 1, '删除人物新闻信息', 1, 60, 3),
(64, 'edit', '修改人物新闻', 1, '修改人物新闻信息', 1, 60, 3),
(65, 'Mnews', '电影新闻管理', 1, '电影新闻信息管理', 1, 38, 2),
(66, 'index', '浏览电影新闻', 1, '浏览电影新闻信息', 1, 65, 3),
(67, 'add', '添加电影新闻', 1, '添加电影新闻信息', 1, 65, 3),
(68, 'del', '删除电影新闻', 1, '删除电影新闻信息', 1, 65, 3),
(69, 'edit', '修改电影新闻', 1, '修改电影新闻信息', 1, 65, 3),
(70, 'User', '用户管理', 1, '负责前台用户的浏览等相关操作', 1, 38, 2),
(71, 'forbid', '用户禁言', 1, '禁言用户', 1, 70, 3),
(72, 'free', '用户解禁', 1, '用户解禁', 1, 70, 3),
(73, 'index', '用户列表浏览', 1, '用户列表浏览', 1, 70, 3),
(74, 'detail', '用户详情', 1, '用户详情浏览', 1, 70, 3),
(75, 'checklongreview', '用户长评浏览', 1, '用户长评浏览', 1, 70, 3),
(76, 'checkshortreview', '用户短评浏览', 1, '用户短评浏览', 1, 70, 3),
(77, 'checkpmood', '用户心情浏览', 1, '用户心情浏览', 1, 70, 3),
(78, 'checkdiary', '用户日志浏览', 1, '用户日志浏览', 1, 70, 3),
(79, 'checkphotoalbum', '用户相册浏览', 1, '用户相册浏览', 1, 70, 3),
(80, 'addletter', '编写站内信', 1, '编写站内信', 1, 70, 3),
(81, 'checkletter', '站内信浏览', 1, '站内信浏览', 1, 70, 3),
(82, 'Ulevel', '用户级别管理', 1, '用户级别管理', 1, 38, 2),
(83, 'index', '浏览用户级别', 1, '浏览用户级别', 1, 82, 3),
(84, 'add', '添加用户级别', 1, '添加用户级别', 1, 82, 3),
(85, 'edit', '修改用户级别', 1, '修改用户级别', 1, 82, 3),
(86, 'delete', '删除用户级别', 1, '删除用户级别', 1, 82, 3),
(87, 'Notice', '公告管理', 1, '公告管理', 1, 38, 2),
(88, 'index', '浏览台词', 1, '浏览台词信息', 1, 48, 3),
(89, 'edit', '修改台词（信息）', 1, '修改台词信息（无状态修改）', 1, 48, 3),
(90, 'index', '浏览公告', 1, '浏览公告', 1, 87, 3),
(91, 'delete', '删除台词', 1, '删除台词信息', 1, 48, 3),
(92, 'add', '添加台词', 1, '添加台词信息', 1, 48, 3),
(93, 'add', '添加公告', 1, '添加公告', 1, 87, 3),
(94, 'edit', '修改公告', 1, '修改公告', 1, 87, 3),
(95, 'editstatus', '修改台词（状态）', 1, '修改台词显示状态', 1, 48, 3),
(97, 'index', '浏览友情链接', 1, '浏览友情链接', 1, 96, 3),
(98, 'add', '添加友情链接', 1, '添加友情链接信息', 1, 96, 3),
(99, 'del', '删除友情链接', 1, '删除友情链接信息', 1, 96, 3),
(100, 'edit', '修改友情链接', 1, '修改友情链接信息', 1, 96, 3),
(101, 'detail', '查看新闻详情', 1, '查看人物新闻详情', 1, 60, 3),
(102, 'detail', '查看新闻详情', 1, '查看电影新闻详情', 1, 65, 3),
(103, 'index', '预告片浏览', 1, '预告片信息浏览', 1, 49, 3),
(104, 'add', '预告片添加', 1, '添加预告片信息', 1, 49, 3),
(105, 'delete', '预告片删除', 1, '删除预告片和封面图', 1, 49, 3),
(106, 'edit', '预告片修改', 1, '修改预告片信息不包括封面图', 1, 49, 3),
(107, 'addpic', '预告片封面设置', 1, '预告片封面设置', 1, 49, 3),
(108, 'index', '影评浏览（长评）', 1, '浏览影评信息', 1, 50, 3),
(109, 'delete', '删除影评（长评）', 1, '删除长评信息', 1, 50, 3),
(110, 'edit', '修改影评状态（长评）', 1, '修改影评状态（长评）', 1, 50, 3),
(111, 'content', '查看长评内容', 1, '查看长评内容', 1, 50, 3),
(112, 'listreply', '浏览影评回复（长评）', 1, '浏览影评回复信息', 1, 50, 3),
(113, 'index', '浏览短评', 1, '浏览短评信息列表', 1, 51, 3),
(114, 'delete', '删除短评信息', 1, '删除短评信息', 1, 51, 3),
(115, 'content', '查看短评内容', 1, '查看短评内容', 1, 51, 3),
(116, 'edit', '修改短评状态', 1, '修改短评状态', 1, 51, 3),
(117, 'content', '查看详情', 1, '查看影片详情', 1, 39, 3),
(118, 'setmtype', '设置影片分类视图', 1, '设置影片分类视图', 1, 39, 3),
(119, 'showType', '查看影片分类', 1, '查看影片分类信息', 1, 39, 3),
(120, 'edittype', '修改分类', 1, '修改影片分类', 1, 39, 3),
(121, 'uploads', '上传影片剧照', 1, '上传影片剧照', 1, 39, 3),
(122, 'edituploads', '修改影片剧照', 1, '修改影片剧照信息', 1, 39, 3),
(123, 'showPhotos', '查看影片剧照', 1, '查看影片剧照', 1, 39, 3),
(124, 'editstatus', '修改影片状态视图', 1, '修改影片状态', 1, 39, 3),
(125, 'setActors', '设置演员', 1, '为影片设置演员信息', 1, 39, 3),
(126, 'showActors', '查看演员信息', 1, '查看演员信息', 1, 39, 3),
(127, 'editactors', '修改演员信息', 1, '修改演员信息', 1, 39, 3),
(128, 'Actors', '演员管理', 1, '用于演员信息管理', 1, 38, 2),
(129, 'index', '浏览演员信息', 1, '浏览演员信息', 1, 128, 3),
(130, 'index2', '搜索演员信息', 1, '搜索演员信息', 1, 128, 3),
(131, 'add', '添加演员信息', 1, '添加演员信息', 1, 128, 3),
(132, 'delete', '删除演员信息', 1, '删除演员信息', 1, 128, 3),
(133, 'edit', '修改演员信息', 1, '修改演员信息', 1, 128, 3),
(134, 'addActorImgs', '添加演员剧照', 1, '添加演员剧照信息', 1, 128, 3),
(135, 'editActorImgs', '修改演员剧照', 1, '修改演员剧照信息', 1, 128, 3),
(136, 'content', '查看演员详情', 1, '查看演员详情信息', 1, 128, 3),
(137, 'showpics', '查看演员图片', 1, '查看演员图片', 1, 128, 3),
(138, 'Type', '影片分类', 1, '影片分类信息', 1, 38, 2),
(139, 'index', '浏览分类信息', 1, '浏览影片分类信息', 1, 138, 3),
(140, 'add', '添加类型', 1, '添加类型', 1, 138, 3),
(141, 'delete', '删除类型', 1, '删除影片类型', 1, 138, 3),
(142, 'edit', '修改分类', 1, '修改分类信息', 1, 138, 3),
(143, 'Node', '节点管理', 1, 'RBAC节点管理', 1, 38, 2),
(144, 'index', '浏览节点信息', 1, 'RBAC浏览节点信息', 1, 143, 3),
(145, 'add', '添加节点', 1, 'RBAC添加节点', 1, 143, 3),
(146, 'delete', '删除节点', 1, 'RBAC删除节点', 1, 143, 3),
(147, 'edit', '修改节点', 1, 'RBAC修改节点', 1, 143, 3),
(148, 'Role', '角色管理', 1, 'RBAC角色管理', 1, 38, 2),
(149, 'index', '浏览角色信息', 1, 'RBAC浏览角色信息', 1, 148, 3),
(150, 'add', '添加角色', 1, 'RBAC添加角色', 1, 148, 3),
(151, 'delete', '删除角色', 1, 'RBAC删除角色', 1, 148, 3),
(152, 'edit', '修改角色信息', 1, 'RBAC修改角色信息', 1, 148, 3),
(153, 'access', '配置权限', 1, 'RBAC配置权限', 1, 148, 3),
(154, 'showAccess', '查看权限信息', 1, 'RBAC查看权限信息', 1, 148, 3),
(155, 'nodeList', '节点列表', 1, 'RBAC添加节点列表', 1, 143, 3),
(156, 'addNode', '添加节点', 1, 'RBAC添加节点', 1, 143, 3),
(158, 'Auser', '后台用户管理', 1, '后台用户管理', 1, 38, 2),
(159, 'index', '浏览用户信息', 1, 'RBAC浏览用户信息', 1, 158, 3),
(160, 'add', '添加用户', 1, 'RBAC添加用户信息', 1, 158, 3),
(161, 'delete', '删除用户', 1, 'RBAC删除用户', 1, 158, 3),
(162, 'edit', '修改用户信息', 1, 'RBAC修改用户信息', 1, 158, 3),
(163, 'setRole', '分配角色', 1, 'RBAC分配角色', 1, 158, 3),
(164, 'update', '更新影片信息', 1, '更新影片基本信息', 1, 39, 3),
(165, 'setTypeHandle', '设置影片分类处理', 1, '设置影片分类表单处理', 1, 39, 3),
(166, 'editTypeHandle', '修改分类表单处理', 1, '修改分类表单处理', 1, 39, 3),
(167, 'uploadsHandle', '上传剧照表单处理', 1, '上传剧照表单处理', 1, 39, 3),
(168, 'deleteimg', '修改影片剧照', 1, '修改影片剧照', 1, 39, 3),
(169, 'editStatusHandle', '修改影片状态', 1, '修改影片状态表单操作', 1, 39, 3),
(170, 'setActorsHandle', '设置演员表单处理', 1, '设置演员表单处理', 1, 39, 3),
(171, 'deleteactor', '删除演员操作', 1, '删除演员操作', 1, 39, 3),
(172, 'uploadsHandle', '添加演员剧照信息', 1, '添加演员表单处理', 1, 128, 3),
(173, 'editActorImgs', '修改演员剧照', 1, '修改演员剧照信息', 1, 128, 3),
(174, 'deleteimg', '删除演员剧照', 1, '删除演员剧照信息', 1, 128, 3),
(175, 'pupdate', '执行修改', 1, '执行人物新闻评论的修改', 1, 44, 3),
(176, 'mupdate', '执行修改', 1, '执行电影新闻评论的修改', 1, 44, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mm_notice`
--

CREATE TABLE `mm_notice` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortcon` varchar(500) DEFAULT NULL,
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_notice`
--

INSERT INTO `mm_notice` (`id`, `title`, `shortcon`, `content`, `addtime`, `status`) VALUES
(2, '22', '分为范围分哇', '这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，这是一条公告，<br />', 1386013327, 1),
(3, '第一天公告测试', '违反哇法尔范', '公告测试', 0, 1),
(4, '添加公告', '分为范围分违反', '哈哈 这是一条公告啊<br />', 1386082708, 1),
(5, '再添加一条1111', '范围分为范围分网上的服务端', '再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条再添加一条', 1386082750, 1),
(28, '添加一条带图片的公告吧', '121221231', '3131231223123', 1386129205, 1),
(29, '注意学习', '雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。雷蒙·威廉斯在论葛兰西“霸权”概念', '<p><img src="/mytime/Uploads/Notice/52a040b657e63.jpg" alt="" /><img src="/mytime/Uploads/Notice/52a040d6beb8b.jpg" alt="" /></p><p><br /></p><p>雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。</p><p><br /></p><p><br /></p><p>雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。雷蒙·威廉斯在论葛兰西“霸权”概念的开创性意义时说： 霸权不仅仅是指那些清晰表述出来的、较高层次的“意识形态”，也不仅仅指意识形态的那些通常被视为“操纵”或“灌输”的控制方式，它是指一种由实践和期望 构成的整体，这种整体覆盖了生活的全部——我们对于生命力量的种种感觉和分配，我们对于自身以及周围世界的种种构成性的知觉体察。<br /></p>', 1386234020, 1),
(30, '33', '33', '33', 1386243209, 0),
(31, '公告管理嘿嘿嘿', '公告管理嘿嘿嘿', '公告管理嘿嘿嘿公告管理嘿嘿嘿公告管理嘿嘿嘿公告管理嘿嘿嘿公告管理嘿嘿嘿公告管理嘿嘿嘿公告管理嘿嘿嘿', 1387338830, 1),
(32, '今天考试 请大家准备好', '今天考试 请大家准备好', '今天审查项目，请前八组同学务必准备好', 1387433955, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_photoalbum`
--

CREATE TABLE `mm_photoalbum` (
`id` int(10) unsigned NOT NULL COMMENT '相册ID',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `coverpic` varchar(255) DEFAULT NULL COMMENT '相册封面',
  `title` varchar(255) NOT NULL COMMENT '相册名称',
  `content` text NOT NULL COMMENT '相册描述',
  `addtime` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_photoalbum`
--

INSERT INTO `mm_photoalbum` (`id`, `uid`, `coverpic`, `title`, `content`, `addtime`) VALUES
(13, 9, 's_c5bdf975784bb1a59885a0b1ae9c666b.jpg', '11', '11', 1387432423),
(14, 1, 's_1420bf802665c0c80a8faaed02d7edcb.jpg', '12r1er', 'aadsfqw', 1387433533),
(10, 1, 's_097b6914bbcee4cd5a5f2c783f41febb.jpg', 'asdasd', 'asvasdfqw', 1387430994),
(11, 1, 's_a47d45a99d5bcc501629b0ee1f2a357f.jpg', 'wqwfa', 'asvasf', 1387431260),
(15, 1, 's_0dad41dcaa1f1938fc4cdbc4fc4c0691.jpg', 'adfqwefqwf', 'afqwfwf', 1387437608);

-- --------------------------------------------------------

--
-- Table structure for table `mm_picactor`
--

CREATE TABLE `mm_picactor` (
`id` int(10) unsigned NOT NULL COMMENT '????',
  `aid` int(11) NOT NULL COMMENT '??Աid',
  `picname` varchar(32) NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `adderby` varchar(32) NOT NULL DEFAULT 'Administrator'
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_picactor`
--

INSERT INTO `mm_picactor` (`id`, `aid`, `picname`, `addtime`, `adderby`) VALUES
(56, 16, '52a47b2be7098.jpg', 0, 'Administrator'),
(55, 16, '52a47b2bd4c26.jpg', 0, 'Administrator'),
(54, 16, '52a47b2bc3d1b.jpg', 0, 'Administrator'),
(53, 16, '52a47b2bb2583.jpg', 0, 'Administrator'),
(57, 16, '52a47b2c01ccd.jpg', 0, 'Administrator'),
(58, 16, '52a47b2c0f1a9.jpg', 0, 'Administrator'),
(59, 47, '52b1476382b4f.jpg', 0, 'Administrator'),
(60, 47, '52b14763e921e.jpg', 0, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `mm_picrevied`
--

CREATE TABLE `mm_picrevied` (
`id` int(10) unsigned NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mm_pics`
--

CREATE TABLE `mm_pics` (
`id` int(10) unsigned NOT NULL COMMENT '照片id',
  `pid` int(10) unsigned NOT NULL COMMENT '相册id',
  `picname` varchar(255) NOT NULL COMMENT '照片名称',
  `descr` varchar(255) NOT NULL COMMENT '照片描述',
  `addtime` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_pics`
--

INSERT INTO `mm_pics` (`id`, `pid`, `picname`, `descr`, `addtime`) VALUES
(49, 10, 'd072309c5821b51c8956059f4ce45e76.jpg', '0', 1387430971),
(50, 11, 'a47d45a99d5bcc501629b0ee1f2a357f.jpg', 'my album', 1387431237),
(56, 15, '0dad41dcaa1f1938fc4cdbc4fc4c0691.jpg', '1111', 1387437579),
(55, 14, 'be665eb5c27bdf5e7d90e15deb757a20.jpg', '222', 1387433520),
(57, 15, '132f62903a0a153ce6be77575e25dcf9.jpg', '222', 1387437580),
(59, 15, '8333e350da75d3b57ceaab5aa08b152a.jpg', '0', 1387437580),
(48, 10, '097b6914bbcee4cd5a5f2c783f41febb.jpg', '0', 1387430970),
(47, 10, 'ec6f96f5e559e93be07dc55b4f13ca42.jpg', '0', 1387430970),
(46, 10, '9a7e334af6a72904328259f7ae5d3227.jpg', '0', 1387430969),
(53, 14, '1420bf802665c0c80a8faaed02d7edcb.jpg', '111', 1387433519),
(52, 13, 'c5bdf975784bb1a59885a0b1ae9c666b.jpg', '111', 1387432419);

-- --------------------------------------------------------

--
-- Table structure for table `mm_picture`
--

CREATE TABLE `mm_picture` (
`id` int(10) unsigned NOT NULL COMMENT 'id号',
  `tbname` varchar(16) NOT NULL COMMENT '表名',
  `tid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '外键关联id',
  `picname` varchar(32) NOT NULL COMMENT '图片名称',
  `create_time` int(10) unsigned DEFAULT NULL COMMENT '添加时间'
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC COMMENT='文本内容中的图片信息';

--
-- Dumping data for table `mm_picture`
--

INSERT INTO `mm_picture` (`id`, `tbname`, `tid`, `picname`, `create_time`) VALUES
(69, 'notice', 0, '52a5d22750bec.jpg', 1386598951),
(70, 'notice', 0, '52a5d235731c4.jpg', 1386598965),
(68, 'notice', 0, '52a5c4bc72686.jpg', 1386595516),
(65, 'notice', 29, '52a040b657e63.jpg', 1386234038),
(67, 'notice', 29, '52a040d6beb8b.jpg', 1386234070),
(63, 'notice', 28, '529ea773cd713.jpg', 1386129267),
(71, 'notice', 0, '52a5d319f1f91.jpg', 1386599194);

-- --------------------------------------------------------

--
-- Table structure for table `mm_pmood`
--

CREATE TABLE `mm_pmood` (
`id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '0自写 1转帖'
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_pmood`
--

INSERT INTO `mm_pmood` (`id`, `uid`, `content`, `addtime`, `type`) VALUES
(64, 1, 'brand new day', 1387176686, 0),
(65, 1, 'asdfqoiwfq', 1387182607, 0),
(66, 1, 'nice day', 1387329365, 0),
(68, 9, 'asdfqwfq', 1387348690, 0),
(71, 10, 'new user', 1387381892, 0),
(73, 1, 'I''m new here', 1387431928, 0),
(74, 9, '73', 1387431988, 1),
(75, 9, 'feelin good', 1387433319, 0),
(79, 1, 'unhappy', 1387437424, 0),
(77, 1, 'angry', 1387434568, 0),
(78, 1, 'excited', 1387434589, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mm_pnews`
--

CREATE TABLE `mm_pnews` (
`id` int(10) unsigned NOT NULL,
  `author` varchar(12) NOT NULL,
  `edit` varchar(12) NOT NULL,
  `source` varchar(32) NOT NULL,
  `picname` varchar(32) NOT NULL,
  `looknum` int(10) NOT NULL,
  `title` varchar(32) NOT NULL,
  `title2` varchar(32) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `explain` text NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `state` smallint(6) NOT NULL DEFAULT '1',
  `content` text NOT NULL,
  `addtime` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_pnews`
--

INSERT INTO `mm_pnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `status`, `state`, `content`, `addtime`) VALUES
(45, '意犹', '未来', '意犹', '52a46a00e9bd4.jpg', 100, '《超人3》的荧屏热播', '《电影画刊》介绍《超人2》', '从1978年到1987年，在改革开放之初利好政策支持下，常规电影进口数量逐年递增。', '《超人3》的荧屏热播，唤起了许多中国观众对八十年代与“超人”银幕之约的记忆，意犹未尽之余，也让人们更加期盼《超人4》能“众望所归”。', 1, 2, '1987年《电影画刊》以大篇幅介绍了《超人2》<br /><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b162beb1a83.jpg" alt="" /><br /><br /><div align="left">　　从1978年到1987年，在改革开放之初利好政策支持下，常规电影进口数量逐年递增。加之通过复映、解禁、在中国举办外国电影周等渠道，十年间，中国观众得以从大银幕上看到了《追捕》、《佐罗》、《卡桑德拉大桥》、《虎口脱险》、《三十九级台阶》、《第一滴血》、《超人1》、《野鹅敢死队》等一系列优质商业影片，海外电影在中国内地度过了繁荣兴盛的“黄金十年”。然而因为机制与体制的问题，加上国际大气候的影响，1987年上映的《超人2》便成了引进片的中期谢幕之作。谁也未曾料到，从此引进片乃至内地电影市场每况愈下（注：从88年到93年，引进片仅有《过关斩将》《威龙争雄》《魔鬼终结者》等寥寥可数的几部大片），直到1994年以《亡命天涯》为代表的“十部大片”重装上阵，才又迎来进口片的春天。<br /><br /></div><p align="left">1993年《超人3》：《正大剧场》暑假热辣放送</p><div align="left">　　1990年4月21日，由中央电视台与泰国正大集团合作的大型益智娱乐节目《正大综艺》正式开播。尽管妙趣横生的游戏竞赛和嘉宾问答，以及片中所展现的异域风情和各国美食让人开心不已，但这些都不是人们至今对《正大综艺》念念不忘的根本原因。早期的《正大综艺》包含两个版块，在“世界真奇妙”、“是真是假”等现场互动环节之后，就是让人期待已久的《正大剧场》了－－这也是中央电视台继《电视译制片》之后力推的又一档以播出海外影视剧集为主的王牌栏目。<br /><br />　　尽管从央视传统的教化层面出发，《正大剧场》中选播的绝大多数的片子仍然多是思想性压倒娱乐性的老片，但毕竟是为中国观众们又多了一个“开眼看世界”的窗口。而这其中，也不乏艺术性与故事性俱佳的精品之作。特别是《侠胆雄狮》《老人与海》《八十天环游地球》《拯救落井幼儿》等颇俱观赏性的影视作品的播出，更是让在那个娱乐生活匮乏年代的孩子无比欢乐。<br /><br />《超人3》的荧屏热播，唤起了许多中国观众对八十年代与“超人”银幕之约的记忆，意犹未尽之余，也让人们更加期盼《超人4》能“众望所归”。然而，这一次，中国观众等来的并不是久违的飞天英雄，而是别样超人的意外之喜。<br /><br />　　《超人3》播出仅仅3个月之后，《正大剧场》再次为超人迷送上一份惊喜－－1993年的11月21日和11月28日，以上下两集的形式播出了《超人》的“兄妹篇”《女超人》。坦率的说，《女超人》一片无论是从影片的情节编排，还是人物塑造上，都显得平淡无奇。该片于1984年在北美上映后恶评如潮，还得了两项金酸梅奖。然而即便如此，对于这部时隔九年姗姗来迟的平庸之作，那个年代的中国观众依然以极大的包容，热情地欢迎其到来。本片译制版的女反派女巫塞利娜由来自北京电影学院的著名配音演员郑建初女士配音，有趣的是，1987年她曾“化声”非凡的公主希瑞，为动画界塑造了另一位开口讲中文的经典摩登女超人。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b162d9aae4b.jpg" alt="" /><br />当年的《中国电视报》上刊登的《正大剧场》播出《女超人》的预告<br /><br /><div align="left">　　或许是之前抱有过高的期许，当时看完本片上集的很多观众都难掩小小的失望，但这却并不影响在一周之后的《正大剧场》如约播出时，大家仍然是兴致勃勃的观赏本片的下集。尽管“平时伪装成普通人、危急时刻大显身手、困顿之际必有高人点拨搭救”，这些早在《超人》系列电影中便频繁上演的老套路早已让人淡忘。但随着时间推移，多年之后再来回顾当年观看《女超人》的一幕，很多如今或是几近而立之年或是已为人父的“男生们”都坦言《女超人》便是自己的青春性启蒙影片。这位金发美女身着紧身上衣、短裙、大红披风和长筒靴，一切都是那么的拉风，特别是化身高中女生的一袭墨绿色制服装，让人一下子就认定这就是自己心目中的“女神”。<br /><br />八十年代的《电影画刊》曾以全彩页介绍《女超人》，部分图片还是引自日本杂志，<br /><br />彼时的海伦·斯雷特早已是美国青春偶像，金发美女形象深入人心<br /><br />　　以下为大家播放的视频由热心的超人迷提供，这些尘封20年的录像带，尽管画面已经模糊到难以辨识的程度，却不妨碍我们再次重温那亲切的声音与久违的影像：<br /><br />　　1993年，从8月到11月，四个月时间里，接连两部超人电影现身央视，让一度淡出中国观众视野的“超人”重又成为一个大众话题。但谁也不曾料到，这也成了电影版超人在20世纪与中国观众的告别演出－－《超人4》的缺席，让无数喜欢超人的观众又经过十三年的守候，直到2006年才又等到了“超人归来”。<br /><br />2008年《超人前传》电视剧：美剧时代再掀青春偶像风<br /></div>&nbsp;<br /><img src="/MM/1302/Uploads/News/article/a_52b1630018159.jpg" alt="" /><br />《超人前传》主要讲述了克拉克·肯特成为“超人”之前的经历<br /><br /><div align="left">　　《超人归来》之后，华纳虽然不敢再碰“超人”这个烫手山芋，但国内对于超人的热情依然没有褪去。2008年，北京电视艺术中心引进了一部名为《超人前传》的新超人美剧，距离1998年那部曾经风靡中国校园的《超人》电视剧已时隔10年，国内的美剧土壤已是今非昔比。大热的《24小时》、《越狱》等已经让美剧拥有了大批忠实拥趸，因此《超人前传》在电视上一经播出，便引起了不少观众的注意。不过这套剧集播出时恰逢2008年北京奥运会，导致播出时间比较分散，加之许多观众尤其是新生代的美剧迷早已习惯了通过网络追看最新的剧集，所以该剧播出并没有引起太大的轰动。 <br /><br />值得特别一提的，倒是这套剧集引进国内的译制情况。其实，早在2005年的时候，河南台就曾引进过该剧的第一季，并约请辽宁人民艺术剧院译制部配音。该剧后以《小超人》为译名，在部分地方电视台播出过，但反响平平。2008年，北京电视艺术中心再度引进这套剧集的前三季，力邀上海电视台译制部译制，并重新译制了第一季，由于译制阵容强大，为其平添了诸多看点。<br />&nbsp;<br />　　上海电视台著名配音演员刘彬是《超人前传》全部三季的译制导演之一，据他回忆，接到这部戏的译制任务时，当时上海台译制部人手有限，且配音演员的年龄普遍都在50岁上下，由于剧中大量角色都很年轻，所以译制部启用了大量的外聘人员担任本剧的主配，其中不少都是上海当地一线的自由配音演员。刘彬导演自己出任了剧中超人养父乔纳森的配音，而给剧中超人克拉克和超人女友拉娜配音的两位演员谢添天和冯骏骅现实中便是一对夫妻。<br /><br />《超人前传》以年轻角色居多，给当时的译制选角造成了不小的挑战<br /><br />　　这套名为《超人前传》的青春剧集于2001年在华纳旗下的The WB频道开播，首播就创下了当时WB立台以来的收视纪录，并掀起了一股科幻偶像剧风。剧名Smallville正是超人生活的小镇名字，也是后来超人女友露易丝·莱恩对克拉克的别称。这部剧以超人的青少年时代为主，超人也始终未穿上那件熟悉的蓝紧身衣和红披风，但它尽量吸收了原作里的许多题材，DC漫画中的其他英雄都在其中串场，甚至把“正义联盟”也搬上了荧屏。这部剧维持着稳定的人气，一连拍了十季，于2011年才圆满落幕。遗憾的是，国内只引进了前三季，而从第四季开始超人的正牌女友露易丝才正式登场，而且在第七季中当年的“女超人”海伦·斯雷特还客串出演了超人生母。<br /></div><br />', 1387108695),
(46, '科幻', '科幻', '科幻', '52a46a975b42d.jpg', 113, '《超人前传》以年轻角色居多', '《超人前传》以年轻角色居多呵呵', '《超人归来》之后，华纳虽然不敢再碰“超人”这个烫手山芋，但国内对于超人的热情依然没有褪去。', '　这套名为《超人前传》的青春剧集于2001年在华纳旗下的The WB频道开播，首播就创下了当时WB立台以来的收视纪录，并掀起了一股科幻偶像剧风。', 1, 2, '<div align="left">1993年，从8月到11月，四个月时间里，接连两部超人电影现身央视，让一度淡出中国观众视野的“超人”重又成为一个大众话题。但谁也不曾料到，这也成了电影版超人在20世纪与中国观众的告别演出－－《超人4》的缺席，让无数喜欢超人的观众又经过十三年的守候，直到2006年才又等到了“超人归来”。<br /></div><img src="/MM/1302/Uploads/News/article/a_52b1631a7fc1a.jpg" alt="" /><br />2008年《超人前传》电视剧：美剧时代再掀青春偶像风<br />&nbsp;<br />《超人前传》主要讲述了克拉克·肯特成为“超人”之前的经历<br /><br /><div align="left">　　《超人归来》之后，华纳虽然不敢再碰“超人”这个烫手山芋，但国内对于超人的热情依然没有褪去。2008年，北京电视艺术中心引进了一部名为《超人前传》的新超人美剧，距离1998年那部曾经风靡中国校园的《超人》电视剧已时隔10年，国内的美剧土壤已是今非昔比。大热的《24小时》、《越狱》等已经让美剧拥有了大批忠实拥趸，因此《超人前传》在电视上一经播出，便引起了不少观众的注意。不过这套剧集播出时恰逢2008年北京奥运会，导致播出时间比较分散，加之许多观众尤其是新生代的美剧迷早已习惯了通过网络追看最新的剧集，所以该剧播出并没有引起太大的轰动。 <br /><br />　　值得特别一提的，倒是这套剧集引进国内的译制情况。其实，早在2005年的时候，河南台就曾引进过该剧的第一季，并约请辽宁人民艺术剧院译制部配音。该剧后以《小超人》为译名，在部分地方电视台播出过，但反响平平。2008年，北京电视艺术中心再度引进这套剧集的前三季，力邀上海电视台译制部译制，并重新译制了第一季，由于译制阵容强大，为其平添了诸多看点。<br />&nbsp;<br /></div><p align="left">　　上海电视台著名配音演员刘彬是《超人前传》全部三季的译制导演之一，据他回忆，接到这部戏的译制任务时，当时上海台译制部人手有限，且配音演员的年龄普遍都在50岁上下，由于剧中大量角色都很年轻，所以译制部启用了大量的外聘人员担任本剧的主配，其中不少都是上海当地一线的自由配音演员。刘彬导演自己出任了剧中超人养父乔纳森的配音，而给剧中超人克拉克和超人女友拉娜配音的两位演员谢添天和冯骏骅现实中便是一对夫妻。</p><img src="/MM/1302/Uploads/News/article/a_52b163432c90b.jpg" alt="" /><br />《超人前传》以年轻角色居多，给当时的译制选角造成了不小的挑战<br /><br /><div align="left">　　这套名为《超人前传》的青春剧集于2001年在华纳旗下的The WB频道开播，首播就创下了当时WB立台以来的收视纪录，并掀起了一股科幻偶像剧风。剧名Smallville正是超人生活的小镇名字，也是后来超人女友露易丝·莱恩对克拉克的别称。这部剧以超人的青少年时代为主，超人也始终未穿上那件熟悉的蓝紧身衣和红披风，但它尽量吸收了原作里的许多题材，DC漫画中的其他英雄都在其中串场，甚至把“正义联盟”也搬上了荧屏。这部剧维持着稳定的人气，一连拍了十季，于2011年才圆满落幕。遗憾的是，国内只引进了前三季，而从第四季开始超人的正牌女友露易丝才正式登场，而且在第七季中当年的“女超人”海伦·斯雷特还客串出演了超人生母。<br /></div><br />', 1387008716),
(47, '谦和', '科幻', '谦和', '52a46b9332faa.jpg', 20, '张家辉成为刘青云的“劲敌”', '张家辉演技成为刘青云的“劲敌”', ' 人称“大牛哥”，源自他一贯的勤恳，新片宣传期，他几乎没有错过任何一场发布会。', '刘青云与古天乐经过多次合作，已然成为港影中令人难以忘怀的一对搭档大银幕上，刘青云有巨大的爆发力和戏剧张力；私下里却低调而谦和。', 1, 2, '<div align="left">2013贺岁档，即将迈入“知天命”之年的刘青云，在陈木胜新作《扫毒》中出演脾气火爆的扫毒组督察马昊天。大银幕上，刘青云有巨大的爆发力和戏剧张力；私下里却低调而谦和。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 人称“大牛哥”，源自他一贯的勤恳，新片宣传期，他几乎没有错过任何一场发布会。在接受时光网的采访中，虽然话少，普通话讲得磕磕绊绊，但聊起古天乐、张家辉这两位好友兼对手，兴致来了就会承诺：“有机会要拍一张张家辉的腹肌照给你们看”。<br /></div><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b163759ce29.jpg" alt="" /><br /><br /><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 黄秋生曾用八个字评价刘青云：大智若愚，绝顶聪明。这位可以在镜头前扮傻耍狠的男星，以看似笨拙的积累之道在香港影史上刻下了自己的“字头”。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 如今提起刘青云，人人都说他是天生的演技派，实际上，他却是香港金像奖历史上的悲情人物之一。他曾经13次获得金像奖提名，却仅在2006年那部不够出色的《我要成名》中，圆了一次影帝梦。去年作为影帝大热人选，刘青云凭《夺命金》角逐金像奖，最终惜败刘德华。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现在，每拍完一部戏，总有人问他：这次该拿奖了吧？刘青云的回答是：“如果很多人都觉得我应该拿奖，但没有拿，我已经很开心，觉得很满足了。”<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在明星争先恐后造新闻、刷存在感的今天，刘青云的微博也同他本人一样沉默寡言。除了例行的更新客户端外，他仅分享过“天空、彩虹”这类的图片。刘青云告诉记者：“看我的微博，就了解我是什么样的人，我就是一个没什么消息、没什么话讲的人。我分享的，人家可能觉得没意思，但这就是我的生活。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b16361e769c.jpg" alt="" /><br /><br /><div align="left">&nbsp;Mtime：《扫毒》中可以看到不少经典港式英雄片的影子，有人说有《喋血街头》和《英雄本色》的感觉，您拍戏时有没有同感？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：拍的时候没有这个感觉，但是陈木胜导演一开始就跟我们说，他希望能拍一部有90年代香港英雄电影味道的片子。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：这次有很多高难度动作戏，但内心戏方面也很纠结，对您来说动作戏、内心戏，哪种演起来更困难一些？<br /><br />&nbsp; Mtime：演《夺命金》的时候，您给角色加了些动作上的小细节（不停眨眼），很有意思，这次有没有给人物加上什么特别的小动作呢？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：这次不一样。这个角色他很喜欢自己的工作，最后老婆也跑了，应该说是一个“独行侠”，一个人生活的人。我觉得挺适合我，我也是这样的人。他就是那种你看见他的时候不敢走近他，去问他事情，他又很不屑的样子，很凶。我希望抓这个感觉去处理。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：以前听好多演员讲演这类角色的时候，他们在片场也把自己封闭起来，好进入状态，您有没有这样做？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：我没有故意把自己躲起来，现场我其实也没有留意自己是什么情况。我觉得留意没用的，在拍的时候我是怎么样不重要，最重要的是把戏演出来，谁管你在现场怎么样（笑）。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：这次的角色性格很火爆，爱发脾气，不少对白都非常用力，不知您在生活中遇到麻烦时也是个急性子吗？让您发脾气最严重的一次，是为了什么事情呢？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：堵车，香港非常堵，当你发现两条路去同一个地方，如果你选了错的，马上去另一条，结果也是堵的，我就会觉得命运很奇怪。平常也会发脾气，但是不会那么强烈，一句两句就算了，生活里没有这么多激情吧！<br /><br />&nbsp;&nbsp; Mtime：说起另一个搭档张家辉，他给人的感觉是貌不惊人，但通过一个一个角色的努力打拼出来，他这几年的进步也非常明显。这次合作您对他有什么特别的感受？他现在可以说是您在夺影帝之路上的“劲敌”，最近好几年都一起提名。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：我们认识很久，我发现他一直都很努力，做了很多事情，是个非常非常好的演员。他有很多、很特别的想法，其实他可以演不同类型的角色，好像喜剧什么的。就像我们这个戏一样，我和他很多时候都是好朋友，有时候也是对手。但我觉得有对手也是好事，都是为了工作。我们常常开玩笑，也没有觉得有什么对立的事情。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：他拍的《激战》您看了吗？在片场有没有看过他的身材？他这两年练出很多肌肉。<br /><br /></div><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：（大笑）电影没有看，但是看过一次他的身材。我们在泰国拍戏的时候，他在酒店游泳。还好吧，现在没那么厉害了，因为很久没锻炼了，但也是非常好的身材，有机会我拍一张让你看看。</p><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：其实不能说痛苦，因为导演要求感情比较强烈一点，还有一些戏不能找替身，一定要自己去演。其实我个人觉得拍感情戏比较难，因为我们拍的时候需要跟导演谈剧本，我们没有很完整的剧本，都是一边拍，一边修改对白、台词。（没有剧本，导演是怎么吸引您来的？）陈木胜导演说，他要拍一部电影，他找我，我就去了。因为他是我很喜欢的一个导演，我上次跟他合作已经很久了，觉得是时候再跟他拍另外一部戏了。 <br /></div><br />', 1387308737),
(48, 'ddd', '科幻', 'ddd', '52a46ca2cefbe.jpg', 0, '专访《扫毒》男主角刘青云', '视频专访《扫毒》男主角刘青云', '在明星争先恐后造新闻、刷存在感的今天，刘青云的微博也同他本人一样沉默寡言。', '2013贺岁档，即将迈入“知天命”之年的刘青云，在陈木胜新作《扫毒》中出演脾气火爆的扫毒组督察马昊天。大银幕上，刘青云有巨大的爆发力和戏剧张力；私下里却低调而谦', 1, 2, '<p sizcache0975447568475792="14216 13002 0" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b1638f1cac4.jpg" alt="" /><br /></p><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 人称“大牛哥”，源自他一贯的勤恳，新片宣传期，他几乎没有错过任何一场发布会。在接受时光网的采访中，虽然话少，普通话讲得磕磕绊绊，但聊起古天乐、张家辉这两位好友兼对手，兴致来了就会承诺：“有机会要拍一张张家辉的腹肌照给你们看”。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 黄秋生曾用八个字评价刘青云：大智若愚，绝顶聪明。这位可以在镜头前扮傻耍狠的男星，以看似笨拙的积累之道在香港影史上刻下了自己的“字头”。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 如今提起刘青云，人人都说他是天生的演技派，实际上，他却是香港金像奖历史上的悲情人物之一。他曾经13次获得金像奖提名，却仅在2006年那部不够出色的《我要成名》中，圆了一次影帝梦。去年作为影帝大热人选，刘青云凭《夺命金》角逐金像奖，最终惜败刘德华。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现在，每拍完一部戏，总有人问他：这次该拿奖了吧？刘青云的回答是：“如果很多人都觉得我应该拿奖，但没有拿，我已经很开心，觉得很满足了。”<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在明星争先恐后造新闻、刷存在感的今天，刘青云的微博也同他本人一样沉默寡言。除了例行的更新客户端外，他仅分享过“天空、彩虹”这类的图片。刘青云告诉记者：“看我的微博，就了解我是什么样的人，我就是一个没什么消息、没什么话讲的人。我分享的，人家可能觉得没意思，但这就是我的生活。”<br /><br />&nbsp;Mtime：《扫毒》中可以看到不少经典港式英雄片的影子，有人说有《喋血街头》和《英雄本色》的感觉，您拍戏时有没有同感？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：拍的时候没有这个感觉，但是陈木胜导演一开始就跟我们说，他希望能拍一部有90年代香港英雄电影味道的片子。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：这次有很多高难度动作戏，但内心戏方面也很纠结，对您来说动作戏、内心戏，哪种演起来更困难一些？<br /><br />&nbsp; Mtime：演《夺命金》的时候，您给角色加了些动作上的小细节（不停眨眼），很有意思，这次有没有给人物加上什么特别的小动作呢？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：这次不一样。这个角色他很喜欢自己的工作，最后老婆也跑了，应该说是一个“独行侠”，一个人生活的人。我觉得挺适合我，我也是这样的人。他就是那种你看见他的时候不敢走近他，去问他事情，他又很不屑的样子，很凶。我希望抓这个感觉去处理。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：以前听好多演员讲演这类角色的时候，他们在片场也把自己封闭起来，好进入状态，您有没有这样做？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：我没有故意把自己躲起来，现场我其实也没有留意自己是什么情况。我觉得留意没用的，在拍的时候我是怎么样不重要，最重要的是把戏演出来，谁管你在现场怎么样（笑）。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：这次的角色性格很火爆，爱发脾气，不少对白都非常用力，不知您在生活中遇到麻烦时也是个急性子吗？让您发脾气最严重的一次，是为了什么事情呢？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 刘青云：堵车，香港非常堵，当你发现两条路去同一个地方，如果你选了错的，马上去另一条，结果也是堵的，我就会觉得命运很奇怪。平常也会发脾气，但是不会那么强烈，一句两句就算了，生活里没有这么多激情吧！<br /></div>', 1386908780),
(49, 'eee', '未来', '沙发', '52a46d43af075.jpg', 6, '视频专访《无人区》导演宁浩', '独家视频专访《无人区》导演宁浩', '大城里来的小律师潘肖刚刚赢得了一场诉讼，畅快地驾上红色汽车，直奔戈壁。', '“你们还招摄像吗？”36岁的宁浩坐在沙发上，半弓着腰，晃着上半身。他明明开玩笑，还一脸正经：“我以前就干这个的，做过记者”。', 1, 2, '<br /><div align="left">　　“你们还招摄像吗？”36岁的宁浩坐在沙发上，半弓着腰，晃着上半身。他明明开玩笑，还一脸正经：“我以前就干这个的，做过记者”。<br /><br />　　导演宁浩的从影经历更像是一个励志故事。这个山西普通工厂的子弟，29岁就凭借低成本影片《疯狂的石头》成名，一度是内地风头最劲的导演新势力。紧随张艺谋、陈凯歌和冯小刚之后，2009年，宁浩凭借《疯狂的赛车》成为内地票房过亿的首位青年导演。同年，意气风发的宁浩带着徐峥、黄渤、余男等演员，在新疆开拍《无人区》——这也是他从影以来最有野心的一部影片。<br /></div><br />&nbsp;&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b163b2efb46.jpg" alt="" /><br /><br /><div align="left">　　《无人区》的故事也是从意气风发开始。大城里来的小律师潘肖刚刚赢得了一场诉讼，畅快地驾上红色汽车，直奔戈壁。剧情的驱动力来自熊熊燃烧的欲望，但这一次，宁浩选择了像狗一样趴在地上的动物低视角，去审视社会属性被层层剥离后，人跟自己动物属性的博弈。<br /><br />　　该片在2009年就完成了首次拍摄，其间数次传出公映，直到2013年10月底，才正式确定成为今年贺岁档的第一波主打片（12月3日）。4年过去了，这部当年卯足了劲儿打造出来的西部类型片，无论对于导演宁浩还是演员徐峥、黄渤来说，都有着更为特别的意义。<br /><br />宁浩：《无人区》是我跟黄渤合作过的电影当中，他演得最好的<br /><br />徐峥黄渤<br /><br />徐峥更适合做导演<br />这是黄渤演得最好的一次<br />&nbsp; &nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：当初是怎么独具慧眼发现了徐峥的表演才华？<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：拍“石头”开始我们就认识了，我当时觉得徐峥是一个非常好的演员，是一个非常聪明的，很懂戏的一个演员。当然后面也证实了是个非常好的导演，我们经常一起聊剧本。<br /><br />&nbsp;&nbsp;&nbsp; Mtime：他跟黄渤是完全两种不同气质的演员，你的电影经常会把他们俩放在一起，是因为戏剧冲突感特别强吗？<br />&nbsp; <br />　　宁浩：对，其实我一直觉得徐峥蛮适合做导演，黄渤是一个很适合做演员的人。黄渤的感知力特别强，徐峥是一个很理性的人。所以徐峥演很理性的角色，像律师什么的就很好。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; Mtime：那黄渤很抢戏，他多能抢，包括这部戏里也是，虽然看的出来，你已经在压缩他的戏份。对这种表现力特别强的演员，你会跟他较劲吗？<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：黄渤到哪儿都抢戏。说实话，我跟黄渤合作过的电影当中，这部戏是他演得最好的一部。什么是好演员，如果我要是发奖的话，我会觉得这样的角色才能拿奖。因为很多戏对于演员来说，到最后都只是演了一个戏，就是你把这个事清楚了，其实谁都差不多。但是这套不一样的地方，就是他需要演出一种人来，那不是谁都可以的，你会感觉换一个人就不行了。<br /><br />&nbsp;&nbsp;&nbsp; Mtime：你过去的电影都是侧重故事情节的戏剧冲突，《无人区》里其实是把这些弱化了，强调演员在环境中的表演。也是在拍摄中的重点吗？？<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：对，演员的表现非常重要。每部戏都有不同的侧重，有的戏是看编剧的，有的戏是看表演，有的戏是看镜头的，其实是不一样的。我觉得这部戏更多的把它放得简单一点去看一个表演，还有一种气质。就是一种很粗戾的，很生猛的一种东西。生命本身的那个。就像我看到火星上的照片，很粗戾的，很原始的东西。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 宁浩拍摄《无人区》的灵感，来自拍摄处女作《绿草地》。他发现草原上的人不一样，他们承诺说明早7点把羊群赶过来，但第二天晚上能到就不错了。拍着拍着戏，他们觉得不好玩，就跑到旁边的蒙古包里去喝酒了。自《无人区》，宁浩开始思考人性跟社会的关系，尝试用电影探索对世界的认知。在此之前，他的电影充满了花哨的游戏感，“更多的是一种男孩心理”。男主角徐峥当时正处在不上不下的表演瓶颈中，憋着劲儿，需要在大银幕上证明自己的价值。眼下，他已经是内地票房最高的导演。<br /><br />　　在宁浩的工作室里，现在还保存着一块片场拍摄板，上面清晰地写着《无人区》最后一场戏的拍摄时间为2010年6月26日。同时，《无人区》在2013年10月9日获得审查通过令，也被郑重其事地被裱在相框里，跟宁浩拿到的各种奖杯站在一起。<br /><br />宁浩工作室的拍摄板，《无人区》最后一场戏的拍摄时间为2010年6月26日<br /><br />宁浩在《无人区》片场<br /><br />拍片初衷<br /></div><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b163ca06afa.jpg" alt="" /><br />我们原来其实是动物<br /><br /><div align="left">人的智慧受限于生命本身<br /><br />&nbsp;&nbsp;&nbsp; Mtime：人为财死，鸟为食亡。徐峥也说过，《无人区》你是探讨人的动物性和社会性的互相斗争。这个故事最初吸引你的还有什么别的东西吗？<br /><br />　　宁浩：电影的主题就是这个。人本身都是有动物性的，而且是生下来先有这个，因为先是动物，然后才具备社会性，这种社会性其实是蛮重要的。但是这种动物性往往被我们掩饰了，我们并没有真正地发现我们原来其实是动物。但是这个动物实际上它是有用的，你只有在非常蛮荒的环境之下，你才知道动物性能够帮助你生存吧。<br />&nbsp;&nbsp;&nbsp; <br />　　但是你同时也会发现原来我是一个动物，不是说我们就要尊重这个动物性。你最终怎么办呢，就只有放弃动物性。把那样的自己杀掉，选择一个利他主义吧。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：所以徐峥这个角色，到最后必须要结束自己的生命？<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：其实是一种动物性的结束吧。当然从理想主义的角度来说，人最终会变成…我觉得人的智慧受限于生命本身，所以它会比较低级，没有办法。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：看来你对人性比较悲观？<br /><br />　　宁浩：不是对人性，我是对智慧的发展，不是说对人性是悲观的。作为智慧来说，生命是第一阶段，那它必然不会是一个终极阶段。它还会继续发展，如果要继续发展下去地话，生命的载体就显得特别初级了，它会有各种弊端在里面。<br /><br />&nbsp;&nbsp;&nbsp; Mtime：影片里，隐约能看到科恩兄弟电影的影响，比如《血迷宫》，比如《老无所依》。是不是你个人也比较喜欢他们的作品？<br />&nbsp;&nbsp; <br />　　宁浩：我觉得科恩的电影很好，我很喜欢。反正这都一类吧，都是属于比较黑色的，总体上偏荒诞主义的一些东西吧。我觉得是一种语言有它一种语言的最适合表达那个东西的方法。这个东西就是说如何拍得最动物化，低视角的方式特别适合，像狗的视点。也就是说，它就不能是正常人类的视点，人的身高的视点，而狗的是非常贴近地面的视点，它是一个非常像动物的视点。<br /><br />宁浩：《无人区》是在表达你本身生命的缺陷<br /><br />荒诞主义<br /><br />人类文明非常初步和低级<br /><br />每个作品有它的命运和生命力<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：无人区带有寓言的性质，这个概念是从哪里来？是因为你想的故事需要呈现这样一个环境背景，而无人区会更接近原始本真吗？<br /><br />　　宁浩：就是表达你本身生命的这个缺陷，就是有动物性的。那个这个动物性只能放在这样的环境里才能够凸显出来，我们要清晰地认识到。我一直认为人类的文明是一个非常非常初步的、低级的文明。站在文明角度来说，它只是文明的第一阶段，它还远远没有走到星球级文明，恒星级文明，所以它是一个摇篮文明。这个是个慌蛮和原始的文明。这种文明其实一直受限于我们自己本身是生物这个载体。<br /><br />　　这个载体当中，你既然是生物，你就必然要生存，你就有很多需要补给的能量，吃东西。这样就变成一种占有欲、自私、利己这些东西就会存在。那这种东西的存在是制约整个人类，或者说智慧文明向下发展的一个东西。因为我们只有形成合力、合体，我们的文明才能走出去，才能有更大的生产力。很复杂。<br /><br />主演黄渤曾表示，《无人区》是一部最不一样的宁浩电影<br /><br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：在《无人区》里，你把很多东西你擅长的都放弃了，比如多线叙事，幽默。虽然还能看到剧情上有黑色荒诞的东西。为了让影片的自身显得更有力量感，整部电影有诗意地把戏剧性的东西刻意往下压，是刻意为之吗?<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：也没有特别刻意。我觉得每个东西都是它自然形成的它自己最合适的方式。这事就跟搞装修一样，我一进到这个房间，这个结构，它就适合这个风格，就按这个方向去。我进到另外一个房，一个四合院，它不适合这个风格。那我就得往另外一个方向去，中式的或者是怎么样。<br /><br />　　当它有不同的底子的时候，它就一定会走向了另外一个方向。不要再四合院里愣要找极简主义或者是什么东西，可能就不对了。我觉得每个作品有它自己的命运和生命力，你要尊重它自己的东西。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：仅剩下的那点黑色荒诞，跟整部影片的基调还算和谐，算是你的一贯风格吗？<br /><br />　　宁浩：从我自己来说，我觉得一个导演就是性情，你可能某些性情你改变不了。或者你看待事物就这样，它总有荒诞的时候。拍什么东西总得有点荒诞主义，这才是我感兴趣的东西。<br /><br />宁浩认为，电影最重要的不是卖座，而是其中赋予的意义<br /><br />电影情怀<br /><br />我拍电影从来没准备过卖座<br /><br />生命只有一次，应当思考它的意义<br /><br />&nbsp;&nbsp;&nbsp; Mtime：大家都认为这是宁浩导演的转型之作，同时，影片总体表现的气质和叙事的确有差别。你个人是否认同转型的说法？&nbsp; <br /><br />　　宁浩：没什么转型。我最早是拍《绿草地》《香火》，那“石头”是转折，“石头”是转型之作，然后到后来拍别的。每一个阶段，就是这两年对什么东西感兴趣，就去玩玩那个，就探讨探讨那个。再过两年可能就发生了新的感兴趣的东西，就探讨探讨那个，是这样的吧，没有什么转型不转型。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：喜剧类型片就像一个围城。曾经给大众带来快乐，能很娴熟拍摄喜剧类型片的导演，都纷纷开始严肃了。比如冯小刚和你，都想表达更多自己的认知情怀。而更多其它导演正赶着要加入进来，甚至不惜转型来闯入卖座的序列里。你怎么看这个现象？<br /><br />　　宁浩：我没有什么围城，原先拍的时候也没准备卖座，就拍喜剧片的时候，也没准备说要多卖座，那也不是目的。也只是说就是拍电影，觉得这个挺好玩的就拍了，下回再找一个题材，那也挺好玩的，就把那个拍了。至于说它最终会不会卖座，这个事我也不知道。难道只有喜剧片才卖座吗，这是一个奇怪的国家。所以我也没有特意的奔哪个方向去。&nbsp;&nbsp; <br /><br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：你的上一部影片《黄金大劫案》引发了很多分歧、争议，你也承认自己有些方面做得不够好，甚至闭关了很长一段时间来反思创作。这些外界的分歧争议，以及反思的结果，是否会影响你接下来创作？<br /><br />　　宁浩：我觉得最大的问题，其实我自己对于什么东西要拍要说，是我自己要想的问题。小的时候呢，比如二十多岁的时候，你会觉得时间一大把，天天的随便搞点什么都可以。当你到三十多岁的时候，你会发现人生原来不是那样，你会知道人生有终点的，你会知道什么东西值得说，有意义的就说一说。<br /><br />　　随着你对电影、人生的认识不一样，你会知道有些东西可以说一说，有些东西是娱乐，没什么意思，也无趣了。你就会想，应该拿有限的生命去做一些更有意义的东西，这个东西是需要想的。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：跟《无人区》不同，《黄金大劫案》这种电影对于你而言，是纯粹属于娱乐吗？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 宁浩：其实也不是。这个片子对我自己很有意思的一个事，我会弄清楚什么叫牺牲，这个命题过去它在我的生命中，根本就不是一个问题。但是我觉得很重要，人的成长是需要靠不停的牺牲，就是不停的失去换来的，而且方式是流血，其实是蛮痛苦的过程。所以，每一部作品的过程都是让我自己对世界，或者对自己有认识的过程，算是我认知世界的方式。<br /></div><br />', 1387008800),
(50, '娱乐', 'ADSJF', '娱乐', '52a46dcad20e6.jpg', 238, '《黄金大劫案》不纯粹娱乐', '《黄金大劫案》不纯粹属于娱乐', '这个载体当中，你既然是生物，你就必然要生存，你就有很多需要补给的能量，吃东西。', '　随着你对电影、人生的认识不一样，你会知道有些东西可以说一说，有些东西是娱乐，没什么意思，也无趣了。你就会想，应该拿有限的生命去做一些更有意义的东西，这个东', 1, 2, '<div align="left">我们原来其实是动物<br /><br />人的智慧受限于生命本身<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b163e97c46f.jpg" alt="" /><br /><br /><div align="left">&nbsp;&nbsp;&nbsp; Mtime：人为财死，鸟为食亡。徐峥也说过，《无人区》你是探讨人的动物性和社会性的互相斗争。这个故事最初吸引你的还有什么别的东西吗？<br /><br />　　宁浩：电影的主题就是这个。人本身都是有动物性的，而且是生下来先有这个，因为先是动物，然后才具备社会性，这种社会性其实是蛮重要的。但是这种动物性往往被我们掩饰了，我们并没有真正地发现我们原来其实是动物。但是这个动物实际上它是有用的，你只有在非常蛮荒的环境之下，你才知道动物性能够帮助你生存吧。<br />&nbsp;&nbsp;&nbsp; <br />　　但是你同时也会发现原来我是一个动物，不是说我们就要尊重这个动物性。你最终怎么办呢，就只有放弃动物性。把那样的自己杀掉，选择一个利他主义吧。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：所以徐峥这个角色，到最后必须要结束自己的生命？<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：其实是一种动物性的结束吧。当然从理想主义的角度来说，人最终会变成…我觉得人的智慧受限于生命本身，所以它会比较低级，没有办法。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：看来你对人性比较悲观？<br /><br />　　宁浩：不是对人性，我是对智慧的发展，不是说对人性是悲观的。作为智慧来说，生命是第一阶段，那它必然不会是一个终极阶段。它还会继续发展，如果要继续发展下去地话，生命的载体就显得特别初级了，它会有各种弊端在里面。<br /><br />&nbsp;&nbsp;&nbsp; Mtime：影片里，隐约能看到科恩兄弟电影的影响，比如《血迷宫》，比如《老无所依》。是不是你个人也比较喜欢他们的作品？<br />&nbsp;&nbsp; <br />　　宁浩：我觉得科恩的电影很好，我很喜欢。反正这都一类吧，都是属于比较黑色的，总体上偏荒诞主义的一些东西吧。我觉得是一种语言有它一种语言的最适合表达那个东西的方法。这个东西就是说如何拍得最动物化，低视角的方式特别适合，像狗的视点。也就是说，它就不能是正常人类的视点，人的身高的视点，而狗的是非常贴近地面的视点，它是一个非常像动物的视点。<br /><br />宁浩：《无人区》是在表达你本身生命的缺陷<br /><br />荒诞主义<br /><br />人类文明非常初步和低级<br /><br />每个作品有它的命运和生命力<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：无人区带有寓言的性质，这个概念是从哪里来？是因为你想的故事需要呈现这样一个环境背景，而无人区会更接近原始本真吗？<br /></div><p align="left">　　宁浩：就是表达你本身生命的这个缺陷，就是有动物性的。那个这个动物性只能放在这样的环境里才能够凸显出来，我们要清晰地认识到。我一直认为人类的文明是一个非常非常初步的、低级的文明。站在文明角度来说，它只是文明的第一阶段，它还远远没有走到星球级文明，恒星级文明，所以它是一个摇篮文明。这个是个慌蛮和原始的文明。这种文明其实一直受限于我们自己本身是生物这个载体。、</p><div align="left">　　这个载体当中，你既然是生物，你就必然要生存，你就有很多需要补给的能量，吃东西。这样就变成一种占有欲、自私、利己这些东西就会存在。那这种东西的存在是制约整个人类，或者说智慧文明向下发展的一个东西。因为我们只有形成合力、合体，我们的文明才能走出去，才能有更大的生产力。很复杂。<br /><br />主演黄渤曾表示，《无人区》是一部最不一样的宁浩电影<br /><br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：在《无人区》里，你把很多东西你擅长的都放弃了，比如多线叙事，幽默。虽然还能看到剧情上有黑色荒诞的东西。为了让影片的自身显得更有力量感，整部电影有诗意地把戏剧性的东西刻意往下压，是刻意为之吗?<br />&nbsp;&nbsp;&nbsp; <br />　　宁浩：也没有特别刻意。我觉得每个东西都是它自然形成的它自己最合适的方式。这事就跟搞装修一样，我一进到这个房间，这个结构，它就适合这个风格，就按这个方向去。我进到另外一个房，一个四合院，它不适合这个风格。那我就得往另外一个方向去，中式的或者是怎么样。<br /><br />　　当它有不同的底子的时候，它就一定会走向了另外一个方向。不要再四合院里愣要找极简主义或者是什么东西，可能就不对了。我觉得每个作品有它自己的命运和生命力，你要尊重它自己的东西。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：仅剩下的那点黑色荒诞，跟整部影片的基调还算和谐，算是你的一贯风格吗？<br /><br />　　宁浩：从我自己来说，我觉得一个导演就是性情，你可能某些性情你改变不了。或者你看待事物就这样，它总有荒诞的时候。拍什么东西总得有点荒诞主义，这才是我感兴趣的东西。<br /><br />宁浩认为，电影最重要的不是卖座，而是其中赋予的意义<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b163fbee83e.jpg" alt="" /><br />电影情怀<br /><br /><div align="left">我拍电影从来没准备过卖座<br /><br />生命只有一次，应当思考它的意义<br /><br />&nbsp;&nbsp;&nbsp; Mtime：大家都认为这是宁浩导演的转型之作，同时，影片总体表现的气质和叙事的确有差别。你个人是否认同转型的说法？<br /><br />　　宁浩：没什么转型。我最早是拍《绿草地》《香火》，那“石头”是转折，“石头”是转型之作，然后到后来拍别的。每一个阶段，就是这两年对什么东西感兴趣，就去玩玩那个，就探讨探讨那个。再过两年可能就发生了新的感兴趣的东西，就探讨探讨那个，是这样的吧，没有什么转型不转型。<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp; Mtime：喜剧类型片就像一个围城。曾经给大众带来快乐，能很娴熟拍摄喜剧类型片的导演，都纷纷开始严肃了。比如冯小刚和你，都想表达更多自己的认知情怀。而更多其它导演正赶着要加入进来，甚至不惜转型来闯入卖座的序列里。你怎么看这个现象？<br /><br />　　宁浩：我没有什么围城，原先拍的时候也没准备卖座，就拍喜剧片的时候，也没准备说要多卖座，那也不是目的。也只是说就是拍电影，觉得这个挺好玩的就拍了，下回再找一个题材，那也挺好玩的，就把那个拍了。至于说它最终会不会卖座，这个事我也不知道。难道只有喜剧片才卖座吗，这是一个奇怪的国家。所以我也没有特意的奔哪个方向去。<br /></div><p align="left">&nbsp;&nbsp;&nbsp;&nbsp; Mtime：你的上一部影片《黄金大劫案》引发了很多分歧、争议，你也承认自己有些方面做得不够好，甚至闭关了很长一段时间来反思创作。这些外界的分歧争议，以及反思的结果，是否会影响你接下来创作？</p><div align="left">　　宁浩：我觉得最大的问题，其实我自己对于什么东西要拍要说，是我自己要想的问题。小的时候呢，比如二十多岁的时候，你会觉得时间一大把，天天的随便搞点什么都可以。当你到三十多岁的时候，你会发现人生原来不是那样，你会知道人生有终点的，你会知道什么东西值得说，有意义的就说一说。<br /></div><p align="left">　　随着你对电影、人生的认识不一样，你会知道有些东西可以说一说，有些东西是娱乐，没什么意思，也无趣了。你就会想，应该拿有限的生命去做一些更有意义的东西，这个东西是需要想的。</p><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mtime：跟《无人区》不同，《黄金大劫案》这种电影对于你而言，是纯粹属于娱乐吗？<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 宁浩：其实也不是。这个片子对我自己很有意思的一个事，我会弄清楚什么叫牺牲，这个命题过去它在我的生命中，根本就不是一个问题。但是我觉得很重要，人的成长是需要靠不停的牺牲，就是不停的失去换来的，而且方式是流血，其实是蛮痛苦的过程。所以，每一部作品的过程都是让我自己对世界，或者对自己有认识的过程，算是我认知世界的方式。<br /></div><br />', 1386908822);
INSERT INTO `mm_pnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `status`, `state`, `content`, `addtime`) VALUES
(51, '嘿嘿', '依然', '嘿嘿', '52a46e492f8cf.jpg', 68, '《蝴蝶飞》到《单身男女》', '《蝴蝶飞》到《单身男女》嘿嘿', '根据CEPA内容，香港电影可以从大陆融资，香港资本可以控股大陆影院。', ' 　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。', 1, 2, '<div align="left">从2003至今10年的时间里，CEPA改变了香港电影的格局。CEPA是“内地与香港更紧密经贸关系安排”的缩写，这项协议的签署让内地与香港合拍片可以享受国产片的同等待遇，给跌入谷底的香港电影敞开了一扇救命大门。<br /><br />　　根据CEPA内容，香港电影可以从大陆融资，香港资本可以控股大陆影院。这个商业上的利好条件，促使香港电影人开始了北上潮。从2003年开始，合拍片盛行，无论是大师级的徐克、许鞍华，还是中坚派的陈可辛、陈木胜、尔冬升都先后来到内地试水。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp; 在这10年里，前中期伴随着“港片衰落”、“港片已死”的舆论，多数香港人都经历了试探审查制度，水土不服，票房不理想，口碑欠佳的适应期。但在最近2、3年时间里，生命力极其旺盛的香港导演已经在跟内地合作拍摄的过程中，开始摸索到了一套生存方式，既能发挥自己的特长，还能充分利用内地的资金和观众市场。比如，《寒战》、《桃姐》、《一代宗师》、《龙门飞甲》等合拍案例的成功，让港片电影人重新找到自信与方向。<br /><br />&nbsp;&nbsp;&nbsp; 2013年贺岁档，是一个被港味环绕的贺岁档，揭幕贺岁的《扫毒》，随后赶到的《风暴》、《新警察故事》等都是港人主创的合拍电影，且影片整体质量都不错。<br /><br />&nbsp;&nbsp;&nbsp;&nbsp; 经历了摸索、不适、挣扎、反思的10年，现在香港电影人走到了一个新的破局前。时光网对谈9位香港导演，包括杜琪峰、许鞍华、陈可辛等，他们亲诉自己在CEPA10年里，如何认识内地，如何坚持或者放下港片导演的身份，找到大陆市场的感觉，找到合拍片的生存之道，最重要的是，他们经历过怎样的内心挣扎。<br /><br />其实限制对于创作不一定是坏事。有时候就是因为太自由，可能去到哪里自己都不知道了。有一些框框在，有一些限制在，干脆你就在这个框框里做到最好，能激发更大的动力。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1641fef087.jpg" alt="" /><br /><br /><div align="left">　　60岁时，杜琪峰还在不甘心的表示，如果可以，他希望“一辈子只在香港拍摄电影”。但时势比人强，在港片低迷的市场中坚守了15年，2011年，他用一部《单身男女》正式进军内地，这是银河映像真正进入国内市场的第一部合拍片。杜琪峰说：“我觉得时候到了。”<br /><br />试水尝试：从《蝴蝶飞》到《单身男女》<br /><br />　　其实，一直坚持坚守香港的杜琪峰有着丰富的合拍经验，早在1979年底，杜琪峰在内地粤北实景拍摄了第一部电影《碧水寒山夺命金》。2008年，他还执导了由周渝民和李冰冰主演的《蝴蝶飞》。两部影片都不太成功，但杜琪峰坦言，这只是给了他一些对合拍的经验和信心。<br /><br />　　打出银河品牌的《单身男女》终于在内地取得成功，商业上可谓颇有交代，杜琪峰都深感惊喜，表示十分意外。他公开表示，这部是银河的一次内地试水，之后他会将银河赖以成名的警匪品牌带入内地。<br /><br />正式打入：银河首部合拍警匪《毒战》<br /><br />　　拍《毒战》是银河映像与杜琪峰的一大转折点，第一次进入内地拍警匪、缉毒、重口味，兼带银河式的暗黑与宿命感。杜琪峰说基本找不到大陆有过类似的警匪片来做参考，但警匪不比爱情片，要考量内地的审查制度，“所以我也不知道哪些可以拍或者不能拍。差不多拍所有的戏我们都要讨论，听听各方的意见，电影送审后反馈回来以后，我们发现实际上结果比之前想象的好得多，需要修改的地方少很多。”<br /><br />　　在内地拍戏，对杜琪峰而言新鲜也不适应，他说内地有大山大河，取景开阔，但他又有港式风情情怀，最爱拍香港老街小巷；他以为天津是北方一定会下雪，结果拍《毒战》的时候，一片雪没拍到；他剧组香港人和内地人都有，他普通话不利落，和内地工作人员沟通总是不畅。拍《高海拔之恋2》拍了很久，杜琪峰说：“我们从来没有离开香港拍电影这么久。今年的冬天是最长的，这是我56年来过得最惨的。”<br /><br />　　暴脾气的杜琪峰谈起这些，颇为唏嘘不甘，但他也看的出来纯港片市场的衰落，回头看看他这些年的港片成绩：08年《文雀》收入559万港币、09年《复仇》收入162万港币，之后的《意外》和《PTU2机动部队》都分别为523万港币和390万港币。风格与口碑似乎不能完成更好的生存，进入内地、来到合拍领域成为了杜琪峰最终的选择。<br /><br />　　杜琪峰说拍电影30年了，如今感觉又回到了原点。<br /><br />10年内地战绩：<br /><br />《单身男女》&nbsp; 2011年&nbsp;&nbsp; 9550万元<br /><br />《夺命金》&nbsp;&nbsp;&nbsp;&nbsp; 2012年&nbsp;&nbsp; 2480万元<br /><br />《毒战》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2013年&nbsp;&nbsp; 1.4754亿元<br /><br />《盲探》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2013年&nbsp;&nbsp; 2.0913亿元 <br /><br />未来作品：《单身男女2》、《黑社会3》<br /></div>', 1387308843),
(52, '杜琪峰', '未来', 'MyMovie', '52a46ebf4ebac.jpg', 2, '杜琪峰拍电影30年杜琪峰', '从《旺角卡门》到《一代宗师》', '10年前和10年后，王家卫的电影风格和他的形象一样，似乎并无变化。', ' 　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。', 1, 2, '<div align="left">从《旺角卡门》到《一代宗师》，王家卫对于北上、合拍片的概念一直不置可否，10年前和10年后，王家卫的电影风格和他的形象一样，似乎并无变化。<br />&nbsp;<br />从未变过的个人风格<br />&nbsp;<br />　　王家卫的个人风格一向大于地域风格，90年代，以《春光乍泄》为首的几部影片折服戛纳，让他走上国际化路线，也让他早早卸下了“纯港片导演”的名号，2000年，《花样年华》在国际上拿奖无数，同时也获得内地上映的资格，最终取得1000万左右票房。<br />&nbsp;<br />　　2004年，他启用大陆演员章子怡领衔其新作《2046》，电影去上海取景，但王家卫从不认可“合拍和北上”这种说法。他的电影如其所说，甚少有固定的地域文化，只有浓烈的个人风格，演员、场景、故事、时代在他手中，最终都会归纳为“王家卫式”的。<br />&nbsp;<br />快工与慢工 国际与内地<br />&nbsp;<br />　　第一部英文电影《蓝莓之夜》是王家卫拍给好莱坞的，全英文对白、全欧美阵容，速度超快，毫无突破，这次试水他强调的是：“我想知道同样的经验，在不同的文化和环境里，会以怎样的方式呈现。”<br />&nbsp;<br />　　很快他陷入了《一代宗师》这个大坑，早在1996年，王家卫拍《春光乍泄》的时候就有了要拍《一代宗师》的念头，他拜访各派名师及后工，用了8年时间筹备，邀请内地编剧打造剧本，抵押房产去支撑，果断的“十年磨一剑”。《一代宗师》今年1月内地上映，票房迅速过亿，成为王家卫电影票房之最。<br />&nbsp;<br />　　王家卫说：“如果香港电影本身是行的，又何止‘北传’。”（“北传”是《一代宗师》中南方功夫流传到北方的说法，王家卫此处引用一语双关）<br />&nbsp;<br />10年内地战绩：<br /><br />《2046》&nbsp;&nbsp;&nbsp;&nbsp; 2004年 3000万元<br /><br />《一代宗师》 2013年 2.8828亿元<br /><br />师心中总无地域之差，老怪徐克也一样。<br /><br />　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。<br /></div><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b1644d9ee0d.jpg" alt="" /><br />从无地域之心 一直在尝试<br /><br /><div align="left">　　2005年公映的《七剑》便是他尝试与内地深入接触的一次“实验”，起用了陆毅、孙红雷等大陆演员。2008年由内地博纳影业出品的《女人不坏》更是纯粹地接近于“大陆现代都市戏”，但是为了保证质量，邀请韩国著名电影人郭在容担任编剧，但他仍延续了21年前《刀马旦》“三个女人一台戏”的套路，被很多人视作是他的转型之作。<br /><br />　　徐克的心态很轻松，他没有那么多所谓的“艺术节操”要保护，甚至认为“把不同的意图，不同的规模，不同的成本的作品，放在一个平等的平台去说谁好谁不好，这个没必要。”当然，“赚快钱”也是很多人怀疑他炮制这个作品的意图之一。2008年出品的《深海寻人》有这个嫌疑，徐克选择了一个日本故事，他希望作品能与“北上淘金热”的电影有所不同。<br /><br />新视觉武侠征服中华市场<br /><br />&nbsp;　2010年，合资片《狄仁杰之通天帝国》出炉，这又是一次徐克回归拿手武侠片的机会，也是他把商业片做得更大更华丽的一次创举，甚至做到“每30秒一个特效镜头”，该片获得票房佳绩，也成为香港金像奖的大赢家。在“名利双收”这条路上，“老怪”总是有自己独特的成功之道，因此该片在三年后出了续集。但是真正让“老怪”彰显霸气的作品，却是2011年出品的《龙门飞甲》，主要阵容几乎全是内地演员，炮制的还是首部3D技术的华语武侠大片。<br />&nbsp;<br />　　电影对他来讲，是不是“香港的”概念很模糊，他认为：“现在香港大陆台湾这三地常常会有投资合作，人员幕前幕后合在一体，那怎么去决定这个是香港电影，还参加金像奖？从大中华的概念来讲，我们是没得分的。”<br />&nbsp;<br />10年内地战绩： &nbsp;<br /><br />《七剑》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2005年&nbsp; 8345万元<br /><br />《女人不坏》&nbsp; 2008年&nbsp;&nbsp; 2280万元<br /><br />《狄仁杰之通天帝国》&nbsp; 2010年&nbsp;&nbsp; 2.955亿元<br /><br />《龙门飞甲》&nbsp; 2011年&nbsp; 5.4055亿元<br /><br />《狄仁杰之神都龙王》&nbsp; 2013年&nbsp;&nbsp; 6.0172亿<br /></div><br />', 1387108865),
(53, '宽泛', '依然', '宽泛', '52a46f1c0fca5.jpg', 0, '许鞍华对于题材选择一向自主', '许鞍华题材选择一向自主而宽泛', '许鞍华认为，在哪里拍片子并不重要，重要的是题材是不是自己喜欢与擅长的。', ' 　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。', 1, 2, '<div align="left">许鞍华对于题材选择一向自主而宽泛，从剧情、喜剧、武侠、惊悚、同性恋，到名著改编、女性主义，各式多元主题，她都乐于尝试，许鞍华认为，在哪里拍片子并不重要，重要的是题材是不是自己喜欢与擅长的。<br /><br />不拘一格内地试水<br /><br />　　2002年，内地公司力邀许鞍华执导电影版《玉观音》，许鞍华迫不及待的跑去书店买了港版《玉观音》，一口气看完，随即北上接了这个片子。当时如日中天的赵薇与谢霆锋主演本片，许鞍华却遭遇评价与票房的滑铁卢，事后连许鞍华自己都承认，这是一部失败的作品。<br /><br />　　这次失败后，许鞍华却没有返回香港，而是在内地继续尝试，2007年，一部讲述内地老太太生活的《姨妈的后现代生活》出炉，这部女性题材之作让祖籍辽宁鞍山的许鞍华，再次回到了60年都未踏足的故土。影片获得了台湾金马奖三项提名、香港电影评论学会大奖三项大奖，斯琴高娃更是因此再获得香港电影金像奖最佳女主角。但本片叫好不叫座，内地公映半个月左右，只有500万左右的入账，可谓惨淡。<br /><br />回归拍港片 但并非对抗内 <br /><br />　　对此，许鞍华曾自我总结教训，她说自己的拍片思维和徐克就很不同，她没法用想象来拍电影，非自己生活领域的大片都很难驾驭，她最擅长的还是那些生活气息浓重的电影，而这种类型找投资本就困难，来内地试水，接大陆的地气仿佛又不够得心应手，这让她最擅长的变成了最别扭的。<br /><br />　　那几年许鞍华有点纠结，最终还是回到了香港。她想拍讲述天水围一桩惨案的电影，但又怕投资方不给钱，想来想去就谈了先拍一个温暖版的“天水围”，结果这部温暖的《天水围的日与夜》横扫了当年的金像奖。<br /><br />　　接着，2011-2012年许鞍华用一部《桃姐》改变了之前的纠结现状，一部投资不大，题材小众的电影，不仅通杀威尼斯、金马、金像，在内地电影市场也获得了强势的收益。<br /><br />　　试水内地并不成功的许鞍华，回归港式题材就“马到功成”，对此，许鞍华说：“我拍香港题材不是对抗性的，对我个人而言，我觉得我是那种能拍我就拍的。有喜欢的题材，但这个题材不能进到内地，却同时有老板肯投资，那我就一定会拍。我这不是赌气，只是想拍一些我喜欢的。打个比方，有人来找我拍合拍片，投资也已经搞定，但是那个题材我不喜欢，我也不会拍。”<br /><br />10年内地战绩（2003-2013）：<br /><br />《玉观音》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2003年 约500万<br /><br />《姨妈的后现代生活》2007年 664万<br /><br />《桃姐》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2012年&nbsp; 6819万元 <br /><br />回首来内地拍戏的这8年，失去的是拍我自己生活本能的东西。拍现实题材我是不费劲的，是我的本能。但我刚来内地那个时期，因为一定要拍古装大片，就好像失去了这个本能。这次拍《中国合伙人》，我的本能又可以回来用了，就变成没有什么失去的。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b16469bc626.jpg" alt="" /><br /><br /><div align="left">　　“我是一个十二岁就离开了香港的人，我在传统第一印象还不是一个典型的中国人，也不是一个典型的香港人。因为我的中文的程度就到小学，其实我连中学都是念英文的。来内地拍戏，得到的是最多的是对现在的内地的一些民生、人文、文化等的认识、以及认知。也使到我更能明白中国的传统的文化历史。”<br />&nbsp;<br />先爱情再古装 拍符合内地市场规则的作品<br />&nbsp;<br />　　在内地拍过两部武侠大戏的陈可辛自认没有所谓的“武侠梦”，他喜欢专注于拍爱情片，于是在2005年北上拍了一部《如果.爱》，当时他考虑的是仍是市场，所以在电影里将小情小趣的东西放大，再加上歌舞场面，无非是“希望能吸引观众进电影院”。<br />&nbsp;<br />　　“《如果·爱》之后，我下一部就拍了《投名状》，就把它再扩大到真正的符合内地的产业规矩和规律的电影。”在内地为他赢得了口碑和不错的票房收益，但在海外市场票房并不尽如人意，他自己都不得不承认：“《投名状》使得我更认清了中国电影在世界舞台上的角色。”接下来2011年公映的《武侠》，又是陈可辛认为“还是在讨好市场”的一个戏，但与此同时他也在寻找某种突破，回归他原本想做的一些东西。<br />&nbsp;<br />接地气 拍现实 真的去讲内地时代的故事<br />&nbsp;<br />　　其实，陈可辛他们这一代，是受国外教育长大，港人的身份坚持似乎没有前辈们那么泾渭分明了。他很快就选择在内地开创新的事业天地，“有13亿人这么大的潜在市场，其实当一个电影在中国成功，差不多等于是世界成功。”<br />&nbsp;<br />　　几经试水后的2013年，他说：“非常想拍改革开放30年来的人和事，那个年代我觉得非常有趣，应该是中国最有趣的三十年。”<br />&nbsp;<br />　　在北上的香港导演纷纷拿出古装大片和警匪大戏来赚取内地人眼球的时候，陈可辛却在挑战“接地气”这件事，他抓住了这个机会回归现实题材，做了一次自己擅长的梗，这又是他的“第一次”——首次接触内地现实题材作品；《中国合伙人》让陈可辛彻底融入了内地，通过电影打造了他理解中的“中国式梦想”，这部首部体现内地时代大潮发展的影片居然来自一个香港人，于是微妙的争议必不可少。而最终，影片票房收益过五亿大关的影片，无疑将让他对掌控内地市场更具信心。<br />&nbsp;<br />10年内地战绩（2003-2013）：<br /><br />《如果·爱》 2005年 2980万元 <br />《投名状》&nbsp; 2007年&nbsp; 2.011亿元<br />《武侠》&nbsp;&nbsp;&nbsp;&nbsp; 2011年 1.733亿元<br />《中国合伙人》 2013年&nbsp; 5.3928亿<br />&nbsp;<br />内容方面我们要和大陆的规则要配合，然后对白也有些不同，我觉得这个门我要慢慢的打开，因为合拍片的一些条件，我们是要去跟从，但有些时候，在创作的空间也要有自己发挥的，就要拿一个平衡吧，我希望大胆的拍出来，希望他们让我过。”<br /></div><br />&nbsp;<img src="/MM/1302/Uploads/News/article/a_52b16478678bb.jpg" alt="" /><br /><br /><div align="left">　　陈木胜说：“我真的好想在首都的地标上拍一场火爆的动作戏。”他表情很认真，一点都不像开玩笑，“二三线城市怎么有意思呢，要拍就在北京上海拍，要拍就在关键性地标上拍。”<br /><br />好想在首都地标拍火爆场面<br /><br />　　陈木胜是传统的港式警匪动作片导演，动作片导演都想在大地方拍大场面，连杜琪峰都慨叹过：“大陆有大山大河，香港没有啊。”陈木胜也一样，“我真的好想拍，如果有部门能支持我，我可以拍一个很大型的中国的警匪片，能够把中国的电影发扬到外面，这都是我的心愿。”<br /><br />　　合拍片是趋势——陈木胜对此从未反抗和纠结，他TVB电视台出身，浸淫传统港式制作多年，内心有自己的审美取向，但北上内地、征服内地市场，他认为是大势所趋，毫无纠结的必要。<br /><br />拍电影是要守电影规则的<br /><br />　　2008年，《保持通话》让陈木胜向大陆市场全面挺进，他抱定的电影宗旨是“找那个内地和香港观众之间的平衡点，现代动作片要符合大家的心声，要有看得明白的故事，又要曲折刺激，大场面也要好看。”<br />&nbsp;<br />　　注重娱乐性使得他的《宝贝计划》、《男儿本色》和《保持通话》在内地都取得不错的票房成绩。陈木胜是非常迎合市场的，他深谙与内地合作的套路，秉承电影“娱乐性至上”的原则，坚持：“把片子拍得具有商业味道，让老板把整个电影运作下去。”<br />&nbsp;<br />　　“有时候明知道这个桥段不可能过，那我就不拍了吧。电影是有规则的，老板投资那么多钱，我不能因为个人原因让他们冒那么大风险，我是拍一个商业片，比如我是在拍一个文艺片，那可以把自己的空间尽量发挥出来，观众看不明白，也不重要，只要我自己爱就可以了。可如果是在商业片里运作，我一定会把这个片拍得具有商业的味道，让老板把整个电影运作下去。”<br /></div><p align="left">&nbsp;10年内地战绩（2003-2013）：</p><div align="left">《宝贝计划》 2006年 9200万元 <br />《保持通话》 2008年 4400万元<br />《全城戒备》 2010年 8800万元<br />《新少林寺》 2011年 2.103亿元<br />《扫毒》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2013年 首周7850万（仍在上映）<br /></div><br />', 1387308889),
(54, '正道', '未来', '正道', '52a46f6966345.jpg', 97, '把中国电影推出去是正道', '把中国电影推出去是正道正道', '彭氏兄弟的市场不拘地域，他们认为进军内地市场就是大势所趋，“我们已经来晚了。', ' “我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。 “我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。', 1, 2, '<p align="left">知识分子张之亮：把中国电影推出去是正道</p><div align="left">“我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。但那时因为西藏敏感话题，有关部门只能让我们在坝上拍，这完全就丢掉了《唐卡》的意义，最终我只能放弃了。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1648d8e116.jpg" alt="" /><br /><div align="left">　　问起张之亮对港片、合拍片这几年发展的看法，他很干脆的表示：“我这些年一直在内地拍片，没有关注香港这边。”<br />&nbsp;<br />一直内地拍片 从未顺利过<br />&nbsp;<br />　　的确，张之亮新千年之初就来内地摸索拍片，2004年拍了电视剧《丝路豪侠》，无声无息。2006年，他放弃了自己擅长的民生题材，“这种东西，如果拍得很表面那我还不如不做，而当时内地已经有了拍大制作电影的气候，我就想去尝试。”他找刘德华拍了大制作《墨攻》，但在大陆评价只算得上不冷不热。<br />&nbsp;<br />　　尽管如此，但张之亮把创作核心定在内地的决心不变了，之后几年几经尝试，最终都是一声叹息，“几年前我接手了一个项目，就是后来汤唯主演的《晚秋》，当时我完成了剧本，投资也搞定，剧组人员都已经开始陆续埋位了，但最后由于审批原因，我们没办法进行，前期损失了一大笔钱，我的剧本也白费了，一分钱也没拿到。后来韩国方面就把这部片拿到美国去拍了。我自己觉得很挫败，对付出心血的主创人员也有很大打击。”再后来，张之亮又想拍以“文成公主进藏”为主题的武侠片《唐卡》，却因为西藏原因放弃。<br />&nbsp;<br />接地气太眼浅 把中国电影推出去是正道<br />&nbsp;<br />　　后来，张之亮选择了比较保险的路数——现代都市文艺片。在2008年推出了《车票》，2011年推出了《肩上蝶》，这些投资不大，题材安全的作品，却依然未让张之亮的北上之路顺利。尤其是《肩上蝶》一片因宣传问题，与制片方、发行方产生了矛盾，最后导致“裸映”，使得该片票房完全不理想。这部张之亮首次尝试“真人加动画”的作品，从融资过程到公映宣传，几乎是举步为艰。<br />&nbsp;<br />　　在推出电影《车票》的时候，张之亮也曾经试图与内地导演朱近联合执导一部叫《马头琴》的历史大片，但在筹建中途也是不了了之。<br />&nbsp;<br />　　“期待与现实总是不同的，对于很多著名的港台导演，大家对他们已经有了‘标签’意识，觉得应该是怎样的，而没有平心静气地去看他们。此外，由于文化背景问题，在揣摩题材时，内地导演和港台导演是有不同的看法。”张之亮说。<br />&nbsp;<br />&nbsp;10年内地战绩（2003-2013）： <br />《墨攻》 2006年 6150万元<br />《肩上蝶》2011年 680万<br />鬼导彭氏兄弟：老板给钱，我们什么都能拍<br /><br />“其实我们已经来晚了很多了。其实香港很多导演基本上把香港的家已经搬到北京来，所以我们其实已经来晚了。但是我觉得整个市场的发展，我觉得最终还是必须到这里来。”<br /></div>&nbsp;<br /><img src="/MM/1302/Uploads/News/article/a_52b1649a866c5.jpg" alt="" /><br /><br /><div align="left">　　在和彭氏兄弟聊合拍片的话题时，他们从头至尾的回答都很简单直接，什么内地香港，泰国美国，哪里的老板给钱，我们就到哪里拍。<br /><br /></div><p align="left">谁给钱谁是老大</p><div align="left">　　彭顺彭发是泰国华侨，港人身份更是看得淡了，他们出道就是奔着开拓香港之外市场而行的：2002年成功推出了《见鬼》，甚至在2008年还入驻好莱坞拍了《曼谷杀手》；2010年又与台湾合作拍了惊悚片《童眼》。<br /><br />　　彭氏兄弟的市场不拘地域，他们认为进军内地市场就是大势所趋，“我们已经来晚了。”彭顺这样说。与其说是因为地域性，不如说是他们的题材问题，鬼片无法通过审查，他们赖以成名的元素要放弃或者改装。<br /><br />　　2009年，兄弟连一同拍摄了《风云2》，这部用技术堆砌的武侠续集，并非彭氏兄弟拿手题材，事实证明，成品不伦不类，最终拿到近6000万的内地票房。之后，彭发自己出发，与内地合资拍摄了《追凶》。这部早在2010年就已经在泰国杀青的惊悚片，成为他们进军大陆市场的又一部试水之作，彭顺说：“整个环境包括内地的电影市场都有了很大的变化，也有一些没有大投资、大明星的电影拿到了好的票房，最重要的是，你的电影好不好看，这个好看就是要带给观众娱乐的感觉。”<br /><br />拍一部有票房的、非鬼片的合拍片<br />&nbsp;<br />　　2013年，彭氏兄弟推出了这样一部达到他们理想目标的合资片——3D灾难大片《逃出生天》，他们也自认这是在内地发展最重要的一部作品，如果得不到认同，他们就真不知道到底要拍什么戏了。<br />&nbsp;<br />　　之所以要拍这样的影片，还有一个原因彭顺讲得很实在：“每一个地方都有自己的法律跟规矩，内地基本上不可以拍鬼片，而我们跑到这个市场里也刚好需要接受。”所以彭氏兄弟在内地的发展一定要抛开从前的观念，“因为电影要进步，不可以停留在十年二十年前的状况。”<br />&nbsp;<br />10年内地战绩（2003-2013）：<br /><br />《风云2》 2009年 5953万<br /><br />《逃出生天3D》 2013年 1.3271亿元<br /></div><br />', 1386008925),
(55, '导演', '依然', '导演', '52a46fbb527b6.jpg', 1, '我不觉得自己是个港片导演', '我不觉得自己是个港片导演导演', '黄精甫的处女作《江湖》在04年可谓大制作，当时投资4000万成本，是曾志伟的一次豪赌', ' “我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。 “我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。', 2, 2, '<div align="left">奇诡黄精甫：电影不是拍给观众看的<br /><br />“我对合拍片没有概念，我拍电影就是拍电影，我没有分大陆和香港，如果有个韩国人叫我去拍韩片，我也ok的，因为我的工作就是拍片，什么市场发行啊，也不是我的专长。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b164afaed09.jpg" alt="" /><br /><br /><div align="left">　　黄精甫的处女作《江湖》在04年可谓大制作，当时投资4000万成本，是曾志伟的一次豪赌。那时候CEPA刚刚施行，他寄望这部聚集了刘德华、张学友、陈冠希、余文乐的黑帮之作，能够以“合拍片”身份进入内地，取得超越《无间道》的成绩。<br /><br />　　信心很美，结果很苦，本片送审后，因为主题灰暗几乎是当场被毙，审批方指本片删掉了公安警察的戏份，黑帮灰暗成份过重，报批时内地演员有李亚鹏，成片里也消失了，这不符合合拍片主演内地占1/3的要求。最终，《江湖》从合拍片变为了协拍片，与内地无缘。<br /><br />我不觉得自己是个港片导演<br /><br />　　对于《江湖》未能引进内地，现在问起黄精甫，他显得并不在意，“我就是个拍片的，那些票房啊、发行啊，我不懂，也不想懂。”但《江湖》之后，再拍阵容升级的《阿嫂》，发行上又遭遇了同样的命运，2005年，《阿嫂》通过初审后却因“涉黑”再次要求被删改，也没能在第一时间在内地大规模上映。黄精甫说：“《阿嫂》时候，我发现自己状态不太对了。我看到监视器都想吐。当时，我对自己说不行了，我得停一停。” &nbsp;<br /><br />　　他自我雪藏了多年，间中偶发的拍了几部港产小片，都无声无息或者饱受恶评，黄精甫的纠结仿佛和内地审查、内港地域无关，他念念叨叨这几年，无非就是质疑为什么观众还是以为他只是会拍重口味cult，“其实我最爱宫崎骏了呀。我也是能拍纯爱的导演，不，我想，一个导演就应该什么都拍。”无论内港、题材与风格。<br /><br />　　“我不觉得我是个港片导演呀。”对于看待港片和合拍片的问题，黄精甫倒是说得非常直接，他不看香港电影，钟情宫崎骏和好莱坞，最爱的导演是黑泽明，他只是香港人，但他不认为自己算港片导演。<br /><br />我不会考虑内地观众口味 观众会死的<br /><br />　　黄精甫执导的新作《恶战》明年1月上映，这是他第一部正式引进内地的合拍片，没想到一等就是10年。<br />&nbsp;<br />　　讲起正式进军内地，审查制度和文化口味还是不可避免的话题，“审查还好了，这次题材嘛是讲过去的，没那么敏感啦。就剪了一两个镜头，不能太血腥，我也拍了一些，结果都不行，我就去掉了，没有办法。当然，我也没有很坚持我必须要这个镜头。在这方面，我是可为可不为的。”<br />&nbsp;<br />　　自称不是港片导演的黄精甫说，就算来到内地，面对这么大的市场，他依然不会考虑观众的口味，“我觉得电影不能拍给观众，电影是为自己拍的，观众会死的，60年后他死了，那这个电影是不是也死了，什么叫经典，经典就是黑泽明拍了一个他想拍的电影，到现在，我们看还是觉得非常棒！我们还觉得它会流传下去，好电影是过了几百年，去了不同地方，无论内地还是香港，还是好电影，好电影都是导演为自己拍的。 ” <br />&nbsp;<br />10年内地战绩（2003-2013）：<br /><br />《阿嫂》 2005年&nbsp;&nbsp;&nbsp; 500万&nbsp; （部分地区）<br />&nbsp;<br />&nbsp;未来作品：《恶战》（即将上映）<br /><br />辅助阅读 资料附录<br />何为CEPA<br />&nbsp;　　<br />　　为促进内地与香港经济共同繁荣与发展，2003年6月29日，中国中央政府与香港特区政府签署《内地与香港关于建立更紧密经贸关系的安排》（英文为Closer Economic Partnership Arrangement，简称CEPA），内容主要涵盖货物贸易、服务贸易和贸易便利化三个方面。<br /><br />　　(1) 香港拍摄的华语影片经内地主管部门审查通过后，不受进口配额限制在内地发行。 <br />　　(2) 香港拍摄的华语影片是指根据香港条例设立或建立的制片单位所拍摄的，拥有75%以上的影片著作权的华语影片；主要工作人员组别中香港居民应占整体员工数目的50%以上。 <br />　　(3) 香港与内地合拍的影片视为国产影片在内地发行。 <br />　　(4) 香港与内地合拍的影片，港方主创人员所占比例不受限制，但内地主要演员的比例不得少于影片主要演员总数的三分之一；对故事发生地无限制，但故事情节或主要人物应与内地有关。<br />&nbsp;<br />　　大“港片”的概念主要分合拍片和港产粤语片两种，其中合拍片进入内地电影市场，不再受引进片配额限制。而纯港产粤语片，进入内地市场一度按境外引进片算，受进口片的配额限制。而去年12月，香港发展局宣布，港产片将不受配额限制、以引进方式在广东省以粤语版同步上映，而在全国其他地区，如上海、北京、成都等城市，如有需要，也可以放映部分影片的粤语版。而昨天CEPA的新补充协议意味着：更多的内地观众将近距离接触原汁原味港片，香港“本土制造”也将拥有更广阔的市场。<br /></div><br />', 1387028893),
(56, '引进', '依然', 'llll', '52a472300feee.jpg', 11, '《神偷奶爸2》已确定引进', '《神偷奶爸2》已确定引进引进', '据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。', '据可靠消息透露，2013年最卖座动画电影《神偷奶爸2》已确定引进，有望成为明年第一部进口分账大片，于2014年1月10日杀进内地贺岁档据可靠消息透露，2013年最卖座动画电影《神偷奶爸2》已确定引进，有望成为明年第一部进口分账大片，于2014年1月10日杀进内地贺岁档。。', 2, 2, '<br /><div align="left">　　《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。<br /><br />　　《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。<br /><br />　　故事承接第一部剧情，主人公格鲁洗心革面给三个养女当起了全职奶爸，然而打击犯罪组织“反恶人联盟”找上门来，把一个对抗恶棍的任务交给了他。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b164c8c40eb.jpg" alt="" /><br /><br /><div align="left">奶爸萌娃也是本片的一大卖点<br /><br />　　其实早在三年前《神偷奶爸》第一部问世的时候，可爱的胶囊小黄人形象就已经红遍了网络，被不少影迷所喜爱，但最终影片未能在内地公映。此次虽然有些姗姗来迟，《神偷奶爸2》终于还是弥补了这份遗憾。<br /><br />　　除此之外，影片在中国的表现也将最终对全球动画票房榜进行一次“洗牌”。目前《神偷奶爸2》（排名第五） 与第四名《怪物史瑞克2》之间的差距只有约150万美元，与第三名《海底总动员》差1840万，究竟小黄人军团们能攀升至多高呢？<br /><br />【附：全球动画票房top5（单位：亿美元）】<br /><br /><br /></div><table height="196" cellspacing="1" cellpadding="1" width="594" align="left" border="1"><tbody><tr><td>排序</td><td>电影</td><td>全球票房</td><td>制作成本</td><td>回报比</td><td>北美票房</td><td>海外票房</td><td>出品公司</td><td>北美映期</td></tr><tr><td>1</td><td>《玩具总动员3》</td><td>10.63</td><td>2.00</td><td>5.32</td><td>4.15</td><td>6.48</td><td>皮克斯/迪士尼</td><td>2010.6.18</td></tr><tr><td>2</td><td>《狮子王》</td><td>9.87</td><td>0.45</td><td>21.93</td><td>4.23</td><td>5.65</td><td>迪士尼</td><td>1994.6.15</td></tr><tr><td>3</td><td>《海底总动员》</td><td>9.37</td><td>0.94</td><td>9.97</td><td>3.81</td><td>5.56</td><td>迪士尼/皮克斯&nbsp;</td><td>2003.5.30</td></tr><tr><td>4</td><td>《怪物史瑞克2》</td><td>9.20</td><td>1.50</td><td>6.13</td><td>4.41&nbsp;</td><td>4.79</td><td>梦工厂</td><td>2004.5.19</td></tr><tr><td>5</td><td>《神偷奶爸2》</td><td>9.18</td><td>0.76</td><td>11.92</td><td>3.64</td><td>5.42&nbsp;</td><td>照明娱乐/环球&nbsp;</td><td>2013.7.3</td></tr></tbody></table><div align="left"><br /></div><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p><br /></p><p>《神偷奶爸2》是照明娱乐旗下的招牌动画，由环球公司发行。温馨的家庭主题加上小黄人卖萌刷贱的好本领，使得影片来势凶猛。今年7月暑期档开始陆续登陆后，一路上全无敌手，在全球范围拿下9.18亿美元的惊人成绩，稳坐2013年动画电影卖座榜首，影史最卖座动画第五名。据介绍，影片投资仅7600万美元，也就是说这部电影的回报率高达12倍。</p><p><br /></p>', 1387328921),
(57, '相隔', 'ADSJF', '相隔', '52a473250d492.jpg', 1, '沃克为自己写下的简介尔市', '保罗·沃克出生于加州格兰岱尔市', '事发不久，沃克所属的环球影业公司发表声明，对沃克的去世表示哀悼，', '　卢达·克里斯：从一开始你就让人感受到你的谦卑。每次你出现，都会带来不同。我们就像兄弟一样，我们的生日相隔只有一天。你会永远在我们的心底留有一个位置，这份记忆将　卢达·克里斯：从一开始你就让人感受到你的谦卑。每次你出现，都会带来不同。我们就像兄弟一样，我们的生日相隔只有一天。你会永远在我们的心底留有一个位置，这份记忆将', 2, 2, '<div align="left">保罗·沃克因主演2001年《速度与激情》第一部而蜚声影坛，此后他与范·迪塞尔搭档主演了四部续集（《速度与激情3》因演员大换血除外），成为了这部影史最成功的赛车动作电影系列代言人，阳光俊朗的形象为其赢得了无数影迷。而尚在拍摄中的《速度与激情7》也就成为了他的银幕绝唱。（相关阅读：保罗沃克车祸身亡 &quot;速度与激情7&quot;或延迟但不搁置）<br /><br />　　据美媒消息，沃克当时是参加为菲律宾台风筹款的慈善车展而来到圣塔克拉利塔，他坐在一位朋友开的保时捷车副驾驶上发生了意外。失控车辆撞上路边的树木，随即燃起大火并爆炸。他和那位司机朋友均在爆炸中身亡。当地时间晚间，洛杉矶警方对事故调查结果发布了公告，称“超速是造成惨剧的主要原因”。<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b164e188e78.jpg" alt="" /><br /><br />事故现场留下的保时捷残骸<br /><br /><div align="left">　　事发不久，沃克所属的环球影业公司发表声明，对沃克的去世表示哀悼，全文如下：“环球公司的全体员工都悲痛欲绝。在过去的14年时间里，保罗一直是我们公司最受喜爱和尊敬的成员之一。他的逝世不仅对我们环球公司，对《速度与激情》系列的每一个工作人员和无数粉丝而言，都是一个巨大的损失。我们在此对保罗的家庭奉上最深切、沉痛的哀悼。”<br /><br />　　与沃克搭档主演《速度与激情》系列的男主角范·迪塞尔发表悼文称：“兄弟，我太想念你了。我真的说不出话来。天堂里多了一位新来的天使。安息吧。”而尚在拍摄中的《速度与激情7》导演詹姆斯·温也写到：“我的伤心无法用语言来描述，此刻我不能做任何事情，一片茫然……”<br /></div><img src="/MM/1302/Uploads/News/article/a_52b164fc690a1.jpg" alt="" /><br /><br />2001年《速度与激情》中金发俊朗的保罗·沃克走进了观众视野<br /><br /><div align="left">保罗·沃克与《速度与激情》系列主创留下的阳光合影<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1650fb7832.jpg" alt="" /><br />twitter账号上沃克为自己写下的简介是：喜好户外，海洋迷，车控……偶尔演戏<br /><br /><div align="left">　　保罗·沃克出生于美国加州的格兰岱尔市。他从小就踏入演艺圈，不但是一个童星，也当过许多广告的模特儿。1998年，保罗·沃克以青春搞笑喜剧《Meet the Deedles》及《欢乐谷》两片的演出，展开真正的演艺生涯。2000年，他成功饰演了《头骨俱乐部》中一名富家子弟，但让他真正走进主流观众视野的当属2001年与范·迪塞尔一同主演的《速度与激情》。影片中他饰演一个卧底警探，他在电影中玩车的酷样，成为当时年轻人最欣羡的帅哥偶像。之后的12年，保罗·沃克一直没有离开过该系列，他健康阳光的形象一直是该系列吸引人的要素之一。就在车祸发生前不久，他还在为宣传新一部《速度与激情7》与范·迪塞尔一同接受采访。<br /><br />　　除了是一位狂热车迷之外，保罗·沃克热爱海洋，曾经的志向是成为海洋生物学家。在2011年，他实现了自己毕生的梦想，在国家地理频道的海洋探险系列片《Expedition Great White》中担任主角。保罗·沃克和前女友在1998年有了一个女儿，名叫Meadow。<br />&nbsp;<br /></div>', 1386828954);
INSERT INTO `mm_pnews` (`id`, `author`, `edit`, `source`, `picname`, `looknum`, `title`, `title2`, `summary`, `explain`, `status`, `state`, `content`, `addtime`) VALUES
(58, 'ADSJF', 'ADSJF', '双方均', '52a4753e94ccb.jpg', 2, '心地善良的猛犸象曼尼身上', '心地善良的猛犸象曼尼身上身上', '2009年《冰川时代3》上映后，蓝天工作室已经成为与皮克斯梦工场相提并论的动画工作室。', '导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动', 2, 2, '<div align="left">《冰川时代》系列和《里约大冒险》在全球范围内大卖让世界知道了这家成立之初只有6个人的工作室。不过，也正因为这样，媒体认为蓝天工作室所能驾驭的影片题材只能局限在喜剧上。<br />&nbsp;<br />　　日前，蓝天工作室创始人、本片导演克里斯·韦奇接受了时光网的独家专访，在专访中他揭开了让蓝天工作室与众不同的奥秘。《森林战士》是蓝天工作室的一份野心之作。影片中流光溢彩奇幻世界，不仅让业界一睹蓝天工作室的技术实力，而且让观众打破刻板印象，再一次证明自己在动画界的地位与实力。<br />&nbsp;<br /></div><img src="/MM/1302/Uploads/News/article/a_52b1652e4c778.jpg" alt="" /><br /><br /><div align="left">　克里斯·韦奇在1987年创建了蓝天工作室，当时公司的主要业务只负责给故事片、电视和其他娱乐节目制作特效的镜头。其中最出名的要算《搏击俱乐部》里男主角爱德华·诺顿在幻觉中和他对话的大企鹅，其实《泰坦尼克号》中也有一些镜头来自他们做出的贡献。<br /><br />　　第一次改变蓝天工作室命运的是一只兔子。1998年，在经过了很长一段维持生计的日子之后，蓝天工作室首次推出了动画短片《棕兔夫人》。虽然这部仅7分钟的片子只是简单描述了一只长耳兔在厨房与一只飞蛾不断较量的故事，却是蓝天潜心8年之久的精诚之作。他们的努力得到了回报，该片一举荣获第71届奥斯卡最佳动画短片奖。蓝天工作室得到了福斯的投资。<br /><br />　　《冰川时代》的诞生则让蓝天工作室的命运发生了戏剧性的变化。刚刚经历《冰冻星球》惨败的福斯孤注一掷，裁掉了动画部门，然后和蓝天工作室签了一部3D动画电影的合同，这就是《冰川时代》。<br /><br />　　韦奇回忆道：“起初它只是一个剧本初稿，但根本就不是喜剧，是一个冒险故事，非常严肃。讲的是一个人失去了自己的家人，他的宝宝不见了，有只老虎想吃掉这个孩子，根本就没什么搞笑的东西，但是公司要求把它拍成一部喜剧，所以我沿用了这个初稿，然后尽力把它变得搞笑起来。”<br /><br />《棕兔夫人》让蓝天工作室收获一座小金人<br /><br />　　3年之后，搞笑的《冰川时代》问世，大获成功。观众们记住了片中冷色调的冰川世界，还有那只倒霉的松鼠Scrat。<br /><br />　　不过观众们并不知道，这只深受欢迎的松鼠在设计之初的寿命只有“5分钟”。“我们的最初设计是一只巨大的猛犸一脚下来把它踩个稀烂，它就挂了。”韦奇说，“这个角色，是因为我想让《冰川时代》的开场更有趣。然后我翻看了一遍我们的设计，找到了我们绘制的最小的角色，那就是一只小松鼠。一开始真的只是《冰川时代》开场前的一个小短片，表现松鼠的不幸历险，最后它抓到松果时，他的使命就结束了。”<br /><br />　　之后，当2009年《冰川时代3》上映后，蓝天工作室已经成为与皮克斯梦工场相提并论的动画工作室。该片是当年的全球动画片票房第一名，全球票房收入达到了8.88亿美元。<br /><br />　　对于这样的成功，韦奇坦言：“你不可能预测到你的作品能有怎样的成绩，你永远不知道影片在观众当中的反响会如何，你也不知道影片最终会变成什么样子，你只是置身于故事当中。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b1653ca0b92.jpg" alt="" /><br /><br />蓝天工作室创始人克里斯·韦奇<br /><br /><div align="left">　　皮克斯与蓝天工作室之间的渊源有多深？《森林战士》在投拍之初差点成为皮克斯的影片。不仅如此，从时间上来看，皮克斯只比蓝天工作室大一岁。从创始人的私交来说，克里斯·韦奇和皮克斯创始人之一约翰·拉塞特有着深厚的友谊。<br /><br />　　据报道，韦奇和拉塞特的友谊能追溯到上世纪80年代初。那时他们刚大学毕业，韦奇住在纽约，拉塞特住在加州。根据他的回忆，他有生以来第一次看到的电脑动画正是克里斯·韦奇做的。后来，拉赛特执导皮克斯的经典影片《玩具总动员》，皮克斯也逐步成为动画电影中的王者。<br /><br />　　对韦奇来说，他也从来没有把自己的朋友当作竞争对手。“我从90年代初期开始接触电脑动画制作，我们几乎同时建立了各自的公司。皮克斯在资金上得到了迪士尼和乔布斯的大力支持，然后约翰·拉塞特带来了创意，其他人开发了技术。”韦奇说。<br /><br />　　相比于皮克斯超过1200人的雇员来说，蓝天工作室的成员不到他们的一半。整个工作室都在一个屋子里办公，大家都彼此熟悉。“现在工作室已经有超过500人。我们觉得大家在一块很重要，因为这样才能彼此交流，彼此了解，共同完成一部又一部影片。”韦奇说。<br /><br />《蓝天工作室》与他们的作品<br /><br />　　韦奇认为，这种传统的工作方式正是蓝天工作室最大的优势。在这个背景下，各个环节的人员都可以相互交流，即便在影片完成后对特效有什么意见，还可以继续制作新的镜头加进去。“我不是把剧本、分镜分派出去，搞得像个流水线工厂，各自只管做自己的事情。这个过程让我们的想法越来越明确，越来越独特，更好地融合进你的故事当中。”<br /><br />　　事实上，据《纽约时报》报道，在制作《里约大冒险》时，成员们特地去了动物园对着鸟儿写生，还学了桑巴，观摩了巴西著名的卡泼卫勒舞。“我们有足够的时间，我们会一起看动画效果，观察它的的外观、它的动作、动作的独特性、台词的独特性，我们会记下一些不一样的东西。”韦奇解释说。<br /><br /><br />《森林战士》中流光溢彩的画面离不开蓝天工作室的强大技术实力<br /><br />　　《森林战士》对于蓝天工作室有着里程碑式的意义与野心。从场面上看，《森林战士》中的世界既写实又奇幻，电影展现了一个完全不同视角下的森林：小种子看起来跟大石头一样，石头看起来像陡峭的山，花长得又大又复杂，蝴蝶看起来就跟精美的刺绣飞毯一样。<br />&nbsp;<br />　　“我们制作的《冰川时代》一类的影片都是角色类喜剧，都是些会讲话的动物，但在《森林战士》中我想尝试一些新东西，我想让这部影片更接近动作冒险片，而不是简单的卡通片。”韦奇说。<br />&nbsp;<br />　　蓝天工作室制作的每一部电影都有大幅度的进步。在《冰川时代1》中，由于技术限制，动物毛发的真实感、角色眼部的灵动等细节则都被大大简化了。而到了《冰川时代2》时，蓝天工作室开发出了堪称目前世界上最快速的渲染系统，片中心地善良的猛犸象曼尼身上的毛发栩栩如生，水流效果和冰川崩塌的场景也极富技术含量。导演表示透露在制作《冰川时代》系列中遇到的挑战是，“我们技术人员要保证所有电影里的角色必须要跟过去是完全一样的，技术的改进主要是关注在环境的变化上。”<br />&nbsp;<br />《森林战士》的全明星配音阵容<br /><br />　　在《森林战士》中，已经有了更宏大的叙事，给了蓝天工作室全新的技术挑战。片中，森林女王泰拉身边有两位深受她信任的忠臣，一个是自称“万人迷”的鼻涕虫麻宝，另一个是一心想成为森林战士的蜗牛咕噜宝。在制作过程中，这对软趴趴的搭档成了蓝天最头疼的角色。因为鼻涕虫身上的粘液时刻都随着动作变换形状，并且反射不同的光线，如何处理成为了渲染引擎的最大考验。 <br />&nbsp;<br />　　导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动，每个人的头发都在动，水啊、云啊、树上的叶子啊，我们更加关注这些细节，尽力让影片看上去更加自然真实。”所有的技术都是以服务故事为主，没有哪个技术只是为了让你惊叹说：‘哇看那些叶子在动耶。’”<br />&nbsp;<br />　　为本片角色配音的大腕包括“天后”碧昂丝·诺尔斯、上届奥斯卡最佳男配角克里斯托弗·瓦尔兹，以及爱尔兰“坏小子”柯林·法瑞尔等。大气磅礴的配乐与动作场面让媒体将本片与《阿凡达》相提并论，INDIEWIRE称赞《森林战士》是一场惊艳又绚烂的森林大冒险 ，就像是动画版的《指环王》；CBS则说该片是《爱丽丝梦游仙境》遇上《阿凡达》。<br />&nbsp;<br /></div>', 1387328993),
(59, '场面', '未来', '依然', '52a4747ac1271.jpg', 0, '好想在首都地标拍火爆场面', '好想在首都地标拍火爆场面场面', '陈木胜说：“我真的好想在首都的地标上拍一场火爆的动作戏。他表情很认真，一点都不像开玩笑', '导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动导演韦奇强调，所有这些技术手段都是为了剧情服务：“我们增加了更多的细节，更多的角色，每个人身上的衣服都在动', 2, 2, '<br /><div align="left">　　陈木胜说：“我真的好想在首都的地标上拍一场火爆的动作戏。”他表情很认真，一点都不像开玩笑，“二三线城市怎么有意思呢，要拍就在北京上海拍，要拍就在关键性地标上拍。”<br /><br />好想在首都地标拍火爆场面<br /><br />　　陈木胜是传统的港式警匪动作片导演，动作片导演都想在大地方拍大场面，连杜琪峰都慨叹过：“大陆有大山大河，香港没有啊。”陈木胜也一样，“我真的好想拍，如果有部门能支持我，我可以拍一个很大型的中国的警匪片，能够把中国的电影发扬到外面，这都是我的心愿。<br /><br />　　合拍片是趋势——陈木胜对此从未反抗和纠结，他TVB电视台出身，浸淫传统港式制作多年，内心有自己的审美取向，但北上内地、征服内地市场，他认为是大势所趋，毫无纠结的必要。<br /><br />拍电影是要守电影规则的<br /><br />　　2008年，《保持通话》让陈木胜向大陆市场全面挺进，他抱定的电影宗旨是“找那个内地和香港观众之间的平衡点，现代动作片要符合大家的心声，要有看得明白的故事，又要曲折刺激，大场面也要好看。”<br />&nbsp;<br />　　注重娱乐性使得他的《宝贝计划》、《男儿本色》和《保持通话》在内地都取得不错的票房成绩。陈木胜是非常迎合市场的，他深谙与内地合作的套路，秉承电影“娱乐性至上”的原则，坚持：“把片子拍得具有商业味道，让老板把整个电影运作下去。”<br />&nbsp;<br />　　“有时候明知道这个桥段不可能过，那我就不拍了吧。电影是有规则的，老板投资那么多钱，我不能因为个人原因让他们冒那么大风险，我是拍一个商业片，比如我是在拍一个文艺片，那可以把自己的空间尽量发挥出来，观众看不明白，也不重要，只要我自己爱就可以了。可如果是在商业片里运作，我一定会把这个片拍得具有商业的味道，让老板把整个电影运作下去。”<br />“我还筹备了一个讲述文成公主进藏的武侠片叫《唐卡》，与韩国CJ公司以及中影一起合作，我为了那部片前后准备了9个月。但那时因为西藏敏感话题，有关部门只能让我们在坝上拍，这完全就丢掉了《唐卡》的意义，最终我只能放弃了。”<br /></div>&nbsp;<br /><img src="/MM/1302/Uploads/News/article/a_52b16567540c8.jpg" alt="" /><br />&nbsp; <br /><div align="left">　　问起张之亮对港片、合拍片这几年发展的看法，他很干脆的表示：“我这些年一直在内地拍片，没有关注香港这边。”<br />&nbsp;<br />一直内地拍片 从未顺利过<br />&nbsp;<br />　　的确，张之亮新千年之初就来内地摸索拍片，2004年拍了电视剧《丝路豪侠》，无声无息。2006年，他放弃了自己擅长的民生题材，“这种东西，如果拍得很表面那我还不如不做，而当时内地已经有了拍大制作电影的气候，我就想去尝试。”他找刘德华拍了大制作《墨攻》，但在大陆评价只算得上不冷不热。<br />&nbsp;<br />　　尽管如此，但张之亮把创作核心定在内地的决心不变了，之后几年几经尝试，最终都是一声叹息，“几年前我接手了一个项目，就是后来汤唯主演的《晚秋》，当时我完成了剧本，投资也搞定，剧组人员都已经开始陆续埋位了，但最后由于审批原因，我们没办法进行，前期损失了一大笔钱，我的剧本也白费了，一分钱也没拿到。后来韩国方面就把这部片拿到美国去拍了。我自己觉得很挫败，对付出心血的主创人员也有很大打击。”再后来，张之亮又想拍以“文成公主进藏”为主题的武侠片《唐卡》，却因为西藏原因放弃。<br />&nbsp;<br />接地气太眼浅 把中国电影推出去是正道<br />&nbsp;<br />　　后来，张之亮选择了比较保险的路数——现代都市文艺片。在2008年推出了《车票》，2011年推出了《肩上蝶》，这些投资不大，题材安全的作品，却依然未让张之亮的北上之路顺利。尤其是《肩上蝶》一片因宣传问题，与制片方、发行方产生了矛盾，最后导致“裸映”，使得该片票房完全不理想。这部张之亮首次尝试“真人加动画”的作品，从融资过程到公映宣传，几乎是举步为艰。<br />&nbsp;<br />　　在推出电影《车票》的时候，张之亮也曾经试图与内地导演朱近联合执导一部叫《马头琴》的历史大片，但在筹建中途也是不了了之。<br />&nbsp;<br />　　“期待与现实总是不同的，对于很多著名的港台导演，大家对他们已经有了‘标签’意识，觉得应该是怎样的，而没有平心静气地去看他们。此外，由于文化背景问题，在揣摩题材时，内地导演和港台导演是有不同的看法。”张之亮说。<br />&nbsp;<br />&nbsp;10年内地战绩（2003-2013）： <br />《墨攻》 2006年 6150万元<br />《肩上蝶》2011年 680万<br />鬼导彭氏兄弟：老板给钱，我们什么都能拍<br /><br />&nbsp;<br /><br />“其实我们已经来晚了很多了。其实香港很多导演基本上把香港的家已经搬到北京来，所以我们其实已经来晚了。但是我觉得整个市场的发展，我觉得最终还是必须到这里来。”<br /><br />&nbsp;<br /><br /></div><br />', 1387229023),
(60, '尝试', '未来', 'MyMovie', '52a4740ad895e.jpg', 2, '从无地域之心 一直在尝试', '从无地域之心 一直在尝试尝试', '他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。', '他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。 　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。', 3, 2, '<br /><div align="left">　　他赋予过香港武侠一种浪漫的境界，也不介意在大陆题材中找到新起步。他心里没有这个界限与芥蒂，早在2005年，一部并不算成功的《七剑》已经让他深入北上。<br /><br />从无地域之心 一直在尝试<br /><br />　　2005年公映的《七剑》便是他尝试与内地深入接触的一次“实验”，起用了陆毅、孙红雷等大陆演员。2008年由内地博纳影业出品的《女人不坏》更是纯粹地接近于“大陆现代都市戏”，但是为了保证质量，邀请韩国著名电影人郭在容担任编剧，但他仍延续了21年前《刀马旦》“三个女人一台戏”的套路，被很多人视作是他的转型之作。<br /><br />　　徐克的心态很轻松，他没有那么多所谓的“艺术节操”要保护，甚至认为“把不同的意图，不同的规模，不同的成本的作品，放在一个平等的平台去说谁好谁不好，这个没必要。”当然，“赚快钱”也是很多人怀疑他炮制这个作品的意图之一。2008年出品的《深海寻人》有这个嫌疑，徐克选择了一个日本故事，他希望作品能与“北上淘金热”的电影有所不同。<br />&nbsp;<br /></div><img src="/MM/1302/Uploads/News/article/a_52b16580ae7cb.jpg" alt="" /><br />新视觉武侠征服中华市场<br /><br /><div align="left">　　2010年，合资片《狄仁杰之通天帝国》出炉，这又是一次徐克回归拿手武侠片的机会，也是他把商业片做得更大更华丽的一次创举，甚至做到“每30秒一个特效镜头”，该片获得票房佳绩，也成为香港金像奖的大赢家。在“名利双收”这条路上，“老怪”总是有自己独特的成功之道，因此该片在三年后出了续集。但是真正让“老怪”彰显霸气的作品，却是2011年出品的《龙门飞甲》，主要阵容几乎全是内地演员，炮制的还是首部3D技术的华语武侠大片。<br />&nbsp;<br />　　电影对他来讲，是不是“香港的”概念很模糊，他认为：“现在香港大陆台湾这三地常常会有投资合作，人员幕前幕后合在一体，那怎么去决定这个是香港电影，还参加金像奖？从大中华的概念来讲，我们是没得分的。”<br />&nbsp;<br />10年内地战绩： &nbsp;<br /><br />《七剑》&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2005年&nbsp; 8345万元<br /><br />《女人不坏》&nbsp; 2008年&nbsp;&nbsp; 2280万元<br /><br />《狄仁杰之通天帝国》&nbsp; 2010年&nbsp;&nbsp; 2.955亿元<br /><br />《龙门飞甲》&nbsp; 2011年&nbsp; 5.4055亿元<br /><br />《狄仁杰之神都龙王》&nbsp; 2013年&nbsp;&nbsp; 6.0172亿<br /><br />　　许鞍华对于题材选择一向自主而宽泛，从剧情、喜剧、武侠、惊悚、同性恋，到名著改编、女性主义，各式多元主题，她都乐于尝试，许鞍华认为，在哪里拍片子并不重要，重要的是题材是不是自己喜欢与擅长的。<br /><br />&nbsp;<br /></div><img src="/MM/1302/Uploads/News/article/a_52b16591c6bc2.jpg" alt="" /><br />不拘一格内地试水<br /><br /><div align="left">　　2002年，内地公司力邀许鞍华执导电影版《玉观音》，许鞍华迫不及待的跑去书店买了港版《玉观音》，一口气看完，随即北上接了这个片子。当时如日中天的赵薇与谢霆锋主演本片，许鞍华却遭遇评价与票房的滑铁卢，事后连许鞍华自己都承认，这是一部失败的作品。<br /><br />　　这次失败后，许鞍华却没有返回香港，而是在内地继续尝试，2007年，一部讲述内地老太太生活的《姨妈的后现代生活》出炉，这部女性题材之作让祖籍辽宁鞍山的许鞍华，再次回到了60年都未踏足的故土。影片获得了台湾金马奖三项提名、香港电影评论学会大奖三项大奖，斯琴高娃更是因此再获得香港电影金像奖最佳女主角。但本片叫好不叫座，内地公映半个月左右，只有500万左右的入账，可谓惨淡。<br /><br />回归拍港片 但并非对抗内地<br /><br />　　对此，许鞍华曾自我总结教训，她说自己的拍片思维和徐克就很不同，她没法用想象来拍电影，非自己生活领域的大片都很难驾驭，她最擅长的还是那些生活气息浓重的电影，而这种类型找投资本就困难，来内地试水，接大陆的地气仿佛又不够得心应手，这让她最擅长的变成了最别扭的。<br /><br />　　那几年许鞍华有点纠结，最终还是回到了香港。她想拍讲述天水围一桩惨案的电影，但又怕投资方不给钱，想来想去就谈了先拍一个温暖版的“天水围”，结果这部温暖的《天水围的日与夜》横扫了当年的金像奖。<br /><br />　　接着，2011-2012年许鞍华用一部《桃姐》改变了之前的纠结现状，一部投资不大，题材小众的电影，不仅通杀威尼斯、金马、金像，在内地电影市场也获得了强势的收益。<br /><br />　　试水内地并不成功的许鞍华，回归港式题材就“马到功成”，对此，许鞍华说：“我拍香港题材不是对抗性的，对我个人而言，我觉得我是那种能拍我就拍的。有喜欢的题材，但这个题材不能进到内地，却同时有老板肯投资，那我就一定会拍。我这不是赌气，只是想拍一些我喜欢的。打个比方，有人来找我拍合拍片，投资也已经搞定，但是那个题材我不喜欢，我也不会拍。”<br /></div><br />', 1386952873),
(61, '银河', '依然', '银河', '52a473a2ca5c9.jpg', 4, '银河首部合拍警匪《毒战》', '银河首部合拍警匪《毒战》银河', '经历了摸索、不适、挣扎、反思的10年，现在香港电影人走到了一个新的破局前。', '08年《文雀》收入559万港币、09年《复仇》收入162万港币，之后的《意外》和《PTU2机动部队》都分别为523万港币和390万港币。', 3, 2, '<br /><div align="left">&nbsp;&nbsp;&nbsp;&nbsp; 经历了摸索、不适、挣扎、反思的10年，现在香港电影人走到了一个新的破局前。时光网对谈9位香港导演，包括杜琪峰、许鞍华、陈可辛等，他们亲诉自己在CEPA10年里，如何认识内地，如何坚持或者放下港片导演的身份，找到大陆市场的感觉，找到合拍片的生存之道，最重要的是，他们经历过怎样的内心挣扎。<br /><br />其实限制对于创作不一定是坏事。有时候就是因为太自由，可能去到哪里自己都不知道了。有一些框框在，有一些限制在，干脆你就在这个框框里做到最好，能激发更大的动力。”<br /></div><br /><img src="/MM/1302/Uploads/News/article/a_52b165a89e065.jpg" alt="" /><br /><br /><div align="left">　　60岁时，杜琪峰还在不甘心的表示，如果可以，他希望“一辈子只在香港拍摄电影”。但时势比人强，在港片低迷的市场中坚守了15年，2011年，他用一部《单身男女》正式进军内地，这是银河映像真正进入国内市场的第一部合拍片。杜琪峰说：“我觉得时候到了。<br /><br />试水尝试：从《蝴蝶飞》到《单身男女》<br /><br />　　其实，一直坚持坚守香港的杜琪峰有着丰富的合拍经验，早在1979年底，杜琪峰在内地粤北实景拍摄了第一部电影《碧水寒山夺命金》。2008年，他还执导了由周渝民和李冰冰主演的《蝴蝶飞》。两部影片都不太成功，但杜琪峰坦言，这只是给了他一些对合拍的经验和信心。<br /><br />　　打出银河品牌的《单身男女》终于在内地取得成功，商业上可谓颇有交代，杜琪峰都深感惊喜，表示十分意外。他公开表示，这部是银河的一次内地试水，之后他会将银河赖以成名的警匪品牌带入内地。<br /><br />正式打入：银河首部合拍警匪《毒战》<br /><br />　　拍《毒战》是银河映像与杜琪峰的一大转折点，第一次进入内地拍警匪、缉毒、重口味，兼带银河式的暗黑与宿命感。杜琪峰说基本找不到大陆有过类似的警匪片来做参考，但警匪不比爱情片，要考量内地的审查制度，“所以我也不知道哪些可以拍或者不能拍。差不多拍所有的戏我们都要讨论，听听各方的意见，电影送审后反馈回来以后，我们发现实际上结果比之前想象的好得多，需要修改的地方少很多。”<br /><br />　　在内地拍戏，对杜琪峰而言新鲜也不适应，他说内地有大山大河，取景开阔，但他又有港式风情情怀，最爱拍香港老街小巷；他以为天津是北方一定会下雪，结果拍《毒战》的时候，一片雪没拍到；他剧组香港人和内地人都有，他普通话不利落，和内地工作人员沟通总是不畅。拍《高海拔之恋2》拍了很久，杜琪峰说：“我们从来没有离开香港拍电影这么久。今年的冬天是最长的，这是我56年来过得最惨的。”<br /><br />　　暴脾气的杜琪峰谈起这些，颇为唏嘘不甘，但他也看的出来纯港片市场的衰落，回头看看他这些年的港片成绩：08年《文雀》收入559万港币、09年《复仇》收入162万港币，之后的《意外》和《PTU2机动部队》都分别为523万港币和390万港币。风格与口碑似乎不能完成更好的生存，进入内地、来到合拍领域成为了杜琪峰最终的选择。<br /></div><br />', 1387052970),
(62, '依然', 'ADSJF', '依然', '52a46953222b1.jpg', 14, '轰动全球的《超人》电影', '“轰动影坛的科学惊险电影”超人', '人们津津乐道于那个能令地球倒转、时光倒流、让女友起死回生的超级猛男。', ' 　　《超人》是我国从好莱坞进口的第一部真正意义的“大片”，它上映之时，内地电影市场仍处于繁荣时期，与新兴的电视业尚能分庭抗礼。', 2, 2, '<div align="left">1985年《超人1》：80年代第一部好莱坞进口特效大片<br /><br />　　1985年秋，中影公司引进了华纳于1978年出品的第一部《超人》电影，并于11月初开始在上海电影译制厂配音。对于当年的情形，时任译制导演的曹雷至今还有很深的印象：“《超人》第一次引进的时候，我们看着都觉得很新鲜，这部影片是改编美国的一部热销漫画，这个人物在美国家喻户晓。但对于当时的中国人来说，不是很熟悉，蛮新鲜的。所以当时我们配这部电影的时候也讨论过，在处理人物语言时，要稍微趋向于漫画式，让好人和坏人的性格鲜明一些，不要太正。所以当时我们就选择了一个年轻的配音演员施融来配克拉克。施融之前配过《茜茜公主》里的年轻皇帝弗朗茨。我们觉得他的声音比较清新干净。另外，当时施融的声音还不被观众所太熟悉。如果观众太熟悉这个声音的话，我觉得会使观众不自觉的联想到他之前的角色形象。我们希望能给观众接受一个新的形象。”<br /></div>&nbsp;<br /><img src="/MM/1302/Uploads/News/article/a_52b165cc54d22.jpg" alt="" /><br /><br />1985年，广州儿童电影院悬挂出《超人》的海报<br /><br /><div align="left">　　《超人》是我国从好莱坞进口的第一部真正意义的“大片”，它上映之时，内地电影市场仍处于繁荣时期，与新兴的电视业尚能分庭抗礼。但当时优秀国产故事片层出不穷，而进口影片的引进标准更偏重于思想性与艺术性的平衡，以及后期译制配音的精工细做。因此，中国观众真正能在影院看到的好莱坞八大公司商业巨制屈指可数，《星球大战》、《外星人E.T.》这些科幻大片即便听过，也是无缘得见。也因此，虽然《超人》出品七年之后才第一次访华，且一如其他在中国上映的进口影片一样，事先没有任何宣传（除了在报刊上有几则故事梗概之外），但它上映后便立即引发了观影狂潮。如果说，《少林寺》是上世纪八十年代国产商业大片的一个标竿，那么毫无疑问，同一时期的《超人》便是登陆中国银幕最具震撼的好莱坞特效大片。<br /><br />　　从此，人们津津乐道于那个能令地球倒转、时光倒流、让女友起死回生的超级猛男。尽管那个时候，克里斯托弗·里夫在中国的名气还远不能与阿兰·德龙相提并论，但这个身披红色大斗蓬、胸前印着大S的空中飞人，已成为中国无人不知的电影明星。直到九十年代初，一些濒临歇业的省市电影放映公司和影院，还时不时地利用《超人》作为寒暑期的“学生假期优惠观影”活动的招牌和噱头，这也是许多80后乃至85后对在影院观看本片仍有印象的主要原因之一。<br /></div><p align="left">1987年《超人2》：进口片“黄金十年”落幕<br /><br />　　《超人1》在1986整整一年里都是一个热门话题，也让中国大陆观众领略了好莱坞特效电影的魅力。在这一情形之下，《超人2》的引进提上议事日程，也就不足为奇了。1987年7月，《超人2》在上译厂开始了紧张的配音，译制导演仍为曹雷女士，但此次“超人”的中文代言人则换成了上译厂的著名配音演员童自荣。事实上，第一集《超人》配音时，童自荣就在入选之列，但曹导考虑到观众对童自荣塑造的“佐罗”的声音太过熟悉了，不希望让观众一听到这个声音就想起“佐罗”。但此时施融已赴美国读书，不可能再来为超人配音，经过反复斟酌，最终还是由童自荣接过了声演超人的重任。<br /><br />　　结束《超人2》配音工作之后，曹雷导演去到美国探亲，在美期间，她还与《超人1》的配音者施融见了面。有意思的是，两人会面的地点正是纽约布鲁克林街区那座有名的布鲁克林大桥，也就是《超人1》中超人曾从桥底飞过之处。当时曹雷和施融还聊起这个情节，两人都觉得十分有趣，提及这段回忆，曹雷颇有感触：“那之后我就有了一个想法，有生之年多到世界各地去走走，并且有机会多到那些我配音过的电影中出现的外景走一走，90年代后期我便时常出国去这些地方转转，的确是有一种走进电影中的感觉。” <br /><br />1987年录制完《超人2》后，译制导演曹雷曾和《超人1》的配音演员施融在纽约会面，<br /><br />虽然当时没有拍照留念，但见面的地方正是超人曾飞过的布鲁克林大桥<br /></p><p sizcache0975447568475792="18938 18358 3" sizset="false"><img src="/MM/1302/Uploads/News/article/a_52b165e06a7a8.jpg" alt="" /><br /><br />　　对于《超人2》，配音者童自荣印象相当淡漠，在接受记者采访时，他甚至都记不起曾经配过这部影片了。他坦言，因为那时候一年配十几二十部电影，实在记不清了。这也从一个侧面反映了当时《超人2》与两年前《超人1》的热映情景相比，人气已大不如前。《超人2》上映的11月正值深秋，与袭人的寒意相比，让人更感萧瑟的是进口片在内地市场的落寞。此时，不仅电视已成为中国人最主要的娱乐方式，而且录像机也开始进入普通家庭，以警匪、武侠、喜剧为主的港产片开始取代欧美电影。此外，包括录像厅、厂矿闭路电视播放的节目中，港产片也成了绝对的主力军。在此情况下，国产故事片尚有政府的补贴与政策支持得以勉强维系，而每年多为充数之用的二三流进口片则两头不落，沦为炮灰也就在所难免了。<br /></p>', 1387106579);

-- --------------------------------------------------------

--
-- Table structure for table `mm_ppicnews`
--

CREATE TABLE `mm_ppicnews` (
`id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `pica` varchar(32) NOT NULL,
  `picb` varchar(32) NOT NULL,
  `picc` varchar(32) NOT NULL,
  `picd` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_ppicnews`
--

INSERT INTO `mm_ppicnews` (`id`, `pid`, `pica`, `picb`, `picc`, `picd`) VALUES
(123, 47, '52b163759ce29.jpg', '', '', ''),
(121, 46, '52b163432c90b.jpg', '', '', ''),
(126, 49, '52b163ca06afa.jpg', '', '', ''),
(135, 54, '52b1649a866c5.jpg', '', '', ''),
(133, 53, '52b16478678bb.jpg', '', '', ''),
(138, 57, '52b164e188e78.jpg', '', '', ''),
(142, 58, '52b1653ca0b92.jpg', '', '', ''),
(120, 46, '52b1631a7fc1a.jpg', '', '', ''),
(131, 52, '52b1644d9ee0d.jpg', '', '', ''),
(122, 47, '52b16361e769c.jpg', '', '', ''),
(124, 48, '52b1638f1cac4.jpg', '', '', ''),
(125, 49, '52b163b2efb46.jpg', '', '', ''),
(128, 50, '52b163fbee83e.jpg', '', '', ''),
(127, 50, '52b163e97c46f.jpg', '', '', ''),
(129, 51, '52b1641fef087.jpg', '', '', ''),
(132, 53, '52b16469bc626.jpg', '', '', ''),
(134, 54, '52b1648d8e116.jpg', '', '', ''),
(136, 55, '52b164afaed09.jpg', '', '', ''),
(137, 56, '52b164c8c40eb.jpg', '', '', ''),
(141, 58, '52b1652e4c778.jpg', '', '', ''),
(147, 62, '52b165cc54d22.jpg', '', '', ''),
(146, 61, '52b165a89e065.jpg', '', '', ''),
(144, 60, '52b16580ae7cb.jpg', '', '', ''),
(143, 59, '52b16567540c8.jpg', '', '', ''),
(117, 45, '52b162beb1a83.jpg', '', '', ''),
(118, 45, '52b162d9aae4b.jpg', '', '', ''),
(119, 45, '52b1630018159.jpg', '', '', ''),
(139, 57, '52b164fc690a1.jpg', '', '', ''),
(140, 57, '52b1650fb7832.jpg', '', '', ''),
(145, 60, '52b16591c6bc2.jpg', '', '', ''),
(148, 62, '52b165e06a7a8.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mm_ppt`
--

CREATE TABLE `mm_ppt` (
`id` int(10) unsigned NOT NULL,
  `mid` int(10) NOT NULL,
  `title` varchar(32) NOT NULL,
  `picname` varchar(32) NOT NULL,
  `state` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_ppt`
--

INSERT INTO `mm_ppt` (`id`, `mid`, `title`, `picname`, `state`) VALUES
(115, 38, 'Forest Gum', '52a97cb3b277f.png', 1),
(116, 39, 'You Are the Apple of My Eye', '52a97c4ae9d91.jpg', 1),
(119, 35, 'Let The Bullets Fly', '52a980b24f099.jpg', 1),
(113, 34, 'Hachi: A Dog''s Tale', '52a97c696f4f4.jpg', 1),
(117, 36, 'Malèna', '52a97ca075892.jpg', 1),
(112, 37, 'Now Is Good', '52a97cc788406.jpg', 1),
(120, 31, 'Titanic', '52a981aaa9f6f.jpg', 1),
(121, 38, 'Forrest Gump', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mm_praise`
--

CREATE TABLE `mm_praise` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `fid` int(10) unsigned NOT NULL COMMENT '电影id',
  `addtime` int(10) unsigned NOT NULL COMMENT '赞的时间'
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_praise`
--

INSERT INTO `mm_praise` (`id`, `uid`, `fid`, `addtime`) VALUES
(1, 1, 29, 1386729898),
(2, 1, 31, 1386730481),
(3, 6, 36, 1386731647),
(4, 6, 29, 1386740217),
(5, 6, 37, 1386747566),
(6, 6, 32, 1386747577),
(7, 6, 39, 1386747823),
(8, 1, 30, 1386758452),
(9, 5, 31, 1386764334),
(10, 7, 39, 1387177652),
(11, 7, 29, 1387178628),
(12, 8, 35, 1387179446),
(13, 1, 32, 1387356657),
(14, 1, 39, 1387358322),
(15, 10, 37, 1387381701),
(16, 10, 35, 1387381815),
(17, 14, 31, 1387436942);

-- --------------------------------------------------------

--
-- Table structure for table `mm_prevue`
--

CREATE TABLE `mm_prevue` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `title` varchar(32) NOT NULL COMMENT '标题',
  `fid` int(10) unsigned DEFAULT '0' COMMENT '影评id',
  `picname` varchar(64) DEFAULT '无' COMMENT '预报片封面 缩略图260*170 50*50 原图',
  `videoname` varchar(64) NOT NULL COMMENT '预告影片名',
  `clicknum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `screentime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上映时间',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `status` int(16) unsigned NOT NULL DEFAULT '0' COMMENT '状态0新添加 1显示 2 不显示'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_prevue`
--

INSERT INTO `mm_prevue` (`id`, `title`, `fid`, `picname`, `videoname`, `clicknum`, `screentime`, `addtime`, `status`) VALUES
(3, 'aaaaaaa', 39, '52ab0c1adb62b.jpg', '52aad16fe1d47.mp4', 4, 1386943089, 1386924444, 1),
(4, 'bbbbb', 35, '52ab0c089b8da.jpg', '52ab0f26e1ef6.mp4', 8, 1387065600, 1386926117, 1),
(5, 'Shayne Ward - Melt The Snow', 31, '52ab0c306fdac.jpg', '52ab066675f14.flv', 15, 1388102400, 1386940007, 1),
(7, 'ccccccc', 36, '52ae6d7866b9f.jpg', '52ab123fd57f1.mp4', 2, 1386943089, 1386943039, 1),
(8, 'dasdfadsf', 29, '52ab13d75576d.jpg', '52ab125d6ceeb.mp4', 9, 1387670400, 1386943069, 1),
(9, 'afadf', 30, '52ab13f86a8ee.jpg', '52ab12716e014.mp4', 3, 1387670400, 1386943089, 1),
(10, 'asdfasdf', 37, '52ab1bb95f1e6.jpg', '52ab127d129b9.mp4', 9, 1388016000, 1386943101, 1),
(11, 'dfadsfa', 32, '52ab1ba6e6fcc.jpg', '52ab129653d1b.mp4', 1, 1387065600, 1386943126, 1),
(12, 'asdfadsfads', 33, '52ae6b377458e.jpg', '52ae6afcd7b72.mp4', 40, 1387756800, 1387162367, 1),
(13, 'asdfasdfasd', 38, '52ae6c288d04a.jpg', '52ae6bb724aab.mp4', 7, 1388016000, 1387162551, 1),
(14, 'Melt The Snow', 34, '52ae6cd3207eb.jpg', '52ae6c89e4720.flv', 66, 1386943089, 1387162762, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_quote`
--

CREATE TABLE `mm_quote` (
  `zid` int(10) unsigned NOT NULL COMMENT '转帖id',
  `sid` int(10) unsigned NOT NULL COMMENT '原帖id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mm_rate`
--

CREATE TABLE `mm_rate` (
`int` int(10) unsigned NOT NULL COMMENT '主键',
  `fid` int(10) unsigned NOT NULL COMMENT '电影id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `score` int(10) unsigned NOT NULL COMMENT '打分数'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_rate`
--

INSERT INTO `mm_rate` (`int`, `fid`, `uid`, `score`) VALUES
(2, 38, 1, 10),
(3, 30, 1, 10),
(4, 32, 1, 10),
(5, 29, 1, 10),
(6, 31, 1, 10),
(7, 36, 1, 8),
(8, 35, 1, 8),
(9, 36, 6, 10),
(10, 29, 6, 10),
(11, 31, 6, 10),
(12, 33, 6, 10),
(13, 37, 6, 10),
(14, 32, 6, 8),
(15, 39, 6, 10),
(16, 29, 5, 8),
(17, 31, 5, 8),
(18, 30, 5, 10),
(19, 36, 5, 10),
(20, 38, 5, 10),
(21, 37, 5, 10),
(22, 35, 5, 10),
(23, 33, 5, 10),
(24, 32, 5, 10),
(25, 39, 7, 8),
(26, 30, 7, 2),
(27, 29, 7, 10),
(28, 33, 7, 2),
(29, 39, 3, 8),
(30, 32, 9, 8),
(31, 39, 1, 10),
(32, 37, 10, 6),
(33, 35, 10, 10),
(34, 34, 11, 6),
(35, 31, 14, 10),
(36, 36, 16, 6),
(37, 30, 17, 10),
(38, 30, 18, 8),
(39, 32, 19, 10);

-- --------------------------------------------------------

--
-- Table structure for table `mm_report`
--

CREATE TABLE `mm_report` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `lid` int(10) unsigned DEFAULT '0' COMMENT '举报的影评id',
  `rid` int(10) unsigned DEFAULT '0' COMMENT '举报的短评id',
  `count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '举报次数',
  `zid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '举报的演评id'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_report`
--

INSERT INTO `mm_report` (`id`, `lid`, `rid`, `count`, `zid`) VALUES
(2, 0, 13, 0, 0),
(6, 33, 0, 1, 0),
(7, 34, 0, 0, 0),
(8, 0, 22, 2, 0),
(9, 1, 0, 0, 0),
(10, 0, 21, 1, 0),
(11, 0, 20, 0, 0),
(12, 0, 19, 0, 0),
(13, 36, 0, 10, 0),
(14, 3, 0, 1, 0),
(15, 6, 0, 1, 0),
(16, 0, 46, 2, 0),
(17, 0, 40, 2, 0),
(18, 0, 77, 6, 0),
(19, 32, 0, 1, 0),
(20, 0, 0, 1, 6),
(21, 0, 0, 1, 7),
(22, 0, 0, 1, 9),
(23, 0, 0, 1, 8),
(24, 0, 0, 1, 32),
(25, 0, 0, 1, 33),
(26, 0, 0, 1, 34),
(27, 0, 0, 1, 35),
(28, 0, 81, 0, 0),
(29, 0, 0, 8, 39),
(30, 0, 78, 1, 0),
(31, 0, 0, 1, 40),
(32, 0, 0, 1, 38),
(33, 0, 0, 1, 5),
(34, 0, 0, 1, 4),
(35, 0, 41, 1, 0),
(36, 14, 0, 1, 0),
(37, 0, 0, 1, 41),
(38, 0, 83, 4, 0),
(39, 0, 74, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mm_reviewpic`
--

CREATE TABLE `mm_reviewpic` (
`id` int(10) unsigned NOT NULL COMMENT ' 主键',
  `tbname` varchar(64) NOT NULL COMMENT '表名',
  `rid` int(10) unsigned NOT NULL COMMENT '影评id',
  `picname` varchar(32) NOT NULL COMMENT '影评相关的图片',
  `create_time` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_reviewpic`
--

INSERT INTO `mm_reviewpic` (`id`, `tbname`, `rid`, `picname`, `create_time`) VALUES
(39, 'longreview', 17, '52a0addebde37.jpg', 1386261982),
(41, 'longreview', 0, '52a0ae256a01b.jpg', 1386262053),
(42, 'longreview', 0, '52a0ae4a3bfe2.jpg', 1386262090),
(43, 'longreview', 17, '52a0aea87e4de.jpg', 1386262184),
(44, 'longreview', 18, '52a0af425d862.jpg', 1386262338),
(47, 'longreview', 4, '52a448ec5bd8b.jpg', 1386498284),
(48, 'longreview', 1, '52a4491b7e0bb.jpg', 1386498331),
(50, 'longreview', 28, '52a578bf5cf00.jpg', 1386576063),
(53, 'longreview', 36, '52aea78fcf379.jpg', 1387177871),
(54, 'longreview', 3, '52b1692078982.jpg', 1387358496),
(55, 'longreview', 30, '52b1697e3db4b.jpg', 1387358590),
(57, 'longreview', 32, '52b169b20d2a6.jpg', 1387358642),
(59, 'longreview', 2, '52b169ebdeb53.jpg', 1387358699),
(60, 'longreview', 14, '52b16a39afcf1.jpg', 1387358777),
(61, 'longreview', 31, '52b16a9d4ad3f.jpg', 1387358877);

-- --------------------------------------------------------

--
-- Table structure for table `mm_reviewreply`
--

CREATE TABLE `mm_reviewreply` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `rid` int(10) unsigned NOT NULL COMMENT '影评id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `content` text NOT NULL COMMENT '影评回复内容',
  `rtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复时间',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '状态 3禁言 1正常 2举报'
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_reviewreply`
--

INSERT INTO `mm_reviewreply` (`id`, `rid`, `uid`, `content`, `rtime`, `status`) VALUES
(80, 3, 1, 'Nunc nisl.', 1387289340, 1),
(81, 3, 1, 'Praesent blandit. Nam nulla.', 1387289343, 1),
(79, 3, 1, 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy.', 1387289339, 1),
(78, 3, 1, 'Integer ac neque. Duis bibendum.', 1387289338, 1),
(77, 3, 1, 'Fusce consequat.', 1387289336, 1),
(76, 3, 1, 'Pellentesque at nulla. Suspendisse potenti.', 1387289335, 1),
(75, 3, 1, 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.', 1387289334, 1),
(25, 2, 1, 'Mauris ullamcorper purus sit amet nulla.', 1386576177, 1),
(82, 3, 1, 'Maecenas rhoncus aliquam lacus.', 1387289348, 1),
(74, 3, 1, 'Maecenas rhoncus aliquam lacus.', 1387289332, 1),
(69, 30, 7, 'Maecenas rhoncus aliquam lacus.', 1387178331, 1),
(70, 30, 7, 'Maecenas rhoncus aliquam lacus.', 1387178373, 1),
(65, 30, 1, 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis.', 1386849587, 1),
(48, 30, 1, 'In hac habitasse platea dictumst.', 1386639999, 1),
(49, 3, 1, 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst.', 1386675452, 1),
(73, 3, 1, 'Praesent id massa id nisl venenatis lacinia.', 1387289331, 1),
(83, 3, 1, 'Donec semper sapien a libero.', 1387289349, 1),
(84, 32, 9, 'Quisque porta volutpat erat.', 1387348210, 1),
(85, 14, 1, 'Donec semper sapien a libero. Nam dui.', 1387358831, 1),
(86, 42, 1, 'Duis bibendum. Morbi non quam nec dui luctus rutrum.', 1387422901, 1),
(87, 14, 1, '"Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede."', 1387431803, 1),
(88, 14, 1, 'Aenean sit amet justo. Morbi ut odio.', 1387431805, 1),
(89, 14, 1, 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 1387431806, 1),
(92, 48, 17, 'asdfadsfasdf', 1430113951, 1),
(93, 44, 17, 'asfasdfasdfad', 1430113996, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_role`
--

CREATE TABLE `mm_role` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_role`
--

INSERT INTO `mm_role` (`id`, `name`, `pid`, `status`, `remark`, `title`) VALUES
(26, 'test21', NULL, 1, '测试', '测试'),
(24, 'Test', NULL, 1, '测试组拥有全部权限', '测试组'),
(25, '开发组', NULL, 1, '开发组用于项目期间开发过程中使用，拥有全部权限', '开发组'),
(23, 'Manager', NULL, 1, '项目经理拥有全部权限', '项目经理'),
(22, 'News', NULL, 1, '新闻管理', '新闻管理'),
(21, 'Movies', NULL, 1, '管理影片上传、设置演员、设置类型、修改状态等', '影片管理');

-- --------------------------------------------------------

--
-- Table structure for table `mm_role_user`
--

CREATE TABLE `mm_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_role_user`
--

INSERT INTO `mm_role_user` (`role_id`, `user_id`) VALUES
(26, '22'),
(21, '19'),
(22, '18'),
(21, '16');

-- --------------------------------------------------------

--
-- Table structure for table `mm_seeorsaw`
--

CREATE TABLE `mm_seeorsaw` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `fid` int(10) unsigned NOT NULL COMMENT '电影id',
  `uid` int(10) unsigned NOT NULL COMMENT '评价用户',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '0无状态 1 想看 2 看过 '
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_seeorsaw`
--

INSERT INTO `mm_seeorsaw` (`id`, `fid`, `uid`, `status`) VALUES
(19, 30, 1, 2),
(20, 29, 1, 1),
(21, 31, 1, 2),
(22, 36, 6, 1),
(23, 29, 6, 2),
(24, 37, 6, 1),
(25, 31, 5, 1),
(26, 39, 7, 2),
(27, 29, 7, 2),
(28, 35, 8, 2),
(29, 31, 9, 2),
(30, 32, 1, 2),
(31, 35, 10, 2),
(32, 31, 14, 1),
(33, 31, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_shortreview`
--

CREATE TABLE `mm_shortreview` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `fid` int(10) unsigned NOT NULL COMMENT '影片id',
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `content` text NOT NULL COMMENT '影评内容',
  `rtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复时间',
  `unum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '有用数目',
  `status` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '状态 3禁言 1正常 2举报'
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_shortreview`
--

INSERT INTO `mm_shortreview` (`id`, `fid`, `uid`, `content`, `rtime`, `unum`, `status`) VALUES
(18, 29, 6, 'The Pianist is the true story of Wladyslaw Szpilman, at the time Poland''s most acclaimed pianist whose life is transformed during the Nazi occupation of Warsaw beginning in 1939. The film spans several years and maps his many personal trials in addition to providing the perspectives of his family, rebel factions and sympathizers.', 1386731367, 0, 1),
(17, 30, 1, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1386681504, 0, 1),
(16, 31, 1, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1386676204, 0, 1),
(15, 29, 1, 'Brilliantly directed by Roman Polanski and starring an amazing Adrien Brody, The Pianist is bound to garner comparisons to Schindler''s List, for obvious reasons. However similar the subject matter, the approach is different. While Schindler''s List was filmed in a beautiful, crisp black and white that offered many incredible images, The Pianist was filmed with almost muted color. Schindler''s List featured what has been argued as a complicated hero. Oskar Schindler did save many Jews, but not without battling his own materialistic demons first. The Pianist''s Szpilman is a sympathetic character throughout. His plight was desperate, and the demons he fought were over his own guilt in surviving a fight that eventually turns into a primal will to live.', 1386675808, 0, 1),
(14, 29, 1, 'Polanski does not spare the viewer any grief with his film. The horrific scenes between the Nazis and the Warsaw Jews were more terrifying and horrible than any horror/suspense movie I have seen in some time, possibly ever. The humiliation and complete loss is wrenching. In several scenes, Jews are lined up in the middle of the night and subjected to either torture or death. In one case, a woman asks of a Nazi officer, "What will happen to us?" and is promptly shot point blank in the head. The camera does not flinch or subdue any of these atrocities.', 1386675743, 0, 1),
(13, 29, 1, 'Roman Polanski can lay claim to having helmed one of the greatest films of all time with 1974''s densely layered "Chinatown" but a Best Director Oscar eluded him until 2002''s "The Pianist". It is the true story of a Jewish Polish pianist struggling to survive under Nazi rule in WWII-era Warsaw. The story has personal meaning for Polanski, who is himself a Holocaust survivor.', 1386661784, 0, 1),
(12, 29, 1, 'For those familiar with Polanski''s work behind the camera it should come as no surprise that the film is impeccably directed. There is a real sense of ''living'' this experience through covert glances out of windows and half-shut doors.', 1386639479, 0, 1),
(19, 36, 6, 'What a beautiful surprise. I loved Malena for its honesty, simplicity and the way it portrayed the life of the young boy in the early 40''s. It reminded my of a lot of good movies I have seen throughout my life. Malena is one of those movies that gets stuck in your mind. I enjoyed the movie very much and recommend it to all.', 1386731481, 0, 1),
(20, 36, 6, 'In a way, "Malena" kept reminding us of a famous photograph by Ruth Orkin, in which a young American woman is seen walking alone in an Italian street where there must be at least twenty men ogling this beautiful beautiful creature in different degrees of desire, shouting things about what they would love to do with her. ', 1386731490, 0, 1),
(21, 36, 6, 'In a way, "Malena" kept reminding us of a famous photograph by Ruth Orkin, in which a young American woman is seen walking alone in an Italian street where there must be at least twenty men ogling this beautiful beautiful creature in different degrees of desire, shouting things about what they would love to do with her. ', 1386731496, 0, 2),
(22, 36, 6, 'In a way, "Malena" kept reminding us of a famous photograph by Ruth Orkin, in which a young American woman is seen walking alone in an Italian street where there must be at least twenty men ogling this beautiful beautiful creature in different degrees of desire, shouting things about what they would love to do with her. ', 1386731499, 0, 2),
(23, 31, 3, 'I avoided watching this film for the longest time. Long before it was even released I had dismissed it as an over-hyped, over-blown, overly romanticized piece of Hollywood schmaltz, and I wanted nothing to do with it. I never watched it in the theatre. I shook my head in disbelief at the 11 Academy Awards - even though I had never seen it. Then I was asked to be a judge at a high school public speaking contest. One of the girls spoke about this movie. "It was so great," she said. "You really felt like you were on the ship." "Nonsense," I thought. I shared my feelings with my fellow judges. One looked at me and said, "you might be right, but if she liked the movie that much maybe she''ll want to learn more about the real Titanic. The movie must have done something right to get her so interested." "Well, maybe," thought I. Then it finally appeared on Pay TV. "OK," I thought, "I''ll give it a look see." I didn''t want to like it - and I didn''t. I loved it! What a great movie.', 1386761044, 0, 1),
(24, 31, 3, 'I find it so amazing that even after all these years, we are STILL talking about this movie! Obviously this movie wasn''t THAT bad or else people wouldn''t even BOTHER to talk about it. I personally enjoyed this film immensly, and still do! I guess this film isn''t for everyone, but it certainly did touch the hearts of many. ', 1386761052, 0, 1),
(25, 31, 5, 'As for those that think that this film is "overrated" or "over-hyped"...well, we only have the movie-going public to thank for that! lol* You see, it''s not CRITICS/article writers that make a film "HUGE" or a "HIT" with the general movie-going public. PEOPLE make the film a huge success. With Titanic, everyone was in awe. Let''s face it, a film like this had never been made before. At least not with the type of special effects needed to really capture the essence of the ship actually sinking. This film is so accurate that even James Cameron timed the actual sinking of the ship in the film with the REAL sinking that fateful day in April 1912. Even the silverware for goodness sakes matched! ', 1386764234, 0, 1),
(26, 31, 5, 'Personally, I LOVE this film. However, this film might not be for everyone. DOn''t say that this film sucks just because of romance though! THat is the most sexist thing I''ve ever heard! Disliking a movie just because it has romance in it! The story was sweet. The dialogue could have been better, but let''s face it...the REAL star of the movie wasn''t Leo or Kate...it was that GIGANTIC Ship! I think all of the actors including DiCaprio and Winslet did a fine job. It''s not thier best work (I''ve seen much BETTER work from both of them) but it wasn''t the WORST I''ve seen on screen before. Give them a break!', 1386764239, 0, 1),
(27, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764243, 0, 1),
(28, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764246, 0, 1),
(29, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764249, 0, 1),
(30, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764252, 0, 1),
(31, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764254, 0, 1),
(32, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764257, 0, 1),
(33, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764259, 0, 1),
(34, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764261, 0, 1),
(35, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764264, 0, 1),
(36, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764266, 0, 1),
(37, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764269, 0, 1),
(38, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764271, 0, 1),
(39, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764274, 0, 1),
(40, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764276, 0, 2),
(41, 31, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764310, 0, 2),
(42, 35, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764988, 0, 1),
(43, 35, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386764995, 0, 1),
(44, 35, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386765011, 0, 1),
(45, 35, 5, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386765014, 0, 1),
(46, 31, 1, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1386811142, 0, 2),
(78, 30, 1, 'This movie re-wrote film history in every way. No one cares what anyone thinks about this movie, because it transcends criticism. Every flaw in the movie is easily overcome by the many amazing things the movie has going for it. It is an extremely beautiful movie, and I doubt many of us will see anything like it again. I''ve seen it more times than I care to count, and I still become transfixed every time, with a feeling which is hard to describe. One for the ages.', 1387337771, 0, 3),
(79, 32, 9, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387348176, 0, 1),
(77, 31, 1, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387329347, 0, 2),
(76, 39, 3, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179831, 0, 1),
(75, 39, 3, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179772, 0, 1),
(74, 35, 8, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179586, 0, 2),
(73, 35, 8, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179499, 0, 1),
(72, 35, 8, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179488, 0, 1),
(71, 35, 8, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179474, 0, 1),
(69, 31, 7, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179003, 0, 1),
(70, 33, 7, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387179216, 0, 1),
(68, 29, 7, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387178729, 0, 1),
(67, 30, 7, 'Visually, Gravity is unlike what we have seen on a cinema screen before and arguably it has one of the best uses of 3D in a movie. The setting is spectacular and the premise is inventive.', 1387178439, 0, 1),
(81, 29, 5, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 1387396895, 0, 1),
(65, 39, 3, 'qqqqqqq', 1386844787, 0, 1),
(66, 38, 3, 'adfasdfasdfqwerqweqwe', 1386847857, 0, 1),
(87, 30, 18, '1raldskjasjoasiugaosj', 1430121109, 0, 1),
(80, 29, 9, '\n\nAny one thing, as long as be most willing to, always simple.\n\n任何一件事情，只要心甘情愿，总是能够变得简单。\n', 1387348240, 0, 1),
(82, 31, 1, 'asdfasdfasdfasdfadsfadfqwrqwef', 1387422880, 0, 1),
(83, 31, 14, '111111111111111111111111', 1387436977, 0, 2),
(84, 38, 17, 'adfjoaiwfoajdlasdjoaisdufoeiwfqew', 1430113622, 0, 1),
(85, 38, 17, 'adfaodifuoqwufoqweifasdlkvnz,ckxjvoasidfuqwupfqwfioadsovias', 1430113631, 0, 1),
(86, 38, 17, 'asdkfqiwuyeoqrwehfasdjnvkhvoasidufqw', 1430113637, 0, 1),
(88, 31, 19, 'abcadsfaadfadsfaajfhakfhlakdsjhfadsfadsfadsf', 1430158879, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_store`
--

CREATE TABLE `mm_store` (
`id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `mid` int(10) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL COMMENT '收藏时间'
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_store`
--

INSERT INTO `mm_store` (`id`, `uid`, `mid`, `addtime`) VALUES
(1, 1, 29, 1386688859),
(13, 6, 36, 1386747564),
(12, 1, 31, 1386730524),
(4, 1, 32, 1386688859),
(5, 1, 33, 1386688859),
(6, 1, 34, 1386688859),
(14, 6, 29, 1386740214),
(15, 6, 37, 1386747564),
(16, 1, 30, 1386758455),
(17, 5, 31, 1386764333),
(18, 7, 39, 1387177649),
(19, 7, 29, 1387178635),
(20, 8, 35, 1387179449),
(21, 9, 31, 1387351323),
(22, 10, 35, 1387381817),
(23, 14, 31, 1387436940);

-- --------------------------------------------------------

--
-- Table structure for table `mm_tag`
--

CREATE TABLE `mm_tag` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `tagname` varchar(16) NOT NULL COMMENT '标签名'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mm_type`
--

CREATE TABLE `mm_type` (
`id` int(10) unsigned NOT NULL COMMENT '主键',
  `fid` int(10) unsigned NOT NULL COMMENT '所属类别',
  `typename` varchar(16) NOT NULL COMMENT '类型名',
  `clicknum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数'
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_type`
--

INSERT INTO `mm_type` (`id`, `fid`, `typename`, `clicknum`) VALUES
(4, 1, 'Sci-fi', 0),
(8, 1, 'Classic', 0),
(5, 1, 'Clsc', 0),
(10, 1, 'Cheers', 0),
(120, 3, '2012', 0),
(6, 1, 'Action', 0),
(7, 1, 'Drama', 0),
(9, 1, 'Susps', 0),
(12, 1, 'Horror', 0),
(13, 1, 'Crime', 0),
(14, 1, 'Art', 0),
(15, 1, 'Docu', 0),
(16, 1, 'Fun', 0),
(17, 1, 'Horror', 0),
(18, 1, 'Short', 0),
(19, 1, 'War', 0),
(20, 1, 'Magic', 0),
(121, 1, 'Humor', 0),
(122, 1, 'Toon', 0),
(23, 1, 'Erotica', 0),
(24, 1, 'Bio', 0),
(25, 1, 'Moving', 0),
(26, 1, 'Violent', 0),
(27, 1, 'Childhood', 0),
(28, 1, 'Music', 0),
(29, 1, 'Homo', 0),
(30, 1, 'Ganstr', 0),
(31, 1, 'Rom', 0),
(32, 1, 'Femi', 0),
(33, 1, 'Family', 0),
(34, 1, 'Epic', 0),
(35, 1, 'Tale', 0),
(36, 1, 'Sk', 0),
(37, 1, 'cult', 0),
(38, 2, 'US', 0),
(39, 2, 'Japan', 0),
(40, 2, 'Hongkong', 0),
(41, 2, 'Britain', 0),
(42, 2, 'China', 0),
(43, 2, 'France', 0),
(44, 2, 'Korea', 0),
(45, 2, 'Taiwan', 0),
(46, 2, 'German', 0),
(47, 2, 'Italy', 0),
(48, 2, 'Main', 0),
(49, 2, 'Taild', 0),
(50, 2, 'Spanish', 0),
(51, 2, 'India', 0),
(52, 2, 'European', 0),
(53, 2, 'Canada', 0),
(54, 2, 'Australia', 0),
(55, 2, 'Mainland', 0),
(56, 2, 'RS', 0),
(57, 2, 'Iran', 0),
(58, 2, 'Swiden', 0),
(59, 2, 'Brazil', 0),
(60, 2, 'Ireland', 0),
(61, 2, 'Poland', 0),
(62, 2, 'Zetch', 0),
(63, 2, 'Denmark', 0),
(64, 2, 'Argina', 0),
(65, 2, 'Belgm', 0),
(66, 2, 'Mexico', 0),
(67, 2, 'Austria', 0),
(68, 2, 'Netherld', 0),
(69, 2, 'Turkey', 0),
(70, 2, 'Hungary', 0),
(71, 2, 'Nzealand', 0),
(72, 2, 'Singapore', 0),
(73, 2, 'Isreal', 0),
(74, 3, '2011', 0),
(75, 3, '2010', 0),
(76, 3, '2009', 0),
(77, 3, '2008', 0),
(78, 3, '2007', 0),
(79, 3, '2006', 0),
(80, 3, '2005', 0),
(81, 3, '2004', 0),
(82, 3, '2003', 0),
(83, 3, '2002', 0),
(84, 3, '2001', 0),
(85, 3, '2000', 0),
(86, 3, '1999', 0),
(105, 3, '1998', 0),
(96, 3, '1997', 0),
(95, 3, '1996', 0),
(94, 3, '1995', 0),
(93, 3, '1994', 0),
(92, 3, '1993', 0),
(91, 3, '1992', 0),
(90, 3, '1991', 0),
(89, 3, '1990', 0),
(88, 3, '1989', 0),
(87, 3, '1988', 0),
(98, 3, '1987', 0),
(99, 3, '2014', 0),
(100, 3, '2013', 0),
(1, 1, 'Love', 0),
(2, 1, 'Cmdy', 0),
(3, 1, 'Catn', 0),
(126, 1, 'History', 0),
(124, 1, 'Adventure', 0),
(125, 1, 'Crisis', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mm_uletter`
--

CREATE TABLE `mm_uletter` (
`id` int(10) unsigned NOT NULL COMMENT '站内信id',
  `uid` int(10) unsigned NOT NULL COMMENT '被发送人id',
  `title` varchar(255) DEFAULT '"这是一封站内信"' COMMENT '站内信标题',
  `content` text NOT NULL COMMENT '站内信内容',
  `addtime` int(10) unsigned NOT NULL COMMENT '发信时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '站内信开启状态，0 未浏览 1 已浏览'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_uletter`
--

INSERT INTO `mm_uletter` (`id`, `uid`, `title`, `content`, `addtime`, `status`) VALUES
(1, 1, '0', '这是给路飞的一封站内信这是给路飞的一封站内信', 1387334078, 1),
(2, 1, '发送一封站内信', '一封站内信一封站内信一封站内信一封站内信', 1387334279, 1),
(3, 1, '给你一封站内信', '给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，给你一封站内信，', 1387336541, 1),
(4, 1, '你好 站内信 请查收', '你好  管理员问你准备好验收项目了么', 1387433864, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_ulevel`
--

CREATE TABLE `mm_ulevel` (
`id` int(10) unsigned NOT NULL COMMENT 'id',
  `level` int(10) unsigned NOT NULL COMMENT '等级位置',
  `levelname` varchar(32) NOT NULL COMMENT '级别名称',
  `lscore` int(10) unsigned DEFAULT NULL COMMENT '级别积分'
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_ulevel`
--

INSERT INTO `mm_ulevel` (`id`, `level`, `levelname`, `lscore`) VALUES
(37, 7, '领衔主演', 10000),
(36, 6, '主演演员', 5000),
(31, 1, 'Audience', 10),
(32, 2, '群众演员', 500),
(33, 3, '资深龙套', 1000),
(35, 5, '黄金配角', 3000),
(34, 4, '眼熟配角', 2000),
(38, 8, '著名影星', 15000),
(39, 9, '天皇巨星', 20000),
(40, 10, '传说中的大师', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `mm_ureply`
--

CREATE TABLE `mm_ureply` (
`id` int(10) unsigned NOT NULL COMMENT '回复ID',
  `uid` int(10) unsigned NOT NULL COMMENT '回复者ID',
  `bid` int(10) unsigned NOT NULL COMMENT '被回复者ID',
  `rid` int(10) unsigned NOT NULL COMMENT '被回复的内容id',
  `typeid` int(10) unsigned NOT NULL COMMENT '被回复的类型ID 1留言板 2心情 3相册 4日志 。。。  ',
  `rcontent` text NOT NULL COMMENT '回复的内容',
  `addtime` int(10) unsigned NOT NULL COMMENT '回复的时间'
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_ureply`
--

INSERT INTO `mm_ureply` (`id`, `uid`, `bid`, `rid`, `typeid`, `rcontent`, `addtime`) VALUES
(6, 1, 1, 2, 1, '22222222222222222', 222222),
(7, 2, 1, 10, 1, 'adsfaskdhfalkdfjas', 1386646946),
(8, 2, 1, 10, 1, '77777777777777777777777777777777777', 1386647029),
(9, 2, 1, 10, 1, 'a;dsfasdfhaldksfa', 1386647769),
(10, 1, 1, 10, 1, '111111111111111111111111', 213132123),
(12, 1, 1, 13, 1, 'aklsjdfhlakjfhqipw', 1386666098),
(23, 1, 2, 19, 1, 'afuqowdfaksdj', 1386772628),
(46, 1, 2, 31, 2, 'alsdfhjladskjfa', 1386913222),
(51, 1, 1, 1, 2, 'qqqqqqqqqqqqqqqqqq', 1387172063),
(52, 1, 1, 34, 1, 'alkjdfhlas', 1387172382),
(53, 1, 1, 1, 2, 'akljsdfhladskfjhal', 1387173823),
(54, 1, 1, 64, 2, 'adskljfhaldskjfahds', 1387176769),
(55, 1, 1, 64, 2, 'afhaksdljfahlds', 1387177244),
(56, 1, 1, 64, 2, 'ajksdfaldsjf', 1387177264),
(57, 1, 1, 37, 1, 'asdjfaldsfa', 1387180151),
(58, 9, 1, 66, 2, 'alkjdfhalksdfj', 1387349640),
(59, 1, 9, 68, 2, 'akjsdfa;dsf', 1387357193),
(60, 9, 1, 68, 2, 'asdkljfhalksdjfa', 1387357214),
(61, 9, 1, 68, 2, 'aksdjfbalsdkfad', 1387357247),
(62, 9, 1, 68, 2, 'adsjkfalsdhvasd', 1387357674),
(63, 9, 1, 68, 2, 'asdfjbaldshvads', 1387357806),
(64, 1, 9, 68, 2, 'askldfhalsdkjfhas', 1387357827),
(65, 9, 1, 37, 1, 'asldjfhalsdfasd', 1387358525),
(66, 9, 1, 37, 1, 'asidufyaisdouva', 1387358623),
(67, 9, 1, 37, 1, 'asdljvglasdgasd', 1387358634),
(68, 9, 1, 37, 1, 'a;sdfhadksjlfhaldsf', 1387358721),
(69, 9, 1, 37, 1, 'asdkjlfhalsdkjfahlds', 1387358726),
(70, 9, 1, 73, 2, 'akldfhaluldsjfa', 1387431969),
(71, 1, 9, 73, 2, 'asdkljvgalsdvasd', 1387431980),
(72, 9, 9, 38, 1, 'asdjcgalfdsfgadlsf', 1387432199),
(73, 9, 9, 38, 1, '谢谢', 1387432203),
(74, 1, 9, 73, 2, '每天都要开心', 1387433179);

-- --------------------------------------------------------

--
-- Table structure for table `mm_user`
--

CREATE TABLE `mm_user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL,
  `disable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户状态 0正常 举报1 禁言2',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 女 1男',
  `birthday` varchar(16) DEFAULT '2011-11-11' COMMENT '出生日期',
  `email` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '1',
  `score` int(11) NOT NULL,
  `headpic` varchar(255) NOT NULL DEFAULT '7.jpg',
  `addtime` int(11) DEFAULT NULL,
  `logtimes` int(11) NOT NULL DEFAULT '0',
  `lastlog` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_user`
--

INSERT INTO `mm_user` (`id`, `username`, `name`, `password`, `disable`, `sex`, `birthday`, `email`, `address`, `level`, `score`, `headpic`, `addtime`, `logtimes`, `lastlog`) VALUES
(1, 'luffy', 'Luffy', 'kent', 2, 0, '1999-9-9', 'wangbo@gmail.com', '北京1', 3, 1093, '52b1614925105.jpg', 1386245533, 96, 1387297024),
(2, 'kent', '', 'jarjarbinks', 0, 1, '2011-11-11', 'wangbo@gmail.com', NULL, 1, 12, '52a0a2c35af98.jpg', 1386245533, 5, 1386911788),
(3, 'huizi', '', 'c3d64fac296ad2afd2dc7d5098d0c051', 0, 1, '2011-11-11', 'huizi@163.com', NULL, 1, 47, '52a0a2c35af98.jpg', 1386407376, 50, 1387243595),
(4, 'ice0915', '', '9290299bf9b3351d7f6caa101c5ebc24', 0, 0, '2013-12-20', 'ice@163.com', NULL, 1, 12, '52a0a2c35af98.jpg', 1386575434, 2, 1387179196),
(5, 'ice1015', '', '9290299bf9b3351d7f6caa101c5ebc24', 0, 1, '1988-12-20', 'ice@163.com', NULL, 1, 33, '52a0a2c35af98.jpg', 1386575575, 19, 1386931762),
(6, 'bloveice1015', '', '9290299bf9b3351d7f6caa101c5ebc24', 0, 0, '1999-12-24', 'bloveice1015@163.com', NULL, 1, 10, '52a0a2c35af98.jpg', 1386730408, 6, 1386747219),
(7, 'qiangwei', '', 'baa89d687896694e1dd17168a06de66f', 0, 1, '2011-11-15', 'qiangwei@163.com', NULL, 1, 14, '52a0a2c35af98.jpg', 1387173700, 15, 1387262323),
(8, 'xizhilang', '', '7d6d5018feccd35e17df5d417e43ed65', 0, 1, '2011-11-11', 'xizhilabg@163.com', NULL, 1, 10, '52a0a2c35af98.jpg', 1387179407, 2, 1387179422),
(9, 'xiaoshuaibo', 'Bobby', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, '2011-11-11', 'admin@163.com', '北京', 1, 19, '52b1614925105.jpg', 1387345502, 6, 1387345502),
(10, 'qiushang', '', '23af0578775578add75d8c6219b9ea93', 0, 1, '2011-11-11', 'qiushang@163.com', NULL, 1, 17, '52b1614925105.jpg', 1387380356, 5, 1387380356),
(12, 'huizi123', '', '38c9cd48dcecc99f047ee198a43084f9', 0, 1, '2011-11-11', 'huizi@163.com', NULL, 1, 12, '52b1614925105.jpg', 1387431172, 3, 1387431172),
(13, 'wangbo123', '', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2011-11-11', '124@gmail.com', NULL, 1, 10, '52b1614925105.jpg', 1387436509, 1, 1387436509),
(14, 'huizi1', '', '38c9cd48dcecc99f047ee198a43084f9', 0, 1, '2011-11-11', 'huizi@163.com', NULL, 1, 16, '52b1614925105.jpg', 1387436609, 2, 1387436609),
(16, 'kent92', '', '6ef7f291cf2a4a1e17b35409bf8bf01e', 0, 1, '2011-11-11', 'davidjarkent@gmail.com', NULL, 1, 13, '52b1614925105.jpg', 1430083534, 4, 1430083534),
(17, '1111', '', '96e79218965eb72c92a549dd5a330112', 0, 1, '2011-11-11', 'abc@asdf.com', NULL, 1, 36, '7.jpg', 1430113507, 2, 1430113507),
(18, '2222', '', 'e3ceb5881a0a1fdaad01296d7554868d', 0, 1, '2011-11-11', '2222@gmail.com', NULL, 1, 17, '7.jpg', 1430120818, 3, 1430120818),
(19, '4444', '', '73882ab1fa529d7273da0db6b49cc4f3', 0, 1, '2011-11-11', 'asdfa@gmail.com', NULL, 1, 26, '7.jpg', 1430158796, 2, 1430158796);

-- --------------------------------------------------------

--
-- Table structure for table `mm_user_type`
--

CREATE TABLE `mm_user_type` (
  `tid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_user_type`
--

INSERT INTO `mm_user_type` (`tid`, `uid`) VALUES
(5, 2),
(6, 2),
(35, 10),
(16, 10),
(6, 10),
(5, 10),
(4, 10),
(4, 9),
(3, 9),
(2, 9),
(1, 9),
(8, 1),
(5, 1),
(4, 1),
(3, 1),
(2, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mm_visitor`
--

CREATE TABLE `mm_visitor` (
`id` int(10) unsigned NOT NULL COMMENT '主键id',
  `uid` int(10) unsigned NOT NULL COMMENT '被访问者id',
  `vid` int(10) unsigned NOT NULL COMMENT '访问者id',
  `vtime` int(10) unsigned NOT NULL COMMENT '到访时间'
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mm_visitor`
--

INSERT INTO `mm_visitor` (`id`, `uid`, `vid`, `vtime`) VALUES
(2, 1, 3, 1386850922),
(3, 1, 4, 1386850922),
(5, 1, 5, 1386850922),
(6, 1, 6, 1386850922),
(22, 17, 1, 1386861492),
(29, 1, 2, 1386913166),
(39, 7, 1, 1387164813),
(55, 53, 3, 1387173125),
(60, 3, 1, 1387345359),
(61, 4, 1, 1387345447),
(71, 1, 9, 1387359321),
(75, 6, 1, 1387377273),
(76, 5, 1, 1387432519),
(77, 2, 1, 1387433275),
(79, 9, 1, 1387433327),
(80, 1, 17, 1430113644);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mm_access`
--
ALTER TABLE `mm_access`
 ADD KEY `groupId` (`role_id`), ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `mm_acomment`
--
ALTER TABLE `mm_acomment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_actors`
--
ALTER TABLE `mm_actors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_auser`
--
ALTER TABLE `mm_auser`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `emial` (`email`), ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `mm_dialogue`
--
ALTER TABLE `mm_dialogue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_diary`
--
ALTER TABLE `mm_diary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_diarypic`
--
ALTER TABLE `mm_diarypic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_diaryreply`
--
ALTER TABLE `mm_diaryreply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_filmpic`
--
ALTER TABLE `mm_filmpic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_friendlink`
--
ALTER TABLE `mm_friendlink`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_longreview`
--
ALTER TABLE `mm_longreview`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_message`
--
ALTER TABLE `mm_message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_mnews`
--
ALTER TABLE `mm_mnews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_mnewscomment`
--
ALTER TABLE `mm_mnewscomment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_movie`
--
ALTER TABLE `mm_movie`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_movie_actor`
--
ALTER TABLE `mm_movie_actor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_movie_tag`
--
ALTER TABLE `mm_movie_tag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_movie_type`
--
ALTER TABLE `mm_movie_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_mpicnews`
--
ALTER TABLE `mm_mpicnews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_newscomment`
--
ALTER TABLE `mm_newscomment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_node`
--
ALTER TABLE `mm_node`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`), ADD KEY `name` (`name`);

--
-- Indexes for table `mm_notice`
--
ALTER TABLE `mm_notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_photoalbum`
--
ALTER TABLE `mm_photoalbum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_picactor`
--
ALTER TABLE `mm_picactor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_picrevied`
--
ALTER TABLE `mm_picrevied`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_pics`
--
ALTER TABLE `mm_pics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_picture`
--
ALTER TABLE `mm_picture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_pmood`
--
ALTER TABLE `mm_pmood`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_pnews`
--
ALTER TABLE `mm_pnews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_ppicnews`
--
ALTER TABLE `mm_ppicnews`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_ppt`
--
ALTER TABLE `mm_ppt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_praise`
--
ALTER TABLE `mm_praise`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_prevue`
--
ALTER TABLE `mm_prevue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_rate`
--
ALTER TABLE `mm_rate`
 ADD PRIMARY KEY (`int`);

--
-- Indexes for table `mm_report`
--
ALTER TABLE `mm_report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_reviewpic`
--
ALTER TABLE `mm_reviewpic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_reviewreply`
--
ALTER TABLE `mm_reviewreply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_role`
--
ALTER TABLE `mm_role`
 ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`);

--
-- Indexes for table `mm_role_user`
--
ALTER TABLE `mm_role_user`
 ADD KEY `group_id` (`role_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mm_seeorsaw`
--
ALTER TABLE `mm_seeorsaw`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_shortreview`
--
ALTER TABLE `mm_shortreview`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_store`
--
ALTER TABLE `mm_store`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_tag`
--
ALTER TABLE `mm_tag`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_type`
--
ALTER TABLE `mm_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_uletter`
--
ALTER TABLE `mm_uletter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_ulevel`
--
ALTER TABLE `mm_ulevel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_ureply`
--
ALTER TABLE `mm_ureply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_user`
--
ALTER TABLE `mm_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_visitor`
--
ALTER TABLE `mm_visitor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mm_acomment`
--
ALTER TABLE `mm_acomment`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `mm_actors`
--
ALTER TABLE `mm_actors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????',AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `mm_auser`
--
ALTER TABLE `mm_auser`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `mm_dialogue`
--
ALTER TABLE `mm_dialogue`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mm_diary`
--
ALTER TABLE `mm_diary`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `mm_diarypic`
--
ALTER TABLE `mm_diarypic`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT ' 主键',AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `mm_diaryreply`
--
ALTER TABLE `mm_diaryreply`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `mm_filmpic`
--
ALTER TABLE `mm_filmpic`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????',AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `mm_friendlink`
--
ALTER TABLE `mm_friendlink`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `mm_longreview`
--
ALTER TABLE `mm_longreview`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `mm_message`
--
ALTER TABLE `mm_message`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `mm_mnews`
--
ALTER TABLE `mm_mnews`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `mm_mnewscomment`
--
ALTER TABLE `mm_mnewscomment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `mm_movie`
--
ALTER TABLE `mm_movie`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `mm_movie_actor`
--
ALTER TABLE `mm_movie_actor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `mm_movie_tag`
--
ALTER TABLE `mm_movie_tag`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- AUTO_INCREMENT for table `mm_movie_type`
--
ALTER TABLE `mm_movie_type`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=236;
--
-- AUTO_INCREMENT for table `mm_mpicnews`
--
ALTER TABLE `mm_mpicnews`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `mm_newscomment`
--
ALTER TABLE `mm_newscomment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mm_node`
--
ALTER TABLE `mm_node`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `mm_notice`
--
ALTER TABLE `mm_notice`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `mm_photoalbum`
--
ALTER TABLE `mm_photoalbum`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '相册ID',AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mm_picactor`
--
ALTER TABLE `mm_picactor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '????',AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `mm_picrevied`
--
ALTER TABLE `mm_picrevied`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mm_pics`
--
ALTER TABLE `mm_pics`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '照片id',AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `mm_picture`
--
ALTER TABLE `mm_picture`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id号',AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `mm_pmood`
--
ALTER TABLE `mm_pmood`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `mm_pnews`
--
ALTER TABLE `mm_pnews`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `mm_ppicnews`
--
ALTER TABLE `mm_ppicnews`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `mm_ppt`
--
ALTER TABLE `mm_ppt`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `mm_praise`
--
ALTER TABLE `mm_praise`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mm_prevue`
--
ALTER TABLE `mm_prevue`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mm_rate`
--
ALTER TABLE `mm_rate`
MODIFY `int` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `mm_report`
--
ALTER TABLE `mm_report`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `mm_reviewpic`
--
ALTER TABLE `mm_reviewpic`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT ' 主键',AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `mm_reviewreply`
--
ALTER TABLE `mm_reviewreply`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `mm_role`
--
ALTER TABLE `mm_role`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `mm_seeorsaw`
--
ALTER TABLE `mm_seeorsaw`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `mm_shortreview`
--
ALTER TABLE `mm_shortreview`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `mm_store`
--
ALTER TABLE `mm_store`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `mm_tag`
--
ALTER TABLE `mm_tag`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `mm_type`
--
ALTER TABLE `mm_type`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `mm_uletter`
--
ALTER TABLE `mm_uletter`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '站内信id',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mm_ulevel`
--
ALTER TABLE `mm_ulevel`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `mm_ureply`
--
ALTER TABLE `mm_ureply`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '回复ID',AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `mm_user`
--
ALTER TABLE `mm_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `mm_visitor`
--
ALTER TABLE `mm_visitor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

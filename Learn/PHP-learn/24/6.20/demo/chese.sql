-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-06-27 10:41:35
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `chese`
--

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE `guestbook` (
  `name` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`name`, `message`) VALUES
('525', '51235123'),
('wadsrgwsaerg', 'wsergh'),
('qergqwerg', 'wergwerg'),
('wsergwerg', 'werg'),
('q354yhq345yh', '345YHQ33W4RYH'),
('57iukyjmnrhtbg', '674ju85yhbt5rg'),
('57kuj6ythn5ger', '57u468jyther5g'),
('j467uyht5erg', '4567ju8nyht5reg'),
('67j4yh5teg', '67j4hy5tgr4f'),
('2w45yhretg', 'k6u8j74yht5ger');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('lgb', 'lgb2007', 'lgb2007@email'),
('lgb123', '123', '123');

--
-- 转储表的索引
--

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`,`password`,`email`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

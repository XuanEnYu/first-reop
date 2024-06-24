-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2024-05-10 15:16:55
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
-- 数据库： `hzm`
--

-- --------------------------------------------------------

--
-- 表的结构 `t1`
--

CREATE TABLE `t1` (
  `username` char(20) NOT NULL,
  `password` int(11) NOT NULL,
  `email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `t1`
--

INSERT INTO `t1` (`username`, `password`, `email`) VALUES
('aa', 123456, '234567@qq.com'),
('bb', 111111, '287293@qq.com'),
('cc', 888888, '990056@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `t2`
--

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `comment` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `t2`
--

INSERT INTO `t2` (`id`, `username`, `comment`) VALUES
(1, '张三', '大家好！'),
(2, '李四', '很高兴认识你！');

--
-- 转储表的索引
--

--
-- 表的索引 `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `t2`
--
ALTER TABLE `t2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

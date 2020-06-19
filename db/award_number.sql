-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 06 月 19 日 07:24
-- 伺服器版本： 5.5.64-MariaDB
-- PHP 版本： 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1090207`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_number`
--

CREATE TABLE `award_number` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `year` year(4) NOT NULL COMMENT '年',
  `period` tinyint(1) UNSIGNED NOT NULL COMMENT '期',
  `number` int(8) NOT NULL COMMENT '號碼',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '獎別'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_number`
--

INSERT INTO `award_number` (`id`, `year`, `period`, `number`, `type`) VALUES
(1, 2020, 1, 12620024, 1),
(2, 2020, 1, 39793895, 2),
(3, 2020, 1, 67913945, 3),
(4, 2020, 1, 9954061, 3),
(5, 2020, 1, 54574947, 3),
(6, 2020, 1, 700, 4),
(7, 2020, 1, 0, 4),
(8, 2020, 2, 91911374, 1),
(9, 2020, 2, 8501338, 2),
(10, 2020, 2, 57161318, 3),
(11, 2020, 2, 23570653, 3),
(12, 2020, 2, 47332279, 3),
(13, 2020, 2, 519, 4),
(14, 2020, 2, 0, 4),
(15, 0000, 1, 0, 1),
(16, 0000, 1, 0, 2),
(17, 0000, 1, 0, 3),
(18, 0000, 1, 0, 3),
(19, 0000, 1, 0, 3),
(20, 0000, 1, 0, 4),
(21, 0000, 1, 0, 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_number`
--
ALTER TABLE `award_number`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_number`
--
ALTER TABLE `award_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

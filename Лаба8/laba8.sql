-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2020 г., 19:10
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laba8`
--

-- --------------------------------------------------------

--
-- Структура таблицы `visits`
--

CREATE TABLE `visits` (
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `visits`
--

INSERT INTO `visits` (`timestamp`) VALUES
('2020-05-11 09:55:57'),
('2020-05-11 09:56:04'),
('2020-05-11 11:51:11'),
('2020-05-11 11:51:32'),
('2020-05-11 11:51:38'),
('2020-05-11 11:55:46'),
('2020-05-11 11:55:50'),
('2020-05-11 11:57:25'),
('2020-05-11 11:57:25'),
('2020-05-11 11:57:27'),
('2020-05-11 11:57:27'),
('2020-05-11 11:58:55'),
('2020-05-11 11:59:02'),
('2020-05-11 11:59:08'),
('2020-05-11 11:59:11'),
('2020-05-11 12:00:45'),
('2020-05-11 12:01:04'),
('2020-05-11 12:01:29'),
('2020-05-11 12:01:55'),
('2020-05-11 12:05:27'),
('2020-05-11 12:07:11'),
('2020-05-11 12:07:13'),
('2020-05-11 12:07:15'),
('2020-05-11 12:07:16'),
('2020-05-11 12:07:47'),
('2020-05-11 12:07:48'),
('2020-05-11 12:07:49'),
('2020-05-11 12:07:50'),
('2020-05-11 12:08:14'),
('2020-05-11 12:08:17'),
('2020-05-11 12:08:18'),
('2020-05-11 12:08:19'),
('2020-05-11 12:08:19'),
('2020-05-11 12:08:55'),
('2020-05-11 12:08:57'),
('2020-05-11 12:08:58'),
('2020-05-11 12:09:02'),
('2020-05-11 12:09:03'),
('2020-05-11 12:39:31'),
('2020-05-11 12:44:20'),
('2020-05-11 12:44:22'),
('2020-05-11 12:44:25'),
('2020-05-11 12:44:26'),
('2020-05-11 12:44:27'),
('2020-05-11 12:44:29'),
('2020-05-11 13:54:57'),
('2020-05-11 13:55:40'),
('2020-05-11 13:55:43'),
('2020-05-11 13:55:45'),
('2020-05-11 13:55:46'),
('2020-05-11 13:55:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

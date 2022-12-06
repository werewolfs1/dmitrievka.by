-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2022 г., 00:29
-- Версия сервера: 8.0.24
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dmitrievka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int NOT NULL,
  `name` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `url` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `experience` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `name`, `date`, `code`, `url`, `img`, `experience`, `discription`) VALUES
(1, 'Sotbit', '12.12.2022', 'sotbit', 'https://www.sotbit.ru/', 'img/company/sotbit.jpg', '1', 'Ничего такая компания'),
(2, '5 Углов', '30.11.2022', '5_uglov', 'https://5corners.ru/', 'img/company/5corners.jpg', '0.5', 'Мои разработки'),
(3, 'Мои разработки', ' ', 'my', '/', 'img/portfolio/dmitrievka.png', ' ', 'Мои разработки');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `name` tinytext NOT NULL,
  `code` tinytext NOT NULL,
  `type` tinytext NOT NULL,
  `img` tinytext NOT NULL,
  `company` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `code`, `type`, `img`, `company`) VALUES
(1, 'Предзаказы', 'preorder', 'Back-end', 'img/portfolio/geekzona-logo.png', 'Sotbit'),
(2, 'Игра Пятнашки', 'my_game', 'Front-end', 'img/portfolio/game.png', 'Мои разработки'),
(3, 'Акции', 'stock', 'Full-stack', 'img/portfolio/dmitrievka.png', 'Sotbit'),
(4, 'Мультивалютность для клиентской части', 'valut', 'Back-end', 'img/portfolio/dmitrievkaBLUE.png', 'Sotbit'),
(5, 'Реализация сайта на битрикс', 'road', 'Back-end', 'img/portfolio/dmitrievkaIND.png', '5 Углов');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CODE` (`code`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

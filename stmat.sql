-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 19 2023 г., 08:25
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stmat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `kolvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `material_id`, `kolvo`) VALUES
(8, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `discription` varchar(2560) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `material`
--

INSERT INTO `material` (`id`, `name`, `discription`, `price`, `img`) VALUES
(1, 'Сосновые доски', 'Доска 50*90*300\r\nКамерной сушки\r\nЦена указана за 1 единицу', 800, 'img/alltovar/1.jpg'),
(2, 'Дубовые доски', 'Доска 50*90*300\r\nКамерной сушки\r\nЦена указана за 1 единицу', 600, 'img/alltovar/2.jpg'),
(3, 'Березовые доски', 'Доска 50*90*300\r\nКамерной сушки\r\nЦена указана за 1 единицу', 650, 'img/alltovar/3.jpg'),
(4, 'Полимерная черепица (красная)', 'Полимерная черепица (красная)\r\nЦена указана за 1 кв. м\r\n', 700, 'img/alltovar/4.jpg'),
(5, 'Полимерная черепица (синяя)', 'Полимерная черепица (синяя)\r\nЦена указана за 1 кв. м\r\n', 700, 'img/alltovar/5.jpg'),
(6, 'Полимерная черепица (зеленая)', 'Полимерная черепица (красная)\r\nЦена указана за 1 кв. м\r\n', 700, 'img/alltovar/6.jpg'),
(7, 'Облицовочный керамический кирпич (дерево) ', 'Облицовочный керамический кирпич состоит из экологически чистого и безопасного сырья – обожженной глины.\r\nЦена за 100 шт.', 3000, 'img/alltovar/7.jpg'),
(8, 'Облицовочный керамический кирпич (темный) ', 'Облицовочный керамический кирпич состоит из экологически чистого и безопасного сырья – обожженной глины.\r\nЦена за 100 шт.', 3000, 'img/alltovar/7.jpg'),
(9, 'Облицовочный керамический кирпич (черепашка) ', 'Облицовочный керамический кирпич состоит из экологически чистого и безопасного сырья – обожженной глины.\r\nЦена за 100 шт.', 3500, 'img/alltovar/7.jpg'),
(10, 'Облицовочный керамический кирпич (структурный)', 'Облицовочный керамический кирпич состоит из экологически чистого и безопасного сырья – обожженной глины.\r\nЦена за 100 шт.', 3500, 'img/alltovar/7.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `material_id_2` (`material_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Индексы таблицы `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

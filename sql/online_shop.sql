-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 25 2019 г., 09:09
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `sum` decimal(10,0) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `sum`, `order_date`) VALUES
(1, 1, '753565', '2019-12-24 13:09:02'),
(2, 1, '777', '2019-12-24 13:09:13'),
(3, 2, '29622073', '2019-12-24 13:09:40'),
(4, 3, '753565', '2019-12-24 13:22:15'),
(5, 4, '8724257', '2019-12-24 13:23:21'),
(6, 4, '8706307', '2019-12-24 13:23:35'),
(7, 5, '7977702', '2019-12-24 13:40:50'),
(8, 5, '7977702', '2019-12-24 13:40:58'),
(9, 6, '7970692', '2019-12-24 13:41:19'),
(10, 4, '7224914', '2019-12-24 13:41:36'),
(11, 7, '7224914', '2019-12-24 14:03:38'),
(12, 2, '7224914', '2019-12-24 14:05:38'),
(13, 8, '8705530', '2019-12-25 06:32:31');

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`) VALUES
(1, 1, 2, 1),
(2, 1, 1, 1),
(3, 2, 1, 1),
(4, 3, 1, 1),
(5, 3, 2, 1),
(6, 3, 3, 4),
(7, 4, 1, 1),
(8, 4, 2, 1),
(9, 5, 2, 2),
(10, 5, 1, 2),
(11, 5, 3, 1),
(12, 6, 1, 1),
(13, 6, 2, 1),
(14, 6, 3, 1),
(15, 6, 4, 1),
(16, 6, 5, 1),
(17, 7, 4, 1),
(18, 7, 3, 1),
(19, 7, 2, 1),
(20, 9, 3, 1),
(21, 9, 2, 1),
(22, 9, 1, 1),
(23, 10, 4, 1),
(24, 10, 3, 1),
(25, 11, 4, 1),
(26, 11, 3, 1),
(27, 12, 4, 1),
(28, 12, 3, 1),
(29, 13, 5, 1),
(30, 13, 4, 1),
(31, 13, 3, 1),
(32, 13, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Redmi Note 7', 'Good', '777'),
(2, 'sas', 'Good', '752788'),
(3, 'iPhone 11 Pro', 'xsdcsd', '7217127'),
(4, 'galaxy note 10', 'xasac', '7787'),
(5, 'iPhone 11 ', '277', '727828');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Vahe', 'Davtyan', 'vahedavtyan47@gmail.com'),
(2, 'Arman', 'Ghazaryan', 'armanghazaryan11@gmail.com'),
(3, 'Albert', 'Sargsyan', 'albertsargsyan@mail.ru'),
(4, 'Nikol', 'Pashinyan', 'nikolpashinyan74@gmail.com'),
(5, 'ddddd', 'ddddd', 'ddddd@gmail.com'),
(6, 'g', 'g', 'g@mail.ru'),
(7, 'aasa', 'dasas', 'vladimirputin78@gmail.com'),
(8, 'aaa', 'xxxxxxx', 'xxx@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

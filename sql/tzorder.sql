-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2020 г., 16:50
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tzorder`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `telefon` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `adressdelivery` varchar(500) NOT NULL,
  `datedelivery` date NOT NULL,
  `timedelivery` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `amount`, `name`, `telefon`, `email`, `adressdelivery`, `datedelivery`, `timedelivery`) VALUES
(2, 0, '13123', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(3, 1234, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(4, 0, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(5, 0, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(6, 0, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(7, 0, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(8, 1234, 'qwe', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(9, 1234, '123', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(10, 1234, '123', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(11, 1234, '123', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00'),
(12, 1234, '1', '89128788235', 'uncelpeter@gmail.com', 'Ижевск', '2018-05-16', '12:31:00');

-- --------------------------------------------------------

--
-- Структура таблицы `ordersrows`
--

CREATE TABLE `ordersrows` (
  `id` int(11) NOT NULL,
  `idorder` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ordersrows`
--

INSERT INTO `ordersrows` (`id`, `idorder`, `idproduct`, `count`, `price`, `amount`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 8, 8, 1, 1234, 1234),
(3, 10, 10, 1, 1234, 1234),
(4, 11, 1, 1, 1234, 1234),
(5, 12, 1, 1, 1234, 1234);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `unit` varchar(300) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `unit`, `img`) VALUES
(1, 'Бананы, эквадор 2 строки длинный текст', 1234, 'кг', 'images/product-1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ordersrows`
--
ALTER TABLE `ordersrows`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `ordersrows`
--
ALTER TABLE `ordersrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2024 г., 22:02
-- Версия сервера: 5.5.62
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Mi-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`id`, `name`, `email`, `password`) VALUES
(16, 'dada', 'dada', '11'),
(17, 'Звезда', 'HSHSE@GERG', '11'),
(18, 'dada', 'dada', '11'),
(19, 'Звездаd', 'HSHSE@GERG', 'aa'),
(20, 'test', 'test', '123'),
(21, 'df', 'df@df', 'df'),
(22, 'test', 'ff@ff', 'ff'),
(23, 'test', 'test@test', '22'),
(24, 'вфвф', 'ad@mail.ru', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manefacter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `imgfale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `manefacter`, `price`, `imgfale`, `img2`, `img3`, `about`) VALUES
(2, 'Xiaomi Mi Essential', 'Самокат премиум-класса', 22990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(3, 'Xiaomi MiJia Electric', 'Самокат премиум-класса', 18990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(4, 'Xiaomi Electric 3 Lite', 'Самокат премиум-класса', 35990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(5, 'Электросамокат Ninebot by Segway KickScooter', 'Самокат премиум-класса', 15600, '55.png', '56.png', '57.png', '  <p>Емкость аккумулятора (мА*ч): 6100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 15000</p>'),
(7, 'Электросамокат Ninebot by Segway KickScooter ', 'Самокат премиум-класса', 32442, '21.png', '22.png', '23.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(8, 'Электросамокат Ninebot by Segway eKickScooter', 'Самокат премиум-класса', 9990, '71.png', '72.png', '73.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(11, 'Электросамокат Ninebot by Segway eKickScoote', 'Самокат премиум-класса', 9990, '81.png\r\n', '82.png', '83.png', '<p>Монитор Xiaomi A22i наделен всеми необходимыми </p><p>характеристиками и функциями для продуктивной</p><p> работы в различных программах</p><p> или запуска мультимедийного контента. </p>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

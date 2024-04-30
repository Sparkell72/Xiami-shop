-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2024 г., 21:40
-- Версия сервера: 8.0.30
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
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(23, 'test', 'test@test', '22');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `manefacter` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `imgfale` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `manefacter`, `price`, `imgfale`, `img2`, `img3`, `about`) VALUES
(2, 'Xiaomi Mi Essential', 'Самокат премиум-класса', 22990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(3, 'Xiaomi MiJia Electric', 'Самокат премиум-класса', 18990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(4, 'Xiaomi Electric 3 Lite', 'Самокат премиум-класса', 35990, 'velik.png', 'tt.png', 'ttt.png', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(5, 'Смартфон Xiaomi Redmi Note 12 Pro', '256 ГБ черный', 12400, 'ff.png', '', '', '<p>Смартфон Xiaomi Redmi A2+ в голубом цвете корпуса</p> <p>поддерживает установку двух SIM-карт, чтобы вы</p><p> могли разграничить личные и деловые звонки. </p>'),
(7, 'Смартфон Xiaomi Redmi Note 12', '128 ГБ черный', 32442, 'fff.png', '', '', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(8, 'Смартфон Xiaomi Redmi 12', '256 ГБ черный', 100323, 'ffff.png', '', '', '  <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>\r\n                <p>Степень защиты: IP54</p>\r\n                <p>Материал: Алюминий</p>\r\n                <p>Управление: Через приложение Mi Home</p>\r\n                <p>Вес (г): 12000</p>'),
(11, 'Монитор Xiaomi Redmi Curved Display', '2560x1080 черный', 32198, 'aa.png\r\n', '', '', '<p>Монитор Xiaomi A22i наделен всеми необходимыми </p><p>характеристиками и функциями для продуктивной</p><p> работы в различных программах</p><p> или запуска мультимедийного контента. </p>');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

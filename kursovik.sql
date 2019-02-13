-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2019 г., 20:26
-- Версия сервера: 8.0.12
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kursovik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `arrest`
--

CREATE TABLE `arrest` (
  `id` int(11) NOT NULL,
  `police` text NOT NULL,
  `arrested` text NOT NULL,
  `date` datetime NOT NULL,
  `article` text NOT NULL,
  `region` text NOT NULL,
  `opic` text NOT NULL,
  `hash` text NOT NULL,
  `pasp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `arrest`
--

INSERT INTO `arrest` (`id`, `police`, `arrested`, `date`, `article`, `region`, `opic`, `hash`, `pasp`) VALUES
(153, 'Савин Денис Алексеевич', 'Осейкин Даниил Сергеевич', '2019-05-31 03:53:00', '1', 'Разлив', 'получил взятку', 'l8,2p4,9s5,3m2,1o2,9p3,7', '4014 554669'),
(154, 'Савин Денис Алексеевич', 'Дебил', '2019-05-31 03:45:00', '2', 'Разлив', 'апапап', 'a1,5g1,5a2,4a9,3v9,8r5,8', '4015 32423');

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article` float NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `article`, `info`) VALUES
(1, 290, 'Получение взятки'),
(2, 210, 'Организация преступного сообщества'),
(3, 241, 'Занятие проституцией'),
(4, 6.24, 'Курение в неположенных местах'),
(5, 20.2, 'Потребление алкоголя в неположенном месте'),
(6, 12.29, 'Переход дороги в неположенном месте');

-- --------------------------------------------------------

--
-- Структура таблицы `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `counter`
--

INSERT INTO `counter` (`id`, `ip`) VALUES
(1, '188.243.216.242'),
(2, '188.243.216.242'),
(3, '188.243.216.242'),
(4, '188.243.216.242'),
(5, '188.243.216.242'),
(6, '188.243.216.242'),
(7, '188.243.216.242'),
(8, '188.243.216.242'),
(9, '188.243.216.242'),
(10, '188.243.216.242'),
(11, '188.243.216.242'),
(12, '188.243.216.242'),
(13, '188.243.216.242'),
(14, '188.243.216.242'),
(15, '188.243.216.242'),
(16, '188.243.216.242'),
(17, '188.243.216.242'),
(18, '188.243.216.242'),
(19, '188.243.216.242'),
(20, '188.243.216.242'),
(21, '188.243.216.242'),
(22, '188.243.216.242'),
(23, '188.243.216.242'),
(24, '188.243.216.242'),
(25, '188.243.216.242'),
(26, '188.243.216.242'),
(27, '188.243.216.242'),
(28, '188.243.216.242'),
(29, '188.243.216.242'),
(30, '188.243.216.242'),
(31, '188.243.216.242'),
(32, '188.243.216.242');

-- --------------------------------------------------------

--
-- Структура таблицы `criminal`
--

CREATE TABLE `criminal` (
  `id` int(5) NOT NULL,
  `fio` text NOT NULL,
  `article` text NOT NULL,
  `hash` text NOT NULL,
  `pasp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `criminal`
--

INSERT INTO `criminal` (`id`, `fio`, `article`, `hash`, `pasp`) VALUES
(47, 'Осейкин Даниил Сергеевич', '1', 'l8,2p4,9s5,3m2,1o2,9p3,7', '4014 554669'),
(48, 'Дебил', '2', 'a1,5g1,5a2,4a9,3v9,8r5,8', '4015 32423');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `surname` text,
  `name` text,
  `fathername` text,
  `address` text,
  `title` text,
  `phone_number` text,
  `seniority` text,
  `region` text,
  `anket` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `surname`, `name`, `fathername`, `address`, `title`, `phone_number`, `seniority`, `region`, `anket`) VALUES
(17, 'Sawin_Denis', '25d55ad283aa400af464c76d713c07ad', 'Савин', 'Денис', 'Алексеевич', 'Сестрорецк, Гагаринская 77', 'Подполковник', '+7(921)871-09-65', '3', 'Разлив', 'true'),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Админов', 'Админ', 'Админский', 'Сестрорецк, администрация', 'Подполковник', '+7(777)777-77-77', '100', 'Секрет', 'true'),
(20, 'ilya_maksimovich', '25f9e794323b453885f5181f1b624d0b', 'Алексеев', 'Илья', 'Максимович', 'Сестрорецк, Борисова 9', 'Прапорщик', '+7(921)827-45-23', '6', 'Вокзал', 'true');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `arrest`
--
ALTER TABLE `arrest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `arrest`
--
ALTER TABLE `arrest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

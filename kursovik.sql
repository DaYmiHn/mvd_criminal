-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2019 г., 08:48
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
(205, 'Савин Денис Алексеевич', 'Осейкин Даниил Сергеевич', '2019-05-06 08:59:00', '5', 'Коломяги', 'пил в парке', 'b6,3w6,2j3,6d1,4g2,3w9,9', '4014 464846'),
(206, 'Савин Денис Алексеевич', 'Савин Денис Алексеевич', '2019-06-05 03:59:00', '1', 'Разлив', 'пвап', 'd4,8a2,1s6,5b2,4u5,2g1,7', '4014 458932'),
(207, 'Савин Денис Алексеевич', 'Галигин Сергей Сергеевич', '2019-06-04 04:56:00', '3', 'Разлив', '34п', 't3,9e1,6m9,3m6,1b2,8q1,9', '4014 532178');

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
(6, 12.29, 'Переход дороги в неположенном месте'),
(7, 228, 'Незаконные приобретение, хранение, перевозка, изготовление наркотических средств, приобретение, хранение и сбыт');

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
(251, '188.243.216.242'),
(252, '188.243.216.242'),
(253, '188.243.216.242'),
(254, '188.243.216.242'),
(255, '188.243.216.242'),
(256, '188.243.216.242'),
(257, '188.243.216.242'),
(258, '188.243.216.242'),
(259, '188.243.216.242'),
(260, '188.243.216.242'),
(261, '188.243.216.242'),
(262, '188.243.216.242'),
(263, '188.243.216.242'),
(264, '188.243.216.242'),
(265, '188.243.216.242'),
(266, '188.243.216.242'),
(267, '188.243.216.242'),
(268, '188.243.216.242'),
(269, '188.243.216.242'),
(270, '188.243.216.242');

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
(95, 'Осейкин Даниил Сергеевич', '5', 'b6,3w6,2j3,6d1,4g2,3w9,9', '4014 464846'),
(96, 'Савин Денис Алексеевич', '1', 'd4,8a2,1s6,5b2,4u5,2g1,7', '4014 458932'),
(97, 'Галигин Сергей Сергеевич', '3', 't3,9e1,6m9,3m6,1b2,8q1,9', '4014 532178');

-- --------------------------------------------------------

--
-- Структура таблицы `logging`
--

CREATE TABLE `logging` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `logging`
--

INSERT INTO `logging` (`id`, `info`) VALUES
(24, 'Задержан: Савин Денис Алексеевич'),
(25, 'На сайт зашёл:<b> admin</b>'),
(26, 'На сайт зашёл:<b> sawin_denis</b>'),
(27, 'На сайт зашёл:<b> admin</b>'),
(28, 'Задержан: Иванов Иван Иванович'),
(29, 'Задержан: Савин Денис Алексеевич'),
(30, 'Задержан: Осейкин Даниил Сергеевич'),
(31, 'На сайт зашёл:<b> sawin_denis</b>'),
(32, 'На сайт зашёл:<b> ilya_sawin</b>'),
(33, 'Задержан: Савин Денис Алексеевич'),
(34, 'Задержан: Савин Денис Алексеевич'),
(35, 'На сайт зашёл:<b> sawin_denis</b>'),
(36, 'На сайт зашёл:<b> admin</b>'),
(37, 'Задержан: вапувп'),
(38, 'На сайт зашёл:<b> sawin_denis</b>'),
(41, 'Задержан: Савин Денис Алексеевич'),
(42, 'На сайт зашёл:<b> admin</b>'),
(43, 'На сайт зашёл:<b> sawin_denis</b>'),
(44, 'На сайт зашёл:<b> admin</b>'),
(45, 'На сайт зашёл:<b> admin</b>'),
(46, 'Задержан: апрапр'),
(47, 'Задержан: вапвап'),
(48, 'Задержан: кеукеуе'),
(49, 'На сайт зашёл:<b> sawin_denis</b>'),
(50, 'Алексеевич Денис Савин добавил анкету'),
(51, 'Задержан: Осейкин Даниил Сергеевич'),
(52, 'Задержан: Савин Денис Алексеевич'),
(53, 'Задержан: Галигин Сергей Сергеевич'),
(54, 'На сайт зашёл:<b> admin</b>');

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
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Админов', 'Админ', 'Админский', 'Сестрорцк', 'майор', '+7(777)-777-77-77', '10 лет', 'Приморский', 'true'),
(27, 'sawin_denis', '25d55ad283aa400af464c76d713c07ad', 'Савин', 'Денис', 'Алексеевич', 'Сестрорецк, Гагаринская 78', 'Капитан', '+7(921)-871-09-65', '3', 'Разлив', 'true');

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
-- Индексы таблицы `logging`
--
ALTER TABLE `logging`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT для таблицы `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT для таблицы `logging`
--
ALTER TABLE `logging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

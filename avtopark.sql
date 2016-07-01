-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2016 г., 16:23
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

<<<<<<< HEAD

=======
>>>>>>> f2aebf88fe9e371adb4fa0ad518de0576a25cfb6
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `avtopark`
--

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `ID_B` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `name`, `number`, `ID_B`) VALUES
(1, 'BMW', 'AA7865BC', 1),
(2, 'AUDI', 'AA9809CB', 2),
(3, 'OPEL', 'CB0007MC', 3),
(4, 'VW', 'AI8745AA', 4),
(5, 'BMW', 'AA0976BC', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `ID_D` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`id`, `names`, `s_name`, `ID_D`) VALUES
(1, 'Ivan', 'Ivanov', 1),
(2, 'Petro', 'Petrov', 2),
(3, 'Nicolay', 'Nicolaev', 3),
(4, 'Sergey', 'sergeev', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `rospis`
--

CREATE TABLE IF NOT EXISTS `rospis` (
  `id` int(11) NOT NULL,
  `почав` datetime NOT NULL,
  `закінчив` datetime NOT NULL,
  `ID_C` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rospis`
--

INSERT INTO `rospis` (`id`, `почав`, `закінчив`, `ID_C`) VALUES
(1, '2016-06-01 09:00:00', '2016-06-01 18:00:00', 1),
(2, '2016-06-02 08:00:00', '2016-06-02 18:00:00', 2),
(3, '2016-06-03 09:00:00', '2016-06-03 17:00:00', 3),
(4, '2016-06-01 09:00:00', '2016-06-01 18:00:09', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rospis`
--
ALTER TABLE `rospis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `rospis`
--
ALTER TABLE `rospis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

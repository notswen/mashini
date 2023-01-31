-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2023 г., 17:46
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `id` int NOT NULL,
  `model_id` int NOT NULL,
  `type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `model_id`, `type_id`) VALUES
(1, 2, 2),
(2, 1, 1),
(3, 4, 1),
(4, 3, 3),
(5, 3, 3),
(6, 5, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `auto_mark`
--

CREATE TABLE `auto_mark` (
  `id` int NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `auto_mark`
--

INSERT INTO `auto_mark` (`id`, `name`) VALUES
(1, 'toyota'),
(2, 'volkswagen'),
(3, 'lexus'),
(4, 'bugatti');

-- --------------------------------------------------------

--
-- Структура таблицы `auto_model`
--

CREATE TABLE `auto_model` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `mark_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `auto_model`
--

INSERT INTO `auto_model` (`id`, `name`, `mark_id`) VALUES
(1, 'chiron', 4),
(2, 'touareg', 2),
(3, 'yaris', 1),
(4, 'is300', 3),
(5, 'golf', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `auto_type`
--

CREATE TABLE `auto_type` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `auto_type`
--

INSERT INTO `auto_type` (`id`, `name`) VALUES
(1, 'sedan'),
(2, 'jip'),
(3, 'hatchback');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_auto_model_id_fk` (`model_id`),
  ADD KEY `auto_auto_type_id_fk` (`type_id`);

--
-- Индексы таблицы `auto_mark`
--
ALTER TABLE `auto_mark`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auto_model`
--
ALTER TABLE `auto_model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_model_auto_mark_id_fk` (`mark_id`);

--
-- Индексы таблицы `auto_type`
--
ALTER TABLE `auto_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `auto_mark`
--
ALTER TABLE `auto_mark`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `auto_model`
--
ALTER TABLE `auto_model`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `auto_type`
--
ALTER TABLE `auto_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_auto_model_id_fk` FOREIGN KEY (`model_id`) REFERENCES `auto_model` (`id`),
  ADD CONSTRAINT `auto_auto_type_id_fk` FOREIGN KEY (`type_id`) REFERENCES `auto_type` (`id`);

--
-- Ограничения внешнего ключа таблицы `auto_model`
--
ALTER TABLE `auto_model`
  ADD CONSTRAINT `auto_model_auto_mark_id_fk` FOREIGN KEY (`mark_id`) REFERENCES `auto_mark` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

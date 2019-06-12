-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 12 2019 г., 22:43
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Сашко'),
(2, 'Петруха'),
(3, 'Alex'),
(4, 'Loh'),
(5, 'empty'),
(6, 'ваываваы'),
(7, 'Кролик');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `author_id`) VALUES
(1, 'vbnfgbt', 'cvbcv', 1),
(2, 'Обезьяна', 'Убица', 7),
(4, 'Российский студент пожаловался на избиение на рэп-фестивале', 'Студент Высшей школы экономики Максим Сидоренко обратился в Следственный комитет с просьбой возбудить уголовное дело в отношении полицейского, который избил его дубинкой во время фестиваля Hip-Hop Mayday в Москве. Об этом сообщил телеканал «Дождь» со ссылкой на адвоката потерпевшего Дмитрия Джулая.\r\n\r\nПо словам Сидоренко, инцидент произошел вечером 1 мая во время концерта в спорткомплексе «Лужники». Сотрудник полиции неожиданно подбежал к молодому человеку со спины, схватил за капюшон и начал избивать резиновой дубинкой. Пострадавший утверждает, что не оказывал сопротивления и не нарушал закон. «Я лежал на земле и просил полицейского меня не избивать, спрашивал, за что он меня бьет», — сказал Сидоренко.', 2),
(5, '1', '1. Повторите код, изученный на уроке. Выделите ту часть, которая управляет установкой и чтением произвольных свойств объекта в трейт. Не забудьте добавить реализацию метода __isset(). 2. Добавьте к своим данным еще одну таблицу - авторы новостей (authors). В таблице новостей, соответственно, добавите поле author_id. Модифицируйте модель новостей следующим образом: 	1. Если запрашивается поле ->author, то сначала проверяем поле ->author_id 	2. Если оно не пусто - делаем запрос к таблице authors и возвращаем результат в виде объекта класса Author 	3. Не забудьте снабдить модели соответствующим PHPDoc. 4. Измените шаблоны своего приложения, добавьте везде вывод авторов новостей  * Изучите интерфейсы Countable и Iterator и реализуйте его в своем приложении в классе View * Необязательное задание', 2),
(6, 'asfsdfasafd', 'adsfadfsafd', 3),
(7, '21', '32233232', 3),
(8, '23331', 'sasdads', 3),
(9, 'fffffffffffffff', 'ggggggggggggg', 4),
(13, '1', '12', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `authors_id_uindex` (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

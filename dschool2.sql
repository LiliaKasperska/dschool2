-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 30 2023 р., 13:21
-- Версія сервера: 10.4.21-MariaDB
-- Версія PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `dschool2`
--
CREATE DATABASE IF NOT EXISTS `dschool2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dschool2`;

-- --------------------------------------------------------

--
-- Структура таблиці `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `documents`
--

INSERT INTO `documents` (`id`, `name`, `file`, `type_id`) VALUES
(6, 'Виписка з ЄДР', 'adm_file/Виписка з ЄДР (3).jpg', 1),
(7, 'Ліцензія', 'adm_file/Л І Ц Е Н З І Я.pdf', 1),
(8, 'Правила прийому до закладу', 'adm_file/Правила прийому до закладу.docx', 1),
(9, 'Статут НВК', 'adm_file/Статут НВК.pdf', 1),
(10, 'Структура навчального року', 'adm_file/Структура 2019-2020 навчального року.docx', 1),
(12, 'Атестація закладу', 'adm_file/Свідоцтво про реєстрацію.jpg', 2),
(13, 'Освітні програми', 'adm_file/Oсвітня програма.doc', 2),
(14, 'Державні кошти', 'adm_file/Кошторис на 2020 рік.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `main`
--

CREATE TABLE `main` (
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `adress` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `main`
--

INSERT INTO `main` (`email`, `phone`, `adress`) VALUES
('Hayi_Roztotsky@ukr.net', '+8(03540)34547', '47232 Україна, Тернопільська обл, Тернопільський р-н, с.Гаї-Розтоцькі, Шевченка, 17');

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `s_text` varchar(1000) NOT NULL,
  `fotos` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `s_text`, `fotos`) VALUES
(20, 'І плакала свіча в турботі', 'Ти кажеш не було Голодомору?\r\nІ не було голодного села?\r\nА бачив ти в селі пусту комору,\r\nЗ якої зерна вимели до тла?...\r\nЯ бачив сам оту зловісну пору\r\nІ пухлих, і померлих на шляхах.\r\nІ досі ще стоять мені в очах…\r\nА кажеш – не було Голодомору?\r\n\r\n   Роковини Голодомору… Чорна сторінка, де кожен рядок сповнений болю, сліз, нелюдських страждань та поневірянь…масштабна помста кривавого, людоненависницького режиму за прагнення українців бути вільними у власній державі…  \r\n\r\n   25 листопада учні 8-11-их класів  провели лінійку - реквієм  Свіча памяті . Школярі з розповіді своїх однокласників дізналися про причини і наслідки цієї трагедії , хвилиною мовчання вшанували всіх людей , невинно знищених голодом , запалили свічки памяті.\r\nНе маємо права забути... ', 'Ти кажеш не було Голодомору?\r\nІ не було голодного села?\r\nА бачив ти в селі пусту комору,\r\nЗ якої зерна вимели до тла?...\r\nЯ бачив сам оту зловісну пору\r\nІ пухлих, і померли?...', 'adm_img/index.jpg*');

-- --------------------------------------------------------

--
-- Структура таблиці `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `people`
--

INSERT INTO `people` (`id`, `name`, `position`, `foto`) VALUES
(2, 'Патриляк Казимир Іванович', 'доктор хімічних наук, професор, член Академії хімічних наук. ', 'adm_img/1.jpg'),
(3, 'Покиданець Михайло Григорович', 'народний умілець України, майстер вишивки.', 'adm_img/2.jpg'),
(4, 'Федишин Богдан Петрович', 'кандидат економічних наук, викладач Тернопільського технічного університету ім. І.Пулюя.', 'adm_img/3.jpg'),
(5, 'Хоміцький Богдан Володимирович', 'старший викладач Тернопільського технічного університету ім. І.Пулюя.', 'adm_img/4.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `question`
--

INSERT INTO `question` (`id`, `name`, `type_id`, `phone`, `message`, `date`) VALUES
(6, 'Іван', 1, '0956485295', 'qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty', '2023-05-26 22:01:00'),
(7, 'Ірина', 1, '+380659845236', ' qwerty qwerty qwerty qwerty qwerty', '2023-05-26 22:10:18'),
(8, 'wertyj', 2, 'erztyjgj,hk', 'sreztgj,', '2023-05-26 22:11:08');

-- --------------------------------------------------------

--
-- Структура таблиці `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `position`, `foto`) VALUES
(3, 'Бенцал Ігор Григорович', 'Директор школи, Вчитель інформатики', 'adm_img/директор.webp'),
(4, 'Демчук Любов Андріївна', 'Заступник директора з навчально-виховної роботи, Вчитель англійської мови', 'adm_img/заступник1.webp'),
(5, 'Кріль Надія Іванівна', 'Психолог', 'adm_img/психолог.webp'),
(6, 'Лисий Ігор Ярославович', 'Вчитель по Захисту Вітчизни', 'adm_img/зв.webp');

-- --------------------------------------------------------

--
-- Структура таблиці `type_doc`
--

CREATE TABLE `type_doc` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `type_doc`
--

INSERT INTO `type_doc` (`id`, `type`) VALUES
(1, 'документи'),
(2, 'інформація'),
(3, 'публічні кошти');

-- --------------------------------------------------------

--
-- Структура таблиці `type_q`
--

CREATE TABLE `type_q` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `type_q`
--

INSERT INTO `type_q` (`id`, `type`) VALUES
(1, 'Дошкільна освіта'),
(2, 'Дистанційне навчання');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `type_doc`
--
ALTER TABLE `type_doc`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `type_q`
--
ALTER TABLE `type_q`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблиці `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `type_doc`
--
ALTER TABLE `type_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `type_q`
--
ALTER TABLE `type_q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

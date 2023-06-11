-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2023 г., 18:10
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `meduza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `quantit_cart` int(10) NOT NULL,
  `total_price_cart` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(10) NOT NULL,
  `id_cart` int(10) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int(10) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `id_type_product` int(10) NOT NULL,
  `image_product` varchar(500) DEFAULT NULL,
  `color_product` varchar(200) DEFAULT NULL,
  `price_product` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `id_type_product`, `image_product`, `color_product`, `price_product`) VALUES
(1, 'Семейный билет (2+1)', 1, NULL, NULL, 1900),
(2, 'Семейный билет (2+2)', 1, NULL, NULL, 2300),
(3, 'Детские билеты', 1, NULL, NULL, 500),
(4, 'Взрослые билеты', 1, NULL, NULL, 900),
(5, 'Футболка (взрослая)', 2, 'img/футболки_взрослые.png', 'серый', 1500),
(6, 'Свитер (взрослый)', 2, 'img/свитер.png', 'мульти', 2500),
(7, 'Кепка (взрослая)', 2, 'img/кепки.png', 'мульти', 1000),
(8, 'Носки (взрослые)', 2, 'img/носки.png', 'мульти', 500),
(9, 'Футболка (детская)', 2, 'img/футболки_детские.png', 'серый', 1500),
(10, 'Кепка (детская)', 2, 'img/кепка товар.png', 'коричневый', 1000),
(11, 'Ламантин', 3, 'img/товар_ламантин.png', 'светло-серый', 1000),
(12, 'Обыкновенный ламантин', 3, 'img/обыкновенный_ламантин.png', 'светло-серый', 1000),
(13, 'Касатка', 3, 'img/касатка.png', 'серо-белый', 1500),
(14, 'Леопардовый скат', 3, 'img/леопардовый_скат.png', 'чёрно-белый', 1000),
(15, 'Дельфин', 3, 'img/дельфин.png', 'светло-серый', 1000),
(16, 'Черепаха', 3, 'img/черепаха.png', 'зелёный, коричневый', 800);

-- --------------------------------------------------------

--
-- Структура таблицы `type_product`
--

CREATE TABLE `type_product` (
  `id_type_product` int(10) NOT NULL,
  `name_type_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `type_product`
--

INSERT INTO `type_product` (`id_type_product`, `name_type_product`) VALUES
(1, 'Билеты'),
(2, 'Одежда'),
(3, 'Игрушки');

-- --------------------------------------------------------

--
-- Структура таблицы `users_meduza`
--

CREATE TABLE `users_meduza` (
  `id_user` int(10) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `surname_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `password_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users_meduza`
--

INSERT INTO `users_meduza` (`id_user`, `name_user`, `surname_user`, `email_user`, `password_user`) VALUES
(1, 'Иван', 'Иванов', 'email@gmail.com', '1e6680f0b09d203e7a995343286ea0a1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type_product` (`id_type_product`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Индексы таблицы `users_meduza`
--
ALTER TABLE `users_meduza`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users_meduza`
--
ALTER TABLE `users_meduza`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users_meduza` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type_product`) REFERENCES `type_product` (`id_type_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

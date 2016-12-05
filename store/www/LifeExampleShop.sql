-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Версия сервера: 5.1.40
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `LifeExampleShop`
--
CREATE DATABASE `LifeExampleShop` DEFAULT CHARACTER SET cp1251 COLLATE cp1251_general_ci;
USE `LifeExampleShop`;
-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` int(11) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `summ` int NOT NULL,
  `order_content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `date`, `name`, `email`, `phone`, `adres`, `summ`, `order_content`) VALUES
(79, 1333384995, 'Марк', 'mark-avdeev@mail.ru', '89030943044', 'ул. Зейская 201 кв 21', '1097', 'a:2:{i:3;a:2:{s:5:\\"price\\";s:3:\\"299\\";s:5:\\"count\\";i:2;}i:4;a:2:{s:5:\\"price\\";s:3:\\"499\\";s:5:\\"count\\";i:1;}}');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=72 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `price`, `url`, `image_url`, `code`) VALUES
(58, 'Мышь', 'тру мышь', '500', 'myish', '1.jpg', 'm1'),
(59, 'Клавиатура', 'Клавиатура', '679', 'klaviatura', '3.jpg', 'k-1'),
(60, 'Колонки', 'Колонкии', '800', 'kolonki', '4.jpg', 'kol-1'),
(61, 'Модем', 'Wi-fi модем', '1200', 'modem', '6.jpg', 'modem-1'),
(63, 'системный блок', 'компьбтер', '22300', 'sistemnyiy_blok', '5.jpg', 's1'),
(64, 'Монитор', 'Монитор', '9900', 'monitor', '2.jpg', 'mon1'),
(68, 'wer', 'dsf', '3', 'wer', '', 'wq12'),
(69, 'qwe', 'werqwer', '123', 'qwe', '', '123'),
(71, 'Тестовый товар', 'Описание для тестового товара', '160', 'testovyiy_tovar', 'page-about-icon.png', 'T1');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `role`) VALUES
(1, 'admin', '1', 1),
(2, 'mark', '123456', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

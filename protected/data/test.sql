-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` bigint(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `seller_name` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `allow_mails` tinyint(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location_id` varchar(40) NOT NULL,
  `category_id` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `ads` (`id`, `date`, `title`, `price`, `seller_name`, `type`, `email`, `allow_mails`, `phone`, `location_id`, `category_id`, `description`) VALUES
(1,	1430641878000,	'Продаю суперкар',	2344,	'Сергей',	'private',	'sbl18@yandex.ru',	1,	'89104301813',	'Искитим',	'Новые автомобили',	'Продаю суперский суперкар'),
(10,	1430641888000,	'Продаю пылесос',	3500,	'Пупкин и сыновья',	'corporate',	'123@mail.ru',	1,	'8-499-123-45',	'Колывань',	'Бытовая техника',	'Продается офигенный пылесос. Есть разные цвета.'),
(11,	1430641902000,	'Ищу объектив',	5001,	'Елена',	'private',	'lena@ya.ru',	1,	'89101234567',	'Барабинск',	'Фототехника',	'Нужен объектив 24-70 для Canon'),
(12,	1430641916000,	'Продаются котята',	25000,	'Вячеслав',	'private',	'slava34@mail.ru',	0,	'8-499-123-45',	'Мошково',	'Кошки',	'Продаются котята мейн-куна.'),
(13,	1430641926000,	'Возьмем склад в аренду',	1200,	'ООО \"Взлет\"',	'corporate',	'info@ooovzlet.ru',	1,	'8-928-765-43',	'Бердск',	'Коммерческая недвижимость',	'Нужен в аренду теплый склад от 1000 кв. м.'),
(14,	1430641937000,	'Продается мед',	500,	'Ирина Алексеевна',	'private',	'ira@mail.ru',	1,	'89101234567',	'Обь',	'Продукты питания',	'Продается свежий мед с лесной пасеки'),
(15,	1430641943000,	'Продаю катер',	150000,	'Андрей',	'private',	'123@mail.ru',	1,	'156-12-48',	'Бердск',	'Водный транспорт',	'Продается катер для рыбалки.'),
(16,	1430641949000,	'Нужны картографисты',	60000,	'ЗАО \"Атлас\"',	'corporate',	'atlas@ya.ru',	1,	'963-48-12',	'Краснообск',	'Вакансии (поиск сотрудников)',	'Организация приглашает на работу картографистов. Оплата высокая.'),
(17,	1430641954000,	'Продаю видеокарту',	6700,	'Галина Петровна',	'private',	'gala123@mail.ru',	1,	'8-975-654-85',	'Мошково',	'Товары для компьютера',	'Продается игровая видеокарта.');

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `categorys` (`id`, `category`, `parent_id`) VALUES
(109,	'Автомобили с пробегом',	100),
(199,	'Новые автомобили',	100),
(114,	'Мотоциклы и мототехника',	100),
(181,	'Грузовики и спецтехника',	100),
(111,	'Водный транспорт',	100),
(110,	'Запчасти и аксессуары',	100),
(224,	'Квартиры',	200),
(223,	'Комнаты',	200),
(225,	'Дома, дачи, коттеджи',	200),
(226,	'Земельные участки',	200),
(285,	'Гаражи и машиноместа',	200),
(242,	'Коммерческая недвижимость',	200),
(286,	'Недвижимость за рубежом',	200),
(311,	'Вакансии (поиск сотрудников)',	300),
(312,	'Резюме (поиск работы)',	300),
(414,	'Предложения услуг',	400),
(415,	'Запросы на услуги',	400),
(527,	'Одежда, обувь, аксессуары',	500),
(529,	'Детская одежда и обувь',	500),
(530,	'Товары для детей и игрушки',	500),
(528,	'Часы и украшения',	500),
(588,	'Красота и здоровье',	500),
(621,	'Бытовая техника',	600),
(620,	'Мебель и интерьер',	600),
(687,	'Посуда и товары для кухни',	600),
(682,	'Продукты питания',	600),
(619,	'Ремонт и строительство',	600),
(606,	'Растения',	600),
(732,	'Аудио и видео',	700),
(797,	'Игры, приставки и программы',	700),
(731,	'Настольные компьютеры',	700),
(798,	'Ноутбуки',	700),
(799,	'Оргтехника и расходники',	700),
(796,	'Планшеты и электронные книги',	700),
(784,	'Телефоны',	700),
(701,	'Товары для компьютера',	700),
(705,	'Фототехника',	700),
(833,	'Билеты и путешествия',	800),
(834,	'Велосипеды',	800),
(883,	'Книги и журналы',	800),
(836,	'Коллекционирование',	800),
(838,	'Музыкальные инструменты',	800),
(802,	'Охота и рыбалка',	800),
(839,	'Спорт и отдых',	800),
(803,	'Знакомства',	800),
(989,	'Собаки',	900),
(990,	'Кошки',	900),
(991,	'Птицы',	900),
(992,	'Аквариум',	900),
(993,	'Другие животные',	900),
(994,	'Товары для животных',	900),
(1016,	'Готовый бизнес',	1000),
(1040,	'Оборудование для бизнеса',	1000),
(100,	'Транспорт',	NULL),
(200,	'Недвижимость',	NULL),
(300,	'Работа',	NULL),
(400,	'Услуги',	NULL),
(500,	'Личные вещи',	NULL),
(600,	'Для дома и дачи',	NULL),
(700,	'Бытовая электроника',	NULL),
(800,	'Хобби и отдых',	NULL),
(900,	'Животные',	NULL),
(1000,	'Для бизнеса',	NULL);

DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `locations` (`id`, `location`) VALUES
(641780,	'Новосибирск'),
(641490,	'Барабинск'),
(641510,	'Бердск'),
(641600,	'Искитим'),
(641630,	'Колывань'),
(641680,	'Краснообск'),
(641710,	'Куйбышев'),
(641760,	'Мошково'),
(641790,	'Обь'),
(641800,	'Ордынское'),
(641970,	'Черепаново');

-- 2015-05-10 10:25:21

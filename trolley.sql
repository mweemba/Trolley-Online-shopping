-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 11:18 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trolley`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `Cart_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `number_of_items` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Cart_id`, `Product_id`, `userid`, `number_of_items`, `product_price`) VALUES
(68, 578888, 699463, 0, 1, 20),
(69, 578888, 751617, 0, 1, 20),
(70, 578888, 699463, 0, 1, 20),
(71, 578888, 699463, 0, 1, 20),
(72, 578888, 699463, 0, 1, 20),
(73, 578888, 751617, 0, 1, 20),
(74, 578888, 751617, 0, 1, 20),
(75, 578888, 699463, 0, 1, 20),
(76, 578888, 699463, 0, 1, 20),
(77, 578888, 699463, 0, 1, 20),
(78, 578888, 751617, 0, 1, 20),
(79, 578888, 699463, 0, 1, 20),
(80, 578888, 699463, 0, 1, 20),
(81, 578888, 699463, 0, 1, 20),
(82, 578888, 699463, 0, 1, 20),
(83, 578888, 699463, 0, 1, 20),
(84, 578888, 699463, 0, 1, 20),
(85, 578888, 751617, 0, 1, 20),
(86, 578888, 699463, 0, 1, 20),
(87, 578888, 699463, 0, 1, 20),
(88, 578888, 699463, 0, 1, 20),
(89, 578888, 699463, 0, 1, 20),
(90, 578888, 699463, 0, 1, 20),
(91, 578888, 699463, 0, 1, 20),
(92, 620849, 699463, 0, 1, 20),
(93, 620849, 751617, 0, 1, 20),
(94, 620849, 751617, 0, 1, 20),
(95, 620849, 751617, 0, 1, 20),
(96, 620849, 751617, 0, 1, 20),
(97, 620849, 699463, 0, 1, 20),
(98, 620849, 699463, 0, 1, 20),
(99, 620849, 699463, 0, 1, 20),
(100, 620849, 699463, 0, 1, 20),
(101, 620849, 699463, 0, 1, 20),
(102, 620849, 699463, 0, 1, 20),
(103, 620849, 699463, 0, 1, 20),
(104, 620849, 699463, 0, 1, 20),
(105, 620849, 699463, 0, 1, 20),
(106, 620849, 699463, 0, 1, 20),
(107, 620849, 699463, 0, 1, 20),
(108, 620849, 699463, 0, 1, 20),
(109, 620849, 699463, 0, 1, 20),
(110, 620849, 751617, 0, 1, 20),
(111, 620849, 751617, 0, 1, 20),
(112, 620849, 751617, 0, 1, 20),
(113, 620849, 699463, 0, 1, 20),
(114, 620849, 751617, 0, 1, 20),
(115, 620849, 751617, 0, 1, 20),
(116, 543060, 699463, 0, 1, 20),
(117, 543060, 699463, 0, 1, 20),
(118, 543060, 699463, 0, 1, 20),
(119, 543060, 699463, 0, 1, 20),
(120, 543060, 699463, 0, 1, 20),
(121, 543060, 699463, 0, 1, 20),
(122, 543060, 751617, 0, 1, 20),
(123, 543060, 751617, 0, 1, 20),
(124, 543060, 699463, 0, 1, 20),
(125, 543060, 699463, 0, 1, 20),
(126, 543060, 699463, 0, 1, 20),
(127, 543060, 699463, 0, 1, 20),
(128, 543060, 699463, 0, 1, 20),
(129, 543060, 751617, 0, 1, 20),
(130, 543060, 751617, 0, 1, 20),
(131, 543060, 751617, 0, 1, 20),
(132, 543060, 699463, 0, 1, 20),
(133, 543060, 699463, 0, 1, 20),
(134, 543060, 751617, 0, 1, 20),
(135, 543060, 751617, 0, 1, 20),
(136, 543060, 699463, 0, 1, 20),
(137, 543060, 699463, 0, 1, 20),
(138, 543060, 699463, 0, 1, 20),
(139, 543060, 699463, 0, 1, 20),
(140, 543060, 699463, 0, 1, 20),
(141, 543060, 699463, 0, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263),
(240, 'RS', 'SERBIA', 'Serbia', 'SRB', 688, 381),
(241, 'AP', 'ASIA PACIFIC REGION', 'Asia / Pacific Region', '0', 0, 0),
(242, 'ME', 'MONTENEGRO', 'Montenegro', 'MNE', 499, 382),
(243, 'AX', 'ALAND ISLANDS', 'Aland Islands', 'ALA', 248, 358),
(244, 'BQ', 'BONAIRE, SINT EUSTATIUS AND SABA', 'Bonaire, Sint Eustatius and Saba', 'BES', 535, 599),
(245, 'CW', 'CURACAO', 'Curacao', 'CUW', 531, 599),
(246, 'GG', 'GUERNSEY', 'Guernsey', 'GGY', 831, 44),
(247, 'IM', 'ISLE OF MAN', 'Isle of Man', 'IMN', 833, 44),
(248, 'JE', 'JERSEY', 'Jersey', 'JEY', 832, 44),
(249, 'XK', 'KOSOVO', 'Kosovo', '---', 0, 381),
(250, 'BL', 'SAINT BARTHELEMY', 'Saint Barthelemy', 'BLM', 652, 590),
(251, 'MF', 'SAINT MARTIN', 'Saint Martin', 'MAF', 663, 590),
(252, 'SX', 'SINT MAARTEN', 'Sint Maarten', 'SXM', 534, 1),
(253, 'SS', 'SOUTH SUDAN', 'South Sudan', 'SSD', 728, 211);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cif_id` varchar(25) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(18) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city_town` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `genda` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cif_id`, `first_name`, `last_name`, `date_of_birth`, `email`, `mobile_number`, `address1`, `address2`, `city_town`, `province`, `genda`, `country`, `date_joined`, `rating`) VALUES
('TR25685', 'Mweemba', 'Hachita', '1983-12-12', 'mw33mba@gmail.com', '+260977519229', 'plot 16514/1080 ', 'Kamwala south', 'Lusaka', 'Lusaka', 'Male', 'Zambia', '2018-02-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(30) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(36) NOT NULL,
  `price` double NOT NULL,
  `country` varchar(50) NOT NULL,
  `store` varchar(35) NOT NULL,
  `dimentions` varchar(36) NOT NULL,
  `branch_id` varchar(25) NOT NULL,
  `exoiry_date` date NOT NULL,
  `features` varchar(100) NOT NULL,
  `manufacturer` varchar(25) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `date_of_realese` date NOT NULL,
  `City` varchar(25) NOT NULL,
  `picture_id` int(100) NOT NULL,
  `Review_Id` int(100) NOT NULL,
  `thumb_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `brand`, `product_name`, `category`, `price`, `country`, `store`, `dimentions`, `branch_id`, `exoiry_date`, `features`, `manufacturer`, `weight`, `date_of_realese`, `City`, `picture_id`, `Review_Id`, `thumb_pic`) VALUES
(699463, 'Trade Kings', 'Boom Paste', 'House Hold glocery', 20, 'ZAMBIA ', '', '2x2 ', 'Delaware', '2018-04-01', 'boom past special..bla bla bla', 'Trade Kings', '500g', '2018-01-01', 'Tennessee', 493195, 244324, 'images/products/boom1.jpg'),
(751617, 'Trade Kings', 'Boom Powder', '', 20, ' ', '1', '2x2 ', 'Delaware', '2018-04-01', 'boom past special..bla bla bla', 'Trade Kings', '500g', '2018-01-01', 'California', 599914, 861175, 'images/products/boom2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_category_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_category_id`, `Name`) VALUES
(1, 'House Hold glocery'),
(2, 'CLOTHES and Shoes '),
(3, '3FOOD AND BEVERAGES  '),
(4, 'HEALTH & BEAUTY'),
(5, 'SPORTS & LEISURE'),
(7, 'BOOKS & ENTERTAINMENTS');

-- --------------------------------------------------------

--
-- Table structure for table `product_pictures`
--

CREATE TABLE `product_pictures` (
  `picture_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
  `pic6` text NOT NULL,
  `pic7` text NOT NULL,
  `pic8` text NOT NULL,
  `pic9` text NOT NULL,
  `pic10` text NOT NULL,
  `pic11` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_pictures`
--

INSERT INTO `product_pictures` (`picture_id`, `product_id`, `thumbnail`, `pic1`, `pic2`, `pic3`, `pic4`, `pic6`, `pic7`, `pic8`, `pic9`, `pic10`, `pic11`) VALUES
(493195, 699463, 'images/products/boom1', 'images/products/boom2', 'images/products/boom3', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(25) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `name`, `location`, `contact_number`, `rating`, `contact_person`, `address`, `category`) VALUES
(1, 'Shoprite', 'Zambia', '+2601545855', 1, 'mr so and so', 'lusaka main cairo', 'Glocery_store');

-- --------------------------------------------------------

--
-- Table structure for table `store_branches`
--

CREATE TABLE `store_branches` (
  `branch_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `contact_person` varchar(35) NOT NULL,
  `address` varchar(50) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `cif_id` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `active` int(1) NOT NULL,
  `activation_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `date_created`, `cif_id`, `email`, `active`, `activation_code`) VALUES
('eee', '$1$802.vP1.$9nv5a/idDOjdq7E9o7fY4.', 2, '2018-02-05', 'TR261261', 'eee', 0, '149170'),
('mweemba', '$1$uA1.fj0.$kyW2tjsDv4qbMvvmkVvGI.', 2, '2018-02-06', 'TR25685', 'mw33mba@gmail.com', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cif_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idx_users_cif_id` (`cif_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

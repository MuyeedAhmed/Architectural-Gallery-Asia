-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2015 at 06:11 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(255) NOT NULL DEFAULT 'Muyeed',
  `PASSWORD` varchar(255) NOT NULL DEFAULT '130636'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('Muyeed', '130636'),
('cse', '311');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE IF NOT EXISTS `airport` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `OPERATOR` varchar(255) DEFAULT NULL,
  `SEA_LEVEL` varchar(255) DEFAULT NULL,
  `ECONOMIC_IMPACT` varchar(255) DEFAULT NULL,
  `PASSENGER` int(11) NOT NULL,
  `WEBSITE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`STRUCTURE_ID`, `OPERATOR`, `SEA_LEVEL`, `ECONOMIC_IMPACT`, `PASSENGER`, `WEBSITE`) VALUES
(6, 'Tokyo International Air Terminal Corp.', '6', '18.5 billion', 72826862, 'www.tokyo-airport-bldg.co.jp'),
(7, 'Tokyo International Air Terminal Corp.', '6', '18.5 billion', 72826862, 'www.tokyo-airport-bldg.co.jp'),
(6, 'Tokyo International Air Terminal Corp.', '2', '18.5 million', 52826862, 'xvcxv'),
(7, 'Tokyo International Air Terminal Corp.', '6', '18.5 billion', 72826862, 'www.tokyo-airport-bldg.co.jp');

-- --------------------------------------------------------

--
-- Table structure for table `castle`
--

CREATE TABLE IF NOT EXISTS `castle` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `BUILD_BY` varchar(255) DEFAULT NULL,
  `MATERIAL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `castle`
--

INSERT INTO `castle` (`STRUCTURE_ID`, `OWNER`, `BUILD_BY`, `MATERIAL`) VALUES
(18, '', 'Toyotomi Hideyoshi', '');

-- --------------------------------------------------------

--
-- Table structure for table `establish`
--

CREATE TABLE IF NOT EXISTS `establish` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `MONTH` varchar(255) DEFAULT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `establish`
--

INSERT INTO `establish` (`STRUCTURE_ID`, `MONTH`, `YEAR`) VALUES
(7, NULL, 1931),
(15, NULL, 1632),
(14, NULL, 634),
(12, 'December', 2009),
(16, NULL, -700),
(10, NULL, 1150),
(4, 'April', 1968),
(17, 'September', 2007),
(2, NULL, 2014),
(18, '', 1583);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `MANAGEMENT` varchar(255) DEFAULT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `FLOOR` int(11) DEFAULT NULL,
  `FLOOR_AREA` int(11) NOT NULL,
  `ROOM_NUMBER` int(11) DEFAULT NULL,
  `SUIT_NUMBER` int(11) DEFAULT NULL,
  `RESTAURANT_NUMBER` int(11) DEFAULT NULL,
  `COST_PER_NIGHT` int(11) NOT NULL,
  `WEBSITE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`STRUCTURE_ID`, `STYLE`, `MANAGEMENT`, `OWNER`, `FLOOR`, `FLOOR_AREA`, `ROOM_NUMBER`, `SUIT_NUMBER`, `RESTAURANT_NUMBER`, `COST_PER_NIGHT`, `WEBSITE`) VALUES
(5, 'adasd', 'dadadad', 'adada', 12, 2313, 12, 123, 13, 1313, 'asdad');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`IMAGE_ID` int(11) NOT NULL,
  `COVER` varchar(2083) NOT NULL,
  `I1` varchar(2083) DEFAULT NULL,
  `I2` varchar(2083) DEFAULT NULL,
  `I3` varchar(2083) DEFAULT NULL,
  `I4` varchar(2083) DEFAULT NULL,
  `I5` varchar(2083) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`IMAGE_ID`, `COVER`, `I1`, `I2`, `I3`, `I4`, `I5`) VALUES
(4, 'https://upload.wikimedia.org/wikipedia/commons/8/87/Angkorwat(rear).JPG', 'http://www.vietnamdhtravel.com/wp-content/uploads/2014/04/Angkor-Wat-in-Siem-Reap.jpg', 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Buddhist_monks_in_front_of_the_Angkor_Wat.jpg', 'http://edenvacation.com/wp-content/uploads/Cambodia1.jpg', 'http://i.livescience.com/images/i/000/031/920/i02/shutterstock_110917883.jpg?1349813101', 'http://www.thehistoryhub.com/wp-content/uploads/2014/08/Angkor-Wat-Gods-Murti-Temple.jpg'),
(5, 'https://www.gravatar.com/avatar/95aa37a6f6c531947ccda5e8ba608c08?s=32&d=identicon&r=PG', '', '', '', '', ''),
(6, 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xft1/v/t34.0-12/11890951_1610769332526189_3907844935715026267_n.jpg?oh=1b3608c8be590776198acc6a5b69bb30&oe=55CD5DE0', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xfp1/v/t35.0-12/11890393_1610769249192864_6674217051465777364_o.jpg?oh=d08f44702c44a2b47e79a0ac0c3300f7&oe=55CD356F', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t34.0-12/11050667_1610769342526188_6905278006379653378_n.jpg?oh=f414c6acf193979029caa549be07bd1d&oe=55CE7162', 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xtp1/v/t35.0-12/11058404_1610769292526193_59586834509315342_o.jpg?oh=eee7b379b10baa9c6a79a2a3d1a7af92&oe=55CD3744&__gda__=1439577570_06624006da6db9862bb9b8652fd0c56d', 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/11891004_1610769055859550_2725370544153391531_n.jpg?oh=1a502d3462f362efc252ce4936be9009&oe=55CE6726&__gda__=1439585453_81a4afee60d5702b9a9d0b574f62a531', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t34.0-12/11050667_1610769342526188_6905278006379653378_n.jpg?oh=f414c6acf193979029caa549be07bd1d&oe=55CE7162'),
(8, 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/11828656_1610772722525850_2664803266761853462_n.jpg?oh=38b69dac93a434880158016fb1d531b4&oe=55CD5671&__gda__=1439578106_16534028cc40d1fd11dd14218876b864', 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xtf1/v/t35.0-12/11891457_1610772652525857_5262828105119446261_o.jpg?oh=00fd0401f958d3ae066beaf0d1796d62&oe=55CD2F92&__gda__=1439520292_076df86ad11381b75e5495578744507b', 'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xft1/v/t35.0-12/11879041_1610772775859178_8339858314677286141_o.jpg?oh=b0898292ee1167b341e93b3d44edcaf1&oe=55CE51B0&__gda__=1439521006_e3e4b4894c6701115d73dc11a19fe894', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t35.0-12/11891421_1610772672525855_3926248176324297456_o.jpg?oh=4432b7d5d2238e6b28615c4d4765a972&oe=55CE6C18', 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t35.0-12/11850568_1610774162525706_931202744778704518_o.jpg?oh=bcedf80a5dfcc9755dbac925a5c4e141&oe=55CD5C3D&__gda__=1439527490_f20cb4ea8ec35e8c929ab9f592213789', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xtp1/v/t35.0-12/11891412_1610774019192387_2221617567166867550_o.jpg?oh=0deaf919e9e12107e9a6f5583b497053&oe=55CE7FC1'),
(9, 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t34.0-12/11060864_1610771662525956_4019066683558999725_n.jpg?oh=deae4e51686924773ee6e36990a2e8fb&oe=55CD4CAD', 'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xtf1/v/t35.0-12/11834918_1610771602525962_3518802966955338111_o.jpg?oh=07e16c7949b23866fe29c3bf9b287f4c&oe=55CD5BD1&__gda__=1439525927_e13b1ca371e3e2467cdf5fad2f3fcfcf', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xft1/v/t34.0-12/11846580_1610771575859298_5179794307752810652_n.jpg?oh=1ea257b900d0ee5c35484cc8f708e6af&oe=55CE5998', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t35.0-12/11882252_1610771732525949_7175865162185516164_o.jpg?oh=656750f0ea17d2f45fc00f643a1a65eb&oe=55CD7018', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xtp1/v/t35.0-12/11700661_1610771705859285_2980584510631619931_o.jpg?oh=67fd0c45d90114e04db32b8a7eff66c7&oe=55CD4D32', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t35.0-12/11834725_1610771729192616_5590612977365449557_o.jpg?oh=f18feb8ed774f70a5a3b14ff183749ce&oe=55CD3F11'),
(10, 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t34.0-12/11836869_1610783145858141_438546671750221921_n.jpg?oh=1eea2ecc82548a29f3b4017f3ea8bf9a&oe=55CE5BC9', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xfa1/v/t35.0-12/11864981_1610783109191478_9075791381487159279_o.jpg?oh=905cc679bfaa768711da60abd6e0932d&oe=55CE5D87', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xtp1/v/t35.0-12/11845181_1610783052524817_5760566097300537790_o.jpg?oh=2517bd84f0730a038d353fabb57caf3f&oe=55CD454A', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpf1/v/t35.0-12/11894651_1610782899191499_5536849649883501170_o.jpg?oh=11da083dc12812de4e451c27a42610b2&oe=55CE2045', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpt1/v/t35.0-12/11235047_1610782879191501_1965290058093334879_o.jpg?oh=5dbaa1386e8a154bdf8c8d584426cd90&oe=55CE4B98', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xta1/v/t34.0-12/11217526_1610783062524816_8974097199022567210_n.jpg?oh=840762c79ebe9cf6fda357f6f36895ff&oe=55CD68B9'),
(11, 'http://www.haneda-airport.com/images/haneda-airport-tokyo-home1.jpg', 'http://jto.s3.amazonaws.com/wp-content/uploads/2013/02/nb20111111a3a.jpg', 'http://jto.s3.amazonaws.com/wp-content/uploads/2013/01/nb20110427a2a.jpg', 'http://www.ainonline.com/sites/default/files/uploads/anahaneda.jpg', 'https://upload.wikimedia.org/wikipedia/commons/2/20/Haneda_Airport_Terminal2_MarketPlace.jpg', 'http://www.haneda-airport.jp/inter/en/xml/resources/img_billboard_05.jpg'),
(12, 'http://www.tilt-rotor.com/2004/200403_JapnTrip/Shinjuku/20040321_KasumiBldg.JPG', 'http://www.emporis.com/images/show/231270-Large.jpg', 'http://benbansal.me/wp-content/uploads/2012/11/kasumigaseki4.jpg', 'http://www.emporis.com/images/show/250225-Large.jpg', 'http://www.emporis.com/images/show/250345-Large.jpg', 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Kasumigaseki-Building-01.jpg'),
(13, 'https://c2.staticflickr.com/8/7085/6896611382_556dbdba9a_b.jpg', 'https://beijingbirdsnest.files.wordpress.com/2010/09/birds_nest_stadium_beijing_china-hd.jpg', 'http://www.layoverguide.com/wp-content/uploads/2010/05/Beijing-National-Stadium-in-Beijing-China.jpg', 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Beijing_National_Stadium_Interior.jpg', 'http://cdn.homesthetics.net/wp-content/uploads/2013/10/The-Chinese-National-Stadium-in-Beijing-%E2%80%93-The-Bird%E2%80%99s-Nest-Stadium-homesthetics-7.jpg', 'http://www.bustler.net/images/uploads/lubetkin_hdm_beijing_stadium_02x.jpg'),
(14, 'http://www.arabianbusiness.com/incoming/article534573.ece/ALTERNATES/gallerySize/Hazza_Bin_Zayed_Stadium-4.jpg', NULL, NULL, NULL, NULL, NULL),
(15, ' https://scontent-sin1-1.xx.fbcdn.net/hphotos-xpt1/v/t34.0-12/11836789_1610789202524202_9126770354662083223_n.jpg?oh=7f95351c6c97dbc83fab59a2bb9f28ca&oe=55CE5E9B', 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xtp1/v/t35.0-12/11875064_1610789232524199_7962992086943981921_o.jpg?oh=f7ddad49a0ea9f566da3b8900d2cb0ba&oe=55CE3787&__gda__=1439524426_64e602b5278da474741b5d23c2f4dfec', 'https://scontent-sin1-1.xx.fbcdn.net/hphotos-xtp1/v/t35.0-12/11892349_1610789292524193_7245505518455948400_o.jpg?oh=f71b4c88fc29d23739d296cec6a990ba&oe=55CD5EFE', 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xtf1/v/t35.0-12/11875119_1610789055857550_5867124334710862017_o.jpg?oh=6ad4b17881dfe6f87ca2ca46a210889d&oe=55CD378A&__gda__=1439573820_c9a68bf83c791a10fcf59b6507a48fda', 'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpt1/v/t35.0-12/11892369_1610789175857538_5695282422410070909_o.jpg?oh=ec5285d854ad0912252335ed2f3e8c1b&oe=55CE63F0&__gda__=1439591899_2942fc91789de645d870f05942473817', 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xap1/v/t35.0-12/11222990_1610789205857535_8126059438093885784_o.jpg?oh=54c408be9b59c8c598e412d729179bca&oe=55CD336A&__gda__=1439588019_40f468823557fcbb3eeb70b5d804fd75');

-- --------------------------------------------------------

--
-- Table structure for table `islamic`
--

CREATE TABLE IF NOT EXISTS `islamic` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `HEIGHT` int(11) DEFAULT NULL,
  `FLOOR_AREA` varchar(255) DEFAULT NULL,
  `CAPACITY` int(11) NOT NULL,
  `LEADERSHIP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `islamic`
--

INSERT INTO `islamic` (`STRUCTURE_ID`, `STYLE`, `HEIGHT`, `FLOOR_AREA`, `CAPACITY`, `LEADERSHIP`) VALUES
(7, '', 89, '', 900000, 'Abdul Rahman Al-Sudais, Saud Al-Shuraim, Maher Al Mueaqly'),
(8, '', 89, '', 900000, 'Abdul Rahman Al-Sudais, Saud Al-Shuraim, Maher Al Mueaqly'),
(14, NULL, 89, NULL, 900000, 'Abdul Rahman Al-Sudais');

-- --------------------------------------------------------

--
-- Table structure for table `landmark`
--

CREATE TABLE IF NOT EXISTS `landmark` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `HEIGHT` int(11) DEFAULT NULL,
  `SIZE` varchar(255) DEFAULT NULL,
  `VISITOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landmark`
--

INSERT INTO `landmark` (`STRUCTURE_ID`, `HEIGHT`, `SIZE`, `VISITOR`) VALUES
(15, 0, '', 3000000),
(16, 0, '21,196 km ', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`LOCATION_ID` int(11) NOT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `COUNTRY` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LOCATION_ID`, `ADDRESS`, `CITY`, `COUNTRY`) VALUES
(2, 'Hamdan Bin Mohammad St.', 'Al Ain', 'United Arab Emirates'),
(3, '3-2-5 Kasumigaseki Chiyoda', 'Tokyo', 'Japan'),
(10, 'Ota', 'Tokyo', 'Japan'),
(11, 'TTT', 'TT', 'India'),
(13, 'Angkor', 'Siem Reap Province', 'Cambodia'),
(14, 'QQQQQQQQQQQQ', 'QQQQ', 'Sri Lanka'),
(15, '1 Sheikh Mohammed bin Rashid Boulevard', 'Dubai', 'United Arab Emirates'),
(17, '', 'Mecca', 'Saudi Arabia'),
(18, 'Agra', 'Uttar Pradesh', 'India'),
(19, '', 'China', 'China'),
(20, '', 'Beijing', 'China'),
(21, '', 'Osaka', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

CREATE TABLE IF NOT EXISTS `mall` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `DEVELOPER` varchar(255) DEFAULT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `STORE_NUMBER` varchar(255) DEFAULT NULL,
  `FLOOR_AREA` int(11) NOT NULL,
  `FLOOR` varchar(255) DEFAULT NULL,
  `WEBSITE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `museum`
--

CREATE TABLE IF NOT EXISTS `museum` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `VISITOR` int(11) NOT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `DIRECTOR` varchar(255) DEFAULT NULL,
  `WEBSITE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `palace`
--

CREATE TABLE IF NOT EXISTS `palace` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `OWNER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skyscraper`
--

CREATE TABLE IF NOT EXISTS `skyscraper` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `CONSTRUCTION_START` varchar(255) DEFAULT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `HEIGHT` int(11) NOT NULL,
  `COST` varchar(255) DEFAULT NULL,
  `FLOOR_AREA` varchar(255) DEFAULT NULL,
  `LIFT` int(11) DEFAULT NULL,
  `ENGINEER` varchar(255) DEFAULT NULL,
  `WEBSITE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skyscraper`
--

INSERT INTO `skyscraper` (`STRUCTURE_ID`, `STYLE`, `CONSTRUCTION_START`, `OWNER`, `HEIGHT`, `COST`, `FLOOR_AREA`, `LIFT`, `ENGINEER`, `WEBSITE`) VALUES
(4, '', '1965-03-01', 'Kasumi Kaikan Incorporated Association Mitsui Fudosan', 156, '', '153,234 m2 ', 12, '', ''),
(12, 'Neo-futurism', '01/06/2004', '', 828, 'USD $ 1.5 billion', '309,473 square meter', 57, 'Bill Baker', 'www.burjkhalifa.ae');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE IF NOT EXISTS `stadium` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `CAPACITY` int(11) NOT NULL,
  `OWNER` varchar(255) DEFAULT NULL,
  `OPERATOR` varchar(255) DEFAULT NULL,
  `COST` int(11) NOT NULL,
  `FIELD_SIZE` varchar(255) DEFAULT NULL,
  `SURFACE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`STRUCTURE_ID`, `CAPACITY`, `OWNER`, `OPERATOR`, `COST`, `FIELD_SIZE`, `SURFACE`) VALUES
(2, 25965, 'Al Ain FC', 'Al Ain FC', 168600000, '', 'Grass'),
(17, 91000, 'Government', 'ArupSportt', 423000000, '', 'Grass');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE IF NOT EXISTS `structure` (
`STRUCTURE_ID` int(11) NOT NULL,
  `STRUCTURE_NAME` varchar(255) NOT NULL,
  `CATEGORY` varchar(255) NOT NULL,
  `TYPE` varchar(255) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `ARCHITECT` varchar(255) DEFAULT NULL,
  `IMAGE_ID` int(11) DEFAULT NULL,
  `ABOUT` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`STRUCTURE_ID`, `STRUCTURE_NAME`, `CATEGORY`, `TYPE`, `LOCATION_ID`, `ARCHITECT`, `IMAGE_ID`, `ABOUT`) VALUES
(2, 'Hazza Bin Zayed Stadium', 'Stadium', 'Stadium', 2, NULL, 14, 'Hazza bin Zayed Stadium is a multi-purpose stadium, located in the Emirate of Abu Dhabi, City of Al Ain, United Arab Emirates. It is the home stadium of Al Ain FC of the UAE Pro-League. The stadium holds 25,000 spectators and opened in 2014'),
(4, 'Kasumigaseki Building', 'Skyscraper', 'Mixed-use', 5, NULL, 12, 'The Kasumigaseki Building (éœžãŒé–¢ãƒ“ãƒ« Kasumigaseki biru?) is a 36-story skyscraper located in Kasumigaseki, Chiyoda, Tokyo. The building is widely regarded as the first modern office skyscraper in Japan.'),
(7, 'Haneda Airport', 'Airport', 'Public', 10, NULL, 11, 'Tokyo International Airport, commonly known as Haneda Airport or Tokyo Haneda Airport, is one of the two primary airports that serve the Greater Tokyo Area.'),
(10, 'Angkor Wat', 'Temple', 'Temple', 13, '', 4, 'Angkor Wat is a temple complex in Cambodia and the largest religious monument in the world. It was originally founded as a Hindu temple for the Khmer Empire, gradually transforming into a Buddhist temple toward the end of the 12th century.'),
(12, 'Burj Khalifa', 'Skyscraper', 'Mixed-use', 15, 'Adrian Smith', 6, 'Burj Khalifa, known as Burj Dubai before its inauguration, is a skyscraper in Dubai, United Arab Emirates. It is the tallest artificial structure in the world, standing 829.8 m (2,722 ft).'),
(14, 'Masjid al-Haram', 'Islamic', 'Mosque', 17, NULL, 8, 'The Masjid al-?aram, also called the Sacred Mosque, and the Grand Mosque[2] or Great Mosque of Mecca, is the largest mosque in the world and surrounds Islam''s holiest place, the Kaaba.'),
(15, 'Taj Mahal', 'Landmark', 'Mughal architecture', 18, 'Ustad Ahmad Lahauri', 9, 'The Taj Mahal, is a white marble mausoleum located on the southern bank of Yamuna River in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan (reigned 1628â€“1658) to house the tomb of his favorite wife of three, Mumtaz Mahal.'),
(16, 'Great Wall of China', 'Landmark', 'Wall', 19, '', 10, 'The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe. Several walls were being built as early as the 7th century bc'),
(17, 'Beijing National Stadium', 'Stadium', 'Stadium', 20, 'Herzog & de Meuron', 13, 'Beijing National Stadium, officially the National Stadium, is a stadium in Beijing, China. The stadium was designed for use throughout the 2008 Summer Olympics and Paralympics and is expect to host the same events at the 2022 Winter Olympics and Paralympics. The stadium is currently used mostly for football matches.'),
(18, 'Osaka Castle', 'Castle', 'Azuchi-Momoyama castle', 21, '', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `temple`
--

CREATE TABLE IF NOT EXISTS `temple` (
  `STRUCTURE_ID` int(11) NOT NULL,
  `STYLE` varchar(255) DEFAULT NULL,
  `HEIGHT` int(11) DEFAULT NULL,
  `AFFILIATION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temple`
--

INSERT INTO `temple` (`STRUCTURE_ID`, `STYLE`, `HEIGHT`, `AFFILIATION`) VALUES
(8, 'TTTTTT', 19, 'TTTTTTT'),
(10, 'Khmer', 0, 'Buddhist'),
(11, 'QQQQ', 18, 'qqqq');

-- --------------------------------------------------------

--
-- Table structure for table `whsa`
--

CREATE TABLE IF NOT EXISTS `whsa` (
  `STRUCTURE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whsa`
--

INSERT INTO `whsa` (`STRUCTURE_ID`) VALUES
(11),
(15),
(16),
(10),
(18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`IMAGE_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
 ADD PRIMARY KEY (`STRUCTURE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
MODIFY `IMAGE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `LOCATION_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
MODIFY `STRUCTURE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

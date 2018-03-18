-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 03:55 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jwelkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `pro_id` int(100) NOT NULL,
  `pro_cat` varchar(100) NOT NULL,
  `pro_name` varchar(1000) NOT NULL,
  `pro_img` varchar(1000) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `pro_mat` varchar(1000) NOT NULL,
  `pro_cert` varchar(1000) NOT NULL,
  `pro_des` varchar(1000) NOT NULL,
  `pro_wait` varchar(1000) NOT NULL,
  `pro_care` varchar(1000) NOT NULL,
  `pro_link` varchar(1000) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`pro_id`, `pro_cat`, `pro_name`, `pro_img`, `pro_price`, `pro_mat`, `pro_cert`, `pro_des`, `pro_wait`, `pro_care`, `pro_link`) VALUES
(0, 'necklace', 'Infinity necklace', 'download (1).jpg', 32000, 'Silver', 'ISO 8635:2016', 'H-0.07mm W-0.01mm', '0.08ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(1, 'rings', 'Blue stone', 'Pictures-of-wedding-rings-1.jpg', 1999, 'Stone', 'ISO 8635:2016', 'H: 20.39 mm         W: 9.55 mm', '0.064 Ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'www.bluestone.com'),
(2, 'rings', 'Sliver Stone', 'silver.jpg', 1499, 'Silver', 'International gemological institute', 'H : 2.39 mm         W  : 3.55 mm', '0.045 Ct', ' Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry.', 'www.bluestone.com'),
(3, 'rings', 'Wingflow ring', 'Yellow-Diamond-Ring.jpg', 1299, 'Silver', 'Bureau of Indian standards', 'H: 20.39 mm         W: 9.55 mm', '0.045 Ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'www.bluestone.com'),
(4, 'rings', 'Belleza', 'bellezza-cultured-freshwater-pearl-freeform-ring-d-2014052816280538-340142.jpg', 1735, 'Silver', 'ISO 8654:1987', 'H : 2.39 mm         W: 3.55 mm', '0.040 Ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'www.bluestone.com'),
(5, 'rings', 'Sofia ring', 'pZALEPEPL1-14779055t400.jpg', 2299, 'Brazilian Silver', 'ISO 8653:2016', ' H:1.39 mm         W: 9.55 mm', '0.021 Ct', 'Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'www.bluestone.com'),
(6, 'ring', 'Annetta ring', 'P14491251.jpg', 5735, 'Gold', 'Bureau of Indian Standards', 'H:0.02 W:0.01mm', '1ct', 'dont put in hot water.', 'www.bluestone.com'),
(8, 'rings', 'Diamond ring', 'download57.jpg', 13999, 'Gold', 'Bureau of Indian Standards', 'H:0.04mm    W:0.02mm', '0.03ct', ' Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry.', 'Kalyanjewellers.net'),
(12, 'bangles', 'Banded bangles', 'b3.jpg', 2599, 'Gold', 'ISO 9202:2014', 'H:0.02mm W:0.03mm', '0.2ct', 'Dont wash with hot water.', 'bluestone.com'),
(13, 'bangles', 'Soiyah bangle', 'b4.jpg', 3299, 'Silver', 'International Gemological Institute', 'H:0.01mm    W:0.02mm', '0.03ct', 'Dont wash with hot water', 'voylla.com'),
(14, 'bangles', 'Hard bangle', 'b5.jpg', 3199, 'Gold', 'ISO 8654:1987', 'H:0.02mm     W:0.03mm', '0.04ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'Kalyanjewellers.net'),
(15, 'bangles', 'Faded bangle', 'bangles2.jpg', 2299, 'Gold', 'ISO 8654:2016', 'H:0.02mm  W:0.01mm', '0.03ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'Bluestone.com'),
(16, 'bangles', 'Banged bangle', 'b8.jpg', 2199, 'Platted gold', 'International gemological Institiute', 'H:0.01mm    W:0.02mm', '0.04ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(17, 'necklace', 'Monogram necklace', 'download (5).jpg', 2435, 'silver', 'Bureau of Indian Standards', 'H:0.02mm     W:0.01mm', '0.08ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(18, 'Rings', 'Square Ring', 'download58.jpg', 45999, 'Diamond', 'International Gemological Institute', 'H:0.04mm   W:0.03mm', '0.05ct', ' Avoid cleaning all the diamond jewelry in the hand-basin.', 'voylla.com'),
(19, 'Rings', 'Golden Ring', 'download59.jpg', 9999, 'Gold', 'ISO 9202:2014', 'H:0.03mm W:0.01mm', '0.04ct', 'Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry.', 'vollya.com'),
(20, 'necklace', 'Heart necklace', 'images (9).jpg', 4799, 'Gold', 'ISO 11427:2014', 'H:0.03mm   W:0.02mm', '0.07ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'bluestone.com'),
(21, 'necklace', 'Monogram necklace', 'images (8).jpg', 4399, 'Gold', 'International Gemological Institute', '0.01mm   W:0.02mm', '0.9ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(22, 'necklace', 'Feather necklace', 'images (27).jpg', 3999, 'Platted silver', 'ISO 11427:2014', 'H:0.02mm  W:0.01mm', '0.08ct', 'Caring for a diamond during daily activities.', 'bluestone.com'),
(23, 'pendent', 'Aldo armband', 'aldo-cuff.jpg', 2799, 'Silver', 'ISO 11489:1995', 'H:0.01mm   W:0.02mm', '0.03ct', 'Apply your makeup before putting on your diamond jewelry. ', 'bluestone.com'),
(24, 'armband', 'Thin armband', 'full_size.jpg', 15000, 'silver', 'Bureau of Indian Standards', 'H:0.02mm   W:0.01mm', '0.04ct', ' Remove your diamond jewelry before you take a shower.', 'Voylla.com'),
(25, 'armband', 'Spinned armband', 'il_340x270.380830315_j4us.jpg', 5635, 'Gold', 'Bureau of Indian Syandards', 'H:0.03mm  W:0.01mm', '0.03ct', 'Remove your diamond ornaments before you take a swim.', 'bluestone.com'),
(26, 'Rings', 'Diamond ring', 'download60.jpg', 12999, 'Gold', 'International gemological Institute', 'H:0.03mm  W:0.01mm', '0.05ct', ' Avoid cleaning all the diamond jewelry in the hand-basin.', 'Bluestone.com'),
(27, 'armband', 'Snaked armband', 'x354-q80.jpg', 1199, 'Gold', 'Bureau of Indian Standards', 'H:0.03mm  W:0.02mm', '0.04ct', 'Remove diamond jewelry when playing contact sports.', 'Voylla.com'),
(28, 'armband', 'Meshed armband', 'msx0041-muschel-armband-african-shells-schatten.jpg', 1799, 'Silver', 'ISO 8654:2014', 'H:0.02mm  W:0.01mm', '0.03ct', 'Remove diamond jewelry when playing contact sports', 'bluestone.com'),
(29, 'Rings', 'Circle ring', 'download61.jpg', 1799, 'Gold', 'International Gemological Institute', 'H:0.04mm  W:0.02mm', '0.04ct', 'We should clean jewelleries properly.', 'Bluestone.com'),
(35, 'pendant', 'Simple pendent', '11a.jpg', 1199, 'Silver', 'International Confederation of Jewellery', 'H:0.02mm  W:0.01mm', '0.04ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'bluestone.com'),
(36, 'pendant', 'Flower pendent', 'Engravable-Jewelry-Memorial-Pendant-4-Leaves-Necklace-Stainless-Steel-Pendant-Necklace-Ashes-Pendant-Jewelry-Pet-font.jpg', 1799, 'Gold', 'International Gemological Institute', 'H:0.01mm   W:0.02mm', '0.03ct', 'We should clean jewelleries properly.', 'Voylla.com'),
(37, 'pendant', 'Rounded pendant', '226fa495a6cbe31afd0c4f52a37102a4.jpg', 1499, 'Platted silver', 'International Confederation of Jewelry', 'H:0.02mm  W:0.03mm', '0.04ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'kalyanjewellers.net'),
(38, 'pendant', 'Zymal pendent', 'AGPA-20226-03.jpg', 1735, 'Silver', 'International Confederation of Jewelry', 'H:0.02mm  W:0.01mm', '0.06ct', 'We should clean jewelleries properly.', 'Voylla.com'),
(39, 'pendant', 'Oval pendant', 'il_fullxfull.846408260_2l95.jpg', 2499, 'Imported silver', 'Bureau of Indian Standards', 'H:0.01mm   W:0.02mm', '0.04ct', 'Apply your makeup before putting on your diamond jewelry. ', 'Bluestone.com'),
(40, 'armband', 'Meshed armband', 'images.jpg', 13999, 'Gold', 'International Gemological Institute', 'H:0.03mm   W:0.02mm', '0.04ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Bluestone.com'),
(41, 'noserings', 'Shiny nosering', 'download41.jpg', 2199, 'Silver', 'International Confederation of Jewelry', 'H:0.03mm   W:0.02mm', '0.02ct', 'We should clean jewelleries properly.', 'bluestone.com'),
(42, 'noserings', 'Tiny nosering', 'download42.jpg', 6735, 'Gold', 'Bureau of Indian Standards ', 'H:0.02mm   W:0.01mm', '0.03ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'Voylla.com'),
(43, 'noserings', 'Shredded nosering', 'download43.jpg', 5499, 'Gold', 'ISO 11494:2014', 'H:0.02mm   W:0.01mm', '0.04ct', 'Diamonds should be placed in the jewelry setting with the help of prongs and mountings. ', 'Bluestone.com'),
(44, 'noserings', 'Diamond nosering', 'download44.jpg', 13999, 'Gold', 'International Confederation of Jewelry', 'H:0.02mm   W:0.03mm', '0.04ct', 'Dont wash with hot water.', 'bluestone.com'),
(45, 'noserings', 'Simple nosering', 'download46.jpg', 5199, 'Platted gold', 'Bureau of Indian Standards', 'H:0.02mm   W:0.03mm', '0.04ct', 'Apply your makeup before putting on your diamond jewelry. ', 'Voylla.com'),
(46, 'earrings', 'Simple earrings', 'download17.jpg', 1599, 'Silver', 'International Confederation of Jewellery', 'H:0.02mm  W:0.01mm', '0.03ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'bluestone.com'),
(52, 'earings', 'Heart earing', 'download19.jpg', 1399, 'Silver', 'International Gemological Institute ', 'H:0.02mm   W:0.01mm', '0.04ct', 'We should clean jewelleries properly.', 'Voylla.com'),
(53, 'earings', 'Circular earing', 'download20.jpg', 4735, 'Silver', 'International Confederation of Jewelry', 'H:0.02mm  W:0.01mm', '0.05ct', 'Apply your makeup before putting on your diamond jewelry. ', 'bluestone.com'),
(54, 'earings', 'Simple earring', 'download22.jpg', 2799, 'Gold', 'International Gemological Standards', 'H:0.01mm   W:0.02mm', '0.04ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'Voylla.com'),
(63, 'earings', 'Lada ring', 'download21.jpg', 5735, 'Silver', 'International Confederation of Jewellery', 'H:0.02mm   W:0.01mm', '0.03ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(71, 'earings', 'Round earing', 'download22.jpg', 3999, 'Imported silver', 'Bureau of Indian Standards', 'H:0.02mm  W:0.03mm', '0.04ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'Bluestone.com'),
(72, 'earings', 'Square earing', 'download23.jpg', 2199, 'Egyptian silver', 'Bureau of Indian Standards', 'H:0.01mm   W:0.03mm', '0.05ct', 'Dont wash with hot water.', 'Voylla.com'),
(73, 'earings', 'Squarrel earing', 'download24.jpg', 1705, 'Silver', 'International Gemological Institute', 'H:0.02mm  W:0.01mm', '0.04ct', 'We should clean jewelleries properly.', 'Bluestone.com'),
(74, 'earings', 'Flower earing', 'download26.jpg', 7999, 'Imported gold', 'International Confederation of Jewellery', 'H:0.03mm    W:0.02mm', '0.05ct', 'Apply your makeup before putting on your diamond jewelry. ', 'Voylla.com'),
(75, 'earings', 'Jearing', 'download28.jpg', 15999, 'Imported gold', 'ureau of Indian Standards', 'H:0.03mm   W:0.01mm', '0.05ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'Bluestone.com'),
(76, 'earings', 'Soft earing', 'download32.jpg', 6999, 'Gold', 'International Confederation of Jewellery', 'H:0.03mm   W:0.01mm', '0.04ct', 'Diamonds should be placed in the jewelry setting with the help of prongs and mountings. ', 'Voylla.com'),
(81, 'necklace', 'Hard necklace', 'download10.jpg', 407999, 'Pure gold', 'International Confederation of Jewellery', 'H:0.04mm  W:0.02mm', '0.09ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'vollya.com'),
(82, 'necklace', 'Simple necklace', 'download12.jpg', 5999, 'Gold', 'Bureau of Indian Standards', 'H:0.04mm   W:0.02mm', '0.08ct', 'dont put in water.', 'Bluestone.com'),
(83, 'necklace', 'Thick necklace', 'download15.jpg', 49999, 'Gold', 'International Confederation of Jewellery', '0.05mm    W:0.03mm', '0.08ct', 'Avoid cleaning all the diamond jewelry in the hand-basin.', 'vollya.com'),
(90, 'necklace', 'Vshaped necklace', 'download14.jpg', 35499, 'Platted gold', 'Bureau of Indian Standards', 'H:0.03mm   W:0.01mm', '0.08ct', 'Always Avoid jewelleries during exercise.', 'Kalyanjewellers.net'),
(91, 'necklace', 'Clarissa necklace', 'download7.jpg', 10035, 'Pure silver', 'International Gemological Institute', 'H:0.02mm  W:0.01mm', '0.07ct', 'Dont wash with hot water.', 'Bluestone.com'),
(92, 'bangles', 'Mannaca bangle', 'download33.jpg', 3435, 'Platted gold', 'ISO 8654:1997', 'H:0.01mm  W:0.03mm', '0.06ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'Voylla.com'),
(93, 'bangles', 'Isha bangle', 'download34.jpg', 9399, 'Gold', 'International Confederation of Jewelry', 'H:0.01mm  W:0.03mm', '0.06ct', 'Apply your makeup before putting on your diamond jewelry. ', 'Bluestone.com'),
(94, 'bangles', 'Deema bangle', 'download37.jpg', 6554, 'Brazilian gold', 'Bureau of Indian Standards', 'H:0.02mm  W:0.01mm', '0.05ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(95, 'bangles', 'Ayala bangle', 'download39.jpg', 1099, 'Italian gold', 'Bureau of Indian Standards', 'H:0.02mm  W:0.01mm', '0.04ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Bluestone.com'),
(96, 'bangles', 'Neka bangle', 'download40.JPG', 9935, 'Egyptian gold', 'ISO 8653:2014', 'H:0.01mm  W:0.03mm', '0.06ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'Voylla.com'),
(97, 'noserings', 'Batony nosering', 'download45.jpg', 3399, 'Gold', 'International Confederation of Jewellery', 'H:0.01mm  W:0.02mm', '0.02ct', 'Always Avoid jewelleries during exercise.', 'Bluestone.com'),
(98, 'noserings', 'Larkspur nosering', 'download47.jpg', 4444, 'Platted gold', 'ISO 8653:2014', 'H:0.01mm  W:0.02mm', '0.03ct', 'Dont wash with hot water.', 'Voylla.com'),
(99, 'noserings', 'Laurel nosering', 'download48.png', 4335, 'Light gold', 'International Gemological Institute', 'H:0.01mm  W:0.02mm', '0.03ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Kalyanjewellers.net'),
(100, 'armband', 'Padma armband', 'download50.jpg', 6799, 'Thicker gold', 'ISO 8653:2014', 'H:0.01mm  W:0.03mm', '0.05ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'Voylla.com'),
(101, 'armband', 'Anchored armband', 'download52.jpg', 6557, 'Gold', 'International Confederation of Jewellery', 'H:0.01mm  W:0.02mm', '0.03ct', 'Dont wash with hot water.', 'Bluestone.com'),
(102, 'armband', 'Susan armband', 'download53.jpg', 8899, 'Platted gold', 'Bureau of Indian Standards', 'H:0.01mm  W:0.03mm', '0.05ct', 'Always Avoid jewelleries during exercise.', 'Kalyanjewellers.net'),
(103, 'armband', 'Mystic armband', 'download56.jpg', 9905, 'Platted gold', 'International Gemological Institute', 'H:0.01mm  W:0.03mm', '0.04ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'Bluestone.com'),
(104, 'armband', 'Eternity armband', 'aldo-cuff.jpg', 10034, 'Platted gold', 'International Confederation of Jewellery', 'H:0.01mm  W:0.03mm', '0.05ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Voylla.com'),
(105, 'armband', 'Celtic armband', 'download54.jpg', 8855, 'Italian gold', 'ISO 8653:2014', 'H:0.01mm  W:0.02mm', '0.04ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Bluestone.com'),
(106, 'pendant', 'Talas pendant', 'air-water-pendant_massive.jpg', 9354, 'Silver', 'ISO 8654:1997', 'H:0.01mm  W:0.02mm', '0.03ct', 'Always ensure to remove the jewelry having diamonds at the time of doing household work.', 'Bluestone.com'),
(107, 'pendant', 'Fidah pendant', 'Crossroads-Pendant-1.gif', 11999, 'Gold', 'International Confederation of Jewellery', 'H:0.01mm  W:0.03mm', '0.05ct', 'Always Avoid jewelleries during exercise.', 'Kalyanjewellers.net'),
(108, 'pendant', 'Reverence pendant', 'diamond-fancy-pendant-250x250.jpg', 11345, 'Italian silver', 'International Gemological Institute', 'H:0.01mm  W:0.02mm', '0.04ct', 'Mix a squeeze of mild dish detergent with warm water in a bowl. Put the gold item into the soap mixture and let sit for a few minutes. Use a soft toothbrush to gently scrub the jewelry. Remove item from soapy water, rinse it and dry thoroughly with a soft polishing cloth.', 'Voylla.com'),
(109, 'pendant', 'Ammara pendant', 'il_340x270.666844333_eo2k.jpg', 8854, 'Egyptian silver', 'Bureau of Indian Standards', 'H:0.02mm  W:0.01mm', '0.04ct', 'Always Avoid jewelleries during exercise.', 'Voylla.com'),
(111, 'pendant', 'Alona pendant', 'ZEVRAT_PENDANT-Z00976_900X900_01_0.jpg', 13399, 'Platted gold', 'International Confederation of Jewellery', 'H:0.03mm   W:0.01mm', '0.06ct', 'At the time of physical exercise it is suggested not to wear the gemstone jewelry to avoid the chances of knock out.', 'Kalyanjewellers.net'),
(121, 'rings', 'Ayyana ring', 'Cambridge-Sterling-Silver-1-10ct-TDW-Diamond-Infinity-Ring-P15695624.jpg', 5499, 'gold', 'Bureau of Indian Standards', 'H:0.02mm    W:0.01mm', '0.04ct', 'Dont put in hot water.', 'www.bluestone.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_control`
--

CREATE TABLE IF NOT EXISTS `user_control` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `phn_no` int(45) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_control`
--

INSERT INTO `user_control` (`id`, `user_id`, `phn_no`, `pass`, `role`) VALUES
(1, 'admindanish@kart.com', 0, 'danish', 'admin'),
(2, 'san', 0, 'san', 'user'),
(3, 's@g.com', 123, '123', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

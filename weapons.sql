-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 11:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `weaponID` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `category` int(2) DEFAULT NULL,
  `name` varchar(31) DEFAULT NULL,
  `dmg` varchar(4) DEFAULT NULL,
  `weight` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`weaponID`, `category`, `name`, `dmg`, `weight`) VALUES
(1, 1, 'Guardian Tail', '210', '5.0'),
(2, 1, 'Notched Whip', '190', '2.0'),
(3, 1, 'Whip', '200', '1.5'),
(4, 2, 'Great Scythe', '250', '5.0'),
(5, 2, 'Black Knight Halberd', '367', '14.0'),
(6, 2, 'Titanite Catch Pole', '187', '6.0'),
(7, 2, 'Giant\'s Halberd', '210', '16.0'),
(8, 2, 'Gargoyle\'s Halberd', '287', '6.0'),
(9, 2, 'Scythe', '275', '5.0'),
(10, 2, 'Lucerne', '275', '5.5'),
(11, 2, 'Lifehunt Scythe', '270', '6.0'),
(12, 2, 'Halberd', '275', '6.0'),
(13, 3, 'Silver Knight Spear', '244', '6.0'),
(14, 3, 'Demon\'s Spear', '150', '4.0'),
(15, 3, 'Channeler\'s Trident', '105', '6.0'),
(16, 3, 'Pike', '215', '10.0'),
(17, 3, 'Moonlight Butterfly Horn', '0', '4.0'),
(18, 3, 'Dragonslayer Spear', '142', '10.0'),
(19, 3, 'Four-pronged Plow', '187', '5.5'),
(20, 3, 'Partizan', '200', '4.5'),
(21, 3, 'Winged Spear', '215', '4.5'),
(22, 3, 'Spear', '200', '3.5'),
(23, 4, 'Dark Hand', '200', '0.5'),
(24, 4, 'Claws', '180', '1.0'),
(25, 4, 'Caestus', '165', '0.5'),
(26, 4, 'Dragon Bone Fist', '142', '8.0'),
(27, 5, 'Dragon Tooth', '435', '18.0'),
(28, 5, 'Grant', '195', '24.0'),
(29, 5, 'Demon\'s Great Hammer', '345', '22.0'),
(30, 5, 'Great Club', '337', '12.0'),
(31, 5, 'Large Club', '300', '11.0'),
(32, 5, 'Smough\'s Hammer', '450', '28.0'),
(33, 6, 'Hammer of Vamos', '172', '5.0'),
(34, 6, 'Blacksmith Hammer', '217', '5.0'),
(35, 6, 'Pickaxe', '222', '5.0'),
(36, 6, 'Warpick', '227', '3.5'),
(37, 6, 'Morning Star', '207', '4.0'),
(38, 6, 'Mace', '227', '4.0'),
(39, 6, 'Blacksmith Giant Hammer', '180', '6.0'),
(40, 6, 'Reinforced Club', '242', '4.0'),
(41, 6, 'Club', '183', '3.0'),
(42, 6, 'Dragon King Greataxe', '570', '24.0'),
(43, 6, 'Black Knight Greataxe', '343', '16.0'),
(44, 6, 'Stone Greataxe', '285', '24.0'),
(45, 6, 'Demon\'s Greataxe', '285', '22.0'),
(46, 6, 'Greataxe', '350', '14.0'),
(47, 7, 'Crescent Axe', '172', '7.0'),
(48, 7, 'Gargoyle Tail Axe', '232', '5.0'),
(49, 7, 'Butcher Knife', '225', '10.0'),
(50, 7, 'Golem Axe', '255', '16.0'),
(51, 7, 'Battle Axe', '237', '4.0'),
(52, 7, 'Hand Axe', '200', '1.0'),
(53, 8, 'Velka\'s Rapier', '93', '2.0'),
(54, 8, 'Ricard\'s Rapier', '175', '2.0'),
(55, 8, 'Estoc', '187', '3.0'),
(56, 8, 'Rapier', '182', '1.5'),
(57, 8, 'Mail Breaker', '142', '0.5'),
(58, 9, 'Gravelord Sword', '397', '10.0'),
(59, 9, 'Server', '267', '10.0'),
(60, 9, 'Murakumo', '282', '12.0'),
(61, 10, 'Washing Pole', '225', '8.0'),
(62, 10, 'Iaito', '220', '5.0'),
(63, 10, 'Chaos Blade', '216', '6.0'),
(64, 10, 'Uchigatana', '225', '5.0'),
(65, 11, 'Gold Tracer', '195', '2.0'),
(67, 11, 'Jagged Ghost Blade', '232', '1.5'),
(69, 11, 'Painting Guardian Sword', '190', '1.5'),
(70, 11, 'Shotel', '205', '2.5'),
(71, 11, 'Falchion', '205', '2.5'),
(72, 11, 'Quelaag\'s Furysword', '90', '3.5'),
(73, 11, 'Scimitar', '200', '1.5'),
(74, 12, 'Dragon Greatsword', '585', '24.0'),
(75, 12, 'Black Knight Greatsword', '330', '14.0'),
(76, 12, 'Demon Great Machete', '332', '18.0'),
(77, 12, 'Zweihander', '325', '10.0'),
(78, 12, 'Greatsword', '325', '12.0'),
(79, 13, 'Obsidian Greatsword', '480', '8.0'),
(80, 13, 'Moonlight Greatsword', '0', '6.0'),
(81, 13, 'Stone Greatsword', '222', '18.0'),
(82, 13, 'Black Knight Sword', '330', '8.0'),
(83, 13, 'Crystal Greatsword', '190', '8.0'),
(84, 13, 'Flamberge', '250', '6.0'),
(85, 13, 'Man-Serpent Greatsword', '275', '10.0'),
(86, 13, 'Claymore', '257', '6.0'),
(87, 13, 'Bastard Sword', '262', '6.0'),
(88, 13, 'Great Lord Greatsword', '384', '8.0'),
(89, 13, 'Greatsword of Artorias', '180', '10.0'),
(90, 13, 'Greatsword of Artorias (Cursed)', '267', '10.0'),
(91, 13, 'Abyss Greatsword', '240', '9.0'),
(92, 14, 'Straight Sword Hilt', '50', '1.0'),
(93, 14, 'Broken Straight Sword', '100', '2.0'),
(94, 14, 'Drake Sword', '300', '6.0'),
(95, 14, 'Astora\'s Straight Sword', '120', '3.0'),
(96, 14, 'Silver Knight Straight Sword', '262', '6.0'),
(97, 14, 'Crystal Straight Sword', '145', '6.0'),
(98, 14, 'Barbed Straight Sword', '200', '3.0'),
(99, 14, 'Darksword', '205', '6.0'),
(100, 14, 'Sunlight Straight Sword', '205', '4.0'),
(101, 14, 'Balder Side Sword', '200', '3.0'),
(102, 14, 'Broadsword', '205', '3.0'),
(103, 14, 'Longsword', '200', '3.0'),
(104, 14, 'Shortsword', '195', '2.0'),
(105, 15, 'Priscilla\'s Dagger', '120', '1.0'),
(106, 15, 'Dark Silver Tracer', '112', '1.0'),
(107, 15, 'Ghost Blade', '165', '0.5'),
(108, 15, 'Bandit\'s Knife', '140', '1.0'),
(109, 15, 'Parrying Dagger', '135', '0.5'),
(110, 15, 'Daggers', '140', '0.5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weapons`
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

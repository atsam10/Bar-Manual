-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2022 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bar Manual`
--

-- --------------------------------------------------------

--
-- Table structure for table `Mocktaiks`
--

CREATE TABLE `Mocktaiks` (
  `s.no` int(11) NOT NULL,
  `M_Name` text NOT NULL,
  `ingrdients` text NOT NULL,
  `How_to_make` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mocktaiks`
--

INSERT INTO `Mocktaiks` (`s.no`, `M_Name`, `ingrdients`, `How_to_make`) VALUES
(1, 'Tropical Thunder\n', '2/3 Orange Juice <br>\r\n1/3 Pineapple juice  <br>\r\n1 Oz / 30ml Mango Pulp  <br>\r\n10 ml Sugar syrup  <br>\r\n10 ml Lemon cordial  <br>', 'Put all the ingredients in a blender with 5-6 cubes of ice and garnish with a wheel of oranges and cherry. \r\n'),
(2, 'Coriander and Coconut Virgin Mojito ', '4-5 mint leaves  <br>\r\nCoriander  <br>\r\nFresh squeezed lime juice  <br>\r\n10-15 ml sugar syrup  <br>\r\nCoconut water   <br>', 'Blend the above ingredients with 5-6 cubes of ice and put the blended mixture until 3/4 in the glass and top-up with sprite / lemonade and garnish with mint leaves and wheel of lime '),
(3, 'Cool as Cucumber', '4-5 mint leaves  <br>\r\nCucumber slices <br>\r\nFresh squeezed lime juice  <br>\r\n10-15 ml sugar syrup  <br>\r\nCoconut water   <br>', 'Blend the above ingredients with 5-6 cubes of ice and put the blended mixture until 3/4 in the glass and top-up with sprite / lemonade and garnish with mint leaves and wheel of lime'),
(4, 'Bollywood Smash ', '1/3 pineapple juice  <br>\r\n1/3 ginger ale  <br>\r\n1/3 cranberry juice  <br>\r\n10ml lemon cordial <br>', 'Fill the glass with ice and put all the ingredients in the glass and garnish with an orange slice. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Mocktaiks`
--
ALTER TABLE `Mocktaiks`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Mocktaiks`
--
ALTER TABLE `Mocktaiks`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

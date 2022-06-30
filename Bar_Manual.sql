-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2022 at 05:33 PM
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
-- Table structure for table `Cocktaiks`
--

CREATE TABLE `Cocktaiks` (
  `s.no` int(11) NOT NULL,
  `M_Name` text NOT NULL,
  `ingrdients` text NOT NULL,
  `How_to_make` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Cocktaiks`
--

INSERT INTO `Cocktaiks` (`s.no`, `M_Name`, `ingrdients`, `How_to_make`) VALUES
(1, 'Queens Necklace', '15ml Pineapple Juice <br>\r\n30ml Grey Goose <br>\r\nTop up with sparkling wine\r\n', 'Put juice and vodka into a shaker and with ice. Pour the mixture in a flute and top up with sparkling wine add cherry for garnish '),
(2, 'Bombay-Champeach Bellini', '30ml Peach schnaps <br>\r\n15m Peach pure <br>\r\nSparkling wine ', 'mash the peaches inside a chilled flute, add ingredients and top up with sparkling wine'),
(3, 'Lychee Bellini', '30ml Parasio(Lychee liquor)<br>\r\n15ml lychee syrup <br>\r\nSparkling wine\r\n', 'Inside a chilled flute, add ingredients and top up with sparkling wine'),
(4, 'Aperol Spiritz', '30ml/1oz soda water<br>\r\n60ml/2oz Aperol<br>\r\n90ml/3oz Sparkling wine', 'put 3/4 ice cubes with 2 fresh slices of orange, pour ingredients ‘'),
(5, 'Snow’s Negroni ', '30ml Bombay sapphire <br>\r\n30ml Martini sweet/rosso <br>\r\n\r\n30ml Campari <br>\r\n\r\norange juice ', 'fill rock glasses with 5/6 ice cubes, pour ingredients in the glass and gently stir, place an orange slice on top of the ice as garnish '),
(6, 'Pimmonade: \r\n', '60ml Pimm’s <br>\r\n\r\n15ml lemon cordial  <br>\r\n\r\nTop-up with lemonade <br>\r\n\r\nFresh lime slice', 'Pour ingredients in tall glass, serve with lemon/lime garnish \r\n'),
(7, 'Vodka Bitters', '60ml/2oz vodka  <br>\r\n15ml lime cordial  <br>\r\n15ml lemon juice <br>\r\n2-3 dashes of bitters <br>', 'Put all the ingredients in a tall glass'),
(8, 'Tamarind Margarita', '45ml Tequila  <br>\r\n15ml Tripple sec  <br>\r\n15ml Tamarind <br>\r\n15m lemon juice <br>', 'Put all the ingredients in a shaker and shake it with ice. Double strain in a chilled coupe or a margarita glass .'),
(9, 'Goan Martini', '45ml vodka <br>\r\n15ml lychee liquor  <br>\r\n10ml lychee syrup  <br>\r\n10ml lemon juice  <br>', 'Put all the ingredients in a shaker and shake it with ice. Strain in a chilled Martini glass.'),
(10, 'Mango Mojito', '3-4 Mint leaves<br>\r\n3-4 lime wedges <br>\r\n60ml/20z white rum <br>\r\n10ml mango pulp <br>\r\nsoda water<br>', 'Lightly Muddle the mint leaves and lime wedges with 1 tbsp sugar then add rum and lightly shake it with ice. Pour in a tall glass and top up with soda water'),
(11, 'Pomegranate Martini', '60ml vodka <br>\r\n10ml Pomegranate syrup <br>\r\n10ml sugar syrup <br>\r\n5ml lime juice<br>', 'Put all the ingredients in a shaker and shake and strain in a chilled martini glass'),
(12, 'Spicy Baby', '45ml tequila <br>\r\n15ml Tripple sec<br>\r\n3-4 chopped chillies <br>\r\n15ml lime juice <br>\r\n10ml orange juice\r\n<br>', 'Lightly muddle the chopped chillies and then add all the ingredients and shake it with ice. Pour the mixture into a chilled coupe or a margarita glass with salted rim and a lime wheel as a garnish '),
(13, 'Classic Margarita', '45ml Tequila<br>\r\n15ml Triple sec<br>\r\n15ml lime juice<br>', 'Put all the ingredients in a shaker and shake it with ice. Double strain in a chilled coupe or a margarita glass .'),
(14, 'Classic Martini ', '50ml Gin/vodka <br>\r\n10ml Martini Dry (Dry Vermouth)<br>\r\n3 olive oil<br>', 'Put all the ingredients in a shaker and shake and strain in a chilled martini glass'),
(15, 'Classic Mojito', '3-4 Mint leaves<br>\r\n3-4 lime wedges <br>\r\n60ml/20z white rum <br>\r\nsoda water<br>', 'Lightly Muddle the mint leaves and lime wedges with 1 tbsp sugar then add rum and lightly shake it with ice. Pour in a tall glass and top up with soda water'),
(16, 'Long Island Iced Tea', '15ml Tequila<br>\r\n15ml Vodka<br>\r\n15ml Rum<br>\r\n15ml Gin <br>\r\n15ml Vermouth <br>\r\nCoke<br>', 'Add all the ingredients in a Mocktail glass with some Ice with a lemon wedge and top up with coke and  lemon wheel to garnish '),
(17, 'Cosmopolitan', '45ml vodka <br>\r\n15ml triple sec<br>\r\n15ml cranberry juice<br>\r\n10ml lime juice<br>\r\n10ml Sugar syrup (Optional)<br>', 'Put all the ingredients in a shaker and shake and strain in a chilled martini glass'),
(18, 'Espresso Martini', '45ml Vodka<br>\r\n15ml Kahlua<br>\r\n30ml Espresso<br>\r\n15ml Sugar Syrup \r\n<br>', 'Put all the ingredients in a shaker and shake and strain in a chilled martini glass. 3 Coffe beans to garnish.'),
(19, 'Old Fashioned', '30ml Jack Daniels<br>\r\n30ml Jim Beam <br>\r\nSuagar<br>\r\n3-4 Dashes of Bitters<br>\r\n', 'Muddle sugar and bitters together until sugar is dissolved. Add Ice and pour the bourbon and orange twist as garnish '),
(20, 'Dark and stormy', '60ml Dark Rum<br>\r\nGinger beer<br>\r\nlime wedge<br>', 'In a tall glass add ice and pour the rum top up with ginger beer and a lemon wedge to garnish'),
(21, 'Cuba Libre', '60ml Cuban Rum<br>\r\n10ml Lemon Juice<br>\r\ncoke<br>', 'In a tall glass add ice and pour the rum top up with coke and a lemon wedge to garnish'),
(22, 'Amaretto Sours', '60ml Amaretto<br>\r\n15ml lemon juice<br>\r\n3-4 dashes of Bitters <br>\r\nEgg white (IF THERE IS) <br>\r\n', 'Shake all the ingredients with ice and pour into a rocks glass with a sugar rim without straining.');

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
-- Indexes for table `Cocktaiks`
--
ALTER TABLE `Cocktaiks`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `Mocktaiks`
--
ALTER TABLE `Mocktaiks`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cocktaiks`
--
ALTER TABLE `Cocktaiks`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Mocktaiks`
--
ALTER TABLE `Mocktaiks`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

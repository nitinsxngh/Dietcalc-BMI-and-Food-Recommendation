-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2023 at 08:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `calories` decimal(6,2) DEFAULT NULL,
  `protein` decimal(6,2) DEFAULT NULL,
  `carbohydrates` decimal(6,2) DEFAULT NULL,
  `fat` decimal(6,2) DEFAULT NULL,
  `fiber` decimal(6,2) DEFAULT NULL,
  `vitamins` varchar(255) DEFAULT NULL,
  `minerals` varchar(255) DEFAULT NULL,
  `serving_size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `category`, `calories`, `protein`, `carbohydrates`, `fat`, `fiber`, `vitamins`, `minerals`, `serving_size`) VALUES
(1, 'Apple', 'Fruit', '52.00', '0.25', '14.00', '0.17', '2.40', 'Vitamin C', 'Potassium', '100g'),
(2, 'Banana', 'Fruit', '105.00', '1.29', '27.00', '0.39', '3.10', 'Vitamin B6, Vitamin C', 'Potassium', '100g'),
(3, 'Broccoli', 'Vegetable', '55.00', '3.70', '11.20', '0.60', '2.60', 'Vitamin C, Vitamin K', 'Calcium, Iron', '100g'),
(4, 'Chicken Breast', 'Meat', '165.00', '31.00', '0.00', '3.60', '0.00', 'Vitamin B3, Vitamin B6', 'Phosphorus, Selenium', '100g'),
(5, 'Salmon', 'Fish', '206.00', '22.00', '0.00', '13.00', '0.00', 'Vitamin D, Vitamin B12', 'Omega-3 Fatty Acids', '100g'),
(6, 'Pasta (Cooked)', 'Grain', '131.00', '4.50', '25.00', '1.30', '2.50', 'Folate', 'Manganese', '100g'),
(7, 'Egg', 'Dairy', '68.00', '5.50', '0.60', '4.80', '0.00', 'Vitamin B12', 'Selenium', '100g'),
(8, 'Milk', 'Dairy', '42.00', '3.40', '5.10', '1.00', '0.00', 'Calcium, Vitamin D', 'Phosphorus', '100g'),
(9, 'Spinach', 'Vegetable', '7.00', '0.90', '1.10', '0.10', '0.70', 'Vitamin A, Vitamin K', 'Iron, Magnesium', '100g'),
(10, 'Beef Steak', 'Meat', '250.00', '26.00', '0.00', '17.00', '0.00', 'Vitamin B12, Zinc', 'Iron, Phosphorus', '100g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

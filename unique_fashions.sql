-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 08:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unique_fashions`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`UserName`, `Email`, `Telephone`, `Comment`) VALUES
('Priyanthini Sivasubramaniyam', 'priyanthini@gmail.com', 775281436, '\r\nI like your customer service. It is very attractive and very helpful.'),
('Ashani Weerakoon', 'ashani@gmail.com', 754286314, 'I did not received the product what I ordered. Customer service is not accepted. improve your customer services more. ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Repassword` varchar(100) NOT NULL,
  `Type` enum('Admin','Customer','','') NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`UserName`, `Email`, `Password`, `Repassword`, `Type`) VALUES
('Januka', 'janukamadushan@gmail.com', '123', '123', 'Admin'),
('madushan', 'madu@ymail.com', '', '123', 'Customer'),
('ucsc', 'ucsc@gmail.com', 'ucsc', 'ucsc', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_name` varchar(225) NOT NULL,
  `Product_price` int(100) NOT NULL,
  `Product_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_name`, `Product_price`, `Product_type`) VALUES
('Black casual.JPG', 1900, 'Shoes'),
('Black Dial.JPG', 1300, 'Special offers'),
('Black Frock.JPG', 2300, 'Ladies Wears'),
('Black Jacket.JPG', 2650, 'Mens Wear'),
('Black Top.JPG', 1850, 'Ladies Wears'),
('Blue Shirt.JPG', 1700, 'Mens Wear'),
('Blue Trouser.JPG', 3500, 'Ladies Wears'),
('Boys Kurutha.JPG', 3000, 'Kids Wear'),
('Brown bag.JPG', 2200, 'Accessories'),
('B_office Bag.JPG', 3300, 'Accessories'),
('Cameo T-shirt.JPG', 1300, 'Mens Wear'),
('Casual Blouse.JPG', 990, 'Ladies Wears'),
('Casual Shirt.JPG', 1900, 'Mens Wear'),
('Classic watch.JPG', 2600, 'Special Offers'),
('Cotton Dress.JPG', 990, 'Ladies Wears'),
('Crystal  Watch.JPG', 2600, 'Special Offers'),
('Denims.JPG', 2450, 'Ladies Wears'),
('Designer bag.JPG', 1900, 'Accessories'),
('Dreamcatcher.JPG', 990, 'Accessories'),
('Fancy Caps.JPG', 300, 'Kids Wear'),
('Fancy Shoes.JPG', 1800, 'Shoes'),
('Formal Shoes.JPG', 2100, 'Shoes'),
('Gents Denims.JPG', 3500, 'Mens Wear'),
('Girls Cap.JPG', 250, 'Kids Wear'),
('Gold Watch.JPG', 3300, 'Special Offers'),
('Kida T-shirt.JPG', 700, 'Kids Wear'),
('Kids Blue Shoe.JPG', 990, 'Shoes'),
('Kids Cap.JPG', 250, 'Kids Wear'),
('Kids Classic.JPG', 1100, 'Shoes'),
('Kids Dress.JPG', 1100, 'Kids Wear'),
('Kids Leather.JPG', 1300, 'Shoes'),
('Kids Salwar.JPG', 2800, 'Kids Wear'),
('Kids suit.JPG', 1800, 'Kids Wear'),
('Kurutha Top.JPG', 2250, 'Ladies Wears'),
('Laddies Boots.JPG', 2600, 'Shoes'),
('Leather Belt.JPG', 1850, 'Accessories'),
('Leather Watch.JPG', 3100, 'Special Offers'),
('Linan Top.JPG', 1800, 'Ladies Wears'),
('L_ Bracelet.JPG', 1200, 'Accessories'),
('Office Bag.JPG', 3100, 'Accessories'),
('Office Suite.JPG', 4100, 'Ladies Wears'),
('Officee Trouser.JPG', 2300, 'Mens Wear'),
('Party Frock.JPG', 3100, 'Ladies Wears'),
('Pearl Bracelet.JPG', 2300, 'Accessories'),
('Pink Frock.JPG', 1500, 'Kids Wear'),
('Pink Top.JPG', 1200, 'Ladies Wears'),
('Printed Bag.JPG', 2400, 'Accessories'),
('Salwar Suit.JPG', 6850, 'Ladies Wears'),
('Sandles(F).JPG', 1600, 'Shoes'),
('Shorts.JPG', 800, 'Mens Wear'),
('Sneakers.JPG', 1800, 'Shoes'),
('Stripe T-shirt.JPG', 990, 'Mens Wear'),
('Strret Shirt.JPG', 2300, 'Mens Wear'),
('Summer T-shirt.JPG', 1100, 'Mens Wear'),
('Waist Band.JPG', 1600, 'Accessories'),
('White Bracelet.JPG', 1700, 'Accessories'),
('Wood Necklace.JPG', 1100, 'Accessories');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `Comment` (`Comment`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

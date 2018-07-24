-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2017 at 08:26 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookworm`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `eprice` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `eprice`, `image`, `genre`) VALUES
(1, 'My Life', 699, 135, 'clinton.jpg', 'biography'),
(2, 'Dhirubhai Ambani', 599, 198, 'dhiru.jpg', 'biography'),
(3, 'In the line of Fire', 399, 120, 'musharraf.jpg', 'biography'),
(4, 'A Brief History of Time', 699, 199, 'hawking.jpg', 'biography'),
(5, 'Living History', 999, 250, 'hillary.jpg', 'biography'),
(6, 'Saddam Hussein', 799, 200, 'saddam.jpg', 'biography'),
(7, 'Mein Kamph', 699, 150, 'hitler.jpg', 'biography'),
(8, 'Every Second Counts', 999, 250, 'lance.jpg', 'biography'),
(9, 'Fools Die', 699, 230, 'puzo1.jpg', 'Crime'),
(10, 'Omerta', 599, 200, 'puzo2.jpg', 'Crime'),
(11, 'The Dark Arena', 599, 180, 'puzo3.jpg', 'Crime'),
(12, 'The Fourth K', 699, 230, 'puzo4.jpg', 'Crime'),
(13, 'The Godfather', 799, 250, 'puzo5.jpg', 'Crime'),
(14, 'The Last Don', 699, 225, 'puzo6.jpg', 'Crime'),
(15, 'The Sicilian', 699, 230, 'puzo7.jpg', 'Crime'),
(16, 'If Tomorrow Comes', 699, 235, 'sidney1.jpg', 'Crime'),
(17, 'Nothing Lasts Forever', 999, 300, 'sidney2.jpg', 'Crime'),
(18, 'Tell Me Your Dreams', 999, 280, 'sidney3.jpg', 'Crime'),
(19, 'The Naked Face', 1200, 400, 'sidney4.jpg', 'Crime'),
(20, 'The Other Side Of Midnight', 899, 250, 'sidney5.jpg', 'Crime'),
(21, 'The Stars Shine Down', 799, 250, 'sidney6.jpg', 'Crime'),
(22, 'Fifty Shades Darker', 999, 300, 'darker.jpg', 'Drama'),
(23, 'Fifty Shades Freed', 1200, 250, 'freed.png', 'Drama'),
(24, 'Fifty Shades of Grey', 1000, 250, 'grey.jpg', 'Drama'),
(25, 'Love and Friendship', 699, 180, 'love.jpg', 'Drama'),
(26, 'A Beautiful Mind', 999, 300, 'mind.jpg', 'Drama'),
(27, 'Three Mistakes of My Life', 300, 125, 'mistakes.jpg', 'Drama'),
(28, 'Pride and Prejudice', 500, 180, 'pride.jpg', 'Drama'),
(29, 'One Night at a Call Center', 299, 125, 'night.jpg', 'Drama'),
(30, '2 States', 299, 125, 'states.jpg', 'Drama'),
(31, 'Harry Potter and the Sorcerer''s Stone', 1250, 250, 'harry1.jpg', 'fantasy'),
(32, 'Harry Potter and the Chamber of Secrets', 1000, 250, 'harry2.jpg', 'fantasy'),
(33, 'Harry Potter and the Prisoner of Askaban', 1000, 250, 'harry3.jpg', 'fantasy'),
(34, 'Harry Potter and the Goblet of Fire', 1000, 250, 'harry4.jpg', 'fantasy'),
(35, 'Harry Potter and the Order of Phoenix', 1200, 250, 'harry5.jpg', 'fantasy'),
(36, 'Harry Potter and the Half Blood Prince', 1200, 250, 'harry6.jpg', 'fantasy'),
(37, 'Harry Potter and the Deathly Hallows', 999, 300, 'harry7.jpg', 'fantasy'),
(38, 'Twilight', 899, 250, 'twilight1.jpg', 'fantasy'),
(39, 'New Moon', 999, 250, 'twilight2.jpg', 'fantasy'),
(40, 'Eclipse', 899, 250, 'twilight3.jpg', 'fantasy'),
(41, 'Breaking Dawn', 899, 250, 'twilight4.jpg', 'fantasy'),
(42, 'Catch-22', 1250, 300, 'catch.jpg', 'history'),
(43, 'Gone With The Wind', 1300, 300, 'gone.jpg', 'history'),
(44, 'War and Peace', 1250, 250, 'war.jpg', 'history'),
(45, 'The Blue Nowhere', 899, 199, 'blue.jpg', 'mystery'),
(46, 'Angels and Demons', 799, 200, 'dan1.jpg', 'mystery'),
(47, 'Digital Fortress', 999, 299, 'dan2.jpg', 'mystery'),
(48, 'The Da Vinci Code', 1200, 300, 'code.jpg', 'mystery'),
(49, 'Deception Point', 999, 250, 'dan3.jpg', 'mystery'),
(50, 'From the Corner of His Eye', 999, 250, 'eye.jpg', 'mystery'),
(51, 'The Adventures of Sherlock Holmes', 999, 300, 'lock1.jpg', 'mystery'),
(52, 'The Memoirs of Sherlock Holmes', 800, 200, 'lock2.jpg', 'mystery'),
(53, 'A Study in Scarlet', 999, 250, 'study.jpg', 'mystery'),
(54, 'The Lost World', 350, 125, 'world.jpg', 'science'),
(55, 'Go Big or Go Home', 499, 199, 'big.jpg', 'science'),
(56, 'Journey to the Center of the Earth', 899, 250, 'earth.jpg', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `e_pay` varchar(30) NOT NULL DEFAULT 'Not Paid',
  `g_pay` varchar(30) NOT NULL DEFAULT 'Not Paid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `e_pay`, `g_pay`) VALUES
(1, 'Prabuddha Kumar Ghosh', 'prabuddha1708@gmail.com', 'prabuddha', '7064266802', 'KOLKATA', '1A/5B, SURAH CROSS LANE,, KOLKATA-700010, WEST BENGAL', 'Paid', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(46, 1, 5, 'download'),
(47, 1, 5, 'gift'),
(48, 1, 5, 'download'),
(49, 1, 4, 'gift'),
(50, 1, 7, 'buy'),
(51, 1, 3, 'buy'),
(52, 1, 8, 'buy'),
(53, 1, 8, 'buy');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

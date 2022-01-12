-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 05:03 PM
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
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `fruit` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `fruit`, `description`, `user_id`) VALUES
(8, 'lemon', 'The lemon, Citrus limon, is a species of small evergreen tree in the flowering plant family Rutaceae, native to South Asia, primarily North eastern India.', 12),
(9, 'grapefruit', 'The grapefruit (Citrus × paradisi) is a subtropical citrus tree known for its relatively large sour to semisweet, somewhat bitter fruit.[1] The interior flesh is segmented and varies in color from white to yellow to pink to red.', 18),
(10, 'kumquat', 'Kumquats (or cumquats in Australian English, /ˈkʌmkwɒt/; Citrus japonica) are a group of small fruit-bearing trees in the flowering plant family Rutaceae. They were previously classified as forming the now-historical genus Fortunella, or placed within Citrus sensu lato.', 0),
(12, 'oroblanco', 'An oroblanco, oro blanco (white gold), Pomelit (Israel) or sweetie[1] (Citrus grandis Osbeck × C. Paradisi Macf.) is a sweet seedless citrus hybrid fruit similar to grapefruit. It is often referred to as oroblanco grapefruit.\r\n', 0),
(13, 'pomelo', 'The pomelo, pummelo, or in scientific terms Citrus maxima or Citrus grandis, is the largest citrus fruit from the family Rutaceae and the principal ancestor of the grapefruit.[1] It is a natural, i.e., non-hybrid, citrus fruit, native to Southeast Asia.[1] Similar in taste to a large, sweet grapefruit, the pomelo is commonly consumed and used for festive occasions throughout Southeast Asia.\r\n', 0),
(14, 'mandarin', 'The mandarin orange (Citrus reticulata), also known as the mandarin or mandarine, is a small citrus tree with fruit resembling other oranges, usually eaten plain or in fruit salads.[1] The tangerine is a group of orange-coloured citrus fruit consisting of hybrids of mandarin orange.', 0),
(19, 'dasdasda', 'dasdadasd', 18),
(20, 'dsdsdsds', 't4t545t45t4t4t4t', 18),
(21, 'kajsija', 'kasjsija', 12),
(22, 'dsdsdsds', 'hgrg5rgr', 8),
(23, 'zx zx zx', 'z zx zx zx ', 8),
(24, 'xaxaxasxa', 'xaxsasxasxaxa', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `job`) VALUES
(8, 'Dusan', 'Zogovic', 'suport'),
(19, 'Zoran', 'Nikolasev', 'programer'),
(20, 'Dragan', 'Zogovic', 'tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 03:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'janhavi', 'janhaviborde23@gmail.com', 0, 'f89e7ab6b91754b22d46dbb4478823e24c2f8a12cdc4ef0db4cc6b12096fab4d855a58c5db5ebade378f56d45619ba64b5f0', '$2y$10$E16SjYN37uE9uDUkPp02luoScGm0w14FTeVTyLyUGB57lGFwom0VC'),
(5, 'abc', 'mentor@gmail.com', 0, '638fa8c5ac89c3e2163396dcab3e556113d94bcd39d934d61c3db5d2169be1b09e75eb2586812adfadb7d824333f93e32a7a', '$2y$10$ok2LBnsNYOVGiKA39OiiSuN8esx9Gugc2fooBeLUH3b6vwwWMYp4u'),
(18, 'avinash', 'avinash@gmail.com', 0, 'eac399de9ce6faa6ea41e7cac1b2697716eeb82ec6261bc700de71702e54973333da111ef9372bed8e9b456bfea390bc599d', '$2y$10$lnlxCimapJQV1Ia1Ffu5GOg./ETMzyykyeohZrardSDfP5/G1cm4O'),
(19, 'raju', 'rktech50@gmail.com', 0, '3f796988e5797e157b7e4eede9d49f42e1e8b23d50e1f9cbfd6f3114dbb76fcbb42c86908ef7df56c7fb3de0e0ff33121cfc', '$2y$10$0PJKKJwKJppylqSxSt9GcuigRVWf/ESEUkvBlGyOV2TefOJkuX5pu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

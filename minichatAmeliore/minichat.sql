-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2019 at 06:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date`) VALUES
(1, 'Tom', 'Bonsoir', '2019-10-28 12:56:39'),
(2, 'Adrien', 'Coucou', '2019-10-28 12:56:39'),
(3, 'tototest', 'Koukou', '2019-10-28 12:56:39'),
(4, 'test', 'test', '2019-10-28 12:56:39'),
(5, 'Remy', 'Ca marche ?', '2019-10-28 12:56:39'),
(6, 'Remy', 'Ca marche ?', '2019-10-28 12:56:39'),
(7, 'Remy', 'ftc', '2019-10-28 12:56:39'),
(8, 'Jean', 'kediss', '2019-10-28 12:56:39'),
(9, 'Gilbert', 'Montagnéééééé', '2019-10-28 12:56:39'),
(10, 'Brieuc', 'CIAOOOO', '2019-10-28 12:56:39'),
(11, 'Luc', 'Cul', '2019-10-28 12:56:39'),
(12, 'Jean', 'Bonsoiiir', '2019-10-28 19:11:01'),
(13, 'Jean', 'Bonsoir', '2019-10-28 19:24:04'),
(14, 'Jean', 'test', '2019-10-28 19:26:25'),
(15, 'Jean', 'Bonsoir', '2019-10-28 19:32:11'),
(16, 'Jean', 'Bonjour', '2019-10-28 19:32:16'),
(17, 'Jean', 'Je retiens ', '2019-10-28 19:32:21'),
(18, 'Jean', 'CA MARCHE ', '2019-10-28 19:32:25'),
(19, 'Jean', '<strong>Ca marche </strong>', '2019-10-28 19:32:41'),
(20, 'Jean', 'test', '2019-10-28 19:34:08'),
(21, 'Jean', 'test', '2019-10-28 19:34:17'),
(22, 'Jean-marc', 'KOUKOU', '2019-10-28 19:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
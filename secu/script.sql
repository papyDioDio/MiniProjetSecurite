-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 06:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `secuproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `inscrits`
--

CREATE TABLE `inscrits` (
  `email` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscrits`
--

INSERT INTO `inscrits` (`email`, `mdp`) VALUES
('hello@hello-design.fr', 'HELLOdesign1!');
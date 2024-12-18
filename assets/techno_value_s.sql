-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 02:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techno_value`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `icon_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `see_more_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `background_image`, `icon_image`, `title`, `status`, `created_at`, `updated_at`, `see_more_link`) VALUES
(1, 'gal-4-6.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:17', 'gallery'),
(2, 'gal-4-5.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:20', 'gallery'),
(3, 'gal-1-4.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:31', 'gallery'),
(4, 'gal-1-3.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:28', 'gallery'),
(5, 'gal-1-2.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:25', 'gallery'),
(6, 'gal-1-1.png', 'sr-icon-1-1.png', '2024-25', 1, '2024-10-07 10:06:33', '2024-10-07 10:18:22', 'gallery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

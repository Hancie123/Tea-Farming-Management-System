-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `convo_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unread , 1= read',
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `convo_id`, `user_id`, `message`, `status`, `date_created`) VALUES
(1, 1, 2, 'hi', 1, '2020-10-13 21:03:22'),
(2, 2, 3, 'yow', 0, '2020-10-13 16:58:22'),
(3, 3, 1, 'hi', 0, '2020-10-13 16:59:12'),
(4, 1, 3, 'hey', 1, '2020-10-13 20:19:22'),
(5, 2, 2, 'hi', 1, '2020-10-13 20:19:49'),
(6, 2, 1, 'test', 1, '2020-10-13 20:19:16'),
(7, 1, 2, 'test1234', 1, '2020-10-13 21:03:22'),
(8, 2, 1, '\r\n123123', 1, '2020-10-13 20:19:16'),
(9, 2, 1, 'asdasd', 1, '2020-10-13 20:19:16'),
(10, 2, 1, 'asdasd\r\n', 1, '2020-10-13 20:19:16'),
(11, 2, 1, '\r\nasdasd', 1, '2020-10-13 20:19:16'),
(12, 2, 1, '\r\nwewee', 1, '2020-10-13 20:19:16'),
(13, 2, 1, 'asdasd wew\r\n', 1, '2020-10-13 20:19:16'),
(14, 2, 1, 'sample', 1, '2020-10-13 20:21:40'),
(15, 2, 1, 'hey', 1, '2020-10-13 20:22:48'),
(16, 2, 2, 'what ?', 1, '2020-10-13 20:22:58'),
(17, 2, 2, 'yes??', 1, '2020-10-13 20:23:16'),
(18, 2, 2, 'yes sss', 1, '2020-10-13 20:23:22'),
(19, 2, 2, 'oh yeah >', 1, '2020-10-13 20:24:51'),
(20, 2, 2, 'ahem', 1, '2020-10-13 20:25:53'),
(21, 2, 2, 'hey bro', 1, '2020-10-13 20:36:10'),
(22, 2, 1, 'yes >', 1, '2020-10-13 20:36:14'),
(23, 2, 2, 'nothing', 1, '2020-10-13 20:36:33'),
(24, 2, 1, 'r u sure?', 1, '2020-10-13 20:36:45'),
(25, 2, 2, 'a', 1, '2020-10-13 20:36:53'),
(26, 2, 1, 'a', 1, '2020-10-13 20:36:57'),
(27, 2, 1, 'a', 1, '2020-10-13 20:38:06'),
(28, 2, 2, 'a', 1, '2020-10-13 20:38:39'),
(29, 2, 1, 'aaaaa', 1, '2020-10-13 20:39:14'),
(30, 2, 1, 'aaa', 1, '2020-10-13 20:39:21'),
(31, 2, 1, 'asdasd', 1, '2020-10-13 20:44:16'),
(32, 2, 1, 'asdasd', 1, '2020-10-13 20:46:20'),
(33, 2, 1, 'asdasd', 1, '2020-10-13 20:46:30'),
(34, 2, 1, 'asdasd', 1, '2020-10-13 20:47:55'),
(35, 2, 2, 'asdasd', 1, '2020-10-13 20:50:33'),
(36, 2, 2, 'asdasdasd', 1, '2020-10-13 20:51:10'),
(37, 2, 2, 'what ?', 1, '2020-10-13 20:51:18'),
(38, 2, 1, 'asa', 1, '2020-10-13 20:51:32'),
(39, 2, 1, 'aaa', 1, '2020-10-13 20:52:15'),
(40, 2, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2020-10-13 21:06:41'),
(41, 1, 3, 'Hi Blake.', 0, '2020-10-13 21:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(30) NOT NULL,
  `user_ids` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `user_ids`) VALUES
(1, '2,3'),
(2, '1,2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `avatar`) VALUES
(1, 'John Smith', 'jsmith', '1254737c076cf867dc53d60a0364f38e', '1602554940_avatar.jpg'),
(2, 'Claire Blake', 'cblake', '4744ddea876b11dcb1d169fadf494418', '1602555000_avatar2.png'),
(3, 'George Wilson', 'gwilson', 'bba888f2ecca23e0d8594b649bfdd782', '1602575640_blank.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

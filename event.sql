-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 03:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(10000) NOT NULL,
  `host` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `edate` date NOT NULL,
  `ldate` date NOT NULL,
  `intro` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `category` varchar(20) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `pin` int(11) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `host`, `image`, `edate`, `ldate`, `intro`, `description`, `category`, `cost`, `price`, `venue`, `city`, `sector`, `pin`, `added_by`, `date_added`) VALUES
(1, 'first', 'ntgjhn', 'assets/images/posts/5d9a49ac77dc8download.png', '2019-10-04', '2019-10-12', 'fjhyfjgh', 'tuh6rtd', 'Music', 'Free', 0, 'apple hospital,Airoli', 'Mumbai', 'd', 400708, 'piyush_jha', '2019-10-06 21:08:12'),
(2, 'second', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-04', '2019-10-12', 'fjhyfjgh', 'tuh6rtd', 'Music', 'Free', 0, 'jhnty', 'Navi mumbai', 'd', 400708, 'piyush_jha', '2019-10-06 21:08:48'),
(3, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(4, 'fourth', 'ntgjhn', 'assets/images/posts/5d9a4b9e106ececommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:16:30'),
(5, 'Area ', 'CSI', 'assets/images/posts/5da9cff349e42area51.jpg', '2019-10-20', '2019-10-19', 'area 51', 'aana hi padega', 'Technology', 'Paid', 20, 'Rait,nerul', 'Mumbai', '42', 400708, 'kamaljit_kaur', '2019-10-18 15:45:07'),
(6, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(7, 'fourth', 'ntgjhn', 'assets/images/posts/5d9a4b9e106ececommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:16:30'),
(8, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(9, 'fourth', 'ntgjhn', 'assets/images/posts/5d9a4b9e106ececommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:16:30'),
(10, 'second', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-04', '2019-10-12', 'fjhyfjgh', 'tuh6rtd', 'Music', 'Free', 0, 'jhnty', 'Navi mumbai', 'd', 400708, 'piyush_jha', '2019-10-06 21:08:48'),
(11, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(12, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(13, 'fourth', 'ntgjhn', 'assets/images/posts/5d9a4b9e106ececommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Cultural', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:16:30'),
(14, 'third', 'ntgjhn', 'assets/images/posts/5d9a4ab55bb51ecommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:12:37'),
(15, 'fourth', 'ntgjhn', 'assets/images/posts/5d9a4b9e106ececommerce_background_shopping_design_elements_icons_6838055.jpg', '2019-10-03', '2019-10-05', 'gxjfn', 'nfyhm', 'Business', 'Paid', 5, 'jhnty', 'Navi mumbai', 'e5', 400708, 'piyush_jha', '2019-10-06 21:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `user_closed`) VALUES
(1, 'Piyush', 'Jha', 'piyush_jha', 'Piyushjha65@gmail.com', '71475796cecd23372be477f8d8d03e5f', '2019-09-27', 'assets/images/profile_pics/defaults/head_emerald.png', 4, 'no'),
(2, 'Kamaljit', 'Kaur', 'kamaljit_kaur', '98kamaljitkaur@gmail.com', '7488e331b8b64e5794da3fa4eb10ad5d', '2019-10-18', 'assets/images/profile_pics/defaults/head_emerald.png', 1, 'no'),
(3, 'Prince', 'Jha', 'prince_jha', 'Jhaprince@gmail.com', '0192023a7bbd73250516f069df18b500', '2019-10-19', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

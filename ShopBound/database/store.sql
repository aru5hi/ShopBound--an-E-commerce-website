-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 04:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_type` varchar(10) NOT NULL,
  `img` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `price`, `product_type`, `img`) VALUES
(1, 'India Half T-Shirt', 199, 'men', 'https://images.bewakoof.com/t540/indian-jersey-half-sleeve-t-shirt-men-s-printed-t-shirts-223021-1562567089.jpg'),
(2, '3000 black T shirt', 399, 'men', 'https://images.bewakoof.com/t540/love-you-3000-half-sleeve-t-shirt-avl-men-s-printed-t-shirts-217381-1558335468.jpg'),
(3, 'Peek Out Half T-Shirt', 299, 'men', 'https://images.bewakoof.com/t540/peek-out-half-sleeve-t-shirt-men-s-printed-t-shirts-211979-1552462834.jpg'),
(4, 'Im your dad T-shirt', 499, 'men', 'https://images.bewakoof.com/t540/i-am-your-dad-half-sleeve-t-shirt-men-s-printed-t-shirts-214809-1554704659.jpg'),
(5, 'Gully Cricket T-shirt', 299, 'men', 'https://images.bewakoof.com/t540/gully-cricket-half-sleeve-t-shirt-men-s-printed-t-shirts-218318-1559648787.jpg'),
(6, 'Bored T-Shirt', 449, 'men', 'https://images.bewakoof.com/t540/busy-getting-board-half-sleeve-t-shirt-men-s-printed-t-shirts-222989-1562397727.jpg'),
(7, 'War God T-shirt', 449, 'men', 'https://images.bewakoof.com/t540/war-god-half-sleeve-t-shirt-men-s-printed-t-shirts-216725-1557906199.jpg'),
(8, 'Beyond Limits T-shirt', 399, 'men', 'https://images.bewakoof.com/t540/beyond-limits-half-sleeve-t-shirt-men-s-printed-t-shirts-208645-1547621441.jpg'),
(9, 'Alan Walker T-shirt', 499, 'men', 'https://images.bewakoof.com/t540/dj-aln-wkr-half-sleeve-t-shirt-men-s-printed-t-shirts-214829-1554789483.jpg'),
(10, 'Dream big T-shirt', 399, 'men', 'https://images.bewakoof.com/t540/dream-big-sideways-half-sleeve-t-shirt-men-s-printed-t-shirts-218955-1560408736.jpg'),
(11, 'Marshmellow T-shirt', 499, 'men', 'https://images.bewakoof.com/t540/the-mrsmlw-dj-half-sleeve-t-shirt-men-s-printed-t-shirts-222137-1561808498.jpg'),
(12, 'One Man army T-shirt', 449, 'men', 'https://images.bewakoof.com/t540/one-man-army-half-sleeve-t-shirt-men-s-printed-t-shirts-205702-1545221422.jpg'),
(13, 'Be-you-tiful T-shirt', 225, 'women', 'https://images.bewakoof.com/t540/be-beautiful-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-215420-1556003954.jpg'),
(14, 'Captain America Tshirt', 399, 'women', 'https://images.bewakoof.com/t540/striped-captain-america-boyfriend-t-shirt-avl-women-s-printed-boyfriend-t-shirts-215344-1555672771.jpg'),
(15, 'Stop reading T-Shirt', 399, 'women', 'https://images.bewakoof.com/t540/stop-reading-this-boyfriend-t-shirt-women-s-printed-boyfriend-t-shirts-222980-1562396104.jpg'),
(16, 'IDK.IDC T-shirt', 499, 'women', 'https://images.bewakoof.com/t540/shinchan-idk-idc-boyfriend-t-shirt-shl-women-s-printed-boyfriend-t-shirts-216748-1558074769.jpg'),
(17, 'Brick Red Flared Dress', 499, 'women', 'https://images.bewakoof.com/t540/brick-red-flared-dress-women-s-plain-flared-dress-218329-1561698273.jpg'),
(18, 'Floral Print Shift Dress', 449, 'women', 'https://assets.ajio.com/medias/sys_master/root/h0d/hb5/13403044249630/harpa_beige_shift_floral_print_shift_dress_with_sleeve_tie-ups.jpg'),
(19, 'Meteor Grey Dress', 449, 'women', 'https://images.bewakoof.com/t540/meteor-grey-flared-dress-women-s-plain-flared-dress-211956-1561789622.jpg'),
(20, 'Leaf Print Dress', 799, 'women', 'https://assets.ajio.com/medias/sys_master/root/h47/h53/13375606292510/the_vanca_pink_a-line_leaf_print_a-line_maxi_dress_.jpg'),
(21, 'Vintage Orange Croptop', 499, 'women', 'https://images.bewakoof.com/t540/vintage-orange-crop-top-women-s-plain-cap-sleeve-crop-top-210031-1556009965.jpg'),
(22, 'Mustard yellow sweatshirt', 399, 'women', 'https://images.bewakoof.com/t540/mustard-yellow-sweatshirt-women-s-plain-crewneck-sweatshirts-aw18-202677-1554206699.jpg'),
(23, 'Jet Black Full Sleeve T-Shirt', 499, 'women', 'https://images.bewakoof.com/t540/jet-black-scoop-neck-full-sleeve-t-shirt-women-s-plain-scoop-neck-full-sleeve-t-shirt-210590-1551176439.jpg'),
(24, 'Minimal Believe Full Sleeve T-Shirt', 449, 'women', 'https://images.bewakoof.com/t540/minimal-believe-scoop-neck-full-sleeve-t-shirt-women-s-printed-scoop-neck-full-sleeve-t-shirt-213809-1554184060.jpg'),
(25, 'Magic-in-you Red T-shirt', 499, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2844911a.webp'),
(26, 'Babyoye Polo Neck Cotton T Shirt', 499, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2752193a.webp'),
(27, 'Dads man Full Sleeves T-Shirt', 399, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2845047a.webp'),
(28, 'No volume Control Full T-shirt', 499, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2886010a.webp'),
(29, 'Pink Floral print Girls Frock', 699, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2842560a.webp'),
(30, 'Pink Checks Shift Frocks', 749, 'kids', 'https://cdn.fcglcdn.com/brainbees/images/products/438x531/2726648a.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `register_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `register_time`) VALUES
(1, 'USER1', 'user@xyz.com', 'b1734c3c466b3ddcdd3b841d02a24b56', 9012345678, 'Delhi', '26, B- block, New Friends Colony, New Delhi', '2019-07-21 14:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 13, 'cofirmed'),
(2, 1, 18, 'cofirmed'),
(3, 1, 6, 'Added to cart'),
(4, 1, 10, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

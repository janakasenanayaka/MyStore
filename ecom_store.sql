-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 01:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` text NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` varchar(100) NOT NULL,
  `admin_about` varchar(300) NOT NULL,
  `admin_contact` text NOT NULL,
  `admin_job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'janaka', 'senanayakajanaka48@gmail.com', 'janaka6891717', 'amaya web house.jpg', 'sri lanka', 'About Me\r\nThis application is created by Amaya Web House, if you willing to contact me, please click this link.\r\nAmaya Web House\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus', '0716891717', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(10, '::1', 1, 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(2, 'Women', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(3, 'Kids', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(4, ' girlls', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `customers_name` varchar(100) NOT NULL,
  `customers_email` text NOT NULL,
  `customers_pass` varchar(100) NOT NULL,
  `customers_country` varchar(100) NOT NULL,
  `customers_city` varchar(100) NOT NULL,
  `customers_contact` text NOT NULL,
  `customers_address` varchar(255) NOT NULL,
  `customers_image` varchar(300) NOT NULL,
  `customers_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_name`, `customers_email`, `customers_pass`, `customers_country`, `customers_city`, `customers_contact`, `customers_address`, `customers_image`, `customers_ip`) VALUES
(2, 'Janaka Senanayake', 'senanayakajanaka48@gmail.com', '59c027d191c09c7ad5a0babd983ca3f1', 'Sri Lanka', '-benthota', '0716891717', 'elakaka,haburugala', '20200825_111519.jpg', '::1'),
(3, 'chamini gaya kumari', 'chamini@gmail.com', 'fa6d139ae8e977f784a0018143cda2a0', 'Sri Lanka', '-benthota', '0713070687', 'elakaka,haburugala', '20210106_151321.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_ammount` int(11) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_ammount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(10, 12, 300, 128577116, 1, 'Medium', '2021-07-20', 'pending'),
(11, 12, 500, 128577116, 1, 'Small', '2021-07-20', 'pending'),
(12, 13, 2500, 836648840, 1, 'Medium', '2021-07-20', 'pending'),
(13, 13, 500, 836648840, 1, 'Small', '2021-07-20', 'pending'),
(14, 13, 750, 836648840, 1, 'Small', '2021-07-20', 'pending'),
(15, 13, 200, 836648840, 1, 'Large', '2021-07-20', 'pending'),
(16, 2, 300, 1715590659, 1, 'Medium', '2021-07-25', 'pending'),
(17, 2, 500, 1715590659, 1, 'Small', '2021-07-25', 'pending'),
(18, 2, 500, 1839212683, 1, 'Small', '2021-07-25', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(15, 12, 128577116, 14, 1, 'Small', 'pending'),
(16, 13, 836648840, 8, 1, 'Medium', 'pending'),
(17, 13, 836648840, 9, 1, 'Small', 'pending'),
(18, 13, 836648840, 10, 1, 'Small', 'pending'),
(19, 13, 836648840, 11, 1, 'Large', 'pending'),
(20, 2, 1715590659, 12, 1, 'Medium', 'pending'),
(21, 2, 1715590659, 14, 1, 'Small', 'pending'),
(22, 2, 1839212683, 14, 1, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_lable` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_lable`) VALUES
(7, 3, 1, '2021-07-27 11:49:46', 'product first', 'product_2', 'High Heels Women Pantofel Brukat-1.jpg', '', '', 2500, 'shoes', '<p>best</p>', 'sale'),
(8, 4, 1, '2021-07-27 11:50:12', 'men coates black colour', 'product_5', 'Man-Polo-1.jpg', '', '', 2500, 'nem coates', '<p>best quility</p>', ''),
(9, 1, 3, '2021-07-27 11:49:38', 'baby jackets', 'product_1', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 500, 'baby jackets', '<p>baby jackets very beautiful</p>', 'sale'),
(10, 1, 2, '2021-07-27 11:50:47', 'ladies jackets', 'product_7', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 750, 'ladies jackets', '<p>ladies jackets ghjvjhgghfhgchgf</p>', ''),
(11, 2, 1, '2021-07-27 11:50:41', 'men belt', 'product_6', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 200, 'men belt', '<p>very strong</p>', ''),
(12, 3, 2, '2021-07-27 11:50:05', 'ladeas shoes', 'product_4', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 300, 'ladeas shoes', '<p>best quelity</p>', 'new'),
(13, 2, 2, '2021-07-27 11:50:56', 'ladies watch', 'product_8', 'women-diamond-heart-ring-3.jpg', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 500, 'ladies watch', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Natus cum tempora aliquam ullam iusto? Architecto veniam quam quia, aliquid recusandae optio alias, mollitia cumque quis quo incidunt nulla ut cupiditate.</p>', ''),
(14, 2, 3, '2021-07-27 11:49:55', 'hijab kids', 'product_3', 'hijab-anak-1.jpg', 'hijab-anak-2.jpg', 'hijab-anak-3.jpg', 500, 'hijab kids', '<p>bla bla</p>', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'jackets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(2, ' watchs', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!</p>'),
(3, 'shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(4, 'Coats', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consectetur odio excepturi unde obcaecati asperiores, iste quam quo quia, eveniet dolorem corrupti, aut vero expedita consequuntur velit ipsa quis, esse!'),
(6, 'blouses', '<p>fcjhvhgcjgcjgchgchg</p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `slider_url`) VALUES
(7, 'slider number 1', 'slider-number-9.jpg', ''),
(8, 'slider number 2', 'slider-number-10.jpg', ''),
(9, 'slider number 3', 'slider-number-11.jpg', ''),
(11, 'slider number 4', 'slider-number-15.jpg', 'testurl.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

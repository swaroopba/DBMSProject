-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 03:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigbasket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aname` varchar(20) NOT NULL,
  `apass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aname`, `apass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `billingdetails`
--

CREATE TABLE `billingdetails` (
  `billno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `billamt` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `cardno` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billingdetails`
--

INSERT INTO `billingdetails` (`billno`, `username`, `billamt`, `bank`, `cardno`, `cvv`, `phno`, `address`, `city`) VALUES
(7, 'swaroop', '860', 'SBI', '123456789', '345', '12345', 'mallathalli', 'bangalore'),
(8, 'swaroop', '1360', 'ICICI', '12324232', '234', '4947595', 'belur', 'karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `categorise`
--

CREATE TABLE `categorise` (
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorise`
--

INSERT INTO `categorise` (`category`, `subcategory`) VALUES
('fruits', 'apple'),
('fruits', 'mango'),
('fruits', 'banana'),
('fruits', 'orange'),
('fruits', 'grapes'),
('vegetables', 'tomato'),
('vegetables', 'potato'),
('vegetables', 'brinjal'),
('vegetables', 'onion'),
('vegetables', 'capsicum'),
('cereals', 'rice'),
('cereals', 'wheat'),
('cereals', 'barley'),
('cereals', 'ragi'),
('cereals', 'jowar');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phno`, `email`, `subject`, `message`) VALUES
('abc', '23344', 'abcdef@gmail.com', 'regarding issues', 'plz try to improve '),
('saas', 'saass', 'asx', 'cscd', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `category` varchar(10) NOT NULL,
  `subcategory` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `itemcode` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`category`, `subcategory`, `image`, `itemcode`, `price`, `quantity`, `description`) VALUES
('fruits', 'apple', 'C:xampp	mpphp58CC.tmp', 'a1', '100', '239', 'green apple'),
('fruits', 'apple', 'C:xampp	mpphpEBEB.tmp', 'a2', '130', '200', 'red delicious'),
('fruits', 'apple', 'C:xampp	mpphpA75D.tmp', 'a3', '150', '260', 'royal delicious'),
('fruits', 'banana', 'C:xampp	mpphp828B.tmp', 'b1', '48', '240', 'cavendish'),
('fruits', 'banana', 'C:xampp	mpphp2738.tmp', 'b2', '54', '279', 'elakki-banana'),
('fruits', 'banana', 'C:xampp	mpphpC1F2.tmp', 'b3', '38', '380', 'red banana'),
('cereals', 'barley', 'C:xampp	mpphp7276.tmp', 'ba1', '43', '550', 'azad'),
('cereals', 'barley', 'C:xampp	mpphp9685.tmp', 'ba2', '41', '600', 'ratna'),
('vegetables', 'brinjal', 'C:xampp	mpphpF0A3.tmp', 'br1', '30', '280', 'barbarella'),
('vegetables', 'brinjal', 'C:xampp	mpphpC9B9.tmp', 'br2', '38', '300', 'black nadia'),
('vegetables', 'brinjal', 'C:xampp	mpphp504A.tmp', 'br3', '48', '270', 'machiaw'),
('vegetables', 'brinjal', 'C:xampp	mpphp2CD1.tmp', 'br4', '42', '320', 'nubia'),
('vegetables', 'capsicum', 'C:xampp	mpphpC227.tmp', 'c1', '26', '150', 'green capsicum'),
('vegetables', 'capsicum', 'C:xampp	mpphpD605.tmp', 'c3', '14', '120', 'purple capsicum'),
('vegetables', 'capsicum', 'C:xampp	mpphpAD2D.tmp', 'c4', '16', '150', 'red capsicum'),
('vegetables', 'capsicum', 'C:xampp	mpphp67B4.tmp', 'c5', '22', '150', 'white capsicum'),
('fruits', 'grapes', 'C:xampp	mpphp5C39.tmp', 'g1', '78', '200', 'black grapes'),
('fruits', 'grapes', 'C:xampp	mpphp7268.tmp', 'g2', '82', '190', 'green grapes'),
('cereals', 'jowar', 'C:xampp	mpphp19A7.tmp', 'jo1', '20', '300', 'yummy'),
('fruits', 'mango', 'C:xampp	mpphpE6FD.tmp', 'm1', '600', '290', 'alphanso'),
('fruits', 'mango', 'C:xampp	mpphp2D0B.tmp', 'm2', '98', '250', 'badami'),
('fruits', 'mango', 'C:xampp	mpphp154.tmp', 'm3', '110', '250', 'raspuri'),
('fruits', 'mango', 'C:xampp	mpphp9DB4.tmp', 'm4', '120', '200', 'totapuri'),
('fruits', 'orange', 'C:xampp	mpphp9250.tmp', 'o1', '60', '400', 'blood orange'),
('fruits', 'orange', 'C:xampp	mpphp78B9.tmp', 'o2', '68', '350', 'pomelo'),
('fruits', 'orange', 'C:xampp	mpphp4B2D.tmp', 'o3', '74', '350', 'round orange'),
('fruits', 'orange', 'C:xampp	mpphp6558.tmp', 'o4', '78', '400', 'satsuma'),
('vegetables', 'onions', 'C:xampp	mpphp7AB6.tmp', 'on1', '32', '380', 'red onion'),
('vegetables', 'onions', 'C:xampp	mpphp62D.tmp', 'on3', '32', '250', 'shallot onion'),
('vegetables', 'onions', 'C:xampp	mpphp9742.tmp', 'on4', '42', '480', 'sweet onion'),
('vegetables', 'onions', 'C:xampp	mpphp7474.tmp', 'on5', '46', '420', 'white onion'),
('vegetables', 'potatoes', 'C:xampp	mpphp372D.tmp', 'p1', '22', '520', 'jersy royal'),
('vegetables', 'potatoes', 'C:xampp	mpphpED30.tmp', 'p2', '28', '490', 'russet'),
('vegetables', 'potatoes', 'C:xampp	mpphp7CEE.tmp', 'p3', '18', '420', 'yukon gold'),
('fruits', 'pomegranat', 'C:xampp	mpphpA0EE.tmp', 'po1', '120', '200', 'delicious one'),
('cereals', 'rice', 'C:xampp	mpphpD02D.tmp', 'r1', '120', '900', 'basmati'),
('cereals', 'rice', 'C:xampp	mpphp7FA3.tmp', 'r2', '60', '1020', 'broken rice'),
('cereals', 'rice', 'C:xampp	mpphpBB86.tmp', 'r3', '83', '800', 'brown rice'),
('cereals', 'rice', 'C:xampp	mpphpDB3A.tmp', 'r4', '130', '1050', 'rajamudi'),
('cereals', 'ragi', 'C:xampp	mpphp91B7.tmp', 'rg1', '48', '900', 'black ragi'),
('cereals', 'ragi', 'C:xampp	mpphp5DC3.tmp', 'rg2', '32', '680', 'ragi red'),
('vegetables', 'tomatoes', 'C:xampp	mpphpA20E.tmp', 't2', '28', '370', 'cherry tomato'),
('vegetables', 'tomatoes', 'C:xampp	mpphpD214.tmp', 't4', '22', '400', 'salad tomato'),
('cereals', 'wheat', 'C:xampp	mpphpD174.tmp', 'w1', '40', '1500', 'durum'),
('cereals', 'wheat', 'C:xampp	mpphpDFD8.tmp', 'w2', '72', '1200', 'khorasan'),
('cereals', 'wheat', 'C:xampp	mpphpC9CB.tmp', 'w3', '78', '1110', 'spelt');

-- --------------------------------------------------------

--
-- Table structure for table `kart`
--

CREATE TABLE `kart` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `phno`, `email`, `address`) VALUES
('swaroop', 'swaroop', '155655', 'abc@gmail.com', 'bangalore'),
('veeresh', 'veeresh', '123456', 'veeresh@gmail.com', 'mysore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingdetails`
--
ALTER TABLE `billingdetails`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemcode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`password`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billingdetails`
--
ALTER TABLE `billingdetails`
  MODIFY `billno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

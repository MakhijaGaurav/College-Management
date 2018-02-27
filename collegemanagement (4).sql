-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 08:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_lab`
--

CREATE TABLE `assign_lab` (
  `id` int(11) NOT NULL,
  `lab_number` varchar(255) NOT NULL,
  `lab_work` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `assigned_by` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_lab`
--

INSERT INTO `assign_lab` (`id`, `lab_number`, `lab_work`, `class`, `time`, `assigned_by`, `assigned_to`) VALUES
(2, '101', '', 'CM 3rd Year', '21-10-2018 09:00am ', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `branch`) VALUES
(1, 'Sagar', 'sagar@gmail.com', 1234567890, 'Please ', '');

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `assigned_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`id`, `title`, `description`, `day`, `time`, `assigned_to`, `assigned_by`) VALUES
(1, 'Lecture', 'Please take Lecture in D10 SE CO ', 'Today', '3rd Lecture', '', ''),
(4, 'Seminar', 'Please bring your class students to seminar hall ', 'Wednesday', '1 st lecture', '', ''),
(7, 'Urgent Meeting', 'Please bring all the critical defaulters of your class to room 504', 'Saturday', 'First Break', '3', '1'),
(8, 'Meeting', 'Please arrange Parents Teacher Meet and inform students and parents', 'Saturdat', '1st Lecture 9:15am', '1', '1'),
(9, 'Meeting', 'Please arrange Parents Teacher Meet and inform students and parents', 'Saturdat', '1st Lecture 9:15am', '1', '1'),
(10, 'Lab hygiene', 'Please Maintain your Labs  before 20th May', 'Friday', 'Test Day', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `first_year_tt`
--

CREATE TABLE `first_year_tt` (
  `id` int(11) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year_tt`
--

INSERT INTO `first_year_tt` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
(1, 'Testing With Staff', 'SPR', 'Java', 'qwerty', 'OS', 'OS'),
(2, 'Maths', 'OS', 'PHP', 'CSS', 'SPR', 'Java'),
(3, 'Maths', 'OS', 'PHP', 'CSS', 'SPR', 'Java'),
(4, 'Maths', 'OS', 'PHP', 'CSS', 'SPR', 'Java'),
(5, 'Maths', 'OS', 'PHP', 'CSS', 'SPR', 'Java'),
(6, 'ST', 'CHM', 'C', 'C++', 'PHP', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `name`, `email`, `branch`, `password`) VALUES
(1, 'Avinash', 'test@gmail.com', 'CO', '12345'),
(2, 'Bindu ', 'bindu@gmail.com', 'CM', '12345'),
(3, 'Vidya', 'vidya@gmail.com', 'EXTC', '12345'),
(4, 'amit', 'amit@gmail.com', 'IT', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `lab_type` varchar(255) NOT NULL,
  `lab_incharge` varchar(255) NOT NULL,
  `lab_assistant` varchar(255) NOT NULL,
  `lab_product` varchar(255) NOT NULL,
  `lab_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `lab_type`, `lab_incharge`, `lab_assistant`, `lab_product`, `lab_no`) VALUES
(1, 'Technical', 'Rawat', 'Joshi', '12 Computers', 501),
(2, 'Physics', 'Roopa Patel', 'Satish', 'Scales, Metere, Unit Products', 102),
(3, 'Chemistry', 'Santosh Mulye', 'Anirudh', 'Scales, Chemicals, Acids, Measure meters', 306);

-- --------------------------------------------------------

--
-- Table structure for table `lab_assistant`
--

CREATE TABLE `lab_assistant` (
  `id` int(11) NOT NULL,
  `Assistant_name` varchar(255) NOT NULL,
  `assistant_lab` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assistant_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_assistant`
--

INSERT INTO `lab_assistant` (`id`, `Assistant_name`, `assistant_lab`, `email`, `assistant_username`, `password`, `branch`, `mobile`) VALUES
(1, 'Bhavesh', '501 Android Lab', 'bhavesh@gmail.com', 'bhavesh', '12345', 'CM', 123456789),
(2, 'nayan', '206 Network Lab', 'nayan@gmail.com', '', '12345', 'EXTC', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `lab_duty`
--

CREATE TABLE `lab_duty` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `assigned_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_duty`
--

INSERT INTO `lab_duty` (`id`, `title`, `description`, `day`, `time`, `assigned_to`, `assigned_by`) VALUES
(0, 'Test', 'Test', 'Test', 'Test', '2', '1'),
(0, 'Test', 'Test', 'Test', 'Test', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `title`, `description`, `day`, `time`) VALUES
(1, 'KT STUDENTS', '', '', ''),
(2, 'KT STUDENTS', '', '', ''),
(3, 'Testing', 'Please Fill up AI FORM', 'Wednesday', '3:00pm'),
(4, 'Testing', 'Please Fill up AI FORM', 'Wednesday', '3:00pm'),
(5, 'Testing', 'Please Fill up AI FORM', 'Wednesday', '3:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `image`, `content`) VALUES
(1, 'Testing', 'Jellyfish.jpg', 'JellyFish'),
(2, 'Urgent Meeting', '', 'Please be in 502 as soon as possible');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `principal_username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `principal_name`, `principal_username`, `email`, `password`, `branch`) VALUES
(1, 'Vikrant Joshi', '', 'vikrant@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_mrp` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `belongs_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_brand`, `product_name`, `product_qty`, `product_mrp`, `branch`, `belongs_to`) VALUES
(1, 'abcd', 'abc', 4, 340, '', 'Lab 508'),
(2, 'abcd', 'abc', 4, 340, '', 'Lab 301'),
(3, 'abcd', 'abc', 4, 340, '', 'Lab 209'),
(5, 'Volini', 'Ranbaxy', 25, 100, '', 'Lab 101'),
(6, 'qwerty', 'Test', 20, 500, '', 'Lab 508'),
(7, 'Ranbaxy', 'Acid', 4, 1234, '', 'Lab 301');

-- --------------------------------------------------------

--
-- Table structure for table `second_year_tt`
--

CREATE TABLE `second_year_tt` (
  `id` int(11) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_year_tt`
--

INSERT INTO `second_year_tt` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
(1, 'Demo Test', 'Controller', 'Graphics', 'Create mail', 'Demo', 'Android'),
(2, 'Demo Lecture', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture'),
(3, 'Demo Lecture Entry', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture', 'Demo Lecture ENtry'),
(4, 'Updated Now', 'Data Entry ', 'Data Entry ', 'Data Entry ', 'Data Entry ', 'Data Entry '),
(5, 'Test lecture', 'Test lecture', 'Test lecture', 'Test lecture', 'Test lecture', 'Test lecture'),
(6, 'Data Test', 'Data Test', 'Data Test', 'Data Test', 'Data Test', 'Data Test');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `branch`, `mobile`) VALUES
(1, 'Sagar', 'Sagar@gmail.com', 'CM', '0987654321'),
(2, 'Avidra', 'avi@gmail.com', 'CO', '1234509876');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `teacher_mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `teacher_graduation` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `username`, `teacher_mobile`, `email`, `teacher_graduation`, `password`, `branch`) VALUES
(1, 'Piyush', 'piyush123', 1234567890, 'piyush@gmail.com', 'BE', '12345', 'CO'),
(2, 'Sanjay', '', 1234567890, 'sanjay@ves.ac.in', 'ME', '12345', 'CO'),
(3, 'Jaishree', '', 1234567890, 'js@gmail.com', 'BE, \r\nBE,MBA', '12345', 'CO'),
(4, 'Roopkala', '', 1234567890, 'roopkala@gmail.com', 'M.E', '12345', 'CM'),
(5, 'sagar', '', 1234567890, 'sagar@gmail.com', 'MBA', '12345', 'IT'),
(6, 'ranveer singh', '', 1234567890, 'ranveer@gmail.com', 'DIPLOMA', '12345', 'EXTC');

-- --------------------------------------------------------

--
-- Table structure for table `third_year_tt`
--

CREATE TABLE `third_year_tt` (
  `id` int(11) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_year_tt`
--

INSERT INTO `third_year_tt` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
(1, 'Lecture1', 'Lecture1', 'Lecture1', 'Lecture1', 'Lecture1', 'Lecture1'),
(2, 'Lecture2', '', 'Lecture2', 'Lecture2', 'Lecture2', 'Lecture2'),
(3, 'Lecture3', 'Lecture3', 'Lecture3', 'Lecture3', 'Lecture3', 'Lecture3'),
(4, 'Lecture4', 'Lecture4', 'Lecture4', 'Lecture4', 'Lecture4', 'Lecture4'),
(5, 'Demo5', 'Demo5', 'Demo5', 'L5Thu', 'Demo5', 'Demo5'),
(6, 'LecDem', 'Demo6', 'Demo6', 'Demo6', 'Demo6', 'Demo6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_lab`
--
ALTER TABLE `assign_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_year_tt`
--
ALTER TABLE `first_year_tt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_assistant`
--
ALTER TABLE `lab_assistant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `second_year_tt`
--
ALTER TABLE `second_year_tt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `third_year_tt`
--
ALTER TABLE `third_year_tt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_lab`
--
ALTER TABLE `assign_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `first_year_tt`
--
ALTER TABLE `first_year_tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_assistant`
--
ALTER TABLE `lab_assistant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `second_year_tt`
--
ALTER TABLE `second_year_tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `third_year_tt`
--
ALTER TABLE `third_year_tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

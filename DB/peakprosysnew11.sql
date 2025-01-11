-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 02:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u126463643_peakprosysnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_applications`
--

CREATE TABLE `career_applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_applications`
--

INSERT INTO `career_applications` (`id`, `name`, `contact`, `dob`, `education`, `college`, `experience`, `skills`, `resume`) VALUES
(1, 'Devang Rajendra Shah', '7219514324', '2024-09-02', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(2, 'Devang Rajendra Shah', '7219514324', '2024-09-02', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(3, 'Devang Rajendra Shah', '7219514324', '2024-09-02', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(4, 'Devang Rajendra Shah', '7219514324', '2024-09-02', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(5, 'Devang Rajendra Shah', '7219514324', '2024-09-03', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'C:/xampp/htdocs/PeakProSysNew1(edited)/PeakProSysNew1/uploads/Devang Shah_Resume.pdf'),
(6, 'Devang Rajendra Shah', '7219514324', '2024-10-01', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(7, 'Devang Rajendra Shah', '7219514324', '2024-10-01', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(8, 'Devang Rajendra Shah', '7219514324', '2024-10-01', 'MCA', 'PeakProSys', 'Fresher', 'C, SQL, HTML, CSS, JavaScript, Java, Spring, Bootstrap, Angular', 'uploads/Devang Shah_Resume.pdf'),
(9, 'Nakul Khandelwal', '9876543210', '2024-10-03', 'be', 'sinhgad', 'fresher', 'Core Java, Css, Html, Java Script, Angular', 'uploads/nakul khandelwal cv resume .pdf'),
(10, 'Nakul Khandelwal', '5641358876', '2024-10-05', 'be', 'sinhgad', 'fresher', 'Core Java, Css, Html, Java Script, Angular', 'uploads/nakul khandelwal cv resume .pdf'),
(11, 'Nakul Khandelwal', '9876543210', '2002-10-20', 'be', 'KBJIIT', 'fresher', 'java', 'uploads/nakul khandelwal cv resume .pdf'),
(12, 'Nakul Khandelwal', '5641358876', '2024-10-12', 'be', 'sinhgad', 'fresher', 'java', 'uploads/CV_2024082022211564.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `course_inquiries`
--

CREATE TABLE `course_inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` int(3) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_inquiries`
--

INSERT INTO `course_inquiries` (`id`, `name`, `email`, `country_code`, `contact`, `message`, `created_at`) VALUES
(14, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', 91, '9876543210', 'gygyfft', '2024-10-16 09:18:44'),
(15, 'priyanka', 'khandelwalaniket9923@gmail.com', 91, '9876543210', 'heyy priyaa here', '2024-10-16 09:20:20'),
(16, 'Harshit khandelwal', 'nakulkhandelwal18@gmail.com', 91, '9876543210', 'gytgiyu', '2024-10-16 11:21:55'),
(17, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', 91, '5641358876', 'heyyy', '2024-10-17 08:15:51'),
(18, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', 91, '9876543210', 'hey its nakul', '2024-10-18 06:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `contact`, `message`, `created_at`) VALUES
(8, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', '09890314682', 'hetdgdg', '2024-10-16 09:08:39'),
(9, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', '09890314682', 'gggh', '2024-10-16 09:18:12'),
(10, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', '09890314682', 'hello', '2024-10-16 09:19:29'),
(11, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', '09890314682', 'jhjhjh', '2024-10-16 11:21:22'),
(12, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', '09890314682', 'hhh', '2024-10-18 10:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` int(3) NOT NULL,
  `contact` int(10) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `country_code`, `contact`, `message`, `created_at`) VALUES
(11, 'NAKUL DINESH KHANDELWAL ', 'nakulkhandelwal18@gmail.com', 91, 2147483647, 'hey its nakul here', '2024-10-16 09:13:41'),
(12, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', 91, 2147483647, 'hello', '2024-10-16 09:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_reg`
--

CREATE TABLE `workshop_reg` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `workshop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workshop_reg`
--

INSERT INTO `workshop_reg` (`id`, `name`, `email`, `phone`, `workshop`) VALUES
(11, 'Nakul Khandelwal', 'nakulkhandelwal18@gmail.com', 2147483647, 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career_applications`
--
ALTER TABLE `career_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_inquiries`
--
ALTER TABLE `course_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career_applications`
--
ALTER TABLE `career_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_inquiries`
--
ALTER TABLE `course_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

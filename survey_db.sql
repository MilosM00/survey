-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2025 at 09:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `survey_question_1` varchar(255) NOT NULL,
  `survey_question_2` varchar(255) NOT NULL,
  `survey_question_3` varchar(255) NOT NULL,
  `survey_question_4` varchar(255) NOT NULL,
  `survey_question_5` varchar(255) NOT NULL,
  `survey_question_6` varchar(255) NOT NULL,
  `survey_question_7` varchar(255) NOT NULL,
  `survey_question_8` varchar(255) NOT NULL,
  `survey_question_9` varchar(255) NOT NULL,
  `survey_question_10` varchar(255) NOT NULL,
  `survey_question_11` varchar(255) NOT NULL,
  `survey_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_question_1`, `survey_question_2`, `survey_question_3`, `survey_question_4`, `survey_question_5`, `survey_question_6`, `survey_question_7`, `survey_question_8`, `survey_question_9`, `survey_question_10`, `survey_question_11`, `survey_date`) VALUES
(1, 'I am very dissatisfied with the quality of the service I am using.', 'I am dissatisfied with the professionalism and helpfulness of the technical support administrator.', 'I am neutral about the quality, technical expertise and responses received from the administrators I spoke with.', 'I am satisfied with the speed of problem solving by tech support.', 'I have never used the services of the Call Center of Eagle before.', 'I am very unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'No, after the intervention the service did not work as expected, the problem was not fully resolved.', 'No, I would certainly not renew my cooperation with Eagle after the expiration of the User Agreement.', '8', 'EMPTY', '2025-09-17 20:08:27'),
(2, 'I am very dissatisfied with the quality of the service I am using.', 'I am very dissatisfied with the professionalism and helpfulness of the technical support administrator.', 'I am very dissatisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am very unsatisfied with the speed of problem solving by tech support.', 'I never solve the problem / get the requested answer after contacting the technical support of Eagle.', 'I am very unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am very dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'Yes, after the intervention the service worked as expected, without problems.', 'Yes, I would most likely renew my cooperation with Eagle after the end of the User Agreement.', '2', 'Question 11', '2025-09-17 20:10:08'),
(3, 'I am very dissatisfied with the quality of the service I am using.', 'I am dissatisfied with the professionalism and helpfulness of the technical support administrator.', 'I am satisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am satisfied with the speed of problem solving by tech support.', 'I have never used the services of the Call Center of Eagle before.', 'I am unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am very dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'Yes, after the intervention the service worked as expected, but there were minor problems.', 'Maybe after the expiration of the User Agreement, I would renew my cooperation with Eagle.', '9', 'EMPTY', '2025-09-21 16:21:15'),
(4, 'I am satisfied with the quality of the service I am using.', 'I am very satisfied with the professionalism and helpfulness of the technical support administrator.', 'I am very satisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am very satisfied with the speed of problem solving by tech support.', 'I never solve the problem / get the requested answer after contacting the technical support of Eagle.', 'I am very unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am very dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'Yes, after the intervention the service worked as expected, without problems.', 'Yes, I would most likely renew my cooperation with Eagle after the end of the User Agreement.', '10', 'EMPTY', '2025-09-21 16:21:34'),
(5, 'I am very dissatisfied with the quality of the service I am using.', 'I am very dissatisfied with the professionalism and helpfulness of the technical support administrator.', 'I am very dissatisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am very unsatisfied with the speed of problem solving by tech support.', 'I never solve the problem / get the requested answer after contacting the technical support of Eagle.', 'I am very unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am very dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'Yes, after the intervention the service worked as expected, without problems.', 'Yes, I would most likely renew my cooperation with Eagle after the end of the User Agreement.', '1', 'EMPTY', '2025-09-21 16:32:18'),
(6, 'I am dissatisfied with the quality of the service I am using.', 'I am dissatisfied with the professionalism and helpfulness of the technical support administrator.', 'I am dissatisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am unsatisfied with the speed of problem solving by tech support.', 'I rarely solve the problem / get the requested answer after contacting the technical support of Eagle.', 'I am unsatisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am dissatisfied with the professionalism and expertise of the technician who performed the intervention.', 'Yes, after the intervention the service worked as expected, but there were minor problems.', 'Maybe after the expiration of the User Agreement, I would renew my cooperation with Eagle.', '7', 'This is text', '2025-09-21 16:32:36'),
(7, 'I am neutral about the quality of the service I am using.', 'I am neutral about the professionalism and helpfulness of the technical support administrator.', 'I am neutral about the quality, technical expertise and responses received from the administrators I spoke with.', 'I am neutral about the speed of problem solving by tech support.', 'I solve the problem / get the requested answer after contacting the technical support of Eagle, but it takes a long time.', 'I am neutral about the speed of the technician\'s intervention and the speed of the work on site.', 'I am neutral about the professionalism and expertise of the technician who performed the intervention.', 'No, after the intervention the service did not work as expected, the problem was not fully resolved.', 'No, I would certainly not renew my cooperation with Eagle after the expiration of the User Agreement.', '10', 'EMPTY', '2025-09-21 16:32:59'),
(8, 'I am very satisfied with the quality of the service I am using.', 'I am very satisfied with the professionalism and helpfulness of the technical support administrator.', 'I am very satisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am very satisfied with the speed of problem solving by tech support.', 'I have never used the services of the Call Center of Eagle before.', 'I am very satisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am very satisfied with the professionalism and expertise of the technician who performed the intervention.', 'No, after the intervention the service did not work as expected, the problem is still present.', 'No, I would certainly not renew my cooperation with Eagle after the expiration of the User Agreement.', '10', 'EMPTY', '2025-09-21 16:33:24'),
(9, 'I am satisfied with the quality of the service I am using.', 'I am satisfied with the professionalism and helpfulness of the technical support administrator.', 'I am satisfied with the quality, technical expertise and responses received from the administrators I spoke with.', 'I am satisfied with the speed of problem solving by tech support.', 'I solve the problem / get the requested answer after contacting the technical support of Eagle, but it takes a long time.', 'I am satisfied with the speed of the technician\'s intervention and the speed of the work on site.', 'I am satisfied with the professionalism and expertise of the technician who performed the intervention.', 'No, after the intervention the service did not work as expected, the problem was not fully resolved.', 'No, I would certainly not renew my cooperation with Eagle after the expiration of the User Agreement.', '7', 'EMPTY', '2025-09-21 16:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'john', '$2y$10$X0E8RNAIe3kquTNoA6.lUOuR6WEoWSZZjKa5mrIcxU1cF6MyvPcxa'),
(2, 'nick', '$2y$10$UfjvXfqerpFSdeTRruX.bu3.Q7cvFH/097JcgatHLFC0nyOed5nWS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

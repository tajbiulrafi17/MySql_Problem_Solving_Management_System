-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 05:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problem_solving_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`) VALUES
('admin', '123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `Contest_id` int(11) NOT NULL,
  `Contest_name` varchar(255) DEFAULT NULL,
  `Contest_host` int(11) DEFAULT NULL,
  `Contest_winner` int(11) DEFAULT NULL,
  `Contest_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`Contest_id`, `Contest_name`, `Contest_host`, `Contest_winner`, `Contest_date`) VALUES
(7001, 'Codeforces DIV-1', 101, 21002, '2015-06-20'),
(7002, 'UVA contest 2015', 103, 21003, '2015-06-19'),
(7003, 'HackerRank 2016', 105, 21001, '2016-08-10'),
(7005, 'Codeforces DIV-3', 101, 21001, '2016-04-15'),
(7006, 'CodeChef dinner 2017', 104, 21001, '2017-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `User` int(11) NOT NULL,
  `Friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`User`, `Friend`) VALUES
(21001, 21002),
(21001, 21003),
(21001, 21005),
(21001, 21009),
(21002, 21001),
(21002, 21003),
(21002, 21005),
(21003, 21001),
(21003, 21002),
(21003, 21005),
(21005, 21001),
(21005, 21002),
(21005, 21003),
(21005, 21006),
(21005, 21008),
(21005, 21009),
(21005, 21011),
(21005, 21013),
(21005, 21017),
(21006, 21005),
(21006, 21007),
(21006, 21008),
(21006, 21011),
(21006, 21012),
(21007, 21006),
(21007, 21008),
(21007, 21011),
(21007, 21012),
(21008, 21005),
(21008, 21006),
(21008, 21012),
(21009, 21005),
(21011, 21005),
(21011, 21012),
(21012, 21007),
(21012, 21011),
(21013, 21005),
(21013, 21014),
(21013, 21016),
(21014, 21013),
(21014, 21015),
(21014, 21016),
(21015, 21014),
(21015, 21017),
(21016, 21013),
(21016, 21014),
(21017, 21005),
(21017, 21015),
(21019, 21013);

-- --------------------------------------------------------

--
-- Table structure for table `online_judge_info`
--

CREATE TABLE `online_judge_info` (
  `Online_judge_id` int(11) NOT NULL,
  `Online_judge_name` varchar(255) DEFAULT NULL,
  `Online_judge_rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_judge_info`
--

INSERT INTO `online_judge_info` (`Online_judge_id`, `Online_judge_name`, `Online_judge_rank`) VALUES
(101, 'Codeforces', 1),
(102, 'TopCoder', 2),
(103, 'UVa Online Judge', 3),
(104, 'CodeChef', 4),
(105, 'HackerRank', 5),
(106, 'Virtual Jugde', 12),
(107, 'URI Online Jugde', 13),
(110, 'CoderBoss', 15);

-- --------------------------------------------------------

--
-- Table structure for table `participated`
--

CREATE TABLE `participated` (
  `Contest_id` int(11) NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participated`
--

INSERT INTO `participated` (`Contest_id`, `User`) VALUES
(7001, 21001),
(7001, 21002),
(7001, 21003),
(7001, 21005),
(7001, 21006),
(7001, 21014),
(7001, 21015),
(7001, 21016),
(7001, 21017),
(7002, 21001),
(7002, 21002),
(7002, 21003),
(7002, 21007),
(7002, 21008),
(7002, 21009),
(7002, 21014),
(7002, 21015),
(7002, 21016),
(7002, 21017),
(7003, 21001),
(7003, 21002),
(7003, 21003),
(7003, 21005),
(7003, 21006),
(7003, 21007),
(7003, 21013),
(7003, 21014),
(7003, 21015),
(7003, 21016),
(7003, 21017),
(7003, 21019),
(7005, 21001),
(7005, 21002),
(7005, 21003),
(7005, 21005),
(7005, 21007),
(7005, 21009),
(7005, 21013),
(7005, 21014),
(7005, 21015),
(7005, 21017),
(7006, 21001),
(7006, 21003),
(7006, 21005),
(7006, 21006),
(7006, 21007),
(7006, 21008),
(7006, 21013),
(7006, 21014),
(7006, 21015),
(7006, 21016),
(7006, 21017),
(7006, 21019);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `Problem_id` int(11) NOT NULL,
  `Problem_judge` int(11) DEFAULT NULL,
  `Problem_category` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`Problem_id`, `Problem_judge`, `Problem_category`) VALUES
(99001, 101, 'A'),
(99002, 101, 'A'),
(99005, 101, 'B'),
(99006, 101, 'C'),
(99007, 101, 'C'),
(99008, 106, 'D'),
(99009, 101, 'D'),
(99010, 106, 'A'),
(99011, 106, 'B'),
(99012, 101, 'E'),
(99013, 101, 'F'),
(99014, 101, 'E'),
(99015, 101, 'F'),
(99016, 101, 'E'),
(99017, 102, 'A'),
(99018, 102, 'B'),
(99019, 102, 'C'),
(99020, 102, 'A'),
(99021, 102, 'B'),
(99022, 102, 'D'),
(99023, 102, 'E'),
(99024, 103, 'C'),
(99025, 103, 'B'),
(99026, 104, 'C'),
(99027, 103, 'C'),
(99028, 103, 'B'),
(99029, 103, 'D'),
(99030, 103, 'F'),
(99031, 103, 'D'),
(99032, 103, 'E'),
(99033, 104, 'F'),
(99034, 104, 'E'),
(99035, 104, 'A'),
(99036, 104, 'B'),
(99037, 105, 'C'),
(99038, 105, 'A'),
(99039, 105, 'B'),
(99040, 105, 'D'),
(99041, 105, 'E'),
(99045, 110, 'A'),
(99046, 110, 'B'),
(99047, 110, 'B'),
(99049, 110, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

CREATE TABLE `solved` (
  `Problem_id` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `Solving_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solved`
--

INSERT INTO `solved` (`Problem_id`, `User`, `Solving_date`) VALUES
(99001, 21001, '2014-07-10'),
(99001, 21002, '2013-08-12'),
(99001, 21003, '2015-09-21'),
(99001, 21005, '2019-05-29'),
(99001, 21006, '2018-09-15'),
(99001, 21007, '2018-08-05'),
(99001, 21008, '2020-01-19'),
(99001, 21009, '2018-07-19'),
(99001, 21013, '2019-03-18'),
(99001, 21016, '2018-07-19'),
(99001, 21017, '2013-08-12'),
(99002, 21001, '2014-06-17'),
(99002, 21005, '2019-06-01'),
(99002, 21013, '2020-05-15'),
(99002, 21014, '2018-02-25'),
(99002, 21015, '2016-05-15'),
(99002, 21019, '2021-01-12'),
(99005, 21001, '2014-08-05'),
(99005, 21002, '2013-08-12'),
(99005, 21003, '2015-08-12'),
(99005, 21005, '2019-06-05'),
(99005, 21017, '2013-08-12'),
(99006, 21001, '2014-06-19'),
(99006, 21002, '2014-08-21'),
(99006, 21003, '2015-11-15'),
(99007, 21005, '2019-07-17'),
(99009, 21001, '2014-07-13'),
(99012, 21001, '2015-05-19'),
(99012, 21017, '2017-07-15'),
(99013, 21007, '2019-05-26'),
(99014, 21001, '2015-07-11'),
(99014, 21007, '2019-09-16'),
(99015, 21001, '2016-07-23'),
(99017, 21001, '2015-03-24'),
(99017, 21003, '2016-08-05'),
(99017, 21006, '2019-11-02'),
(99018, 21001, '2015-01-24'),
(99018, 21006, '2018-11-14'),
(99018, 21014, '2017-12-18'),
(99019, 21003, '2016-10-12'),
(99019, 21009, '2020-04-05'),
(99019, 21017, '2016-10-12'),
(99020, 21002, '2014-08-23'),
(99020, 21005, '2019-09-05'),
(99020, 21014, '2019-09-05'),
(99021, 21002, '2015-09-07'),
(99022, 21002, '2015-09-08'),
(99022, 21006, '2019-09-22'),
(99023, 21006, '2018-10-15'),
(99024, 21001, '2016-09-12'),
(99024, 21003, '2017-07-15'),
(99024, 21009, '2019-02-11'),
(99024, 21016, '2019-02-11'),
(99025, 21003, '2018-05-23'),
(99025, 21005, '2020-01-06'),
(99025, 21008, '2020-07-14'),
(99025, 21013, '2020-07-19'),
(99025, 21014, '2018-01-06'),
(99025, 21015, '2017-06-19'),
(99025, 21017, '2020-01-06'),
(99027, 21001, '2017-10-05'),
(99027, 21005, '2018-02-05'),
(99028, 21001, '2016-10-05'),
(99028, 21005, '2020-06-05'),
(99028, 21008, '2020-04-05'),
(99029, 21007, '2020-01-29'),
(99029, 21009, '2020-07-14'),
(99029, 21016, '2016-01-29'),
(99030, 21007, '2020-02-12'),
(99030, 21016, '2016-02-12'),
(99031, 21001, '2017-02-02'),
(99032, 21003, '2017-08-12'),
(99033, 21003, '2017-08-22'),
(99034, 21002, '2016-11-04'),
(99034, 21015, '2018-11-04'),
(99035, 21002, '2016-11-03'),
(99035, 21005, '2020-02-15'),
(99035, 21006, '2020-03-30'),
(99035, 21016, '2017-02-15'),
(99038, 21005, '2020-04-25'),
(99038, 21008, '2020-02-11'),
(99039, 21006, '2019-02-25'),
(99039, 21014, '2019-05-14'),
(99040, 21001, '2018-04-18'),
(99040, 21002, '2017-01-12'),
(99040, 21015, '2016-01-12'),
(99041, 21002, '2017-01-15'),
(99041, 21017, '2020-02-15'),
(99047, 21005, '2021-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `User_email` varchar(255) DEFAULT NULL,
  `User_password` varchar(255) DEFAULT NULL,
  `User_institute` varchar(255) DEFAULT NULL,
  `User_country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `User_name`, `User_email`, `User_password`, `User_institute`, `User_country`) VALUES
(21001, 'Sakib', 'sakib@gmail.com', 'sakib123', 'NSU', 'BD'),
(21002, 'Aminul', 'aminul@gmail.com', 'aminul123', 'NSU', 'BD'),
(21003, 'Akash', 'akash@gmail.com', 'akash123', 'NSU', 'BD'),
(21005, 'Rafi', 'rafi@gmail.com', 'rafi123', 'NSU', 'BD'),
(21006, 'Joy', 'joy@gmail.com', 'joy123', 'AIUB', 'BD'),
(21007, 'Bayzid', 'bayzid@gmail.com', 'bayzid123', 'AIUB', 'BD'),
(21008, 'Shujon', 'shujon@gmail.com', 'shujon123', 'BRAC', 'BD'),
(21009, 'Abesh', 'abesh@gmail.com', 'abesh123', 'BRAC', 'BD'),
(21011, 'Sabbir', 'sabbir@gmail.com', 'sabbir123', 'IUB', 'BD'),
(21012, 'Ashraf', 'ashraf@gmail.com', 'ashraf123', 'SEU', 'BD'),
(21013, 'Himel', 'himel@gmail.com', 'himel123', 'EWU', 'BD'),
(21014, 'John', 'john@gmail.com', 'john123', 'Harvard', 'USA'),
(21015, 'Harry', 'harry@gmail.com', 'harry123', 'Cambridge', 'UK'),
(21016, 'Celine', 'celine@gmail.com', 'celine123', 'Stanford', 'USA'),
(21017, 'Mary', 'mary@gmail.com', 'mary123', 'Oxford', 'UK'),
(21019, 'Tajbiul', 'taj@gmail.com', 'taj123', 'NSU', 'BD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`Contest_id`),
  ADD KEY `contests_fk1` (`Contest_host`),
  ADD KEY `contests_fk2` (`Contest_winner`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`User`,`Friend`),
  ADD KEY `friends_fk2` (`Friend`);

--
-- Indexes for table `online_judge_info`
--
ALTER TABLE `online_judge_info`
  ADD PRIMARY KEY (`Online_judge_id`);

--
-- Indexes for table `participated`
--
ALTER TABLE `participated`
  ADD PRIMARY KEY (`Contest_id`,`User`),
  ADD KEY `particioated_fk2` (`User`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`Problem_id`),
  ADD KEY `problems_fk` (`Problem_judge`);

--
-- Indexes for table `solved`
--
ALTER TABLE `solved`
  ADD PRIMARY KEY (`Problem_id`,`User`),
  ADD KEY `solved_fk2` (`User`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `Contest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7018;

--
-- AUTO_INCREMENT for table `online_judge_info`
--
ALTER TABLE `online_judge_info`
  MODIFY `Online_judge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `Problem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99050;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21025;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contests`
--
ALTER TABLE `contests`
  ADD CONSTRAINT `contests_fk1` FOREIGN KEY (`Contest_host`) REFERENCES `online_judge_info` (`Online_judge_id`),
  ADD CONSTRAINT `contests_fk2` FOREIGN KEY (`Contest_winner`) REFERENCES `user_info` (`User_id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_fk1` FOREIGN KEY (`User`) REFERENCES `user_info` (`User_id`),
  ADD CONSTRAINT `friends_fk2` FOREIGN KEY (`Friend`) REFERENCES `user_info` (`User_id`);

--
-- Constraints for table `participated`
--
ALTER TABLE `participated`
  ADD CONSTRAINT `particioated_fk2` FOREIGN KEY (`User`) REFERENCES `user_info` (`User_id`),
  ADD CONSTRAINT `participated_fk1` FOREIGN KEY (`Contest_id`) REFERENCES `contests` (`Contest_id`);

--
-- Constraints for table `problems`
--
ALTER TABLE `problems`
  ADD CONSTRAINT `problems_fk` FOREIGN KEY (`Problem_judge`) REFERENCES `online_judge_info` (`Online_judge_id`);

--
-- Constraints for table `solved`
--
ALTER TABLE `solved`
  ADD CONSTRAINT `solved_fk1` FOREIGN KEY (`Problem_id`) REFERENCES `problems` (`Problem_id`),
  ADD CONSTRAINT `solved_fk2` FOREIGN KEY (`User`) REFERENCES `user_info` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

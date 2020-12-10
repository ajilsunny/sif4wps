-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:18 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banks`
--

CREATE TABLE `tbl_banks` (
  `bank_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `ifsc_code` text DEFAULT NULL,
  `cbuae_routing_code` text DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banks`
--

INSERT INTO `tbl_banks` (`bank_id`, `bank_name`, `branch`, `account_number`, `ifsc_code`, `cbuae_routing_code`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'SBI', NULL, NULL, 'For SBI', '8040201020', 1, '2020-11-25 11:12:03', '2020-11-28 10:03:37'),
(2, 'Federal Bank', NULL, NULL, 'For Federal', '8040201032', 1, '2020-11-25 11:31:34', '2020-11-28 10:03:28'),
(3, 'Axis', NULL, NULL, 'For AXIS', '804020105', 1, '2020-11-25 11:32:23', '2020-11-28 10:03:12'),
(8, 'ICICI', NULL, NULL, NULL, '852964525', 3, '2020-11-28 08:20:21', '2020-11-28 08:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `WPS_employer_id` text DEFAULT NULL,
  `company_name` text NOT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `email_id` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `contact_person` text DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `WPS_employer_id`, `company_name`, `address`, `phone`, `mobile`, `email_id`, `website`, `contact_person`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, '1451', 'Company 1', 'Kannur', '0490-2420669', '8593967684', 'company@company.com', 'www.company.com', 'Ajil Sunny', 'company1', 'df655f976f7c9d3263815bd981225cd9', '2020-11-25 06:05:58', '2020-11-26 02:15:10'),
(2, '1452', 'Company 2', NULL, NULL, NULL, NULL, NULL, NULL, 'company2', 'd196a28097115067fefd73d25b0c0be8', '2020-11-25 11:59:48', '2020-11-25 11:59:48'),
(3, '1453', 'Company3', '', '', '', '', '', '', 'Company3', 'b64ed1b567f4acc30be648d5a3e5ec1f', '2020-11-26 03:21:46', '2020-11-26 03:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` bigint(20) UNSIGNED NOT NULL,
  `emp_name` text DEFAULT NULL,
  `LRA_emp_id` text DEFAULT NULL,
  `agent_routing_code` text DEFAULT NULL,
  `emp_account_no` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `LRA_emp_id`, `agent_routing_code`, `emp_account_no`, `salary`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Ajil Sunny', '103058001111', '987456321', '11740100106648', '20000', 1, '2020-11-26 05:27:52', '2020-11-26 05:47:23'),
(3, 'Amal Sunny', '153058001111', '987456321', '85209637410852963852852', '10000', 1, '2020-11-26 05:47:38', '2020-11-26 05:47:38'),
(4, 'Ashil Sunny', '253058001111', '987456321', '85209637410852963852856', '15000', 1, '2020-11-26 08:11:50', '2020-11-26 10:55:13'),
(14, 'Sunny John', '10125', '25896', '58632488966548', '25000', 1, '2020-11-28 06:12:40', '2020-11-28 06:12:40'),
(15, 'Sanjay', '15845', '68121626', '4585456666', '35000', 1, '2020-11-28 06:12:40', '2020-11-28 06:12:40'),
(16, 'appu', 'sdfddfd2345', '987456366', '852967416', '10000', 3, '2020-11-28 08:21:09', '2020-11-28 08:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest_sif_log`
--

CREATE TABLE `tbl_guest_sif_log` (
  `guest_log_id` bigint(20) UNSIGNED NOT NULL,
  `WPS_Employee_ID` text DEFAULT NULL,
  `cbuae_routing_code` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_entry`
--

CREATE TABLE `tbl_salary_entry` (
  `salary_entry_id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `first_date` date DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `fixed_salary_component` double DEFAULT NULL,
  `variable_salary_component` double DEFAULT NULL,
  `no_of_leave_days` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_salary_entry`
--

INSERT INTO `tbl_salary_entry` (`salary_entry_id`, `year`, `month`, `first_date`, `last_date`, `no_of_days`, `employee_id`, `fixed_salary_component`, `variable_salary_component`, `no_of_leave_days`, `company_id`, `created_at`, `updated_at`) VALUES
(3, 2020, 11, '2020-11-01', '2020-11-30', 30, 1, 20000, 10, 3, 1, '2020-11-26 07:58:47', '2020-11-26 09:24:29'),
(5, 2020, 11, '2020-11-01', '2020-11-30', 30, 4, 15000, 200, 1, 1, '2020-11-26 08:12:09', '2020-11-27 02:07:09'),
(6, 2020, 11, '2020-11-01', '2020-11-30', 30, 3, 10000, 100, 2, 1, '2020-11-26 08:29:20', '2020-11-26 08:29:20'),
(7, 2020, 12, '2020-12-01', '2020-12-31', 31, 16, 10000, 0, 0, 3, '2020-11-28 08:21:26', '2020-11-28 08:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sif_log`
--

CREATE TABLE `tbl_sif_log` (
  `SIF_log_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sif_log`
--

INSERT INTO `tbl_sif_log` (`SIF_log_id`, `company_id`, `bank_id`, `file_name`, `salary`, `timestamp`) VALUES
(1, 1, 1, '0000000001451201127141300.SIF', '{\"1\":\"20000\"}', '2020-11-27 08:43:00'),
(2, 1, 2, '0000000001451201127141359.SIF', '{\"1\":\"20000\",\"4\":\"15000\",\"3\":\"10000\"}', '2020-11-27 08:43:00'),
(3, 1, 3, '0000000001451201128073708.SIF', '{\"1\":\"20000\",\"4\":\"15000\"}', '2020-11-28 02:07:00'),
(4, 1, 2, '0000000001451201128083600.SIF', '{\"1\":\"20000\",\"4\":\"15000\",\"3\":\"10000\"}', '2020-11-28 03:06:00'),
(5, 3, 8, '0000000001453201128135943.SIF', '{\"16\":\"10000\"}', '2020-11-28 08:29:00'),
(6, 1, 2, '0000000001451201128153522.SIF', '{\"1\":\"20000\",\"4\":\"15000\",\"3\":\"10000\"}', '2020-11-28 10:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `bank_id` (`bank_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_id` (`company_id`),
  ADD UNIQUE KEY `WPS_employer_id` (`WPS_employer_id`) USING HASH;

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`),
  ADD UNIQUE KEY `emp_account_no` (`emp_account_no`) USING HASH;

--
-- Indexes for table `tbl_guest_sif_log`
--
ALTER TABLE `tbl_guest_sif_log`
  ADD UNIQUE KEY `guest_log_id` (`guest_log_id`);

--
-- Indexes for table `tbl_salary_entry`
--
ALTER TABLE `tbl_salary_entry`
  ADD PRIMARY KEY (`salary_entry_id`),
  ADD UNIQUE KEY `salary_entry_id` (`salary_entry_id`);

--
-- Indexes for table `tbl_sif_log`
--
ALTER TABLE `tbl_sif_log`
  ADD PRIMARY KEY (`SIF_log_id`),
  ADD UNIQUE KEY `SIF_log_id` (`SIF_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  MODIFY `bank_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `emp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_guest_sif_log`
--
ALTER TABLE `tbl_guest_sif_log`
  MODIFY `guest_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_entry`
--
ALTER TABLE `tbl_salary_entry`
  MODIFY `salary_entry_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_sif_log`
--
ALTER TABLE `tbl_sif_log`
  MODIFY `SIF_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

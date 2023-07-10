-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekakhir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site admin'),
(2, 'user', 'site user'),
(3, 'dosen', 'site dosen'),
(4, 'prodi', 'site prodi'),
(5, 'mahasiswa', 'site mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id` bigint(255) NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`id`, `group_id`, `user_id`) VALUES
(4, 1, 12),
(3, 2, 11),
(5, 2, 13),
(6, 2, 14),
(7, 2, 15),
(8, 2, 20),
(9, 2, 21),
(10, 2, 22),
(11, 2, 23),
(12, 2, 24),
(13, 2, 25),
(14, 2, 26),
(15, 2, 29),
(16, 2, 30),
(17, 2, 31);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'dinda123', NULL, '2022-07-12 11:43:50', 0),
(2, '::1', 'dinda123', NULL, '2022-07-12 11:46:07', 0),
(3, '::1', 'dnabilaa112', NULL, '2022-07-12 11:46:13', 0),
(4, '::1', 'dnabilaa', NULL, '2022-07-12 11:46:20', 0),
(5, '::1', 'dnabilaa', NULL, '2022-07-12 11:46:52', 0),
(6, '::1', 'putripratamisari@gmail.com', 3, '2022-07-12 11:48:19', 0),
(7, '::1', 'wtfss', 3, '2022-07-12 12:09:07', 0),
(8, '::1', 'dinda123', NULL, '2022-07-12 12:09:13', 0),
(9, '::1', 'dnabilaa@student.telkomuniversity.ac.id', 5, '2022-07-12 12:51:44', 1),
(10, '::1', 'wtfss', NULL, '2022-07-13 22:07:17', 0),
(11, '::1', 'wtfss', 3, '2022-07-13 22:07:25', 0),
(12, '::1', 'dinda123', NULL, '2022-07-13 22:07:34', 0),
(13, '::1', 'haechan@gmail.com', 7, '2022-07-13 22:08:48', 1),
(14, '::1', 'haechan@gmail.com', 7, '2022-07-13 22:21:28', 1),
(15, '::1', 'haechan@gmail.com', 7, '2022-07-13 22:31:31', 1),
(16, '::1', 'haechan@gmail.com', 7, '2022-07-13 22:40:55', 1),
(17, '::1', 'haechan@gmail.com', 7, '2022-07-13 23:04:47', 1),
(18, '::1', 'haechan@gmail.com', 7, '2022-07-14 01:15:47', 1),
(19, '::1', 'dinda123', NULL, '2022-07-14 01:54:01', 0),
(20, '::1', 'haechan@gmail.com', 7, '2022-07-14 13:07:05', 1),
(21, '::1', 'haechan@gmail.com', 7, '2022-07-14 23:31:46', 1),
(22, '::1', 'haechan@gmail.com', 7, '2022-07-15 03:40:20', 1),
(23, '::1', 'haechan@gmail.com', 7, '2022-07-17 14:31:01', 1),
(24, '::1', 'haechan@gmail.com', 7, '2022-07-18 09:11:24', 1),
(25, '::1', 'haechan@gmail.com', 7, '2022-07-18 09:11:25', 1),
(26, '::1', 'haechan112', NULL, '2022-07-18 11:55:36', 0),
(27, '::1', 'dinda123', NULL, '2022-07-18 11:55:40', 0),
(28, '::1', 'haechan@gmail.com', 7, '2022-07-18 11:55:48', 1),
(29, '::1', 'haechan@gmail.com', 7, '2022-07-18 13:07:07', 1),
(30, '::1', 'dinda123', NULL, '2022-07-18 20:39:40', 0),
(31, '::1', 'haechan@gmail.com', 7, '2022-07-18 20:39:48', 1),
(32, '::1', 'haechan@gmail.com', 7, '2022-07-19 02:58:20', 1),
(33, '::1', 'haechan@gmail.com', 7, '2022-07-19 09:20:55', 1),
(34, '::1', 'haechan@gmail.com', 7, '2022-07-20 01:05:27', 1),
(35, '::1', 'haechan@gmail.com', 7, '2022-07-23 04:51:09', 1),
(36, '::1', 'haechan@gmail.com', 7, '2022-07-23 04:51:09', 1),
(37, '::1', 'admin123', NULL, '2022-07-23 13:59:50', 0),
(38, '::1', 'haechan@gmail.com', 7, '2022-07-23 14:05:01', 1),
(39, '::1', 'haechan@gmail.com', 7, '2022-07-23 14:05:03', 1),
(40, '::1', 'haechan112', NULL, '2022-07-24 04:58:12', 0),
(41, '::1', 'haechan@gmail.com', 7, '2022-07-24 04:58:23', 1),
(42, '::1', 'haechan@gmail.com', 7, '2022-07-26 07:22:36', 1),
(43, '::1', 'haechan@gmail.com', 7, '2022-07-26 13:24:34', 1),
(44, '::1', 'haechan@gmail.com', 7, '2022-07-27 03:03:05', 1),
(45, '::1', 'haechan@gmail.com', 7, '2022-07-27 21:13:51', 1),
(46, '::1', 'haechan@gmail.com', 7, '2022-07-27 23:53:50', 1),
(47, '::1', 'ihsan@gmail.com', 8, '2022-07-28 03:00:38', 1),
(48, '::1', 'ihsan@gmail.com', 8, '2022-07-28 03:59:24', 1),
(49, '::1', 'ihsan@gmail.com', 8, '2022-07-28 04:10:40', 1),
(50, '::1', 'ihsan@gmail.com', 8, '2022-07-28 04:17:08', 1),
(51, '::1', 'ihsan@gmail.com', 8, '2022-07-28 22:55:15', 1),
(52, '::1', 'ihsan@gmail.com', 8, '2022-07-28 23:14:19', 1),
(53, '::1', 'spio@gmail.com', 9, '2022-07-29 04:53:52', 1),
(54, '::1', 'spio@gmail.com', 9, '2022-07-29 04:57:50', 1),
(55, '::1', 'spio@gmail.com', 9, '2022-07-29 04:59:02', 1),
(56, '::1', 'spio@gmail.com', 9, '2022-07-29 05:00:46', 1),
(57, '::1', 'spio2@gmail.com', 10, '2022-07-29 05:01:06', 1),
(58, '::1', 'spio@gmail.com', 9, '2022-07-29 08:24:20', 1),
(59, '::1', 'spio2@gmail.com', 10, '2022-07-29 08:25:14', 1),
(60, '::1', 'spio', NULL, '2022-07-29 08:41:03', 0),
(61, '::1', 'spio@gmail.com', 9, '2022-07-29 08:41:13', 1),
(62, '::1', 'test@gmail.com', 11, '2022-07-29 08:44:39', 1),
(63, '::1', 'test@gmail.com', 11, '2022-07-29 08:45:04', 1),
(64, '::1', 'test@gmail.com', 11, '2022-07-29 08:45:19', 1),
(65, '::1', 'test@gmail.com', 11, '2022-07-29 08:45:43', 1),
(66, '::1', 'test@gmail.com', 11, '2022-07-29 08:46:15', 1),
(67, '::1', 'admin@gmail.com', 12, '2022-07-29 08:47:49', 1),
(68, '::1', 'test@gmail.com', 11, '2022-07-29 08:49:11', 1),
(69, '::1', 'admin@gmail.com', 12, '2022-07-29 15:42:51', 1),
(70, '::1', 'admin@gmail.com', 12, '2022-08-02 09:49:50', 1),
(71, '::1', 'admin@gmail.com', 12, '2022-08-03 00:06:58', 1),
(72, '::1', 'admin@gmail.com', 12, '2022-08-07 09:11:47', 1),
(73, '::1', 'admin@gmail.com', 12, '2022-08-08 00:27:22', 1),
(74, '::1', 'admin@gmail.com', 12, '2022-08-08 09:37:29', 1),
(75, '::1', 'admin@gmail.com', 12, '2022-08-09 17:37:30', 1),
(76, '::1', 'dnabila0703@gmail.com', 13, '2022-08-18 02:56:41', 1),
(77, '::1', 'admin@gmail.com', 12, '2022-08-18 21:32:09', 1),
(78, '::1', 'admin', NULL, '2022-08-18 21:40:21', 0),
(79, '::1', 'admin', NULL, '2022-08-18 21:40:34', 0),
(80, '::1', 'admin@gmail.com', 12, '2022-08-18 21:40:45', 1),
(81, '::1', 'admin@gmail.com', 12, '2022-08-18 21:44:03', 1),
(82, '::1', 'admin@gmail.com', 12, '2022-08-18 22:30:15', 1),
(83, '::1', 'putri@gmail.com', 14, '2022-08-19 09:40:32', 1),
(84, '::1', 'marklee@gmail.com', 15, '2022-08-19 09:46:02', 1),
(85, '::1', 'wtf', NULL, '2022-08-19 10:31:30', 0),
(86, '::1', 'marklee@gmail.com', 15, '2022-08-19 10:31:41', 1),
(87, '::1', 'marklee@gmail.com', 15, '2022-08-19 11:05:42', 1),
(88, '::1', 'marklee@gmail.com', 15, '2022-08-20 02:19:37', 1),
(89, '::1', 'marklee@gmail.com', 15, '2022-08-20 02:52:37', 1),
(90, '::1', 'marklee@gmail.com', 15, '2022-08-20 03:12:37', 1),
(91, '::1', 'marklee@gmail.com', 15, '2022-08-21 01:27:54', 1),
(92, '::1', 'marklee@gmail.com', 15, '2022-08-21 01:37:41', 1),
(93, '::1', 'putri', NULL, '2022-08-21 01:41:04', 0),
(94, '::1', 'putri@gmail.com', 14, '2022-08-21 01:41:11', 1),
(95, '::1', 'putri@gmail.com', 14, '2022-08-21 01:55:23', 1),
(96, '::1', 'marklee', NULL, '2022-08-21 02:05:44', 0),
(97, '::1', 'marklee@gmail.com', 15, '2022-08-21 02:05:52', 1),
(98, '::1', 'putri@gmail.com', 14, '2022-08-21 02:06:23', 1),
(99, '::1', 'admin@gmail.com', 12, '2022-08-21 07:57:46', 1),
(100, '::1', 'marklee@gmail.com', 15, '2022-08-21 08:41:19', 1),
(101, '::1', 'marklee@gmail.com', 15, '2022-08-23 01:09:59', 1),
(102, '::1', 'marklee@gmail.com', 15, '2022-08-23 01:10:00', 1),
(103, '::1', 'admin@gmail.com', 12, '2022-08-23 11:50:13', 1),
(104, '::1', 'marklee@gmail.com', 15, '2022-08-23 11:53:55', 1),
(105, '::1', 'marklee@gmail.com', 15, '2022-08-23 11:53:58', 1),
(106, '::1', 'dinda123', NULL, '2022-12-20 01:32:43', 0),
(107, '::1', 'admin', NULL, '2022-12-20 01:32:55', 0),
(108, '::1', 'admin', NULL, '2022-12-20 01:33:15', 0),
(109, '::1', 'admin', NULL, '2022-12-20 01:33:23', 0),
(110, '::1', 'admin', NULL, '2022-12-20 01:40:13', 0),
(111, '::1', 'dinda123', NULL, '2022-12-20 01:40:22', 0),
(112, '::1', 'admin', NULL, '2022-12-20 01:42:17', 0),
(113, '::1', 'admin', NULL, '2022-12-20 01:42:37', 0),
(114, '::1', 'dnabila07@gmail.com', 16, '2022-12-20 01:44:00', 1),
(115, '::1', 'admin', NULL, '2023-03-07 09:30:32', 0),
(116, '::1', 'admin', NULL, '2023-03-27 10:09:56', 0),
(117, '::1', 'admin', NULL, '2023-05-02 10:15:10', 0),
(118, '::1', 'admin', NULL, '2023-05-02 10:23:22', 0),
(119, '::1', 'admin', NULL, '2023-05-02 10:23:33', 0),
(120, '::1', 'admin', NULL, '2023-05-02 10:24:01', 0),
(121, '::1', 'admin', NULL, '2023-05-02 10:26:37', 0),
(122, '::1', 'admin', NULL, '2023-05-02 10:26:54', 0),
(123, '::1', 'admin@gmail.com', NULL, '2023-05-02 10:27:05', 0),
(124, '::1', 'admin@gmail.com', NULL, '2023-05-02 10:27:21', 0),
(125, '::1', 'admin', NULL, '2023-05-02 10:27:56', 0),
(126, '::1', 'admin', NULL, '2023-05-02 10:28:14', 0),
(127, '::1', 'pembeli1', NULL, '2023-05-02 10:29:50', 0),
(128, '::1', 'admin', NULL, '2023-05-02 10:31:17', 0),
(129, '::1', 'admin', NULL, '2023-05-02 10:31:52', 0),
(130, '::1', 'admin', NULL, '2023-05-02 10:33:01', 0),
(131, '::1', 'admin', NULL, '2023-05-02 10:33:19', 0),
(132, '::1', 'admin', NULL, '2023-05-02 10:34:07', 0),
(133, '::1', 'admin', NULL, '2023-05-02 10:34:31', 0),
(134, '::1', 'admin', NULL, '2023-05-02 10:36:58', 0),
(135, '::1', 'admin', NULL, '2023-05-02 10:37:03', 0),
(136, '::1', 'admin', NULL, '2023-05-02 10:37:38', 0),
(137, '::1', 'admin', NULL, '2023-05-02 10:37:50', 0),
(138, '::1', 'admin@gmail.com', NULL, '2023-05-02 10:40:21', 0),
(139, '::1', 'admin', NULL, '2023-05-02 10:40:37', 0),
(140, '::1', 'admin', NULL, '2023-05-02 10:43:32', 0),
(141, '::1', 'admin', NULL, '2023-05-02 10:45:33', 0),
(142, '::1', 'admin', NULL, '2023-05-02 10:46:11', 0),
(143, '::1', 'admin', NULL, '2023-05-02 10:48:06', 0),
(144, '::1', 'admin', NULL, '2023-05-02 10:48:14', 0),
(145, '::1', 'admin', NULL, '2023-05-02 10:49:30', 0),
(146, '::1', 'admin', NULL, '2023-05-02 10:49:35', 0),
(147, '::1', 'admin', NULL, '2023-05-02 10:50:23', 0),
(148, '::1', 'admin', NULL, '2023-05-02 10:50:26', 0),
(149, '::1', 'admin', NULL, '2023-05-02 10:50:29', 0),
(150, '::1', 'admin', NULL, '2023-05-02 10:50:58', 0),
(151, '::1', 'admin', NULL, '2023-05-02 10:51:25', 0),
(152, '::1', 'isa1234', 19, '2023-05-02 10:58:42', 0),
(153, '::1', 'isa@gmail.com', 19, '2023-05-02 11:00:40', 1),
(154, '::1', 'admin@gmail.com', 12, '2023-05-02 11:02:52', 1),
(155, '::1', 'admin@gmail.com', 12, '2023-05-02 11:27:20', 1),
(156, '::1', 'admin@gmail.com', 12, '2023-05-02 12:49:19', 1),
(157, '::1', 'admin', NULL, '2023-05-02 14:49:54', 0),
(158, '::1', 'admin', NULL, '2023-05-02 14:50:09', 0),
(159, '::1', 'admin', NULL, '2023-05-02 14:50:28', 0),
(160, '::1', 'isa1234', NULL, '2023-05-02 14:50:54', 0),
(161, '::1', 'admin', NULL, '2023-05-02 14:52:02', 0),
(162, '::1', 'admin', NULL, '2023-05-02 14:52:22', 0),
(163, '::1', 'admin', NULL, '2023-05-02 14:52:38', 0),
(164, '::1', 'admin@gmail.com', NULL, '2023-05-02 14:53:50', 0),
(165, '::1', 'admin@gmail.com', 12, '2023-05-02 15:15:01', 1),
(166, '::1', 'admin@gmail.com', 12, '2023-05-07 13:27:21', 1),
(167, '::1', 'admin@gmail.com', 12, '2023-05-07 13:32:34', 1),
(168, '::1', 'admin@gmail.com', 12, '2023-05-07 18:55:37', 1),
(169, '::1', 'admin@gmail.com', 12, '2023-05-08 10:51:17', 1),
(170, '::1', 'admin@gmail.com', 12, '2023-05-08 19:31:16', 1),
(171, '::1', 'admin@gmail.com', 12, '2023-05-09 15:34:04', 1),
(172, '::1', 'admin@gmail.com', 12, '2023-05-09 18:04:12', 1),
(173, '::1', 'admin@gmail.com', 12, '2023-05-10 18:26:28', 1),
(174, '::1', 'admin@gmail.com', 12, '2023-05-11 10:07:16', 1),
(175, '::1', 'admin@gmail.com', 12, '2023-05-11 13:09:58', 1),
(176, '::1', 'bismillah', 22, '2023-05-11 13:51:11', 0),
(177, '::1', 'admin@gmail.com', 12, '2023-05-11 13:51:20', 1),
(178, '::1', 'admin@gmail.com', 12, '2023-05-11 14:21:35', 1),
(179, '::1', 'admin@gmail.com', 12, '2023-05-11 15:21:15', 1),
(180, '::1', 'admin@gmail.com', 12, '2023-05-11 15:33:11', 1),
(181, '::1', 'admin@gmail.com', 12, '2023-05-11 16:17:42', 1),
(182, '::1', 'admin@gmail.com', 12, '2023-05-11 16:27:13', 1),
(183, '::1', 'admin@gmail.com', 12, '2023-05-11 16:51:08', 1),
(184, '::1', 'admin@gmail.com', 12, '2023-05-12 16:54:36', 1),
(185, '::1', 'admin@gmail.com', 12, '2023-05-12 17:32:02', 1),
(186, '::1', 'admin@gmail.com', 12, '2023-05-12 18:11:11', 1),
(187, '::1', 'admin@gmail.com', 12, '2023-05-12 18:14:23', 1),
(188, '::1', 'admin@gmail.com', 12, '2023-05-12 18:42:16', 1),
(189, '::1', 'admin@gmail.com', 12, '2023-05-12 19:00:53', 1),
(190, '::1', 'admin@gmail.com', 12, '2023-05-12 19:22:51', 1),
(191, '::1', 'admin@gmail.com', 12, '2023-05-12 23:37:52', 1),
(192, '::1', 'admin@gmail.com', 12, '2023-05-13 02:56:51', 1),
(193, '::1', 'admin@gmail.com', 12, '2023-05-13 15:38:47', 1),
(194, '::1', 'admin@gmail.com', 12, '2023-05-14 16:08:55', 1),
(195, '::1', 'admin@gmail.com', 12, '2023-05-15 07:47:01', 1),
(196, '::1', 'admin@gmail.com', 12, '2023-05-15 14:37:42', 1),
(197, '::1', 'admin@gmail.com', 12, '2023-05-15 17:16:24', 1),
(198, '::1', 'admin@gmail.com', 12, '2023-05-16 15:53:09', 1),
(199, '::1', 'admin@gmail.com', 12, '2023-05-22 04:27:39', 1),
(200, '::1', 'admin@gmail.com', 12, '2023-05-26 13:14:33', 1),
(201, '::1', 'admin@gmail.com', 12, '2023-05-29 11:14:59', 1),
(202, '::1', 'admin@gmail.com', 12, '2023-06-10 13:45:35', 1),
(203, '::1', 'admin@gmail.com', 12, '2023-06-10 13:45:49', 1),
(204, '::1', 'admin@gmail.com', 12, '2023-06-11 13:40:53', 1),
(205, '::1', 'admin@gmail.com', 12, '2023-06-13 13:45:53', 1),
(206, '::1', 'ari@gmail.com', 17, '2023-06-13 14:24:05', 1),
(207, '::1', 'ari@gmail.com', 17, '2023-06-13 15:06:45', 1),
(208, '::1', 'admin@gmail.com', 12, '2023-06-13 15:16:37', 1),
(209, '::1', 'ari@gmail.com', 17, '2023-06-13 15:33:39', 1),
(210, '::1', 'admin@gmail.com', 12, '2023-06-13 16:32:12', 1),
(211, '::1', 'ari@gmail.com', 17, '2023-06-13 16:33:05', 1),
(212, '::1', 'ari@gmail.com', 17, '2023-06-13 16:35:12', 1),
(213, '::1', 'admin@gmail.com', 12, '2023-06-13 16:35:43', 1),
(214, '::1', 'ari@gmail.com', 17, '2023-06-13 16:35:53', 1),
(215, '::1', 'admin@gmail.com', 12, '2023-06-13 16:41:03', 1),
(216, '::1', 'ari@gmail.com', 17, '2023-06-13 16:41:34', 1),
(217, '::1', 'ari@gmail.com', 17, '2023-06-16 02:34:12', 1),
(218, '::1', 'ari@gmail.com', 17, '2023-06-16 05:56:27', 1),
(219, '::1', 'ari@gmail.com', 17, '2023-06-17 18:37:22', 1),
(220, '::1', 'admin@gmail.com', 12, '2023-06-18 07:32:56', 1),
(221, '::1', 'ari@gmail.com', 17, '2023-06-18 10:47:56', 1),
(222, '::1', 'ari@gmail.com', 17, '2023-06-18 13:23:46', 1),
(223, '::1', 'admin@gmail.com', 12, '2023-06-18 13:30:18', 1),
(224, '::1', 'ari@gmail.com', 17, '2023-06-18 13:34:00', 1),
(225, '::1', 'admin@gmail.com', 12, '2023-06-18 13:34:47', 1),
(226, '::1', 'admin@gmail.com', 12, '2023-06-18 13:37:34', 1),
(227, '::1', 'ari@gmail.com', 17, '2023-06-18 13:38:48', 1),
(228, '::1', 'ari@gmail.com', 17, '2023-06-18 17:38:35', 1),
(229, '::1', 'admin@gmail.com', 12, '2023-06-18 20:12:28', 1),
(230, '::1', 'admin@gmail.com', 12, '2023-06-21 06:57:32', 1),
(231, '::1', 'ari@gmail.com', 17, '2023-06-21 07:24:25', 1),
(232, '::1', 'admin@gmail.com', 12, '2023-06-21 07:30:43', 1),
(233, '::1', 'admin@gmail.com', 12, '2023-06-21 07:36:35', 1),
(234, '::1', 'admin@gmail.com', 12, '2023-06-21 07:36:42', 1),
(235, '::1', 'ari@gmail.com', 17, '2023-06-21 08:22:44', 1),
(236, '::1', 'admin@gmail.com', 12, '2023-06-21 08:43:47', 1),
(237, '::1', 'admin@gmail.com', 12, '2023-06-21 09:37:21', 1),
(238, '::1', 'admin@gmail.com', 12, '2023-06-21 09:50:07', 1),
(239, '::1', 'admin@gmail.com', 12, '2023-06-21 11:14:25', 1),
(240, '::1', 'donald.anas@gmail.com', NULL, '2023-07-08 14:23:12', 0),
(241, '::1', 'donal.anas@gmail.com', NULL, '2023-07-08 14:24:11', 0),
(242, '::1', 'donal.anas@gmail.com', NULL, '2023-07-08 14:24:17', 0),
(243, '::1', 'admin@gmail.com', 12, '2023-07-08 14:24:56', 1),
(244, '::1', 'trump@gmail.com', 29, '2023-07-08 15:20:24', 1),
(245, '::1', 'ari@gmail.com', 17, '2023-07-08 15:58:33', 1),
(246, '::1', 'ari@gmail.com', 17, '2023-07-08 16:02:47', 1),
(247, '::1', 'ari@gmail.com', 17, '2023-07-08 16:03:10', 1),
(248, '::1', 'ari@gmail.com', 17, '2023-07-08 16:03:58', 1),
(249, '::1', 'admin@gmail.com', 12, '2023-07-08 17:14:38', 1),
(250, '::1', 'ari@gmail.com', 17, '2023-07-08 17:47:17', 1),
(251, '::1', 'ari@gmail.com', 17, '2023-07-08 17:56:36', 1),
(252, '::1', 'admin@gmail.com', 12, '2023-07-10 13:11:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'mengatur semua user'),
(2, 'manage-profile', 'mengatur profil');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'percobaan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', NULL, '2023-05-11 12:21:50'),
(2, 'percobaan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', NULL, '2023-05-11 12:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_telkom` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_gelar` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` longtext DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `user_id`, `prodi_id`, `email_telkom`, `nama`, `nama_gelar`, `nip`, `nidn`, `kode`, `telepon`, `alamat`, `foto`, `jabatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, NULL, 'patrick@telkomuniversity.ac.id', 'Patrick Adolf Telnoni', 'Patrick Adolf Telnoni, S.T., M.T.', '5171', '123123123123', 'PTI', '+6282219287517', 'Denpasar', 'dosen/team-img1.jpg', 'Ketua Lab SI', '2022-08-16 09:34:30', '2023-06-21 00:31:48', NULL),
(2, 3, NULL, NULL, 'Dedy Rahman Wijaya', 'Dr. Dedy Rahman Wijaya, S.T., M.T.', '5172', NULL, 'DRW', '+6282219147349', 'Denpasar', 'dosen/team-img2.jpg', 'Ketua Lab Data Sains', '2022-08-16 09:34:30', '2022-08-16 09:34:30', NULL),
(3, 4, NULL, NULL, 'Hanung Nindito Prasetyo', 'Hanung Nindito Prasetyo, S.Si, M.T.', '5173', NULL, 'HNP', '+6281220599883', 'Denpasar', 'dosen/team-img3.jpg', 'Sistem Analis', '2022-08-16 09:34:30', '2022-08-16 09:34:30', NULL),
(4, 5, NULL, NULL, 'M. Barja Sanjaya', 'M. Barja Sanjaya, S.T., M.T., OCA.', '5174', NULL, 'MBS', '+6281313141120', 'Denpasar', 'dosen/team-img4.jpg', 'Ketua Lab Programming', '2022-08-16 09:34:30', '2022-08-16 09:34:30', NULL),
(5, 6, NULL, NULL, 'Siska Komala Sari', 'Siska Komala Sari, S.T., M.T.', '5175', NULL, 'SKS', '+6281320198038', 'Denpasar', 'dosen/team-img5.jpg', 'Database Engineering', '2022-08-16 09:34:30', '2022-08-16 09:34:30', NULL),
(6, 7, NULL, NULL, 'Wawa Wikusna', 'Wawa Wikusna, S.T., M.Kom.', '5176', NULL, 'WIU', '+6281320604160', 'Denpasar', 'dosen/team-img6.jpg', 'Smart City', '2022-08-16 09:34:30', '2022-08-16 09:34:30', NULL),
(7, 8, NULL, NULL, 'Elis Hernawati', 'Elis Hernawati, S.T., M.Kom.', '5177', NULL, 'ELT', '+6282240035983', 'Denpasar', 'dosen/team-img1.jpg', 'Business Plan', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(8, 9, NULL, NULL, 'Inne Gartina Husein', 'Dr. Inne Gartina Husein, S.Kom., M.T.', '5178', NULL, 'INE', '+6281395096162', 'Denpasar', 'dosen/team-img6.jpg', 'Projek Lab', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(9, 10, NULL, NULL, 'Pramuko Aji', 'Pramuko Aji, S.T., M.T.', '5179', NULL, 'PRA', '+6282180085050', 'Denpasar', 'dosen/team-img6.jpg', 'Programmer', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(10, 11, NULL, NULL, 'Suryatiningsih', 'Suryatiningsih, S.T., M.T., OCA., C.Ht.', '5180', NULL, 'SYN', '+6281320776520', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(11, 12, NULL, NULL, 'Tedi Gunawan', 'Tedi Gunawan, S.T., M.Kom.', '5181', NULL, 'TGN', '+628122199440', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(12, 13, NULL, NULL, 'Pikir Wisnu Wijayanto', 'Dr. Pikir Wisnu Wijayanto, S.E., S.Pd.Ing., M.Hum.', '5182', NULL, 'PWW', '+6285103879393', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(13, 14, NULL, NULL, 'Ely Rosely', 'Ir. Ely Rosely, M.B.S.', '5183', NULL, 'ELR', '+6281513244609', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(14, 15, NULL, NULL, 'Mutia Qana\'a', 'Mutia Qana\'a, S.Psi., M.Psi.', '5184', NULL, 'MQA', '+6285222797846', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(15, 16, NULL, NULL, 'Wahyu Hidayat', 'Wahyu Hidayat, S.T., M.T., OCA.', '5185', NULL, 'WHY', '+6281322072099', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(16, 17, NULL, NULL, 'Robbi Hendriyanto', 'Robbi Hendriyanto, S.T., M.T.', '5186', NULL, 'RHN', '+6282316049294', 'Denpasar', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 09:34:31', '2022-08-16 09:34:31', NULL),
(17, 22, NULL, NULL, 'Olivia Istianah', 'Olivia Istianah Amd.Kom', '1222', NULL, 'opi', '+628131213123', 'Bandung', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 10:53:00', '2022-08-16 10:53:00', NULL),
(18, 23, NULL, NULL, 'Rania Athala', 'Rania Athala Amd.Kom', '1235', NULL, 'tat', '+628121312321', 'Bandung', 'dosen/team-img6.jpg', 'UI/UX', '2022-08-16 10:53:00', '2022-08-16 10:53:00', NULL),
(24, NULL, NULL, 'tiya@telkomuniversity.ac.id', 'Tiya K Izzati', 'Tiya K Izzati, S.T., M.T', '9281309812', '192830', 'TYA', '+6282219141234', 'Bandung', 'dosen/team-img2.jpg', 'UI/UX', '2023-05-26 06:17:06', '2023-05-26 06:17:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `input_mahasiswa`
--

CREATE TABLE `input_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input_mahasiswa`
--

INSERT INTO `input_mahasiswa` (`id`, `nim`, `nama`, `kelas`, `email`, `no_hp`, `nama_lomba`, `kategori`, `bukti`, `created_at`, `updated_at`) VALUES
(14, '6701194062', 'Siti Nurajija21', 'd3si 4501', 'kimjunkyu@gmail.com', '08227484484', 'Gemastik', 'LKTI ', '1657827503_adbb2b425ccbf3921120.pdf', '2022-07-14', '2022-07-29'),
(16, '6701190099', 'Selvi Septiara Sari Br.Pinem', 'D3SI 4304', 'selviimut@gmail.com', '0827278222', 'LIDM', 'UI', '1658250908_5a48dec649d66b6cb2f4.png', '2022-07-19', '2022-07-19'),
(17, '6701194064', 'dinda', 'd3si 4201', 'd@gmail', '123', 'sdss', 'UI/UX', '1658657353_830ce60b4df39bd4da47.docx', '2022-07-24', '2022-07-27'),
(18, '6701194064', 'dinda', 'd3si 4201', 'd@gmail', '123', 'sdss', 'UI/UX', '1658657356_f09e3f109e369668b94f.docx', '2022-07-24', '2022-07-27'),
(19, '6701194064', 'Annisa Nhabila Putri', 'd3si 4902', 'dinnabila22@gmail.com', '08227840292', 'Gemastik', 'UI/UX', '1658989769_e20ddf39bdca6ba80d56.pdf', '2022-07-28', '2022-07-28'),
(20, '6701194064', 'PUTRI PRATAMI SARI', 'd3si 4304', 'dinnabila22@gmail.com', '08227840292', 'Gemastik', 'UI/UX', '1659452717_476be4d50afb6c37a327.pptx', '2022-08-02', '2022-08-02'),
(21, '6701213030', 'I Gde Ari Wirya Palguna', 'd3si 4501', 'rainshopsharing@gmail.com', '', 'PKM', 'GFT', '-', '2022-08-08', '2022-08-08'),
(22, '6701194064', 'Haechan ', 'd3si 4304', 'dinnabila22@gmail.com', '08227840292', 'IT EXPO', 'UI/UX', '-', '2022-08-08', '2022-08-08'),
(23, '6701194064', 'Haechan Ganteng', 'd3si 4902', 'dinnabila22@gmail.com', '', 'Gemastik', 'UI/UX', '-', '2022-08-08', '2022-08-08'),
(24, '6701213102', 'Selsya Nabila Ramdani', 'd3si 4501', 'selsya@gmail.com', '', 'PKM', 'GFT', '-', '2022-08-08', '2022-08-08'),
(25, '6701213003', 'Dimas Aditya', 'd3si 4501', 'dimasaditya@gmail.com', '', 'PKM', 'GFT', '-', '2022-08-08', '2022-08-08'),
(26, '6701194064', 'Dinda Nabila Amartha', 'd3si 4302', 'dinnabila22@gmail.com', '08227840292', 'Gemastik', 'UI', '1659969424_8f31cdd6dc97d9596641.jpeg', '2022-08-08', '2022-08-08'),
(27, '6701194064', 'Haechan ', 'd3si 4304', 'dinnabila22@gmail.com', '08227840292', 'Udin', 'UI', '1660983188_e9c0cc23dd41a2d91cf4.pdf', '2022-08-20', '2022-08-20'),
(28, '6701194064', 'Annisa Nhabila Putri', 'd3si 4504', 'dinnabila22@gmail.com', '08227840292', 'Informasi', 'UI/UX', '1661063300_96f4febae915be9b1513.pdf', '2022-08-21', '2022-08-21'),
(29, '6711919111', 'PUTRI PRATAMI SARI', 'D3SI 4304', 'dnabila0703@gmail.com', '08227840292', 'bhhbh', 'GFT', '1661064119_d5565276467324f1a25b.pdf', '2022-08-21', '2022-08-21'),
(30, '6701194064', 'Haechan ', 'd3si 4304', 'dinnabila22@gmail.com', '08227840292', 'Info', 'GFT', '1661064247_2be8020d7555cff3e34a.pdf', '2022-08-21', '2022-08-21'),
(31, '6701194064', 'PUTRI PRATAMI SARI', 'd3si 4501', 'dinnabila22@gmail.com', '08227840292', 'dwdad', 'djdjd', '1661064484_39cd58774e2b2f1d8374.pdf', '2022-08-21', '2022-08-21'),
(32, '6701194064', 'Haechan ', 'd3si 4304', 'dinnabila22@gmail.com', '08227840292', 'dwdad', 'skskkss', '1661064790_b864f8dd2543f58d2536.pdf', '2022-08-21', '2022-08-21'),
(33, '6701194064', 'PUTRI PRATAMI SARI', 'd3si 4501', '', '08227840292', 'Berita', 'djdjd', '1661065621_556a7cc57526339a9d2b.docx', '2022-08-21', '2022-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lomba`
--

CREATE TABLE `kategori_lomba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_indo` varchar(255) DEFAULT NULL,
  `kategori_inggris` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_lomba`
--

INSERT INTO `kategori_lomba` (`id`, `kategori_indo`, `kategori_inggris`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pemrograman', 'Programming', 'programming', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(2, 'Keamanan Siber', 'Cyber Security', 'cyber-security', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(3, 'Penambangan Data', 'Data Mining', 'data-mining', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(4, 'Desain Pengalaman Pengguna', 'UX Design', 'ux-design', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(5, 'Animasi', 'Animation', 'animation', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(6, 'Pengembangan Perangkat Lunak', 'Software Development', 'software-development', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(7, 'Piranti Cerdas, Sistem Benam & IoT', 'Smart Device, Embedded System & IoT', 'iot', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(8, 'Pengembangan Aplikasi Permainan', 'Game Development', 'game-development', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL),
(9, 'Pengembangan Bisnis TIK', 'ICT Business Development', 'ict-business-development', '2023-05-23 17:10:52', '2023-05-23 17:10:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id` int(5) NOT NULL,
  `kategori_lomba_id` bigint(20) UNSIGNED DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `cabang_lomba` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `teks` mediumtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `Penyelenggara` varchar(200) DEFAULT NULL,
  `Deadline` date DEFAULT NULL,
  `counting_day` varchar(255) DEFAULT NULL,
  `output` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id`, `kategori_lomba_id`, `poster`, `Title`, `cabang_lomba`, `link`, `teks`, `slug`, `excerpt`, `Penyelenggara`, `Deadline`, `counting_day`, `output`, `created_at`, `updated_at`) VALUES
(66, 1, 'lomba/gemastik-2022.jpg', 'GEMASTI', 'Programming', 'https://eventpelajar.com/lomba/ ', '<p>\n                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu\n                            sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne,\n                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n,\n                            vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis\n                            pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen\n                            li, porttitor eu, consequat vitae, eleifend ac, enim.\n                        </p>\n                        <p>\n                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.\n                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel velit nisi\n                            elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi\n                            elit consequat ipsum. Proin gravida nibh vel velit.\n                        </p>', 'gemastik-programming-2022', '<p>Lomba Programming seru abis</p>', 'Risetdikti', '2023-09-02', '11', 'Valid', '2022-08-07', '2023-06-11'),
(67, 9, 'lomba/gemastik.png', 'P2MW', 'Bisnis Digital', 'https://kesejahteraan.kemdikbud.go.id/p2mw', '<p>                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu                             sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne,                             pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n,                             vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis                             pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen                             li, porttitor eu, consequat vitae, eleifend ac, enim.                         </p>                         <p>                             Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.                             gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel velit nisi                             elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi                             elit consequat ipsum. Proin gravida nibh vel velit.                         </p>', 'p2mw-bisnis-digital-2022', '<p>Lomba Programming seru abis</p>', 'Kemdikbud', '2023-08-30', '12', 'Invalid', '2022-08-07', '2022-08-07'),
(68, 4, 'lomba/gemastik-2022.jpg', 'PKM', 'PKM T', 'https://kesejahteraan.kemdikbud.go.id/p2mw', '<p>                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu                             sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne,                             pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n,                             vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis                             pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen                             li, porttitor eu, consequat vitae, eleifend ac, enim.                         </p>                         <p>                             Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.                             gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel velit nisi                             elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi                             elit consequat ipsum. Proin gravida nibh vel velit.                         </p>', 'pkm-pkm-t-2022', 'Lomba PKM T seru abis', 'Kemenristekdikti', '2023-09-01', '10', 'Valid', '2022-08-07', '2022-08-07'),
(69, 4, 'lomba/gemastik.png', 'OLIVIA', 'UI/UX', 'https://www.kompas.com/tag/lomba', '<p>                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. cu                             sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ne,                             pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet n,                             vu eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis                             pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aen                             li, porttitor eu, consequat vitae, eleifend ac, enim.                         </p>                         <p>                             Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.                             gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel velit nisi                             elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi                             elit consequat ipsum. Proin gravida nibh vel velit.                         </p>', 'olivia-ui-ux-2022', 'Lomba UI/UX seru abis', 'ITS', '2023-09-02', '15', 'Valid', '2022-08-07', '2022-08-07'),
(139, NULL, 'lomba/1687333137_429fad14d0c2888a1f6a.png', 'Dicoding', NULL, 'https://www.dicoding.com/', '<p>Lomba lomba</p>', 'dicoding-2023', NULL, 'Dicoding', '2023-11-30', '11', '', '2023-06-21', '2023-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `email_telkom` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-03-18-160919', 'App\\Database\\Migrations\\Lomba', 'default', 'App', 1647622785, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1657636658, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendataan_lomba`
--

CREATE TABLE `pendataan_lomba` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lomba` varchar(255) DEFAULT NULL,
  `nama_ketua` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama_pembimbing` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendataan_lomba`
--

INSERT INTO `pendataan_lomba` (`id`, `user_id`, `nama_lomba`, `nama_ketua`, `nim`, `nama_pembimbing`, `kelas`, `email`, `sertifikat`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'GEMASTIK WEB PROGRAMMING', 'IHSAN KURNIAWAN', '1202218458', 'KUR', 'SI-44-01', 'kur@gmail.com', 'pendataan-lomba/1687035172_aa45fe0c9061321979c8.png', 'Lolos Pendanaan', '2023-06-11 14:17:55', '2023-06-11 14:17:55'),
(2, 17, 'Programming', 'Raden Fachry Azwar', '6701202345', 'Inne Gartina Husein', 'D3SI-44-04', 'radenfachryazwar@gmail.com', 'pendataan-lomba/1687035172_aa45fe0c9061321979c8.png', 'Mantep', '2023-06-17 13:52:52', '2023-07-08 10:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `pendataan_lomba_mahasiswa`
--

CREATE TABLE `pendataan_lomba_mahasiswa` (
  `id` bigint(20) NOT NULL,
  `pendataan_lomba_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendataan_lomba_mahasiswa`
--

INSERT INTO `pendataan_lomba_mahasiswa` (`id`, `pendataan_lomba_id`, `nama_mahasiswa`, `nim`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Raden Fachry', '6701202132', 'SI-44-04', '2023-06-13 13:55:27', '2023-06-13 13:55:27'),
(2, 2, 'Baskoro Bayu Saputra', '6701202345', 'D3SI-42-03', '2023-06-18 11:35:15', '2023-06-18 11:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `teks` mediumtext NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`id`, `link`, `judul`, `teks`, `created_at`, `updated_at`) VALUES
(1, 'sad', 'sad', 'sad', NULL, NULL),
(2, 'https://www.logikaui.com/ ', 'LOGIKA UI 2022', '+ Diterima sebagai Mahasiswa Program Studi S1 Matematika Universitas Indonesia ... Peserta kompetisi MIC LOGIKA UI 2022 adalah siswa/i yang terdaftarÂ ...', NULL, NULL),
(3, 'https://www.informasilomba.com/ ', 'Info Lomba 2022 Terbaru', 'Hallo sahabat informasi lomba di seluruh Indonesia, gimana kabarnya hari ini masih semangat ikut berbagai macam perlombaan? Masih dong? Ma... Read MoreÂ ...', NULL, NULL),
(4, 'https://www.informasilomba.com/ ', 'Info Lomba 2022 Terbaru', 'Hallo sahabat informasi lomba di seluruh Indonesia, gimana kabarnya hari ini masih semangat ikut berbagai macam perlombaan? Masih dong? Ma... Read MoreÂ ...', NULL, NULL),
(5, 'https://mtsn6malang.sch.id/2022/01/23/pengumuman-lomba-ajang-kreasi-dan-kompetisi-siswa-aksi-tahun-2022/ ', 'PENGUMUMAN LOMBA AJANG KREASI DAN KOMPETISI ...', 'PENGUMUMAN LOMBA AJANG KREASI DAN KOMPETISI SISWA (AKSI) TAHUN 2022. by mtsn6malang Â· Published January 23, 2022 Â· Updated January 23, 2022.', NULL, NULL),
(6, 'https://pusatprestasinasional.kemdikbud.go.id/ ', 'Pusat Prestasi Nasional: Beranda', '2.179 Siswa Siap Torehkan Prestasi pada Ajang Kompetisi Sains Nasional 2021 ... Bagaimana menurutmu informasi yang ditampilkan di website ini?', NULL, NULL),
(7, 'https://pusatprestasinasional.kemdikbud.go.id/ ', 'Pusat Prestasi Nasional: Beranda', '2.179 Siswa Siap Torehkan Prestasi pada Ajang Kompetisi Sains Nasional 2021 ... Bagaimana menurutmu informasi yang ditampilkan di website ini?', NULL, NULL),
(8, 'aasa', 'asassa', 'asasas', NULL, NULL),
(9, 'https://pusatprestasinasional.kemdikbud.go.id/ ', 'PENGUMUMAN LOMBA AJANG KREASI DAN KOMPETISI ...', 'Hallo sahabat informasi lomba di seluruh Indonesia, gimana kabarnya hari ini masih semangat ikut berbagai macam perlombaan? Masih dong? Ma... Read MoreÂ ...', NULL, NULL),
(10, 'https://www.informasilomba.com/ ', 'Info Lomba 2022 Terbaru', 'Hallo sahabat informasi lomba di seluruh Indonesia, gimana kabarnya hari ini masih semangat ikut berbagai macam perlombaan? Masih dong? Ma... Read MoreÂ ...', NULL, NULL),
(11, 'https://www.informasilomba.com/ ', 'Info Lomba 2022 Terbaru', 'Hallo sahabat informasi lomba di seluruh Indonesia, gimana kabarnya hari ini masih semangat ikut berbagai macam perlombaan? Masih dong? Ma... Read MoreÂ ...', NULL, NULL),
(12, 'https://eventpelajar.com/lomba/ ', 'Info Lomba Terbaru - Event Pelajar', 'Kompetisi mahasiswa tingkat wilayah meliputi Olimpiade Nasional Matematika dan IPA â€“ Perguruan Tinggi (ONMIPA-PT), Pemilihan Mahasiswa BerprestasiÂ ...', NULL, NULL),
(13, 'https://prestasi.ipb.ac.id/info-kompetisi ', 'Info Kompetisi - IPB Prestasi', 'Kompetisi Penalaran Organisasi Mahasiswa Fungsional ... KOMPETISI SAINS BIOLOGI XII 2022 ... Bridge Competition - ITB Civil Engineering Expo 2022.', NULL, NULL),
(14, 'https://humas.amikompurwokerto.ac.id/waspada-coming-soonbede-exis-proudly-present-ekspo-mahasiswa-2022yuk/ ', 'WASPADA!!!! COMING SOON!!! BeDe Exis Proudly Present ...', '1 Des 2021 â€” Info Lomba Bulan Desember Â· Semua usia Â· Warga Negara Indonesia Â· Mengumpulkan karya tulis maksimal tanggal 10 Desember 2021.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `singkatan` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `user_id`, `kode`, `singkatan`, `nama`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'D3SI', 'D3SI', 'D3 Sistem Informasi', 'Akreditasi A', NULL, NULL, NULL),
(2, NULL, 'D3TE', 'D3TE', 'D3 Digital Connectivity', 'Akreditasi Unggul', NULL, NULL, NULL),
(3, NULL, 'D3TI', 'D3TI', 'D3 Teknik Informatika', 'Akreditasi Unggul', NULL, NULL, NULL),
(4, NULL, 'D3SIA', 'D3SIA', 'D3 Sistem Informasi Akuntansi', 'Akreditasi A', NULL, NULL, NULL),
(5, NULL, 'D3TK', 'D3TK', 'D3 Teknik Komputer', 'Akreditasi Unggul', NULL, NULL, NULL),
(6, NULL, 'D3DM', 'D3DM', 'D3 Digital Marketing', 'Akreditasi B', NULL, NULL, NULL),
(7, NULL, 'DCA', 'DCA', 'S1 Terapan Digital Creative Multimedia', 'Akreditasi C', NULL, NULL, NULL),
(8, NULL, 'D4KP', 'D4KP', 'D4 Keperewatan', 'Keperawatan', '2022-08-16 09:05:40', '2022-08-16 09:05:40', NULL),
(9, NULL, 'T-01267', 'D3AP', 'Analisis Perancangan', 'Analisis Perancangan', '2022-08-16 09:22:45', '2022-08-16 09:22:45', NULL),
(10, NULL, 'D3 RPLA', 'D3 RPLA', 'D3 Rekayasa Perangkat Lunak', 'Akreditasi A', '2022-11-10 06:52:07', '2022-11-10 06:52:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekognisi`
--

CREATE TABLE `rekognisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_lomba` varchar(255) DEFAULT NULL,
  `nama_ketua` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama_pembimbing` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `status` enum('diterima','ditolak','dalam proses') DEFAULT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekognisi`
--

INSERT INTO `rekognisi` (`id`, `user_id`, `nama_lomba`, `nama_ketua`, `nim`, `nama_pembimbing`, `kelas`, `email`, `sertifikat`, `status`, `prestasi`, `created_at`, `updated_at`) VALUES
(1, NULL, 'GEMASTIK WEB PROGRAMMING', 'IHSAN KURNIAWAN', '1202218458', 'KUR', 'SI-44-01', 'kur@gmail.com', 'sertifikat/sertifikat.png', 'dalam proses', NULL, '2023-06-11 14:17:55', '2023-07-08 10:43:42'),
(2, 17, 'Programming', 'Vanisa Auliani', '670120113', 'Inne Gartina Husein', 'D3SI-44-05', 'suryatiningsih@gmail.com', 'rekognisi/1687094697_bdd577483e78fa30599f.png', 'diterima', NULL, '2023-06-18 06:24:57', '2023-07-08 10:42:35'),
(3, 17, 'UI/UX', 'Raden Fachry', '6701202132', 'Inne Gartina Husein', 'D3SI-44-04', 'radenfachryazwar@gmail.com', 'rekognisi/1687332567_d4b7fbe410c8e42ebc20.png', 'dalam proses', NULL, '2023-06-21 00:29:27', '2023-07-08 10:43:47'),
(4, 17, 'Programming', 'Raden Fachry Azwar', '6701202132', 'Inne Gartina Husein', 'D3SI-44-04', 'radenfachryazwar@gmail.com', 'rekognisi/1688836378_b22defd121f1d9e3463c.png', 'dalam proses', 'Juara 1', '2023-07-08 10:12:58', '2023-07-08 10:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `rekognisi_mahasiswa`
--

CREATE TABLE `rekognisi_mahasiswa` (
  `id` bigint(20) NOT NULL,
  `rekognisi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekognisi_mahasiswa`
--

INSERT INTO `rekognisi_mahasiswa` (`id`, `rekognisi_id`, `nama_mahasiswa`, `nim`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Raden Fachry', '6701202132', 'SI-44-04', '2023-06-13 13:55:27', '2023-06-13 13:55:27'),
(2, 3, 'Baron', '670120001', 'D3SI-44-04', '2023-06-21 00:30:08', '2023-06-21 00:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `no_ponsel` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `nim` int(255) DEFAULT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `role` enum('admin','dosen','prodi','mahasiswa') DEFAULT NULL,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `no_ponsel`, `password_hash`, `nim`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `role`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dandan@gmail.com', 'dandan', 'dandan', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(2, 'nano@gmail.com', 'nano', 'nano', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(3, 'putripratamisari@gmail.com', 'wtfss', 'wtfss', 'profile/user.png', '', '$2y$10$X71.pl6kl47C9s5Cylfbf.KWo8D.KtLgkfj500w5n8xNkl9jO4.bm', 0, NULL, NULL, NULL, '58bacebe221a8515dd62b87f87e6c19b', NULL, NULL, 0, 'admin', 0, '2022-07-12 11:47:50', '2022-07-12 11:47:50', NULL),
(4, 'dinnabila22@gmail.com', 'dnabilaa', 'dnabilaa', 'profile/user.png', '', '$2y$10$a6xH2XElGeJpu3aAnwu3bO5DUPMYGPDWPXBODBRLl3cUVlA8F7NQm', 0, NULL, NULL, NULL, 'd857f961fecba584da94417503976962', NULL, NULL, 0, 'admin', 0, '2022-07-12 12:47:25', '2022-07-12 12:47:25', NULL),
(5, 'dnabilaa@student.telkomuniversity.ac.id', 'chenle12', 'chenle12', 'profile/user.png', '', '$2y$10$PsnSQjQZLMfgRLW7aEqnr.HppXTAjGdCEBmxrVldVOPVwhD6yeARK', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-07-12 12:51:31', '2022-07-12 12:51:31', NULL),
(6, 'sekretariat@pkbibengkulu.or.id', 'haechan12', 'haechan12', 'profile/user.png', '', '$2y$10$/2JzhQifgv5bPeNPFN9jG./k2EI3N7dXBCibciqVah1tD1l733TKK', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-07-13 22:07:57', '2022-07-13 22:07:57', NULL),
(7, 'haechan@gmail.com', 'haechan112', 'haechan112', 'profile/user.png', '', '$2y$10$exBSmBjBfSSK.hBdt3biv.CXEJ0sTjT1wDZaEy.2ylHfQKEY2sIWO', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-07-13 22:08:39', '2022-07-13 22:08:39', NULL),
(11, 'test@gmail.com', 'test', 'test', 'profile/user.png', '', '$2y$10$7oxARPGmt59sKeqYObyleO9Xf1enwcto/hhza88efGjdJb.2KojhW', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-07-29 08:43:16', '2022-07-29 08:43:16', NULL),
(12, 'admin@gmail.com', 'admin', 'admin', 'profile/admin.png', '', '$2y$10$DhnccSKG4I4LCttOWhIGue5c/ijmScS0NUbffWF4maC4WInpO1tMS', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-07-29 08:47:25', '2022-07-29 08:47:25', NULL),
(13, 'dnabila0703@gmail.com', 'wtf', 'wtf', 'profile/user.png', '', '$2y$10$IdrLJborxy69xfY0O/Jet.q.miFcyrlVpANOKYct7AWNZWpODAByq', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-08-18 02:56:34', '2022-08-18 02:56:34', NULL),
(14, 'putri@gmail.com', 'putri', 'putri', 'profile/user.png', '', '$2y$10$QjzNa7GXEppNp1UnyZYOteE4v2SV7r4ylc3vDLUxgPivtzidpU90y', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-08-19 09:40:18', '2022-08-19 09:40:18', NULL),
(15, 'marklee@gmail.com', 'marklee', 'marklee', 'profile/user.png', '', '$2y$10$WriEqYmtkl5a4GTjgEtonucWD41q3cc7OXs9P5AS1u4iDcBoCZw4q', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-08-19 09:45:49', '2022-08-19 09:45:49', NULL),
(16, 'dnabila07@gmail.com', 'ary', 'ary', 'profile/user.png', '', '$2y$10$MO51so9NYLHQefzTHUVSUuT7M5ZU9.X3hpxaUyqks0STiNPed.cpm', 0, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'admin', 0, '2022-12-20 01:43:52', '2022-12-20 01:43:52', NULL),
(17, 'ari@gmail.com', 'ari', 'ari', 'profile/user.png', '', '$2y$10$DhnccSKG4I4LCttOWhIGue5c/ijmScS0NUbffWF4maC4WInpO1tMS', 0, NULL, NULL, NULL, '2403c3d949a338c722a283a8876a7027', NULL, NULL, 1, 'mahasiswa', 0, '2023-05-02 08:09:29', '2023-05-02 08:09:29', NULL),
(18, 'ari2@gmail.com', 'ermapedagang', 'ermapedagang', 'profile/user.png', '', '$2y$10$owKZEGhMkZM1.f8Rqwb5fuXhWrKZlRe7vhTCmaaGO/ERMlpXDz2C.', 0, NULL, NULL, NULL, 'faf29adce2d68d8997eb0fe86d6d2b12', NULL, NULL, 1, 'admin', 0, '2023-05-02 08:11:32', '2023-05-02 08:11:32', NULL),
(19, 'isa@gmail.com', 'isa1234', 'isa1234', 'profile/user.png', NULL, '$2y$10$DhnccSKG4I4LCttOWhIGue5c/ijmScS0NUbffWF4maC4WInpO1tMS', NULL, NULL, NULL, NULL, '82f0baf9a37c5aad62a4082f67adc999', NULL, NULL, 1, NULL, 0, '2023-05-02 10:55:58', '2023-05-02 10:55:58', NULL),
(20, 'percobaan@gmail.com', 'percobaan', 'percobaan', NULL, NULL, '$2y$10$TEEMSVHCqKB8zfyM.4eDiO55ILimSiA8evln9Ysx8GTZ72DzFdTZW', NULL, NULL, NULL, NULL, 'a53c8b4f6dd977f6ab0953ecba38ab48', NULL, NULL, 0, NULL, 0, '2023-05-11 12:26:29', '2023-05-11 12:26:29', NULL),
(21, 'bagus@gmail.com', 'bagus', 'bagus', NULL, NULL, '$2y$10$K7Vfg3Ad9hvUcnGzrcc8UuVgIrp3.7j0EQdkbxlSU892Rj8r9J/.G', NULL, NULL, NULL, NULL, '6f26cab4f2e6d4b9c2d7ebfc171721a8', NULL, NULL, 0, NULL, 0, '2023-05-11 13:12:58', '2023-05-11 13:12:58', NULL),
(22, 'bismillah@gmail.com', 'bismillah', 'bismillah', NULL, NULL, '$2y$10$j0q8KTqluph4W6Dmvr/rMe.p7HrTeTAf/aZ8q.lDatSIUoNMoAu..', NULL, NULL, NULL, NULL, 'e7f914ef568dbc955d23fc343cf508e5', NULL, NULL, 0, NULL, 0, '2023-05-11 13:29:35', '2023-05-11 13:29:35', NULL),
(23, 'raden@gmail.com', 'raden', 'raden', NULL, NULL, '$2y$10$g6LREYx8g49T2dvFhA4OD.JF8OCE78fbhOhwj88ueWKUJ6G2JNvR6', NULL, NULL, NULL, NULL, '95d77340f60dd88d8cefe5bc8e809f52', NULL, NULL, 0, NULL, 0, '2023-06-21 10:39:40', '2023-06-21 10:39:40', NULL),
(24, 'tandu@gmail.com', 'Rinaldo', 'Rinaldo', NULL, NULL, '$2y$10$Hrck1gJv7cuVG2eJxpgxe.l6dUsSpY1TML1DiNeS3LdVqwn1FF1Z2', NULL, NULL, NULL, NULL, '669bed25d8986b98809830ff0a38afba', NULL, NULL, 0, NULL, 0, '2023-06-21 11:30:43', '2023-06-21 11:30:43', NULL),
(25, 'danu@gmail.com', 'danu', 'danu', NULL, NULL, '$2y$10$gUKd7a7xX88eV4ex40LmleqTGs46BU8nGK99ChN3RP2/mrpKlv6Yu', NULL, NULL, NULL, NULL, '87767c6930f3f1a31dc17caac44bd543', NULL, NULL, 0, NULL, 0, '2023-06-21 11:34:03', '2023-06-21 11:34:03', NULL),
(26, 'feby@gmail.com', 'feby', 'feby', NULL, NULL, '$2y$10$0aq4NXhaQpsyaoZKb60h/eLuTm3sYMi7ru2NTah9GDArw6LhgRz.e', NULL, NULL, NULL, NULL, 'e19fbff0a01be1c1a55e700da5b423a9', NULL, NULL, 0, NULL, 0, '2023-06-21 11:39:14', '2023-06-21 11:39:14', NULL),
(27, 'viky@gmail.com', 'viky', 'Viky', NULL, NULL, '$2y$10$up6w89oGic.8D7/8.FGx8.KYk00oZIJcgxxDRDqv2Xf75/WcjdO.K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'mahasiswa', 0, '2023-06-21 12:09:42', '2023-06-21 12:09:42', NULL),
(28, 'donal.anas@gmail.com', 'Anas', 'Donald', NULL, NULL, '$2y$10$1LuROH.OscjornKa8Djube6/A292kr60HIMVuJ4cyl/wCvTyU.Ke.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'mahasiswa', 0, '2023-07-08 14:22:50', '2023-07-08 14:22:50', NULL),
(29, 'trump@gmail.com', 'trump', 'Donald Trump', NULL, NULL, '$2y$10$qMRkUvHSHUNs5G5IXH4nPuFi2cojafIdnZP5qUR76C2dcXbDzpCA.', NULL, NULL, NULL, NULL, 'fe24e88b26902b7d99f7c23a23a9d5b3', NULL, NULL, 1, 'mahasiswa', 0, '2023-07-08 14:58:09', '2023-07-08 14:58:09', NULL),
(30, 'aang@gmail.com', 'aang', 'Avatar The Legend of Aang', NULL, NULL, '$2y$10$aLPkStNkjFeMu7HmmNg3HOPgfPZNHuzXqM2oJkhUPRBodocelz8OC', NULL, NULL, NULL, NULL, '94f0f10964db35f6a237c92da618fc98', NULL, NULL, 0, 'mahasiswa', 0, '2023-07-08 15:05:02', '2023-07-08 15:05:02', NULL),
(31, 'coba@gmail.com', 'coba', 'coba1', NULL, NULL, '$2y$10$Ms9qJtmP5eQOK4uiEEDhYO5fT.8Er1LZnhKlngeOzk5kvwqbFClTG', NULL, NULL, NULL, NULL, '20d7227290a9309b19105d2e873cd4b9', NULL, NULL, 1, 'mahasiswa', 0, '2023-07-08 15:06:27', '2023-07-08 15:06:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosen_kode_unique` (`kode`),
  ADD KEY `dosen_user_id_foreign` (`user_id`);

--
-- Indexes for table `input_mahasiswa`
--
ALTER TABLE `input_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendataan_lomba`
--
ALTER TABLE `pendataan_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendataan_lomba_mahasiswa`
--
ALTER TABLE `pendataan_lomba_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodi_kode_unique` (`kode`);

--
-- Indexes for table `rekognisi`
--
ALTER TABLE `rekognisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekognisi_mahasiswa`
--
ALTER TABLE `rekognisi_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `input_mahasiswa`
--
ALTER TABLE `input_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendataan_lomba`
--
ALTER TABLE `pendataan_lomba`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendataan_lomba_mahasiswa`
--
ALTER TABLE `pendataan_lomba_mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rekognisi`
--
ALTER TABLE `rekognisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekognisi_mahasiswa`
--
ALTER TABLE `rekognisi_mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2025 at 07:03 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u306478443_zakm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`, `passpass`) VALUES
(1, 'admin', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `all_key`
--

CREATE TABLE `all_key` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_key`
--

INSERT INTO `all_key` (`id`, `key_name`) VALUES
(35, 'testkey1'),
(36, '3b8858d5-859e-4f99-9fe2-5fae693e2732'),
(37, 'ef21d1aa-7b5a-4f1b-946f-ad6cbc6b99b0'),
(38, '7886c6fc-9f63-4f76-95f4-7b5cae5ee2f3'),
(39, '4ad79d29-4a02-4066-bcdf-c08ca318f2e0'),
(40, '613549c4-f2fe-4824-b3da-dc77bd0cf635'),
(41, '79563d52-8eb0-4abd-9cfa-0b5661f5296d'),
(42, 'd2d40d50-bf05-4761-9b0a-1aa4d7237e1b'),
(43, 'c040843e-7982-4b3b-ab8b-24ab864e5a6d'),
(44, 'afe38c92-71b2-4159-8181-851fb1af4c12'),
(45, 'ce1d6e49-a90e-4664-88a7-304c4420c255'),
(46, 'd53049aa-2520-4bf8-9e41-15e51df01a3f'),
(47, 'b6de4295-4c0d-4ff0-864e-e96908805bf8'),
(48, '03095d98-55b6-4fe3-8a72-a8d8c660c0d0'),
(49, 'a6369723-4055-4b1f-9f51-9797a0d1df0a'),
(50, '2d589fbb-87de-4b52-bab3-39b1c7c85802'),
(51, '1349cb80-c804-4242-a1b5-32eb771f3611'),
(52, '02c2de24-1846-420b-943b-bce379909f2a'),
(53, '7262ea2d-2810-48af-a23f-3743cf5b91b3'),
(54, '24dc0ded-f92a-4531-ab6d-068bb96abb9d'),
(55, '9bee34c9-b136-4dcb-a0ce-3d449abe6259'),
(56, 'a393e741-7381-418f-a0f6-3059e121b615'),
(57, '1a86e554-9e1d-405f-bf3c-89a9843e1830'),
(58, 'e53875ba-af6c-4fea-9e00-fc93355f09d8'),
(59, '9a40d2a7-78d4-4f81-ba36-1f08683e4868'),
(60, 'c8c0ae08-6deb-4942-9ec2-efa4c3659519'),
(61, '36aa50c2-57c3-4cda-b406-05f7124c3dc9'),
(62, 'f748c603-83d7-4041-ab57-c7c3014d7fc9'),
(63, '66d83c08-4de9-47a1-b8ea-b8d226a1e247'),
(64, 'df0b0830-4a5b-4882-b44f-d5fdebf01467'),
(65, 'd757947b-f4c6-46d6-8582-66f456bfe6db'),
(66, '037da4f9-37f6-419f-b707-ca934ea5bf73'),
(67, 'ba21146a-7028-46a8-8c4f-4404abeea0f4'),
(68, 'd83ba8d9-5990-4183-862a-e5eead908823'),
(69, '2c5c3548-7a5b-472c-9284-4de21b06264a'),
(70, '0c8f35b8-f8ae-4f79-8f42-22f868dc581d'),
(71, '49340690-5854-4e05-a0b7-36e0d8c2a5b3'),
(72, 'edb484b5-969d-4c7d-8463-eb5d7981399a'),
(73, '7dd7ec8b-4173-45e4-8e9b-2bad77a2dc36'),
(74, 'dd711dc4-611b-4dcf-8915-1783788a331d'),
(75, '118b63e1-e188-4eb7-b53a-1bc87b7db929'),
(76, '3e822b13-44f9-4a01-8e6d-cac141eabdc6'),
(77, 'f08c4ca5-25a4-4a63-8043-941275fda810'),
(78, 'e5a05cdd-2521-44c4-869c-dd0ca13c0bf3'),
(79, '1f66ad90-0703-4be5-8acb-6edd7451db0a'),
(80, 'd86b73d6-6b63-4b0a-87a9-99b606427658'),
(81, '9dda1cca-9d67-45c8-9c7f-e926d27d5a7e'),
(82, 'eae9d1c1-c4ee-4431-8902-c68fff1f536b'),
(83, '0b97d72f-c161-4be2-84cf-5059b9f3bf5d'),
(84, '4989f204-cc6c-4358-8239-278fe064e179'),
(85, '5559392e-5fe0-473a-9508-56762c09f1b3'),
(86, 'e5fee920-2169-4940-85c1-62047c814fc2'),
(87, '9c9040fd-6ca2-491b-a91f-dffbbb9d9fb9'),
(88, '33e637fc-0cb4-4f30-a11d-c2e9466067cd'),
(89, '6e611cc1-8702-4242-b332-d6a7ef4c912e'),
(90, 'd4358253-0697-4603-aef8-496774ee4e77'),
(91, '0af7d8b8-0f1b-458b-9d26-ba4524248265'),
(92, '5ce50403-6091-412c-bb4e-c7633302da82'),
(93, 'b5f65b11-6c88-4e47-b931-5f954ecafedd'),
(94, 'd356e535-12ca-4919-a132-b350a4f88906'),
(95, '413864fb-26a9-4325-bbb0-09a82c7c5594'),
(96, '63f9e91e-9aff-4688-9f79-343d0d5c05e8'),
(97, '0559a2e9-b4d3-4ea8-a183-0fa5dc46c9a1'),
(98, '6bd96a53-c9bc-403d-a64c-6dbd6d0e5c4c'),
(99, 'dc2d681e-974e-4a84-919f-68ae131967eb'),
(100, '38d059a6-755c-43e6-bd30-aa8855b52740'),
(101, 'a9e59a6f-9ed8-48f7-9b17-31016059bccc'),
(102, '53aebf2d-b6c8-45a3-b01e-067bf5081181'),
(103, 'e7fc0ac2-9a03-4301-ae5a-87d8f311ce7b'),
(104, 'd3592681-e55d-40fc-9caa-7dd9cb101f72'),
(105, 'c8d5467d-a8da-4c71-9466-dcbe789a0a70'),
(106, '2c3850c5-d7c6-4da1-9d9f-fab16fa42b91'),
(107, '2c2822f1-c184-4098-9ea4-a7b969db61ce'),
(108, '5ed7faee-94ef-4232-809e-6b8e1a599e65'),
(109, '16f4c394-b1cd-45a9-8814-d87a9b23ec96'),
(110, 'b4fa56c2-2757-4f8e-b461-5b065da522e1'),
(111, '4b43031e-8e29-4cd2-b22a-6db931380726'),
(112, 'ac9f5f9f-22d8-44f4-aa86-df4e97b9e0a6'),
(113, '6cf295d0-0b3a-4148-ab60-264fd34d13ef'),
(114, 'ccefd3c2-6fc7-4739-9519-00ec07c850cb'),
(115, 'c32f838d-c2c1-43c9-bd84-4d8caa957694'),
(116, '2905e87c-09c8-4d8a-be61-1d1178cb38f6'),
(117, '8fe1ff90-abbe-4959-afce-b2bf3f49d78d'),
(118, '2ec322e6-ac50-440c-a934-71418491afde'),
(119, '63cc804b-a62e-466f-832a-42cedf0e6c65'),
(120, 'c5bb58f6-c6d3-4643-b58d-f64e4494c9eb'),
(121, '5dd1bc91-3489-4eaf-b694-151dd4fc991a'),
(122, 'e8019acd-498e-4ed6-8c27-6d534b6c47f1'),
(123, '257a7876-d6c2-4388-9e96-395ac5fce26f'),
(124, '9524b743-eebb-4fe8-a390-1f92ee28e626'),
(125, '95926e12-5aaf-4ebf-b48b-220fe2d090e6'),
(126, '6fa2a9e0-0dfe-4580-899e-f70102933584'),
(127, '647cbceb-1fd9-4bfe-a187-faecba6f1947'),
(128, '81cdc44d-891f-4606-83be-e0014048cb05'),
(130, 'e744f7ed-c712-43d8-b27d-b9daa8de9799'),
(131, '5b613a03-c48c-412e-8655-190ecdabc923'),
(132, 'ad9bf387-476b-4fa6-aaf2-df1c0861573f'),
(133, '64af207e-90f4-4c10-871c-97c09e020afc'),
(134, 'fec4757b-9568-46ca-9c10-b0ce0c2e8a55'),
(135, 'bfef4034-dc30-4e5c-8a4f-11fbbb0e1cb0'),
(136, 'de3d6338-6349-48a9-a164-c6608b2c015c'),
(137, 'b78e6de6-2316-4a57-a187-f05a77a91c6e'),
(138, 'a1a912f9-54b7-45bf-ada4-1be05c29f61a'),
(139, '14922a3c-ac7d-4f1f-91cf-2a7ff7a132af'),
(140, '42470965-54fc-4ebd-ae5e-2bc48f1580c1'),
(141, 'd0c763c6-5456-45b1-8afe-f62ab3c0dd41'),
(142, 'f4b5c56a-a275-41f4-bc36-0bcf1f4629eb'),
(143, 'd52fb38a-dcae-459e-85ef-3a27862c155c'),
(144, 'c164b197-93f0-4b02-ae7f-24dc75f17c51'),
(145, '7d634f86-0fe4-42a9-8fe5-24e47a37f5e1'),
(146, '490c6ed5-9d31-4c83-acf5-f895824754c3'),
(147, '2a8ab7c4-d8a4-48d3-9763-c7c2bb78d53b'),
(148, '86dd47d6-8f83-42a2-82a1-e7c9a84e9788');

-- --------------------------------------------------------

--
-- Table structure for table `d_user`
--

CREATE TABLE `d_user` (
  `id` int(11) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `d_user`
--

INSERT INTO `d_user` (`id`, `date_time`, `mobile_number`) VALUES
(200, '29-12-2024 08:26:37 AM', ''),
(201, '29-12-2024 08:26:50 AM', ''),
(202, '29-12-2024 08:26:54 AM', ''),
(203, '30-12-2024 10:45:38 AM', ''),
(204, '30-12-2024 10:45:52 AM', ''),
(205, '30-12-2024 10:45:58 AM', ''),
(206, '30-12-2024 10:46:03 AM', ''),
(207, '30-12-2024 10:46:06 AM', ''),
(208, '30-12-2024 10:46:11 AM', ''),
(209, '30-12-2024 11:24:41 AM', ''),
(210, '30-12-2024 11:25:09 AM', ''),
(211, '30-12-2024 11:25:15 AM', ''),
(212, '30-12-2024 11:25:23 AM', ''),
(213, '30-12-2024 11:25:28 AM', ''),
(214, '30-12-2024 11:25:31 AM', ''),
(215, '30-12-2024 11:30:12 AM', ''),
(216, '30-12-2024 11:30:16 AM', ''),
(217, '30-12-2024 11:30:24 AM', ''),
(218, '30-12-2024 11:30:28 AM', ''),
(219, '30-12-2024 11:56:42 AM', ''),
(220, '30-12-2024 11:57:02 AM', ''),
(221, '30-12-2024 11:57:13 AM', ''),
(222, '30-12-2024 11:57:16 AM', ''),
(223, '30-12-2024 11:57:17 AM', ''),
(224, '30-12-2024 11:57:22 AM', ''),
(225, '30-12-2024 11:57:33 AM', ''),
(226, '30-12-2024 11:57:47 AM', ''),
(227, '30-12-2024 11:57:58 AM', ''),
(228, '30-12-2024 11:58:02 AM', ''),
(229, '30-12-2024 11:58:21 AM', ''),
(230, '30-12-2024 11:58:42 AM', ''),
(231, '30-12-2024 11:58:56 AM', ''),
(232, '30-12-2024 11:59:09 AM', ''),
(233, '30-12-2024 11:59:19 AM', ''),
(234, '30-12-2024 11:59:28 AM', ''),
(235, '30-12-2024 12:04:39 PM', ''),
(236, '30-12-2024 12:04:52 PM', ''),
(237, '30-12-2024 03:42:11 PM', ''),
(238, '30-12-2024 03:42:17 PM', ''),
(239, '31-12-2024 01:04:57 PM', '9084'),
(240, '31-12-2024 01:05:03 PM', ''),
(241, '31-12-2024 01:05:10 PM', ''),
(242, '31-12-2024 01:06:09 PM', '9084864747'),
(243, '31-12-2024 01:13:15 PM', ''),
(244, '31-12-2024 01:21:00 PM', ''),
(245, '31-12-2024 01:41:37 PM', ''),
(246, '31-12-2024 01:44:14 PM', ''),
(247, '31-12-2024 01:44:38 PM', ''),
(248, '31-12-2024 01:44:47 PM', ''),
(249, '31-12-2024 01:45:09 PM', ''),
(250, '31-12-2024 01:48:16 PM', '7078795151'),
(251, '31-12-2024 08:06:28 PM', ''),
(252, '31-12-2024 08:06:36 PM', ''),
(253, '31-12-2024 08:06:40 PM', ''),
(254, '31-12-2024 08:06:49 PM', ''),
(255, '31-12-2024 08:06:55 PM', ''),
(256, '31-12-2024 08:07:02 PM', ''),
(257, '31-12-2024 08:07:08 PM', ''),
(258, '31-12-2024 08:07:08 PM', ''),
(259, '31-12-2024 08:07:16 PM', ''),
(260, '31-12-2024 08:07:24 PM', ''),
(261, '31-12-2024 10:06:44 PM', '7302273197'),
(262, '31-12-2024 10:06:53 PM', '7302273197'),
(263, '01-01-2025 11:53:47 AM', ''),
(264, '01-01-2025 11:53:56 AM', ''),
(265, '01-01-2025 11:54:08 AM', ''),
(266, '01-01-2025 11:54:08 AM', ''),
(267, '01-01-2025 12:01:02 PM', ''),
(268, '01-01-2025 12:01:09 PM', ''),
(269, '01-01-2025 12:01:13 PM', ''),
(270, '01-01-2025 12:01:15 PM', ''),
(271, '01-01-2025 12:01:19 PM', ''),
(272, '01-01-2025 12:01:21 PM', ''),
(273, '01-01-2025 12:01:23 PM', ''),
(274, '01-01-2025 12:01:28 PM', ''),
(275, '01-01-2025 12:01:31 PM', ''),
(276, '01-01-2025 12:01:37 PM', ''),
(277, '01-01-2025 12:01:41 PM', ''),
(278, '01-01-2025 12:02:59 PM', ''),
(279, '01-01-2025 12:03:05 PM', ''),
(280, '01-01-2025 12:06:18 PM', ''),
(281, '01-01-2025 12:06:38 PM', ''),
(282, '01-01-2025 12:06:51 PM', ''),
(283, '01-01-2025 12:06:58 PM', ''),
(284, '01-01-2025 12:49:44 PM', ''),
(285, '01-01-2025 12:49:49 PM', ''),
(286, '01-01-2025 12:49:56 PM', ''),
(287, '01-01-2025 01:06:53 PM', ''),
(288, '01-01-2025 03:05:33 PM', ''),
(289, '01-01-2025 03:05:42 PM', ''),
(290, '01-01-2025 03:05:50 PM', ''),
(291, '01-01-2025 03:05:57 PM', ''),
(292, '01-01-2025 03:11:52 PM', ''),
(293, '01-01-2025 03:11:56 PM', ''),
(294, '01-01-2025 03:12:00 PM', ''),
(295, '01-01-2025 03:12:04 PM', ''),
(296, '01-01-2025 03:12:12 PM', ''),
(297, '01-01-2025 03:12:24 PM', ''),
(298, '01-01-2025 03:12:35 PM', ''),
(299, '01-01-2025 03:12:39 PM', ''),
(300, '01-01-2025 03:12:43 PM', ''),
(301, '01-01-2025 03:12:51 PM', ''),
(302, '01-01-2025 03:12:54 PM', ''),
(303, '01-01-2025 03:12:58 PM', ''),
(304, '01-01-2025 03:13:02 PM', ''),
(305, '01-01-2025 03:13:05 PM', ''),
(306, '01-01-2025 03:13:08 PM', ''),
(307, '01-01-2025 03:13:11 PM', ''),
(308, '01-01-2025 06:18:13 PM', ''),
(309, '01-01-2025 06:18:19 PM', ''),
(310, '01-01-2025 06:18:36 PM', ''),
(311, '01-01-2025 06:21:06 PM', ''),
(312, '01-01-2025 06:21:12 PM', ''),
(313, '01-01-2025 06:21:17 PM', ''),
(314, '01-01-2025 06:21:21 PM', ''),
(315, '01-01-2025 06:21:27 PM', ''),
(316, '01-01-2025 06:22:00 PM', ''),
(317, '01-01-2025 06:22:03 PM', ''),
(318, '01-01-2025 06:22:05 PM', ''),
(319, '01-01-2025 06:22:08 PM', ''),
(320, '01-01-2025 06:22:17 PM', ''),
(321, '01-01-2025 06:23:22 PM', ''),
(322, '01-01-2025 06:23:31 PM', ''),
(323, '01-01-2025 06:23:40 PM', ''),
(324, '01-01-2025 06:23:43 PM', ''),
(325, '01-01-2025 06:24:51 PM', ''),
(326, '01-01-2025 06:24:59 PM', ''),
(327, '01-01-2025 06:25:31 PM', ''),
(328, '01-01-2025 06:25:38 PM', ''),
(329, '01-01-2025 06:25:41 PM', ''),
(330, '01-01-2025 06:25:48 PM', ''),
(331, '01-01-2025 06:25:52 PM', ''),
(332, '01-01-2025 06:25:55 PM', ''),
(333, '01-01-2025 06:26:02 PM', ''),
(334, '01-01-2025 06:26:11 PM', ''),
(335, '01-01-2025 06:26:42 PM', ''),
(336, '01-01-2025 06:26:49 PM', ''),
(337, '01-01-2025 09:27:12 PM', ''),
(338, '02-01-2025 09:49:21 AM', ''),
(339, '02-01-2025 09:49:28 AM', ''),
(340, '02-01-2025 09:49:40 AM', ''),
(341, '02-01-2025 09:49:58 AM', ''),
(342, '02-01-2025 10:58:28 AM', ''),
(343, '02-01-2025 10:58:33 AM', ''),
(344, '02-01-2025 10:58:43 AM', ''),
(345, '02-01-2025 12:20:55 PM', ''),
(346, '02-01-2025 12:21:11 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_user`
--

CREATE TABLE `p_user` (
  `id` int(11) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `key_name` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `is_payment_received` varchar(255) NOT NULL,
  `machine_code` varchar(255) NOT NULL,
  `agent_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_user`
--

INSERT INTO `p_user` (`id`, `date_time`, `name`, `email`, `mobile_number`, `key_name`, `payment_id`, `address`, `start_date`, `end_date`, `is_payment_received`, `machine_code`, `agent_id`) VALUES
(18, '30-12-2024 12:11:48 PM', 'Khaleek ahmad', 'khaleek.ahmad@gmail.com', '9958886745', 'testkey1', 'pay_PdIBrwI09L2icj', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `soft`
--

CREATE TABLE `soft` (
  `id` int(11) NOT NULL,
  `soft_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soft`
--

INSERT INTO `soft` (`id`, `soft_name`) VALUES
(1, 'Zakm.exe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_key`
--
ALTER TABLE `all_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_user`
--
ALTER TABLE `d_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soft`
--
ALTER TABLE `soft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_key`
--
ALTER TABLE `all_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `d_user`
--
ALTER TABLE `d_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `p_user`
--
ALTER TABLE `p_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `soft`
--
ALTER TABLE `soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

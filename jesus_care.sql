-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 03:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jesus_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `computer_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `action`, `computer_ip`, `session_id`, `type`, `created_at`, `updated_at`) VALUES
(326, '1', 'deleted log history', '127.0.0.1', 'KwMAMaxzGsx1nC6i2yBq0opX01phTsGrdpkjr07g', 1, '2021-02-20 21:49:26', '2021-02-20 21:49:26'),
(327, '1', 'Admin user updated account details. Email - info@optisoft.ng', '127.0.0.1', 'KwMAMaxzGsx1nC6i2yBq0opX01phTsGrdpkjr07g', 1, '2021-02-20 22:38:30', '2021-02-20 22:38:30'),
(328, '1', 'Admin user updated account details. Email - info@optisoft.ng', '127.0.0.1', 'KwMAMaxzGsx1nC6i2yBq0opX01phTsGrdpkjr07g', 1, '2021-02-20 22:38:56', '2021-02-20 22:38:56'),
(329, '1', 'Admin user updated account details. Email - info@optisoft.ng', '127.0.0.1', 'KwMAMaxzGsx1nC6i2yBq0opX01phTsGrdpkjr07g', 1, '2021-02-20 22:39:14', '2021-02-20 22:39:14'),
(330, '7', 'Admin user updated account details. Email - info@optisoft.ng', '127.0.0.1', '1i179N73HVAuUd4vODeff5xNvH3VjtQR7cu2ON7M', 1, '2021-02-20 23:01:00', '2021-02-20 23:01:00'),
(331, '7', 'Change password for admin user with Email - fmogbana@yahoo.com', '127.0.0.1', '1i179N73HVAuUd4vODeff5xNvH3VjtQR7cu2ON7M', 1, '2021-02-20 23:18:08', '2021-02-20 23:18:08'),
(332, '7', 'Added new payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:30:41', '2021-02-21 18:30:41'),
(333, '7', 'Added new payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:32:26', '2021-02-21 18:32:26'),
(334, '7', 'updated payment gateway with name - Flutterwaves', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:32:42', '2021-02-21 18:32:42'),
(335, '7', 'updated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:32:49', '2021-02-21 18:32:49'),
(336, '7', 'deactivated bank with name - Access Bank', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:33:14', '2021-02-21 18:33:14'),
(337, '7', 'deactivated bank with name - Zenith Bank', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:33:14', '2021-02-21 18:33:14'),
(338, '7', 'activated bank with name - Access Bank', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:33:37', '2021-02-21 18:33:37'),
(339, '7', 'activated bank with name - Zenith Bank', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:33:37', '2021-02-21 18:33:37'),
(340, '7', 'deactivated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:34:10', '2021-02-21 18:34:10'),
(341, '7', 'deactivated payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:34:10', '2021-02-21 18:34:10'),
(342, '7', 'activated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:34:20', '2021-02-21 18:34:20'),
(343, '7', 'activated payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:34:20', '2021-02-21 18:34:20'),
(344, '7', 'deleted payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:50:25', '2021-02-21 18:50:25'),
(345, '7', 'deleted payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:50:25', '2021-02-21 18:50:25'),
(346, '7', 'updated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:51:39', '2021-02-21 18:51:39'),
(347, '7', 'updated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:52:54', '2021-02-21 18:52:54'),
(348, '7', 'updated payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:53:17', '2021-02-21 18:53:17'),
(349, '7', 'deactivated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:54:03', '2021-02-21 18:54:03'),
(350, '7', 'deactivated payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:54:03', '2021-02-21 18:54:03'),
(351, '7', 'activated payment gateway with name - Flutterwave', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:54:09', '2021-02-21 18:54:09'),
(352, '7', 'activated payment gateway with name - Paystack', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 18:54:09', '2021-02-21 18:54:09'),
(353, '7', 'Added new event. Title - Revival', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:00:05', '2021-02-21 19:00:05'),
(354, '7', 'Added new event. Title - Revival 2', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:00:56', '2021-02-21 19:00:56'),
(355, '7', 'deactivated event with title - Revival 2', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:01:02', '2021-02-21 19:01:02'),
(356, '7', 'deactivated event with title - Revival', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:01:02', '2021-02-21 19:01:02'),
(357, '7', 'activated event with title - Revival 2', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:01:07', '2021-02-21 19:01:07'),
(358, '7', 'activated event with title - Revival', '127.0.0.1', 'BKuwyRlGNFiJMsqrKEtrqL3VhIe0jzBgPjz020Kn', 1, '2021-02-21 19:01:07', '2021-02-21 19:01:07'),
(359, '7', 'Added new ministry. Title - Teaching Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:49:19', '2021-02-27 22:49:19'),
(360, '7', 'Added new ministry. Title - Evangelical Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:49:48', '2021-02-27 22:49:48'),
(361, '7', 'Added new ministry. Title - Deliverance Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:50:16', '2021-02-27 22:50:16'),
(362, '7', 'Added new ministry. Title - Prayer Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:50:34', '2021-02-27 22:50:34'),
(363, '7', 'featured ministry with name - Prayer Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:51:22', '2021-02-27 22:51:22'),
(364, '7', 'featured ministry with name - Deliverance Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:51:23', '2021-02-27 22:51:23'),
(365, '7', 'featured ministry with name - Evangelical Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:51:23', '2021-02-27 22:51:23'),
(366, '7', 'featured ministry with name - Teaching Ministry', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:51:23', '2021-02-27 22:51:23'),
(367, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:54:04', '2021-02-27 22:54:04'),
(368, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 22:54:23', '2021-02-27 22:54:23'),
(369, '7', 'Updated Ministry details.', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:03:38', '2021-02-27 23:03:38'),
(370, '7', 'Updated Ministry details.', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:07:46', '2021-02-27 23:07:46'),
(371, '7', 'Updated Ministry details.', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:13:07', '2021-02-27 23:13:07'),
(372, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:19:04', '2021-02-27 23:19:04'),
(373, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:19:12', '2021-02-27 23:19:12'),
(374, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:25:56', '2021-02-27 23:25:56'),
(375, '7', 'Home banner image updated', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:26:11', '2021-02-27 23:26:11'),
(376, '7', 'Added new blog post. Title - A young boy cured of mental problem', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:55:26', '2021-02-27 23:55:26'),
(377, '7', 'Added new blog post. Title - Repent and be saved', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:56:21', '2021-02-27 23:56:21'),
(378, '7', 'Added new blog post. Title - Holy Communion, the spiritual energy', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:57:04', '2021-02-27 23:57:04'),
(379, '7', 'Added new blog post. Title - The benefits of speaking in tongues - The Heavenly Language', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:58:01', '2021-02-27 23:58:01'),
(380, '7', 'featured blog with Title - The benefits of speaking in tongues - The Heavenly Language', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:59:16', '2021-02-27 23:59:16'),
(381, '7', 'featured blog with Title - Holy Communion, the spiritual energy', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:59:17', '2021-02-27 23:59:17'),
(382, '7', 'featured blog with Title - Repent and be saved', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:59:17', '2021-02-27 23:59:17'),
(383, '7', 'featured blog with Title - A young boy cured of mental problem', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-27 23:59:17', '2021-02-27 23:59:17'),
(384, '7', 'Added new testimony with testifier as - Frank Moore', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-28 01:07:18', '2021-02-28 01:07:18'),
(385, '7', 'Added new testimony with testifier as - Lucy Kelly', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-28 01:08:49', '2021-02-28 01:08:49'),
(386, '7', 'Added new testimony with testifier as - Ada Mmadu', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-28 01:09:18', '2021-02-28 01:09:18'),
(387, '7', 'updated testimony with testifier as - Ada Mmadus', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-28 01:10:48', '2021-02-28 01:10:48'),
(388, '7', 'updated testimony with testifier as - Ada Mmadu', '127.0.0.1', 'w1joFDg59HPNyYha7XjlkWe1npXzj2QJh7okAtu0', 1, '2021-02-28 01:10:57', '2021-02-28 01:10:57'),
(389, '7', 'updated event. Title - 2021 Annual CCRN Revival Conference', '127.0.0.1', 'le9iYkWd0fhIBOg2JDgBvpDeNQgr7OA8DIw66XKw', 1, '2021-03-03 20:47:02', '2021-03-03 20:47:02'),
(390, '7', 'updated event. Title - Life in the spirit seminar 2021', '127.0.0.1', 'le9iYkWd0fhIBOg2JDgBvpDeNQgr7OA8DIw66XKw', 1, '2021-03-03 20:47:46', '2021-03-03 20:47:46'),
(391, '7', 'updated parish message with', '127.0.0.1', 'le9iYkWd0fhIBOg2JDgBvpDeNQgr7OA8DIw66XKw', 1, '2021-03-03 21:04:11', '2021-03-03 21:04:11'),
(392, '7', 'updated parish message with', '127.0.0.1', 'le9iYkWd0fhIBOg2JDgBvpDeNQgr7OA8DIw66XKw', 1, '2021-03-03 21:15:07', '2021-03-03 21:15:07'),
(393, '7', 'Updated Ministry details.', '127.0.0.1', 'le9iYkWd0fhIBOg2JDgBvpDeNQgr7OA8DIw66XKw', 1, '2021-03-03 21:25:22', '2021-03-03 21:25:22'),
(394, '7', 'Home banner image updated', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 19:55:47', '2021-03-04 19:55:47'),
(395, '7', 'Home banner image updated', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 19:56:32', '2021-03-04 19:56:32'),
(396, '7', 'Updated Ministry details.', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 19:58:23', '2021-03-04 19:58:23'),
(397, '7', 'Updated Ministry details.', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 19:59:42', '2021-03-04 19:59:42'),
(398, '7', 'uploaded new images to gallery', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 20:49:13', '2021-03-04 20:49:13'),
(399, '7', 'uploaded new images to gallery', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 20:50:58', '2021-03-04 20:50:58'),
(400, '7', 'uploaded new images to gallery', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 20:54:24', '2021-03-04 20:54:24'),
(401, '7', 'uploaded new images to gallery', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 20:59:14', '2021-03-04 20:59:14'),
(402, '7', 'Added new team member with Name - Frank Moore', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:01:31', '2021-03-04 21:01:31'),
(403, '7', 'Added new team member with Name - Sis. Ela Lucy', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:02:10', '2021-03-04 21:02:10'),
(404, '7', 'Added new team member with Name - Sis. Lucy Ukeme', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:02:59', '2021-03-04 21:02:59'),
(405, '7', 'Added new team member with Name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:39', '2021-03-04 21:03:39'),
(406, '7', 'deactivated team member with name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:54', '2021-03-04 21:03:54'),
(407, '7', 'deactivated team member with name - Sis. Lucy Ukeme', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:54', '2021-03-04 21:03:54'),
(408, '7', 'deactivated team member with name - Sis. Ela Lucy', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:54', '2021-03-04 21:03:54'),
(409, '7', 'deactivated team member with name - Frank Moore', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:54', '2021-03-04 21:03:54'),
(410, '7', 'activated team member with name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:58', '2021-03-04 21:03:58'),
(411, '7', 'activated team member with name - Sis. Lucy Ukeme', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:58', '2021-03-04 21:03:58'),
(412, '7', 'activated team member with name - Sis. Ela Lucy', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:58', '2021-03-04 21:03:58'),
(413, '7', 'activated team member with name - Frank Moore', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:03:58', '2021-03-04 21:03:58'),
(414, '7', 'featured team member with name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:03', '2021-03-04 21:04:03'),
(415, '7', 'featured team member with name - Sis. Lucy Ukeme', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:03', '2021-03-04 21:04:03'),
(416, '7', 'featured team member with name - Sis. Ela Lucy', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:03', '2021-03-04 21:04:03'),
(417, '7', 'featured team member with name - Frank Moore', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:03', '2021-03-04 21:04:03'),
(418, '7', 'unfeatured team member with name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:10', '2021-03-04 21:04:10'),
(419, '7', 'unfeatured team member with name - Sis. Lucy Ukeme', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:10', '2021-03-04 21:04:10'),
(420, '7', 'unfeatured team member with name - Sis. Ela Lucy', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:10', '2021-03-04 21:04:10'),
(421, '7', 'unfeatured team member with name - Frank Moore', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:10', '2021-03-04 21:04:10'),
(422, '7', 'updated team member with Name - Bro. Livinus Okeke', '127.0.0.1', 'NQpq5KzX5kkCfXImXRwgYXiQkzAP7Xo21UHoy9n3', 1, '2021-03-04 21:04:25', '2021-03-04 21:04:25'),
(423, '7', 'updated testimony with testifier as - Ada Mmadu', '127.0.0.1', 'EWLSXvbuY4LQaod9z4ZeRAiCkDwkBiC6ug2C3EMT', 1, '2021-03-06 09:16:04', '2021-03-06 09:16:04'),
(424, '7', 'updated testimony with testifier as - Lucy Kelly', '127.0.0.1', 'EWLSXvbuY4LQaod9z4ZeRAiCkDwkBiC6ug2C3EMT', 1, '2021-03-06 09:16:40', '2021-03-06 09:16:40'),
(425, '7', 'updated testimony with testifier as - Frank Moore', '127.0.0.1', 'EWLSXvbuY4LQaod9z4ZeRAiCkDwkBiC6ug2C3EMT', 1, '2021-03-06 09:16:55', '2021-03-06 09:16:55'),
(426, '7', 'Added new testimony with testifier as - Frank Moore', '127.0.0.1', 'EWLSXvbuY4LQaod9z4ZeRAiCkDwkBiC6ug2C3EMT', 1, '2021-03-06 09:18:11', '2021-03-06 09:18:11'),
(427, '7', 'Updated Ministry details.', '127.0.0.1', 'EWLSXvbuY4LQaod9z4ZeRAiCkDwkBiC6ug2C3EMT', 1, '2021-03-06 16:13:13', '2021-03-06 16:13:13'),
(428, '7', 'updated payment gateway with name - Paystack', '127.0.0.1', 'UoG7fKXWn0wvdA4Wr4hyclFV2enEfRIs0S5mgmiO', 1, '2021-03-07 00:24:13', '2021-03-07 00:24:13'),
(429, '7', 'updated payment gateway with name - Flutterwave', '127.0.0.1', 'UoG7fKXWn0wvdA4Wr4hyclFV2enEfRIs0S5mgmiO', 1, '2021-03-07 01:01:03', '2021-03-07 01:01:03'),
(430, '7', 'Updated Ministry details.', '127.0.0.1', 'vd3CJAdqoEBzcLQ6U6x2Gefzeyz7cSuTa0gBiifl', 1, '2021-03-07 13:13:20', '2021-03-07 13:13:20'),
(431, '7', 'Updated Ministry details.', '127.0.0.1', 'vd3CJAdqoEBzcLQ6U6x2Gefzeyz7cSuTa0gBiifl', 1, '2021-03-07 13:14:44', '2021-03-07 13:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `tel`, `email`, `country`, `state`, `city`, `address`, `image`, `status`, `role`, `password`, `password_reset`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', '08011111111', 'info@optisoft.ng', NULL, NULL, NULL, 'Isolo Lagos', '1613864354.jpg', 1, 3, '$2y$10$WEflmS.zmd/fUyckUhmjt.YKKCPlnwl.vNR1KsdEthPqLsUeiOlea', NULL, 1, '2021-02-20 14:46:24', '2021-02-20 23:01:00'),
(7, 'Francis', 'Moggbana', '0813014851', 'fmogbana@yahoo.com', NULL, NULL, NULL, 'No 23 kayode adebanji street isolo', NULL, 1, 3, '$2y$10$t3v9vR6X7brOWWdFGKxzm.d3giry7vaTgX/AOYPqxfEU2W1hmo4uW', NULL, 1, '2021-02-20 20:54:34', '2021-02-20 23:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `account_name`, `account_no`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Zenith Bank', 'Jesus Care Ministry', '1012234567', 1, 1, '2021-02-20 21:18:14', '2021-02-21 18:33:37'),
(2, 'Access Bank', 'Jesus Care Ministry', '1012234564', 1, 1, '2021-02-20 21:18:28', '2021-02-21 18:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `link`, `title`, `description`, `button_name`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '1614891392.jpg', 'http://127.0.0.1:8000/', 'Repent and be saved', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do eiusmodtempor incididunt ut labore et <br> dolore magna aliqua.', 'Learn More', 1, 1, '2021-02-20 21:35:20', '2021-03-04 19:56:32'),
(2, '1614891347.jpg', 'http://127.0.0.1:8000/', 'Repent and be saved', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do eiusmodtempor incididunt ut labore et <br> dolore magna aliqua.', 'Learn More', 1, 1, '2021-02-20 21:36:12', '2021-03-04 19:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_video` int(11) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `description`, `image`, `video_id`, `is_video`, `cat_id`, `status`, `featured`, `created_by`, `created_at`, `updated_at`, `keywords`) VALUES
(1, 'a-young-boy-cured-of-mental-problem-1614473726', 'A young boy cured of mental problem', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p>', '1614473726.jpg', NULL, NULL, 1, 1, 1, 7, '2021-02-27 23:55:26', '2021-02-27 23:59:17', NULL),
(2, 'repent-and-be-saved-1614473781', 'Repent and be saved', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p>', '1614473781.jpg', NULL, NULL, 1, 1, 1, 7, '2021-02-27 23:56:21', '2021-02-27 23:59:17', NULL),
(3, 'holy-communion-the-spiritual-energy-1614473824', 'Holy Communion, the spiritual energy', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p>', '1614473824.jpg', NULL, NULL, 1, 1, 1, 7, '2021-02-27 23:57:04', '2021-02-27 23:59:16', NULL),
(4, 'the-benefits-of-speaking-in-tongues-the-heavenly-language-1614473880', 'The benefits of speaking in tongues - The Heavenly Language', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p>', '1614473880.jpg', NULL, NULL, 1, 1, 1, 7, '2021-02-27 23:58:00', '2021-02-27 23:59:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `featured`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Lifestyle', 'lifestyle-1613854265', 1, NULL, 1, '2021-02-20 19:51:05', '2021-02-20 19:55:29'),
(2, 'Technology', 'technology-1613854276', 1, NULL, 1, '2021-02-20 19:51:16', '2021-02-20 19:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortdescrpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fulldescrpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descrpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_secure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_debug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_auth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `fullname`, `shortname`, `email`, `email2`, `tel`, `tel2`, `tel3`, `address`, `address2`, `shortdescrpt`, `fulldescrpt`, `vision`, `mission`, `value`, `keywords`, `meta_descrpt`, `logo`, `favicon`, `about`, `terms`, `privacy`, `currency`, `youtube_video`, `mail_host`, `mail_username`, `mail_password`, `mail_port`, `mail_secure`, `mail_debug`, `mail_auth`, `sms_host`, `sms_username`, `sms_password`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`, `background_image`) VALUES
(1, 'Jesus Care Prayer Ministry', 'Jesus Care', 'contact@optisoft.ng', NULL, '+2348011223344', '+2348022334455', NULL, 'St Mary\'s Parish Isolo, Lagos State, Nigeria.', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p><br></p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.<br></p>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.', '1614471187.png', NULL, '1615126484.png', NULL, NULL, '₦', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-27 23:03:27', '2021-03-07 13:14:44', 'background_1615126400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `ref_id`, `donor_name`, `email`, `tel`, `amount`, `comment`, `country`, `state`, `city`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, '43001615086053', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', '100', 'test', NULL, NULL, NULL, NULL, 1, '2021-03-07 02:00:53', '2021-03-07 02:01:01'),
(2, '93721615086517', 'Francis Moore', 'fmogbana@yahoo.com', '0813014851', '5000', NULL, NULL, NULL, NULL, NULL, 1, '2021-03-07 02:08:37', '2021-03-07 02:08:45'),
(3, '128481615086564', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', '500', 'Testing', NULL, NULL, NULL, NULL, 1, '2021-03-07 02:09:24', '2021-03-07 02:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `tel`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Francis Moggbana', 'fmogbana@yahoo.com', '08130148511', 'test', 1, '2021-03-06 10:17:52', '2021-03-06 10:17:52'),
(2, 'Francis Moggbana', 'fmogbana@yahoo.com', '08130148511', 'test', 1, '2021-03-06 10:18:06', '2021-03-06 10:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `slug`, `title`, `description`, `image`, `start_date`, `end_date`, `start_time`, `end_time`, `status`, `created_by`, `created_at`, `updated_at`, `venue`) VALUES
(1, 'revival-1613937605', 'Life in the spirit seminar 2021', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p>', '1613937605.jpg', '2021-02-28', '2021-02-28', '18:00:00', '21:00:00', 1, 7, '2021-02-21 19:00:05', '2021-03-03 20:47:46', 'Parish Compound'),
(2, 'revival-2-1613937656', '2021 Annual CCRN Revival Conference', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"letter-spacing: 0px; color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p>', '1613937656.jpg', '2021-03-07', '2021-03-07', '18:00:00', '21:00:00', 1, 7, '2021-02-21 19:00:56', '2021-03-03 20:47:02', 'Parish Compound');

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE `event_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `event_id`, `image`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, '1614895211.jpg', 1, 7, '2021-03-04 20:49:13', '2021-03-04 21:00:29'),
(2, 1, '1614894553.XZXwjE.jpg', 1, 7, '2021-03-04 20:49:13', '2021-03-04 21:00:29'),
(3, 2, '1614894658.bhfkia.jpg', 1, 7, '2021-03-04 20:50:58', '2021-03-04 21:00:29'),
(4, 2, '1614894658.LFmlyq.jpg', 1, 7, '2021-03-04 20:50:58', '2021-03-04 21:00:29'),
(5, NULL, '1614894864.M72JFc.jpg', 1, 7, '2021-03-04 20:54:24', '2021-03-04 21:00:29'),
(6, NULL, '1614894864.H2i1IH.jpg', 1, 7, '2021-03-04 20:54:24', '2021-03-04 21:00:29'),
(7, NULL, '1614894864.HqyoVG.jpg', 1, 7, '2021-03-04 20:54:24', '2021-03-04 21:00:29'),
(8, NULL, '1614894864.96mvh4.jpg', 1, 7, '2021-03-04 20:54:24', '2021-03-04 21:00:29'),
(9, NULL, '1614895154.OewbiV.jpg', 1, 7, '2021-03-04 20:59:14', '2021-03-04 21:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(296, '2014_10_12_000000_create_users_table', 1),
(297, '2014_10_12_100000_create_password_resets_table', 1),
(298, '2019_08_19_000000_create_failed_jobs_table', 1),
(299, '2021_02_13_203140_create_ministries_table', 1),
(300, '2021_02_13_203423_create_events_table', 1),
(301, '2021_02_13_203443_create_blogs_table', 1),
(303, '2021_02_13_204435_create_programmes_table', 1),
(304, '2021_02_13_204841_create_donations_table', 1),
(305, '2021_02_13_204911_create_products_table', 1),
(306, '2021_02_13_205005_create_payment_gateways_table', 1),
(307, '2021_02_13_205022_create_payments_table', 1),
(308, '2021_02_13_205036_create_orders_table', 1),
(309, '2021_02_13_205134_create_ordered_products_table', 1),
(310, '2021_02_13_205353_create_admins_table', 1),
(311, '2021_02_13_205641_create_user_ministries_table', 1),
(312, '2021_02_13_210152_create_carts_table', 1),
(313, '2021_02_13_210310_create_parish_messages_table', 1),
(314, '2021_02_13_211858_create_ministry_activities_table', 1),
(315, '2021_02_13_211931_create_ministry_excos_table', 1),
(316, '2021_02_13_212336_create_event_images_table', 1),
(317, '2021_02_13_212543_create_blog_categories_table', 1),
(318, '2021_02_13_212559_create_product_categories_table', 1),
(319, '2021_02_13_225513_create_banks_table', 1),
(320, '2021_02_13_232415_create_banners_table', 1),
(321, '2021_02_14_162141_create_activity_logs_table', 1),
(322, '2021_02_20_191426_add_keywords_to_blogs_table', 2),
(323, '2021_02_20_225524_add_user_id_to_payments_table', 3),
(324, '2021_02_20_231026_create_enquiries_table', 4),
(325, '2021_02_20_231428_create_newsletters_table', 4),
(327, '2021_02_21_190152_add_venue_to_events_table', 5),
(328, '2021_02_13_203516_create_companies_table', 6),
(329, '2021_02_28_012743_create_testimonies_table', 7),
(330, '2021_03_03_220744_add_position_to_parish_messages_table', 8),
(331, '2021_02_24_194201_create_teams_table', 9),
(332, '2021_02_24_194239_create_galleries_table', 9),
(333, '2021_02_26_192208_add_background_image_to_companies_table', 9),
(334, '2021_03_06_085816_add_slug_to_testimonies_table', 10),
(335, '2021_03_06_232829_add_price_to_carts_table', 11),
(336, '2021_03_07_012548_add_price_to_ordered_products_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `slug`, `name`, `description`, `image`, `status`, `featured`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'teaching-ministry-1614469759', 'Teaching Ministry', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.<br><br></p>', '1614469759.jpg', 1, 1, 7, '2021-02-27 22:49:19', '2021-02-27 22:51:23'),
(2, 'evangelical-ministry-1614469788', 'Evangelical Ministry', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.<br><br></p>', '1614469788.jpg', 1, 1, 7, '2021-02-27 22:49:48', '2021-02-27 22:51:23'),
(3, 'deliverance-ministry-1614469816', 'Deliverance Ministry', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.<br><br></p>', '1614469816.jpg', 1, 1, 7, '2021-02-27 22:50:16', '2021-02-27 22:51:22'),
(4, 'prayer-ministry-1614469834', 'Prayer Ministry', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor.<br><br></p>', '1614469834.jpg', 1, 1, 7, '2021-02-27 22:50:34', '2021-02-27 22:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_activities`
--

CREATE TABLE `ministry_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `activity_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ministry_excos`
--

CREATE TABLE `ministry_excos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'fmogbana@yahoo.com', 1, '2021-03-07 00:54:00', '2021-03-07 00:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordered_products`
--

INSERT INTO `ordered_products` (`id`, `order_id`, `product_id`, `quantity`, `total`, `created_at`, `updated_at`, `price`) VALUES
(1, 2, 1, 1, 4000, NULL, NULL, 4000),
(2, 2, 4, 2, 6000, NULL, NULL, 3000),
(3, 3, 1, 3, 12000, NULL, NULL, 4000),
(4, 4, 1, 3, 12000, NULL, NULL, 4000),
(5, 5, 1, 3, 12000, NULL, NULL, 4000),
(6, 6, 4, 1, 3000, NULL, NULL, 3000),
(7, 7, 1, 1, 4000, NULL, NULL, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_code`, `country`, `state`, `city`, `delivery_address`, `name`, `email`, `tel`, `note`, `payment_method`, `total_amount`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'pbS1NAFGWO', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 3, 10000, 0, 5, '2021-03-07 00:24:45', '2021-03-07 00:24:45'),
(2, 1, '6X8HHOaQTt', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 3, 10000, 1, 5, '2021-03-07 00:26:57', '2021-03-07 00:27:19'),
(3, 1, 'p6cf6viSdr', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 4, 12000, 0, 5, '2021-03-07 01:02:06', '2021-03-07 01:02:06'),
(4, 1, 'rmLM8j9yMS', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 4, 12000, 0, 5, '2021-03-07 01:03:33', '2021-03-07 01:03:33'),
(5, 1, 'css5Ya4ae9', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 4, 12000, 1, 5, '2021-03-07 01:07:20', '2021-03-07 01:08:17'),
(6, 1, '6yrhEdktm9', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 3, 3000, 1, 5, '2021-03-07 01:13:17', '2021-03-07 01:13:27'),
(7, 1, '0GBZ9QjC1y', 'Nigeria', 'Lagos', 'Lagos', 'No 23 kayode adebanji street isolo', 'Francis Moggbana', 'fmogbana@yahoo.com', '0813014851', NULL, 3, 4000, 1, 5, '2021-03-07 01:18:04', '2021-03-07 01:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `parish_messages`
--

CREATE TABLE `parish_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parish_messages`
--

INSERT INTO `parish_messages` (`id`, `message_by`, `message`, `status`, `created_by`, `created_at`, `updated_at`, `position`) VALUES
(1, 'Parish Priest', '<p>In some of the businees houses in which there are many large number of data has been stored in Excel, and after storing that data, they want some application which helps them to store in web application database, that means to import into web application database.&nbsp;<br></p>', 2, 1, '2021-02-20 15:38:23', '2021-02-20 15:49:24', NULL),
(2, 'Parish Desk', '<p>In some of the businees houses in which there are many large number of data has been stored in Excel, and after storing that data, they want some application which helps them to store in web application database, that means to import into web application database.&nbsp;<br></p>', 2, 1, '2021-02-20 15:42:34', '2021-02-20 15:49:24', NULL),
(3, 'Rev. Fr. Donatus Okoye', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</span><br></p>', 1, 1, '2021-02-20 15:44:08', '2021-03-03 21:15:07', 'Parish Priest');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `donation_id` int(11) DEFAULT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL,
  `payment_gateway_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `transaction_id`, `order_id`, `donation_id`, `amount`, `status`, `payment_gateway_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '343021615080417', 2, NULL, 10000, 1, 3, '2021-03-07 00:27:19', '2021-03-07 00:27:19', 1),
(2, '675581615082840', 5, NULL, 12000, 1, 4, '2021-03-07 01:08:17', '2021-03-07 01:08:17', 1),
(3, '216881615083197', 6, NULL, 3000, 1, 3, '2021-03-07 01:13:27', '2021-03-07 01:13:27', 1),
(4, '387611615083484', 7, NULL, 4000, 1, 3, '2021-03-07 01:18:13', '2021-03-07 01:18:13', 1),
(5, '43001615086053', NULL, 1, 100, 1, 3, '2021-03-07 02:01:01', '2021-03-07 02:01:01', NULL),
(6, '93721615086517', NULL, 2, 5000, 1, 3, '2021-03-07 02:08:45', '2021-03-07 02:08:45', NULL),
(7, '128481615086564', NULL, 3, 500, 1, 4, '2021-03-07 02:10:17', '2021-03-07 02:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `slug`, `name`, `public_key`, `secret_key`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'paystack', 'Paystack', 'pk_test_c947326dde8db2ee04867b145c2815c669838122', 'sk_test_361673ba758bfc225bd3e7dce2c8bd9ad26a2f31', '1613937197.png', 1, NULL, '2021-03-07 00:24:13'),
(4, 'flutter', 'Flutterwave', 'FLWPUBK_TEST-20432a84ded3871fb1cba1a1bca240c6-X', 'FLWSECK_TEST-0dc5a9ea1553d7265f23d4838f6e71d5-X', '1613937174.png', 1, NULL, '2021-03-07 01:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `key`, `pname`, `cat_id`, `slug`, `description`, `image`, `price`, `keywords`, `featured`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'PD-0001001', 'King James Bible', 2, 'king-james-bible-1613843947', 'Testing', '1613843947.jpg', 4000, 'King James Bible', 2, 1, 1, '2021-02-20 16:59:07', '2021-02-20 17:22:44'),
(4, 'PD-0001002', 'NIV Bibles', 1, 'niv-bible-1613844931', 'Testing', '1613844931.jpg', 3000, 'Niv', 2, 1, 1, '2021-02-20 17:15:31', '2021-02-20 17:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Devotionals', 'devotionals-1613841898', 1, 1, '2021-02-20 16:24:58', '2021-02-20 19:52:36'),
(2, 'Sacramentals', 'sacramentals-1613841935', 1, 1, '2021-02-20 16:25:35', '2021-02-20 19:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time NOT NULL,
  `week_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `slug`, `title`, `description`, `image`, `start_time`, `week_day`, `venue`, `end_time`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'prayer-meeting-1613836449', 'Prayer Meeting', '<p>Testing</p>', NULL, '17:30:00', 'Wednesday', 'Parish Compound', '20:00:00', 1, 1, '2021-02-20 14:54:09', '2021-02-20 14:56:32'),
(2, 'bible-study-1613836517', 'Bible Study', '<p>Testing testing</p>', NULL, '17:30:00', 'Wednesday', 'Parish Compound', '20:00:00', 1, 1, '2021-02-20 14:55:17', '2021-02-20 14:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `position`, `description`, `image`, `facebook`, `twitter`, `instagram`, `linkedin`, `status`, `featured`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Frank Moore', 'frank-moore-1614895291', 'President', NULL, '1614895291.jpg', NULL, NULL, NULL, NULL, 1, 2, 7, '2021-03-04 21:01:31', '2021-03-04 21:04:10'),
(2, 'Sis. Ela Lucy', 'sis-ela-lucy-1614895330', 'Vice President', NULL, '1614895330.jpg', NULL, NULL, NULL, NULL, 1, 2, 7, '2021-03-04 21:02:10', '2021-03-04 21:04:10'),
(3, 'Sis. Lucy Ukeme', 'sis-lucy-ukeme-1614895379', 'Secretary General', NULL, '1614895379.jpg', NULL, NULL, NULL, NULL, 1, 2, 7, '2021-03-04 21:02:59', '2021-03-04 21:04:10'),
(4, 'Bro. Livinus Okeke', 'bro-livinus-okeke-1614895419', 'Treasurer', NULL, '1614895419.jpg', NULL, NULL, NULL, NULL, 1, 2, 7, '2021-03-04 21:03:39', '2021-03-04 21:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimony` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `testifier`, `testimony`, `location`, `image`, `status`, `featured`, `created_at`, `updated_at`, `slug`, `title`) VALUES
(1, 'Frank Moore', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</span></p>', 'Lagos Nigeria', '1614478038.jpg', 1, 1, '2021-02-28 01:07:18', '2021-03-06 09:16:55', 'fulfilled-job-1615025815', 'Fulfilled Job'),
(2, 'Lucy Kelly', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</span></p>', 'Lekki, Lagos Nigeria', '1614478129.jpg', 1, 1, '2021-02-28 01:08:49', '2021-03-06 09:16:40', 'a-bouncing-baby-boy-1615025800', 'A Bouncing baby Boy'),
(3, 'Ada Mmadu', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</span></p>', 'Lekki, Lagos Nigeria', '1614478158.jpg', 1, 1, '2021-02-28 01:09:18', '2021-03-06 09:16:04', 'delivered-from-stroke-1615025764', 'Delivered from Stroke'),
(4, 'Frank Moore', '<p><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(153, 153, 153); font-family: Poppins; font-size: 15px; letter-spacing: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></p>', 'Lekki, Lagos Nigeria', '1615025891.jpg', 1, NULL, '2021-03-06 09:18:11', '2021-03-06 09:18:11', 'delivered-from-stagnation-1615025891', 'Delivered from stagnation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_id`, `fname`, `lname`, `email`, `tel`, `address`, `avatar`, `status`, `email_verified_at`, `password`, `password_reset`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JSC-0001001', 'Francis', 'Moggbana', 'fmogbana@yahoo.com', '08130148511', 'No 23 kayode adebanji street isolo', '1615069715.jpg', 1, NULL, '$2y$10$oAOY.3vQ1L6J5LdOKegzLO9QmgehmckWutiYuaM466iQQU2GIhHGe', NULL, NULL, '2021-03-06 18:25:40', '2021-03-06 21:30:32'),
(2, 'JSC-0001002', 'Lucy', 'Kelly', 'fmogbana@gmail.com', '08130148512', NULL, NULL, 1, NULL, '$2y$10$cs4aIxkBDEnR29ndAhqkzeWzgw3M7gFVLwemfdlDFvXBDYn.Hcrpy', NULL, NULL, '2021-03-06 18:36:30', '2021-03-06 18:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_ministries`
--

CREATE TABLE `user_ministries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_tel_unique` (`tel`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donations_ref_id_unique` (`ref_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ministries_slug_unique` (`slug`);

--
-- Indexes for table `ministry_activities`
--
ALTER TABLE `ministry_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry_excos`
--
ALTER TABLE `ministry_excos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`);

--
-- Indexes for table `parish_messages`
--
ALTER TABLE `parish_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_transaction_id_unique` (`transaction_id`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_gateways_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_key_unique` (`key`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programmes_slug_unique` (`slug`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_slug_unique` (`slug`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_tel_unique` (`tel`);

--
-- Indexes for table `user_ministries`
--
ALTER TABLE `user_ministries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ministry_activities`
--
ALTER TABLE `ministry_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ministry_excos`
--
ALTER TABLE `ministry_excos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parish_messages`
--
ALTER TABLE `parish_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_ministries`
--
ALTER TABLE `user_ministries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 13, 2020 lúc 03:21 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_admin_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `certificate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_time` date NOT NULL,
  `cv_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company_users`
--

CREATE TABLE `company_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scales` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_zone` int(11) DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company_users`
--

INSERT INTO `company_users` (`id`, `name`, `email`, `password`, `address`, `avatar`, `phone`, `scales`, `id_zone`, `website`, `status`, `credit`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'FPT', 'fpt@fpt.edu.vn', '$2y$10$.mF5HzSFsIxe09PjmXp2POjdCYZEntAnsqdOvxnU5V0SirTp4QINS', '444 qqq', NULL, '0123456789', '2000', 1, NULL, NULL, NULL, 'zxczxczxc', '2020-08-01 05:34:45', '2020-08-01 05:34:45'),
(2, 'Viettel', 'viettel@gmail.com', '$2y$10$.mF5HzSFsIxe09PjmXp2POjdCYZEntAnsqdOvxnU5V0SirTp4QINS', '123ácdác', '2.png', '0123123123', '1000', 1, NULL, 1, 1, 'sađâsđâsd', NULL, NULL),
(3, 'abc', 'abc@gmail.com', '$2y$10$.mF5HzSFsIxe09PjmXp2POjdCYZEntAnsqdOvxnU5V0SirTp4QINS', '123 ccc', NULL, '012312312', '1000-2000', NULL, NULL, 1, 1, 'qưeqưeqưe', '2020-08-01 11:22:14', '2020-08-01 11:22:14'),
(4, 'vip vai loz2', '99thanhnv@gmail.com', '$2y$10$MJJ0CzLEUeoyW4jhmKgy9eYtiBl7xqQ8nBqjgkUZz9NLWAGvKB216', NULL, NULL, '0374562654', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-12 23:47:56', '2020-09-12 23:47:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentd_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `formalitys`
--

CREATE TABLE `formalitys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_formality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infor_work`
--

CREATE TABLE `infor_work` (
  `id` int(10) UNSIGNED NOT NULL,
  `desired_jobs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_present` int(11) NOT NULL,
  `salary_desires` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_time` date NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_cv`
--

CREATE TABLE `info_cv` (
  `id` int(10) UNSIGNED NOT NULL,
  `info_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_user_id` int(11) NOT NULL,
  `job_category_id` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL,
  `email_get_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_people` int(11) NOT NULL,
  `formality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `request` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`id`, `job_name`, `slug_name`, `images`, `company_user_id`, `job_category_id`, `id_zone`, `email_get_cv`, `address`, `deadline_job`, `amount_people`, `formality`, `experience`, `gender`, `job_desc`, `id_language`, `salary_type`, `salary_from`, `salary_to`, `interest`, `status`, `request`, `created_at`, `updated_at`) VALUES
(1, 'pt trang web', '0', 'images/images-job/user-info.jpg', 1, 1, 1, 'fpt@fpt.edu.vn', '195 Khâm Thiên', '2020-08-19', 12, 'Full Time', 'Dưới 1 năm', 'Không yêu cầu', 'dâsđâs', NULL, 'Từ', '10', NULL, 'sđâsđâs', 0, 'dâsđâs', '2020-08-01 08:05:23', '2020-08-01 08:05:23'),
(2, 'thực tập sinh java', '', 'images/images-job/2.png', 2, 1, 2, 'viettel@gmail.com', '123áđâsd', '2020-08-19', 5, 'Part Time', 'Dưới 1 năm', 'Không yêu cầu', 'áđacxc', NULL, 'Từ', '15', NULL, 'zxczxcxzczxczx', 1, 'sađâsđá', NULL, NULL),
(3, 'thực tập sinh php', '0', 'images/images-job/user-info.jpg', 1, 1, 1, 'fpt@fpt.edu.vn', '123zxczxc', '2020-08-27', 10, 'Full Time', 'Dưới 1 năm', 'Nam', 'zzzzzzzzzzzzz', '1', 'Trong Khoảng', '10', '20', 'cccccccccccc', 0, 'zzzzzzzzzzzzz', '2020-08-01 10:52:35', '2020-08-01 10:52:35'),
(4, 'sađâsdá', '0', 'images/images-job/images_5cY2company_logo_blank.png', 3, 1, 1, 'abc@gmail.com', '123 zxczxcz', '2020-08-26', 10, 'Full Time', '2 năm', 'Không yêu cầu', 'zxczxc', '1', 'Lên Đến', '30', NULL, 'zxczxczxczxczxc', 0, 'zxczxc', '2020-08-01 14:41:21', '2020-08-01 14:41:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_categories`
--

CREATE TABLE `job_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_categories`
--

INSERT INTO `job_categories` (`id`, `job_category_name`, `created_at`, `updated_at`) VALUES
(1, 'IT phần cứng', NULL, NULL),
(2, 'IT phần mềm', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `language`
--

INSERT INTO `language` (`id`, `name_language`, `created_at`, `updated_at`) VALUES
(1, 'php', NULL, NULL),
(2, 'java', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_29_134805_users', 1),
(2, '2020_06_29_135351_web_setting', 1),
(3, '2020_06_29_135437_save_the_job', 1),
(4, '2020_06_29_135637_infor_work', 1),
(5, '2020_06_29_140039_job_categories', 1),
(6, '2020_06_29_151708_info_cv', 1),
(7, '2020_06_29_151910_certificates', 1),
(8, '2020_06_29_152315_prizes', 1),
(9, '2020_06_29_153154_abouts', 1),
(10, '2020_06_29_153242_contacts', 1),
(11, '2020_06_29_153736_projects', 1),
(12, '2020_06_29_153958_jobs', 1),
(13, '2020_07_14_070925_company_users', 1),
(14, '2020_07_28_143018_formalitys', 1),
(15, '2020_07_28_143112_zones', 1),
(16, '2020_07_28_222548_rating', 1),
(17, '2020_07_31_151454_recruitment', 1),
(18, '2020_07_31_161816_language', 1),
(19, '2020_09_10_133819_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `company_id`, `payment_id`, `payer_id`, `payer_email`, `money`, `date`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PAYID-L5O4B7Q3XJ688801N380005V', 'Q3DXDTM67QENJ', 'test288ba88084067@personal.example.com', 25.00, '2020-09-13', 'USD', 'approved', '2020-09-12 23:51:38', '2020-09-12 23:51:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prizes`
--

CREATE TABLE `prizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `prize_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prize_time` date NOT NULL,
  `cv_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_start_time` date NOT NULL,
  `project_and_time` date NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitment`
--

INSERT INTO `recruitment` (`id`, `user_id`, `job_id`, `company_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-08-01', '2020-08-01 13:27:45', '2020-08-01 13:27:45'),
(2, 1, 3, 2, '2020-08-01', '2020-08-01 13:57:56', '2020-08-01 13:57:56'),
(5, 1, 4, 3, '2020-08-02', '2020-08-01 21:55:56', '2020-08-01 21:55:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `save_the_job`
--

CREATE TABLE `save_the_job` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `save_the_job`
--

INSERT INTO `save_the_job` (`id`, `job_id`, `user_id`, `company_id`, `date`, `created_at`, `updated_at`) VALUES
(4, 2, 1, 2, '2020-08-01', '2020-08-01 14:21:57', '2020-08-01 14:21:57'),
(5, 3, 1, 2, '2020-08-01', '2020-08-01 14:22:03', '2020-08-01 14:22:03'),
(6, 4, 1, 3, '2020-08-01', '2020-08-01 14:44:22', '2020-08-01 14:44:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_zone` int(11) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `avatar`, `address`, `birthday`, `status`, `language`, `id_zone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vuongthanh', 'admin@gmail.com', '$2y$10$7NLGXiWvUfS6x9VqbiyUUewPvdym5D6wJxCo177LK2lEcyH0pWNlu', '0782383686', '5f26477bb4685-person_4.jpg', '195 Khâm Thiên', '1997-01-07', NULL, 'php', 1, NULL, '2020-08-01 05:34:19', '2020-08-01 21:56:27'),
(2, 'test', 'test2@gmail.com', '$2y$10$LZ0gp1IKGCJ1diEsejqaxO926pH7OqRgCQwS7tz5hBcaKcFwnBf2W', '0123456789', NULL, 'áđâsdcádcá', '2020-01-09', NULL, 'java', 2, NULL, '2020-08-01 09:14:44', '2020-08-01 09:14:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_working` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `zones`
--

CREATE TABLE `zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `zones`
--

INSERT INTO `zones` (`id`, `name_zone`, `created_at`, `updated_at`) VALUES
(1, 'Hanoi', NULL, NULL),
(2, 'HCM', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `formalitys`
--
ALTER TABLE `formalitys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `infor_work`
--
ALTER TABLE `infor_work`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info_cv`
--
ALTER TABLE `info_cv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `prizes`
--
ALTER TABLE `prizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `save_the_job`
--
ALTER TABLE `save_the_job`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `formalitys`
--
ALTER TABLE `formalitys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `infor_work`
--
ALTER TABLE `infor_work`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `info_cv`
--
ALTER TABLE `info_cv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `prizes`
--
ALTER TABLE `prizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `save_the_job`
--
ALTER TABLE `save_the_job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

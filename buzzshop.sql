-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2019 lúc 03:45 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `buzzshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner-1.jpg', NULL, NULL, NULL),
(2, 'banner-2.jpg', NULL, NULL, NULL),
(3, 'banner-3.jpg', NULL, NULL, NULL),
(4, 'banner-slidebar.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `total` double NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Áo Thun', NULL, NULL),
(2, 'Áo Sơ Mi', NULL, NULL),
(3, 'Áo Khoác', NULL, NULL),
(4, 'Áo Croptop', NULL, NULL),
(5, 'Quần Jeans', NULL, NULL),
(6, 'Quần Shorts', NULL, NULL),
(7, 'Váy', NULL, NULL),
(8, 'Đầm', NULL, NULL),
(9, 'Túi Xách', NULL, NULL),
(10, 'Jumpsuit', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(23, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(24, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(25, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(37, 7, 'id', 'text', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(38, 7, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(39, 7, 'order_date', 'text', 'Order Date', 1, 1, 1, 1, 1, 1, '{}', 3),
(40, 7, 'total', 'text', 'Total', 1, 1, 1, 1, 1, 1, '{}', 4),
(41, 7, 'payment', 'text', 'Payment', 1, 1, 1, 1, 1, 1, '{}', 5),
(42, 7, 'note', 'text', 'Note', 1, 1, 1, 1, 1, 1, '{}', 6),
(43, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(44, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(45, 9, 'id', 'text', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(46, 9, 'bill_id', 'text', 'Bill Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(47, 9, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(48, 9, 'quantity', 'text', 'Quantity', 1, 1, 1, 1, 1, 1, '{}', 4),
(49, 9, 'unit_price', 'text', 'Unit Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(50, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(51, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(52, 11, 'id', 'text', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(53, 11, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(54, 11, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 3),
(55, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(56, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(62, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 13, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(65, 13, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(66, 13, 'unit_price', 'text', 'Unit Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(68, 13, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{\"on\":\"On\",\"off\":\"Off\",\"checked\":true}', 7),
(69, 13, 'new', 'checkbox', 'New', 1, 1, 1, 1, 1, 1, '{\"on\":\"On\",\"off\":\"Off\",\"checked\":true}', 8),
(70, 13, 'hot', 'checkbox', 'Hot', 1, 1, 1, 1, 1, 1, '{\"on\":\"On \",\"off\":\"Off\",\"checked\":true}', 9),
(71, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(72, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(74, 13, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(75, 13, 'promotion', 'text', 'Promotion', 1, 1, 1, 1, 1, 1, '{}', 5),
(76, 13, 'image', 'multiple_images', 'Image', 1, 1, 1, 1, 1, 1, '{\"max\":10,\"min\":0,\"expanded\":true,\"show_folders\":true,\"show_toolbar\":true,\"allow_upload\":true,\"allow_move\":true,\"allow_delete\":true,\"allow_create_folder\":true,\"allow_rename\":true,\"allow_crop\":true,\"allowed\":[],\"hide_thumbnails\":false,\"quality\":90,\"watermark\":{\"source\":\"...\",\"position\":\"top-left\",\"x\":0,\"y\":0}}', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-paw', 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"id\"}', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(7, 'bills', 'bills', 'Bill', 'Bills', 'voyager-folder', 'App\\Bill', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"id\"}', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(9, 'bill_details', 'bill-details', 'Bill Detail', 'Bill Details', 'voyager-folder', 'App\\BillDetails', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"id\"}', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(10, 'customers', 'customers', 'Customer', 'Customers', 'voyager-smile', 'App\\Customer', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"id\"}', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(11, 'slides', 'slides', 'Slide', 'Slides', 'voyager-photos', 'App\\Slide', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"id\"}', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(13, 'products', 'products', 'Product', 'Products', 'voyager-play', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-21 02:13:56', '2019-10-21 03:28:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-21 00:25:07', '2019-10-21 00:25:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-10-21 00:25:07', '2019-10-21 00:25:07', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 9, '2019-10-21 00:25:07', '2019-10-21 00:50:13', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 7, '2019-10-21 00:25:07', '2019-10-21 00:50:10', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 5, 1, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2019-10-21 00:25:07', '2019-10-21 00:50:13', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 2, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 3, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 4, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 5, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 7, '2019-10-21 00:25:07', '2019-10-21 00:46:45', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 6, '2019-10-21 00:25:16', '2019-10-21 00:46:45', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-paw', NULL, NULL, 2, '2019-10-21 00:44:39', '2019-10-21 00:46:37', 'voyager.categories.index', NULL),
(14, 1, 'Bills', '', '_self', 'voyager-folder', NULL, NULL, 4, '2019-10-21 00:48:07', '2019-10-21 02:38:15', 'voyager.bills.index', NULL),
(15, 1, 'Bill Details', '', '_self', 'voyager-folder', NULL, NULL, 5, '2019-10-21 00:48:54', '2019-10-21 00:50:07', 'voyager.bill-details.index', NULL),
(16, 1, 'Customers', '', '_self', 'voyager-smile', NULL, NULL, 6, '2019-10-21 00:49:17', '2019-10-21 00:50:10', 'voyager.customers.index', NULL),
(17, 1, 'Slides', '', '_self', 'voyager-photos', NULL, NULL, 8, '2019-10-21 00:49:52', '2019-10-21 00:50:13', 'voyager.slides.index', NULL),
(19, 1, 'Products', '', '_self', NULL, NULL, NULL, 3, '2019-10-21 02:13:56', '2019-10-21 02:38:15', 'voyager.products.index', NULL);

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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2016_01_01_000000_add_voyager_user_fields', 1),
(37, '2016_01_01_000000_create_data_types_table', 1),
(38, '2016_01_01_000000_create_pages_table', 1),
(39, '2016_01_01_000000_create_posts_table', 1),
(40, '2016_05_19_173453_create_menu_table', 1),
(41, '2016_10_21_190000_create_roles_table', 1),
(42, '2016_10_21_190000_create_settings_table', 1),
(43, '2016_11_30_135954_create_permission_table', 1),
(44, '2016_11_30_141208_create_permission_role_table', 1),
(45, '2016_12_26_201236_data_types__add__server_side', 1),
(46, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(47, '2017_01_14_005015_create_translations_table', 1),
(48, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(49, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(50, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(51, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(52, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(53, '2017_08_05_000000_add_group_to_settings_table', 1),
(54, '2017_11_26_013050_add_user_role_relationship', 1),
(55, '2017_11_26_015000_create_user_roles_table', 1),
(56, '2018_03_11_000000_add_user_settings', 1),
(57, '2018_03_14_000000_add_details_to_data_types_table', 1),
(58, '2018_03_16_000000_make_settings_value_nullable', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_10_18_114912_create_categories_table', 1),
(62, '2019_10_18_114949_create_bills_table', 1),
(64, '2019_10_18_115022_create_customers_table', 1),
(66, '2019_10_19_030904_add_category_id_to_products', 1),
(67, '2019_10_19_034022_add_customer_id_to_bills', 2),
(68, '2019_10_19_035100_add_product_id_to_bill_detail', 3),
(70, '2019_10_18_115004_create_bill_details_table', 4),
(71, '2019_10_19_035100_add_product_id_to_bill_details', 5),
(72, '2019_10_19_044451_add_bill_id_to_bill_details', 5),
(73, '2019_10_19_024546_create_slides_table', 6),
(74, '2019_10_20_193032_create_banners_table', 7),
(77, '2019_10_21_075852_create_images_table', 10),
(78, '2019_10_21_080318_add_product_id_to_images', 10),
(79, '2019_10_21_100925_create_products_table', 11),
(80, '2019_10_21_101759_add_status_to_products', 12),
(81, '2019_10_21_013442_add_new_to_product', 13),
(82, '2019_10_21_013727_add_hot_to_product', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(2, 'browse_bread', NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(3, 'browse_database', NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(4, 'browse_media', NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(5, 'browse_compass', NULL, '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(6, 'browse_menus', 'menus', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(7, 'read_menus', 'menus', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(8, 'edit_menus', 'menus', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(9, 'add_menus', 'menus', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(10, 'delete_menus', 'menus', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(11, 'browse_roles', 'roles', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(12, 'read_roles', 'roles', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(13, 'edit_roles', 'roles', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(14, 'add_roles', 'roles', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(15, 'delete_roles', 'roles', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(16, 'browse_users', 'users', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(17, 'read_users', 'users', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(18, 'edit_users', 'users', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(19, 'add_users', 'users', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(20, 'delete_users', 'users', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(21, 'browse_settings', 'settings', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(22, 'read_settings', 'settings', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(23, 'edit_settings', 'settings', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(24, 'add_settings', 'settings', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(25, 'delete_settings', 'settings', '2019-10-21 00:25:07', '2019-10-21 00:25:07'),
(26, 'browse_hooks', NULL, '2019-10-21 00:25:16', '2019-10-21 00:25:16'),
(27, 'browse_categories', 'categories', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(28, 'read_categories', 'categories', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(29, 'edit_categories', 'categories', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(30, 'add_categories', 'categories', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(31, 'delete_categories', 'categories', '2019-10-21 00:44:39', '2019-10-21 00:44:39'),
(37, 'browse_bills', 'bills', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(38, 'read_bills', 'bills', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(39, 'edit_bills', 'bills', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(40, 'add_bills', 'bills', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(41, 'delete_bills', 'bills', '2019-10-21 00:48:07', '2019-10-21 00:48:07'),
(42, 'browse_bill_details', 'bill_details', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(43, 'read_bill_details', 'bill_details', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(44, 'edit_bill_details', 'bill_details', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(45, 'add_bill_details', 'bill_details', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(46, 'delete_bill_details', 'bill_details', '2019-10-21 00:48:54', '2019-10-21 00:48:54'),
(47, 'browse_customers', 'customers', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(48, 'read_customers', 'customers', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(49, 'edit_customers', 'customers', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(50, 'add_customers', 'customers', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(51, 'delete_customers', 'customers', '2019-10-21 00:49:17', '2019-10-21 00:49:17'),
(52, 'browse_slides', 'slides', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(53, 'read_slides', 'slides', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(54, 'edit_slides', 'slides', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(55, 'add_slides', 'slides', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(56, 'delete_slides', 'slides', '2019-10-21 00:49:52', '2019-10-21 00:49:52'),
(62, 'browse_products', 'products', '2019-10-21 02:13:56', '2019-10-21 02:13:56'),
(63, 'read_products', 'products', '2019-10-21 02:13:56', '2019-10-21 02:13:56'),
(64, 'edit_products', 'products', '2019-10-21 02:13:56', '2019-10-21 02:13:56'),
(65, 'add_products', 'products', '2019-10-21 02:13:56', '2019-10-21 02:13:56'),
(66, 'delete_products', 'products', '2019-10-21 02:13:56', '2019-10-21 02:13:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `unit_price` double NOT NULL,
  `promotion` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `new` tinyint(4) NOT NULL,
  `hot` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `promotion`, `image`, `status`, `new`, `hot`, `created_at`, `updated_at`) VALUES
(1, 'ÁO THUN IN DÁNG NGƯỜI', 'Áo thun in dáng người. Size: S/M. Đặc tính: Trẻ trung - năng động. Thể loại: Trang phục dạo phố. Màu sắc: Đen - Trắng. Chất liệu: Thun.', 249000, 20, '[\"products\\\\October2019\\\\IDeTwTdLBjPsuKR9yb5h.jpg\",\"products\\\\October2019\\\\GIrJ7ZJzKbo4J3Y8L5XV.jpg\",\"products\\\\October2019\\\\aglc5KbSyO7JDQoA3Fy0.jpg\",\"products\\\\October2019\\\\3KOUMRoWqLYBH76SMzRo.jpg\"]', 1, 1, 0, '2019-10-21 03:29:00', '2019-10-21 03:30:27'),
(2, 'ÁO SƠ MI BASIC LỆCH TÀ', 'Áo sơ mi basic lệch tà. Size: S/M/L. Đặc tính: Trẻ trung – thanh lịch. Thể loại: Trang phục công sở. Màu sắc: Vàng sọc trắng – Đen sọc trắng. Chất liệu: Lụa sọc.', 359000, 10, '[\"products\\\\October2019\\\\gczUnQ1YbmYuR0pNOW1X.jpg\",\"products\\\\October2019\\\\bMQr3xJVmqJ7VAhEo1TQ.jpg\",\"products\\\\October2019\\\\q4wKWeCkM5LgXwu5bnjQ.jpg\",\"products\\\\October2019\\\\Y8zQfJ5wVx5xx5Weq0Ye.jpg\"]', 0, 1, 1, '2019-10-21 03:32:00', '2019-10-21 03:34:12'),
(3, 'KHOÁC TAY DÀI BASIC', '<p>Kho&aacute;c tay d&agrave;i basic xẻ lai tay. Size S/M/L. Đặc t&iacute;nh: Trẻ trung - thanh lịch. Thể loại: Trang phục c&ocirc;ng sở. M&agrave;u sắc: Đen - N&acirc;u. Chất liệu: Bố sọc nhuyễn.</p>', 370000, 20, '[\"products\\\\October2019\\\\FiLPygy98VYjTZdMy9d8.jpg\",\"products\\\\October2019\\\\rxDXlbcglXHd1AaD5JPx.jpg\",\"products\\\\October2019\\\\KGpq93HwUuOB2xOksB0o.jpg\",\"products\\\\October2019\\\\w2eBVeJg9Vweyybj8j5b.jpg\"]', 1, 1, 0, '2019-10-21 03:58:00', '2019-10-21 04:03:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-10-20 19:42:56', '2019-10-20 19:42:56'),
(2, 'user', 'Normal User', '2019-10-21 00:25:07', '2019-10-21 00:25:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\October2019\\S6GzO85JTdvDjs3f1JV7.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\October2019\\TA47MgiNI7YT8Gyig14L.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'slide-1.jpg', NULL, NULL, NULL),
(3, 'slide-2.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Buzz', 'hoangbui@gmail.com', 'users/default.png', NULL, '$2y$10$JGCrl0XZ1Oj5rKNzi./6z.eTBsu1TnTaO4LKqxLYf8pYtOO4tSeTW', '9pMfl0bkCIgK1exSDNYggs1ycclKotXa34KdGiO391tfWePNE4cXqAE9WFc7', NULL, '2019-10-20 19:42:55', '2019-10-20 19:42:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_product_id_foreign` (`product_id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Chỉ mục cho bảng `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

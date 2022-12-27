-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 27, 2022 lúc 09:08 AM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id20044445_huysanti`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin123', '123456', 'khangtgr@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file`
--

CREATE TABLE `file` (
  `id` int(111) NOT NULL,
  `image_url` text COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `file`
--

INSERT INTO `file` (`id`, `image_url`, `username`, `user_id`) VALUES
(1, 'IMG-63a980d2eb0144.58306646.png', 'huyreal2', 1),
(2, 'IMG-63a983d34c8083.86353831.png', 'khangwibu', 10),
(3, 'IMG-63a9847fe13544.11904465.jpg', 'khangwibu', 10),
(4, 'IMG-63a989d5004eb4.02719756.png', 'huyfake', 11),
(5, 'IMG-63a9a020991644.25390486.png', 'huyreal2', 1),
(6, 'IMG-63a9caafcf99f2.74787212.png', 'thinh12', 13),
(7, 'IMG-63a9d0f7cc1282.20213409.png', 'thinh12', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `id` int(255) NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice`
--

INSERT INTO `invoice` (`id`, `customer`, `address`, `phone`, `email`, `time_order`, `total`, `status`, `product_name`) VALUES
(1, 'sdgsdf', 'sdfsd', 768678, 'fdgdfgf@gmail.com', '2022-12-21 19:34:23', 112500, 2, 'Call'),
(2, 'dsfds', 'sdfsd', 879789, 'gsfd@gmail.com', '2022-12-22 09:46:35', 100000, 2, 'FiFa 23'),
(3, 'test', 'tesq', 123, 'test@te.c', '2022-12-23 11:07:48', 56800, 2, '56464564'),
(4, 'Huy', 'ct', 89980, 'dfgds@gmail.com', '2022-12-26 12:01:40', 112500, 2, 'Call Of Duty 2'),
(5, 'Huy', 'ct', 89980, 'dfgds@gmail.com', '2022-12-26 12:02:00', 112500, 2, 'Call Of Duty 2'),
(6, 'Huy', 'ct', 89980, 'dfgds@gmail.com', '2022-12-26 12:02:12', 112500, 2, 'Call Of Duty 2'),
(7, 'smile', 'lalala', 113, 'tanthinhnguyen01@gmail.com', '2022-12-26 16:34:14', 162000, 2, 'god of war');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_product` int(255) DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_invoice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `name_product` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name_search` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image5` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `initial_date` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `developer` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `publisher` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `platform` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` int(255) DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `old price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `name_search`, `price`, `quantity`, `image`, `image2`, `image3`, `image4`, `image5`, `initial_date`, `developer`, `publisher`, `platform`, `discount`, `description`, `old price`) VALUES
(1, 'Doom 3', 'Doom3', 27000, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9DvYnX-AtZGasdPi7G2ZtnuywVTxNDcIMDg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGb-J_Qn_2RjYKKeOYLAwggVFGMDzdchsFKg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5SQ_6MMV5fG_Qh_SSPP0kWKfgG_Xof19x-Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9blRlBPTygLB7qOj2ik3ipUembf5iRgv3iA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWYV4b-0OLZe_3xBCRzw8TRdFigdgf-9ZFyQ&usqp=CAU', '03/10/2022', ' Vicarious Visions', 'CyberFront Corporation', 'Action, Action-adventure, Simulation.', 20, 'Doom 3 is a 2004 survival horror first-person shooter video game developed by id Software and published by Activision. Doom 3 was originally released for Microsoft Windows on August 3, 2004, adapted for Linux later that year, and ported by Aspyr Media for Mac OS X in 2005', 135000),
(2, 'Splinter', 'splinter', 36000, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2SRyl08RrnZl4bCmTAdvJ7hWliIhnRqECzA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1wy4_XjcAMlQqrrzJo0tbHfMS7m4RzaK69A&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxldBzPskoohu6KADfv42PaabG5ySlmgCz_g&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ__w_SDNSW5bvbvz9MdGys08Fj4JJdvEKo2A&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgfRoWlkYp9Sx4VekpOsW0EYhp996t4imgEg&usqp=CAU', '20/02/21', 'Ubisoft Toronto', 'Ubisoft', 'Strategy,  Sports,  Survival horror', 30, 'The United States has a military presence in two-thirds of countries around the world, and some of them have had enough. A group of terrorists calling themselves The Engineers initiate a terror ultimatum called the Blacklist - a deadly countdown of escalating attacks on U.S. interests.', 120000),
(3, 'God of War', 'god of war', 63000, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTUeNN0F24BoBxCMDGh9xowbmafUh95PxqOA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTloGAXqY9NKcdYvO6rQBFZZX5kpXcHkSNCaQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQslhcsegBV8pcT3ul1YCMqHa60ZimpxLNZSw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGZDZ1Yfij-PwZIPhmUDH0gViB8LFkgP2YOw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVj70nWBS_dH5pK9RBP1JVC1BCf-FPY_xr_g&usqp=CAU', '08/03/2022', 'Field55 Studios', 'Field55 Publishing', 'Action RPG, Tactical RPG, Survival', 30, 'God of War is an action-adventure game franchise created by David Jaffe at Sony\'s Santa Monica Studio. It began in 2005 on the PlayStation 2 video game console and has become a flagship series for PlayStation, consisting of nine installments across multiple platforms', 210000),
(4, 'Resident Evil 8', 'resident evil 8', 56800, 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqdAodgdaOYk08CzCPW38CDLqUe16i0DWjxQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-cRVY48F8efFuYVRQFdc0fAGyA4IuJtlByA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHeD-4zVYPqT-phRXncGqL9SF0fK4BZNywlA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT54CmOsZJZt5lRRoIEbqb6smSX-qmAsA9RHQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxh0Tj6x3Tb9vW2rbea6iDzvbz4s1Izsmg0w&usqp=CAU', '21/02/2022', 'CAPCOM Co., Ltd.', 'CAPCOM Co., Ltd.', 'Survival horror, Single-player', 40, 'Experience survival horror like never before in the 8th major installment in the Resident Evil franchise - Resident Evil Village. With detailed graphics, intense first-person action and masterful storytelling, the terror has never felt more realistic.', 142000),
(5, 'Call Of Duty WW2', 'call of duty WW2', 112500, 35, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkVquNBVfZ6NF8JgIMuC-YfvMPO0OWIl9GkA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjLYpRRxxC2oC6LrdhCy5wXIXWg5ElNvPr8A&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFCk5Lx2LmbcCEjRvQCaoyuPSPYcX7xmOLUg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPdOJB9Rb-aLYTovXrBeuJwKsOIo1HeWRkGA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFwVkdwOLmdHshnT1NrgYFfAVlOf3Dq6-8xg&usqp=CAU', '19/03/2014', 'Infinity Ward', 'Activision', 'first-person shooter, Video games', 45, 'Call of Duty: WWII is a 2017 first-person shooter game developed by Sledgehammer Games and published by Activision. It was released worldwide on November 3, 2017 for PlayStation 4, Windows and Xbox One.', 250000),
(6, 'Avenger', 'avenger', 36000, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbNlqLgQm7ZiHj89wp6FLgnkcB-zR_fjC5XA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGW9CHNd7zeCbP5W3DeovtuDGikwqe1PzSQg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp4FUGwmqCf6s77k22dqQp-fTii-6YJSO5mQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDgIr-uQVkGI10ZBMOg6XU1pLWU1pGtRdcXA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToJOcip9E5ob90QEvCZEtxX2Vjtaor7X3iiQ&usqp=CAU', '12/01/2019', 'Crystal Dynamics', 'Eidos Interactive', 'Third-person, action-adventure, story-driven', 30, 'Marvel\'s Avengers is a 2020 action-adventure brawler game developed by Crystal Dynamics and published by Square Enix. Based on the Marvel Comics superhero team the Avengers, the game is mainly inspired by the Marvel Cinematic Universe\'s iteration of the group.', 120000),
(7, 'Choo-Choo Charles', 'Choo-Choo Charles', 35000, 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOZcPBfWSiKhvyhBa7Jmt4ZCPZU-nLVVnfng&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQun73AqWaXVAAwhZ-QFnxwCFR9xWqaL55-ZA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR8QrWOeSU9Q4WxwHTeT256mfQSPZzUiSliw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGVT_Hr6DdCFQrLGy4t8wX7m7pEQ-G71hb8A&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzzxfAUMuMao3WiG_7ZVhAia7QkExYCvF4ow&usqp=CAU', '12/12/2022', '\r\nTwo Star Games', '\r\nTwo Star Games', 'Survival horror, Open World, Horror', 35, 'Navigate an open-world island in an old train, upgrade it over time, and use it to fight an evil spider train named Charles.', 100000),
(8, 'Counter-Strike', 'Counter-Strike', 50000, 24, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4gjmHyppx3kRSxpcRzvaUQVIZX2uoueYQag&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtZtAgppEzzuINvoPjYT_EARt9bZYsOzDFaw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtfXx6ky9LjZQ3K4FG60ZhC2QEL4JwGGeuPw&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyHx3EZ_rSZOj061KwvB5fxyF8bP9UstcwbA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ7_8UMk55gBMeHbWeETcK39qGv6_Vr8o0Vg&usqp=CAU', '12/02/2017', '\r\nValve, Hidden Path Entertainment', '\r\nValve', 'FPS, Shooter, Multiplayer, Competitive', 20, 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).', 250000),
(9, 'Dota 2', 'Dota2', 70000, 10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWw-BADeH8fqICA5n5PzTzusHKBEW37obhTQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVmAPXIgXYa6BdS6h__tP-33yiCxArDzur5w&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5jIzUdisiQQF70fp96d3cuIswr6U8zreMSA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI1EVA9n0qNTubvM8wsjQS2Ii8QYtO5P0-ww&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuokTe2XZhZOtVjgcxThwXSkTPKIHBZm599g&usqp=CAU', '1/1/2008', 'Valve', 'Valve', 'MOBA, Multiplayer, Strategy', 10, 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.', 700000),
(10, 'Apex Legend', 'apex legend', 50000, 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcjIr_HPxDYwCDB8fHcFrwxESkQwRAW5Sbig&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu2d7N2zM0nT2pHe7uTPwlE4FXcP2FkbutOA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2mpOj2uRtXM_4AGOssBz7UO9zBeMOnOdewg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQO3-QiZCgUoSKU_JBZfvDkO52_Y9dAAM1zg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSInkev-9Q51E5fbx4-L2wmdhCsrN3jsZyTw&usqp=CAU', '17/02/2019', 'Respawn Entertainment', 'Electronic Arts', 'Free to play, Shooter, Battle Royale', 25, 'Apex Legends is the award-winning, free-to-play Hero Shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities, and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', 180000),
(11, 'PUGB - Battlegrounds', 'PUGB - Battlegrounds', 85000, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT73Zeb7hIiYvKdagguRU_KBKsB5e4Fg_Y4Bg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuzQ3ZpogtCdrc8n2zHsA4Uh_4WyU1UQHjlg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw6jMw6pWVKhKsiZDYj1E1w5TnLiofDCkOBQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3ow06-i0Tq-PyraKCqpfRBiGcsMlrzHlWKA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAyNVj1icScF57gz9Nh1Jy5I2-Wn2ph0npEQ&usqp=CAU', '01/01/2018', 'KRAFTON, Inc', 'KRAFTON, Inc', 'Survival, Multiplayer, Shooter', 15, 'Play PUBG: BATTLEGROUNDS for free. Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds. Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS. ', 130000),
(12, 'EA Sport FIFA 23', 'EA Sport FIFA 23', 100000, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNgxgzHG8s3yezYWs1WNAM2xAwpW3VXwfyAQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtLyh13svLWuyDlhauXISjOE89gvT1vNANQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxNpRZMbkJa7OYcUmtJJ_rQqrIkOIja-nPA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlyyUG865vUJoOJkDWTnKHOrN2RuCMYITmdg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJcZn1MD09pStc5-X7RQcGx4VlLGhT_X2PsA&usqp=CAU', '1/12/2022', 'EA Canada & EA Romania', '\r\nElectronic Arts', 'Soccer, eSports, PvP, Immersive Slim', 10, 'Experience the excitement of the biggest tournament in football with EA SPORTS™ FIFA 23 and the men’s FIFA World Cup™ update, available on November 9 at no additional cost!', 300000),
(13, 'Destiny 2', 'destiny 2', 75000, 30, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuq27_sLA8NqL2yT5Oux3MZ0Fwm-9CTwJ80w&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi3Rsvu_J29hEleRlDSvNFHh7nneRuE-GWXg&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuq27_sLA8NqL2yT5Oux3MZ0Fwm-9CTwJ80w&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvZfTCUsef-NAQfIb6aiwQ_TYJtgZ7lgMV7w&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8Q7dE-cXJbtDaRNE6ow577p-sCFMZJZ03mQ&usqp=CAU', '03/11/2012', 'Bungie', 'Bungie', 'Looter Shooter, FPS, Open World', 10, 'Experience the excitement of the biggest tournament in football with EA SPORTS™ FIFA 23 and the men’s FIFA World Cup™ update, available on November 9 at no additional cost!', 300000),
(14, 'Vermintide', 'Vermintide', 0, 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrPquWNONyG-CK529OWYUUjj6xp0wZDTqW6g&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE1OIkw2on1kcqsIIyN3OgE6qB5SaPqGg9ZA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1ncbyxFhyPjlypApEWkRJmYbP_peVYSHR7Q&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8qtZ99GTrDUrDWGs5oDWWDRVYIKYVjrkiww&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4meVDN7qKNRrAWZCSC64zQnd0Of5QrsYJiQ&usqp=CAU', '18/03/2015', 'Fatshark', 'Fatshark', 'Co-op, First-Person, Violent, PvE', 100, 'The critically acclaimed Vermintide 2 is a visually stunning and groundbreaking melee action game pushing the boundaries of the first person co-op genre. Join the fight now!', 150000),
(15, 'Rising Storm 2', 'Rising Storm 2', 0, 35, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL0OiWkV57lApKTbQXb2PHgg9qp3Zmthu7gQ&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfxT3I3Ez7hPsSTLcrWn6Lr3dckzK-MPjlig&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkDFt2VHN9aXM6oe9Y1UY_Gt3YgmN4TzOZQA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQBS5o_SvjOPpV9ogM9EMAP3A_Ihh5ZxJAKA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQBS5o_SvjOPpV9ogM9EMAP3A_Ihh5ZxJAKA&usqp=CAU', '15/10/2020', '\r\nAntimatter Games, Tripwire Interactive', '\r\nTripwire Interactive', 'FPS, War, Realistic, Military', 100, 'Red Orchestra Series\' take on Vietnam: 64-player MP matches; 20+ maps; US Army & Marines, PAVN/NVA, NLF/VC; Australians and ARVN forces; 50+ weapons; 4 flyable helicopters; mines, traps and tunnels; Brutal. Authentic. Gritty. Character customization. And napalm in the morning.', 110000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(30) NOT NULL,
  `post_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_review`
--

INSERT INTO `product_review` (`id`, `user_id`, `username`, `product_id`, `post_date`, `post_content`) VALUES
(188, 1, 'huyreal2', 1, '26/12/2022', '     hahaha                               '),
(189, 1, 'huyreal2', 1, '26/12/2022', '                                    vhvc'),
(191, 1, 'huyreal2', 5, '26/12/2022', '                                    good game'),
(192, 1, 'huyreal2', 3, '26/12/2022', '                                    Bad habits'),
(193, 10, 'khangwibu', 3, '26/12/2022', '                           Test        '),
(194, 13, 'thinh12', 3, '26/12/2022', '                                    sad'),
(195, 13, 'thinh12', 1, '26/12/2022', '                     sad               '),
(196, 13, 'thinh12', 2, '26/12/2022', '                                    sad'),
(197, 13, 'thinh12', 5, '26/12/2022', '                    sad\r\n                '),
(198, 13, 'thinh12', 4, '26/12/2022', '                                    sad'),
(199, 13, 'thinh12', 12, '26/12/2022', '                   hihi                 '),
(200, 13, 'thinh12', 10, '26/12/2022', '                                    das'),
(201, 13, 'thinh12', 11, '26/12/2022', '                                    sad'),
(202, 13, 'thinh12', 15, '26/12/2022', '                                    sad'),
(203, 13, 'thinh12', 8, '26/12/2022', '                                    sad'),
(204, 1, 'huyreal2', 3, '26/12/2022', 'san smith');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`) VALUES
(1, 'huysanti321456@gmail.com', 'huyreal2', 'fb345b64d9ef478d5f0d633319eb3e37', 'huysanti'),
(10, 'khangwibu@gmail.com', 'khangwibu', 'fb345b64d9ef478d5f0d633319eb3e37', 'khangwibu'),
(11, 'huyfake@gmail.com', 'huyfake', 'fb345b64d9ef478d5f0d633319eb3e37', 'huyfake'),
(37, 'wenhost@gmail.com', 'wenhost1', '80125cec762243921fe4e76bae0dfe8e', 'webhost');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `file`
--
ALTER TABLE `file`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD CONSTRAINT `invoice_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `product_review_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

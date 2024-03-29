-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 03:48 PM
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
-- Database: `eterna`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `about_image` varchar(80) NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_desc` longtext NOT NULL,
  `about_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `author_id`, `about_image`, `about_title`, `about_desc`, `about_created_at`) VALUES
(1, 2, '620e8b290587f4.19351748.jpg', 'hello world this is a title', '<p><span style=\"color: rgb(68, 68, 68); font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p><ol><li><span style=\"\" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><b style=\"\"><font color=\"#424242\">This is li list one</font></b></span></li><li><span style=\"\" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><b><font color=\"#424242\">This is li list two</font></b></span></li><li><span style=\"\" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><b style=\"\"><font color=\"#424242\">This is li list of three</font></b></span></li></ol>', '2021-08-20 10:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `abs`
--

CREATE TABLE `abs` (
  `ab_id` int(11) NOT NULL,
  `ab_icon` varchar(30) NOT NULL,
  `ab_max_value` int(11) NOT NULL,
  `ab_title` varchar(255) NOT NULL,
  `ab_desc` varchar(500) NOT NULL,
  `ab_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abs`
--

INSERT INTO `abs` (`ab_id`, `ab_icon`, `ab_max_value`, `ab_title`, `ab_desc`, `ab_created_at`) VALUES
(2, 'far fa-smile', 2000, 'Happy Clients', '<p>We are Satisfy for your supports</p>', '2021-08-24 10:16:03'),
(3, 'fa fa-hands-helping', 3000, 'We are always help you', '<p>Hi, There we always help you.&nbsp;</p>', '2021-08-24 10:18:56'),
(6, 'fa fa-shipping-fast', 1400, 'Free Delivery', '<p>We are always provide free delivery</p>', '2021-08-24 11:21:36'),
(7, 'fa fa-headset', 2671, 'Contact 24 Hours', '<p>We are supporting 24 hours</p>', '2021-08-24 11:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `address_title` varchar(255) NOT NULL,
  `map_link` varchar(500) NOT NULL,
  `address_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address_title`, `map_link`, `address_created`) VALUES
(1, 'Dhaka, Bangladesh', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.4993016377!2d90.25487262539737!3d23.78106723932943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1697894002421!5m2!1sen!2sbd', '2021-09-06 21:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_about` longtext NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `admin_photo` varchar(80) NOT NULL,
  `admin_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_about`, `admin_phone`, `admin_photo`, `admin_created_at`) VALUES
(3, 'Sujon Ahmed', 'sujonahmed5284@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hi, I am Sujon Ahmed a Web Application Developer.', '01743405982', '6533cd7d98ebd9.08918850.png', '2022-02-18 00:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_desc` longtext NOT NULL,
  `banner_img` varchar(80) NOT NULL,
  `banner_careated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `author_id`, `banner_title`, `banner_desc`, `banner_img`, `banner_careated_at`) VALUES
(8, 2, 'Welcome to Eterna', '<p><span style=\"text-align: center;\">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</span><br></p>', '620e921ed08b69.05969493.jpeg', '2022-02-18 00:21:18'),
(10, 3, 'About Eterna', '<p><span style=\"text-align: center;\">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</span><br></p>', '620e9332cb53f5.94433205.png', '2022-02-18 00:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_cat_id` int(11) NOT NULL,
  `blog_cat_name` varchar(25) NOT NULL,
  `blog_cat_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_cat_id`, `blog_cat_name`, `blog_cat_created_at`) VALUES
(2, 'Lifestyle', '2021-08-29 20:58:35'),
(3, 'Travel', '2021-08-29 20:58:44'),
(4, 'Creative', '2021-08-29 20:58:53'),
(5, 'Education', '2021-08-29 20:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `blog_post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_post_title` varchar(255) NOT NULL,
  `blog_post_desc` longtext NOT NULL,
  `blog_post_image` varchar(80) NOT NULL,
  `blog_post_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`blog_post_id`, `author_id`, `category_id`, `blog_post_title`, `blog_post_desc`, `blog_post_image`, `blog_post_created_at`) VALUES
(1, 3, 4, 'ওয়েবকোচবিডি টিপসগুরু কেন পিএইচপি বিখ্যাত?', '<p>পিএইচপি ল্যাংগুয়েজটি পৃথিবীতে মাত্র কয়েক বছর হয় এসছে। পিএইচপিকে \"Big Boys\" ল্যাংগুয়েজ বলা হয় পিএইচপি৫ ভার্সন আসার পর থেকে যেখানে জাভা, সি এসব ল্যাংগুয়েজকে অনেক আগে থেকে \"Big Boys\" বলা হত। পিএইচপি৫ ভার্সন এসছে ২০০৪ সালে। এসেই বাজিমাৎ। বর্তমানে পৃথিবীতে প্রায় ৪০ ভাগ (প্রায় ২৫০ মিলিয়ন সাইট - ২০১৩ পর্যন্ত) ওয়েব এপ্লিকেশন (সাইট) একা পিএইচপিতে তৈরী বাকি সব ল্যাংগুয়েজ মিলে ৬০ ভাগ। হুট করে এসে এত বিখ্যাত হবার কারন আছে..</p><p><b>১. প্রায় সব ডেটাবেস সমর্থন করে : </b>মুল ৫ টি ডেটাবেস সহ (Oracle, MySQL, PostgreSQL, SQLServer, MongoDB) প্রায় সব ডেটাবেস দিয়ে পিএইচপির কাজ করা যায়। যেকোন ডেটাবেস integrate করা তেমন কঠিন নয় বরং বহুল ব্যবহৃত ডেটাবেসগুলির ড্রাইভার পিএইচপিতে অটোমেটিক সেট করাই আছে।</p><p><b>২. পিএইচপি ইন্জিন মানুষের ব্রেইনের মত :</b> অন্যান্য ল্যাংগুয়েজ এর তুলনায় পিএইচপির ইন্জিন বেশি বুদ্ধিমান। এটা এভাবে যে এখানে ডেটা টাইপ ডিক্লেয়ার করতে হয়না সে নিজেই নিজেই ডেটা দেখে বুঝতে পারে এটা কোন ধরনের ডেটা (loosely typed language)। এছাড়া এখানে টাইপ কাস্ট করা যায় ফলে অপ্রত্যাশিত ভুল হয়না।</p><p><b>৩. সাপোর্ট এবং কমিউনিটি :</b> বেশ ঘন ঘনই পিএইচপির আপডেট বের হচ্ছে এবং খুব দ্রুতই নতুন নতুন ফিচার যোগ করছে। এছাড়া পিএইচপির ব্যবহারকারী তথা কমিউনিটি অনেক বড়। অনেক। যেকোন সমস্যা হলে কোন ফোরামে প্রশ্ন দিলে যত তারাতারি সারা পাবেন অন্য ল্যাংগুয়েজে তা পাবেন না।</p><p><b>৪. শেখা সহজ এবং বড় প্রজেক্ট করা যায় :</b> অন্যান্য ল্যাংগুয়েজের তুলনায় পিএইচপি শেখা সহজ। শুধু এইচটিএমএল এর মধ্যে কোড লিখে সার্ভারে রেখে ব্রাউজারে রান করালেই আউটপুট দেখতে পাচ্ছেন।</p><p>বর্তমানের পৃথিবীর সব বড় ওয়েব প্রজেক্টে পিএইচপি ব্যবহার হচ্ছে (যেমন ফেইসবুক, ম্যাজেন্টো ইত্যাদি) এবং পিএইচপি ৫ এ OOP এর পূর্নাঙ্গতা লাভ করাতে কোটি কোটি লাইন কোড লিখেও মেইনটিনেন্স এবং কোড রিফ্যাকটরিং ঝামেলার হচ্ছেনা। আরেকটা বড় সুবিধা হচ্ছে প্রজেক্টে সময় কম লাগে ফলে খরচ কম কিন্তু কাজ বেশি হয়।</p><p><b>৫. ইহূদী ডেভলপার : </b>পৃথিবীতে সবচেয়ে ট্যালেন্ট হচ্ছে ইহূদীরা। পৃথিবীর সব বড় বড় আবিষ্কার এবং প্রজেক্ট দেখবেন এদের তৈরী। ফেসবুকের জুকারবার্গ কিংবা পারমানবিক বোমার আবিষ্কারক আইনস্টাইন এরা ইহূদী। এমনকি বর্তমানেও পৃথিবীর সব বিখ্যাত বিশ্ববিদ্যালয়ের প্রফেসর, গবেষক বেশিরভাগ ইহূদী। PHP এরও জন্মদাতা এন্ডি গাটম্যান, জিভ সুরাস্কি এবং আরো একজন এরা ইহূদী।</p><p>ইহূদীরা কেন এত ট্যালেন্ট এর কারন হিসেবে অনেক কথা প্রচলিত আছে, অনেকে বলে থাকে এরা মুসা (আ:) এর অনুসারী ছিল এবং এরাই ঐ জাতি যাদেরকে আল্লাহ জান্নাতের খাবার (খাবারটির নাম মান্না সালওয়া) খাইয়েছিলেন প্রায় ৪০ বছর। এমনকি ইতিহাসেও এমনটিই লেখা আছে। ধারনা করা হয় যেহেতু বর্তমান ইহূদীরা এদেরেই বংশধর এবং জান্নাতের খাবার খাওয়াতে এদের মেধা সাধারনের চেয়ে বেশি।</p>', '62e6a4246a7728.01147291.png', '2022-07-31 21:47:48'),
(2, 3, 5, 'প্রোগ্রামিং এ মনোযোগ ধরে রাখতে ৩টি কৌশল', '<p>প্রোগ্রামিং করার সময় ধৈর্য্য ধরে রাখাই একটা চ্যালেন্জ। লম্বা সময় সমস্যা নিয়ে চিন্তা করে একদম সমস্যা ভিতরে ঐ সময় পর্যন্ত থাকতে হয়, যতক্ষন সমাধান না হয়। এই আর্টিকেলে কিছু টিপস দিচ্ছি, প্রয়োগ করে দেখতে পারেন। কাজ হয়।</p><p>১. কোডিং করতেছেন এমন সময় একটা complexity আসল। ব্যাস সমস্যা শুরু, আর চিন্তা করতে ইচ্ছা করেনা। দেখবেন যখনই প্রবলেম আসে তখনই সেখানে সময় ব্যায় বাদ দিয়ে ফেসবুক বা অনলাইন পত্রিকায় চলে গেছেন। তখন মনোযোগ কোডিং এ ধরে রাখতে সাথে সাথে চেয়ার থেকে উঠে যান, ১/১.৫ মিনিট এদিক ওদিক হেটে এসে আবার বসুন। দেখবেন আবার কোডিং এ মাথা ঘামানোর এনার্জি চলে এসেছে। গ্যারান্টি।</p><p><span style=\"font-size: 1rem;\">২. ব্যাক্তিগত প্রজেক্টে কাজ করার সময়, বেশি প্লান করিয়েন না। যেমন আজকে সারাদিনে অমুক অমুক কাজ করব, আজকেই লগিন সিস্টেমটা কমপ্লিট করব, ডেটাবেসের ডিজাইনটা আজই শেষ করব ইত্যাদি। বেশি প্লান করে বসলে সেদিন আর কোন কাজই হয়না। অল্প অল্প কাজ করুন কিন্তু প্রতিদিন করুন। প্রতিদিন ছোট একটা কাজ হলেও করুন।</span><br></p><p>৩. সামাজিক সাইটগুলিতে থাকুন তবে শুধু ব্রাউজিং এর জন্য নয় বরং এসব ব্যবহার করে নিজের উপর চাপ বৃদ্ধি করুন। বিভিন্ন সাইটে কিংবা ব্লগে আর্টিকেল লিখুন। নিজের কোড শেয়ার করুন। stackoverflow কিংবা এরুপ জায়গাগুলিতে জড়িয়ে পড়ুন। যখনি আপনার আর্টিকেলে অনেক মন্তব্য পড়বে, মানুষ এটা ওটা প্রশ্ন করবে তখনি কোডিং এর স্পৃহা বাড়বে। চিন্তা করতে বাধ্য হয়ে যাবেন।</p>', '62e6a510c40bf0.97872340.jpeg', '2022-07-31 21:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `brand_img` varchar(80) NOT NULL,
  `brand_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `author_id`, `brand_img`, `brand_created_at`) VALUES
(3, 1, '612316e947ec30.60929901.png', '2021-08-23 09:32:57'),
(4, 1, '612316f7cb1a06.84262094.png', '2021-08-23 09:33:11'),
(5, 1, '612318e1aafba6.70002907.png', '2021-08-23 09:41:21'),
(6, 1, '6123193110cc80.70068663.png', '2021-08-23 09:42:41'),
(7, 1, '6123193c861db7.96889691.png', '2021-08-23 09:42:52'),
(9, 1, '61231a132d5e83.59298293.png', '2021-08-23 09:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `card_icon` varchar(15) NOT NULL,
  `card_title` varchar(200) NOT NULL,
  `card_desc` longtext NOT NULL,
  `card_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `card_icon`, `card_title`, `card_desc`, `card_created_at`) VALUES
(1, 'fa fa-user', 'this is user icons', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.Â </span><br></p>', '2021-08-19 17:11:33'),
(2, 'fa fa-cog', 'this is settings', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.&nbsp;</span><br></p>', '2021-08-19 17:15:21'),
(3, 'fab fa-css3-alt', 'this is stylesheet', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.Â </span><br></p>', '2021-08-19 17:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `client_description`
--

CREATE TABLE `client_description` (
  `client_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `client_desc` varchar(255) NOT NULL,
  `client_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_description`
--

INSERT INTO `client_description` (`client_id`, `author_id`, `client_desc`, `client_created_at`) VALUES
(1, 1, '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-style: italic;\">Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh ', '2021-08-21 17:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_name` varchar(30) NOT NULL,
  `msg_email` varchar(50) NOT NULL,
  `msg_sub` varchar(255) NOT NULL,
  `msg_message` longtext NOT NULL,
  `msg_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_name`, `msg_email`, `msg_sub`, `msg_message`, `msg_created`) VALUES
(5, 'Toukir Ahmed', 'toukir@gmail.com', 'programming', 'Hi, I am Toukir Ahmed from Manikganj.', '2021-08-29 20:26:37'),
(6, 'Alamin Islam', 'alamin@gmail.com', 'Coding', 'Hi, I am Alamin From Dhaka', '2021-08-29 20:27:00'),
(7, 'Riman Ahmed', 'rimanahmed@gmail.com', 'lorem ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '2021-08-29 20:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_cat`
--

CREATE TABLE `portfolio_cat` (
  `portfolio_cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `slag` varchar(30) NOT NULL,
  `cat_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_cat`
--

INSERT INTO `portfolio_cat` (`portfolio_cat_id`, `cat_name`, `slag`, `cat_created`) VALUES
(5, 'web design', 'web-design', '2021-08-28 08:25:13'),
(6, 'web development', 'web-development', '2021-08-28 08:25:22'),
(9, 'app development', 'app-development', '2021-08-28 12:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tbl`
--

CREATE TABLE `portfolio_tbl` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_image` varchar(80) NOT NULL,
  `portfolio_cat_id` int(11) NOT NULL,
  `portfolio_img_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_tbl`
--

INSERT INTO `portfolio_tbl` (`portfolio_id`, `portfolio_title`, `portfolio_image`, `portfolio_cat_id`, `portfolio_img_created`) VALUES
(3, 'App Development', '612b8fb3ed5406.78189089.jpg', 9, '2021-08-28 12:30:19'),
(6, 'Development', '612b901a61c1a7.25043156.jpg', 6, '2021-08-29 19:48:10'),
(9, 'Design', '612b9a2cad7ed3.69237547.jpg', 5, '2021-08-29 20:31:08'),
(11, 'Design', '612bbd543e8801.74573881.jpg', 5, '2021-08-29 23:01:08'),
(12, 'Development', '612bc0ae353169.19149851.jpg', 6, '2021-08-29 23:15:26'),
(13, 'App', '612bc4cf168686.74674890.jpg', 9, '2021-08-29 23:33:03'),
(14, 'Development', '612bc52d2ecba5.01504173.jpg', 6, '2021-08-29 23:34:14'),
(15, 'Design', '612bc560cb4964.98525204.jpg', 5, '2021-08-29 23:35:28'),
(16, 'App', '612bc5efcdb6a7.17674513.jpg', 9, '2021-08-29 23:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_id` int(11) NOT NULL,
  `pricing_title` varchar(50) NOT NULL,
  `pricing_price` int(11) NOT NULL,
  `pricing_desc` longtext NOT NULL,
  `pricing_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_id`, `pricing_title`, `pricing_price`, `pricing_desc`, `pricing_created`) VALUES
(1, 'Free', 0, '<ul open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"padding: 0px; list-style: none; line-height: 20px;\"><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" style=\"width: 24px; float: left;\" data-filename=\"check.svg\" class=\"note-float-left\"><font color=\"#999999\">Quam adipiscing vitae proin</font></li><li style=\"color: rgb(153, 153, 153); padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nec feugiat nisl pretium</li><li style=\"color: rgb(153, 153, 153); padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nulla at volutpat diam uteera</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXIteCI+PGxpbmUgeDE9IjE4IiB5MT0iNiIgeDI9IjYiIHkyPSIxOCI+PC9saW5lPjxsaW5lIHgxPSI2IiB5MT0iNiIgeDI9IjE4IiB5Mj0iMTgiPjwvbGluZT48L3N2Zz4=\" style=\"width: 24px;\" data-filename=\"x.svg\">&nbsp; Pharetra massa massa ultricies</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXIteCI+PGxpbmUgeDE9IjE4IiB5MT0iNiIgeDI9IjYiIHkyPSIxOCI+PC9saW5lPjxsaW5lIHgxPSI2IiB5MT0iNiIgeDI9IjE4IiB5Mj0iMTgiPjwvbGluZT48L3N2Zz4=\" data-filename=\"x.svg\" style=\"width: 24px;\">&nbsp; Massa ultricies mi quis hendrerit</li></ul>', '2021-09-05 09:54:02'),
(2, 'Business', 19, '<ul style=\"padding: 0px; list-style: none; color: rgb(153, 153, 153); line-height: 20px; font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"width: 24px; float: left;\"><font color=\"#999999\">Quam adipiscing vitae proin</font></li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nec feugiat nisl pretium</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nulla at volutpat diam uteera</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Pharetra massa massa ultricies</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><span style=\"font-size: 1rem;\">Massa ultricies mi quis hendrerit</span></li></ul>', '2021-09-05 09:55:00'),
(3, 'Developer', 29, '<ul style=\"padding: 0px; list-style: none; color: rgb(153, 153, 153); line-height: 20px; font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\"><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"width: 24px; float: left;\"><font color=\"#999999\">Quam adipiscing vitae proin</font></li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nec feugiat nisl pretium</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nulla at volutpat diam uteera</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Pharetra massa massa ultricies</li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><span style=\"font-size: 1rem;\">Massa ultricies mi quis hendrerit</span></li><li style=\"padding-bottom: 12px;\"><img src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJmZWF0aGVyIGZlYXRoZXItY2hlY2siPjxwb2x5bGluZSBwb2ludHM9IjIwIDYgOSAxNyA0IDEyIj48L3BvbHlsaW5lPjwvc3ZnPg==\" data-filename=\"check.svg\" class=\"note-float-left\" style=\"color: rgb(133, 135, 150); width: 24px; float: left;\"><font color=\"#999999\"></font>Nec feugiat nisl pretium</li><li style=\"padding-bottom: 12px;\"><br></li><li></li></ul>', '2021-09-05 09:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `service_icon` varchar(30) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_desc` longtext NOT NULL,
  `service_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `author_id`, `service_icon`, `service_title`, `service_desc`, `service_created_at`) VALUES
(1, 1, 'fa fa-edit', 'Web Design', '<p><span style=\"font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\"><font color=\"#000000\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</font></span><br></p>', '2021-08-21 09:55:58'),
(2, 1, 'fa fa-code', 'Web Development', '<p><span style=\"font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\"><font color=\"#000000\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</font></span><br></p>', '2021-08-21 10:05:56'),
(3, 1, 'fa fa-gem', 'Product Management', '<p><span style=\"color: rgb(68, 68, 68); font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</span><br></p>', '2021-08-21 10:45:11'),
(4, 1, 'fas fa-bullhorn', 'Marketing', '<p><span style=\"font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\"><font color=\"#000000\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</font></span><br></p>', '2021-08-21 11:47:00'),
(5, 1, 'fas fa-pen-nib', 'Graphic Design', '<p><span style=\"font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\"><font color=\"#000000\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</font></span><br></p>', '2021-08-21 11:51:54'),
(6, 1, 'fas fa-shield-alt', ' Privacy policy', '<p><span style=\"font-family: \"Open Sans\", sans-serif; font-size: 14px; text-align: center;\"><font color=\"#000000\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</font></span><br></p>', '2021-08-21 11:55:02'),
(7, 1, 'fa fa-lock', 'lock your profile', '<p>lorem ipsum dammy text and some text added</p>', '2021-08-21 12:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `skill_category`
--

CREATE TABLE `skill_category` (
  `skill_cat_id` int(11) NOT NULL,
  `skill_cat_name` varchar(15) NOT NULL,
  `skill_cat_mx_val` int(11) NOT NULL,
  `skill_cat_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_category`
--

INSERT INTO `skill_category` (`skill_cat_id`, `skill_cat_name`, `skill_cat_mx_val`, `skill_cat_created`) VALUES
(1, 'html', 90, '2021-08-26 21:07:29'),
(2, 'css', 75, '2021-08-26 21:23:03'),
(3, 'javascript', 30, '2021-08-26 21:26:50'),
(5, 'php', 50, '2021-09-02 20:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `skill_content`
--

CREATE TABLE `skill_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_image` varchar(80) NOT NULL,
  `content_desc` longtext NOT NULL,
  `content_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_content`
--

INSERT INTO `skill_content` (`content_id`, `content_title`, `content_image`, `content_desc`, `content_created_at`) VALUES
(1, 'This is first title for skill section content', '6127b3bb234d10.80714306.jpg', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><br></p>', '2021-08-26 21:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `skill_desc`
--

CREATE TABLE `skill_desc` (
  `skill_desc_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `skill_desc` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_desc`
--

INSERT INTO `skill_desc` (`skill_desc_id`, `author_id`, `skill_desc`, `created_at`) VALUES
(1, 1, '<p><span open=\"\" sans\",=\"\" sans-serif;=\"\" font-style:=\"\" italic;\"=\"\" style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-style: italic;\">Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.&nbsp;</span><span class=\"bx bxs-quote-alt-right quote-icon-right\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; right: -5px; position: relative; top: 10px; font-family: boxicons !important;\"></span><br></p>', '2021-08-25 19:49:40'),
(3, 1, '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><br></p>', '2021-08-25 20:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(80) NOT NULL,
  `social_icon` varchar(50) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `social_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_name`, `social_icon`, `social_link`, `social_created`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://www.facebook.com', '2021-09-07 16:44:51'),
(2, 'Twitter', 'fab fa-twitter', 'https://twitter.com', '2021-09-07 20:16:17'),
(4, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com', '2021-09-07 20:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(80) NOT NULL,
  `sub_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `sub_email`, `sub_time`) VALUES
(4, 'sa7152681@gmailcom', '2021-08-23 18:30:52'),
(5, 'alaminvp@gmail.com', '2021-08-23 21:17:31'),
(6, 'sujonahmed5284@gmail.com', '2021-09-01 09:44:25'),
(7, 'riman@gmail.com', '2021-09-01 10:22:03'),
(8, 'toukir@gmail.com', '2021-09-03 21:29:52'),
(9, 'mahbub@gmail.com', '2021-09-03 21:30:16'),
(10, 'mahadi@gmail.com', '2021-09-03 21:30:26'),
(11, 'sajid@gmail.com', '2021-09-03 21:31:12'),
(12, 'ashanaur.rahman@gmail.com', '2021-09-03 21:32:21'),
(13, 'rina@gmail.com', '2021-09-03 21:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_m_id` int(11) NOT NULL,
  `team_m_img` varchar(80) NOT NULL,
  `team_m_name` varchar(30) NOT NULL,
  `team_m_profession` varchar(50) NOT NULL,
  `team_m_about` longtext NOT NULL,
  `team_m_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_m_id`, `team_m_img`, `team_m_name`, `team_m_profession`, `team_m_about`, `team_m_created`) VALUES
(1, '6129ffc53902a2.62248195.jpg', 'Toukir Ahmed', 'Developer', '<p><span style=\"color: rgb(170, 170, 170); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: italic; text-align: center;\">Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut</span><br></p>', '2021-08-28 13:26:55'),
(2, '6129e58dc64113.36437828.jpg', 'Md. Ashanaur Rahman ', 'Senior Developer', '<p><span style=\"color: rgb(170, 170, 170); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: italic; text-align: center;\">Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus</span><br></p>', '2021-08-28 13:28:13'),
(3, '6129e5a7eccf17.60695689.jpg', 'Alamin Islam VP', 'Developer', '<p><span style=\"color: rgb(170, 170, 170); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: italic; text-align: center;\">Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara</span><br></p>', '2021-08-28 13:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `test_id` int(11) NOT NULL,
  `test_img` varchar(80) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `test_profession` varchar(50) NOT NULL,
  `test_msg` longtext NOT NULL,
  `test_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`test_id`, `test_img`, `test_name`, `test_profession`, `test_msg`, `test_created_at`) VALUES
(5, '61251c95f2cb61.17902623.jpg', 'Toukir Ahmed', 'Programmer', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-style: italic;\">Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.&nbsp;</span><span class=\"bx bxs-quote-alt-right quote-icon-right\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; right: -5px; position: relative; top: 10px; font-family: boxicons !important;\"></span><br></p>', '2021-08-24 22:21:42'),
(6, '61251cfe44fc09.71586415.jpg', 'Alamin Islam', 'Developer', '<p><span style=\"color: rgb(68, 68, 68); font-family: \"Open Sans\", sans-serif; font-style: italic;\">Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.Â </span><span class=\"bx bxs-quote-alt-right quote-icon-right\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; right: -5px; position: relative; top: 10px; font-family: boxicons !important;\"></span><br></p>', '2021-08-24 22:22:04'),
(7, '620e8b71c98fd7.41637282.jpg', 'Md.Ashanaur Rahman', 'Developer', '<p><span style=\"color: rgb(68, 68, 68); font-family: \"Open Sans\", sans-serif; font-style: italic;\">Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa. </span><br></p>', '2021-08-24 22:33:21'),
(10, '61264d8db769e5.54469405.jpg', 'Sara Wilsson', 'Designer', '<p><span open=\"\" sans\",=\"\" sans-serif;=\"\" font-style:=\"\" italic;\"=\"\" style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-style: italic;\">Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.&nbsp;</span><span class=\"bx bxs-quote-alt-right quote-icon-right\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; right: -5px; position: relative; top: 10px; font-family: boxicons !important;\"></span><br></p>', '2021-08-25 20:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_desc`
--

CREATE TABLE `testimonials_desc` (
  `testimonial_desc_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `testimonial_desc` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_desc`
--

INSERT INTO `testimonials_desc` (`testimonial_desc_id`, `author_id`, `testimonial_desc`, `created_at`) VALUES
(1, 1, '<p><span class=\"bx bxs-quote-alt-left quote-icon-left\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; left: -5px; position: relative; font-family: boxicons !important;\"></span><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-style: italic;\">Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.&nbsp;</span><span class=\"bx bxs-quote-alt-right quote-icon-right\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; display: inline-block; speak: none; -webkit-font-smoothing: antialiased; color: white; font-size: 26px; right: -5px; position: relative; top: 10px; font-family: boxicons !important;\"></span><br></p>', '2021-08-25 11:50:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `abs`
--
ALTER TABLE `abs`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_email` (`admin_email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_cat_id`),
  ADD UNIQUE KEY `blog_cat_name` (`blog_cat_name`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`blog_post_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `client_description`
--
ALTER TABLE `client_description`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  ADD PRIMARY KEY (`portfolio_cat_id`),
  ADD UNIQUE KEY `slag` (`slag`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `portfolio_tbl`
--
ALTER TABLE `portfolio_tbl`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `skill_category`
--
ALTER TABLE `skill_category`
  ADD PRIMARY KEY (`skill_cat_id`),
  ADD UNIQUE KEY `skill_cat_name` (`skill_cat_name`);

--
-- Indexes for table `skill_content`
--
ALTER TABLE `skill_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `skill_desc`
--
ALTER TABLE `skill_desc`
  ADD PRIMARY KEY (`skill_desc_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`),
  ADD UNIQUE KEY `social_name` (`social_name`),
  ADD UNIQUE KEY `social_link` (`social_link`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_m_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `testimonials_desc`
--
ALTER TABLE `testimonials_desc`
  ADD PRIMARY KEY (`testimonial_desc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `abs`
--
ALTER TABLE `abs`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `blog_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_description`
--
ALTER TABLE `client_description`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  MODIFY `portfolio_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio_tbl`
--
ALTER TABLE `portfolio_tbl`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill_category`
--
ALTER TABLE `skill_category`
  MODIFY `skill_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill_content`
--
ALTER TABLE `skill_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill_desc`
--
ALTER TABLE `skill_desc`
  MODIFY `skill_desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials_desc`
--
ALTER TABLE `testimonials_desc`
  MODIFY `testimonial_desc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

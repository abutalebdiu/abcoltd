-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 12:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcoltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_ipos`
--

CREATE TABLE `apply_ipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ipo_id` int(10) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `amount` varchar(11) NOT NULL,
  `client_code` int(11) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `instrument_code` varchar(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `balance` decimal(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `authar_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `category_id`, `image`, `description`, `authar_id`, `status`, `created_at`, `updated_at`) VALUES
(10, '১৩ জুন থেকে শুরু হচ্ছে বারাকা পতেঙ্গার আইপিও আবেদন চলবে ১৭ জুন পর্যন্ত', '13-jun-theke-suru-hcche-baraka-ptengoar-aipioo-abedn-clbe-17-jun-prznt', 12, 'public/images/blogs/60b85b30aa775.jpg', '<p style=\"margin-right: 0px; margin-bottom: 3rem; margin-left: 0px; color: rgb(17, 17, 17); font-family: Solaiman, SolaimanLipi; font-size: 18px; text-align: justify;\"><b>প্রতিবেদক:</b> পুঁজিবাজার থেকে অর্থ উত্তোলনে প্রাথমিক গণপ্রস্তাবের (আইপিও) আবেদন শুরু করতে যাচ্ছে বারাকা পতেঙ্গা পাওয়ার।<br>আগামী ১৩ জুন শুরু হবে আবেদন প্রক্রিয়া।<br>আজ সোমবার (৩১ মে) এমন তথ্য জানিয়েছে ঢাকা স্টক এক্সচেঞ্জ(ডিএসই)। জানা গেছে, বুক বিল্ডিং পদ্ধতিতে অর্থ উত্তোলন করবে বারাকা পতেঙ্গা পাওয়ার। আবেদন গ্রহণ চলবে ১৭ জুন পর্যন্ত।<br>শর্ত অনুযায়ী যোগ্য বিনিয়োগকারীরা আবেদন করতে পারবে। সাধারণ বিনিয়োগকারীদের আবেদনের ক্ষেত্রে পুঁজিবাজারে কমপক্ষে ২০ হাজার টাকা বিনিয়োগ থাকতে হবে।<br>এর আগে কোম্পানিটির কাট-অফ প্রাইস নির্ধারণে ২২ ফেব্রুয়ারি থেকে ২৫ ফেব্রুয়ারি পর্যন্ত বিডিং (নিলাম) অনুষ্ঠিত হয়। বিডিংয়ে কোম্পানিটির কাট-অফ প্রাইস নির্ধারণ করা হয় ৩২ টাকা।<br>গত ৫ জানুয়ারি পুঁজিবাজার নিয়ন্ত্রক সংস্থা বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশনের (বিএসইসি) ৭৫৫তম সভায় কোম্পানিটিকে বিডিংয়ের অনুমোদন দেয়।</p><p style=\"margin-right: 0px; margin-bottom: 3rem; margin-left: 0px; color: rgb(17, 17, 17); font-family: Solaiman, SolaimanLipi; font-size: 18px; text-align: justify;\">বারাকা পতেঙ্গা পাওয়ার বুক বিল্ডিং পদ্ধতিতে প্রাথমিক গণপ্রস্তাবের (আইপিও) মাধ্যমে বাজার থেকে ২২৫ কোটি টাকা উত্তোলন করবে। এ অর্থ কোম্পানিটির সাবসিডিয়ারি কর্ণফুলী পাওয়ার ও বারাকা শিকলবাহা পাওয়ারে বিনিয়োগ, আংশিক দীর্ঘমেয়াদি ঋণ পরিশোধ এবং আইপিওজনিত ব্যয়ে ব্যবহার করা হবে।</p><p style=\"margin-right: 0px; margin-bottom: 3rem; margin-left: 0px; color: rgb(17, 17, 17); font-family: Solaiman, SolaimanLipi; font-size: 18px; text-align: justify;\">কোম্পানিটির ২০১৯-২০ অর্থবছরে সমন্বিতভাবে শেয়ারপ্রতি মুনাফা (ইপিএস) হয়েছে ৪ টাকা ৩৭ পয়সা। আর বিগত পাঁচটি আর্থিক বিবরণী অনুযায়ী ভারিত গড় হারে শেয়ারপ্রতি মুনাফা হয়েছে ৩ টাকা ৩০ পয়সা। ২০২০ সালের ৩০ জুন কোম্পানিটির সমন্বিতভাবে শেয়ারপ্রতি নিট সম্পত্তি মূল্য (এনএভিপিএস) দাঁড়িয়েছে ২৩ টাকায়।</p><p style=\"margin-right: 0px; margin-bottom: 3rem; margin-left: 0px; color: rgb(17, 17, 17); font-family: Solaiman, SolaimanLipi; font-size: 18px; text-align: justify;\">কোম্পানিটির ইস্যু ব্যবস্থাপকের দায়িত্বে রয়েছে লংকাবাংলা ইনভেস্টমেন্টস।</p><p style=\"margin-right: 0px; margin-bottom: 3rem; margin-left: 0px; color: rgb(17, 17, 17); font-family: Solaiman, SolaimanLipi; font-size: 18px; text-align: justify;\">সুত্রঃ ইন্টারনেট&nbsp;</p>', 1, 1, '2021-06-03 04:31:44', '2021-06-03 04:36:28'),
(11, 'পুঁজিবাজারে থাকছে না ওটিসি মার্কেট', 'punnjibajare-thakche-na-ootisi-market', 13, 'public/images/blogs/60bb0448acb08.jpg', '<p><b>প্রতিবেদক: </b>পুঁজিবাজারে লোকসানি\r\n ও বন্ধ কোম্পানি নিয়ে গঠিত ওভার দ্য কাউন্টার মার্কেটে (ওটিসি) থাকছে না \r\nকোনো কোম্পানি। বর্তমানে এই মার্কেটে তালিকাভুক্ত ৬৪টি কোম্পানির মধ্যে \r\n৫০টিরও বেশি স্থানান্তর করা হবে ডিএসইর মূল মার্কেট, এসএমই বোর্ড ও \r\nঅল্টারনেটিভ ট্রেডিং বোর্ড- এটিবিতে। আর ১৩টি কোম্পানি তালিকাচ্যুতির আবেদন\r\n করেছে। এর মধ্যে চারটির তালিকাচ্যুতির কাজ এগিয়ে চলছে।</p>\r\n<p>পুঁজিবাজার নিয়ন্ত্রক সংস্থা বাংলাদেশ সিকিউরিটিজ এন্ড এক্সচেঞ্জ \r\nকমিশনের (বিএসইসি) চেয়ারম্যান অধ্যাপক শিবলী রুবাইয়াত-উল-ইসলাম একটি শীর্ষ \r\nস্থানীয় নিউজ পোর্টালকে বলেন, ‘ওটিসি বলে কিছু রাখা যাবে না। এটা হলে \r\nকোম্পানির গভর্নেন্স থাকে না। ইচ্ছামতো চালায়, বিক্রি করে দেয়। জনগণ \r\nক্ষতিগ্রস্ত হয়।’</p>\r\n<p>জানা যায়, ২০০৯ সালে বিএসইসি ওটিসি মার্কেট গঠন করে। উৎপাদনে না থাকা, \r\nনিয়মিত বার্ষিক সাধারণ সভা (এজিএম) না করা, কাগজের শেয়ার রাখা, নিয়ম \r\nঅনুযায়ী বিএসইসিতে আর্থিক প্রতিবেদন জমা না দেয়া, ডিভিডেন্ড প্রদান ও \r\nসিকিউরিটিজ আইন পরিপালন না করা কোম্পানিগুলোকে নিয়ে ওটিসি মার্কেট চালু \r\nকরা হয়।</p>\r\n<p>সম্প্রতি স্থানান্তরিত হয়েছে ইউনাইটেড এয়ার। দীর্ঘদিন ধরে কোম্পানির \r\nকার্যক্রম না থাকার কারণে কোম্পানিটিকে ওটিসি মার্কেটে স্থানান্তর করা \r\nহয়েছে।</p>\r\n<p>ওটিসিতে পাঠানোর পর ইলেকট্রনিক শেয়ারে রূপান্তর, কোম্পানিকে মুনাফায় \r\nফিরিয়ে ডিভিডেন্ড বিতরণ করে মূল মার্কেটে ফিরেছে ইউসিবিএল ব্যাংক, ওয়াটা \r\nক্যামিকেল, আলিফ ইন্ডাস্ট্রিজ, সোনালি পেপার।</p>\r\n<p>বিএসইসি চেয়ারম্যান চেয়ারম্যান বলেন, তমিজউদ্দিন টেক্সটাইল মিলস \r\nলিমিটেড, বাংলাদেশ মনোস্পুল পেপার ম্যানুফ্যাকচারার কোম্পানি লিমিটেড, \r\nপেপার প্রসেসিং অ্যান্ড প্যাকেজিং লিমিটেড এবং মুন্নু ফেব্রিক্স লিমিটেডের \r\nওটিসি থেকে মূল মার্কেটে ফেরার প্রক্রিয়ায় রয়েছে।</p>\r\n<p>জানা যায়, ১৯৯৬ সালে পুঁজিবাজারে তালিকাভুক্ত হওয়া মুন্নু ফেব্রিক্স গত \r\nঅর্থবছরে মুনাফায় ফিরেছে। ২০১৯-২০ সময়ে কোম্পানিটির শেয়ারপ্রতি আয়-ইপিএস \r\nবেড়েছে ৬ পয়সা। এ সময়ে কোম্পানির ইপিএস হয়েছে ১১ পয়সা। আগের অর্থবছরের \r\nইপিএস ছিল ৫ পয়সা।</p>\r\n<p>২০১৮ সালে তালিকাভুক্ত হওয়া বাংলাদেশ মনোস্পুল পেপার ম্যানুফ্যাকচারিং \r\nকোম্পানি লিমিটেড ও পেপার প্রসেস অ্যান্ড প্যাকেজিং লিমিটেড বিনিয়োগকারীদের\r\n ২০০ শতাংশ বোনাস ডিভিডেন্ড ঘোষণা করে। তবে নিয়ন্ত্রক সংস্থা বিএসইসির \r\nঅনুমোদন না পাওয়ায় তা বণ্টন করা যায়নি।</p>\r\n<p>তমিজউদ্দিন টেক্সটাইল মিলস ২০১৬ সালের ৩০ জুন সমাপ্ত অর্থবছরের জন্য ৫ \r\nশতাংশ ক্যাশ ডিভিডেন্ড ঘোষণা করে। এই কোম্পানিটিও নিয়মিত উৎপাদনে ফিরেছে।</p>\r\n<p><br></p>', 1, 1, '2021-06-05 04:57:44', '2021-06-05 04:57:44'),
(12, 'প্রস্তাবিত ২০২১-২২ অর্থবছরের জন্য ঘোষিত বাজেটকে পুঁজিবাজারবান্ধব মনে করছে ঢাকা স্টক এক্সচেঞ্জ (ডিএসই', 'prstabit-2021-22-orthbchrer-jnz-ghoshit-bajetke-punnjibajarbandhb-mne-krche-dhaka-stk-ekscenj-diesi', 10, 'public/images/blogs/60bb18bd5f952.jpg', '<p>আগামী ২০২১-২২ অর্থবছরের জন্য ঘোষিত বাজেটকে পুঁজিবাজারবান্ধব মনে করছে \r\nঢাকা স্টক এক্সচেঞ্জ (ডিএসই)। আজ বৃহস্পতিবার (৩ জুন) জাতীয় সংসদে \r\nপ্রস্তাবিত বাজেট উত্থাপনের পর ডিএসইর পাঠানো এক বিজ্ঞপ্তিতে এই মতামত \r\nজানানো হয়েছে।</p>\r\n<p>ডিএসই মনে করে, এই বাজেট ব্যবসাবান্ধব ও বাংলাদেশের পুঁজিবাজারের \r\nউন্নয়নমুখী বাজেট। দেশের অর্থনীতিকে গতিশীল করতে প্রস্তাবিত বাজেটে সরকারের\r\n অর্জন ও উদ্ভুত বর্তমান পরিস্থিতির প্রেক্ষাপটে টেকসই ও সমৃদ্ধ বাংলাদেশ \r\nগড়ে তোলার লক্ষ্যে ২০২১-২২ অর্থবছরে উন্নয়নমূলক ও ব্যবসাবান্ধব যে \r\nসু-পরিকল্পিত কর্মপন্থা ও ব্যবস্থাপনা কৌশল বাজেটে প্রস্তাব করা হয়েছে, সে \r\nজন্য ঢাকা স্টক এক্সচেঞ্জ অর্থমন্ত্রীর নিকট কৃতজ্ঞ।</p>\r\n<p>পুঁজিবাজারের উন্নয়ন এবং বিনিয়োগকারীদের স্বার্থে ২০২১-২২ অর্থবছরের \r\nপ্রস্তাবিত বাজেটে কর্পোরেট করহার আরও কমিয়ে তালিকাভুক্ত কোম্পানির জন্য \r\n২৫% এর স্থলে ২২.৫০% করায় ডিএসই অভিনন্দন জানাচ্ছে। কর্পোরেট করহার কমানোর \r\nফলে বাংলাদেশের বৃহৎ এবং স্বনামধন্য কোম্পানিগুলো পুঁজিবাজারে তালিকাভুক্ত \r\nহতে আগ্রহী হবে। এছাড়াও সরকার পুঁজিবাজারকে আন্তর্জাতিককরণের লক্ষ্যে \r\nনানাবিধ সংস্কারমূলক পদক্ষেপ গ্রহণ ও বাস্তবায়ন করছে। বিনিয়োগকারীদের \r\nপ্রত্যাশা অনুযায়ী প্রস্তাবিত বাজেটে বাংলাদেশের পুঁজিবাজারকে আন্তর্জাতিক \r\nপর্যায়ে নিয়ে আসার জন্য আধুনিক পুঁজিবাজারের বিভিন্ন ইন্সট্রুমেন্ট যথা: \r\nট্রেজারি বন্ড, সুকুক, ডেরিভেটিভ, অপশন এর লেনদেন চালু করা, এসএমই ও এটিবি \r\nবোর্ড চালু করা, ইটিএফ চালু করা, ওপেন ইন্ড মিউচুয়্যাল ফান্ড তালিকাভুক্ত \r\nকরা, পুঁজিবাজারের সহায়ক ইকোসিস্টেম ও সার্বিক সুযোগ সুবিধার উন্নয়ন এবং \r\nস্টক এক্সচেঞ্জকে লাভজনক প্রতিষ্ঠানে পরিণত করার জন্য যে সুদৃঢ় প্রত্যয় \r\nব্যক্ত করেছেন এ জন্য ঢাকা স্টক এক্সচেঞ্জ অর্থমন্ত্রীকে আবারো অভিনন্দন \r\nজানাচ্ছে।<br>\r\nএছাড়াও, মাননীয় অর্থমন্ত্রী তার বাজেট বক্তৃতায় স্বাস্থ্য ও কোভিড-১৯ \r\nমহামারী মোকাবেলা, কৃষি, খাদ্য নিরাপত্তা, কর্মসংস্থান সৃষ্ট, দারিদ্র \r\nদূরীকরণ, পল্লী উন্নয়ন, অন্যান্য প্রয়োজনীয় অবকাঠামো নির্মাণ, ডিজিটাল \r\nবাংলাদেশ ও নারী ক্ষমতায়নের উপর বিশেষ গুরুত্বারোপ করেছেন। দীর্ঘমেয়াদী \r\nমূলধন সংগ্রহের অন্যতম মাধ্যম হলো দেশের পুঁজিবাজার। তাই “জীবন-জীবিকায় \r\nপ্রাধান্য দিয়ে সুদৃঢ় আগামীর পথে বাংলাদেশ” শীর্ষক প্রস্তাবিত বাজেটে দেশের\r\n পুঁজিবাজার সরকারের কাঙ্খিত লক্ষ্যে এগিয়ে যাবে এই প্রত্যাশায় ডিএসই \r\nমাননীয় প্রধানমন্ত্রীকে আবারও কৃতজ্ঞচিত্তে ধন্যবাদ জ্ঞাপন করছে।</p>', 1, 1, '2021-06-05 06:25:01', '2021-06-05 06:25:01'),
(13, 'প্রস্তাবিত বাজেট পুঁজিবাজারের জন্য ইতিবাচক: বিএসইসি চেয়ারম্যান', 'prstabit-bajet-punnjibajarer-jnz-itiback-biesisi-ceyarmzan', 13, 'public/images/blogs/60bb1a3b8cfe7.jpg', '<p>প্রতিবেদক: ২০২১-২২ অর্থবছরের \r\nবাজেটে পুঁজিবাজারে তালিকাভুক্ত কোম্পানি জন্য করপোরেট কর হার আড়াই শতাংশ \r\nকমানোর প্রস্তাব করা হয়েছে। পাশাপাশি বন্ডের ক্ষেত্রে ২ শতাংশ কর কমানোর \r\nপ্রস্তাব করা হয়েছে।</p>\r\n<p>২০২১-২২ অর্থবছরের বাজেটে পুঁজিবাজারের জন্য দেয়া সুযোগ-সুবিধাকে স্বাগত\r\n জানিয়েছেন বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (বিএসইসি) \r\nচেয়ারম্যান অধ্যাপক শিবলী রুবাইয়াত উল-ইসলাম।</p>\r\n<p>প্রস্তাবিত বাজেটকে পুঁজিবাজারের জন্য ইতিবাচক আখ্যায়িত করে বিএসইসি \r\nচেয়ারম্যান সংবাদ মাধ্যমকে বলেন, ‘আমরা তিন-চারটি বিষয় চেয়েছিলাম, প্রায় \r\nসবগুলোই পেয়েছি। বিশেষ করে করপোরেট কর কমানোর বিষয়ে আমাদের চাওয়া ছিল, সেটি\r\n পেয়েছি।</p>\r\n<p>তিনি বলেন, ‘প্রস্তাবিত বাজেটে পুঁজিবাজারে তালিকাভুক্ত কোম্পানির জন্য\r\n আড়াই শতাংশ করপোরেট কর কমানো হয়েছে। আমরা পাঁচ শতাংশ চেয়েছিলাম।’</p>\r\n<p>অপ্রদর্শিত অর্থ বিনিয়োগের বিষয়ে অর্থমন্ত্রী বাজেট বক্তৃতায় স্পষ্ট করে\r\n কিছু উল্লেখ না থাকরেও বিএসইসি চেয়ারম্যান বলেন, এই সুবিধা থাকবে।</p>\r\n<p>তিনি বলেন, ‘বন্ডের কর কমানোর বিষয়ে আমাদের দাবি ছিল। সেটিও বাস্তবায়ন \r\nহয়েছে। সুকুক বন্ডের রেজিস্ট্রেশনের সময় দ্বৈত করের ব্যবস্থা ছিল, সেটি \r\nকমানো হয়েছে। প্রস্তাবিত বাজেটে তা ২ শতাংশ করা হয়েছে।’</p>\r\n<p>পুঁজিবাজারে তালিকাভুক্ত কোম্পানিগুলোর জন্য করপোরেট করের প্রস্তাব করা হয়েছে সাড়ে ২২ শতাংশ, চলতি অর্থবছরে যা আছে ২৫ শতাংশ।</p>\r\n<p>পুঁজিবাজারে তালিকাভুক্ত নয়, এমন কোম্পানির করপোরেট করের হার চলতি \r\nঅর্থবছরে নির্ধারণ করা আছে সাড়ে ৩২ শতাংশ, প্রস্তাবিত বাজেটে তা ৩০ শতাংশ \r\nকরার কথা বলা হয়েছে।</p>', 1, 1, '2021-06-05 06:31:23', '2021-06-05 06:31:23'),
(14, 'বাজটে করপোরেট কর কমানোর ফলে দেশে বিনিয়োগ বাড়বে', 'bajte-krporet-kr-kmanor-fle-dese-biniyog-barbe', 14, 'public/images/blogs/60bb8ff0ccc7b.jpg', '<p>প্রতিবেদক : ২০২১-২২ অর্থবছরের \r\nবাজেটে করপোরেট কর কমানোর ফলে দেশে বিনিয়োগ বাড়াতে সহায়তা করবে। তবে বাজেটে\r\n আগাম ভ্যাট ১ শতাংশ কমালেও অগ্রিম আয়কর কমানো হয়নি। এ ক্ষেত্রে অগ্রিম কর \r\nকমিয়ে সংশোধনের প্রস্তাব করেছেন চাটার্ড অ্যাকাউন্ট্যাটরা।</p>\r\n<p>তারা বলেছেন, অর্থমন্ত্রী তার বাজেট বক্তৃতায় বিভিন্ন ক্ষেত্রে যেসব কর ছাড় ও প্রণোদনার কথা ঘোষণা করেছেন, তা অবশ্যই প্রশংসনীয়।</p>\r\n<p>তবে কিছু কর প্রস্তাবে অসংগতি রয়েছে উল্লেখ করে সেগুলো সংশোধনের তাগিদও \r\nদিয়েছেন তারা। বলেছেন, সংশোধন না করলে প্রকারান্তে কার্যকর ‘করভার’ \r\n(ইফেক্টভি ট্যাক্স রেট) আরও বেড়ে যাবে। এতে বিনিয়োগ বাধাগ্রস্ত হবে।</p>\r\n<p>শনিবার ভার্চুয়াল সংবাদ সম্মেলনে প্রস্তাবিত অর্থবছরের বাজেট \r\nপর্যালোচনায় এ মূল্যায়ন উঠে এসেছে পেশাজীবী সংগঠন ইনস্টিটিউট অব চাটার্ড \r\nঅ্যাকাউন্ট্যাট অব বাংলাদেশ- আইসিএবির কাছ থেকে।</p>\r\n<p>আইসিএবি মনে করে, করোনাভাইরাসের কারণে অর্থনীতি ও জীবন-জীবিকায় নেতিবাচক\r\n প্রভাব ফেলেছে। তাই যে করেই হোক না কেন, করোনা নিয়ন্ত্রণ করতে হবে। তা না \r\nহলে বাজেটের সুফল মিলবে না।</p>\r\n<p>আইসিএবির নেতারা বলেছেন, নতুন বাজেট ঘাটতিনির্ভর। এতে বেশি ঋণের লক্ষ্য নির্ধারণ করে অর্থায়নের কথা বলা হয়েছে।</p>\r\n<p>কর কাঠামোতে নানা দুর্বলতা ও অসংগতি দূর করতে একটি ‘ব্যয় কমিশন’ গঠনের \r\nপ্রস্তাবও দেয় আইসিএবি। স্থানীয় ও সরাসরি বিদেশি বিনিয়োগ বা এফডিআই আকর্ষণ \r\nকরতে দীর্ঘ মেয়াদে ‘প্রগতিশীল কর নীতি’ প্রণয়নের পরামর্শও দেয়া হয়।</p>\r\n<p>প্রস্তাবিত বাজেট মূল্যায়নে আইসিএবি বলেছে, করপোরেট কর কমানোর ফলে \r\nবিনিয়োগ বাড়াতে সহায়তা করবে। তবে বাজেটে আগাম ভ্যাট ১ শতাংশ কমালেও অগ্রিম \r\nআয়কর কমানো হয়নি। এটা আইনের সঙ্গে সাংঘর্ষিক। এ ক্ষেত্রে অগ্রিম কর কমিয়ে \r\nসংশোধনের প্রস্তাব করেছে আইসিএবি।</p>\r\n<p>সংবাদ সম্মেলনে প্রস্তাবিত বাজেটের ওপর মূল্যায়ন তুলে ধরেন আইসিএবির \r\nনির্বাহী সদস্য শাহাদাত হুসেইন ও স্নেহাশীষ বড়ুয়া। বক্তব্য রাখেন সংগঠনের \r\nসভাপতি মাহমুদুল হাসান খসরু, সাবেক সভাপতি হুমায়ন কবির। সমাপনী বক্তব্য দেন\r\n আইসিএবির সদস্য সিদ্ধার্থ বড়ুয়া।</p>\r\n<p>প্রস্তাবিত বাজেটের ওপর মূল্যায়নে আইসিএবি বলেছে, জনপ্রিয় হয়ে ওঠা \r\nবিকাশ, নগদের মতো মুঠোফোন আর্থিক সেবাদাতার প্রতিষ্ঠানগুলোর করপোরেট করহার \r\nবাড়ানো হয়েছে। আইসিএবি মনে করে, এই কর বাড়ানোর প্রস্তাব কার্যকর হলে \r\nগ্রামের গরিব মানুষের এ-সংক্রান্ত সেবাখরচ বেড়ে যাবে। তাই আর্থিক সেবাদাতা \r\nপ্রতিষ্ঠানগুলোর করহার কমানো উচিত।</p>\r\n<p>তৃতীয় লিঙ্গের মানুষকে চাকরি দিলে কর ছাড়ের প্রস্তাব করা হয়েছে বাজেটে। \r\nআইসিএবি এ উদ্যোগকে স্বাগত জানিয়ে বলেছে, ১০০ জনের পরিবর্তে ১০ জনকে চাকরি \r\nদিলে এর সুফল মিলবে। কারণ, এ দেশের অনেক কম প্রতিষ্ঠানই আছে যারা ১০০ জনকে \r\nএকসঙ্গে চাকরি দেয়ার সামর্থ্য রাখে।</p>\r\n<p>নারী উদ্যোক্তাদের বার্ষিক লেনদেনসীমা ৫০ লাখ থেকে ৭০ লাখ টাকায় উন্নীত \r\nকরায় নারীরা ব্যবসা-বাণিজ্যে আরও উৎসাহিত হবেন এবং এসএমই খাত আরও বিকশিত \r\nহবে বলে মনে করে আইসিএবি।</p>\r\n<p>মোবাইল অ্যাপসসহ তথ্যপ্রযুক্তির আরও পাঁচটি খাতকে নতুন করে কর অব্যাহতি \r\nসুবিধা দেয়ায় ডিজিটাল বাংলাদেশ বিনির্মাণে বাংলাদেশ আরও একধাপ এগিয়ে যাবে \r\nবলে বিশ্বাস করে আইসিএবি।</p>\r\n<p>আইসিএবি বলছে, ‘মেড ইন বাংলাদেশ’ প্রতিষ্ঠায় বিভিন্ন খাতে কর প্রণোদনা \r\nঅব্যাহতি সুবিধা ঘোষণা করায় দ্রুত শিল্পায়নের ক্ষেত্রে আরও এগিয়ে যাবে \r\nবাংলাদেশ। তবে বাজেটে যেসব সুবিধা দেয়া হয়েছে, নির্ধারিত সময় পার হওয়ার পর \r\nঅব্যাহত রাখার প্রস্তাব করেছে আইসিএবি।</p>\r\n<p>ভ্যাটে আগাম কর কমানো ও ফাঁকির জন্য জরিমানার বিধান শিথিল করায়ও সরকারকে সাধুবাদ জানিয়েছে আইসিএবি।</p>\r\n<p>আইসিএবির সভাপতি মাহমুদুল হাসান খসরু বলেন, ‘প্রস্তাবিত বাজেটে বিভিন্ন \r\nখাতে কর ছাড়কে আমরা স্বাগত জানাই। এতে করে বিনিয়োগ ও কর্মসংস্থান বাড়বে। \r\nকিন্তু করোনা নিয়ন্ত্রণ না করতে পারলে বাজেটে দেয়া সুযোগ-সুবিধার সুফল \r\nদেশের জনগণ পাবে না।’</p>\r\n<p>আইসিএবির সাবেক সভাপতি হুমায়ন কবির বলেন, ‘অগ্রিম কর এখন ৫ শতাংশ। এটা \r\nঅত্যন্ত বেশি, যা ব্যবসার খরচকে বাড়িয়ে দিচ্ছে। এই কর না কমালে প্রত্যাশিত \r\nবিনিয়োগ আসবে না।’</p>\r\n<p>ভ্যাট বিভাগের সঙ্গে আয়কর বিভাগের কোনো সমন্বয় নেই। এখানে সমন্বয় জরুরি \r\nবলে মনে করেন তিনি। বলেন, ‘আমাদের দেশে বৈষম্য বাড়ছে। সরকারি টাকা নানাভাবে\r\n অপচয় হচ্ছে।’ ব্যয় নিয়ন্ত্রণে একটি কমিশন গঠনের পরামর্শ দেন তিনি।</p>\r\n<p>সংগঠনের সদস্য শাহাদাত হুসেইন বলেন, ‘বাজেটে ঋণের সুদ বাবদ বরাদ্দ রাখা \r\nহয়েছে ৬৮ হাজার ৬২০ কোটি টাকা। আবার প্রণোদনা প্যাকেজটি আসলে ঋণনির্ভর। এ \r\nঅবস্থায় সরকার ঋণের ওপর বেশি নির্ভরশীল হওয়ায় ঘাটতির পরিমাণ বেশি, যা \r\nউদ্বেগজনক। ফলে আমাদের এ বিষয়ে সতর্ক থাকতে হবে।’</p>\r\n<p>স্নেহাশীষ বড়ুয়া বলেন, ‘করপোরেট কর কমিয়ে ৩০ শতাংশ করা হয়েছে। এটি ভালো \r\nউদ্যোগ। তবে খেয়াল রাখতে হবে বাংলাদেশের প্রতিদ্বন্দ্বী দেশ যেমন: ভারত, \r\nভিয়েতনাম ও চীনে করপোরেট কর ২০ থেকে ২২ শতাংশ। ফলে এই কর ক্রমান্বয়ে আরও \r\nকমিয়ে আনতে হবে। তা না হলে প্রতিযোগিতায় মানুষের টিকে থাকা কঠিন হবে।</p>', 1, 1, '2021-06-05 14:53:15', '2021-06-05 14:53:36'),
(15, 'সাউথবাংলা এগ্রিকালচার ব্যাংকের আইপিও আবেদন শুরু ৫ জুলাই', 'sauthbangla-egrikalcar-bzangker-aipioo-abedn-suru-5-julai', 12, 'public/images/blogs/60bf0654382fe.jpg', '<p style=\"font-family: SolaimanLipi, Geneva, sans-serif; font-size: 18px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); text-align: justify;\"><strong style=\"font-weight: bold;\">রিপোর্ট :</strong>&nbsp;দেশের চতুর্থ প্রজন্মের ব্যাংক সাউথ বাংলা এগ্রিকালচার অ্যান্ড কমার্স (এসবিএসি) ব্যাংক লিমিটেড প্রাথমিক গণ প্রস্তাবের (আইপিও) আবেদনপত্র ও চাঁদার অর্থ জমা নেওয়া শুরু হবে আগামী ৫ জুলাই থেকে। যা চলবে ১১ জুলাই পর্যন্ত।</p><p style=\"font-family: SolaimanLipi, Geneva, sans-serif; font-size: 18px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); text-align: justify;\">এসবিএসি ব্যাংক সূত্রে জানা যায়, আইপিওতে ব্যাংকটি অভিহিত মূল্য তথা ১০ টাকা দামে ১০ কোটি সাধারণ শেয়ার ইস্যু করবে। আর এর মাধ্যমে পুঁজিবাজার থেকে ১০০ কোটি টাকা সংগ্রহ করবে। পুঁজিবাজার থেকে ব্যাংকটি অর্থ উত্তোলন করে সরকারি সিকিউরিটিজ ক্রয় এবং আইপিও খরচ খাতে ব্যয় করবে।</p><p style=\"font-family: SolaimanLipi, Geneva, sans-serif; font-size: 18px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); text-align: justify;\">এর আগে, ২০১৩ সালে বাণিজ্যিকভাবে যাত্রা শুরু করা সাউথবাংলা এগ্রিকালচার অ্যান্ড কমার্স ব্যাংক গত ৯ মে আইপিওর অনুমোদন পায়। ওইদিন বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (এসইসি) তার ৭৭৩তম সভায় এ অনুমোদন দেয়।</p><p style=\"font-family: SolaimanLipi, Geneva, sans-serif; font-size: 18px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); text-align: justify;\">২০২০ সালের ৩০ সেপ্টেম্বর নিরীক্ষিত আর্থিক বিবরণী অনুযায়ী পুনঃমূল্যায়ন ছাড়া নেট অ্যাসেটভ্যালু হয়েছে ১৩.১৮ টাকা সাউথবাংলা এগ্রিকালচার ব্যাংকের। আর ওই বছরের ৯ মাসে ইপিএস হয়েছে ০.৯৪ টাকা। যা বিগত ৫ বছরের ভারিত গড় হারে হয়েছে ১.২৪ টাকা।</p><p style=\"font-family: SolaimanLipi, Geneva, sans-serif; font-size: 18px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); text-align: justify;\">উল্লেখ্য, আইপিওতে ব্যাংকটির ইস্যু ম্যানেজার হিসেবে দায়িত্বে রয়েছে আইসিবি ক্যাপিটাল ম্যানেজমেন্ট লিমিটেড।</p>', 1, 1, '2021-06-08 05:55:32', '2021-06-08 05:55:32'),
(16, 'সোনালী লাইফের আইপিওতে বিনিয়োগকারীদের তালিকা প্রকাশ', 'sonalee-laifer-aipioote-biniyogkareeder-talika-prkas', 12, 'public/images/blogs/60cd85a808fd1.png', '<p>প্রতিবেদন : পুঁজিবাজারে থেকে \r\nঅর্থ সংগ্রহের প্রক্রিয়ায় থাকা সোনালী লাইফ ইন্স্যুরেন্স কোম্পানি লিমিটেড \r\nপ্রাথমিক গণপ্রস্তাবের (আইপিও) আবেদন গত ৩ জুন শেষ হয়েছে। ইতিমধ্যে যেসব \r\nবিনিয়োগকারী কোম্পানিটির আইপিও আবেদন করেছেন তাদের তালিকা তৈরি করা হয়েছে।</p>\r\n<p>নতুন নিয়ম অনুযায়ী যারাই আবেদন করবেন প্রত্যেককেই প্রো-রাটা ব্যাসিসে \r\nশেয়ার বরাদ্দ দেওয়া হবে। তাই ডিএসই ও সিএসই’র ট্রেকহোল্ডার এবং মার্চেন্ট \r\nব্যাংকের মাধ্যমে আবেদন করা বিনিয়োগকারীদের তালিকা প্রকাশ করা হয়েছে। এছাড়া\r\n এই তালিকার মধ্যে যারা আবেদন করেছেন কিন্তু অবৈধ হয়েছে তাদের আইডিও প্রকাশ\r\n করা হয়েছে।</p>\r\n<p><strong>তালিকার সর্বশেষ কলামে যদি Valid কথাটি লেখা থাকে তাহলে সেটা বৈধ। আর যদি invalid কথাটি লেখা থাকে তাহলে অবৈধ বলে বিবেচিত হবে।</strong></p>\r\n<p><strong>নিচের লিঙ্কে ক্লিক করে Ctrl+F প্রেস করে আপনার আইডি নম্বর বসিয়ে দিন। এতে আপনার আইডি বের করতে পারবেন।</strong></p>\r\n<p><span style=\"color: #3366ff;\"><a href=\"http://www.sonalilife.com/ApplicantImageUpload/DSE.txt\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #3366ff;\"><strong>ডিএসই’র ট্রেকহোল্ডারের মাধ্যমে যারা আবেদন করেছেন তারা ক্লিক করুন:</strong></span></a></span></p>\r\n\r\n<p><strong><a href=\"http://www.sonalilife.com/ApplicantImageUpload/CSE.txt\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #3366ff;\">সিএসই’র ট্রেকহোল্ডারদের মাধ্যমে যারা আবেদন করেছেন তারা ক্লিক করুন:</span></a></strong></p>\r\n<p><span style=\"color: #3366ff;\"><strong><a href=\"http://www.sonalilife.com/ApplicantImageUpload/MB.txt\" target=\"_blank\" rel=\"noopener\"><span style=\"color: #3366ff;\">মার্চেন্ট ব্যাংকের মাধ্যমে যারা আবেদন করেছেন তারা ক্লিক করুন:</span></a></strong></span></p>', 1, 1, '2021-06-19 04:10:02', '2021-06-19 05:50:32'),
(17, 'সার্কিটব্রেকারের নতুন নির্দেশনা জারি করেছেন বিএসইসি', 'sarkitbrekarer-ntun-nirdesna-jari-krechen-biesisi', 13, 'public/images/blogs/60cd87200ea77.png', '<p>পুঁজিবাজারে তালিকাভুক্ত কোম্পানির শেয়ারের সার্কিটব্রেকার তথা মূল্য \r\nউঠা-নামার নতুন সীমা বেঁধে দেওয়া হয়েছে। ফলে আগামী রোববার ২০ জুন থেকে কোনো\r\n শেয়ারের মূল্য একদিনে ওই সীমার চেয়ে বাড়তে পারবে না, একইভাবে কমতেও পারবে \r\nনা। তবে নিয়ম অনুসারে, লভ্যাংশ সংক্রান্ত ঘোষণার পরবর্তী কার্যদিবসে এই \r\nসার্কিটব্রেকার প্রযোজ্য হবে না।</p>\r\n<p>আজ বৃহস্পতিবার (১৭ জুন) পুঁজিবাজার নিয়ন্ত্রক সংস্থা বাংলাদেশ \r\nসিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন (বিএসইসি) সার্কিটব্রেকারের নতুন সীমা \r\nবেঁধে দিয়ে একটি নির্দেশনা জারি করেছে।</p><p>বিএসইসি সূত্রে এই তথ্য জানা গেছে।</p>\r\n<p>নতুন নির্দেশনা অনুসারে, কোনো কোম্পানির শেয়ারের দাম ২০০ টাকার নিচে থাকলে একদিনে সেটির মূল্য ১০ শতাংশ পর্যন্ত বাড়তে বা কমতে পারবে।</p>\r\n<p>শেয়ারের দাম ২০০ থেকে ৫০০ টাকার মধ্যে থাকলে সার্কিট ব্রেকার হবে ৮ দশমিক ৭৫ শতাংশ।</p>\r\n<p>শেয়ারের দাম ৫০০ থেকে ১০০০ টাকার মধ্যে থাকলে সার্কিট ব্রেকার হবে ৭ দশমিক ৭০ শতাংশ।</p>\r\n<p>যদি শেয়ারের দাম ১০০০ থেকে ২০০০ টাকা হয়, তাহলে শেয়ারের দাম ৬ দশমিক ২৫ শতাংশ পর্যন্ত বাড়তে বা কমতে পারবে।</p>\r\n<p>&gt;&gt; শেয়ার বা ইউনিটের দাম ২০০০ থেকে ৫০০০ হাজার টাকার ক্ষেত্রে সার্কিট ব্রেকার ৫ শতাংশ।</p>\r\n<p>শেয়ারের দাম ৫০০০ টাকার ওপরে হলে সার্কিট ব্রেকার হবে ৩ দশমিক ৭৫ শতাংশ।</p>\r\n<p>এ বিষয়ে বিএসইসির নির্বাহী পরিচালক ও মুখপাত্র মোহাম্মদ রেজাউল করিম বলেন, বিনিয়োগকারীদের স্বার্থে এটা করা হয়েছে।</p>', 1, 1, '2021-06-19 05:56:48', '2021-06-19 05:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(99) NOT NULL,
  `slug` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(10, 'DSE', 'dse', '2021-05-26 11:48:32', '2021-05-26 11:48:32'),
(11, 'Company', 'company', '2021-05-26 11:52:22', '2021-05-26 11:52:22'),
(12, 'IPO', 'IPO', '2021-05-26 15:08:14', '2021-05-26 15:08:14'),
(13, 'BSEC', 'BSEC', '2021-05-26 15:08:46', '2021-05-26 15:08:46'),
(14, 'Others', 'others', '2021-06-05 14:52:12', '2021-06-05 14:52:12'),
(15, 'National Desk', 'national-desk', '2021-06-05 15:12:40', '2021-06-05 15:12:40'),
(16, 'Capital Market', 'capital-market', '2021-06-05 15:13:05', '2021-06-05 15:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `b_o_closers`
--

CREATE TABLE `b_o_closers` (
  `id` int(10) NOT NULL,
  `client_code` varchar(100) DEFAULT NULL,
  `boid` varchar(100) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `join_holder` varchar(199) DEFAULT NULL,
  `closer_reason` text DEFAULT NULL,
  `signature` varchar(199) DEFAULT NULL,
  `joint_signature` text DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_o_modifies`
--

CREATE TABLE `b_o_modifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `boid` varchar(191) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `old` varchar(191) NOT NULL,
  `new_data` varchar(191) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `signature` varchar(191) NOT NULL,
  `attachment` varchar(200) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_o_opens`
--

CREATE TABLE `b_o_opens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) DEFAULT NULL,
  `code` varchar(191) DEFAULT NULL,
  `boid` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `father` varchar(191) DEFAULT NULL,
  `mother` varchar(191) DEFAULT NULL,
  `sex` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `zip_code` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `nid` varchar(191) DEFAULT NULL,
  `profession` varchar(191) DEFAULT NULL,
  `bank` varchar(191) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `account` varchar(191) DEFAULT NULL,
  `routing` varchar(191) DEFAULT NULL,
  `birthday_date` varchar(25) DEFAULT NULL,
  `division` varchar(250) DEFAULT NULL,
  `nid_att` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `sign` varchar(250) DEFAULT NULL,
  `bi_cheque` varchar(250) DEFAULT NULL,
  `n_name` varchar(250) DEFAULT NULL,
  `relation` varchar(250) DEFAULT NULL,
  `percentage` varchar(250) DEFAULT NULL,
  `n_mobile` varchar(250) DEFAULT NULL,
  `n_nid` varchar(250) DEFAULT NULL,
  `n_nid_att` varchar(250) DEFAULT NULL,
  `n_photo` varchar(250) DEFAULT NULL,
  `n_sign` varchar(250) DEFAULT NULL,
  `jh_name` varchar(250) DEFAULT NULL,
  `jh_sex` varchar(250) DEFAULT NULL,
  `jh_mobile` varchar(250) DEFAULT NULL,
  `jh_nid` varchar(250) DEFAULT NULL,
  `jh_nid_att` varchar(250) DEFAULT NULL,
  `jh_photo` varchar(250) DEFAULT NULL,
  `jh_sign` varchar(250) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `post_type` varchar(191) NOT NULL,
  `cv_file` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_posts`
--

CREATE TABLE `career_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `qualification` varchar(191) NOT NULL,
  `experice` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `salary` varchar(191) NOT NULL,
  `dead_line` varchar(191) NOT NULL,
  `vacancy` varchar(191) NOT NULL,
  `link` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_ipos`
--

CREATE TABLE `child_ipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_code` varchar(191) NOT NULL,
  `master_code` varchar(100) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `boid` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `boid` varchar(20) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complain_or_query` varchar(10) DEFAULT NULL,
  `uid` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `code` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_numbers`
--

CREATE TABLE `custom_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `client_code` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `bank` varchar(52) DEFAULT NULL,
  `attachment` varchar(191) DEFAULT NULL,
  `for_deposit` varchar(10) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bn_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `bn_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Test', 'public/images/gallery/61522d48d135a.jpg', 1, '2021-09-27 20:44:56', '2021-09-27 20:44:56'),
(8, 'Test', 'public/images/gallery/61522d64c2f47.jpg', 1, '2021-09-27 20:45:24', '2021-09-27 20:45:24'),
(9, 'Test', 'public/images/gallery/61522d8420aef.jfif', 1, '2021-09-27 20:45:56', '2021-09-27 20:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `i_p_o_s`
--

CREATE TABLE `i_p_o_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `ipo` varchar(191) NOT NULL,
  `instrument_code` varchar(250) DEFAULT NULL,
  `start_date` varchar(191) NOT NULL,
  `end_date` varchar(191) NOT NULL,
  `attachment` varchar(191) NOT NULL,
  `balance_check` varchar(20) DEFAULT NULL,
  `result` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management_teams`
--

CREATE TABLE `management_teams` (
  `id` int(10) NOT NULL,
  `ch_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ch_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ch_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ch_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mg_name` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mg_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mg_image` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mg_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di1_name` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di1_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di1_image` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di1_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di2_name` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di2_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di2_image` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di2_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di3_name` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di3_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di3_image` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di3_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di4_name` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di4_designation` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di4_image` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `di4_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `management_teams`
--

INSERT INTO `management_teams` (`id`, `ch_name`, `ch_designation`, `ch_image`, `ch_description`, `mg_name`, `mg_designation`, `mg_image`, `mg_description`, `di1_name`, `di1_designation`, `di1_image`, `di1_description`, `di2_name`, `di2_designation`, `di2_image`, `di2_description`, `di3_name`, `di3_designation`, `di3_image`, `di3_description`, `di4_name`, `di4_designation`, `di4_image`, `di4_description`, `created_at`, `updated_at`) VALUES
(1, 'Musharat Islam', 'Chairman', 'public/frontend/images/menagement/611d5747617bc.jpg', NULL, 'Md Rafiqul Islam', 'Managing Director', 'public/frontend/images/menagement/default.jpg', 'I am delighted to welcome you to RNI Securities Ltd.\'s new website, one of the most reliable brokerage businesses in Dhaka Stock Exchange. RNI Securities Ltd. has been Part of DSE since 1995 and has achieved investor’s trust and support through meticulous services. RNI Securities Ltd. has been proudly assisting its clients in achieving their financial goals while allowing them more time to focus on building a sound capital market through its diversified services to a wide range of clients.\r\n\r\nBeing one of the most reputable brokerage firms, we offer our clients with everything they need to research on stocks, place order and manage portfolio with access to real time market information, stock quotes through our website, mobile Apps and prudent traders. Here at RNI Securities, everything is backed by fundamental to meet client’s needs first in a disciplined manner.', 'Jubayer Islam', 'Director', 'public/frontend/images/menagement/default.jpg', 'The journey of my capital market started when I grew profound interest in this sector while studying Investment Theory in undergrad from North South University. I have completed my bachelor focusing on Accounting and Finance and later did my postgraduate from Macquarie University, Sydney, Australia to take my knowledge to the next level. I have been active in Dhaka Stock Exchange from 2012 and since then experienced a lot of ups and downs and achieved practical knowledge. Here at RNI Securities, our motto is to provide our clients with best expertise when it comes to ensuring long term investment goal and building a strong stock market.', 'Usama Islam', 'Director', 'public/frontend/images/menagement/default.jpg', 'I have completed my BBA from North South University and MBA from Independent University of Bangladesh. It has been more than 8 years since I have been active in this industry and gathered hands on experience. Throughout my journey in the stock market for the last 8 years, I have come to a few realizations about equity investment for success which include adequate knowledge about stock market, instrument selection by scrutinising company background, being watchful about the news floating in the market, realistic investment goal, discipline and patience. RNI securities follows same practice when it comes to conducting business. We believe in educating our clients to nurture their investment potential in capital market and also provide one-on-one consultation to expand portfolio where needed.', NULL, NULL, 'public/frontend/images/menagement/default.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-04 06:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2021_01_31_101542_create_categories_table', 1),
(5, '2021_01_31_105021_create_social_media_table', 1),
(6, '2021_01_31_105043_create_website_settings_table', 1),
(7, '2021_01_31_171120_create_divisions_table', 1),
(8, '2021_01_31_171129_create_districts_table', 1),
(9, '2021_01_31_171143_create_thanas_table', 1),
(10, '2021_03_20_104130_create_roles_table', 1),
(11, '2021_04_19_225226_create_clients_table', 2),
(12, '2021_04_19_225305_create_withdraws_table', 2),
(13, '2021_04_19_225354_create_deposits_table', 2),
(14, '2021_04_19_225436_create_b_o_opens_table', 2),
(15, '2021_04_19_225502_create_mobile_apps_table', 2),
(16, '2021_04_19_225608_create_b_o_modifies_table', 2),
(17, '2021_04_19_225627_create_i_p_o_s_table', 2),
(18, '2021_04_19_225644_create_notices_table', 2),
(19, '2021_04_19_225656_create_careers_table', 2),
(21, '2021_04_19_225807_create_complains_table', 2),
(22, '2021_04_19_225823_create_contacts_table', 2),
(23, '2021_04_22_005650_create_balances_table', 3),
(24, '2021_04_23_230734_create_galleries_table', 4),
(25, '2021_04_23_230908_create_sliders_table', 4),
(26, '2021_06_07_120011_create_child_ipos_table', 5),
(31, '2021_06_07_194237_create_apply_ipos_table', 6),
(33, '2021_06_12_141547_create_tradings_table', 7),
(34, '2021_06_13_003604_create_custom_numbers_table', 8),
(35, '2019_08_19_000000_create_failed_jobs_table', 9),
(36, '2021_07_13_213521_create_career_posts_table', 9),
(37, '2021_06_26_225428_create_jobs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_apps`
--

CREATE TABLE `mobile_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `boid` varchar(20) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `client_type` varchar(191) NOT NULL,
  `domicile` varchar(191) NOT NULL,
  `usetype` varchar(191) DEFAULT '',
  `mobile` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `signature` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `applicationfor1` varchar(30) DEFAULT NULL,
  `applicationfor2` varchar(30) DEFAULT NULL,
  `applicationfor3` varchar(30) DEFAULT NULL,
  `applicationfor4` varchar(30) DEFAULT NULL,
  `applicationfor5` varchar(30) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `publish_date` varchar(191) NOT NULL,
  `noticesfile` varchar(191) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, NULL, NULL),
(2, 'Admin', 1, NULL, NULL),
(3, 'Client', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, '1', 'public/images/slider/60b5b638048d4.jpg', 1, '2021-06-01 04:23:20', '2021-06-01 04:23:20'),
(7, '2', 'public/images/slider/60b5b6416ac31.jpg', 1, '2021-06-01 04:23:29', '2021-06-01 04:23:29'),
(8, '3', 'public/images/slider/60b5b64a35d2f.jpg', 1, '2021-06-01 04:23:38', '2021-06-01 04:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `icon`, `link`, `color`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'facebook Page', 'fa fa -facebook', 'https://www.facebook.com/', '121', '1', NULL, '2021-09-27 18:05:44', '2021-10-11 12:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bn_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tradings`
--

CREATE TABLE `tradings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pre_opening` varchar(191) NOT NULL,
  `cotinuous` varchar(191) NOT NULL,
  `post_closing` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tradings`
--

INSERT INTO `tradings` (`id`, `pre_opening`, `cotinuous`, `post_closing`, `created_at`, `updated_at`) VALUES
(1, '9.45 AM to 10 AM', '10.00  AM to 2  PM', '2  PM to 2.15 PM', '2021-07-13 16:33:08', '2021-07-13 16:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_uid` varchar(255) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `boid` varchar(30) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_uid`, `code`, `boid`, `name`, `mobile`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `role_id`, `type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1008', '23455345', '', 'Admin', '01779325718', 'admin@gmail.com', NULL, '$2a$12$CZLFZqg/FhjB921uVhl5I.4Dm/psk/6dKNMg8FPPj28KUjivkpYHm', NULL, 'public/images/users/61520cec42e15.jpg', 1, 1, 2, NULL, '2021-03-01 05:25:53', '2021-09-27 18:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `homepage_title` varchar(255) DEFAULT NULL,
  `meta_tags` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `sitebanner` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state_address` varchar(255) DEFAULT NULL,
  `local_address` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `map_code` varchar(255) DEFAULT NULL,
  `home_page_boopen` varchar(100) DEFAULT NULL,
  `bo_open_price` varchar(100) DEFAULT NULL,
  `bo_open_requirement` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `site_name`, `homepage_title`, `meta_tags`, `meta_description`, `sitebanner`, `logo`, `footer_logo`, `favicon`, `email`, `phone`, `state_address`, `local_address`, `address`, `map_code`, `home_page_boopen`, `bo_open_price`, `bo_open_requirement`, `created_at`, `updated_at`) VALUES
(1, 'AB & Co. Ltd', 'AB & Co. Ltd', 'AB & Co. Ltd', 'AB & Co. Ltd', 'public/images/website/63fdd69dcd4e2.png', 'public/images/website/63fdd69dcd9a5.png', 'public/images/website/63fdd69dcdb46.png', 'public/images/website/63fdd69dcdccf.png', 'abcoltd@yahoo.com', '01742568655', '59/C Kalachandpur Main Road, Dhaka 1212', '59/C Kalachandpur Main Road, Dhaka 1212', 'Dhaka-1212', '1212', 'public/images/website/612e59019477a.jpg', '450', NULL, NULL, '2023-02-28 10:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `balance` varchar(191) NOT NULL,
  `withdraw` varchar(191) NOT NULL,
  `sign` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_ipos`
--
ALTER TABLE `apply_ipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_o_closers`
--
ALTER TABLE `b_o_closers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_o_modifies`
--
ALTER TABLE `b_o_modifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_o_opens`
--
ALTER TABLE `b_o_opens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_posts`
--
ALTER TABLE `career_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_ipos`
--
ALTER TABLE `child_ipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_numbers`
--
ALTER TABLE `custom_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_p_o_s`
--
ALTER TABLE `i_p_o_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `management_teams`
--
ALTER TABLE `management_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_apps`
--
ALTER TABLE `mobile_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tradings`
--
ALTER TABLE `tradings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_ipos`
--
ALTER TABLE `apply_ipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `b_o_closers`
--
ALTER TABLE `b_o_closers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b_o_modifies`
--
ALTER TABLE `b_o_modifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b_o_opens`
--
ALTER TABLE `b_o_opens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_posts`
--
ALTER TABLE `career_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_ipos`
--
ALTER TABLE `child_ipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_numbers`
--
ALTER TABLE `custom_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
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
-- AUTO_INCREMENT for table `i_p_o_s`
--
ALTER TABLE `i_p_o_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_teams`
--
ALTER TABLE `management_teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mobile_apps`
--
ALTER TABLE `mobile_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tradings`
--
ALTER TABLE `tradings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

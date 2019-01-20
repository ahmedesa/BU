-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 03:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bu`
--

CREATE TABLE `bu` (
  `id` int(11) NOT NULL,
  `bu_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `bu_price` int(11) NOT NULL,
  `bu_rent` int(200) NOT NULL,
  `bu_square` int(11) NOT NULL,
  `bu_type` int(11) NOT NULL,
  `bu_small_dis` text CHARACTER SET utf8 NOT NULL,
  `bu_meta` varchar(200) CHARACTER SET utf8 NOT NULL,
  `bu_langtuide` int(11) NOT NULL,
  `bu_latitude` int(11) NOT NULL,
  `bu_large_dis` text CHARACTER SET utf8 NOT NULL,
  `bu_status` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  `bu_rooms` int(11) NOT NULL,
  `bu_place` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `img` varchar(50) CHARACTER SET utf8 NOT NULL,
  `month` varchar(4) NOT NULL,
  `year` varchar(4) NOT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bu`
--

INSERT INTO `bu` (`id`, `bu_name`, `bu_price`, `bu_rent`, `bu_square`, `bu_type`, `bu_small_dis`, `bu_meta`, `bu_langtuide`, `bu_latitude`, `bu_large_dis`, `bu_status`, `user_id`, `bu_rooms`, `bu_place`, `created_at`, `updated_at`, `img`, `month`, `year`, `phone`) VALUES
(1, 'فيلا بالقاهرة', 600000, 0, 5542525, 1, 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى', 'فيلا , القاهرة', 30, 31, 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 0, 1, 40, 0, '2018-07-14 13:10:18', '2018-07-11 11:30:23', 'index.jpg', '06', '2018', 1011111111),
(2, 'شالية بالاسماعيلية', 632552, 1, 18272, 2, 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى', 'شالية', 31, 32, 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.', 0, 1, 6, 9, '2018-07-14 13:10:41', '2018-07-11 11:28:24', '', '07', '2018', 1011111111),
(8, 'شقة شقة', 2525252, 0, 50303, 0, 'لبببببببببببببببببببببببببببببببببببببببببببببببببببببببي', 'الابل', 50050305, 50505, 'يابببببببببببببببببببببببببببببببببببببببببببببببببببببببببببببببب', 1, 1, 25, 10, '2018-07-14 13:10:38', '2018-07-04 08:47:09', '', '07', '2018', 1011111111),
(10, 'شقة شقة1', 2525252, 0, 50303, 0, 'لبببببببببببببببببببببببببببببببببببببببببببببببببببببببي', 'الابل', 29, 31, 'يابببببببببببببببببببببببببببببببببببببببببببببببببببببببببببببببب', 0, 1, 25, 10, '2018-07-14 13:10:34', '2018-07-11 11:32:03', 'index1.jpg', '07', '2017', 1011111111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bu`
--
ALTER TABLE `bu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bu`
--
ALTER TABLE `bu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 فبراير 2023 الساعة 21:34
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- بنية الجدول `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `img_name` varchar(30) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- إرجاع أو استيراد بيانات الجدول `email`
--

INSERT INTO `email` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `img_name`, `img_type`, `img_path`) VALUES
(5, 'ØµÙÙˆØ§Ù† ', 'Ø³Ø¹Ø¯Ø§Ù†', 's@gmail.com', '$2y$10$2mkuQgudzLKcg5.GbvqNbuZVPIqOI6nofxMwpghbzG.', 2147483647, '', '', ''),
(8, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$LqSw44l41ycerYsr9MDup.a6bt6qhMoMCEJd8xZr/Lm', 0, '', '', ''),
(9, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$KVK8aHkSmiKahDZsCNBmi.qTVFSZoHHyc6X6zIotHaL', 0, '', '', ''),
(10, 'Ø­Ø§Ø¨Ø±', 'Ø¬Ø§Ø¨Ø±', 'g@gmail.com', '$2y$10$8H9gcIa6VMW0Dl/PzUBg4evjwA7DdDUo2RD5SaWpkSj', 0, '', '', ''),
(11, 'Ø¬Ù„Ø§Ù„', 'Ø±Ø³Ø§Ù…', 'gl@gmail.com', '$2y$10$ORx.c2evZGzFLIqOevxZLOuviKmWsQ6tlKOkbb8VFpK', 777654321, '', '', ''),
(12, 'Ø­Ø§Ø¨Ø±', 'Ø¬Ø§Ø¨Ø±', 'g@gmail.com', '$2y$10$OIfL.YHVEwbFm9IdYVKuu.YPoC1KEvwLi1u1ST8oQwq', 0, '', '', ''),
(13, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$XP4cwMwVIjC.DSpypQ0rAeJUZ0lPDvs.L1xo4bSffa1', 0, '', '', ''),
(14, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$sHk8LVttc0pneHodrCzOA.KVvMW5e.uSdKfub.Zrqo.', 0, '', '', ''),
(20, 'Ø¬Ù„Ø§Ù„', 'Ø±Ø³Ø§Ù…', 'gl@gmail.com', '$2y$10$Y4OCQ.LpwKDX6zeV/i/1XOsD7DL17UgWnuAWoVN7.nb', 777888999, '', '', ''),
(21, 'Ø¬Ù„Ø§Ù„', 'Ø±Ø³Ø§Ù…', 'gl@gmail.com', '$2y$10$Uxy/L5ubdRapThm0crArOOGSgNLeKqw2K4zcIZ10kPM', 777888999, '', '', ''),
(33, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$5MW7wXVMERS1zkcitX7M2.BtCa1TFkQDJ9rI2afWqiZ', 776787654, '', '', ''),
(34, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$3vThVOhLJcscyk8.iP4BQOscXYsv.W1YR3zKmk3J0Zs', 776787654, '', '', ''),
(35, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$ZPTfZDnCvv2AD6wyHp0rNer9tYDGwNdXqX1OFOJFaYh', 776787654, '', '', ''),
(36, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$gFDH62hCw10/wo4fWw0pMuprOI0pxDhd6SNDFu1yq8N', 776787654, '', '', ''),
(37, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$FdWUofKbhABh9JAySOQtI.mOu9OmyIitXNVke1wd6ul', 776787654, '', '', ''),
(38, 'Ø­Ø³Ø§Ù…', 'Ø³Ø§Ù„Ù…', 'h@gmail.com', '$2y$10$HHhHFbGyYc.k1jkh4Ycrzew41bbqOm1YFEN59rikoal', 776787654, '', '', ''),
(71, 'Ù…Ø­Ù…Ø¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'm@gmail.com', '$2y$10$dDdtmskMKTikljG2AjqwhOS2IubjY7TsvwJNaQgnnjj', 778899665, '', '', ''),
(72, 'Ù…Ø­Ù…Ø¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'm@gmail.com', '$2y$10$3lMUnbg6t2//.2BFZYd7fuVS1ijTK9B883fJ4UjtveK', 778899665, '', '', ''),
(73, 'Ù…Ø­Ù…Ø¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'm@gmail.com', '$2y$10$YRRwF31veuHjbE/9Rf2Xe.YuEnV99e5PfEvbnJlWzq8', 778899665, '', '', ''),
(74, 'Ù…Ø­Ù…Ø¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'm@gmail.com', '$2y$10$/EnC4Yoh02rCyhw72nWPuOLmBNH7S2z1N1WjSnciWeQ', 778899665, '', '', ''),
(75, 'Ù…Ø­Ù…Ø¯', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 'm@gmail.com', '$2y$10$GNREgfYzknNiWJoQ7K0VAuhtKE1qBzvDHC0IaOOjvEr', 778899665, '', '', ''),
(76, 'mohammed', 'hasn', 'mohammed@gmail.com', '$2y$10$QmfuTVP98RXZtKei2Mm4EuycfwLiQe8LAvQxNIO7IUm', 777555444, '', '', 'save/'),
(77, 'mohammed', 'hasn', 'mohammed@gmail.com', '$2y$10$ZOeORnnS.80jLODDD5NXt.heqj3XpaUdEoTA9KWDBvn', 777555444, '', '', 'save/'),
(78, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$28CqnftrkWs6aWdIxAyYNOTJoUVrDeQPF4ZUioy/NkP', 777888999, '', '', 'http://localhost/project/seve/'),
(79, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$Vbl55wPMN3iJ7v65424yRuOdbrJ9klU7RroaL5VuztN', 777888999, '', '', 'http://localhost/project/seve/'),
(80, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$6DeHp6.KnwwL0REVr7HiJuE4dNazeiZyP79GBRBgRsR', 777888999, '', '', 'http://localhost/project/seve/'),
(81, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$eP9zP7cfQprBILebEdMhp.Frk8OTxEn0PRcbMLomEEn', 777888999, '', '', 'http://localhost/project/seve/'),
(82, 'ali', 'ali', 'aliali@gmail.com', '$2y$10$EwV6s55m7P0MwOsB7VtSg.p32ENJIjmn44uuXBZZG/W', 777666555, '', '', 'http://localhost/project/seve/'),
(83, 'ali', 'ali', 'aliali@gmail.com', '$2y$10$J9LZsuvsEJa/.bp3SFHHZOwk8R2gFnoAue2A2Ux42W7', 777666555, '', '', 'http://localhost/project/seve/'),
(84, 'ali', 'ali', 'aliali@gmail.com', '$2y$10$Fm9.ebcbeJ84GBcNXluP4ezBzdXzi9z3M/Xt/rR9BKh', 777666555, '', '', 'http://localhost/project/seve/'),
(85, 'ali', 'ali', 'aliali@gmail.com', '$2y$10$Sn46Jw3OirZP0nndcMcmueyDsEfwe3HMMUsqa17BlVi', 777666555, '', '', 'seve/'),
(86, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$hWiDRQtOd7vhmjrdU6kkUesYJNgxn9VfRPT1lP9DZOP', 777888999, '', '', 'seve/'),
(87, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$JmJ.OzFAPylFCoUIXX1oGu9Z4.Aayjrl4vlNvsXNhjl', 777888999, '', '', 'seve/'),
(88, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$UYhX8w2QAx2pNEDSdVjv6OkLknBPB.8TbFgLTE01Gtv', 777888999, '', '', 'seve/'),
(89, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$PxrqVrvDZYZ1v5W/v1Sqq.S5VDRs8RfiyPDFVwtZZVc', 777888999, '', '', 'seve/'),
(90, 'ssss', 'ghjj', 'ghg@gmail.com', '$2y$10$FrOEBBmnRF7kIZkhXMW80uaTZ8UIIK4rY6zngJEsqVT', 777888999, '', '', 'seve/'),
(91, 'samy', 'ali', 'samy@gmail.com', '$2y$10$/zcMDYub81g2wr10rnC.buEvRQkBuz8BGRlnsTOhN6M', 777222333, '', '', 'seve/'),
(92, 'samy', 'ali', 'samy@gmail.com', '$2y$10$Q62MQUP7TJAMUUoSBoujB.kTwbpi7iz/7Aoc54KFFGh', 777222333, '', '', 'seve/'),
(93, 'shaker', 'saadan', 'shaker@gmail.com', '$2y$10$/fI3iVBtXywXUd6qmXfcUOAownPKUhzzh419lpoxVBB', 711723892, '', '', 'seve/'),
(94, 'shaker', 'saadan', 'shaker@gmail.com', '$2y$10$QA0u5FD0Dz0pq4KU0Cij9.9ym06RAXJoV8r9/2XtLE4', 711723892, '', '', 'seve/'),
(95, 'gobran', 'saadan', 'gobran@gmail.com', '$2y$10$e2CJvLJ7G1SSjNTk57EKjuLgYz.D6mtfwgx5lKUKsDO', 777666555, '', '', 'seve/'),
(96, 'adsfd', 'fdsgfgd', 'ddsg@gmail.com', '$2y$10$LNGn651Rl0ow40iwg7xjYOhmYY6Y84X.JS5HevhAAtZ', 777888999, '', '', 'seve/'),
(97, 'jfdks', 'ahskj', 'ghkdifut@gmail.com', '$2y$10$bfwEsU3E02fcnZNItni1M.BLEJrE1qN4ECjR0lWbJSQ', 777666555, '1636653624090.png', 'image/png', 'seve/1636653624090.png');

-- --------------------------------------------------------

--
-- بنية الجدول `safwan`
--

CREATE TABLE IF NOT EXISTS `safwan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `sitnumber` int(20) NOT NULL,
  `degree` int(10) NOT NULL,
  `phone` int(13) NOT NULL,
  `departmint` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `six` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sitnumber` (`sitnumber`),
  FULLTEXT KEY `fullname` (`firstname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- إرجاع أو استيراد بيانات الجدول `safwan`
--

INSERT INTO `safwan` (`id`, `firstname`, `sitnumber`, `degree`, `phone`, `departmint`, `subject`, `six`, `fname`, `lastname`) VALUES
(1, 'Ø¬Ù„Ø§Ù„', 2020101009, 890, 777888999, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'ÙÙŠØµÙ„', 'Ø±Ø³Ø§Ù…'),
(2, 'Ø­Ø§Ø¨Ø±', 2020101010, 878, 777766655, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø¹Ù„ÙŠ', 'Ø¬Ø§Ø¨Ø±'),
(3, 'Ø­Ø³Ø§Ù…', 2020101011, 888, 734567891, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø£Ø­Ù…Ø¯ Ø³Ø§Ù„Ù…', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡'),
(4, 'Ø­Ø³Ø§Ù…', 2020101077, 887, 777734567, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø£Ø­Ù…Ø¯ Ø³Ø§Ù„Ù…', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡'),
(5, 'ali', 2020101090, 787, 777777766, 'Ø£Ù…Ù† Ø³ÙŠØ¨Ø±Ø§Ù†ÙŠ', 'Ø¹Ù† Ø¨Ø¹Ø¯', 'Ø°ÙƒØ±', 'abdo', 'mohammed'),
(6, 'ÙØ§Ø±ÙˆÙ‚ Ø§Ù„ØºØ±ÙŠØ¨ÙŠ', 2021101097, 600, 778207300, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', '', ''),
(7, 'Ø¬Ù„Ø§Ù„', 2021101099, 777, 771834567, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'ÙÙŠØµÙ„', 'Ø±Ø³Ø§Ù…'),
(8, 'safwan', 2022101023, 987, 735878939, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'mohammed melhee', 'saadan'),
(9, 'Ø¹Ø¨Ø¯Ø§Ù„Ù…Ø¬ÙŠØ¯ Ø§Ù„Ø§ÙƒÙˆØ¹', 2147483647, 800, 77454557, 'ØªÙ‚Ù†ÙŠØ© Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø¹Ø±', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', '', ''),
(10, 'Ø¹Ù„ÙŠ', 2022101077, 788, 777343344, 'Ø£Ù…Ù† Ø³ÙŠØ¨Ø±Ø§Ù†ÙŠ', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ù…Ø­Ù…Ø¯ Ø¹Ø¨Ø¯Ù‡', 'Ù…Ø³Ø¹Ø¯'),
(13, 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 20221017, 788, 776643344, 'Ø¬Ø±Ø§ÙÙƒØ³', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ù…Ø­Ù…Ø¯ ', 'Ø¹Ù„ÙŠ'),
(17, 'Ø³Ø¹Ø¯', 202217, 788, 776666344, 'Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³ÙˆØ¨', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ù…Ø­Ù…Ø¯ ', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡'),
(21, 'Ø¹Ù„ÙŠ', 2022111, 677, 733365467, 'Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³ÙˆØ¨', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡ ', 'Ø¹Ø¨Ø¯Ø§Ù„Ø±Ø­Ù…Ù†'),
(23, 'Ù…Ø­Ù…Ø¯', 202211, 677, 733365487, 'Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³ÙˆØ¨', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡ ', 'Ø¹Ø¨Ø¯Ø§Ù„Ø±Ø­Ù…Ù†'),
(24, 'Ù…Ø³Ø¹Ø¯', 2022121, 688, 733399487, 'Ø£Ù…Ù† Ø³ÙŠØ¨Ø±Ø§Ù†ÙŠ', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø­Ù…ÙˆØ¯', 'Ø³Ø¹ÙŠØ¯'),
(27, 'Ø¹Ø¨Ø¯Ø§Ù„Ù„Ù‡', 22022113, 699, 733799487, 'Ø¬Ø±Ø§ÙÙƒØ³', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø­Ù…ÙˆØ¯', 'Ø³Ø¹ÙŠØ¯'),
(28, 'Ø¹Ù…Ø±', 2202213, 799, 733777777, 'Ù†Ø¸Ù… Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø¹Ù„ÙŠ', 'Ø³Ø¹ÙŠØ¯'),
(29, 'Ø¹Ø¨Ø¯Ø§Ù„ÙƒØ±ÙŠÙ…', 202210102, 800, 711727898, 'Ø¹Ù„ÙˆÙ… Ø§Ù„Ø­Ø§Ø³ÙˆØ¨', 'Ù…Ù†ØªØ¸Ù…', 'Ø°ÙƒØ±', 'Ø­Ù…ÙˆØ¯', 'Ø³Ù†Ø§Ù†');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

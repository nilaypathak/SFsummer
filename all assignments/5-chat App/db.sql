-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2017 at 06:38 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2092782_userdata`
--
CREATE DATABASE IF NOT EXISTS `id2092782_userdata` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id2092782_userdata`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `user` int(5) NOT NULL,
  `post` int(5) NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user`, `post`, `comment`, `date`) VALUES
(1, 2, 4, 'I am a student of this college.', '10 Jul 2017'),
(2, 46, 4, 'Yo', '10 Jul 2017'),
(3, 2, 10, 'ok', '10 Jul 2017'),
(4, 47, 4, 'ok', '10 Jul 2017'),
(5, 2, 10, 'great info', '10 Jul 2017'),
(6, 2, 11, 'Comment', '13 Jul 2017');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `sender` int(5) NOT NULL,
  `receiver` int(5) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  `seen` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `timestamp`, `seen`) VALUES
(1, 31, 2, 'hi', 1500108314, 0),
(2, 31, 2, 'ki re', 1500108576, 0),
(3, 12, 2, 'hi', 1500108598, 1),
(4, 12, 2, 'i love u', 1500108607, 1),
(5, 12, 2, 'really', 1500108612, 1),
(9, 0, 2, 'Hello and welcome to this chat app, in case of any problems please message me.Thank you!', 1500111539, 0),
(10, 45, 2, 'Hello and welcome to this chat app, in case of any problems please message me.Thank you!', 1500111658, 0),
(11, 33, 2, 'Hello and welcome to this chat app, in case of any problems please message me.Thank you!', 1500111790, 0),
(12, 50, 2, 'Hello and welcome to this chat app, in case of any problems please message me.Thank you!', 1500111873, 0),
(13, 2, 50, 'no problem', 1500111898, 0),
(14, 2, 50, 'cool', 1500111930, 0),
(15, 2, 50, 'good work', 1500111990, 0),
(16, 31, 50, 'ki re budi', 1500112067, 0),
(17, 45, 50, 'ki', 1500112131, 0),
(18, 2, 50, 'HI', 1500112423, 0),
(19, 50, 2, 'OK NO PROBLEM', 1500112640, 0),
(20, 2, 50, 'YES BOSS', 1500112726, 0),
(21, 2, 50, 'OK BOSS', 1500112798, 0),
(22, 50, 2, 'yup quicly get the job done', 1500115339, 1),
(23, 50, 2, 'ok?', 1500115378, 1),
(24, 50, 2, 'no', 1500115496, 1),
(25, 2, 31, 'hi', 1500115564, 0),
(26, 50, 31, 'bol', 1500117083, 1),
(27, 2, 31, 'yup', 1500117133, 0),
(28, 50, 31, 'ki', 1500117226, 1),
(29, 50, 31, 'yup', 1500117245, 1),
(30, 50, 31, 'hiiii', 1500117290, 1),
(31, 50, 31, 'ei', 1500117465, 1),
(32, 2, 31, 'test', 1500117603, 0),
(33, 2, 31, 'ki', 1500117647, 0),
(34, 50, 31, 'ei', 1500117827, 1),
(35, 2, 31, 'ok', 1500117960, 0),
(36, 50, 31, 'hi', 1500118553, 1),
(37, 50, 31, 'ki j bolish', 1500118595, 1),
(38, 50, 31, 'dur', 1500119110, 1),
(39, 50, 31, 'ki slow', 1500119267, 1),
(40, 50, 31, 'ki slow', 1500119274, 1),
(41, 2, 31, 'hey', 1500119603, 0),
(42, 2, 31, 'ki', 1500119671, 0),
(43, 2, 31, 'yo', 1500119691, 0),
(44, 2, 31, 'ki bepr', 1500119957, 0),
(45, 2, 31, 'hehehehe', 1500120021, 0),
(46, 2, 31, 'yo', 1500135965, 0),
(47, 34, 31, 'hi', 1500138179, 1),
(48, 34, 31, 'hello', 1500138240, 1),
(49, 2, 45, 'popo', 1500138679, 0),
(50, 31, 45, 'popo', 1500138693, 0),
(51, 45, 31, 'ki', 1500138967, 0),
(52, 35, 53, 'hey', 1500141839, 1),
(53, 35, 53, 'whats up?', 1500141859, 1),
(54, 35, 53, 'whats up?', 1500141867, 1),
(55, 35, 53, 'fine', 1500141897, 1),
(56, 2, 54, 'Well, nice design.', 1500144186, 0),
(57, 56, 55, 'Just checking real time', 1500152293, 1),
(58, 2, 57, 'ukg,', 1500159913, 0),
(59, 2, 57, 'cccccccccccccccccccccccccccg', 1500167151, 0),
(60, 2, 57, 'dgdgggdgd', 1500167160, 0),
(61, 2, 57, 'dggdgdgdddddddddddddddddddddd', 1500167169, 0),
(62, 2, 57, 'fdbddbd', 1500167178, 0),
(63, 36, 57, 'drrrrrrrrrrrrrrrr', 1500167312, 1),
(64, 50, 58, 'test', 1500175704, 1),
(65, 50, 58, 'nnknbklbnkblk', 1500175790, 1),
(66, 50, 58, 'ok', 1500175799, 1),
(67, 54, 2, 'thanks', 1500218386, 1),
(68, 44, 58, 'k', 1500223684, 1),
(69, 44, 58, 'kk', 1500223695, 1),
(70, 31, 2, 'hi', 1500226191, 1),
(71, 31, 2, 'ki', 1500226264, 1),
(72, 31, 2, 'yo', 1500226281, 1),
(73, 12, 2, 'love', 1500305931, 1),
(74, 12, 2, 'u', 1500305935, 1),
(75, 12, 2, 'ioio', 1500305942, 1),
(76, 12, 2, 'kind of slow', 1500305952, 1),
(77, 12, 2, 'but still cld have done bettter', 1500305969, 1),
(78, 2, 0, 'room mila', 1500313025, 1),
(79, 35, 61, 'hy', 1500323419, 1),
(80, 35, 61, 'cool', 1500323424, 1),
(81, 35, 61, 'fff', 1500323475, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) NOT NULL,
  `user` int(5) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user`, `title`, `note`, `date`) VALUES
(8, 15, 'S', 'SD', '02 Jul 2017'),
(12, 18, 'lnlnlkn', 'm;m;lm;m;', '02 Jul 2017'),
(13, 18, 'mm.,m', '.,m.,m.,m', '02 Jul 2017'),
(15, 19, 'a', 'a', '02 Jul 2017'),
(16, 19, 'b', 'b', '02 Jul 2017'),
(19, 20, 'b', '**jkliub**__kkbjkll**bjkljbl', '02 Jul 2017'),
(20, 14, 'kbnjb', 'nbjlnb//nk//', '02 Jul 2017'),
(22, 21, 'not2', 'hello2', '02 Jul 2017'),
(27, 25, 'Xyg\r\n\r\nGgyyuvoujb\r\n', '//UB', '03 Jul 2017'),
(35, 3, 'fff', '**//__**//__', '03 Jul 2017'),
(36, 3, 'ff', 'f', '03 Jul 2017'),
(38, 3, 'sssss', 'sssss', '03 Jul 2017'),
(39, 3, 'ssssssssss', 'sssssssssssssss', '03 Jul 2017'),
(40, 35, 'Topic', 'Ert__eef', '03 Jul 2017'),
(45, 37, 'gajjab', '7yu\r\n', '04 Jul 2017'),
(46, 37, 'second', 'wrew efgrbv', '04 Jul 2017'),
(47, 37, 'dfdf', 'sdfsdasds\r\n', '04 Jul 2017'),
(48, 0, 'hello fgfg', 'i love__ everyone__ **hihi**', ''),
(49, 0, 'hello fgfg', 'i love__ everyone**hihi**', ''),
(50, 2, 'hi', 'One of the newest halls on the campus, LBS (Lal Bahadur Sh', '04 Jul 2017'),
(52, 0, 'hi1', 'me too1', ''),
(53, 0, 'hi', 'me t', ''),
(54, 0, 'hi', 'me t', ''),
(57, 38, 'hey', 'jacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  jafnajfbjjacknkjubcwabcjkd  j', '04 Jul 2017'),
(60, 0, 'hi jesus', 'hey mother of mary', ''),
(61, 2, 'a', 'bcd', '07 Jul 2017'),
(63, 0, 'hi', 'One of the newest halls on the campus, LBS (Lal Bahadur Sh', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `user` int(5) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(2500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user`, `title`, `body`, `image`, `time`, `category`) VALUES
(4, 2, 'IIT Khargpur', 'The Indian Institute of Technology Kharagpur (IIT Kharagpur or IIT KGP) is a public engineering institution established by the government of India in 1951. It is the first of the IITs to be established, and is recognized as an Institute of National Importance by the Government of India.', 'wyidjkza82rve5o1xs4ngpbc03h9l7tf6uqm.jpg', '10 Jul 2017', 'College'),
(5, 2, 'Student Welfare Group,IIT Kharagpur', 'The Student Welfare Group is a student body under the office of the Dean of Students Affairs, IIT Kharagpur .\r\n\r\nWe strive to be with those who need help and promise to sweat for the realization and solutions of issues faced by our fellow mates. It is an organization of the students, for the students, by the students. We function as two teams-\r\n<br/>\r\nThe Central Team<br>\r\nThe Hall Coordinators Team', 'qgdhnfup7me8x16ib3ro9j04lakzywv5s2tc.jpg', '10 Jul 2017', 'College'),
(6, 2, 'Computer Science Engineering', 'In the 21st century, technology is omnipresent in our lives. With a boom in the technology sector, it is proving to be a lucrative career opportunity for students, who are in the juncture to pass out from school and are considering various aspects for their future career option.Computer Science Engineering is the most popular course for the Engineering aspirants. During the counselling of the top engineering colleges, the Computer Science Engineering seats are the fastest filled among different branches.\r\n <br>\r\nThis article of Careers360 brings to you the overview, career opportunities & scope, top colleges offering the specialization and popular companies, which recruit Computer Science Engineering graduates.<br>\r\n \r\nIndian consumers have over the years moved to the online platform for carrying out basic and simple tasks like shopping, booking tickets, etc. According to a report by PricewaterhouseCoopers (PwC), the year 2014 has seen unprecedented growth in E-commerce sector. Websites like Flipkart, Snapdeal and Amazon have been contributing in the economy of India over the last couple of years. The report mentions, “Since the E-commerce industry is fast rising, changes can be seen over a year. The sector in India has grown by 34% (CAGR) since 2009 to touch 16.4 billion USD in 2014. The sector is expected to be in the range of 22 billion USD in 2015.”<br>\r\n \r\nIncidentally, both the founders of Flipkart, one of the biggest E-commerce retail website, Sachin Bansal and Binny Bansal are Computer Science Engineers from IIT Delhi.  Bhavish Agarwal, Co-Founder, Ola Cabs is also a graduate of Computer Science from IIT Bombay.', 'e5r1xnmja9iyqzt4udf0vw73ogl6bkcps28h.jpg', '10 Jul 2017', 'Engineering'),
(9, 2, 'Indian Cricket Team', 'The India national cricket team, also known as Team India and Men in Blue, represents India in international cricket. Governed by the Board of Control for Cricket in India (BCCI), it is a full member of the International Cricket Council (ICC) with Test, One Day International (ODI) and Twenty20 International (T20I) status.<br><br>\r\nAlthough cricket was introduced to India by European merchant sailors in the 18th century, and the first cricket club was established in Calcutta in 1792, India\'s national cricket team did not play its first Test match until 25 June 1932 at Lord\'s, becoming the sixth team to be granted Test cricket status.<br><br> In its first fifty years of international cricket, India was one of the weaker teams, winning only 35 of the first 196 Test matches it played. From 1932 India had to wait until 1952, almost 20 years for its first Test victory. The team, however, gained strength in the 1970s with the emergence of players such as batsmen Sunil Gavaskar and Gundappa Viswanath, all-rounder Kapil Dev and the Indian spin quartet of Erapalli Prasanna, Srinivas Venkataraghavan, Bhagwat Chandrasekhar and Bishen Singh Bedi.<br><br>\r\nTraditionally much stronger at home than abroad, the Indian team has improved its overseas form, especially in limited-overs cricket, since the start of the 21st century, winning Test matches in Australia, England and South Africa. It has won the Cricket World Cup twice – in 1983 under the captaincy of Kapil Dev and in 2011 under the captaincy of Mahendra Singh Dhoni. After winning the 2011 World Cup, India became only the third team after West Indies and Australia to have won the World Cup more than once,[9] and the first cricket team to win the World Cup at home. It also won the 2007 ICC World Twenty20 and 2013 ICC Champions Trophy, under the captaincy of MS Dhoni. It was also the joint champions of 2002 ICC Champions Trophy, along with Sri Lanka.', 'x9ts7m4gzirb1p35coehwyad8fnk0uqjv6l2.jpg', '10 Jul 2017', 'Sports'),
(10, 2, 'Natural language processing', 'Natural language processing (NLP) is a field of computer science, artificial intelligence and computational linguistics concerned with the interactions between computers and human (natural) languages, and, in particular, concerned with programming computers to fruitfully process large natural language corpora. Challenges in natural language processing frequently involve natural language understanding, natural language generation (frequently from formal, machine-readable logical forms), connecting language and machine perception, dialog systems, or some combination thereof.\r\nThe history of NLP generally started in the 1950s, although work can be found from earlier periods. In 1950, Alan Turing published an article titled \"Computing Machinery and Intelligence\" which proposed what is now called the Turing test as a criterion of intelligence.\r\n\r\nThe Georgetown experiment in 1954 involved fully automatic translation of more than sixty Russian sentences into English. The authors claimed that within three or five years, machine translation would be a solved problem.[2] However, real progress was much slower, and after the ALPAC report in 1966, which found that ten-year-long research had failed to fulfill the expectations, funding for machine translation was dramatically reduced. Little further research in machine translation was conducted until the late 1980s, when the first statistical machine translation systems were developed.\r\n\r\n', 'pzwmlyo41fts25xequ638vbkgradnj0h9i7c.jpg', '10 Jul 2017', 'Computer Science'),
(11, 2, 'Tripling', 'Tvf tripling', 'rgwa39vdes65puhkfbq0i1y2m7nlj4t8cxzo.jpg', '12 Jul 2017', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `subcomments`
--

CREATE TABLE `subcomments` (
  `id` int(5) NOT NULL,
  `user` int(5) NOT NULL,
  `comment` int(5) NOT NULL,
  `subcomment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcomments`
--

INSERT INTO `subcomments` (`id`, `user`, `comment`, `subcomment`, `date`) VALUES
(1, 46, 1, 'Yo', '10 Jul 2017'),
(2, 47, 1, 'ok', '10 Jul 2017'),
(3, 2, 3, 'hi', '10 Jul 2017'),
(4, 2, 3, 'hi\r\n', '12 Jul 2017'),
(5, 2, 6, 'Commemt', '13 Jul 2017'),
(6, 2, 6, 'Commemt', '13 Jul 2017'),
(7, 2, 6, 'Commemt', '13 Jul 2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `propic` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'propic.png',
  `status` int(1) NOT NULL DEFAULT '0',
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `online` int(20) NOT NULL DEFAULT '1500063887'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `propic`, `status`, `date`, `online`) VALUES
(2, 'nilay', '5f4dcc3b5aa765d61d8327deb882cf99', 'Nilay', 'Pathak', 'member@000webhost.com', '3xsojbir7y9nztd2g8l64c1e05wuakmfqhpv.jpg', 2, '', 1),
(12, 'Suchorita Banerjee', 'f25a2fc72690b780b2a14e140ef6a9e0', 'Suchorita', 'Banerjee', 'Suchoritabanerjeee@gmail.com', 'propic.png', 1, '', 1500063887),
(20, 'hello', '49f68a5c8493ec2c0bf489821c21fc3b', 'hello', 'hello', 'tpo@gmail.com', 'propic.png', 0, '', 1500063887),
(23, 'rahul', '439ed537979d8e831561964dbbbd7413', 'rahul', 'baghel', 'ra@gmail.com', 'propic.png', 0, '', 1500063887),
(31, 'sany', '5f4dcc3b5aa765d61d8327deb882cf99', 'sanchita', 'Pathak', 'sanydgp@gmail.com', 'propic.png', 2, '', 1),
(33, 'ankit', '5f4dcc3b5aa765d61d8327deb882cf99', 'ankit', 'panda', 'ankit.panda357@gmail.com', 'propic.png', 0, '', 1500111800),
(34, 'naveen', 'e10adc3949ba59abbe56e057f20f883e', 'G', 'Naveen', 'naveengondu18@gmail.com', 'propic.png', 0, '', 1500063887),
(35, 'Hope', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Hopeless', 'Monkey', 'hope@gmail.com', 'propic.png', 0, '', 1500063887),
(36, 'pop', 'b21afc54fb48d153c19101658f4a2a48', 'pop', 'pop', 'pop@gmail.com', 'propic.png', 0, '', 1500063887),
(37, 'saurav@kumar', '8cf674180ea201eb14b12486eaef9f28', 'saurav', 'kumar', 'abc@gmail.com', 'propic.png', 0, '', 1500063887),
(38, 'abcd', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'abcd', 'abcd', 'qw@wq.com', 'propic.png', 0, '', 1500063887),
(40, 'ok', 'bfa99df33b137bc8fb5f5407d7e58da8', 'kk', 'uu', 'hh@gmail.com', 'propic.png', 0, '', 1500063887),
(41, 'x', '9dd4e461268c8034f5c8564e155c67a6', 'x', 'x', 'x@x.com', 'propic.png', 0, '', 1500063887),
(43, 'GN', '202cb962ac59075b964b07152d234b70', 'G', 'N', 'GN@gmail.com', 'propic.png', 0, '', 1500063887),
(44, 'k', '8ce4b16b22b58894aa86c421e8759df3', 'k', 'k', 'k@gmail.com', 'propic.png', 0, '', 1500063887),
(45, 'rahul123', '32250170a0dca92d53ec9624f336ca24', 'Rahul', 'Kumar', 'swg@swg.com', 'qatiy1ej3wrvk645zghupx20dbomn987flsc.jpg', 0, '10 Jul 2017', 1),
(49, 'Basant', '83878c91171338902e0fe0fb97a8c47a', 'basant', 'kumar', 'A@B.com', 'propic.png', 0, '', 1),
(50, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test@test', 'propic.png', 0, '', 1),
(51, 'junior', '187ef4436122d1cc2f40dc2b92f0eba0', 'Junior', 'Junior', 'abc@xyz.com', 'propic.png', 0, '', 1),
(52, 'Hxlydyl', 'dd4b21e9ef71e1291183a46b913ae6f2', 'Itxitxi', 'Itxiyd', 'oyxoyd@fuuduf', 'propic.png', 0, '', 0),
(53, 'www', 'dfd477ec34e29b51aed8bc4adf4e93a1', 'www', 'www', 'www@www.com', 'propic.png', 0, '', 1),
(54, 'Shivam Rajdev', 'c2381763b6e4612306f45c190800bbe4', 'Shivam', 'Rajdev', 'shivam.rajdev1998@gmail.com', 'propic.png', 0, '', 1500152113),
(55, 'New', 'c2381763b6e4612306f45c190800bbe4', 'new', 'new', 'new@gmail.com', 'propic.png', 0, '', 1),
(56, 'new1', 'c2381763b6e4612306f45c190800bbe4', 'new1', 'new1', 'new1@gmail.com', 'propic.png', 0, '', 0),
(57, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'a', 'a@a.com', 'propic.png', 0, '', 1),
(58, 'hunter', 'cb22d170f07c661e4e6acdce29f5f32a', 'h', 'h', 'gkm@fhv.com', 'propic.png', 0, '', 1),
(59, 'dhanoramm@gmail.com', '202cb962ac59075b964b07152d234b70', 'drm', 'mardi', 'dhanoramm@gmail.com', 'propic.png', 0, '', 1),
(60, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', '1@1', 'propic.png', 0, '', 1500313025),
(61, 'qqq', '1915ada3f288cfacf560be42712452ae', 'qqq', 'qqq', 'qqq@rrr.com', 'propic.png', 0, '', 1),
(62, 'pk', '202cb962ac59075b964b07152d234b70', 'p', 'k', 'kaushaliitkgp@gmail.com', 'propic.png', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcomments`
--
ALTER TABLE `subcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subcomments`
--
ALTER TABLE `subcomments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

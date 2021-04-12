-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 05:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `author`, `department`) VALUES
(9, 'Hunted By The Apocalypse', 'Dawn Decker', 'CSE'),
(12, '	Doctor Of Silver	', '	Martena Rivers	', '	Asset Management	'),
(13, '	Heroes With Pride	', '	Omar Morrow	', '	Customer Service	'),
(14, 'Wolves Of The Land', 'Velma Lynn', 'CSE'),
(17, '	Defeat Of The Mountain	', '	Mannix Roberson	', '	Finances	'),
(18, 'Faith Of The Ancestors', 'Florence Fulton', 'CSE'),
(19, '	Jumping Into The Ships	', '	Leila Guerra	', '	Media Relations	'),
(20, 'Avoiding The Abyss', 'Rhoda Fields', 'CSE'),
(24, '	Priests Of The Plague	', '	Cameron Howe	', '	Tech Support	'),
(25, '	Strangers And Butchers	', '	Macy Sears	', '	Research and Development'),
(26, '	Pirates And Assassins	', '	Aline Nunez	', '	Public Relations	'),
(27, '	Demise With Silver	', '	Jillian Winters	', '	Public Relations	'),
(28, '	Castle Of Utopia	', '	Brady Dunn	', '	Quality Assurance	'),
(29, '	Forsaken By The Leaders	', '	Austin Noble	', '	Tech Support	'),
(30, '	Breath Of The Ocean	', '	Meghan Aguilar	', '	Research and Development'),
(31, '	Turtle Of My Imagination', '	Alisa Shields	', '	Public Relations	'),
(32, '	Tortoise Of The Frontlin', '	Mallory Crane	', '	Finances	'),
(33, '	Men Of Dusk	', '	Nicholas Shannon	', '	Asset Management	'),
(34, '	Aliens Of Desire	', '	Felix Ward	', '	Sales and Marketing	'),
(35, '	Defenders And Butchers	', '	Tatiana Taylor	', '	Payroll	'),
(36, '	Rebels And Children	', '	Lynn Sellers	', '	Finances	'),
(37, '	Demise Of The Stars	', '	Maile Hardy	', '	Sales and Marketing	'),
(38, '	Fruit Of Destruction	', '	Eden Cole	', '	Human Resources	'),
(39, '	Commanding Technology	', '	Mollie Fields	', '	Research and Development'),
(40, '	Bound To The Animals	', '	Leah Vaughn	', '	Research and Development'),
(41, '	Fish Without Desire	', '	Kevyn Tanner	', '	Payroll	'),
(42, '	Slave Of Despair	', '	Luke Hayden	', '	Finances	'),
(43, '	Pilots Of The Void	', '	Duncan Griffith	', '	Research and Development'),
(45, '	Pirates And Turtles	', '	Dacey Acevedo	', '	Human Resources	'),
(46, '	Robots And Spies	', '	Lacota David	', '	Asset Management	'),
(47, '	Moon Of Hell	', '	Astra Hernandez	', '	Quality Assurance	'),
(48, '	Death Of The Ancients	', '	Elvis Schneider	', '	Public Relations	'),
(50, '	Welcome To The Demons	', '	Jana Anthony	', '	Customer Relations	'),
(51, '	Gangster Of The Day	', '	Owen Booth	', '	Customer Relations	'),
(52, 'Woman Without Shame', 'Axel Alford', 'CSE'),
(53, '	Gods Of The Great	', '	Quynn Finley	', '	Advertising	'),
(54, '	Phantoms Of Stone	', '	Tara Davenport	', '	Public Relations	'),
(55, 'Men And Girls', 'Denise Conley', 'CSE'),
(56, '	Armies And Guardians	', '	Shafira Ratliff	', '	Media Relations	'),
(57, '	Love Of Dusk	', '	Adara Nieves	', '	Sales and Marketing	'),
(58, 'Curse Of The Eternal', 'Quamar Williamson', 'CSE'),
(59, '	Raised By Eternity	', '	Zachery Mccarthy	', '	Legal Department	'),
(60, '	Helping The Beginning	', '	Yeo Duran	', '	Advertising	'),
(61, 'Priest Of The Ancestors', 'Dolan Perry', 'CSE'),
(62, 'Bandit With Honor', 'Daryl Campbell', 'CSE'),
(63, '	Agents Of The Curse	', '	Ifeoma Burton	', '	Human Resources	'),
(64, 'Women Of The Ancestors', 'Cooper Crane', 'CSE'),
(65, '	Companions And Turtles	', '	Ila Rios	', '	Public Relations	'),
(66, '	Aliens And Dogs	', '	Quon Holloway	', '	Accounting	'),
(67, '	Completion Of Dusk	', '	Leroy Stafford	', '	Human Resources	'),
(68, '	Victory With Immortality', '	Reuben Thompson	', '	Advertising	'),
(69, '	Bathing In The Fires	', '	Keelie Navarro	', '	Advertising	'),
(70, '	Death In The Animals	', '	Mikayla Berger	', '	Accounting	'),
(71, '	Companion Without A Home', '	Octavius Gonzales	', '	Customer Relations	'),
(72, '	Spider Without Honor	', '	Celeste Dominguez	', '	Public Relations	'),
(74, '	Trees Without Honor	', '	Jasmine Vinson	', '	Advertising	'),
(75, '	Spies And Turtles	', '	Dolan Mathis	', '	Sales and Marketing	'),
(77, 'Death Without Flaws', 'Heidi Hopper', 'CSE'),
(78, '	Harmony Of Twilight	', '	Jonas Trevino	', '	Sales and Marketing	'),
(79, '	Separated By The Light	', '	Rajah Sanford	', '	Research and Development'),
(80, '	Pleasing The Leaders	', '	Doris Tyler	', '	Legal Department	'),
(81, '	Warrior Of The Solstice	', '	Marvin Hammond	', '	Research and Development'),
(82, '	Descendant Without Duty	', '	Wang Gibbs	', '	Advertising	'),
(83, 'Heroes Of Eternity', 'Odette Flowers', 'CSE'),
(84, '	Spiders Of The Prison	', '	Vance Schultz	', '	Accounting	'),
(85, '	Doctors And Witches	', '	Ashton Rivas	', '	Finances	'),
(88, '	Obliteration With Wings	', '	Elvis Barlow	', '	Quality Assurance	'),
(89, '	Vanish At The Animals	', '	Ishmael Conrad	', '	Advertising	'),
(90, '	Screams At My Dreams	', '	Nicole Stark	', '	Sales and Marketing	'),
(93, 'Owls Of The Ancients', 'Chantale Higgins', 'CSE'),
(95, '	Women And Heroes	', '	Magee Smith	', '	Quality Assurance	'),
(96, 'Robots And Soldiers', 'McKenzie Mann', 'CSE'),
(97, '	Family Of The Stars	', '	Tyrone Kramer	', '	Legal Department	'),
(98, '	Carnage Of Heaven	', '	Jordan Mcdowell	', '	Legal Department	'),
(100, 'Blinded In The North', 'Oleg Stone', 'CSE'),
(101, 'gdfsg', 'sdgfg', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `libarian`
--

CREATE TABLE `libarian` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `post` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libarian`
--

INSERT INTO `libarian` (`id`, `name`, `phone`, `post`) VALUES
(1, '	Bertha U. Coleman	', '	16760610 3518	', '	 Assistant Officer	'),
(2, '	Shay X. Hernandez	', '	16810323 7023	', '	Manager	'),
(3, '	Darius F. Chen	', '	16061217 7360	', '	Manager	'),
(4, '	Georgia Y. Graves	', '	16420109 6635	', '	 junior Librarian 	'),
(5, '	Jana G. Watson	', '	16140520 3595	', '	pion	'),
(6, '	Gannon R. Best	', '	16480115 5542	', '	 junior Librarian 	'),
(7, '	Xantha W. Parrish	', '	16940917 6162	', '	 Assistant Officer	'),
(8, '	Philip E. Conrad	', '	16290820 6192	', '	 junior Librarian 	'),
(9, '	Bruno M. Kelly	', '	16410912 2574	', '	Manager	'),
(10, '	Cullen G. Finch	', '	16310705 0712	', '	 junior Librarian 	'),
(11, '	Reece H. Glover	', '	16610321 8043	', '	pion	'),
(12, '	Dana I. Rasmussen	', '	16570823 2516	', '	 Assistant Officer	'),
(13, '	Alana E. Mccoy	', '	16260222 5654	', '	 junior Librarian 	'),
(14, '	Kirestin T. Vang	', '	16260110 0320	', '	Manager	'),
(15, '	Demetria D. Hendricks	', '	16730508 0256	', '	 junior Librarian 	'),
(16, '	Lilah H. Curry	', '	16360908 7329	', '	 Assistant Officer	'),
(17, '	Drew R. Browning	', '	16870927 0410	', '	 Assistant Officer	'),
(18, '	Byron N. Jenkins	', '	16500410 2876	', '	 Assistant Officer	'),
(19, '	Bo M. Patton	', '	16840813 1277	', '	 junior Librarian 	'),
(20, '	Ursula W. Jimenez	', '	16310702 4766	', '	 junior Librarian 	');

-- --------------------------------------------------------

--
-- Table structure for table `restudent`
--

CREATE TABLE `restudent` (
  `id` int(11) NOT NULL,
  `na` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `department`, `book_id`) VALUES
(1, '	Lillith	', '	16120724 9028	', '	Payroll	', 39),
(2, '	Igor	', '	16500728 2790	', '	Customer Service	', 5),
(3, '	Adena	', '	16760424 6046	', '	Public Relations	', 56),
(4, '	Riley	', '	16840107 6453	', '	Legal Department	', 98),
(5, '	Leonard	', '	16071115 5747	', '	Media Relations	', 80),
(6, '	Tyrone	', '	16590823 6085	', '	Sales and Marketing	', 100),
(7, '	Meghan	', '	16340812 3242	', '	Quality Assurance	', 63),
(8, '	Irene	', '	16210424 0839	', '	Public Relations	', 19),
(9, '	Clark	', '	16160129 6997	', '	Finances	', 98),
(10, '	Keane	', '	16190309 9313	', '	Advertising	', 67),
(11, '	Carlos	', '	16091225 2293	', '	Payroll	', 97),
(12, '	Jada	', '	16140211 9711	', '	Tech Support	', 18),
(13, '	Courtney	', '	16961118 6421	', '	Research and Development', 8),
(14, '	Charde	', '	16320309 0539	', '	Tech Support	', 7),
(15, '	Keaton	', '	16050112 9910	', '	Customer Service	', 83),
(16, '	Denton	', '	16790416 8338	', '	Quality Assurance	', 71),
(17, '	Adrienne	', '	16740427 7902	', '	Sales and Marketing	', 27),
(18, '	Malachi	', '	16500706 6623	', '	Research and Development', 70),
(19, '	Raya	', '	16960926 3588	', '	Tech Support	', 81),
(20, '	Rooney	', '	16910308 4886	', '	Sales and Marketing	', 16),
(21, '	Libby	', '	16961024 3678	', '	Finances	', 43),
(22, '	Jolie	', '	16700522 3172	', '	Human Resources	', 99),
(23, '	Shannon	', '	16541102 7518	', '	Tech Support	', 17),
(24, '	Barbara	', '	16320115 9732	', '	Quality Assurance	', 20),
(25, '	Yoshio	', '	16621110 1503	', '	Quality Assurance	', 11),
(26, '	Zane	', '	16451125 3199	', '	Asset Management	', 31),
(27, '	Gabriel	', '	16260629 5661	', '	Customer Relations	', 16),
(28, '	Charissa	', '	16751007 4110	', '	Sales and Marketing	', 50),
(29, '	Timon	', '	16190615 0337	', '	Research and Development', 10),
(30, '	Nigel	', '	16971115 0715	', '	Media Relations	', 92),
(31, '	April	', '	16580903 8929	', '	Asset Management	', 15),
(32, '	Jeremy	', '	16201028 1216	', '	Quality Assurance	', 61),
(33, '	Maisie	', '	16040615 3916	', '	Sales and Marketing	', 12),
(34, '	Levi	', '	16451226 6190	', '	Payroll	', 50),
(35, '	Regan	', '	16560626 4231	', '	Public Relations	', 25),
(36, '	Kristen	', '	16210205 3788	', '	Asset Management	', 86),
(37, '	Adena	', '	16420304 5515	', '	Public Relations	', 28),
(38, '	Meredith	', '	16210821 5399	', '	Customer Service	', 83),
(39, '	Colorado	', '	16220406 7702	', '	Tech Support	', 92),
(40, '	Suki	', '	16830230 6140	', '	Sales and Marketing	', 40),
(41, '	Quinn	', '	16501007 6932	', '	Quality Assurance	', 29),
(42, '	Christian	', '	16561226 2104	', '	Tech Support	', 40),
(43, '	Jared	', '	16011205 7781	', '	Finances	', 90),
(44, '	Igor	', '	16101005 2957	', '	Human Resources	', 72),
(45, '	Anika	', '	16710412 4081	', '	Legal Department	', 37),
(46, '	Sylvester	', '	16940911 8677	', '	Legal Department	', 6),
(47, '	Carissa	', '	16860114 5934	', '	Customer Service	', 83),
(48, '	Angela	', '	16830219 1195	', '	Advertising	', 82),
(49, '	Jescie	', '	16290830 6711	', '	Accounting	', 1),
(50, '	Ryan	', '	16561218 0165	', '	Finances	', 63),
(51, '	Doris	', '	16420802 6916	', '	Legal Department	', 32),
(52, '	Sopoline	', '	16550221 5584	', '	Sales and Marketing	', 65),
(53, '	Celeste	', '	16480205 4512	', '	Advertising	', 16),
(54, '	Plato	', '	16941216 4270	', '	Customer Service	', 75),
(55, '	Simon	', '	16180705 0313	', '	Customer Service	', 92),
(56, '	Lila	', '	16070919 5176	', '	Quality Assurance	', 47),
(57, '	Callie	', '	16650211 3589	', '	Customer Relations	', 46),
(58, '	Murphy	', '	16911112 2603	', '	Advertising	', 14),
(59, '	Zena	', '	16170126 1479	', '	Customer Service	', 55),
(60, '	Xenos	', '	16620327 4771	', '	Customer Service	', 51),
(61, '	Wallace	', '	16321002 2806	', '	Public Relations	', 11),
(62, '	Plato	', '	16360702 1049	', '	Customer Relations	', 52),
(63, '	Garth	', '	16141218 8516	', '	Media Relations	', 52),
(64, '	Roth	', '	16930313 2832	', '	Accounting	', 67),
(65, '	Ferdinand	', '	16151001 0737	', '	Customer Service	', 57),
(66, '	Mariam	', '	16760706 2267	', '	Asset Management	', 7),
(67, '	Oliver	', '	16871025 9048	', '	Tech Support	', 94),
(68, '	Julie	', '	16731004 7126	', '	Customer Relations	', 3),
(69, '	Frances	', '	16620112 6635	', '	Asset Management	', 91),
(70, '	Olivia	', '	16180902 5925	', '	Advertising	', 79),
(71, '	Simone	', '	16061122 9345	', '	Quality Assurance	', 11),
(72, '	Fletcher	', '	16370120 5811	', '	Advertising	', 38),
(73, '	Buckminster	', '	16220208 0004	', '	Advertising	', 78),
(74, '	Dane	', '	16470514 2661	', '	Finances	', 74),
(75, '	Ian	', '	16130311 6576	', '	Public Relations	', 99),
(76, '	Ross	', '	16270930 8411	', '	Research and Development', 35),
(77, '	Robert	', '	16491130 9260	', '	Media Relations	', 51),
(78, '	Montana	', '	16430325 8638	', '	Asset Management	', 89),
(79, '	Deacon	', '	16350311 1977	', '	Human Resources	', 51),
(80, '	Barbara	', '	16210229 8086	', '	Sales and Marketing	', 88),
(81, '	Rhea	', '	16940920 4352	', '	Sales and Marketing	', 81),
(82, '	Brittany	', '	16731026 8904	', '	Public Relations	', 17),
(83, '	Cadman	', '	16870725 8730	', '	Finances	', 87),
(84, '	Cassidy	', '	16431230 6188	', '	Advertising	', 30),
(85, '	Guy	', '	16350729 1163	', '	Customer Service	', 92),
(86, '	Cathleen	', '	16340301 1822	', '	Customer Relations	', 21),
(87, '	Raja	', '	16021127 6621	', '	Asset Management	', 80),
(88, '	Lane	', '	16640216 4799	', '	Asset Management	', 12),
(89, '	Faith	', '	16150728 8619	', '	Customer Service	', 45),
(90, '	Cade	', '	16191025 5684	', '	Customer Relations	', 1),
(91, '	Mona	', '	16420230 7189	', '	Tech Support	', 28),
(92, '	Griffin	', '	16481206 0053	', '	Human Resources	', 21),
(93, '	Curran	', '	16120104 7311	', '	Advertising	', 27),
(94, '	Kimberly	', '	16571215 6784	', '	Legal Department	', 1),
(95, '	Jameson	', '	16880309 2819	', '	Legal Department	', 83),
(96, '	Caesar	', '	16090917 2181	', '	Quality Assurance	', 73),
(97, '	Gil	', '	16710403 5535	', '	Payroll	', 8),
(98, '	Xanthus	', '	16060415 6661	', '	Payroll	', 36),
(99, '	Hayes	', '	16090208 5059	', '	Customer Relations	', 39),
(100, '	Sheila	', '	16970819 8966	', '	Human Resources	', 25),
(101, 'fdsafasd', '13124214515', 'CSE', 0),
(102, 'fsaas', '13124214515', 'CSE', 0),
(103, 'jtr', '13124214515', 'CSE', 0),
(104, 'asfas', '13124214515', 'EEE', 0),
(105, 'p', '13124214515', 'CSE', 0),
(106, 'p', '13124214515', 'CSE', 0),
(107, 'anasa', '13124214515', 'CSE', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `libarian`
--
ALTER TABLE `libarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `libarian`
--
ALTER TABLE `libarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 09:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text DEFAULT NULL,
  `Email` text NOT NULL,
  `Password` text DEFAULT NULL,
  `Photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`, `Photo`) VALUES
('Masa Qazmoz', 'masaqazmoz@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'masa.jpeg'),
('Sojod Jamous', 'sojodjamous@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'sojod.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `classm`
--

CREATE TABLE `classm` (
  `Id` int(11) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `idmove` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classm`
--

INSERT INTO `classm` (`Id`, `Name`, `idmove`) VALUES
(4, 'Action', NULL),
(3, 'Animation', NULL),
(2, 'Comedy', NULL),
(1, 'Horror', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Name` text DEFAULT NULL,
  `Id` int(10) NOT NULL,
  `Summary` text DEFAULT NULL,
  `Classificationtype` varchar(50) DEFAULT NULL,
  `Photo` varchar(200) NOT NULL,
  `video` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Name`, `Id`, `Summary`, `Classificationtype`, `Photo`, `video`) VALUES
('The Conjuring', 1, 'n 1970, paranormal investigators and demonologists Lorraine (Vera Farmiga) and Ed (Patrick Wilson) Warren are summoned to the home of Carolyn (Lili Taylor) and Roger (Ron Livingston) Perron. The Perrons and their five daughters have recently moved into a secluded farmhouse, where a supernatural presence has made itself known. Though the manifestations are relatively benign at first, events soon escalate in horrifying fashion, especially after the Warrens discover the house\'s macabre history.', 'Horror', 'conj.jpg', 'Trailer.mp4'),
('Annabelle', 2, 'A husband and a wife are happily married and expecting a child. Mia (the wife) has to stay at home until the baby is delivered. Then, one night, when her husband came home from work, he brought home a present for his miserable wife. He brought home a doll named Annabelle, for her collection.', 'Horror', 'Ann.jpg', 'Trailer.mp4'),
('Chucky', 3, 'After being cut apart by the police, killer doll Chucky (Brad Dourif) is resurrected by Tiffany (Jennifer Tilly), an ex-girlfriend of the serial murderer whose soul is inside the toy. Following an argument, Chucky kills Tiffany and transfers her soul into a bride doll. To find the magical amulet that can restore them both to human form, Chucky and Tiffany arrange to be driven to New Jersey by Jesse (Nick Stabile) and Jade (Katherine Heigl), who are unaware that their cargo is alive.', 'Horror', 'chuk.jpg', 'Trailer.mp4'),
('The Mask\r\n', 4, 'When timid bank clerk Stanley Ipkiss (Jim Carrey) discovers a magical mask containing the spirit of the Norse god Loki, his entire life changes. While wearing the mask, Ipkiss becomes a supernatural playboy exuding charm and confidence which allows him to catch the eye of local nightclub singer Tina Carlyle (Cameron Diaz). Unfortunately, under the mask\'s influence, Ipkiss also robs a bank, which angers junior crime lord Dorian Tyrell (Peter Greene), whose goons get blamed for the heist.', 'Comedy', 'mask.jpg', 'Trailer.mp4'),
('Mr. Bean\'s Holiday', 5, 'Mr Bean is going on holiday to the south of France, looking for a quiet and sunny trip in the Riviera. However, his trip doesn\'t go as smoothly as he expected when he has to face a series of misunderstandings and totally unfortunate coincidences. Eventually, Mr Bean will end up spoiling the last film of the snobbish director Carson Clay and appearing by accident at the Cannes Film Festival.', 'Comedy', 'mrbean.jpg', 'Trailer.mp4'),
('21 Jump Street', 6, 'When cops Schmidt (Jonah Hill) and Jenko (Channing Tatum) join the secret Jump Street unit, they use their youthful appearances to go under cover as high-school students. They trade in their guns and badges for backpacks, and set out to shut down a dangerous drug ring. But, as time goes on, Schmidt and Jenko discover that high school is nothing like it was just a few years earlier -- and, what\'s more, they must again confront the teenage terror and anxiety they thought they had left behind.', 'Comedy', '21.jpg', 'Trailer.mp4'),
('John Wick', 7, 'Legendary assassin John Wick (Keanu Reeves) retired from his violent career after marrying the love of his life. Her sudden death leaves John in deep mourning. When sadistic mobster Iosef Tarasov (Alfie Allen) and his thugs steal John\'s prized car and kill the puppy that was a last gift from his wife, John unleashes the remorseless killing machine within and seeks vengeance. Meanwhile, Iosef\'s father (Michael Nyqvist) -- John\'s former colleague -- puts a huge bounty on John\'s head.', 'Action', 'john.jpg', 'Trailer.mp4'),
('Spider-Man: No Way Home', 8, 'With Spider-Man\'s identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', 'Action', 'spider.jpg', 'Trailer.mp4'),
('The Batman\r\n', 9, 'Batman ventures into Gotham City\'s underworld when a sadistic killer leaves behind a trail of cryptic clues. As the evidence begins to lead closer to home and the scale of the perpetrator\'s plans become clear, he must forge new relationships, unmask the culprit and bring justice to the abuse of power and corruption that has long plagued the metropolis.', 'Action', 'batman.jpg', 'Trailer.mp4'),
('Despicable Me\r\n', 10, 'Supervillain Gru, a man who delights in all things wicked, hatches a plan to steal the moon. Surrounded by an army of little yellow minions and his impenetrable arsenal of weapons and war machines, Gru prepares to vanquish all who stand in his way. However, nothing in his calculations and groundwork has prepared him for his greatest challenge: three adorable orphan girls who want to make him their dad.', 'Animation', 'desp.jpg', 'Trailer.mp4'),
('Toy Story\r\n', 11, 'Woody (Tom Hanks), a good-hearted cowboy doll who belongs to a young boy named Andy (John Morris), sees his position as Andy\'s favorite toy jeopardized when his parents buy him a Buzz Lightyear (Tim Allen) action figure. Even worse, the arrogant Buzz thinks he\'s a real spaceman on a mission to return to his home planet. When Andy\'s family moves to a new house, Woody and Buzz must escape the clutches of maladjusted neighbor Sid Phillips (Erik von Detten) and reunite with their boy.', 'Animation', 'toy.jpg', 'Trailer.mp4'),
('Up', 12, 'Carl Fredricksen, a 78-year-old balloon salesman, is about to fulfill a lifelong dream. Tying thousands of balloons to his house, he flies away to the South American wilderness. But curmudgeonly Carl\'s worst nightmare comes true when he discovers a little boy named Russell is a stowaway aboard the balloon-powered house. A Pixar animation.', 'Animation', 'up.jpg', 'Trailer.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movieanduser`
--

CREATE TABLE `movieanduser` (
  `Id` int(10) NOT NULL,
  `Idm` int(10) NOT NULL,
  `Emailg` varchar(50) NOT NULL,
  `mphoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieanduser`
--

INSERT INTO `movieanduser` (`Id`, `Idm`, `Emailg`, `mphoto`) VALUES
(1, 6, 'hamzaasaad@gmail.com', ''),
(2, 2, 'sanaabed@gmail.com', ''),
(3, 7, 'lailaabusafiya@gmail.com', ''),
(4, 11, 'lailaabusafiya@gmail.com', ''),
(5, 10, 'sanaabed@gmail.com', ''),
(6, 12, 'hamzaasaad@gmail.com', ''),
(7, 4, 'lailaabusafiya@gmail.com', ''),
(8, 2, 'sm@gmail.com', ' Ann.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` text DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` text DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `gender` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`, `Phone`, `Address`, `gender`) VALUES
('Hamza Asaad', 'hamzaasaad@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 59632587, 'Rfidia,Nablus,Palestine', 'male'),
('Laila AbuSafiya', 'lailaabusafiya@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 59891293, 'kafar thuluth ,Qalqilya ,Palestine', 'Female'),
('Sana Abed', 'sanaabed@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 59742581, 'Tulkarem,Palestine', 'Female'),
('sojod masa', 'sm@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 597183011, 'Nablus', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`(200));

--
-- Indexes for table `classm`
--
ALTER TABLE `classm`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `mm` (`idmove`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `c` (`Classificationtype`);

--
-- Indexes for table `movieanduser`
--
ALTER TABLE `movieanduser`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `mu` (`Idm`),
  ADD KEY `Emailg` (`Emailg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movieanduser`
--
ALTER TABLE `movieanduser`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classm`
--
ALTER TABLE `classm`
  ADD CONSTRAINT `mm` FOREIGN KEY (`idmove`) REFERENCES `movie` (`Id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `c` FOREIGN KEY (`Classificationtype`) REFERENCES `classm` (`Name`);

--
-- Constraints for table `movieanduser`
--
ALTER TABLE `movieanduser`
  ADD CONSTRAINT `mu` FOREIGN KEY (`Idm`) REFERENCES `movie` (`Id`),
  ADD CONSTRAINT `so` FOREIGN KEY (`Emailg`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

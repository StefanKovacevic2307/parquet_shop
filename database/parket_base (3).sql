-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 01:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parket_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sifra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `ime`, `prezime`, `email`, `sifra`) VALUES
(1, 'Marko', 'Marković', 'marko.markovic@example.com', 'password123'),
(2, 'Ana', 'Jovanović', 'ana.jovanovic@example.com', 'password456');

-- --------------------------------------------------------

--
-- Table structure for table `klijent`
--

CREATE TABLE `klijent` (
  `IDKlijenta` int(11) NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sifra` varchar(255) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klijent`
--

INSERT INTO `klijent` (`IDKlijenta`, `ime`, `prezime`, `email`, `sifra`, `adresa`) VALUES
(1, 'Milan', 'Savić', 'milan.savic@example.com', '123456', 'Kralja Petra 15, Beograd'),
(2, 'Ivana', 'Milenić', 'ivana.milenic@example.com', 'password113', 'Nemanjina 45, Novi Sad');

-- --------------------------------------------------------

--
-- Table structure for table `majstor`
--

CREATE TABLE `majstor` (
  `IDMajstora` int(11) NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sifra` varchar(255) DEFAULT NULL,
  `specijalizacija` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `majstor`
--

INSERT INTO `majstor` (`IDMajstora`, `ime`, `prezime`, `email`, `sifra`, `specijalizacija`) VALUES
(3, 'Ivan', 'Petrović', 'ivan.petrovic@example.com', '123456', 'Parketar'),
(4, 'Mirko', 'Nikolić', 'mirko.nikolic@example.com', 'password101', 'Parketar');

-- --------------------------------------------------------

--
-- Table structure for table `recenzija`
--

CREATE TABLE `recenzija` (
  `IDRecenzije` int(11) NOT NULL,
  `IDUsluge` int(11) DEFAULT NULL,
  `IDKlijenta` int(11) DEFAULT NULL,
  `IDMajstora` int(11) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL CHECK (`ocena` between 1 and 5),
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `IDRezervacije` int(11) NOT NULL,
  `IDUsluge` int(11) DEFAULT NULL,
  `IDKlijenta` int(11) DEFAULT NULL,
  `datumRezervacije` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('Admin','Majstor','Klijent') DEFAULT 'Klijent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`) VALUES
(1, 'Kovacevic', '$2y$10$wTP/IT6M8TznCLYA3kl4ouJC2wzXJsz2Gv5WGoxfFFSxyajvPb2Gy', 'Stefan', 'Klijent'),
(2, 'Marko', '$2y$10$8RDtYU/vRjJVdt0DQI.PDem02ORQDrU3IZpukPFQBvvM7G1LIafsi', 'Stefan', 'Klijent');

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

CREATE TABLE `usluga` (
  `IDUsluge` int(11) NOT NULL,
  `IDMajstora` int(11) DEFAULT NULL,
  `nazivUsluge` varchar(100) DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `dostupniTermin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klijent`
--
ALTER TABLE `klijent`
  ADD PRIMARY KEY (`IDKlijenta`);

--
-- Indexes for table `majstor`
--
ALTER TABLE `majstor`
  ADD PRIMARY KEY (`IDMajstora`);

--
-- Indexes for table `recenzija`
--
ALTER TABLE `recenzija`
  ADD PRIMARY KEY (`IDRecenzije`),
  ADD KEY `IDUsluge` (`IDUsluge`),
  ADD KEY `IDKlijenta` (`IDKlijenta`),
  ADD KEY `IDMajstora` (`IDMajstora`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`IDRezervacije`),
  ADD KEY `IDUsluge` (`IDUsluge`),
  ADD KEY `IDKlijenta` (`IDKlijenta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`IDUsluge`),
  ADD KEY `IDMajstora` (`IDMajstora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klijent`
--
ALTER TABLE `klijent`
  MODIFY `IDKlijenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `majstor`
--
ALTER TABLE `majstor`
  MODIFY `IDMajstora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recenzija`
--
ALTER TABLE `recenzija`
  MODIFY `IDRecenzije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `IDRezervacije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usluga`
--
ALTER TABLE `usluga`
  MODIFY `IDUsluge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recenzija`
--
ALTER TABLE `recenzija`
  ADD CONSTRAINT `recenzija_ibfk_1` FOREIGN KEY (`IDUsluge`) REFERENCES `usluga` (`IDUsluge`) ON DELETE CASCADE,
  ADD CONSTRAINT `recenzija_ibfk_2` FOREIGN KEY (`IDKlijenta`) REFERENCES `klijent` (`IDKlijenta`) ON DELETE CASCADE,
  ADD CONSTRAINT `recenzija_ibfk_3` FOREIGN KEY (`IDMajstora`) REFERENCES `majstor` (`IDMajstora`) ON DELETE CASCADE;

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`IDUsluge`) REFERENCES `usluga` (`IDUsluge`) ON DELETE CASCADE,
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`IDKlijenta`) REFERENCES `klijent` (`IDKlijenta`) ON DELETE CASCADE;

--
-- Constraints for table `usluga`
--
ALTER TABLE `usluga`
  ADD CONSTRAINT `usluga_ibfk_1` FOREIGN KEY (`IDMajstora`) REFERENCES `majstor` (`IDMajstora`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

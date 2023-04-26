-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kodokepykla`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaminys`
--

CREATE TABLE `gaminys` (
  `pavadinimas` varchar(100) NOT NULL,
  `foto_url` varchar(500) NOT NULL,
  `aprasymas` varchar(2500) NOT NULL,
  `kaina` double NOT NULL,
  `kiekis` double NOT NULL,
  `vertinimo_suma` double NOT NULL DEFAULT 0,
  `sudetis` varchar(2500) NOT NULL,
  `vertinimo_kiekis` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gaminys`
--

INSERT INTO `gaminys` (`pavadinimas`, `foto_url`, `aprasymas`, `kaina`, `kiekis`, `vertinimo_suma`, `sudetis`, `vertinimo_kiekis`) VALUES
('Canneles', 'images/Cannele.png', 'Vienas iš klasikinių Prancūzijos desertų, turinčių savyje kažką labai jaukaus, romantiško ir žinoma, saldaus... Tai vienas iš išskirtiniausių desertų Prancūzijoje, nes išsiskiria tiek savo forma, tiek tekstūra, tiek skoniu. Išorėje šie pyragėliai yra tamsios auksinės spalvos, paviršius tvirtas, traškus, o viduje – šviesūs, minkšti, drėgni, tekstūra kreminė. O kvapas nepriekaištingas ir nepamirštamas, nes šlakelis tamsaus kokybiško romo ir vanilės tiesiog kuria stebuklus. Tad kviečiame paragauti prancūziškos virtuvės stebuklų ir Jus!', 0.99, 35, 9, '', 2),
('Chouquettes', 'images/Chouquette.png', 'Didelio populiarumo sulaukęs Prancūzijos kepinys. Šie maži, plikytos tešlos sausainiai kepami iš traškios, sluoksniuotos tešlos, apibarstomi cukrumi ir patiekiami su švelniu grietinėlės kremu viduje. Jų subtilus skonis ir kreminė konsistencija žavi netgi labiausiai išrankius gurmanus. Nesvarbu, ar ieškote mažo skanėsto vakarienei, ar trokštate kažko saldaus ir lengvo, mūsų kepami Chouquettes visada yra tobulas pasirinkimas. Apsilankykite mūsų kepyklėlėje ir atraskite naują skonio pojūtį!', 0.49, 110, 3, '', 1),
('Croissant', 'images/Croissant.png', 'Šis tradicinis prancūziškas kepinys pagamintas iš trapios, sviestinės tešlos, kruopščiai sulankstytos ir iškeptos iki tobulumo. To rezultatas – karamelizuotas, traškus išorinis sluoksnis su švelniu vidumi. Kiekvienas kąsnis – skonio ir tekstūros harmonijos sprogimas. Mūsų Kouign Amann yra skirtas tiems, kurie ieško unikalaus ir skanaus desertų, išsiskiriančių iš kitų. Nesvarbu, ar tai yra ypatinga proga, ar tiesiog noras palepinti savo skonio receptorius, mūsų Kouign Amann tikrai paliks neišdildomą įspūdį!', 1.29, 30, 25, '', 5),
('Kouign Amann', 'images/KouignAmann.png', 'Šis tradicinis prancūziškas kepinys pagamintas iš trapios, sviestinės tešlos, kruopščiai sulankstytos ir iškeptos iki tobulumo. To rezultatas – karamelizuotas, traškus išorinis sluoksnis su švelniu vidumi. Kiekvienas kąsnis – skonio ir tekstūros harmonijos sprogimas. Mūsų Kouign Amann yra skirtas tiems, kurie ieško unikalaus ir skanaus desertų, išsiskiriančių iš kitų. Nesvarbu, ar tai yra ypatinga proga, ar tiesiog noras palepinti savo skonio receptorius, mūsų Kouign Amann tikrai paliks neišdildomą įspūdį! ', 2.99, 13, 4, '', 1),
('Macarons', 'images/Macaron.png', 'Nors pavadinimas ir primena makaronus, tarp šių sausainių ir makaronų bendro yra tik jų kilmės šalis. Šie dailūs sausainiai pradėti kepti Italijoje, tačiau, pasiekę Prancūziją, užkariavo šios šalies konditerių širdis ir tapo vienu iš šalies simbolių. Mūsų kepykla šiuos sausainius gamina pagal klasikinį jų receptą, tokį, koks vyrauja ir pačiose žymiausiose Prancūzijos kepyklose. Todėl maloniai kviečiame paragauti tikrojo Prancūzijos skonio!', 1.59, 50, 7, '', 2),
('Madeline', 'images/Madeline.png', 'Šie malonūs kepinukai yra pagaminti iš subtilios, lengvos tešlos, kuriai būdingas puikus švelnumas ir lengvumas, ir apibarstyti saldžiais karamelės gabaliukais, suteikiančiais papildomą skonio gilumą. Tai puikus užkandis, skirtas visiems, kurie nori pasimėgauti subtiliu, bet įsimintinu desertu. Mūsų Madeleine puikiai tiks visiems, kurie ieško skanių užkandžių, ar tai būtų kasdienybė, ar ypatingas renginys. Apsilankykite mūsų kepyklėlėje ir atraskite naujas skonio subtilybes, kuriomis galėsite džiaugtis bet kuriuo metu!', 0.79, 30, 0, '', 0),
('Pain Au Chocolate', 'images/PainAuChocolate.png', 'https://lh5.googleusercontent.com/4HDhmwsH2rRhsXAT4So0KTyjtueQ6zHVadaxH5ntEL5u7XwBDvDQr1cfq4B9KxTOsEo=w2400\",  \"Religieuse\", \"2.99 € / vnt.\", false, \"Šis puikus desertas gaminamas iš švelnios, kreminės tešlos, apipiltos švelniu kremu, pagamintu iš kokybiškiausių ingredientų. Šis minkštas ir švelnus desertas tikrai atitiks jūsų skonio poreikius. Nesvarbu, ar ieškote saldumo kasdieniam gyvenimui, ar norite sukurti įspūdingą desertų stalą, mūsų Religieuse tikrai atitiks jūsų lūkesčius. Apsilankykite mūsų kepyklėlėje ir patirkite šio nuostabaus deserto kūrybiškumą!', 1.39, 10, 0, '', 0),
('Profiterole', 'images/Profiterole.png', 'Šis populiarus prancūziškas desertas pagamintas iš lengvos ir korėtos tešlos, įdarytas gardžiu kremu ir dekoruotas delikačiais pabarstukais, o ant viršaus užpiltas kokybiškas šokoladas suteikia malonumą kiekviename kąsnyje. Šie skanūs ir elegantiški kepinukai tikrai sužavės jus ir jūsų svečius. Nesvarbu, ar rengiatės ypatingam vakarienės vakarui, ar tiesiog ieškote skanaus užkandžio, mūsų Profiterole tinka bet kokiam renginiui. Apsilankykite mūsų kepyklėlėje ir atraskite naujas skonio subtilybes - jūs tikrai nepasigailėsite!', 1.99, 5, 0, '', 0),
('Religieuse', 'images/Religieuse.png', 'Šis puikus desertas gaminamas iš švelnios, kreminės tešlos, apipiltos švelniu kremu, pagamintu iš kokybiškiausių ingredientų. Šis minkštas ir švelnus desertas tikrai atitiks jūsų skonio poreikius. Nesvarbu, ar ieškote saldumo kasdieniam gyvenimui, ar norite sukurti įspūdingą desertų stalą, mūsų Religieuse tikrai atitiks jūsų lūkesčius. Apsilankykite mūsų kepyklėlėje ir patirkite šio nuostabaus deserto kūrybiškumą!', 2.99, 10, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaminys`
--
ALTER TABLE `gaminys`
  ADD PRIMARY KEY (`pavadinimas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

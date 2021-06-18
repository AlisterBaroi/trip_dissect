-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripdissectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(10) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companyMoto` varchar(255) NOT NULL,
  `companyWebsite` varchar(255) NOT NULL,
  `socialFB` varchar(255) NOT NULL,
  `socialLinkedIn` varchar(255) NOT NULL,
  `companyAddress` varchar(255) NOT NULL,
  `companyDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyName`, `companyMoto`, `companyWebsite`, `socialFB`, `socialLinkedIn`, `companyAddress`, `companyDescription`) VALUES
(1, 'Plus Solar Systems Sdn Bhd', 'The Next Energy Revolution', 'https://plus-solar.com.my/', 'https://www.facebook.com/PlusSolar/', 'https://www.linkedin.com/company/plussolar/', 'ERS Energy Sdn. Bhd', 'We are made up of a bunch of creative, innovative and dedicated individuals who are passionate to drive the impact of clean energy to the community. As a team, we work fun and smart. Driven by the vision of transforming the electricity consumption pattern of people through the Energy Trilogy, which consists of Energy Generation, Energy Efficiency and Energy Storage, our co-founders and directors founded Leaf Energy in 2012, an energy consulting firm.\r\n\r\nA year later, our founders established Plus Solar Systems to provide turnkey solutions of our engineering, procurement, construction and commissioning (EPCC) services to fulfil the current needs of the market. In 2015, we subsequently developed a solar farm as an investor.\r\n\r\nAs a total clean energy solutions provider, we provide clean energy solutions integrated with state-of-the-art technology systems and cost-effective financing options to fulfil society’s every need of clean energy.'),
(2, 'ERS Energy Sdn. Bhd', 'All Natural. All-day Long. All Yours.', 'https://ers.my/', 'https://www.facebook.com/ersenergymy/', 'https://www.linkedin.com/company/ersenergy/', 'Jalan Telawi, Bangsar, KL, Malaysia', 'ERS Energy strives to offer world-class energy solutions accessible to everyone. Providing individuals, businesses and investors value with our professional energy services and delightful customer experience. ERS Energy has been an integral player in the solar industry for over ten years. Leading up to our crown achievement of installing Malaysia’s biggest solar PV project in 2018. 670MWp worth of installed capacity is from the hard work of our team, living by the tradition of improving ourselves further to provide you with the best possible solar PV solutions.'),
(3, 'SOLS Energy Sdn Bhd', 'One Stop Sustainable Energy Platform', 'https://www.solsenergy.com/', 'https://www.facebook.com/RayGoSolar/', '', 'Taman Sri Sinar, Wilayah Persekutuan, KL, Malaysia', 'We are a green energy company that customers love. We are a social enterprise which lives responsibility to the core. Responsibility for our customers, employees, communities and planet. We are technology- enthusiasts, sustainability-activists and energy-visionaries who are on the way to provide clean energy to every house. We are leaders in the residential solar market and enable SMEs to operate more efficiently.'),
(4, 'Ditrolic Solar', 'Towards Energy Independence', 'https://www.ditrolic-solar.com/', 'https://www.facebook.com/ditrolicsolar', 'https://www.linkedin.com/company/ditrolic-solar/', 'Ara Damansara, Petaling Jaya, Selangor, Malaysia', 'Founded in 2009, we’ve been around since the early days of the solar industry in Asia and have been a part of the industry evolution that have seen the tremendous growth of solar energy adoption in the region. We have broader experience than any other solar company in the country not only in terms of type of projects, but in different countries around the region as well.'),
(5, 'Ray Go Solar EPC Sdn Bhd', 'The Most Advanced Technology', 'https://www.raygosolar.com/', 'https://www.facebook.com/RayGoSolar/', '[https://www.linkedin.com/company/raygosolar/', 'Jalan Jasmin 3, Bandar Botanik, Klang, Selangor, Malaysia', 'Ray Go Solar aims to build a sustainable world by making all productions greener. Productions, such as those from the usage of electricity in residential homes and operations of large industrial factories could be made greener via the utilization of solar energy. Ray Go Solar is determined in providing an integrated green solution, all for the aim of reducing the total carbon footprints of homeowners, factory businesses, government, and non-profit organizations.'),
(6, 'NEFINCO Sdn. Bhd.', 'Shaping Asia Pacific’s Renewable Energy', 'http://nefinco.com/', 'https://www.facebook.com/nefinco', 'https://www.linkedin.com/company/nefin/', 'Jalan Tun Dr Awang, Bayan Lepas, Penang, Malaysia', 'NEFIN is a renewable energy investor, developer, and asset manager. We provide turnkey solutions to bring clients closer to carbon neutrality. With activities throughout Asia Pacific, we specialise in delivering bespoke systems and solutions for multinational corporations across their sites in the region. Founded by a core management team from DuPont Solar Business, NEFIN was started by multi-disciplinary solar experts with extensive experience in bringing renewable energy projects to successful operation. Today, our team brings together specialists from the legal, financial, scientific, and engineering sectors to form a holistic approach to tackle carbon neutrality.'),
(7, 'Symbior Cahaya Sdn Bhd', 'Power Your Business With The Sun', 'https://symbiorsolar.com/', 'https://www.facebook.com/SymbiorSolar/', 'https://www.linkedin.com/company/symbior-solar/', 'Empire Subang SOHO, Subang Jaya, Selangor, Malaysia', 'Symbior Solar implements, operates, and maintains solar panel installations to the highest international standards, ensuring smooth operations and optimal energy output every day. Symbior Solar thrives on diversity, combining local experience and international expertise. Our core team is based in Bangkok and includes executives from 11 nationalities. To date, Symbior Solar had delivered about 60,000 kWp PV portfolio across Asia, including- Industrial, commercial, and government rooftops installations. Utility-scale ground-mounted power plants Solar-battery hybrid systems'),
(8, 'Solarvest Energy Sdn Bhd', 'Turning Sunlight Into Investment', 'https://solarvest.my/', 'https://www.facebook.com/solarvest', 'https://www.linkedin.com/company/solarvest/', 'Ara Damansara, Petaling Jaya, Selangor, Malaysia', 'Solarvest was founded in 2012 with the vision to create a world where clean energy is easily accessible to many. We are among the first batch of grid-tied solar power installation providers that have obtained the certification from SEDA (Sustainable Energy Development Authority), ISPQ (Institute for Sustainable Power Quality) and GCPV (Grid-Connected Solar Photovoltaic) in Malaysia. Since then, we have been advocating for solar energy adoption and have grown to be a leading solar turnkey engineering, procurement, construction and commissioning (“EPCC”) service provider and shaped an established track record of Large Scale Solar PV projects as well as residential, commercial and industrial properties projects. We also provide operations and maintenance (O&M) services of solar PV systems. In addition to that, we own a 1MWp solar PV plant located at Pokok Sena, Kedah.');

-- --------------------------------------------------------

--
-- Table structure for table `energygoal`
--

CREATE TABLE `energygoal` (
  `goalID` int(10) NOT NULL,
  `targetUserName` varchar(255) NOT NULL,
  `targetCost` int(10) NOT NULL,
  `targetInterval` int(10) NOT NULL,
  `targetUsage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `energyProvider` varchar(255) DEFAULT NULL,
  `apartmentArea` int(3) DEFAULT NULL,
  `people` int(3) NOT NULL,
  `rooms` int(11) DEFAULT NULL,
  `meterID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`);

--
-- Indexes for table `energygoal`
--
ALTER TABLE `energygoal`
  ADD PRIMARY KEY (`goalID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `energygoal`
--
ALTER TABLE `energygoal`
  MODIFY `goalID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `submission`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `password`) VALUES
('amolwakhare@dietms.org', '94238731'),
('ashwinigaikwad@dietms.org', '98904621'),
('ashwinijagnade@dietms.org', '94046112'),
('gopalburkul@dietms.org', '70301537'),
('hodcse@dietms.org', '90490093'),
('madhubalachaudhari@dietms.org', '75888153'),
('manishamundhe@dietms.org', '98233506'),
('padmapanitribhuvan@dietms.org', '98905419'),
('pankajdurole@dietms.org', '82080764'),
('poonamborase@dietms.org', '78759694'),
('pramodbhalerao@dietms.org', '95616443'),
('pravinmahadik@dietms.org', '94237309'),
('pravinrathod@dietms.org', '95455544'),
('priyankadhas@dietms.org', '97667485'),
('sandeepshah@dietms.org', '92253020'),
('sarikasolanke@dietms.org', '94227214'),
('sonalishelke@dietms.org', '96892563'),
('vijaykolte@dietms.org', '94238175'),
('vishalchauhan@dietms.org', '90280249');

-- --------------------------------------------------------

--
-- Table structure for table `tycse`
--

CREATE TABLE `tycse` (
  `roll_no` varchar(20) NOT NULL,
  `prn` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn_no` int(10) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `elective` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tycse`
--

INSERT INTO `tycse` (`roll_no`, `prn`, `name`, `email`, `phn_no`, `batch`, `elective`) VALUES
('CS3101', 2147483647, 'PRASAD ZARAD', 'pzarad2@gmail.com ', 2147483647, 'A1', 'E1'),
('CS3102', 2147483647, 'NIKAM VENKATESH VILAS', 'nikamvenkatesh1@gmail.com', 2147483647, 'A1', 'E1'),
('CS3103', 2147483647, 'VAISHNAVI SURESH MAPARI', 'vmapari678@gmail.com ', 2147483647, 'A1', 'E1'),
('CS3104', 2147483647, 'VIVEK VILAS RODE', 'vivekdjjj@gmail.com', 2147483647, 'A1', 'E1'),
('CS3105', 2147483647, 'SONALI SHAKHAWAR', 'sonalishakhawar2@gmail.com', 2147483647, 'A1', 'E1'),
('CS3106', 2147483647, 'VIRAJ BHAGWATRAO SHINDE', 'virajbshinde7776@gmail.com', 2147483647, 'A1', 'E1'),
('CS3107', 2147483647, 'RUTURAJ PRAMOD SONONE', 'ruturajsonone@gmail.com', 2147483647, 'A1', 'E1'),
('CS3108', 2147483647, 'UTKARSHA SUNIL TAYADE', 'utkarshatayade03@gmail.com', 2147483647, 'A1', 'E1'),
('CS3109', 2147483647, 'TANVI RAJARAM SURYAWANSHI', 'suryawanshitanvi468@gmail.com', 2147483647, 'A1', 'E1'),
('CS3110', 2147483647, 'SHIHARE TANUJA SANJAY', 'tanujashihare25@gmail.com', 2147483647, 'A1', 'E1'),
('CS3111', 2147483647, 'SHUBHAM PRALHAD WANGEKAR', 'shubhamwangekar2002@gmail.com', 2147483647, 'A1', 'E1'),
('CS3112', 2147483647, 'SANAVI PANCHPOR', 'sanavipanchpor@gmail.com', 2147483647, 'A1', 'E1'),
('CS3113', 2147483647, 'AISHWARYA PARDESHI', 'aishurp2003@gmail.com', 2147483647, 'A1', 'E1'),
('CS3114', 2147483647, 'MANSI NAGARGOJE', 'mansinagargoje59@gmail.com', 2147483647, 'A1', 'E1'),
('CS3115', 2147483647, 'SAKSHI RAMPALLEWAR', 'sakshirampallewar@gmail.com', 2147483647, 'A1', 'E1'),
('CS3116', 2147483647, 'SRUSHTI PATIL', 'srushtipatil0201@gmail.com', 2147483647, 'A2', 'E1'),
('CS3117', 2147483647, 'PRANALI NAGE', 'nagepranali2003@gmail.com', 2147483647, 'A2', 'E1'),
('CS3118', 2147483647, 'PRATHMESH VITTHAL SALUNKE', 'prathmeshsalunke758@gmail.com', 2147483647, 'A2', 'E1'),
('CS3119', 2147483647, 'SANSKAR SURYAWANSHI', 'contactsanskarcs@gmail.com', 2147483647, 'A2', 'E1'),
('CS3120', 2147483647, 'RAZVI SYED HOSAAMUDDIN', 'razvisyed2002@gmail.com', 2147483647, 'A2', 'E1'),
('CS3121', 2147483647, 'SURANI JUNIT PRAKASH', 'junitsurani@gmail.com', 2147483647, 'A2', 'E1'),
('CS3122', 2147483647, 'SIDDIQUI TAHA AREEB', 'tahasiddiqui541@gmail.com', 2147483647, 'A2', 'E1'),
('CS3123', 2147483647, 'PREM DIWAKAR UKE', 'ukeprem@gmail.com ', 2147483647, 'A2', 'E1'),
('CS3124', 2147483647, 'SHEWALKAR YOGESH MAHESH', 'yogeshshewalkar02@gmail.com ', 2147483647, 'A2', 'E1'),
('CS3125', 2147483647, 'JIDNYASA PAWAR', 'jidnyasapawar2003@gmail.com ', 2147483647, 'A2', 'E1'),
('CS3126', 2147483647, 'HARSHAL THAKUR', 'harshalthakur34035@gmail.com', 2147483647, 'A2', 'E1'),
('CS3127', 2147483647, 'SATYAPRAKASH SURYAWANSHI', 'satyaprakashdsuryawanshi@gmail.com', 2147483647, 'A2', 'E1'),
('CS3128', 2147483647, 'SUSHANT PATIL', 'sushantspatil333@gmail.com', 2147483647, 'A2', 'E1'),
('CS3129', 2147483647, 'SAURABH PEMBHARE', 'saurabhpembhare7@gmail.com ', 2147483647, 'A2', 'E1'),
('CS3130', 2147483647, 'GAURAV WARARKAR', 'gauravwararkar987@gmail.com', 2147483647, 'A2', 'E1'),
('CS3131', 2147483647, 'PRASAD RAJENDRA NALBHE', 'nalbheprasad@gmail.com', 2147483647, 'A3', 'E1'),
('CS3132', 2147483647, 'SHUBHAM BALASAHEB RAGADE', 'shubhamragade2003@gmail.com ', 2147483647, 'A3', 'E1'),
('CS3133', 2147483647, 'DINESH DATTA SHRIRAME', 'dineshshrirame27@gmail.com', 2147483647, 'A3', 'E1'),
('CS3134', 2147483647, 'SUNNY BAPU NIKAM', 'sunnynikam3228@gmail.com', 2147483647, 'A3', 'E1'),
('CS3135', 2147483647, 'PATHARE SHUBHAM BHAUSAHEB', 'pathareshubham079@gmail.com', 2147483647, 'A3', 'E1'),
('CS3136', 2147483647, 'SAKSHI RITHE', 'vedantmohite45@gmail.com', 2147483647, 'A3', 'E1'),
('CS3137', 2147483647, 'AKASH ASHOK NALAWADE', 'akashnalawade12345678@gmail.com', 2147483647, 'A3', 'E1'),
('CS3138', 2147483647, 'ANCHAL SHRIDHAR SHELKE', 'shelkeanchal2003@gmail.com ', 2147483647, 'A3', 'E1'),
('CS3139', 2147483647, 'KALYANI SAINATH WAGHCHAURE', 'kalyaniwaghchaure2@gmail.com ', 2147483647, 'A3', 'E1'),
('CS3140', 2147483647, 'MRUNAL ZAMBRE', 'mrunalzambre21@gmail.com', 2147483647, 'A3', 'E1'),
('CS3141', 2147483647, 'VARAD GAJENDRA DESHPANDE', 'sarthakganesha@gmail.com', 2147483647, 'A3', 'E1'),
('CS3142', 2147483647, 'VINAYAK PARSEWAR', 'vinayak.parsewar55@gmail.com', 2147483647, 'A3', 'E1'),
('CS3143', 2147483647, 'ABHISHEK RAJESH MULEY', 'abhishekmuley2025@gmail.com', 2147483647, 'A3', 'E1'),
('CS3144', 2147483647, 'MANJUSHA ARVIND WAGH', 'waghmanjusha74@gmail.com', 2147483647, 'A3', 'E1'),
('CS3145', 2147483647, 'VAISHNAVI RAJENDRA WAGHOLE', 'vaishnaviwaghole132@gmail.com', 2147483647, 'A3', 'E1'),
('CS3146', 2147483647, 'GAYATRI SURYAWANSHI', 'gayatrisuryawanshi2404@gmail.com', 2147483647, 'A4', 'E1'),
('CS3147', 2147483647, 'SANIYA MORE', 'saniyamore66@gmail.com', 2147483647, 'A4', 'E1'),
('CS3148', 2147483647, 'PRANJAL TAYADE', 'tayadepranjal2903@gmail.com', 2147483647, 'A4', 'E1'),
('CS3149', 2147483647, 'VAISHNAVI SUNIL TONPE', 'vaishnavitonpe0@gmail.com', 2147483647, 'A4', 'E1'),
('CS3150', 2147483647, 'PAYASWINI RAJE', 'ppraje123@gmail.com', 2147483647, 'A4', 'E1'),
('CS3151', 2147483647, 'SONALI KOTLAPURE', 'sonalikotlapure@gmail.com ', 2147483647, 'A4', 'E1'),
('CS3152', 2147483647, 'PANCHAL SNEHAL SUBHASH', 'nehapanchal66477@gmail.com', 2147483647, 'A4', 'E1'),
('CS3153', 2147483647, 'OM BALU RAUT', 'omraut042004@gmail.com', 2147483647, 'A4', 'E1'),
('CS3154', 2147483647, 'PRATHAMESH ASHOK SHINDE', 'Shindeprathamesh1515@gmail.com', 2147483647, 'A4', 'E1'),
('CS3155', 2147483647, 'ASHISH NAMDEO RATHOD', 'anrathod2895@gmail.com ', 2147483647, 'A4', 'E1'),
('CS3156', 2147483647, 'RITESH UDAY WARKAD', 'riteshwarkad4711@gmail.com', 2147483647, 'A4', 'E1'),
('CS3157', 2147483647, 'VAIBHAV DATTU MALODE', 'vaibhav080103@gmail.com', 2147483647, 'A4', 'E1'),
('CS3158', 2147483647, 'MANISHA LAXMAN KHADUL', 'manishakhadul6@gmail.com', 2147483647, 'A4', 'E1'),
('CS3159', 2147483647, 'RUSHIKESH AJAY KARKHANE', 'rushikeshkarkhanecollegemail@gmail.com', 2147483647, 'A4', 'E1'),
('CS3160', 2147483647, 'ANUJA AJAY JAGTAP', 'anujaj2820@gmail.com ', 2147483647, 'A4', 'E1'),
('CS3161', 2147483647, 'SAMIR KAMBLE', 'samkamble523@gmail.com', 2147483647, 'A5', 'E1'),
('CS3162', 2147483647, 'PRASHANT ANIL BANGALE', 'prashantbangale666@gmail.com', 2147483647, 'A5', 'E1'),
('CS3163', 2147483647, 'YASHVANT MAHADEV HANGE', 'yashvanthange420@gmail.com', 2147483647, 'A5', 'E1'),
('CS3164', 2147483647, 'SHIVDATT RAMESH LAKHE', 'Shivdattlakhe999@gmail.com ', 2147483647, 'A5', 'E1'),
('CS3165', 2147483647, 'VAIBHAV GAJANAN KALDATE', 'vaibhavkaldate19@gmail.com', 2147483647, 'A5', 'E1'),
('CS3166', 2147483647, 'SAMARTH KOLHE', 'samakolhe677@gmail.com', 2147483647, 'A5', 'E1'),
('CS3167', 2147483647, 'TANISHQ JAWANJAL', 'jawanjaltanishq51@gmail.com', 2147483647, 'A5', 'E1'),
('CS3168', 2147483647, 'OM HARIBHAU GADEKAR', 'omgadekar25@gmail.com ', 2147483647, 'A5', 'E1'),
('CS3169', 2147483647, 'ANAND BAWASKAR', 'bawaskar126@gmail.com', 2147483647, 'A5', 'E1'),
('CS3170', 2147483647, 'RUSHIKESH BAKHARE', 'bakharerushikesh@gmail.com ', 2147483647, 'A5', 'E1'),
('CS3171', 2147483647, 'CHOPADE ANAND GANESH', 'chopadeanand268@gmail.com', 2147483647, 'A5', 'E1'),
('CS3172', 2147483647, 'YOGESH MUNJAJI DUDHATE', 'dudhamunjaji@gmail.com', 2147483647, 'A5', 'E1'),
('CS3173', 2147483647, 'DIVYA LAXMAN CHOUDHARI', 'divyachoudhari22@gmail.com', 2147483647, 'A5', 'E1'),
('CS3174', 2147483647, 'DHANASHREE DURPADE', 'dhanashreed887@gmail.com', 2147483647, 'A5', 'E1'),
('CS3201', 2147483647, 'ATHARVA KAD', 'atharvakad02@gmail.com ', 2147483647, 'B1', 'E1'),
('CS3202', 2147483647, 'NILESH BALA IDHATE', 'nileshidhate4115@gmail.com', 2147483647, 'B1', 'E1'),
('CS3203', 2147483647, 'SUYOG KAMLAKAR GADEKAR', 'Suyog9402@gmail.com', 2147483647, 'B1', 'E1'),
('CS3204', 2147483647, 'DAYEETA CHAKRAVORTY', 'chakravortydayeeta@gmail.com', 2147483647, 'B1', 'E1'),
('CS3205', 2147483647, 'KRISHNA DNYANESHWAR AUTE', 'krishnadaute@gmail.com', 2147483647, 'B1', 'E1'),
('CS3206', 2147483647, 'DARWANTE SWAPNIL DINKAR', 'swapnildarwante613@gmail.com', 2147483647, 'B1', 'E1'),
('CS3207', 2147483647, 'ARAB ZOYA KHALID', 'arabzoya236@gmail.com ', 912202200, 'B1', 'E1'),
('CS3208', 2147483647, 'PRATIKSHA BHISE', 'pratikshabhise87@gmail.com', 2147483647, 'B1', 'E1'),
('CS3209', 2147483647, 'ANAGHA SANTOSH KHANDARE', 'khandareanagha2003@gmail.com', 2147483647, 'B1', 'E1'),
('CS3210', 2147483647, 'SHANTANU ANANT KULKARNI', 'shantanumurtikar@gmail.com', 2147483647, 'B1', 'E1'),
('CS3211', 2147483647, 'TEJAS CHAKRADHAR MESHRAM', 'tejasmeshram2909@gmail.com', 2147483647, 'B1', 'E1'),
('CS3212', 2147483647, 'SNEHA VIJAY BAJPAI', 'sbehbajpai@gmail.com', 2147483647, 'B1', 'E1'),
('CS3213', 2147483647, 'RUSHIKESH RAVINDRA KULKARNI', 'rushi.rk1710@gmail.com', 2147483647, 'B1', 'E1'),
('CS3214', 2147483647, 'RENUKA DESHMUKH', 'renukad99991@gmail.com', 2147483647, 'B1', 'E1'),
('CS3215', 2147483647, 'KHUSHI SANDEEP KUNTE', 'Khushikunte1@gmail.com', 2147483647, 'B1', 'E1'),
('CS3216', 2147483647, 'BHUJANG HEMANT ANAND', 'hemantbhujang517@gmail.com', 2147483647, 'B2', 'E1'),
('CS3217', 2147483647, 'TABISH KHAN', 'khantabish2448@gmail.com', 2147483647, 'B2', 'E1'),
('CS3218', 2147483647, 'MAYANK JAYESH AGRAWAL', 'agrawalmayank.ma001@gmail.com', 2147483647, 'B2', 'E1'),
('CS3219', 2147483647, 'ANIKET SOMNATH CHOPDE', 'aniketchopde03@gmail.com', 2147483647, 'B2', 'E1'),
('CS3220', 2147483647, 'MISAL TEJAS RAMESH', 'tejasmisal2265@gmail.com', 2147483647, 'B2', 'E1'),
('CS3221', 2147483647, 'SAHIL RAJESH MHATRE', 'sahilmhatre2666@gmail.com ', 2147483647, 'B2', 'E1'),
('CS3222', 2147483647, 'BHAGYASHRI ARUN BHUTEKAR', 'bhagyashribhutekar24@gmail.com ', 2147483647, 'B2', 'E1'),
('CS3223', 2147483647, 'ROHAN RANJIT CHAUDHARI', 'rohan.chaudhari963@gmail.com', 2147483647, 'B2', 'E1'),
('CS3224', 2147483647, 'RUPALI KHANDARE', 'rupalirkhandare20@gmail.com', 2147483647, 'B2', 'E1'),
('CS3225', 2147483647, 'PRASAD SANDEEP BHUJBAL', 'p.s.bhujbal1234@gmail.com', 2147483647, 'B2', 'E1'),
('CS3226', 2147483647, 'GAURAVI MILIND KULKARNI', 'gauravikulkarni163@gmail.com', 2147483647, 'B2', 'E1'),
('CS3227', 2147483647, 'RENUKA SUDHIR KULKARNI', 'renukulkarni4545@gmail.com ', 2147483647, 'B2', 'E1'),
('CS3228', 2147483647, 'SIDDHI BIKKAD', 'siddhibikkad03@gmail.com ', 2147483647, 'B2', 'E1'),
('CS3229', 2147483647, 'PRANJALI SATYANARAYAN DUBEY', 'pranjalidubey0016@gmail.com ', 2147483647, 'B2', 'E1'),
('CS3230', 2147483647, 'SHRUTI SUSHIL AWASTHI', 'shrutiawasthi07@gmail.com', 2147483647, 'B2', 'E1'),
('CS3231', 2147483647, 'KALAWAR POOJA GANGAREDDY', 'kalawarpooja@gmail.com', 2147483647, 'B3', 'E1'),
('CS3232', 2147483647, 'SAEE PRASHANT JAGDALE', 'joej68902@gmail.com', 2147483647, 'B3', 'E1'),
('CS3233', 2147483647, 'SHUBHANGI RAMESH GAIKWAD', 'Shubhangigaikwad1803@gmail.com', 2147483647, 'B3', 'E1'),
('CS3234', 2147483647, 'SHIVKUMAR KADAM', 'kadamshiv11@gmail.com', 2147483647, 'B3', 'E1'),
('CS3235', 2147483647, 'SANIKA CHAVAN', 'sanikachavan1806@gmail.com ', 2147483647, 'B3', 'E1'),
('CS3236', 2147483647, 'MRUNAL KHANKE', 'mrunalkhanke7@gmail.com', 2147483647, 'B3', 'E1'),
('CS3237', 2147483647, 'SAMYAK DILIP JAIN', 'samyakdjain03@gmail.com ', 2147483647, 'B3', 'E1'),
('CS3238', 2147483647, 'BAHAKIM WALEED BIN JUMAN', 'waleedbahakim123@gmail.com', 2147483647, 'B3', 'E1'),
('CS3239', 2147483647, 'ABHAY PRATAPRAO JADHAV', 'abhayjadhav8164@gmail.com', 2147483647, 'B3', 'E1'),
('CS3240', 2147483647, 'BHOSLE YASHWANT BHUJANGRAO', 'bhosleyash18@gmail.com', 2147483647, 'B3', 'E1'),
('CS3241', 2147483647, 'SHREYA GANESH DESHMUKH', 'deshmukhga101@gmail.com', 2147483647, 'B3', 'E1'),
('CS3242', 2147483647, 'AATIF AHMED', 'ideapadaatif@gmail.com', 2147483647, 'B3', 'E1'),
('CS3243', 2147483647, 'PAWAR SWAPNIL', 'dalalrutuja2004@gmail.com', 2147483647, 'B3', 'E1'),
('CS3244', 2147483647, 'SNEHA VIJAY SOANWANE', 'snehasonawane099@gmail.com', 2147483647, 'B3', 'E1'),
('CS3245', 2147483647, 'SIDDHANT SURAJ SARODE', 'siddhantsarode07@gmail.com', 2147483647, 'B3', 'E1'),
('CS3246', 2147483647, 'SAHIL PATIL', 'sahilspatil6@gmail.com', 2147483647, 'B4', 'E1'),
('CS3247', 2147483647, 'SIDDHI TRIBHUWAN', 'siddhitribhuwan@gmail.com', 2147483647, 'B4', 'E1'),
('CS3248', 2147483647, 'SAKSHI KAKDE', 'sakshi.kakde2004@gmail.com', 2147483647, 'B4', 'E1'),
('CS3249', 2147483647, 'SHITAL VITTHAL KENDRE', 'shitalkendre049@gmail.com', 2147483647, 'B4', 'E1'),
('CS3250', 2147483647, 'SAYLI ATUL DESHPANDE', 'amrutasayli@gmail.com', 2147483647, 'B4', 'E1'),
('CS3251', 2147483647, 'SAMRUDDHI SHIRISH GIRI', 'samruddhi07giri@gmail.com', 2147483647, 'B4', 'E1'),
('CS3252', 2147483647, 'VAISHALI KIRTIKUAMAR NILE', 'vaishalinile896@gmail.com', 2147483647, 'B4', 'E1'),
('CS3253', 2147483647, 'GARGI NANDKISHOR KSHIRSAGAR', 'kshirsagargargi5@gmail.com', 2147483647, 'B4', 'E1'),
('CS3254', 2147483647, 'SNEHAL SANJAY PRADHAN', 'snehalpradhan695@gmail.com', 2147483647, 'B4', 'E1'),
('CS3255', 2147483647, 'ADITI AJAY DESHPANDE', 'daditideshpande28@gmail.com', 2147483647, 'B4', 'E1'),
('CS3256', 2147483647, 'MANISHA PENDHARKAR', 'manishapendharkar2004@gmail.com', 2147483647, 'B4', 'E1'),
('CS3257', 2147483647, 'OM BHAGWAN DONGRE', 'omdongre02@gmail.com', 2147483647, 'B4', 'E1'),
('CS3258', 2147483647, 'HADULE ROHIT LAXMAN', 'rohithadule2000@gmail.com', 2147483647, 'B4', 'E1'),
('CS3259', 2147483647, 'RUTUJA SANJAY TARO', 'rutujataro@gmail.com', 2147483647, 'B4', 'E2'),
('CS3260', 2147483647, 'ADITYA RAJABHAU YADAV', 'adityay1904@gmail.com', 2147483647, 'B4', 'E2'),
('CS3261', 2147483647, 'ROHIT GAJANAN RAUT', 'gajananraut852@gmail.com ', 2147483647, 'B5', 'E2'),
('CS3262', 2147483647, 'VEDANT MOHITE', 'vedantmohite45@gmail.com', 2147483647, 'B5', 'E2'),
('CS3263', 2147483647, 'TEJAS PURI', 'puritejas781@gmail.com', 2147483647, 'B5', 'E2'),
('CS3264', 2147483647, 'SANJANA GHATOLKAR', 'ghatolkarsanjana2004@gmail.com ', 2147483647, 'B5', 'E2'),
('CS3265', 2147483647, 'BALAJI ANNABHAU TAKLE', 'balajitakle01@gmail.com', 2147483647, 'B5', 'E2'),
('CS3266', 2147483647, 'AMIT GHANSHYAM BARVE', 'amitbarve2003@gmail.com', 2147483647, 'B5', 'E2'),
('CS3267', 2147483647, 'TEJAS RAJESH GADHE', 'tejasgadhe1920@gmail.com', 2147483647, 'B5', 'E2'),
('CS3268', 2147483647, 'FAIZAN AHMED', 'faizanahmed4355@gmail.com', 2147483647, 'B5', 'E2'),
('CS3269', 2147483647, 'AKASH LAXMAN GOLDE', 'akashgolde2003@gmail.com', 2147483647, 'B5', 'E2'),
('CS3270', 2147483647, 'RAMESHWAR SHESHRAO GUJAR', 'rameshwarsg9881@gmail.com', 2147483647, 'B5', 'E2'),
('CS3271', 2147483647, 'UMESH AKADE', 'umeshakade3@gmail.com ', 2147483647, 'B5', 'E2'),
('CS3272', 2147483647, 'KEDAR SHAH', 'kedarshah355@gmail.com', 2147483647, 'B5', 'E2'),
('CS3273', 2147483647, 'ASHWINI BAHIR', 'bahirashwini45@gmail.com', 2147483647, 'B5', 'E2'),
('CS3274', 2147483647, 'RUTUJA ANIL DALAL', 'dalalrutuja2004@gmail.com', 2147483647, 'B5', 'E2'),
('roll_no', 0, 'name', 'email', 0, 'bat', 'ele');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tycse`
--
ALTER TABLE `tycse`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

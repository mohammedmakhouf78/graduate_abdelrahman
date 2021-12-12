-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Dec 12, 2021 at 09:01 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduate_abdelrahman`
--

-- --------------------------------------------------------

--
-- Table structure for table `army`
--

CREATE TABLE `army` (
  `id` int(11) NOT NULL,
  `army` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `center` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `committies`
--

CREATE TABLE `committies` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `start_from` int(11) NOT NULL,
  `end_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `decisions`
--

CREATE TABLE `decisions` (
  `id` int(11) NOT NULL,
  `decision` text NOT NULL,
  `decision_date` date NOT NULL,
  `decision_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `decision_type`
--

CREATE TABLE `decision_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birth_day` date DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_phones`
--

CREATE TABLE `employee_phones` (
  `id` int(11) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `full_mark` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `squad_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `professor_assistant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exam_marking`
--

CREATE TABLE `exam_marking` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `marking_date` date NOT NULL,
  `degree` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exam_opservers`
--

CREATE TABLE `exam_opservers` (
  `id` int(11) NOT NULL,
  `observer_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `total` float NOT NULL,
  `squad_id` int(11) NOT NULL,
  `fixed_money` float NOT NULL,
  `changable_money` float NOT NULL,
  `discount` float NOT NULL,
  `deserved_money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(11) NOT NULL,
  `floor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

CREATE TABLE `installment` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `student_finance_id` int(11) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` int(11) NOT NULL,
  `nationality` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `note` text NOT NULL,
  `note_date` date NOT NULL,
  `type_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `note_type`
--

CREATE TABLE `note_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `observers`
--

CREATE TABLE `observers` (
  `id` int(11) NOT NULL,
  `emplyee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `organization` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_state`
--

CREATE TABLE `payment_state` (
  `id` int(11) NOT NULL,
  `state` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permessions`
--

CREATE TABLE `permessions` (
  `id` int(11) NOT NULL,
  `permession` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `professors_assistants`
--

CREATE TABLE `professors_assistants` (
  `id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `professor_assistant_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `professor_assistant`
--

CREATE TABLE `professor_assistant` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `qualification` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles_permessions`
--

CREATE TABLE `roles_permessions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permesison_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sit_numbers`
--

CREATE TABLE `sit_numbers` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `squad_id` int(11) NOT NULL,
  `sit_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `squads`
--

CREATE TABLE `squads` (
  `id` int(11) NOT NULL,
  `squad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `second_name` varchar(45) NOT NULL,
  `thisrd_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `city_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `army_id` int(11) NOT NULL,
  `squad_id` int(11) NOT NULL,
  `study_year` date NOT NULL,
  `dapartment_id` int(11) NOT NULL,
  `coming_from` int(11) NOT NULL,
  `going_to` int(11) NOT NULL,
  `payment_state_id` int(11) NOT NULL,
  `coming_date` date NOT NULL,
  `home_phone` varchar(45) DEFAULT NULL,
  `identity_card` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_finance`
--

CREATE TABLE `student_finance` (
  `id` int(11) NOT NULL,
  `paid` float NOT NULL,
  `finance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `rest_money` float NOT NULL,
  `paid_date` date NOT NULL,
  `paid_id_number` int(11) NOT NULL,
  `mony_from_prev_years` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_phones`
--

CREATE TABLE `student_phones` (
  `id` int(11) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `squad_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `image` text NOT NULL,
  `job` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_phones`
--

CREATE TABLE `users_phones` (
  `phone` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `army`
--
ALTER TABLE `army`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committies`
--
ALTER TABLE `committies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_327` (`floor_id`);

--
-- Indexes for table `decisions`
--
ALTER TABLE `decisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_186` (`decision_id`),
  ADD KEY `FK_189` (`student_id`);

--
-- Indexes for table `decision_type`
--
ALTER TABLE `decision_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_phones`
--
ALTER TABLE `employee_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_249` (`employee_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_260` (`subject_id`),
  ADD KEY `FK_263` (`department_id`),
  ADD KEY `FK_266` (`squad_id`),
  ADD KEY `FK_269` (`professor_id`),
  ADD KEY `FK_291` (`professor_assistant_id`);

--
-- Indexes for table `exam_marking`
--
ALTER TABLE `exam_marking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_314` (`exam_id`);

--
-- Indexes for table `exam_opservers`
--
ALTER TABLE `exam_opservers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_303` (`observer_id`),
  ADD KEY `FK_306` (`exam_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_349` (`squad_id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installment`
--
ALTER TABLE `installment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_360` (`student_finance_id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_201` (`type_id`),
  ADD KEY `FK_204` (`student_id`);

--
-- Indexes for table `note_type`
--
ALTER TABLE `note_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observers`
--
ALTER TABLE `observers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_297` (`emplyee_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_state`
--
ALTER TABLE `payment_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permessions`
--
ALTER TABLE `permessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_254` (`employee_id`);

--
-- Indexes for table `professors_assistants`
--
ALTER TABLE `professors_assistants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_282` (`professor_id`),
  ADD KEY `FK_285` (`professor_assistant_id`),
  ADD KEY `FK_288` (`subject_id`);

--
-- Indexes for table `professor_assistant`
--
ALTER TABLE `professor_assistant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_275` (`employee_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permessions`
--
ALTER TABLE `roles_permessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_393` (`role_id`),
  ADD KEY `FK_396` (`permesison_id`);

--
-- Indexes for table `sit_numbers`
--
ALTER TABLE `sit_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_214` (`student_id`),
  ADD KEY `FK_217` (`squad_id`);

--
-- Indexes for table `squads`
--
ALTER TABLE `squads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_106` (`city_id`),
  ADD KEY `FK_113` (`center_id`),
  ADD KEY `FK_132` (`qualification_id`),
  ADD KEY `FK_139` (`army_id`),
  ADD KEY `FK_146` (`squad_id`),
  ADD KEY `FK_154` (`dapartment_id`),
  ADD KEY `FK_161` (`coming_from`),
  ADD KEY `FK_167` (`going_to`),
  ADD KEY `FK_174` (`payment_state_id`),
  ADD KEY `FK_89` (`status_id`),
  ADD KEY `FK_97` (`nationality_id`);

--
-- Indexes for table `student_finance`
--
ALTER TABLE `student_finance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_338` (`student_id`),
  ADD KEY `FK_352` (`finance_id`);

--
-- Indexes for table `student_phones`
--
ALTER TABLE `student_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_125` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_231` (`squad_id`),
  ADD KEY `FK_234` (`department_id`),
  ADD KEY `FK_257` (`professor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_383` (`role_id`);

--
-- Indexes for table `users_phones`
--
ALTER TABLE `users_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_376` (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `committies`
--
ALTER TABLE `committies`
  ADD CONSTRAINT `FK_325` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`);

--
-- Constraints for table `decisions`
--
ALTER TABLE `decisions`
  ADD CONSTRAINT `FK_184` FOREIGN KEY (`decision_id`) REFERENCES `decision_type` (`id`),
  ADD CONSTRAINT `FK_187` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `employee_phones`
--
ALTER TABLE `employee_phones`
  ADD CONSTRAINT `FK_247` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `FK_258` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `FK_261` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `FK_264` FOREIGN KEY (`squad_id`) REFERENCES `squads` (`id`),
  ADD CONSTRAINT `FK_267` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`),
  ADD CONSTRAINT `FK_289` FOREIGN KEY (`professor_assistant_id`) REFERENCES `professor_assistant` (`id`);

--
-- Constraints for table `exam_marking`
--
ALTER TABLE `exam_marking`
  ADD CONSTRAINT `FK_312` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `exam_opservers`
--
ALTER TABLE `exam_opservers`
  ADD CONSTRAINT `FK_301` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`id`),
  ADD CONSTRAINT `FK_304` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `FK_347` FOREIGN KEY (`squad_id`) REFERENCES `squads` (`id`);

--
-- Constraints for table `installment`
--
ALTER TABLE `installment`
  ADD CONSTRAINT `FK_358` FOREIGN KEY (`student_finance_id`) REFERENCES `student_finance` (`id`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `FK_199` FOREIGN KEY (`type_id`) REFERENCES `note_type` (`id`),
  ADD CONSTRAINT `FK_202` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `observers`
--
ALTER TABLE `observers`
  ADD CONSTRAINT `FK_295` FOREIGN KEY (`emplyee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `FK_252` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `professors_assistants`
--
ALTER TABLE `professors_assistants`
  ADD CONSTRAINT `FK_280` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`),
  ADD CONSTRAINT `FK_283` FOREIGN KEY (`professor_assistant_id`) REFERENCES `professor_assistant` (`id`),
  ADD CONSTRAINT `FK_286` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `professor_assistant`
--
ALTER TABLE `professor_assistant`
  ADD CONSTRAINT `FK_273` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `roles_permessions`
--
ALTER TABLE `roles_permessions`
  ADD CONSTRAINT `FK_391` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `FK_394` FOREIGN KEY (`permesison_id`) REFERENCES `permessions` (`id`);

--
-- Constraints for table `sit_numbers`
--
ALTER TABLE `sit_numbers`
  ADD CONSTRAINT `FK_212` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `FK_215` FOREIGN KEY (`squad_id`) REFERENCES `squads` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_104` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `FK_111` FOREIGN KEY (`center_id`) REFERENCES `centers` (`id`),
  ADD CONSTRAINT `FK_130` FOREIGN KEY (`qualification_id`) REFERENCES `qualifications` (`id`),
  ADD CONSTRAINT `FK_137` FOREIGN KEY (`army_id`) REFERENCES `army` (`id`),
  ADD CONSTRAINT `FK_144` FOREIGN KEY (`squad_id`) REFERENCES `squads` (`id`),
  ADD CONSTRAINT `FK_152` FOREIGN KEY (`dapartment_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `FK_159` FOREIGN KEY (`coming_from`) REFERENCES `organizations` (`id`),
  ADD CONSTRAINT `FK_165` FOREIGN KEY (`going_to`) REFERENCES `organizations` (`id`),
  ADD CONSTRAINT `FK_172` FOREIGN KEY (`payment_state_id`) REFERENCES `payment_state` (`id`),
  ADD CONSTRAINT `FK_87` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `FK_95` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`);

--
-- Constraints for table `student_finance`
--
ALTER TABLE `student_finance`
  ADD CONSTRAINT `FK_336` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `FK_350` FOREIGN KEY (`finance_id`) REFERENCES `finance` (`id`);

--
-- Constraints for table `student_phones`
--
ALTER TABLE `student_phones`
  ADD CONSTRAINT `FK_123` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `FK_229` FOREIGN KEY (`squad_id`) REFERENCES `squads` (`id`),
  ADD CONSTRAINT `FK_232` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `FK_255` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_381` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `users_phones`
--
ALTER TABLE `users_phones`
  ADD CONSTRAINT `FK_374` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
